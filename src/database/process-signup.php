<?php

if( empty($_POST["fullname"])){
    die("Full Name is required");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$fullname = $_POST["fullname"];
$phone = $_POST["phone"];

$uniqueId = $fullname . uniqid();

$sql = "INSERT INTO users (user_id, user_fullname, user_contact_num, user_password)
        VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if( ! $stmt->prepare($sql)){
    die("SQL Error: " . $mysqli->error);
}

mysqli_report(MYSQLI_REPORT_OFF);        # Stops code from displaying fatal error before execution

$stmt->bind_param("ssss", $uniqueId, $_POST["fullname"], $_POST["phone"], $password_hash);

if($stmt->execute()){   

    header("Location: /account/log-in"); // Current Placeholder redirect to indicate successful sign up 
    exit;

}
else{
    if($mysqli->errno === 1062){
        die("Phone Number Already Taken.");
    } else{
        die($mysqli->error . " " . $mysqli->errno);
    }
}