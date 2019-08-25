<?php

Class Tickets extends Model
{

	public static function getFeatured()
	{
		// this will return an array of products. 
		// Each product AS AN OBJECT!!!
		$results = mysqli_query(Db::connect(), "SELECT * FROM tickets WHERE bFeatured='1'");
		while($record = mysqli_fetch_assoc($results))
		{
			$arrtickets[] = new Ticket($record);
		}
		// randomize our array of products
		shuffle($arrtickets);
		$arrtickets = array_splice($arrtickets,0,3);
		return $arrtickets;
	}

	public static function getAll()
	{
		$results = mysqli_query(Db::connect(), "SELECT * FROM tickets ORDER by id");

		while($record = mysqli_fetch_object($results))
		{
			$arrtickets[] = $record;
		}
		return $arrtickets;
	}

	public static function getInCat($catid)
	{
		// Each Ticket as object
		$catid = filter_var($catid, FILTER_SANITIZE_NUMBER_INT);

		if (!$catid)
		{ 
			echo "Unable to find please check In Tickets.php";
			die;
		}

		$results = mysqli_query(
			Db::connect(),"SELECT * FROM tickets WHERE nCategoryID=$catid");

		while($record = mysqli_fetch_assoc($results))
		{
			$arrPictures[] = new Ticket($record);
		}
		return $arrPictures;
	}

	static public function BigImage()
	{
		$catid = $_GET['ticketid'];
		$result = mysqli_query(Db::connect(), "SELECT strImage FROM tickets WHERE id='".$catid."'");

	 $img = mysqli_fetch_assoc($result);
	 return $img['strImage'];
	}
}

