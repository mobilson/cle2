<?php
/** @var array[] $db */
require_once "includes/database.php";

session_start();

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

                    header("location: index.php");
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
} else {
    header("location: index.php");
    exit();
}

// Close the connection
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
            <img src="img/logo.png" alt="logo" id="login_logo">
        </div>

        <div class="whitebox">
            <form class="login_form">
                <label>Naam</label>
            </form>
        </div>
    </main>
</body>

</html>
