<!--Hier is de databaseconnect-->
<?php
	$dbserver = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "spel";

	$conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname);
	
?>