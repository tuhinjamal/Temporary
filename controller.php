<?php
session_start();
define('DB_SERVER','cdm1s48crk8itlnr.cbetxkdyhwsb.us-east-1.rds.amazonaws.com	');
define('DB_USER','tyb8p1r3f0u6ijib	');
define('DB_PASS' ,'huo3dflpy7je0iut');
define('DB_NAME', 'l55yny9307t23wwe	');
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
