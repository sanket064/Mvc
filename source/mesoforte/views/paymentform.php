<?php


?>
<div id="shoppingcart">

  <h1>Provide Your Payment Details</h1>
  <h2>Amount to Be Billed: $<?=ShoppingCart::getBillTotal()?></h2>

  <form method="post" action="index.php?controller=cart&action=main">
    
    <input type="hidden" name="controller" value="cart"/>
    <input type="hidden" name="action" value="completeorder"/>
    

    <label>Full Name</label>
    <input type="text" name="customerName" /><br/>

    <label>Email Address</label>
    <input type="text" name="emailAddress" /><br/>

    <label>Card Number</label>
    <input type="text" name="cardnumber" /><br/>

    

    <input type="submit" value="Pay Now!"/>

  </form>
  

</div>
