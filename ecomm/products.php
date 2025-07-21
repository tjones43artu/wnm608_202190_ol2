<?php
$servername = "localhost";
$username = "IXD608shopproducts";
$password = "IXD608shopproducts";
$dbname = "IXD608shopproducts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, price, thumbnail FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Products</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="lib/css/styleguide.css">
    <link rel="stylesheet" href="lib/css/gridsystem.css">
    <link rel="stylesheet" href="css/storetheme.css">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

</head>

<body>

<?php include 'parts/navbar.php';?>

<div class="view-window" style="background-image:url(img/junel-mujar-51jzoz1dsro-unsplash.jpg);">
    <h1 style="text-align:center; color: white; margin-top: 125px;" >Our Products</h1>
</div>

    <div class="product-container">
        <?php

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<img src='img/*.png'" . $row["thumbnail"] . "' alt='" . $row["name"] . "'>";
                echo "<h2>" . $row["name"] . "</h2>";
                echo "<p>Price: $" . $row["price"] . "</p>";
                echo '<button>Add to Cart</button>';
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
</body>
<footer class="navbar">

<style>
  footer {
    position: relative;
    bottom: 0;
    width: 100%;
    height: 5%;
    padding: 10px;
  }
</style>

  <div class="container">
  <p>Oceanic Winds. All rights reserved.</p>
  </div>
</footer>
</html>
