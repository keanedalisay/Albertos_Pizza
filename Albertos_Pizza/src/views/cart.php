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
        <section id="cart-title" class="cart-page">
            <h1>My Cart</h1>
        </section>
        <section id="cart-total" class="cart-page">
            <p id="total-label">Total Cost of Order: </p> 
            <p id="total-cost">₱<?php echo $totalCost; ?></p>
        </section>

        <div class="product-container">
            <div class="product-group">
                <article class="product">
                    <h1 class="product__heading">
                        <div class="column">
                            <span class="product__text">ALOHA</span>
                        </div>
                        <div class="column">
                            <span class="total-cost-label">Total Cost:</span>
                            <span class="amount">₱145</span>
                        </div>
                        <div class="column">
                            <img class="product__image" src="../assets/images/pizzas/aloha-pizza.jpg" alt="">
                        </div>
                    </h1>
                    <p class="product__subheading">9-inch, Mozarella <span class="spacer"></span>Quantity:</p>
                    <form action="/account/cart" class="menu-item" method="post">
                        <div class="button-container">
                            <button class="customize_button">Customize</button>
                            <div class="quantity-buttons">
                                <button class="decrement-button">-</button>
                                <span class="quantity">1</span>
                                <button class="increment-button">+</button>
                            </div>
                        </div>
                        <input type="hidden" name="pizza_name" value="Aloha Pizza">
                        <input type="hidden" name="pizza_price" value="145">
                    </form>
                </article>
                <article class="product">
                    <h1 class="product__heading">
                        <div class="column">
                            <span class="product__text">PIZZA D' MARINA</span>
                        </div>
                        <div class="column">
                            <span class="total-cost-label">Total Cost:</span>
                            <span class="amount">₱290</span>
                        </div>
                        <div class="column">
                            <img class="product__image" src="../assets/images/pizzas/pizza-d-marina.jpg" alt="">
                        </div>
                    </h1>
                    <p class="product__subheading">11-inch, Quickmelt <span class="spacer"></span>Quantity:</p>
                    <form action="/account/cart" class="menu-item" method="post">
                        <div class="button-container">
                            <button class="customize_button">Customize</button>
                            <div class="quantity-buttons">
                                <button class="decrement-button">-</button>
                                <span class="quantity">1</span>
                                <button class="increment-button">+</button>
                            </div>
                        </div>
                        <input type="hidden" name="pizza_name" value="Pizza D' Marina">
                        <input type="hidden" name="pizza_price" value="290">
                    </form>
                </article>
            </div>
            <div class="product-group">
                <article class="product">
                    <h1 class="product__heading">
                        <div class="column">
                            <span class="product__text">ALOHA</span>
                        </div>
                        <div class="column">
                            <span class="total-cost-label">Total Cost:</span>
                            <span class="amount">₱350</span>
                        </div>
                        <div class="column">
                            <img class="product__image" src="../assets/images/pizzas/aloha-pizza.jpg" alt="">
                        </div>
                    </h1>
                    <p class="product__subheading">11-inch, Quickmelt <span class="spacer"></span>Quantity:</p>
                    <form action="/account/cart" class="menu-item" method="post">
                        <div class="button-container">
                            <button class="customize_button">Customize</button>
                            <div class="quantity-buttons">
                                <button class="decrement-button">-</button>
                                <span class="quantity">1</span>
                                <button class="increment-button">+</button>
                            </div>
                        </div>
                        <input type="hidden" name="pizza_name" value="Aloha Pizza">
                        <input type="hidden" name="pizza_price" value="350">
                    </form>
                </article>
                <article class="product">
                    <h1 class="product__heading">
                        <div class="column">
                            <span class="product__text">HALO- HALO ESPESYAL</span>
                        </div>
                        <div class="column">
                            <span class="total-cost-label">Total Cost:</span>
                            <span class="amount">₱290</span>
                        </div>
                        <div class="column">
                            <img class="product__image" src="../assets/images/Sides/halo-halo.jpg" alt="">
                        </div>
                    </h1>
                    <p class="product__subheading"><span class="spacer">&nbsp;&nbsp;&nbsp;&nbsp;</span>Quantity:</p>
                    <form action="/account/cart" class="menu-item" method="post">
                        <div class="button-container">
                            <button class="customize_button">Customize</button>
                            <div class="quantity-buttons">
                                <button class="decrement-button">-</button>
                                <span class="quantity">1</span>
                                <button class="increment-button">+</button>
                            </div>
                        </div>
                        <input type="hidden" name="pizza_name" value="Halo-Halo Espesyal">
                        <input type="hidden" name="pizza_price" value="290">
                    </form>
                </article>
            </div>
        </div>

        <a href="#" class="link-button">
        Checkout
        <img class="link-button__icon" src="/assets/icons/iconmonstr-arrow-right-circle-filled.svg" alt="Arrow Icon">
    </a>
    </main>

    <?php require_once dirname(__DIR__, 1) . "/components/footer.php" ?>
</body>
</html>