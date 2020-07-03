<?php
session_start();
define('DB_SERVER','pqxt96p7ysz6rn1f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('DB_USER','khmvvjvn2a6mvsql');
define('DB_PASS' ,'t3hvqvrsattnh7nk');
define('DB_NAME', 'mofliuhehoatrusq');
class View
{
 function __construct()
 {
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 }
 public function fetchdata()
 {
 $result=mysqli_query($this->dbh,"SELECT * FROM tbl_hadith WHERE id = 7");
 return $result;
 }
}
?>
