<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Alberto's Pizza</title>
    <link rel="stylesheet" href="/styles/global.css">
    <link rel="stylesheet" href="/styles/home.css">
    <link rel="shortcut icon" href="/assets/icons/albertos-pizza-mascot.png" />
    <script src="scripts/global.js" defer></script>
    <script src="scripts/add-to-cart.js" defer></script>
</head>

<body>
    <?php require_once dirname(__DIR__, 1) . "/components/header.php" ?>
    <main>
        <div class="background-image"></div>
        <section class="banner">
            <div class="banner__title" id="banner__1">
                <h1 class="banner__title-text">Experience the unforgettable taste of</h1>
            </div>
            <div class="banner__image" id="banner__1"><img src="/assets/images/albertos-pizza-logo.png"
                    class="banner__logo-image"></div>
            <div class="banner__subtitle" id="banner__1">
                <h2 class="banner__subtitle-text">a flavor you’ll crave again and again.</h2>
            </div>
            <a href="/products" class="link-button">
                Order Our Products
                <img class="link-button__icon" src="/assets/icons/iconmonstr-arrow-right-circle-filled.svg">
            </a>
        </section>
        <section class="products">
            <h2 class="products__title">Featured Pizza's</h2>
            <div>
                <article class="product">
                    <img class="product__image" src="../assets/images/pizzas/aloha-pizza.jpg" alt="">
                    <h1 class="product__heading">ALOHA</h1>
                    <h2 class="product__heading2">9-inch with Quickmelt starts at ₱115</h2>
                    <p class="product__subheading">Lots of pineapples, ham sausage, mushroom, and green bell pepper.</p>
                    <form action="/account/cart" class="menu-item" method="post">
                        <button class="product__button">Add to cart</button>
                        <input type="hidden" name="pizza_name" value="Aloha Pizza">
                        <input type="hidden" name="pizza_cheese" value="Quickmelt">
                        <input type="hidden" name="pizza_size" value="9-inch">
                        <input type="hidden" name="pizza_price" value="115">
                    </form>
                    <a href="/products/pizzas/regular/aloha" class="product__button">Customize</a>
                </article>
                <article class="product">
                    <img src="../assets/images/pizzas/pizza-d-marina.jpg" class="product__image">
                    <h1 class="product__heading">PIZZA D’ MARINA</h1>
                    <h2 class="product__heading2">11-inch with Quickmelt and
                        Mozarella starts at ₱290</h2>
                    <p class="product__subheading">Spanish sardines, tuna flakes, crab
                        stick, anchovies, shrimp, carrots,
                        pickles, onions, and tomatoes. </p>
                    <form action="/account/cart" class="menu-item" method="post">
                        <button class="product__button">Add to cart</button>
                        <input type="hidden" name="pizza_name" value="Pizza D' Marina">
                        <input type="hidden" name="pizza_cheese" value="Quickmelt and Mozarella">
                        <input type="hidden" name="pizza_size" value="11-inch">
                        <input type="hidden" name="pizza_price" value="290">
                    </form>
                    <a class="product__button">Customize</a>
                </article>
                <article class="product">
                    <img src="../assets/images/pizzas/pizza-supreme.jpg" class="product__image">
                    <h1 class="product__heading">PIZZA SUPREME</h1>
                    <h2 class="product__heading2">9-inch with Quickmelt starts at ₱125</h2>
                    <p class="product__subheading">Pork pepperoni, bacon, mushroom, onions, pineapple tidbits, black
                        olives,
                        and green bell peppers.</p>
                    <form action="/account/cart" class="menu-item" method="post">
                        <button class="product__button">Add to cart</button>
                        <input type="hidden" name="pizza_name" value="Pizza Supreme">
                        <input type="hidden" name="pizza_cheese" value="Quickmelt">
                        <input type="hidden" name="pizza_size" value="9-inch">
                        <input type="hidden" name="pizza_price" value="125">
                    </form>
                    <a class="product__button">Customize</a>
                </article>
                <article class="product">
                    <img src="../assets/images/pizzas/royal-flush.jpg" class="product__image">
                    <h1 class="product__heading">ROYAL FLUSH</h1>
                    <h2 class="product__heading2">11-inch with Quickmelt and Mozarella starts at ₱290</h2>
                    <p class="product__subheading">Pork pepperoni, bacon, mushroom, onions, pineapple tidbits, black
                        olives,
                        and green bell peppers.</p>
                    <form action="/account/cart" class="menu-item" method="post">
                        <button class="product__button">Add to cart</button>
                        <input type="hidden" name="pizza_name" value="Royal Flush">
                        <input type="hidden" name="pizza_cheese" value="Quickmelt and Mozarella">
                        <input type="hidden" name="pizza_size" value="11-inch">
                        <input type="hidden" name="pizza_price" value="290">
                    </form>
                    <a class="product__button">Customize</a>
                </article>
            </div>
        </section>
    </main>
    <?php require_once dirname(__DIR__, 1) . "/components/footer.php" ?>

</body>

</html>