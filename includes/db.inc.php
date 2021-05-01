<?php
$servername = "sql106.epizy.com";
$username = "epiz_27766545";
$password = "n63rgOPGcMm";
$db = "epiz_27766545_oes";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully<br>";
?>
