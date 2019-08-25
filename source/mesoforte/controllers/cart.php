<?php

Class Cart extends Controller {

	public function addtocart()
	{
			ShoppingCart::addItem($_GET["ticketid"]);
			header("location: index.php?controller=cart&action=show");
	}
	public function reduce()
	{
		ShoppingCart::less($_GET["ticketid"]);
		header("location: index.php?controller=cart&action=show");
	}

	public function remove()
	{
			ShoppingCart::removeItem($_GET["ticketid"]);
			header("location: index.php?controller=cart&action=show");
	}



	public function show()
	{
		$this->arrCats = Categories::getAll();
		$this->mainbody .= $this->loadView("header");
    $this->mainbody .= $this->loadView("navbar");
		$this->mainbody .= $this->loadView("shopping");
		$this->mainbody .= $this->loadView("footer2");

		include("views/template.php");
	}

	
  public function checkout()
  {
    // Doing Checkout Here
    $this->arrCats = Categories::getAll();  
    $this->mainbody .= $this->loadView("header");
    $this->mainbody .= $this->loadView("navbar");
    $this->mainbody .= $this->loadView("paymentform");
    $this->mainbody .= $this->loadView("footer2");

    include("views/template.php");
  }

  public function completeorder()
  {
    ShoppingCart::checkoutCart();

    $this->arrCats = Categories::getAll();  
    $this->nav = $this->loadView("mainnav");


    $this->mainbody = $this->loadView("thankyou");
    include("views/template2.php");

  }

  public function showInvoice()
  {
    $this->arrInvoiceDetails = Invoices::getoc(isset($_GET["invoicenumber"]));
		$this->arrInvoiceItems = ShoppingCart::getOrderItems($this->arrInvoiceDetails["id"]);
    $this->arrCats = Categories::getAll();  
    $this->nav = $this->loadView("mainnav");
    $this->mainbody .= $this->loadView("header");
    $this->mainbody .= $this->loadView("navbar");
    $this->mainbody .= $this->loadView("showinvoice");
    $this->mainbody .= $this->loadView("footer");
    include("views/template.php");

  }

	public function main(){
    $this->arrCats = Categories::getAll();  
    $this->mainbody .= $this->loadView("header");
    $this->mainbody .= $this->loadView("navbar");
    $this->mainbody .= $this->loadView("footer2");

    include("views/template2.php");
	}

}

?>