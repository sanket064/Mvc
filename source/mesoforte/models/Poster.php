<?php
class Poster extends Model
{
  public static function getTickets()
	{
		$catid = $_GET['catid'];
		$result = mysqli_query(Db::connect(), "SELECT * FROM categories WHERE id='".$catid."'");

	 $poster = mysqli_fetch_assoc($result);
	 return $poster['Name'];
	 
	}

}



