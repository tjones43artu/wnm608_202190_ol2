<?php

include "../lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Admin Page</title>
	<?php include "../parts/meta.php"; ?>
</head>
<body>
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Product Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Add New Product</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
		<?php

		if (isset($_GET['id'])) {
			showProductPage($_GET['id'] == "new" ? $empty_user : $users[$_GET['id']]);
		} else {
		
		?>
		<h2>Product List</h2>
		
				<?php

				for ($i=0; $i <count($users) ; $i++) { 
					echo "<li><a href=($_SERVER['PHP_SELF']}?id=$i'>{$users[$i]->name}</a></li>";
				}

				?>
			</ul>
		</nav>
		}
		

	</div>
</body>
</html>