<?php
session_start();
// Include the DatabaseConnection class file
require_once dirname(__DIR__, 1) . "/database/database.php";

// Defining a class for handling user authentication (Log in)
class UserAuthenticator {
    private $pdo;

    // Constructor to initialize the PDO object
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Method to authenticate user
    public function authenticateUser($phoneNumber, $password) {
        $sql = "SELECT * FROM users WHERE user_contact_num = :phone_number";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array(':phone_number' => $phoneNumber));
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user["user_password"])) {
            return $user;
        } else {
            return false;
        }
    }
}

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Create an instance of DatabaseConnection
    $databaseConnection = new DatabaseConnection("localhost", "albertos_database", "root", "");

    // Call the connect() method to establish a connection
    $pdo = $databaseConnection->connect();

    // Creating an instance of the UserAuthenticator class
    $userAuthenticator = new UserAuthenticator($pdo);

    // Authenticate user
    $user = $userAuthenticator->authenticateUser($_POST["phone-number"], $_POST["password"]);

    if ($user) {
        $_SESSION['user_id'] = $user['user_id']; // Assuming user_id is the unique identifier for the user
        $_SESSION['user_fullname'] = $user['user_fullname']; // Assuming user_id is the unique identifier for the user
        $_SESSION['user_contact'] = $user['user_contact_num']; // Assuming user_id is the unique identifier for the user

        header("Location: /");
        exit;
    } else {
        // Set flag to indicate invalid login
        $is_invalid = true;
    }

    // closing the connection when done
    $databaseConnection->close();
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

            <form action="/account/log-in" method="post">
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
                    <a href="/account/log-in/forgot-password">Forgot password?</a>
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
