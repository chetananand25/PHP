<?php
$servername="localhost";
$username="root";
$password="";
$database="newdb1";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
die("sorry we failed to connect".mysqli_connect_error());
}
//else{
//echo "<script>alert('connected');</script>";
//s}

?>
