<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>
    <link rel="stylesheet" href="/styles/global.css">
    <link rel="stylesheet" href="/styles/products.css">
    <link rel="shortcut icon" href="/assets/icons/albertos-pizza-mascot.png" />
    <script src="/scripts/global.js" defer></script>
    <script src="/scripts/add-to-cart.js" defer></script>
</head>

<body>
    <div class="background-image"></div>
    <?php require_once dirname(__DIR__, 1) . "/components/header.php" ?>
    <main>
        <div class="main__title" id="main__1">
            <h2 class="main__title-text">Browse our assortment of pizzas!</h2>
            <a href="/products/pizzas/regular" class="link-button">
                Regular Pizza's
                <img class="link-button__icon" src="/assets/icons/iconmonstr-arrow-right-circle-filled.svg">
            </a>
            <a href="/products/pizzas/spicy" class="link-button">
                Spicy Pizza's
                <img class="link-button__icon" src="/assets/icons/iconmonstr-arrow-right-circle-filled.svg">
            </a>
            <a href="/products/pizzas/for-kids" class="link-button">
                For Kid's Pizza's
                <img class="link-button__icon" src="/assets/icons/iconmonstr-arrow-right-circle-filled.svg">
            </a>
        </div>
        <section class="products">
            <h2 class="products__title">And below are pizza's our customers love!</h2>
            <div>
                <article class="product">
                    <img class="product__image" src="../assets/images/pizzas/all-pepperoni.jpg" alt="">
                    <h1 class="product__heading">ALL PEPPERONI</h1>
                    <h2 class="product__heading2">9-inch with Quickmelt starts at ₱160</h2>
                    <p class="product__subheading">Pork pepperoni with hot sauce.</p>
                    <form action="/account/cart" class="menu-item" method="post">
                        <button class="product__button">Add to cart</button>
                        <input type="hidden" name="pizza_name" value="All Pepperoni">
                        <input type="hidden" name="pizza_price" value="160">
                    </form>
                    <a href="/products/pizzas/regular/aloha" class="product__button">Customize</a>
                </article>
                <article class="product">
                    <img class="product__image" src="../assets/images/pizzas/pizza-supreme.jpg" alt="">
                    <h1 class="product__heading">PIZZA SUPREME</h1>
                    <h2 class="product__heading2">9-inch with Quickmelt starts at ₱125</h2>
                    <p class="product__subheading">Pork pepperoni, bacon, mushroom, onions, pineapple tidbits, black
                        olives,
                        and green bell peppers.</p>
                    <form action="/account/cart" class="menu-item" method="post">
                        <button class="product__button">Add to cart</button>
                        <input type="hidden" name="pizza_name" value="Pizza Supreme">
                        <input type="hidden" name="pizza_price" value="125">
                    </form>
                    <a href="/products/pizzas/regular/aloha" class="product__button">Customize</a>
                </article>
                <article class="product">
                    <img class="product__image" src="../assets/images/pizzas/ham-delight.jpg" alt="">
                    <h1 class="product__heading">HAM DELIGHT</h1>
                    <h2 class="product__heading2">9-inch with Quickmelt starts at ₱125</h2>
                    <p class="product__subheading">All ham.</p>
                    <form action="/account/cart" class="menu-item" method="post">
                        <button class="product__button">Add to cart</button>
                        <input type="hidden" name="pizza_name" value="Ham Delight">
                        <input type="hidden" name="pizza_price" value="125">
                    </form>
                    <a href="/products/pizzas/regular/aloha" class="product__button">Customize</a>
                </article>
                <article class="product">
                    <img class="product__image" src="../assets/images/pizzas/hawaiian.jpg" alt="">
                    <h1 class="product__heading">HAWAIIAN</h1>
                    <h2 class="product__heading2">9-inch with Quickmelt starts at ₱125</h2>
                    <p class="product__subheading">Ham, bacon, pineapple tidbits, mushroom, onions, and green bell
                        pepper.
                    </p>
                    <form action="/account/cart" class="menu-item" method="post">
                        <button class="product__button">Add to cart</button>
                        <input type="hidden" name="pizza_name" value="Hawaiian">
                        <input type="hidden" name="pizza_price" value="125">
                    </form>
                    <a href="/products/pizzas/regular/aloha" class="product__button">Customize</a>
                </article>
                <article class="product">
                    <img class="product__image" src="../assets/images/pizzas/royal-flush.jpg" alt="">
                    <h1 class="product__heading">ROYAL FLUSH</h1>
                    <h2 class="product__heading2">11-inch with Quickmelt and Mozarella starts at ₱290</h2>
                    <p class="product__subheading">Cheese krainer, pork pepperoni, hungarian sausage, ham sausage,
                        hotdog,
                        chicken hotdog, hamonado, ground beef, chicken minced, tuna flakes, ham.</p>
                    <form action="/account/cart" class="menu-item" method="post">
                        <button class="product__button">Add to cart</button>
                        <input type="hidden" name="pizza_name" value="Royal Flush">
                        <input type="hidden" name="pizza_price" value="290">
                    </form>
                    <a href="/products/pizzas/regular/aloha" class="product__button">Customize</a>
                </article>
            </div>
        </section>
        <section class="products">
            <h2 class="products__title">Pair your pizza’s with our side products!</h2>
            <a href="/products/sides" class="link-button link-button--sides">
                Side Products
                <img class="link-button__icon" src="/assets/icons/iconmonstr-arrow-right-circle-filled.svg">
            </a>
            <div>
                <article class="product">
                    <img class="product__image" src="../assets/images/sides/halo-halo.jpg" alt="">
                    <h1 class="product__heading">HALO-HALO</h1>
                    <h2 class="product__heading2">Starts at ₱68</h2>
                    <form action="/account/cart" class="menu-item" method="post">
                        <button class="product__button">Add to cart</button>
                        <input type="hidden" name="pizza_name" value="Halo-Halo">
                        <input type="hidden" name="pizza_price" value="68">
                    </form>
                </article>
                <article class="product">
                    <img class="product__image" src="../assets/images/sides/ice-cream-sundae.jpg" alt="">
                    <h1 class="product__heading">ICE CREAM SUNDAE</h1>
                    <h2 class="product__heading2">Starts at ₱98</h2>
                    <form action="/account/cart" class="menu-item" method="post">
                        <button class="product__button">Add to cart</button>
                        <input type="hidden" name="pizza_name" value="Ice Cream Sundae">
                        <input type="hidden" name="pizza_price" value="98">
                    </form>
                </article>
                <article class="product">
                    <img class="product__image" src="../assets/images/sides/spaghetti.jpg" alt="">
                    <h1 class="product__heading">SPAGHETTI</h1>
                    <h2 class="product__heading2">Starts at ₱57</h2>
                    <form action="/account/cart" class="menu-item" method="post">
                        <button class="product__button">Add to cart</button>
                        <input type="hidden" name="pizza_name" value="Spaghetti">
                        <input type="hidden" name="pizza_price" value="57">
                    </form>
                </article>
            </div>
        </section>
    </main>
    <?php require_once dirname(__DIR__, 1) . "/components/footer.php" ?>

</body>

</html>