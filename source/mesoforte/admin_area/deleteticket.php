<?php
include("123_connect/config.php");
$sql = "DELETE FROM tickets WHERE id=\"{$_GET['ticketID']}\"";
ConnectToDB::con()->query($sql);
header("location: ticket.php?success=true&verb=deleted");
?>