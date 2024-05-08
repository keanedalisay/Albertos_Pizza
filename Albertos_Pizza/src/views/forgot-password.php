<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alberto's Pizza | Log-In</title>
    <link rel="stylesheet" href="/styles/global.css">
    <link rel="stylesheet" href="/styles/forgot-password.css">
    <link rel="shortcut icon" href="/assets/icons/albertos-pizza-mascot.png" />
    <script src="/scripts/global.js" defer></script>
    <script src="/scripts/forgotps.js" defer></script>
</head>

<body>
    <div class="background-image"></div>
    <?php require_once dirname(__DIR__, 1) . "/components/header.php" ?>
    <main class="main">
        <div class="forgot_ps_container">
            <h1>Forgot your Password?</h1>
            <form action="/account/forgot-ps" method="post">
                <div class="input-field">
                    <label for="phone-number">Phone number</label>
                    <input type="tel" id="phone-number" name="phone-number" placeholder="0987-654-3210">
                    <p class="error" id="phone-error">The phone number you entered does not match any account on our system.
                    </p>
                </div>
                <div class="input-field">
                    <label for="password">Confirmation Code</label>
                    <input type="password" id="password" name="password" placeholder="123456">
                    <p class="error" id="password-error">You entered the wrong confirmation code.</p>
                </div>
                <div class="button-container1">
                    <button type="submit" class="send-button">Send code</button> 
                </div>
                <div class="button-container2">
                    <button type="button" class="send-button">Verify Credentials</button>
                </div>                
    </main>
    <?php require_once dirname(__DIR__, 1) . "/components/footer.php" ?>

    <script src="script.js"></script>
</body>

</html>