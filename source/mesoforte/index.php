<?php
session_start();

$_SESSION["arrCart"] = (isset($_SESSION["arrCart"])) ? $_SESSION["arrCart"]:array();
$_SESSION["arrFavs"] = (isset($_SESSION["arrFavs"])) ? $_SESSION["arrFavs"]:array();

include("libs/connect.php");
include("controllers/controller.php");
include("controllers/pages.php");
include("controllers/cart.php");
include("models/Model.php");
include("models/Invoices.php");
include("models/ShoppingCart.php");
include("models/Favorities.php");
include("models/Tickets.php");
include("models/Ticket.php");
include("models/Categories.php");
include("models/Category.php");
include("models/Poster.php");
// Checking if controller/ action exists... 
if (isset($_POST["controller"])) {
	$_GET["controller"] = $_POST["controller"];
}
if (isset($_POST["action"])) {
	$_GET["action"] =  $_POST["action"];
}
if (isset($_POST["userID"])) {
	$_GET["userID"] =  $_POST["userID"];
}

$controller = (isset($_GET["controller"])) ? $_GET["controller"] : "pages";
$action = (isset($_GET["action"])) ? $_GET["action"] : "form";
$user = (isset($_GET["userID"])) ? $_GET["userID"] : "1";

// Creating a controller
$controller = ucfirst($controller); 
// Making Everything uppercase
$oCon = new $controller();

if (method_exists($oCon, $action))
{
	$oCon->$action();
} else {
	echo "action $action not found in $controller";
	die;
}
?>


