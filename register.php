<?php
session_start();

if(isset($_POST['submit'])) {
    /** @var array $db */
    /** @var array $error */

    require_once 'includes/database.php';

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];


    require_once 'includes/register_validation.php';

    if (empty($errors)) {
        $password = password_hash("$password", PASSWORD_DEFAULT);

        $query = "INSERT INTO users (firstname, lastname, email, password, number) VALUES ('$firstName','$lastName','$email','$password','$number')";
        $result = mysqli_query($db, $query);

        if ($result) {
            mysqli_close($db);
            header("location:home.php");
            exit();
        }
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registreren</title>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito:wght@300;400;700&display=swap"
          rel="stylesheet">
</head>

<body class="register-body">
<main  class="register">
    <div class="whitebox_register">
        <form class="register_form" method="post">
            <div>
                <label class="label" for="firstname"><h2>Voornaam</h2></label>
            </div>
            <div class="input">
                <div>
                    <input class="input" id="firstname" type="text" name="firstname" placeholder="voornaam" value="<?= $firstName ?? null ?>" />
                </div>
                <p class="error">
                    <?= $errors['firstName'] ?? null ?>
                </p>
            </div>

            <div>
                <label class="label" for="lastname"><h2>Achternaam</h2></label>
            </div>
            <div class="input">
                <div>
                    <input class="input" id="lastname" type="text" name="lastname" placeholder="voornaam" value="<?= $lastName ?? null ?>" />
                </div>
                <p class="error">
                    <?= $errors['lastName'] ?? null ?>
                </p>
            </div>

            <div>
                <label class="label" for="email"><h2>Email</h2></label>
            </div>
            <div class="input">
                <div>
                    <input class="input" id="email" type="text" name="email" placeholder="email" value="<?= $email ?? null ?>" />
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
                <label class="label" for="number"><h2>Telefoonnummer</h2></label>
            </div>
            <div class="input">
                <div>
                    <input class="input" id="number" type="text" name="number" placeholder="telefoonnummer" value="<?= $number ?? null ?>" />
                </div>
                <p class="error">
                    <?= $errors['number'] ?? null ?>
                </p>
            </div>

            <div>
                <button type="submit" name="submit">Registreren</button>
            </div>

            <a class="login_button" href="login.php">Ik heb al een account</a>

        </form>
    </div>

    <div class="register_logo">
        <a href="home.php">
        <img src="img/logo.png" alt="logo" id="register_logo">
            </a>
    </div>

</main>
</body>

</html>
