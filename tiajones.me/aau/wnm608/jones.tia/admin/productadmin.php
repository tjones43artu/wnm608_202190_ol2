<?php include "../lib/php/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Product Add Admin</title>

	<link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../lib/css/gridsystem.css">
	<link rel="stylesheet" href="../css/storetheme.css">

	<style>
	@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

	form {
		margin: 70px;
	}
	</style>
</head>

<body>
<?php include "../parts/navbar.php"; ?>

<div class="view-window" style="background-image:url(../img/junel-mujar-51jzoz1dsro-unsplash.jpg);">
	<article class="view" id="view">
			<p style="color:white; text-align: center; padding: 100px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</article>
</div>

<div class="container">
	<form class="add-form" action="connect.php" method="post">
		<h2>Add Product</h2>
		<div class="card soft">
			<div>
				<input class="form-input"
				type="text" placeholder="ProductName"
				name="id" value="">
			</div>

			<div>
				<input class="form-input"
				type="number" placeholder="Quantity"
				name="quantity" value="">
			</div>

			<div>
				<input class="form-input" type="text" placeholder="Price"
						name="price" value="">
			</div>

			<input class="form-button" type="submit"
					name="add" value="Add Item">
		</div>
	</form>
</div>

	
</body>
</html>
<?php include "../parts/footer.php"; ?>