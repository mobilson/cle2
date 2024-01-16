<?php
session_start();
/** @var array[] $db */
require_once "includes/database.php";



if (!isset($_SESSION['login'])) {
    if (isset($_POST['submit'])) {

        $email = mysqli_escape_string($db, $_POST['email']);
        $password = mysqli_escape_string($db, $_POST['password']);

        require_once 'includes/login_validation.php';

        if (empty($errors)) {

            $emailquery = "SELECT * FROM `users` WHERE email = '$email'";
            $emailresult = mysqli_query($db, $emailquery);

            if ($emailresult) {

                $userdata = mysqli_fetch_assoc($emailresult);

                if ($userdata && password_verify($password, $userdata['password'])) {

                    $_SESSION['login'] = true;

                    header("location: home.php");
                }
                else {
                    $errors['loginFailed'] = "De inlog gegevens kloppen niet";
                }
            }
            if (empty($userdata)) {
                $errors['loginFailed'] = "Incorrect login. Email & Password don't match";
            }
        }
    }
}else{
    header("location: home.php");
    exit();
}

// Close the connection
if(isset($_POST['logout'])){
    unset($_SESSION['login']);
}

mysqli_close($db);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito:wght@300;400;700&display=swap"
          rel="stylesheet">
</head>

<body class="login-body">
    <main  class="login">
        <div class="login_logo">
            <a href="home.php">
                <img src="img/logo.png" alt="logo" id="logo">
            </a>
        </div>

        <div class="whitebox">
            <form class="login_form" method="post">
                <div>
                    <label class="label" for="firstName"><h2>Email</h2></label>
                </div>
                <div class="input">
                    <div>
                        <input class="input" id="firstName" type="text" name="email" placeholder="email" value="<?= $email ?? null ?>" />
                    </div>
                        <p class="error">
                            <?= $errors['email'] ?? null ?>
                        </p>
                </div>
                <div>
                    <label class="label" for="password"><h2>Wachtwoord</h2></label>
                </div>
                <div class="input">
                    <div>
                        <input class="input" id="password" type="password" name="password" placeholder="wachtwoord" />
                    </div>
                    <p class="error">
                        <?php if(isset($errors['password'])) { ?>
                            <?= htmlentities($errors['password']) ?? null ?>
                        <?php } ?>

                        <?php if(isset($errors['loginFailed'])) { ?>
                            <?= htmlentities($errors['loginFailed']) ?>
                        <?php } ?>
                    </p>
                </div>

                <div>
                    <button type="submit" name="submit">Login</button>
                </div>


                    <a class="register" href="register.php">Registreren</a>

            </form>
        </div>
    </main>
</body>

</html>
