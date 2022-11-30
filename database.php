<?php 
$con=new mysqli("localhost","newdb");
$name=$_POST['name'];
$gender=$_POST['gender'];
$sql="INSERT INTO namegender(name,gender) VALUES('$name','$gender')";
$result=mysqli_query($con,$sql);
if($result=="true"){
 echo "<center><h2>Submitted successfully..</h2></center>";
}
else{
 echo "<center><h2>Not submitted..</h2></center>";
}


?>