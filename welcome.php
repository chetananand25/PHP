<html>
<head>
<title>testing web server</title>
</head>
<body bgcolor="skyblue">
</body>
</html>
<?php

session_start();
if(isset($_SESSION['username']))
{
	echo "<p align='right'><a href ='logout.php'>log out</a></p>";
	echo "<p align='right'>WELCOME TO ".$_SESSION["username"]."</p>";

	if(time()>=$_SESSION['end'])
	{
		session_destroy();
		header("location:login.php");
		
	}
}
?>