<?php


session_start();
if (isset($_SESSION['user'])) {
    // header("location:signin.php");
}



include_once "./../includes/connection.php";

$errors = [];

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];

    // Validate input
    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        $errors[] = "All fields are required";
    }

    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    }

    if ($password !== $passwordRepeat) {
        $errors[] = "Passwords don't match";
    }

    if (empty($errors)) {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $existingUser = $result->fetch_assoc();

        if ($existingUser) {
            $errors[] = "Email already exists. Please choose a different one.";
        } else {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $insertQuery = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $stmt = $connection->prepare($insertQuery);
            $stmt->bind_param("sss", $username, $email, $passwordHash);
            $stmt->execute();

            header("Location: signinController.php");
            exit();
        }
    }
}


include "../view/signin.php";
