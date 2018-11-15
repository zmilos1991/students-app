<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "studentsdb";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);
if(!$conn){
	die("Connection lost!");
}


?>