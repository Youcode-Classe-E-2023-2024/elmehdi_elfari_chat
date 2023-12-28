<?php
include_once("../includes/connection.php");

$room = $_POST['room'];
$res = "";

$sql = "SELECT message, ctime, ip FROM messages WHERE room = '$room'";
$result = $connection->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $res .= '<div class="container">';
        $res .= $row['ip'] . " Says <p>" . $row['message'] . '</p> <span class="time-right">' . $row['ctime'] . '</span></div>';
    }
}

$connection->close();
echo $res;
