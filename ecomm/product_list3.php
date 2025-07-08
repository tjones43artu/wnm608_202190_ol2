<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<?php include "meta.php"; ?>
</head>

<body>
<?php include 'parts/navbar.php';?>
  <header>
        <h1>Our Products</h1>
    </header>
    <div class="card soft">
    	<div class="grid-container">
        <div class="figure">

          <!--ul>-->
      <ul>
        <li><a href="product_item.php]">Product 1</a></li>
        <li><a href="product_item.php]">Product 2</a></li>
        <li><a href="product_item.php]">Product 3</a></li>
        <li><a href="product_item.php]">Product 4</a></li>
      </ul>

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
<?php

            while($row = $result->fetch_object()) {
            echo "<div>$row->price;</div>";
}


            ?>
        </div>
       </div>

     </div>
<?php include 'parts/footer.php';?>
</body>

</html>

