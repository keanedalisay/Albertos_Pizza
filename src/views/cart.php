<?php
session_start();

$totalCost = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['pizza_name']) && isset($_POST['pizza_price'])) {
        // Get the pizza name and price from the POST data
        $pizzaName = $_POST['pizza_name'];
        $pizzaPrice = intval($_POST['pizza_price']);
        
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        $_SESSION['cart'][] = ['name' => $pizzaName, 'price' => $pizzaPrice];
    }
}

// Calculate total cost
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $pizza) {
        $totalCost += $pizza['price'];
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alberto's Pizza | Cart </title>
    <link rel="stylesheet" href="/styles/global.css">
    <link rel="stylesheet" href="/styles/home.css">
    <link rel="stylesheet" href="/styles/carts.css">
    <link rel="shortcut icon" href="/assets/icons/albertos-pizza-mascot.png" />
    <script src="/public/scripts/addCart.js"></script>
</head>
<body>
    <?php require_once dirname(__DIR__, 1) . "/components/header.php" ?>
    <main>
        <div class="cart-page" id="cart-title">
            <h1>My Cart</h1>
        </div>
        <div class="cart-page" id="cart-total">
            <p id="total-label">Total Cost of Order: </p> 
            <br>
            <p id="total-cost">₱<?php echo $totalCost; ?></p>
        </div>
        <?php
            var_dump($totalCost);
            var_dump($_SESSION['cart']);
        ?>
    </main>
    
    <?php require_once dirname(__DIR__, 1) . "/components/footer.php" ?>
</body>
</html>