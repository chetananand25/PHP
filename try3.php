
<?php

$username = "root";
$password = "root";
$hostname = "0.0.0.0"; 
$database="School";
//connection to the mysql database,
$connection= mysqli_connect($hostname, $username, $password,$database)
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//execute the SQL Statement
$sql= " INSERT INTO database(ID,Name)  VALUES ('7336','chetan')";
$result =mysqli_query($connection,$sql);
//fetch tha data from the database l
if($result=="true"){
 echo "<center><h2>Submitted successfully..</h2></center>";
}
else{
 echo "<center><h2>Not submitted..</h2></center>";
}
//close the connection
mysqli_close($connection);

?>
