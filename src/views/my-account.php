<?php
session_start(); // Start session

require_once dirname(__DIR__, 1) . "/database/database.php";

$error_taken = false;
$error_invalid_phone = false;

$databaseConnection = new DatabaseConnection("localhost", "albertos_db", "root", "");
$pdo = $databaseConnection->connect();

if($_SERVER['REQUEST_METHOD'] === "POST"){
    
    // Update user's name if form submitted was not empty
    if (!empty($_POST['updated_name'])) {
        $_SESSION['user_fullname'] = $_POST['updated_name']; 
    } 

    // Validate and update user's phone number
    $updatedPhone = $_POST['updated_phone'];

    if (!preg_match('/^09\d{9}$/', $updatedPhone)) {
        $error_invalid_phone = true;
    } else {
        // Check if the new phone number is already taken
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE user_contact_num = ?");
        $stmt->bindParam(1, $updatedPhone); 
        $stmt->execute();
        $phoneExists = $stmt->fetchColumn() > 0;

        if($phoneExists) {
            $error_taken = true;
        } else {
            // Update user's phone number in the database
            $stmt = $pdo->prepare("UPDATE users SET user_contact_num = ? WHERE user_id = ?");
            $stmt->bindParam(1, $updatedPhone); 
            $stmt->bindParam(2, $_SESSION['user_id']); 
            $stmt->execute();

            // Update user's phone number in the session
            $_SESSION['user_contact'] = $updatedPhone;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alberto's Pizza | Log-In</title>
    <link rel="stylesheet" href="/styles/global.css">
    <link rel="stylesheet" href="/styles/my-account.css">
    <link rel="shortcut icon" href="/public/assets/icons/albertos-pizza-mascot.png" />
    <script src="/scripts/global.js" defer></script>
    <script src="/scripts/my-account.js" defer></script>
</head>

<body>
    <div class="background-image"></div>
    <?php require_once dirname(__DIR__, 1) . "/components/header.php" ?>
    <main class="main">
        <div class="my-account-container">
            <h1>My Account</h1>

            <form action="/account" method="post" class="border">

                <div class="input-field">
                    <h2>Personal Information </h2>
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" name="updated_name" placeholder="<?php echo isset($_SESSION['user_fullname']) ? $_SESSION['user_fullname'] : ''; ?>">
                </div>
                <div class="input-field">
                    <label for="phone-number">Phone number</label>
                    <input type="tel" id="phone-number" name="updated_phone" placeholder="<?php echo isset($_SESSION['user_contact']) ? $_SESSION['user_contact'] : ''; ?>">
                    <?php if($error_taken): ?>
                        <em style="color: red; font-size: 14px ">Phone Number Already Taken</em>
                    <?php endif; ?>
                    <?php if($error_invalid_phone): ?>
                        <em style="color: red; font-size: 14px;">Invalid Phone Number</em>
                    <?php endif; ?>
                </div>
                <button type="submit" class="login-button">Update</button>
            </form>
        </div>
        <div class="my-account-container">
            <form action="/account/log-in" method="post" class="border">
                <h2>Change Password</h2>
                <div class="input-field">
                    <label for="old-password">Old Password</label>
                    <input type="password" id="old-password" placeholder="***** ">
                    <p class="error" id="password-error">The password must be at least 6 characters long.</p>
                </div>
                <div class="input-field">
                    <label for="confirmation">Confirmation</label>
                    <input type="password" id="confirmation" name="confirmation" placeholder="123456">
                </div>
                <button type="submit" class="small-button">Send code</button>
                <button type="button" class="verify-button">Verify Credentials</button>
            </form>
        </div>
        <div class="my-account-container">
            <form action="/account/log-in" method="post" class="border">
                <h2>Delivery Addresses</h2>
                <div id="address-container-wrapper">
                <div class="address-container">
                    <div class="input-field" id="address-input">
                        <label for="home-address">Home</label>
                        <input type="text" id="home-address" name="home-address" placeholder="Pinecrest Village, 123, Acacia Street, Brgy. Lahug, Cebu City, Cebu" disabled>
                    </div>
                    <div class="button-container">
                        <button type="submit" class="delete" onclick="deleteAddressContainer()"><img src="/public/assets/icons/delete.png" alt="Delete" class="delete-img"><span class="delete-text">delete</span></button>
                        <button type="button" class="edit" onclick="enableAddressEdit()"><img src="/public/assets/icons/edit.png" alt="Edit" class="edit-img"><span class="edit-text">edit</span></button>
                    </div>                    
                </div>
            </div>
                <button type="button" class="add-address-button" id="add-address-button" onclick="createAddressContainer()">Add Address</button>
            </form>
            <p class="see-all">See all of your delivery addresses</p>
        </div>
        <div class="my-account-container">
            <h2>Account Management</h2>
            <button type="button" class="log-button" id="log-button" onclick="logout()">Log-out of your account</button>
            <button type="button" class="delete-button" id="delete-button">Delete your account</button>
        </div>
    </main>

    <script src="script.js"></script>
    <?php require_once dirname(__DIR__, 1) . "/components/footer.php" ?>
</body>

</html>
