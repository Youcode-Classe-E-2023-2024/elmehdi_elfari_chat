<?php
include_once "includes/connection.php");

if (isset($_POST['message'], $_POST['room'], $_POST['ip'])) {
    $msg = $_POST['message'];
    $room = $_POST['room'];
    $ip = $_POST['ip'];

    $sql = "INSERT INTO messages (message, room, ip, ctime) VALUES (?, ?, ?, CURRENT_TIMESTAMP)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sss", $msg, $room, $ip);
    $stmt->execute();

    $stmt->close();
    header('Location: index.php?page=croom')
} else {
    echo "Incomplete data received!";
}
