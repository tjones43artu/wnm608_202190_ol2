<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "meta.php"; ?>
</head>
<body>

	<?php include 'parts/navbar.php';?>

  <div class="container">
  	<div>
  		<h2>Product Lists</h2>

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
  
</body>
<?php include 'parts/footer.php';?>

</html>