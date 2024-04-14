<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alberto's Pizza | Sign Up</title>
    <link rel="stylesheet" href="/styles/global.css" type="text/css">
    <link rel="stylesheet" href="/styles/sign-up.css" type="text/css">
    <link rel="shortcut icon"  href="/assets/icons/albertos-pizza-mascot.png" />
    <script src="/scripts/global.js" defer></script> 
    <script src="/scripts/sign-up.js" defer></script>
</head>
<body>
    <div class="background-image"></div> <!-- Add background image div here -->
    <?php require_once dirname(__DIR__, 1)."/components/header.php" ?>

    <main class="main">
        <div class="sign_up_container">
            <h1>Sign Up for an Account</h1>
            <form action="../db_connections/process-signup.php" method="post">
                <div class="input-field">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Enter your full name">
                    <p class="error" id="fullname-error">Please enter your fullname.</p>
                </div>
                <div class="input-field">
                    <label for="phone">Phone Number</label>
                    <p class="tip">We only accept Philippine-based phone numbers.</p>
                    <input type="tel" id="phone" name="phone" placeholder="ex. 0987-654-3210">
                    <p class="error" id="phone-error">Please enter a valid phone number.</p>
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <p class="tip">We require your password to have the following constraints:</p>
                    <ul class="password-constraints">
                        <li>Must contain at least one symbol character.</li>
                        <li>Must contain at least one uppercase letter.</li>
                        <li>Must be at least 6 characters in length.</li>
                    </ul>
                    <input type="password" id="password" name="password">
                    <p class="error" id="password-error">The password must meet the requirements mentioned above.</p>
                </div>
                <button type="submit" class="signup-button">Sign Up</button>
                <button type="button" class="google-signup-button">Sign Up with Google</button>
            </form>

        </div>
    </main>

    <?php require_once dirname(__DIR__, 1)."/components/footer.php" ?>     
</body>
</html>
