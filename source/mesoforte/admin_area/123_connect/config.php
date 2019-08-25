<?php
Class ConnectToDB {
// connect to DB
// static function is to call function elsewhere without creating an instance of the object/class
    var $connect;
    public function __construct($connect){
        $this->con = $connect;
    }

    static function con() {
        
// Change this to your connection info.
$DATABASE_HOST = '192.185.103.167';
$DATABASE_USER = 'sanket06_mike';
$DATABASE_PASS = 'Mike@02';
$DATABASE_NAME = 'sanket06_concert';
// Try and connect using the info above.
$connect = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$msg = 'please check you database connection';
if (mysqli_connect_error()) {
  // If there is an error with the connection, stop the script and display the error.
  die ('Failed to connect to MySQL: ' . $msg);
}
return $connect;
$oDb = new ConnectToDB($connect);
return $oDb;
}
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
}
function getRecords($sql)
{
  $con = ConnectToDB::con();
  $result = mysqli_query($con, $sql); // returns a result OBJECT mysqli_query
  return $result; // this is a result object, WITH ALL THE ROWS INSIDE... 
}
function getTicket($id)
{
  $con = ConnectToDB::con();
  $result = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM tickets WHERE id='".$id."'")); // returns a result OBJECT mysqli_query JUST return the first record

  return $result; // this is a result object, WITH ALL THE ROWS INSIDE... 
}
?>