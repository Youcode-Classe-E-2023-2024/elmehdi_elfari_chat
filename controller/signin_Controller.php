<?php
include "includes/connection.php";
session_start();
if (isset($_POST['submit'])) {
    $users = new users($connection);
    $users->email = $_POST['email'];
    $users->password = $_POST['password'];

    $user = $users->getOneUser();

    if ($user) {
        if (password_verify($users->password, $user['password'])) {

            $_SESSION['user'] = 'yes';
            header("Location: index.php?page=home");
            die();
        } else {
            echo "<div class= 'alert alert-danger'>Password doesn't match</div>";
        }
    } else {
        echo "<div class= 'alert alert-danger'>Email doesn't match</div>";
    }
}
