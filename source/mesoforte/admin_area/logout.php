<?php
// Here we are setting the session on
session_start();
// Now we are destroying the session to end the user
session_destroy();
// Redirect to the login page:
header('Location: index.php');
?>