<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./../style/signin.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 content mx-auto">
                <form class="login-form" method="post" action="../controller/signinController.php">
                    <h2>Login</h2>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Accepter</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>