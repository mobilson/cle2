<?php
/** @var mysqli $db */
require_once "includes/database.php";

// redirect when uri does not contain an id
if(!isset($_GET['id']) || $_GET['id'] == '') {
    // redirect to list.php
    header('Location: read.php');
    exit;
}

//Retrieve the GET parameter from the 'Super global'
$reserveringId = $_GET['id'];

//Get the record from the database result
$query = "SELECT * FROM `appointment`
            LEFT JOIN users ON appointment.user_id = users.id
            WHERE users.id = $reserveringId";

$result = mysqli_query($db, $query);

//If the album doesn't exist, redirect back to the homepage
if (mysqli_num_rows($result) == 0) {
    header('Location: read.php');
    exit;
}

$reservering = mysqli_fetch_assoc($result);

//Close connection
mysqli_close($db);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito:wght@300;400;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">


        <title>Details - <?= $reservering['user_id'] ?></title>
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

<div class="container px-4">
        <h1 class="title mt-4"><?= $reservering['firstname'] . " " . $reservering['lastname'] ?></h1>

    <section class="content">
        <ul>
            <li>Dag: <?= htmlentities($reservering['date'])  ?></li>
            <li>Klant: <?= htmlentities($reservering['user_id'])  ?></li>
            <li>Tijd: <?= htmlentities($reservering['time'])  ?></li>
            <li>Wat: <?= htmlentities($reservering['text'])  ?></li>
            <li>Nummer: <?= htmlentities($reservering['number'])  ?></li>


        </ul>
    </section>
    <div>
        <a class="button" href="read.php">Terug naar overzicht</a>
    </div>
</div>



</body>
</html>
