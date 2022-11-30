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

$sql =  "SELECT ID, Name, City FROM `database`";
$result =mysqli_query($connection,$sql);
//fetch tha data from the database l
while ($row= mysqli_fetch_array($result)) 

{
 echo "ID:" .$row{'ID'}." Name:".$row{'Name'}." City: ". $row{'City'}."<br>";
}
//close the connection
mysqli_close($connection);

?>
