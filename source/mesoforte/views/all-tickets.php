<?php 
		foreach($this->arrTickets as $ticket){
      if($ticket->nQuantity == 0){
        ?>
        <div class="big-wrapper mt-5">
        <div class="col-md-4 mt-5">
              <div class="thumbnail">
                <img src="assets/<?=$ticket->strImage?>" alt="" class="img-responsive" data-toggle="modal" data-target="#product_view<?=$ticket->id?>">
                <div class="caption">
                <h4 class="pull-right"><a href="#">$<?=$ticket->nPrice?></a></h4>
                  <h4><a href="#"><?=$ticket->strName?></a></h4>
                </div>
                <div class="ratings">
                  <p class="align-middle">
                  <img class="No-more" src="assets/soldout.png" alt="sold">
                  </p>
                </div>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">
                <a href="index.php?controller=pages&action=addfavs&ticketid=<?=$ticket->id?>" class="btn btn-info" role="button"><i class="fa fa-shopping-cart"></i> Book Now</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view<?=$ticket->id?>"><i class="fa fa-search"></i> Quick View</button>
                    <a href="index.php?controller=pages&action=main" class="btn btn-info" role="button"><i class="fa fa-heart"></i> ADD TO WISHLIST</a>
                </div>
                <div class="space-ten mb-5"></div>
              </div>
            </div>
    </div>
    <div class="modal fade product_view" id="product_view<?=$ticket->id?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title">Don't Miss The Chance To Buy Awaesome Tickets </h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="assets/<?=$ticket->strImage?>" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4><?=$ticket->strName?></h4>
                        <p><?=$ticket->strDescription?></p>
                        <h3 class="cost"><span class="glyphicon glyphicon-usd"></span><?=$ticket->nPrice?></h3>
                        <div class="space-ten"></div>
                        <div class="btn-ground">
                        <img class="No-more" src="assets/soldout.png" alt="sold">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
      }else{ 
      ?>
              <div class="big-wrapper mt-5">
        <div class="col-md-4 mt-5">
              <div class="thumbnail">
                <img src="assets/<?=$ticket->strImage?>" alt="" class="img-responsive" data-toggle="modal" data-target="#product_view<?=$ticket->id?>">
                <div class="caption">
                  <h4 class="pull-right"><a href="#">$<?=$ticket->nPrice?></a></h4>
                  <h4><a href="#"><?=$ticket->strName?></a></h4>
                  <h4 class="pull-right"><?=$ticket->strTime?></h4>
                  <p>Date:- <?=$ticket->strDate?></p>
                </div>
                <div class="ratings mt-5">
                </div>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">
                <a href="index.php?controller=pages&action=showticket&ticketid=<?=$ticket->id?>" class="btn btn-info" role="button"><i class="fa fa-shopping-cart"></i> Book Now</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view<?=$ticket->id?>"><i class="fa fa-search"></i> Quick View</button>
                    <a href="index.php?controller=pages&action=addfavs&ticketid=<?=$ticket->id?>" class="btn btn-info" role="button"><i class="fa fa-heart"></i> ADD TO WISHLIST</a>
                </div>
                <div class="space-ten mb-5"></div>
              </div>
            </div>
    </div>

    <div class="modal fade product_view" id="product_view<?=$ticket->id?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title">Don't Miss The Chance To Buy Awaesome Tickets </h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="assets/<?=$ticket->strImage?>" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4><?=$ticket->strName?></h4>
                        <p><?=$ticket->strDescription?></p>
                        <h3 class="cost"><span class="glyphicon glyphicon-usd"></span><?=$ticket->nPrice?></h3>
                        <div class="space-ten"></div>
                        <div class="btn-ground">
                        <a href="index.php?controller=pages&action=showticket&ticketid=<?=$ticket->id?>" class="btn btn-info" role="button"><i class="fa fa-shopping-cart"></i> Book Now</a>
                        <i href="index.php?controller=pages&action=addfavs&ticketid=<?=$ticket->id?>" class="btn btn-info" role="button"><i class="fa fa-heart"></i> ADD TO WISHLIST</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   			<?php
      }
    }
		?>
