<?php 
$con=new mysqli("0.0.0.0","root","root","newdb1");
     $name=$_POST['name'];
     $dob=$_POST["dname"];
     $email=$_POST["ename"];
     $mob=$_POST["mob"];
     $aadhar=$_POST["ano"];
     $gender=$_POST["gen"];
     $add=$_POST["adress"];
     $city=$_POST["cname"];
     $pincode=$_POST["pin"];
     $state=$_POST["sname"];
     $country=$_POST["country"];
   
$sql="INSERT INTO namestudent(name,dob,mobile,aadhar,gender,address,city,pincode,state,country) VALUES('$name','$dob','$mob','$aadhar','$gender','$add','$city','$pincode','$state','$country')";
$result=mysqli_query($con,$sql);
if($result=="true"){
 echo "<center><h2>Submitted successfully..</h2></center>";
}
else{
 echo "<center><h2>Not submitted..</h2></center>";
}
?>