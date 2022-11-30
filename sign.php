<?php 
Include 'connecting.php';
     $name=$_POST['name'];
     $user=$_POST['uname'];
     $pnm=$_POST["pname"];
     $email=$_POST["emailid"];
     $mob=$_POST["mobile"];
     $pan=$_POST["pann"];
$sql="INSERT INTO nameusername(name,username,password,email,mobile,pan) VALUES('$name','$user','$pnm','$email','$mob','$pan')";
$result=mysqli_query($con,$sql);
if($result=="true"){
 echo "<center><h2>Submitted successfully..</h2></center>";
}
else{
 echo "<center><h2>Not submitted..</h2></center>";
}
?>