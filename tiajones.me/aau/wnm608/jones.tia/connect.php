<?php

$servername = "localhost";
$username = "tjones608";
$password = "pickupthepace";
$db_name = "products";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>