<?php
$servername = "localhost";
$username = "IXD608shopproducts";
$password = "IXD608shopproducts";
$database = "IXD608shopproducts";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>