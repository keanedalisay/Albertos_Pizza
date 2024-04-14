<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/../db_connections/database.php";


    $sql = sprintf(
        "SELECT * FROM users WHERE user_contact_num = '%s'",
        $mysqli->real_escape_string($_POST["phone-number"])
    );


    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($_POST["password"], $user["user_password"])) {
            header("Location: login-success.html");
        }
    }

    $is_invalid = true;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alberto's Pizza | Log-In</title>
    <link rel="stylesheet" href="/styles/global.css">
    <link rel="stylesheet" href="/styles/log-in.css">
    <link rel="shortcut icon" href="/assets/icons/albertos-pizza-mascot.png" />
    <script src="/scripts/global.js" defer></script>
    <script src="/scripts/log-in.js" defer></script>
</head>

<body>
    <div class="background-image"></div>
    <?php require_once dirname(__DIR__, 1) . "/components/header.php" ?>
    <main class="main">
        <div class="log_in_container">
            <h1>Log In to your Account</h1>

            <?php if ($is_invalid): ?>
                <em style="color: red;">Invalid Login</em>
            <?php endif; ?>

            <form method="post">
                <div class="input-field">
                    <label for="phone-number">Phone number</label>
                    <input type="tel" id="phone-number" name="phone-number" placeholder="0987-654-3210">
                    <p class="error" id="phone-error">The phone number you entered does not match the required format.
                    </p>
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    <p class="error" id="password-error">The password must be at least 6 characters long.</p>
                    <a href="#">Forgot password?</a>
                </div>
                <div class="checkbox-field">
                    <input type="checkbox" id="remember-me" name="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <button type="submit" class="login-button">Log-In</button>
                <button type="button" class="login-button">Sign up with Google</button>
            </form>
        </div>
    </main>
    <?php require_once dirname(__DIR__, 1) . "/components/footer.php" ?>

    <script src="script.js"></script>
</body>

</html>