<?php
session_start();
require_once "includes/database.php";
/** @var mysqli $db */

if (isset($_SESSION['login']) && $_SESSION['role'] === 'admin') {
    //database connection

//Get the result set from the database with a SQL query
    $query = "SELECT * FROM `appointment`
            LEFT JOIN `users` ON appointment.user_id = users.id";
    $result = mysqli_query($db, $query) or die ('Error: ' . $query);

//Loop through the result to create a custom array
    $reserveringen = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $reserveringen[] = $row;
    }
//Close connection

} else{
    header('location:login.php');
}

mysqli_close($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="stylesheet.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito:wght@300;400;700&display=swap"
          rel="stylesheet">

    <title>Document</title>
</head>
<body>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito:wght@300;400;700&display=swap"
          rel="stylesheet">
</head>

<body>
<nav>
    <div class="logo">
        <a href="index.php">
            <img src="img/logo.png" alt="logo" id="logo">
        </a>
    </div>

    <section class="navigation">
        <a href="appointment.php">Afspraak</a>
        <a href="contact.php">Contact</a>
        <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'){?>
            <a href="read.php">Overzicht</a>
        <?php }  ?>

        <?php if(isset($_SESSION['login'])){?>
            <a href="logout.php">logout</a>
            <!--            <form method="post" action="home.php">-->
            <!--                <button name="logout" class="save" type="submit" >Logout</button>-->
            <!--            </form>-->
        <?php }?>
        <a href="login.php">
            <img src="icons/profile.png">
        </a>
    </section>
</nav>

<main class="main-read">
    <div class="container px-4">
        <h1 class="title mt-4">Reserveringen</h1>
        <hr>
        <table class="table is-bordered is-striped  is-hoverable is-fullwidth">
            <thead>
            <tr>
                <th>Naam</th>
                <th>Datum</th>
                <th>Tijd</th>
                <th>Wat</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($reserveringen as $index => $reservering) { ?>
                <tr>
                    <td><?= htmlentities($reservering['firstname'])  ?></td>
                    <td><?= htmlentities($reservering['date'])  ?></td>
                    <td><?= htmlentities($reservering['time']) ?></td>
                    <td><a href="detail.php?id=<?= $reservering['id'] ?>">Details</a></td>

                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</main>
<hr>


</body>
</html>