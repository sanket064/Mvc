<?php

Class Pages extends Controller {

  public function __construct(){}

  public function form(){

    $this->mainbody .= $this->loadView("login");
    include("views/template.php");
  }  

  public function main(){
    
    $this->mainbody .= $this->loadView("header");
    $this->arrCats = Categories::getAll();
    $this->mainbody .= $this->loadView("navbar");
    $this->arrTickets = Tickets::getAll();
    $this->mainbody .= $this->loadView("all-tickets");
    $this->mainbody .= $this->loadView("footer");

    include("views/template.php");
  }

  public function eventsInCat()
	{
		$this->arrCat = Category::get($_GET["catid"]); 
    $this->arrCats = Categories::getAll();
    $this->mainbody .= $this->loadView("header");
    $this->mainbody .= $this->loadView("navbar");
    $this->arrCat =  Tickets::getInCat($_GET["catid"]);
    $this->mainbody .= $this->loadView("ticket-category");
    $this->arrCat = Tickets::getInCat($_GET["catid"]);
    $this->mainbody .= $this->loadView("footer");
		include("views/template.php");
	}

  public function showticket()
	{

    $this->mainbody .= $this->loadView("header");
    $this->arrCats = Categories::getAll();
    $this->mainbody .= $this->loadView("navbar");
		$this->arrTickets = Ticket::get($_GET["ticketid"]);
    $this->mainbody .= $this->loadView("all-ticket-page");
    $this->mainbody .= $this->loadView("footer");
		include("views/template.php");
  }
  
  public function showfavs()
  {
    $this->arrFavs = Favorities::getFavs(isset($_GET["userid"]));
    $this->mainbody .= $this->loadView("header");

    $this->mainbody .= $this->loadView("wishlist");
    $this->arrCats = Categories::getAll();
    $this->mainbody .= $this->loadView("footer");

    include("views/template.php");
  }

  public function addfavs()
  {
    $this->arrFavs = Favorities::addFav(isset($_GET["ticketid"]));
  }

  public function removefavs()
  {
    $this->arrFavs = Favorities::removeFav($_GET["ticketid"]);
  }
}

?>