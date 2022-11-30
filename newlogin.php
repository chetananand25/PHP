<?php 

    include('connecting.php');  
     $user=$_POST['uname'];
     $pass=$_POST["pname"];
$sql="SELECT * FROM namegender WHERE username = $user";
$sql = "select *from nameusername where username = '$user' and password = '$pass'";  
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result)
 if($row["password"]==$pass){
 echo "<center><h2>login successfully..</h2></center>";
}
 else
 echo "<center><h2>invalid password..</h2></center>";
}
?>