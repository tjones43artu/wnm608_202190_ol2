<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "meta.php"; ?>
</head>
<body>

	<?php include 'parts/navbar.php';?>

  <div>
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
  		$pass =  "";
  		$database = "IXD608shopproducts";

  		$conn = new mysqli($host,$user,$pass,$database);

  		if($conn->connect_errno) die($conn->connect_errno);

  		$result = $conn->query("SELECT * FROM `products`");

  		if($conn->errno) die($conn->errno);

  		while($row = $result->fetch_object()) {
  			echo ("$row->price");
  		}

  		?>
  		
  	</div>
  	</div>
  
</body>
<?php include 'parts/footer.php';?>

</html>
