<?php
include("123_connect/config.php");
$sql = "DELETE FROM invoices WHERE id=\"{$_GET['invoiceID']}\"";
ConnectToDB::con()->query($sql);
header("location: invoices.php?success=true&verb=deleted");
?>