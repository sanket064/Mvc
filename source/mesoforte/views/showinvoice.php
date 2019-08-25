<div id="shoppingcart">

	<h1>Your Invoice Is Below</h1>

	<?php
print_r($this->arrInvoiceDetails);
?>
	<p><strong>Customer Name: </strong>
		<?=$this->arrInvoiceDetails["strFullName"]?>
	</p>
		<p><strong>Customer Email: </strong>
		<?=$this->arrInvoiceDetails["strEmail"]?>
	</p>
      <p><strong>Price: </strong>
    <?=$this->arrInvoiceDetails["nPrice"]?>
	</p>
	<div class="my-5">
	<?php

while($record = mysqli_fetch_assoc($this->arrInvoiceItems))
{
// create a product object here...
$invoice_product_id = $record['nTicketID'];
$invoice_qty = $record['nQuantity'];
$invoice_price = $record['nPrice'];

$con = ConnectToDB::con();
$sql = "SELECT * FROM tickets WHERE id = {$nTicketID}";
$productsPurchased = mysqli_fetch_assoc(mysqli_query($con, $sql));
?>

	<ul class="list-group list-group-flush">
			<li class="list-group-item"><img src="assets/<?= $productsPurchased['strName']; ?>"
							alt="<?= $productsPurchased['strName']; ?>" width="100"></li>
			<li class="list-group-item"><?= $productsPurchased['strTime']; ?></li>
			<li class="list-group-item"><strong>Quantity: </strong><?= $invoice_qty; ?></li>
			<li class="list-group-item"><strong>Cost per product: </strong>$<?= $invoice_price; ?></li>
	</ul>

	<?php
}

?>
	</div>

	<a href="index.php?controller=pages&action=main" class="btn btn-primary mt-3" role="button"><i class="fa fa-shopping-cart"></i> Continue Shopping</a>
	</div>