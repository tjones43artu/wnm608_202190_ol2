<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

<?php include "parts/meta.php"; ?>
</head>
<body>

	<?php include "parts/navbar.php"; ?>
	
	<div class="container">
	 <div class="card soft">
	 	<h2>Product Item</h2>
	 	<p>This is item # <?= $_GET['id'] ?></p>
	 </div>
	</div>
	<div class="products">
            <?php
                $conn = new mysqli("localhost", "tjones92", "chilislawdog1", "shopping-cart");
                $sql = "SELECT * FROM shopping-cart LIMIT 3";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    echo '<div class="product">';
                    echo '<h3>' . $row['name'] . '</h3>';
                    echo '<img src="' . $row['image'] . '" alt="' . $row['name'] . '">';
                    echo '<p>$' . $row['price'] . '</p>';
                    echo '<button>Add to Cart</button>';
                    echo '</div>';
                }
                $conn->close();
                ?>
    </div>
	<?php include "parts/footer.php"; ?>
</body>
</html>