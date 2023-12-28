<?php

include_once("includes/connection.php");

$roomname = '';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['room'])) {
    $roomname = $_GET['room'];


    $sql = "SELECT * FROM rooms WHERE roomname = '$roomname'";
    $result = $connection->query($sql);

    if ($result && $result->num_rows == 0) { // Added a check for $result
        $msg = "This room does not exist. Kindly create a room first.";
        echo "<script>alert('$msg');</script>";
        echo "<script>window.location='http://localhost/mychat/room.php?room=$roomname';</script>";
        exit(); // Stop further execution
    }
}
?>

<!DOCTYPE html>
<html>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0 auto;
            max-width: 800px;
            padding: 0 20px;
        }

        .container {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        .darker {
            border-color: #ccc;
            background-color: #ddd;
        }

        .container::after {
            content: "";
            clear: both;
            display: table;
        }

        .container img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }

        .container img.right {
            float: right;
            margin-left: 20px;
            margin-right: 0;
        }

        .time-right {
            float: right;
            color: #aaa;
        }

        .content {
            margin-top: 4rem;
        }

        .anyclass {
            height: 400px;
            overflow-y: scroll;
        }

        .time-left {
            float: left;
            color: #999;
        }
    </style>
</head>

<body>
    <div class="content">
        <h2>Mehdi</h2>
        <div class="container">
            <div class="anyclass">

            </div>
        </div>

        <form id="messageForm" method="POST">
            <input type="hidden" name="room" value="<?php echo $roomname ?>">
            <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>">

            <div class="form-group">
                <label for="messageInput"></label>
                <input type="text" id="messageInput" name="message" class="form-control" required placeholder="Type your message">
            </div>
            <button type="submit" name="submit" id="submit" class="btn btn-success">Send</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        setInterval(runFunction, 1000);

        function runFunction() {
            $.post("fetchmsg.php", {
                room: '<?php echo $roomname ?>'
            }, function(data, status) {
                document.getElementsByClassName('anyclass')[0].innerHTML = data;
            });
        }

        var input = document.getElementById("messageInput");

        input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("submit").click();
            }
        });

        $("#submit").click(function(event) {
            event.preventDefault();
            var clientmsg = $("#messageInput").val();
            $.post("postmsg.php", {
                message: clientmsg,
                room: '<?php echo $roomname ?>',
                ip: '<?php echo $_SERVER['REMOTE_ADDR'] ?>'
            }, function(data, status) {
                document.getElementsByClassName('anyclass')[0].innerHTML = data;
            });

            $("#messageInput").val("");
        });
    </script>


</body>

</html>