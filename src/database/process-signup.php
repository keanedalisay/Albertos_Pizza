<?php

class User {
    
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function registerUser($fullname, $phone, $password) {
        if (empty($fullname) || empty($phone) || empty($password)) {
            return "Full Name, Phone Number, and Password are required";
        }

        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $uniqueId = $fullname . uniqid();

        $sql = "INSERT INTO users (user_id, user_fullname, user_contact_num, user_password)
                VALUES (?, ?, ?, ?)";
        
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(1, $uniqueId);
            $stmt->bindParam(2, $fullname);
            $stmt->bindParam(3, $phone);
            $stmt->bindParam(4, $password_hash);

            if ($stmt->execute()) {
                return true;
            } else {
                $errorInfo = $stmt->errorInfo();
                if ($errorInfo[1] === 1062) {
                    return "Phone Number Already Taken.";
                } else {
                    return $errorInfo[2];
                }
            }
        } catch (PDOException $e) {
            return "PDO Error: " . $e->getMessage();
        }
    }
}

$pdo = require __DIR__ . "/database.php";
$user = new User($pdo);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $registerResult = $user->registerUser($_POST["fullname"], $_POST["phone"], $_POST["password"]);

    if ($registerResult === true) {
        header("Location: /account/log-in"); // Redirect on successful sign up 
        exit;
    } else {
        die($registerResult);
    }
}