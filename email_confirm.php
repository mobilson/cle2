<?php
session_start();
?>
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

<main class="main-email">
    <div class="main_text_email">
        <p> De resevering is gelukt!
            Er is een bevestigings mail verstuurd naar u email.
        </p>
        <a href="home.php" type="submit" name="submit">Home</a>
    </div>


</main>

<footer class="email_footer">
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
        <a href="privacy.php">Privacy verklaring</a>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.409918744195!2d4.372323876465173!3d51.43226537179637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c40df548c20c91%3A0x5f60fcf34697416d!2sSiardus%20Bogaertslaan%208%20A%2C%204635%20CM%20Huijbergen!5e0!3m2!1snl!2snl!4v1705049685361!5m2!1snl!2snl" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</footer>

</body>

</html>
