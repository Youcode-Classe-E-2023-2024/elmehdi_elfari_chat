<?php

include_once("includes/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['room'])) {
    $room = $_POST['room'];

    if (strlen($room) > 15 || strlen($room) < 2) {
        $msg = "Please choose a room name between 2 to 15 characters.";
        echo "<script>alert('$msg');</script>";
    } else {
        $sql = "SELECT * FROM rooms WHERE roomname = '$room'";
        $result = $connection->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                $msg = "Room already in use! Please choose a different room name.";
                echo "<script>alert('$msg');</script>";
                echo "<script>window.location='http://localhost/mychat/room.php';</script>";
            } else {
                $query = "INSERT INTO rooms (roomname, ctime) VALUES ('$room', CURRENT_TIMESTAMP)";
                $resultS = $connection->query($query);

                if ($resultS) {
                    $msg = "Your room is ready for chat!";
                    echo "<script>alert('$msg');</script>";
                } else {
                    $msg = "Error creating room: " . mysqli_error($connection);
                    echo "<script>alert('$msg');</script>";
                    echo "<script>window.location='http://localhost/mychat/room.php?roomname=$room';</script>";
                }
            }
        } else {
            $msg = "Error: " . mysqli_error($connection);
        }
    }
}
