<?php
include("123_connect/config.php");

$strImage = $_POST["old_Image"];
if($_FILES["strImage"]["name"]!=""){
  $strImage = $_FILES['strImage']['name'];
  move_uploaded_file($_FILES['strImage']['tmp_name'], "../assets/".$strImage);
}
if($_POST["ticketID"]!=""){
  $sql = "UPDATE tickets SET 
  strName=\"{$_POST["strName"]}\",
  strDate=\"{$_POST["strDate"]}\",
  strTime=\"{$_POST["strTime"]}\",
  strDescription=\"{$_POST["strDescription"]}\",
  strLocation=\"{$_POST["strLocation"]}\",
  nQuantity=\"{$_POST["nQuantity"]}\",
  nPrice=\"{$_POST["nPrice"]}\",
  strImage=\"{$strImage}\",
  nCategoryID=\"{$_POST["nCategoryID"]}\" 
  WHERE 
  id=\"{$_POST["ticketID"]}\"";

  ConnectToDB::con()->query($sql);
  $verb = "Updated";
}else{
  $sql = "INSERT INTO tickets
  (strName,
  strDate,
  strTime,
  strDescription,
  strLocation,
  nQuantity,
  nPrice,
  strImage,
  nCategoryID
  ) VALUES (
    \"{$_POST["strName"]}\",
    \"{$_POST["strDate"]}\",
    \"{$_POST["strTime"]}\",
    \"{$_POST["strDescription"]}\",
    \"{$_POST["strLocation"]}\",
    \"{$_POST["nQuantity"]}\",
    \"{$_POST["nPrice"]}\",
    \"{$strImage}\",
    \"{$_POST["nCategoryID"]}\"
  )";


  ConnectToDB::con()->query($sql);
  $verb = "Created";
}

header("location: ticket.php?success=true&verb=$verb");
?>