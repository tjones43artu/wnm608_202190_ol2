<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "parts/meta.php"; ?>
	<title>Product Gallery</title>
</head>
<body>
	<?php include "parts/navbar.php"; ?>
	<h1>Product Gallery</h1>
	
	<div class="">
	<div class="card">
		<div class="img">
			<img src="https://images.unsplash.com/photo-1746182329975-6bf8c8643472?q=80&w=3240&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="500px">
		</div>
		<div class="caption">
			<p class="rate">
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
				<i class="fa-solid fa-star"></i>
		</div>
	</div>
	<p class="product_name">Product Name</p>
	<p class="price"><b>$300</b></p>
	<p class="discount">$45</p>
</div>
</body>
</html>