<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Product List</h1>
    <div class="product-container">
      <ul>
        <li><a href="product_item.php?id=1">Product 1</a></li>
        <li><a href="product_item.php?id=1">Product 2</a></li>
        <li><a href="product_item.php?id=1">Product 3</a></li>
        <li><a href="product_item.php?id=1">Product 4</a></li>
      </ul>

        <?php

        $host = "localhost";
        $user = "kawaii";
        $pass = "productsproducts";
        $database = "products";

        $conn = new mysqli($host, $user, $pass, $database);

        if($conn->connect_errno) die($conn->connect_error);

        $result = $conn->query("SELECT `id`, `title` FROM `products` ORDER BY `date_create` DESC LIMIT 12");

        if($conn->errno) die($conn->error);

        while($row = $result->fetch_object()) {
          $a[] = $row;
        }

        ?>
       
    </div>
</body>
</html>
