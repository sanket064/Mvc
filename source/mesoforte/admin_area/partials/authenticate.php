<?php
include("../123_connect/config.php");
$connection = ConnectToDB::con();
session_start();

if ( !isset($_POST['username'], $_POST['password']) ) {
  // Could not get the data that should have been sent.
  die ('Please fill both the username and password field!');
}

// Prepare the sql statement for the sql injection
if ($stmt = $connection->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
  // Bind parameters (s = string, i = int, b = blob, etc),
  $stmt->bind_param('s', $_POST['username']);
  $stmt->execute();
  // Store the result so we can check if the account exists in the database.
  $stmt->store_result();
}

if ($stmt->num_rows > 0) {
  $stmt->bind_result($id, $password);
  $stmt->fetch();
  // Account exists, now we verify the password.
  // now we are using password hashing to check password encryption
  if (password_verify($_POST['password'], $password)) {
    // Verification success! User has loggedin!
    // Create sessions that acts like cookies for storing the information
    session_regenerate_id();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['name'] = $_POST['username'];
    $_SESSION['id'] = $id;
    header('Location: ../dashboard.php');
  } else {
    echo 'Please check your password';
  }
} else {
  echo 'Please check your username';
}
$stmt->close();
?>
