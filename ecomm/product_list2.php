<!DOCTYPE html>
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

          <!--ul>-->
      <ul>
        <li><a href="product_item.php]">Product 1</a></li>
        <li><a href="product_item.php]">Product 2</a></li>
        <li><a href="product_item.php]">Product 3</a></li>
        <li><a href="product_item.php]">Product 4</a></li>
      </ul>
        <?php

        include "lib/php/functions.php";

        $result = makeQuery(
          makeConn(),
          "
          SELECT `id`, `title`, `price`
          FROM `products`
          ORDER BY `date_create` DESC
          LIMIT 12
          "
      );

        echo "<div class='productlist grid gap'>"array_reduce($result,'productListTemplate');
          
            ?>
        </div>
       </div>

     </div>
<?php include 'parts/footer.php';?>
</body>

</html>

