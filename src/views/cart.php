<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_POST['pizza_name']) && isset($_POST['pizza_price'])) {
        // Get the pizza name and price from the POST data
        $pizzaName = $_POST['pizza_name'];
        $pizzaPrice = intval($_POST['pizza_price']);
        $pizzaCheese = $_POST['pizza_cheese'];
        $pizzaSize = $_POST['pizza_size'];

        $_SESSION['cart'][] = [
            'pizza_name' => $pizzaName, 
            'pizza_price' => $pizzaPrice, 
            'pizza_size' => $pizzaSize,
            'pizza_cheese' => $pizzaCheese
        ];

    } else {
        $sideName = $_POST['side_name'];
        $sidePrice = intval($_POST['side_price']);

        $_SESSION['cart'][] = [
            'side_name' => $sideName, 
            'side_price' => $sidePrice, 
        ];
    }
}

$totalCost = 0;
foreach ($_SESSION['cart'] as $item) {
    $totalCost += isset($item['pizza_price']) ? $item['pizza_price'] : $item['side_price'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="/styles/global.css">
    <link rel="stylesheet" href="/styles/cart.css">
    <link rel="shortcut icon" href="/assets/icons/albertos-pizza-mascot.png" />
    <script src="/scripts/global.js" defer></script>
    <script src="/scripts/add-to-cart.js" defer></script>
</head>

<body>
    <?php require_once dirname(__DIR__, 1) . "/components/header.php" ?>
    <main>
        <div class="background-image"></div>
        <section id="cart-title" class="cart-page">
            <h1>My Cart</h1>
        </section>
        <section id="cart-total" class="cart-page">
            <p id="total-label">Total Cost of Order: </p>
            <p id="total-cost">₱<?php echo $totalCost; ?></p>
        </section>

        <div class="product-container">
        <?php 
            $cart = $_SESSION['cart'];
            foreach ($cart as $key => $item): ?>
                <article class="product">
                    <h1 class="order__heading">
                        <div class="column">
                            <span class="product__text"><?= isset($item['pizza_name']) ? strtoupper($item['pizza_name']) : strtoupper($item['side_name']) ?></span>
                        </div>
                        <div class="column">
                            <span class="total-cost-label">Total Cost:</span>
                            <span class="amount">₱<?=isset($item['pizza_price']) ? $item['pizza_price'] : $item['side_price']?></span>
                        </div>
                        <div class="column">
                            <?php if (empty($item['side_name'])): ?>
                                <img class="order__image" src="../assets/images/pizzas/<?= str_replace(' ','-',strtolower($item['pizza_name']))?>.jpg" alt="">
                            <?php else: ?>
                                <img class="order__image" src="../assets/images/sides/<?= str_replace(' ','_',strtolower($item['side_name']))?>.jpg" alt="">
                            <?php endif; ?>
                        </div>
                    </h1>
                    <?php if (empty($item['side_name'])): ?>
                        <p class="product__subheading"><?=$item['pizza_size'] . ', ' . $item['pizza_cheese']?> <span class="spacer"></span>Quantity:</p>
                    <?php else: ?>
                        <p class="product__subheading"><span class="spacer"></span>Quantity:</p>
                    <?php endif; ?>
                    <form action="/account/cart" class="menu-item" method="post">
                        <div class="button-container" style="<?= empty($item['side_name']) ? '' : 'justify-content: center;'?>">
                        <?php if (empty($item['side_name'])): ?>
                            <button class="customize_button">Customize</button>
                        <?php endif; ?>
                            <div class="quantity-buttons">
                                <button class="decrement-button">-</button>
                                <span class="quantity">1</span>
                                <button class="increment-button">+</button>
                            </div>
                    </form>
                </article>
           <?php endforeach; ?>
        </div>

        <a href="/checkout/order-mode" class="link-button">
            Checkout
            <img class="link-button__icon" src="/assets/icons/iconmonstr-arrow-right-circle-filled.svg"
                alt="Arrow Icon">
        </a>
    </main>

    <?php require_once dirname(__DIR__, 1) . "/components/footer.php" ?>
</body>

</html>