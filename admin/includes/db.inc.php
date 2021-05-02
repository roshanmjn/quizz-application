<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "oes";
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'? "https" : "http")."://".$_SERVER['HTTP_HOST'];
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully<br>";
?>
