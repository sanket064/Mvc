
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table">
                <thead>
                    <tr>
                        <th>Ticket</th>
                        <th>Quantity</th>
                        <th>Increase</th>
                        <th class="text-center">Decrease</th>
                        <th class="text-center">Price</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tr></tr> 
        <?php
        foreach($_SESSION["arrCart"] as $ticket )
          {
            ?>
                <tbody>
                        <td class="col-sm-8 col-md-3">
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?=$ticket["name"]?></a></h4>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
  
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1">
                          <div>
                    <?=$ticket["currentQty"]?>
                          </div>
                        </td>
                        <td class="col-sm-1 col-md-1">
                        <a href="index.php?controller=cart&action=addtocart&ticketid=<?=$ticket['id']?>"><i class="fas fa-plus"></i></a>
                        </td>
                        <td class="col-sm-1 col-md-1" >
                        <a href="index.php?controller=cart&action=reduce&ticketid=<?=$ticket['id']?>"><i class="fas fa-minus"></i></a>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$<?=$ticket["price"]?></strong></td>
                        <td class="col-sm-1 col-md-1">
                        <a href="index.php?controller=cart&action=remove&ticketid=<?=$ticket['id']?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>
                        <?php
        }
      ?>
                    </tr>

                    <tr>
                        <td>.</td>
                        <td>.</td>
                        <td>.</td>
                        <td>.</td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>$<?=ShoppingCart::getBillTotal()?></strong></h3></td>
                    </tr>
                    <tr>
                    <td>.</td>
                        <td>.</td>
                        <td>.</td>
                        <td>.</td>
                        <td>
                        <a href="index.php?controller=pages&action=main" class="btn btn-primary mt-3" role="button"><i class="fa fa-shopping-cart"></i> Continue Shopping</a>
      </td>
      <td>
      <a href="index.php?controller=cart&action=checkout" class="btn btn-success mt-3" role="button"> Checkout <i class="glyphicon glyphicon-play"></i></a></td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>