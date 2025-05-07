<?php

  require_once 'connection.php';

  $sql = "SELECT * FROM shop";
  $all_product = $conn->query($sql);


?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

       <?php
          while($row = mysqli_fetch_assoc($all_product)){
		  }?>
       <div class="card soft">
           <div class="image">
               <img src="<?php echo $row["product_image"]; ?>" alt="">
           </div>

	<div class="container">
	 <div class="card soft">
	 	<h2>Product List</h2>
	 	<ul>
	 		<li>
	 			<a href="product_item.php">Oceanic Blend</a>
	 		</li>
	 		<li>
	 			<a href="product_item.php">Atlantic Breeze</a>
	 		</li>
	 		<li>
	 			<a href="product_item.php">Double Chocolate Muffin</a>
	 		</li>
	 		<li>
	 			<a href="product_item.php">Bagels</a>
	 		</li>
	 	</ul>

	 	<?php

	 	$host = "localhost";
	 	$users = "tjones92";
	 	$pass = "chilislawdog1";
	 	$database = "tjones_IXD608";

	 	$conn = new mysqli($host, $user, $pass, $database);

	 	if($conn->connect_errno) die($conn->connect_errno);

	 	$result = $conn->querey("SELECT * FROM 'products'");

	 	if($conn->errno) die($conn->error);

	 	while($row = $result->cubrid_fetch_object())
	 		echo "<div>$row->price</div>";

	 	?>
	 </div>
	</div>

	<?php include "parts/footer.php"; ?>
	
</body>
</html>