<?php

Class Ticket
{
	public function __construct($arrData)
	{
		$this->id = $arrData["id"];
		$this->name = $arrData["strName"];
		$this->date = $arrData["strDate"];
		$this->time = $arrData["strTime"];
		$this->description = $arrData["strDescription"];
		$this->price = $arrData["nPrice"];
		$this->Image = $arrData["strImage"];
		$this->location = $arrData["strLocation"];
		$this->quantity = $arrData["nQuantity"];
	}

	static public function get($ticketid)
	{
		// goto the database and get my product by id
		$results = mysqli_query(Db::connect(), "SELECT * FROM tickets WHERE id='".$ticketid."'");
		$arrRecord = mysqli_fetch_assoc($results);
		return new Ticket($arrRecord);
	}
}
