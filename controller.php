<?php
session_start();
define('DB_SERVER','	d9c88q3e09w6fdb2.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('DB_USER','	p9wewa98seoq61h7');
define('DB_PASS' ,'	v7egttnixs1moltw');
define('DB_NAME', 'hadith');
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
