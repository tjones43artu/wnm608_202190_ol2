<?php

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE id=".$_GET['id'])[0];

// print_p($product);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Item</title>

  <?php include "meta.php"; ?>
</head>
<body>

  <?php include "parts/navbar.php";?>

  <div class="container">
    <div class="grid gap">
    <div class="col-xs-12 col-md-7">
    <div class="card soft">
      <h2>Product Item</h2>

        <p>This is item # <?= $_GET['id'] ?></p>
        <p><a href="product_added_to_cart.php">Add To Cart</a></p>
    </div>
    </div>
    </div>
  </div>
 
</body>
</html>