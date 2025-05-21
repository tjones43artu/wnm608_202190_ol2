<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Item</title>

  <?php include "meta.php"; ?>
</head>
<body>

  <?php include "parts/navbar.php"; ?>

  <div class="view-window" style="background-image:url(img/junel-mujar-51jzoz1dsro-unsplash.jpg);">
</div>

  <div class="container">
    <p><a href="product_list.php">Back</a></p>
    <div class="card soft">
      <h2>Product Item</h2>
      <img src="img/atlantic-breeze.png;">


        <p>This is item #</p> <p>Price:$24.99</p>
        <button id="add-to-cart" onclick="add-to-cart"()>Add To Cart</a></button>
    </div>
  </div>

<footer>
  <?php include "parts/footer.php"; ?>
  <script>
    document.getElement('add-to-cart').addEventListener('click', function() {
      alert('Product added to cart!');
    });
</script>
</footer>
 
</body>
</html>