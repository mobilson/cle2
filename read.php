<?php
require_once "includes/database.php";


//database connection
/** @var mysqli $database */


//Get the result set from the database with a SQL query
$query = "SELECT * FROM `appointment`";
$result = mysqli_query($database, $query) or die ('Error: ' . $query);

//Loop through the result to create a custom array
$reserveringen = [];
while ($row = mysqli_fetch_assoc($result)) {
    $reserveringen[] = $row;
}
//Close connection
mysqli_close($database);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="stylesheet.css">

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
        <a href="home.php">
            <img src="img/logo.png" alt="logo" id="logo">
        </a>
    </div>

    <section class="navigation">
        <a href="appointment.php">Afspraak</a>
        <a href="contact.php">Contact</a>
        <a href="login.php">
            <img src="icons/profile.png">
        </a>
    </section>
</nav>

<div class="header-home">
    <header>
        <a href="appointment.php">Afspraak</a>
        <a href="contact.php">Contact</a>
    </header>
</div>
<hr>

<div class="container px-4">
    <h1 class="title mt-4">Reserveringen</h1>
    <hr>
    <table class="table is-bordered is-striped  is-hoverable is-fullwidth">
        <thead>
        <tr>
            <th>#</th>
            <th>Naam</th>
            <th>Datum</th>
            <th>Tijd</th>
            <th>Wat</th>
            <th></th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($reserveringen as $index => $reservering) { ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= htmlentities($reservering['naam'])  ?></td>
                <td><?= htmlentities($reservering['date'])  ?></td>
                <td><?= htmlentities($reservering['text']) ?></td>

                <form class="space" action="" method="post">
                    <section class="control">
                        <button type="submit" name="delete_button" class="button is-link is-danger">Verwijderen</button>
                    </section>
                </form>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<footer>
    <div class="column">

        <div class="row">
            <img src="icons/telefoon.png" alt="phone icon">
            <p>0612345678</p>
        </div>

        <div class="row-envelope">
            <img src="icons/mail.png"> <p>BiancaMuijs@hotmail.com</p>
        </div>

        <div class="row">
            <img src="icons/locatie.png"> <p>Siardusbogeartslaan 1</p>
        </div>

        <div class="footer-logo">
            <img src="img/logo.png">
        </div>

    </div>

    <div class="privacy">
        <a>Privacy verklaring</a>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.409918744195!2d4.372323876465173!3d51.43226537179637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c40df548c20c91%3A0x5f60fcf34697416d!2sSiardus%20Bogaertslaan%208%20A%2C%204635%20CM%20Huijbergen!5e0!3m2!1snl!2snl!4v1705049685361!5m2!1snl!2snl" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</footer>
</body>
</html>
