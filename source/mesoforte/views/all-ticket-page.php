<div class="col-xl-12 mt-5 mb-5">
  <h1 class="align-middle new-size">About The Event:-</h1>
</div>
<div class="container mt-5">
  <div class="product">
    <div class="img-container">
    <img src="assets/<?=Tickets::BigImage('ticketid')?>">
    </div>
    <div class="product-info">
      <div class="product-content">
        <h1 class="new-color"><?=$this->arrTickets->name?></h1>
        <p><?=$this->arrTickets->description?></p>
        <ul>
          <li>Location:- <?=$this->arrTickets->location?></li>
          <li>Date:- <?=$this->arrTickets->date?></li>
          <li>Time:- <?=$this->arrTickets->time?></li>
        </ul>
        <div class="buttons mt-5">
        <a href="index.php?controller=cart&action=addtocart&ticketid=<?=$this->arrTickets->id?>" class="btn btn-info" role="button"><i class="fa fa-shopping-cart"></i>Add TO Cart</a>
          <span class="button" id="price">$ <?=$this->arrTickets->price?></span>
        </div>
      </div>
    </div>
  </div>
</div>