<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      }   
}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
    
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Cart Pages</title>
<?php include "meta.php"; ?>
</head>
<body>
  
<?php include 'parts/navbar.php';?>

<div class="view-window" style="background-image:url(img/junel-mujar-51jzoz1dsro-unsplash.jpg);">
  <article class="view" id="view">
      <h1 style="color:white; text-align: center; padding: 50px; margin-top:75px; ">Shopping Cart</h1>
    </article>
</div>
<div class="container">
<div class="card soft flat">
  <div card="card-section">
    <div class="flex-stretch"><strong>Sub Total</strong></div>
    <div class="flex-none">&dollar;3.50</div>
  </div>

  <div class="flex-stretch"><strong>Taxes</strong></div>
    <div class="flex-none">&dollar;3.50</div>
  </div>

  <div class="flex-stretch"><strong>Totall</strong></div>
    <div class="flex-none">&dollar;7.00</div>
  </div>

</div>
</div>
<?php include 'parts/footer.php';?>
</body>