<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alberto's Pizza | Log-In</title>
    <link rel="stylesheet" href="/public/styles/global.css">
    <link rel="stylesheet" href="/public/styles/my-account.css">
    <link rel="shortcut icon" href="/public/assets/icons/albertos-pizza-mascot.png" />
    <script src="/public/scripts/global.js" defer></script>
    <script src="/public/scripts/my-account.js" defer></script>
</head>

<body>
    <div class="background-image"></div>
    <?php require_once dirname(__DIR__, 1) . "/components/header.php" ?>
    <main class="main">
        <div class="my-account-container">
            <h1>My Account</h1>

            <form action="/account/log-in" method="post" class="border">

                <div class="input-field">
                    <h2>Personal Information </h2>
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" placeholder="John Doe">
                </div>
                <div class="input-field">
                    <label for="phone-number">Phone number</label>
                    <input type="tel" id="phone-number" name="phone-number" placeholder="0987-543-210">
                    <p class="error" id="phone-error">The phone number you entered does not match the required format.</p>
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
            <form action="/account/log-in" method="post" class="border">
                <h2>Account Management</h2>
                <button type="button" class="log-button" id="log-button">Log-out of your account</button>
                <button type="button" class="delete-button" id="delete-button">Delete your account</button>
            </form>
        </div>
    </main>

    <script src="script.js"></script>
    <?php require_once dirname(__DIR__, 1) . "/components/footer.php" ?>
</body>

</html>
