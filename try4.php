<?php 
include 'connecting.php';
$name=$_POST['name'];
$fnm=$_POST['fname'];
$dob=$_POST['dob'];
$email=$_POST['emailid'];
$mob=$_POST["mobile"];
$aadhar=$_POST["ano"];
$gender=$_POST["GENDER"];
$add=$_POST["adress"];
$city=$_POST["cname"];
$pincode=$_POST["pin"];
$state=$_POST["sname"];

$country=$_POST["country_n"];

$courc=$POST_["cource"];
$xboard=$POST_["class10thboard"];
$xpersent=$POST_["class10thpersent"];
$xyear=$POST_["class10thyear"];
$xiiboard=$POST_["class12thboard"];
$xiipersent=$POST_["class12thpersent"];
$xiiyear=$POST_["class12thyear"];
$greduationuniv=$POST_["greduation"];
$greduationpersent=$POST_["graduationpersent"];
$greduationyear=$POST_["greduationyear"];
$xmarksheet=$POST_["class10marks"];
$xiimarksheet_["class12marks"];
$gmarksheet=$POST_["greduation_marks"];
$sql="INSERT INTO database1(Name,father,dob,email,mobile,aadhar,gender,address,city,pincode,state,country,cource,X_board,X_persent,X_year,XII_board,XII_persent,XII_year,Greduation_university,Greduation_persent,Greduation_year,X_marksheet, XII_marksheet,Greduation_marksheet) VALUES('$name','$fnm','$dob','$email','$mobile','$aadhar','$gender','$add','$city','$pincode','$state','$country','$courc','$xboard','$xpersent','$xyear','$xiiboard','$xiipersent','$xiiyear','$greduationuniv','$greduationpersent','$greduationyear', '$xmarksheet', '$xiimarksheet','$gmarksheet')";

$result=mysqli_query($con,$sql);
if($result=="true"){
 echo "<center><h2>Submitted successfully..</h2></center>";
}
else{
 echo "<center><h2>Not submitted..</h2></center>";
}
?>