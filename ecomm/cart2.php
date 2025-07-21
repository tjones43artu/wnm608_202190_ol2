# Shopping Cart Implementation

```php
<?php
session_start();

$mysqli = new mysqli("localhost", "username", "password", "database");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

function addToCart($productId, $quantity) {
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId] += $quantity;
    } else {
        $_SESSION['cart'][$productId] = $quantity;
    }
}

function removeFromCart($productId) {
    unset($_SESSION['cart'][$productId]);
}

function displayCart() {
    global $mysqli;
    if (!empty($_SESSION['cart'])) {
        echo "<table>";
        echo "<tr><th>Product ID</th><th>Quantity</th></tr>";
        foreach ($_SESSION['cart'] as $productId => $quantity) {
            $result = $mysqli->query("SELECT name FROM products WHERE id = $productId");
            $product = $result->fetch_assoc();
            echo "<tr><td>{$product['name']}</td><td>{$quantity}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Your cart is empty.";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        addToCart($_POST['product_id'], $_POST['quantity']);
    } elseif (isset($_POST['remove'])) {
        removeFromCart($_POST['product_id']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Your Shopping Cart</h1>
    <?php displayCart(); ?>
    <form method="POST">
        <input type="number" name="product_id" placeholder="Product ID" required>
        <input type="number" name="quantity" placeholder="Quantity" required>
        <button type="submit" name="add">Add to Cart</button>
        <button type="submit" name="remove">Remove from Cart</button>
    </form>
</body>
</html>
