<!doctype html>
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

<div class="header-home">
    <header>
        <a href="appointment.php">Afspraak</a>
        <a href="contact.php">Contact</a>
    </header>
</div>

<main class="privacy-main">
    <p>Praktijk voor mondhygiëne gebruikt patiëntengegevens alleen voor het doel waarvoor de gegevens zijn opgeslagen.
        Praktijk voor mondhygiëne deelt patiëntengegevens niet met derden, tenzij dit voor het opslagdoel nodig is.
        Praktijk voor mondhygiëne bewaart patiëntengegevens niet langer dan nodig is op basis van het opslagdoel van de
        gegevens.
        Praktijk voor mondhygiëne houdt met alle mogelijke middelen en maatregelen patiëntengegevens veilig
        voor inzage van onbevoegden. Praktijk voor mondhygiëne vraagt toestemming aan de patiënten voor het opslaan van
        persoonsgegevens, als er geen behandelcontract gesloten is.
        Praktijk voor mondhygiëne informeert patiënten
        over de rechten van de patiënt ten aanzien van zijn persoonsgegevens. Praktijk voor mondhygiëne informeert
        haar patiënten over het doel van de verwerking van persoonsgegevens. Praktijk voor mondhygiëne informeert
        patiënten indien Praktijk voor mondhygiëne bijzondere handelingen met de persoonsgegevens gaat verrichten.
    </p>
</main>

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
        <a href="privacy.php">Privacy verklaring</a>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.409918744195!2d4.372323876465173!3d51.43226537179637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c40df548c20c91%3A0x5f60fcf34697416d!2sSiardus%20Bogaertslaan%208%20A%2C%204635%20CM%20Huijbergen!5e0!3m2!1snl!2snl!4v1705049685361!5m2!1snl!2snl" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</footer>
</body>

</html>