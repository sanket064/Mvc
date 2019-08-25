<div class="col-xl-12 mt-5 mb-5">
  <h1 class="align-middle new-size">Favourite Tickets:-</h1>
</div>
<div class="container-fluid">
  <?php 
  if (is_array($this->arrFavs) || is_object($this->arrFavs)){
		foreach($this->arrFavs as $arrTickets){
			?>
<div class="container new-height mt-5">
  <div class="product">
    <div class="img-container">
    <img src="assets/<?=$arrTickets->Image?>">
    </div>
    <div class="product-info">
      <div class="product-content">
        <h1 class="new-color"><?=$arrTickets->name?></h1>
        <p><?=$arrTickets->description?></p>
        <ul>
          <li>Location:- <?=$arrTickets->location?></li>
          <li>Date:- <?=$arrTickets->date?></li>
          <li>Time:- <?=$arrTickets->time?></li>
        </ul>
        <div class="buttons mt-5">
        <a href="index.php?controller=cart&action=addtocart&ticketid=<?=$arrTickets->id?>" class="btn btn-info" role="button"><i class="fa fa-shopping-cart"></i>Add TO Cart</a>
        <a href="index.php?controller=pages&action=removefavs&ticketid=<?=$arrTickets->id?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
          <span class="button" id="price">$ <?=$arrTickets->price?></span>
        </div>
      </div>
    </div>
  </div>
</div>
			<?php
    }
  }
	?>
</div>