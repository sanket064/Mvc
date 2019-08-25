<?php

Class ShoppingCart 
{

  static public function addItem($ticketid)
  {

    // this adds to my cart...
    // i know i have a product by thisid already...
    if (isset($_SESSION["arrCart"][$ticketid]))
    {
      // go and get the qty for this from my session
      $_SESSION["arrCart"][$ticketid]["currentQty"]++;

    } else{
      $_SESSION["arrCart"][$ticketid] = (Array)Ticket::get($ticketid);
      $_SESSION["arrCart"][$ticketid]["currentQty"] = 1;
    }
    
            
  }

  static public function updateQty($ticketid, $newqty)
  {
      $_SESSION["arrCart"][$ticketid]["currentQty"] = $newqty;
  }

  static public function removeItem($ticketid)
  {

    // because i have an item by this ticketid index in my array i can unset it in the session
    unset($_SESSION["arrCart"][$ticketid]);			
            
  }


  static public function less($ticketid)
  {
    if($_SESSION["arrCart"][$ticketid]["currentQty"] == 0){
      unset($_SESSION["arrCart"][$ticketid]);
    }else{
      $_SESSION["arrCart"][$ticketid]["currentQty"]--;
    }
  }
  static public function getBillTotal(){
    $totalInvoicePrice = 0;
    foreach($_SESSION["arrCart"] as $ticket ){
      
    $totalInvoicePrice = $totalInvoicePrice + ($ticket["price"] * $ticket["currentQty"]);
    }
    return  $totalInvoicePrice;
  }
    static public function checkoutCart()
    {
      // generate a random number for my order number...
      $invoiceNumber = date("Ymd").mt_rand(10000,1000000000);
      $dateTime = date("Y-m-d h:i:s");

      $con = Db::connect();
      mysqli_query($con, "
        INSERT INTO invoices 
          (
            nInvoiceNumber, 
            dateOrdered,
            strFullName,
            nPrice,
            strEmail,
            strCardNumber

        ) VALUES (
          '".$invoiceNumber."',
          '".$dateTime."',
          '".$_POST['customerName']."',
          '".ShoppingCart::getBillTotal()."',
          '".$_POST['emailAddress']."',
          '".$_POST['cardnumber']."'

        )");


        $invoiceID =  mysqli_insert_id($con);
        
        foreach($_SESSION["arrCart"] as $ticket) {
          mysqli_query($con, "INSERT INTO invoices_tickets (nInvoiceID, nTicketID, nQuantity, nPrice) VALUES ('".$invoiceID."', '".$ticket["id"]."', '".$ticket["currentQty"]."', '".$ticket["price"]."')");

          mysqli_query($con, "UPDATE tickets SET nQuantity = nQuantity - '".$ticket["currentQty"]."' WHERE id = '".$ticket["id"]."' AND nQuantity > 0");
        };
        					

      $msg = "Hey, thanks for your order, click this link to view your order: http://sankettech.com/mesoforte/source/mesoforte/index.php?controller=cart&action=showInvoice&nInvoiceNumber=".$invoiceNumber;


      mail($_POST['emailAddress'], "Your ticket for the concert", $msg);

      // empty the cart...
      $_SESSION["arrCart"] = array();
      return $invoiceNumber;

    }

		static public function getOrder()
		{
				$invoiceNumber = $_GET["nInvoiceNumber"];

				///
				$invoice = mysqli_fetch_assoc(mysqli_query(Db::Connect(), "SELECT * FROM invoices WHERE nInvoiceNumber='".$invoiceNumber."'"));

				return $invoice;


		}




		static public function getOrderItems($invoiceID)
		{
				$invoiceNumber = $_GET["nInvoiceNumber"];
				$query = "SELECT * FROM invoices_tickets WHERE nInvoiceID='".$invoiceID."'";
				///should have done a left join to get the products name
				$orderitems = mysqli_query(Db::Connect(), $query);
				
				return $orderitems;


		}

}

