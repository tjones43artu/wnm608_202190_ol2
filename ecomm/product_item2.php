<?php

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE id=".$_GET['id'])[0];

$images = explode(",", $product->images);

$image_elements = $array_reduce($images,function($r,$o){
  return $r."img src='/images/store/$o'>"
});

print_p($products);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Item</title>

  <?php include "meta.php"; ?>
  <script src="js/product_thumbs.js"></script>
</head>
<body>

  <?php include "parts/navbar.php";?>

  <div class="container">
    <div class="grid gap">
    <div class="col-xs-12 col-md-7">
    <div class="card soft">
      <h2>Product Item</h2>
      <img src="/img/<?= $product->thumbnai ?>">
    </div>
    <div class="thumbnails"><?= $image_elements ?></div>
  </div>
  <div class="col-xs-12 col-md-5">
    <div class="card soft">
        <h2 class="product-title"><?= $product->title ?></h2>
        <div class="product-price"><?= $product->price ?></div>
      </div>

      <div class="card-section">
        <label for="product-amount">Amount</label>
        <div class="form-select" id="product-amount">
          <select id="product-amount" name="product-amount">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
          </select>
        </div>

      </div>

      <div class="card-section">
        <p>This is item # <?= $_GET['id'] ?></p>
        <p><a href="product_added_to_cart.php?id=<?= $product->id ?>" class="form-button">Add To Cart</a></p>
      </div>
    </div>
    </div>
    </div>
  </div>
 
</body>
</html>