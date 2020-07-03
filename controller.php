<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
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