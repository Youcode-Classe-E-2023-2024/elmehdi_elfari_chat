<?php
include_once 'model/Users.php';
spl_autoload_register(function ($class) {
    require "model/$class.php";
});
if (isset($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = "signup";
}
$allControllers = scandir("controller");
if (in_array($page . '_Controller.php', $allControllers)) {
    include 'model/' . $page . '_model.php';
    include 'Controller/' . $page . '_controller.php';
    include 'view/' . $page . '_view.php';
} else {
}
