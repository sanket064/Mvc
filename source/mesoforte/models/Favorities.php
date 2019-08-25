<?php
Class Favorities
{
	public function __construct($arrData)
	{
    $this->id = $arrData["id"];
    $this->ticketid = $arrData["nTicketID"];
    $this->userid = $arrData["nUserID"];
	}
	public static function getFavs($userid)
	{
    $results = mysqli_query(Db::connect(), "SELECT * FROM favorites  LEFT JOIN tickets ON tickets.id = favorites.nTicketID WHERE nUserID='".$userid."'");
    $arrTickets = null;
		while($record = mysqli_fetch_assoc($results))
		{
      $arrTickets[] = new Ticket($record);
    }
    return $arrTickets;
	}
  public static function addFav()
  {
    $ticketid = $_GET['ticketid'];
    $userid = $_SESSION['userID'];
    $sql = "INSERT INTO favorites 
    ( nTicketID,
      nUserID
    ) VALUES (
      '".$ticketid."',
      '".$userid."'
    )";
    $con = Db::connect();
    $result = mysqli_query($con, $sql); 
    header("Location: index.php?controller=pages&action=showfavs");
  }
  public static function removeFav($ticketid)
  {
    $id = $_GET['ticketid'];
    $remove = mysqli_query(Db::connect(), "DELETE FROM favorites WHERE nTicketID = '".$ticketid."' ");
    unset($_SESSION["arrFavs"][$ticketid]);
    header("Location: index.php?controller=pages&action=showfavs");
  }
}

