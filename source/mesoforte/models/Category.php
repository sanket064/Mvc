<?php

Class Category
{
	public function __construct($arrData)
	{
		$this->id = $arrData["id"];
		$this->name = $arrData["Name"];
	}

	public static function get($catid)
	{
		$results = mysqli_query(Db::connect(), "SELECT * FROM categories WHERE id='".$catid."'");
		return new Category(mysqli_fetch_assoc($results));
	}

}

