<div class="col-xl-12 mt-5 mb-5">
  <h1 class="align-middle new-size"><?=Poster::getTickets()?></h1>
</div>

<div class="container-fluid">
  <?php 
		foreach($this->arrCat as $ticket){
      if($ticket->quantity == 0){
			?>
<div class="container mt-5">
  <div class="product">
    <div class="img-container">
    <img src="assets/<?=$ticket->Image?>">
    </div>
    <div class="product-info">
      <div class="product-content">
        <h1 class="new-color"><?=$ticket->name?></h1>

        <img class="No-more  mt-5" src="assets/soldout.png" alt="sold out">

        <div class="buttons mt-5">
        <a href="#" class="btn btn-info" role="button"><i class="fa fa-shopping-cart"></i> Book Now</a>
        <a href="#" class="btn btn-info" role="button"><i class="fa fa-heart"></i> ADD TO WISHLIST</a>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
      <?php
      }else{ 

      ?>
      <div class="container mt-5">
  <div class="product">
    <div class="img-container">
    <img src="assets/<?=$ticket->Image?>">
    </div>
    <div class="product-info">
      <div class="product-content">
        <h1 class="new-color"><?=$ticket->name?></h1>
        <ul>
          <li>Location:- <?=$ticket->location?></li>
          <li>Date:- <?=$ticket->date?></li>
          <li>Time:- <?=$ticket->time?></li>
        </ul>
        <div class="buttons mt-5">
        <a href="index.php?controller=pages&action=showticket&ticketid=<?=$ticket->id?>" class="btn btn-info" role="button"><i class="fa fa-shopping-cart"></i> Book Now</a>
        <a href="index.php?controller=pages&action=addfavs&ticketid=<?=$ticket->id?>" class="btn btn-info" role="button"><i class="fa fa-heart"></i> ADD TO WISHLIST</a>
        </div>
      </div>
    </div>
  </div>
</div>
         			<?php
      }
    }
		?>
