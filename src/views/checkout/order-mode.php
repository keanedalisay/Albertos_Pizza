<?php
session_start(); // Start session
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout: Order Mode</title>
    <link rel="stylesheet" href="/styles/global.css" type="text/css">
    <link rel="stylesheet" href="/styles/checkout.css" type="text/css">
    <link rel="shortcut icon" href="/assets/icons/albertos-pizza-mascot.png">
    <script src="/scripts/global.js" defer></script>
</head>

<body>
    <div class="background-image"></div>
    <?php require_once dirname(__DIR__, 2) . "/components/header.php" ?>
    <main>
        <h1>Step 1 of 3:</h1>
        <h2>Choose your order mode</h2>
        <form action="/checkout/address" method="post">
            <fieldset class="order_mode_btns">
                <input class="order_mode_input" id="delivery" name="order_mode" value="delivery" type="radio">
                </label>
                <label class="order_mode_btn" for="delivery">
                    <img src="/assets/icons/noun-motorcycle-delivery-4443485.svg">
                    Delivery
                </label>
                <input class="order_mode_input" id="take-out" name="order_mode" value="take-out" type="radio">
                <label class="order_mode_btn" for="take-out">
                    <img src="/assets/icons/noun-pizza-3202324.svg">
                    Take-out
                </label>
            </fieldset>
            <fieldset class="control_btns">
                <button class="control_btns__continue" type="submit">Continue</button>
            </fieldset>
        </form>
    </main>
    <?php require_once dirname(__DIR__, 2) . "/components/footer.php" ?>
</body>

</html>