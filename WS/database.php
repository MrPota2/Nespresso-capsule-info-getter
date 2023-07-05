<?php
$hostName = "192.168.96.2";
$userName = "site";
$password = "pswd"; 
$databaseName = "Nespresso";
$conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$mysqli = $conn
?>