<?php

if(isset($_POST['submit'])) {
    /** @var array $db */
    /** @var array $error */

    require_once 'includes/database.php';

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    require_once 'includes/register_validation.php';

    if (empty($errors)) {
        $password = password_hash("$password", PASSWORD_DEFAULT);

        $query = "INSERT INTO users (email, password, first_name, last_name) VALUES ('$email','$password','$firstName','$lastName')";
        $result = mysqli_query($db, $query);

        if ($result) {
            mysqli_close($db);
            header("location:index.php");
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
    <title>Register</title>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito:wght@300;400;700&display=swap"
          rel="stylesheet">
</head>
<body>

</body>
</html>
