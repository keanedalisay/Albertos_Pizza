<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alberto's Pizza | Change Your Password</title>
    <link rel="stylesheet" href="/styles/global.css" type="text/css">
    <link rel="stylesheet" href="/styles/change-password.css" type="text/css">
    <link rel="shortcut icon" href="/assets/albertos-pizza-mascot.png">
    <script src="/scripts/global.js" defer></script>
    <script src="/scripts/change-ps.js" defer></script>
</head>

<body>
    <div class="background-image"></div>
    <?php require_once dirname(__DIR__, 1) . "/components/header.php" ?>

    <main class="main">
        <div class="change_ps_container">
            <h1>Change your password</h1>
            <div class="input-field">
                <label for="password">New Password</label>
                <p class="tip">We require your password to have the following constraints:</p>
                <ul class="password-constraints">
                    <li>Must contain at least one symbol character.</li>
                    <li>Must contain at least one uppercase letter.</li>
                    <li>Must be at least 6 characters in length.</li>
                </ul>
                <input type="password" id="password" name="password">
                <p class="error" id="password-error">The password must meet the requirements mentioned above.</p>
            </div>
            <div class="input-field">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password">
                <p class="error" id="confirm-password-error">Passwords do not match.</p>
            </div>
            <button type="submit" class="signup-button">Save New Password</button>
        </div>
    </main>

    <?php require_once dirname(__DIR__, 1) . "/components/footer.php" ?>
</body>

</html>
