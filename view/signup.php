<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./../style/singup.css">

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 content mx-auto">
                <form class="registration-form" action="../controller/singupController.php" method="post">
                    <h2>Formulaire d'inscription</h2>
                    <div class="form-group">
                        <label for="username">Nom d'utilisateur :</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="passwordRepeat">Confirmation de passe :</label>
                        <input type="password" class="form-control" id="passwordRepeat" name="passwordRepeat" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                    <a href="signin.php" class="contet">Login</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>