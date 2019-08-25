<?php

Class Db{

	public static function connect(){
		$con = parse_ini_file("../config.ini");
		$connect = mysqli_connect( $con['server'], $con['user'], $con['pass'], $con['db'] ); 
    return $connect;
    $oDb = new Db($connect);
    return $oDb;
	}
}

?>