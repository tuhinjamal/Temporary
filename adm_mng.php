<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("cdm1s48crk8itlnr.cbetxkdyhwsb.us-east-1.rds.amazonaws.com	", "	tyb8p1r3f0u6ijib", "	huo3dflpy7je0iut", "hadith");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$hadith = mysqli_real_escape_string($link, $_REQUEST['hadith']);
$reference = mysqli_real_escape_string($link, $_REQUEST['reference']);
$translation = mysqli_real_escape_string($link, $_REQUEST['translation']);
 
// Attempt insert query execution
$sql = "INSERT INTO tbl_hadith (title, hadith, reference,translation) VALUES ('$title', '$hadith', '$reference','translation')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
