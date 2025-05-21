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
          
          $host = "localhost";
          $user = "IXD608shopproducts";
          $pass = "IXD608shopproducts";
          $database = "IXD608shopproducts";

          $conn = new mysqli($host,$user,$pass,$database);

          if($conn->connect_errno) die($connect->connect_error);

          $result = $conn->query("SELECT * FROM `products`");

          if($conn->errno) die($conn->error);

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

