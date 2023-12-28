<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Room</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #343a40;
            color: #fff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content {

            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .rom {
            display: flex;
            justify-content: center;
            color: black;
            font-weight: bold;
        }

        .success-message {
            margin-top: 20px;
            padding: 10px;
            background-color: #dff0d8;
            border: 1px solid #b2dba1;
            color: #3c763d;
            border-radius: 5px;
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 content">
                <h1 class="mt-4 rom">Create Room</h1>
                <form id="createRoomForm" class="mt-4" action="croom.php" method="POST">
                    <div class="form-group">
                        <label for="roomName">Room Name:</label>
                        <input type="text" id="roomName" name="room" class="form-control" required placeholder="Create Room The Chat">
                    </div>
                    <button type="submit" class="btn btn-primary">Create Room</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- <script>
        document.getElementById('createRoomForm').addEventListener('submit', function(event) {
            event.preventDefault();

        });
    </script> -->
</body>

</html>