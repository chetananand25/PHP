<?php
Include 'connecting.php';
$unm=$_POST["uname"];
$pass=$_POST["pname"];

$sql_l= "SELECT * FROM `nameusername` Where username='$unm'";
$rs=mysqli_query($con,$sql_l);

if($result=mysqli_fetch_array($rs))
{
if($result["password"]==$pass)
echo "<center><h2>Login successfully</h2></center>"; 
else
echo "<center><h2>invalid password ..</h2></center>";
}
else{
echo "<center><h2> invalid username..</h2></center>";
}
?>
