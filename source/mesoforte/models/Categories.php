<?php

Class Categories extends Model
{

	public static function getAll()
	{
		$results = mysqli_query(Db::connect(), "SELECT * FROM categories ORDER by id");

		while($record = mysqli_fetch_assoc($results))
		{
			$arrCategories[] = $record;
		}

		return $arrCategories;
	}

}
