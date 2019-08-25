<?php
Class Db{
  public static function connect(){
    $connection = parse_ini_file("../../config.ini");
    $connect = mysqli_connect( $connection['server'], $connection['user'], $connection['pass'], $connection['db'] ); 
    return $connect;
    $oDb = new Db($connect);
    return $oDb;    
  }
}
$con = dB::connect();
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['Username'], $_POST['Password'], $_POST['Email'])) {
	// Could not get the data that should have been sent.
	die ('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['Username']) || empty($_POST['Password']) || empty($_POST['Email'])) {
	// One or more values are empty.
	die ('Please complete the registration form');
}
if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
	die ('Email is not valid!');
}
if (preg_match('/[A-Za-z0-9]+/', $_POST['Username']) == 0) {
  die ('Username is not valid!');
}
if (strlen($_POST['Password']) > 20 || strlen($_POST['Password']) < 5) {
	die ('Password must be between 5 and 20 characters long!');
}
// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT id, Password FROM users WHERE Username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['Username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Username exists, please choose another!';
	} else {
		// Username doesnt exists, insert new account
if ($stmt = $con->prepare('INSERT INTO users (Username, Password, Email) VALUES (?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
	$stmt->bind_param('sss', $_POST['Username'], $password, $_POST['Email']);
	$stmt->execute();
	echo 'You have successfully registered, you can now login!';
} else {
	// Something is wrong with the sql statement, check to make sure users table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure users table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();
?>