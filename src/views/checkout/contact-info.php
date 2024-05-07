<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout: Contact Information</title>
    <link rel="stylesheet" href="/styles/global.css" type="text/css">
    <link rel="stylesheet" href="/styles/checkout.css" type="text/css">
    <link rel="shortcut icon" href="/assets/icons/albertos-pizza-mascot.png">
    <script src="/scripts/global.js" defer></script>
</head>

<body>
    <div class="background-image"></div>
    <?php require_once dirname(__DIR__, 2) . "/components/header.php" ?>
    <main>
        <h1>Step 3 of 3:</h1>
        <h2>Fill in your contact information</h2>
        <p><b>As a guest user</b>, we require you to fill in your personal information. This is for our delivery riders
            to track you if you choose your order to be delivered.</p>
        <form action="/checkout/payment" method="post">
            <fieldset class="cont_info">
                <label class="cont_info_label" for="full_name">Full Name</label>
                <input class="cont_info_input" id="full_name" name="user_full_name" value="" type="text">
                <label class="cont_info_label" for="phone_num">Phone Number <span>We only accept Philippine-based phone numbers.</span></label>
                <input class="cont_info_input" id="phone_num" name="user_phone_num" value="" type="text">
                <label class="cont_info_label" for="conf_code">Confirmation Code</label>
                <input class="cont_info_input" id="conf_code" name="user_conf_code" value="" type="text">
                <button class="send_code_btn" form="conf_code_form" type="submit">Send code</button>
            </fieldset>
            <fieldset class="control_btns">
                <button class="control_btns__continue" type="submit">Proceed to payment</button>
                <a href="/checkout/address" class="control_btns__back"><span>Back to Addresses</span></a>
            </fieldset>
        </form>
        <form id="conf_code_form" action="/checkout/contact-info" method="post">
            <input type="hidden" name="actv_conf_code" value="1">
        </form>
    </main>
    <?php require_once dirname(__DIR__, 2) . "/components/footer.php" ?>
</body>

</html>