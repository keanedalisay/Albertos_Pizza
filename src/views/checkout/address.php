<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout: [insert type] Address</title>
    <link rel="stylesheet" href="/styles/global.css" type="text/css">
    <link rel="stylesheet" href="/styles/checkout.css" type="text/css">
    <link rel="shortcut icon" href="/assets/icons/albertos-pizza-mascot.png">
    <script src="/scripts/global.js" defer></script>
</head>

<body>
    <div class="background-image"></div>
    <?php require_once dirname(__DIR__, 2) . "/components/header.php" ?>
    <main>
        <h1>Step 2 of 3:</h1>
        <h2>Choose your delivery address</h2>
        <form action="" method="post">
            <fieldset class="dlvry_addrs">
                <input class="dlvry_addrs__input" id="delivery-address_1" name="dlvry_addrs" value="test" type="radio">
                <label class="dlvry_addrs__label" for="delivery-address_1">
                    <span>Home</span>
                    <span>Pinecrest Village, 123, Acacia Street, Brgy. Lahug, Cebu City, Cebu</span>
                </label>
                <input class="dlvry_addrs__input" id="delivery-address_2" name="dlvry_addrs" value="test2" type="radio">
                <label class="dlvry_addrs__label" for="delivery-address_2">
                    <span>Home</span>
                    <span>Pinecrest Village, 123, Acacia Street, Brgy. Lahug, Cebu City, Cebu</span>
                </label>
            </fieldset>
            <fieldset class="control_btns">
                <button class="control_btns__continue" type="submit">Continue</button>
                <a href="/checkout/order-mode" class="control_btns__back"><span>Back to Order Mode</span></a>
            </fieldset>

        </form>
        <!-- if user chose takeout: <h2>Choose a branch to take-out from</h2> -->
    </main>
    <?php require_once dirname(__DIR__, 2) . "/components/footer.php" ?>
</body>

</html>