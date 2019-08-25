<?php
Class Db{
  public static function connect(){
    $con = parse_ini_file("../../config.ini");
    $connect = mysqli_connect( $con['server'], $con['user'], $con['pass'], $con['db'] ); 
    return $connect;
    $oDb = new Db($connect);
    return $oDb;    
  }
}
$connection = dB::connect();
session_start();

if ( !isset($_POST['Username'], $_POST['Password']) ) {
  // Could not get the data that should have been sent.
  die ('Please fill both the Username and password field!');
}

// Prepare the sql statement for the sql injection
if ($stmt = $connection->prepare('SELECT id, Password FROM users WHERE Username = ?')) {
  // Bind parameters (s = string, i = int, b = blob, etc),
  $stmt->bind_param('s', $_POST['Username']);
  $stmt->execute();
  // Store the result so we can check if the account exists in the database.
  $stmt->store_result();
}

if ($stmt->num_rows > 0) {
  $stmt->bind_result($id, $Password);
  $stmt->fetch();
  // Account exists, now we verify the password.
  // now we are using password hashing to check password encryption
  if (password_verify($_POST['Password'], $Password)) {
    // Verification success! User has loggedin!
    // Create sessions that acts like cookies for storing the information
    session_regenerate_id();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['name'] = $_POST['Username'];
    $_SESSION['id'] = $id;
   header("Location: ../index.php?controller=pages&action=main");
  } else {
    echo 'Please check your password';
  }
} else {
  echo 'Please check your Username';
}
$stmt->close();
?>
