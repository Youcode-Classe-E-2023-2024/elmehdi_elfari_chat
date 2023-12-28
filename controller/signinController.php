<?php
include "./../includes/connection.php";
session_start();
if (isset($_SESSION['user'])) {
    // header("location:index.php");
}

if (isset($_POST['submit'])) {


    $users = new users($connection);
    $users->email = $_POST['email'];
    $users->password = $_POST['password'];

    $user = $users->getOneUser();


    if ($user) {
        if (password_verify($users->password, $user['password'])) {

            $_SESSION['user'] = 'yes';
            header("location:index.php");
            die();
        } else {
            echo "<div class= 'alert alert-danger'>Password doesn't match</div>";
        }
    } else {
        echo "<div class= 'alert alert-danger'>Email doesn't match</div>";
    }
}

include "../view/signin.php";
