<!DOCTYPE html>
<html>
<head>
<title>Cart Pages</title>
<?php include "meta.php"; ?>
</head>

<body>
<?php include 'parts/navbar.php';?>
<div class="grid-container">
<div class="">

<h2>In Your Cart</h2>

  <div class="col-xs-12 col-md-7">
    <div class="card soft">
      <?= array_reduce($cart,function($r,$o){return $r."<div>$o->title</div>";}) ?>
  </div>
</div>

<div class="col-xs-12 col-md-7">
  <div class="card soft flat">
    <div class="card-section display-flex">
      <div class="flex-stretch"><strong>Sub Total</strong></div>
      <div class="flex-none"><p>&dollar;3.50</p></div>
      <div class="card-section display-flex">
      <div class="flex-none"><p>2.50</p></div></div>
      <div class="card-section display-flex"><strong>Total</strong></div>
      <div class="flex-none"><p>$4.50</p></div>
      <div>
        <a href="product_checkout.php" class="form-button">Checkout</a>
      </div>
</div>
</div>
</div>
</div>
</div>
</body>
<?php include 'parts/footer.php';?>
</html>