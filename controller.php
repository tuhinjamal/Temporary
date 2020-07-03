<?php
session_start();
define('DB_SERVER','t89yihg12rw77y6f.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('DB_USER','xgroxj3kzk7fi9vd');
define('DB_PASS' ,'krpdw93lq8l2kpfg');
define('DB_NAME', '	nzorqvd2x8jxueng');
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
