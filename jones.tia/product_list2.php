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
          <?php
                $products = [
                    ["name" => "Product 1", "price" => 29.99, "image" => "product1.jpg"],
                    ["name" => "Coffee", "price" => 39.99, "image" => "product2.jpg"],
                    ["Bagel" => "Product 3", "price" => 49.99, "image" => "/img/bagel.png"],
            ];

              foreach ($products as $product) {
                  echo '<div class="card soft>';
                  echo '<div class="grid-containier">';
                  echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                  echo '<h2>' . $product['name'] . '</h2>';
                  echo '<p>Price: $' . number_format($product['price'], 2) . '</p>';
                  echo '<button>Add to Cart</button>';
                  echo '</div>';
              }
            ?>
        </div>
       </div>

     </div>
<?php include 'parts/footer.php';?>
</body>

</html>