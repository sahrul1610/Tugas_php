<?php
$servername = "localhost";
$username = "";
$password = "password";
$database = "db_toko_sahrul"

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>