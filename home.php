<?php
session_start();

if(isset($_POST['logout'])){
    unset($_SESSION['login']);
}

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

        <?php if(isset($_SESSION['login'])){?>
            <form method="post" action="home.php">
                <button name="logout" class="save" type="submit" >Logout</button>
            </form>
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

<main class="main-home">
<div class="main-text-home">
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla pharetra ligula in eros posuere, eu varius
        dolor gravida. Quisque vel rhoncus orci. In ornare quam eu accumsan semper. Aliquam dui ex, placerat a
        iaculis pharetra, varius id lacus. Vestibulum ac tincidunt nisi, sed fermentum erat. Proin at vulputate
        lorem, ut sodales tortor. Integer ac felis augue. In porttitor velit in dui aliquam, et viverra lorem
        commodo. Cras sodales justo in lacus pellentesque, sit amet hendrerit mauris condimentum. Etiam fermentum
        cursus neque nec suscipit.
       </p>
</div>

    <div class="opening-times">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 881 830.5"
             style="enable-background:new 0 0 881 830.5;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill: #86CBE8;
                    }

                    .st1 {
                        fill: #FFFFFF;
                    }

                    .st2 {
                        font-family: BebasNeue-Regular, 'Bebas Neue';
                    }

                    .st3 {
                        font-size: 72px;
                    }

                    .st4 {
                        font-size: 48px;
                    }
                </style>
            <path class="st0"
                  d="M829,167.4C812.1,110.2,764.8,70,709.4,52c-18.4-6-38.2-7.3-57.1-9.9c-25.5-1.7-51.3,0.2-76.8,2.6
            	c-39.7,3.7-80.2,8.7-118.2,21.2c-44,14.5-84.9,36.2-118.3,68.6c-16.1,15.6-29.9,34-42,52.8c-8.8,13.7-16.3,28.2-23.1,43
            	c-7.9,17.2-15.2,34.7-22.5,52.1c-6,13.9-12.1,27.8-19.1,41.2c-8.9,17.3-19.7,33.1-31.1,48.8c-5.8,7.9-11.5,16-16.4,24.5
            	c-2.5,4.4-4.7,8.9-6.7,13.5c-4.6,10.5-9.7,21.1-12.6,32.3c-2.9,11.1-4,22.9-5.2,34.2c-0.5,4.5-0.7,9-0.6,13.6
            	c0.4,13,3,25.9,4.7,38.6c4,18.4,11.6,36.6,20.5,53.4c9.4,17.8,23.3,33.1,35.4,48.7c16.2,13.7,33.2,28.1,51.8,39.2
            	c41.3,24.6,88.9,38.1,135.7,47.8c39.6,8.2,79.7,14,119.9,18.7c5.4,0.6,10.8,2,15.8,4.1c0,0,0,0,0.1,0c14,5.7,29.4,7.8,44.4,8.7
            	c4.2,0.2,8.3,0.1,12.5-0.3c10.4-1,21.1-2.2,31.3-4.7c28.9-7.2,54.8-23.1,76.9-42.7c11-9.8,20-21.9,28.8-33.7
            	c5.8-7.8,11-16,15.5-24.6c12.2-23.1,21.7-47.9,29.9-72.7c6.8-20.8,12.6-41.8,17.4-63.2c10.8-48.3,17.1-98.1,18.4-147.6
            	c0.2-7,0.3-14,0.2-21.1c-0.1-23.8,2.4-47.5,7.9-70.7c0.2-1,0.5-2,0.7-3C834.9,233.5,838.5,199.6,829,167.4L829,167.4z" />
            <path class="st0" d="M191.3,710.5c-1-21.9-8.2-44.7-24.8-60c-16.6-15.2-37-24.8-60-24.8c-21.7,0-44.6,9.5-60,24.8
            	c-8.3,7.7-14.1,16.8-17.5,27.3c-5.3,10.1-7.7,21-7.3,32.7c1,21.9,8.2,44.7,24.8,60c16.6,15.2,37,24.8,60,24.8
            	c21.7,0,44.6-9.5,60-24.8c8.3-7.7,14.1-16.8,17.5-27.3C189.3,733.1,191.7,722.2,191.3,710.5z" />
            <text transform="matrix(1 0 0 1 383.94 217.19)" class="st1 st2 st3">Openingstijden</text>
            <text transform="matrix(1 0 0 1 315.12 353.06)" class="st1 st2 st4">MA</text>
            <text transform="matrix(1 0 0 1 315.12 410.66)" class="st1 st2 st4">DI</text>
            <text transform="matrix(1 0 0 1 315.12 468.26)" class="st1 st2 st4">WO</text>
            <text transform="matrix(1 0 0 1 315.12 525.86)" class="st1 st2 st4">DO</text>
            <text transform="matrix(1 0 0 1 315.12 583.46)" class="st1 st2 st4">VR</text>
            <text transform="matrix(1 0 0 1 476.56 353.31)" class="st1 st2 st4">08:00 - 17:00</text>
            <text transform="matrix(1 0 0 1 476.56 410.31)" class="st1 st2 st4">08:00 - 17:00</text>
            <text transform="matrix(1 0 0 1 476.56 468.31)" class="st1 st2 st4">08:00 - 17:00</text>
            <text transform="matrix(1 0 0 1 476.56 526.31)" class="st1 st2 st4">08:00 - 12:00</text>
            <text transform="matrix(1 0 0 1 476.56 583.31)" class="st1 st2 st4">08:00 - 12:00</text>
            </svg>
    </div>

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
        <a>Privacy verklaring</a>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.409918744195!2d4.372323876465173!3d51.43226537179637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c40df548c20c91%3A0x5f60fcf34697416d!2sSiardus%20Bogaertslaan%208%20A%2C%204635%20CM%20Huijbergen!5e0!3m2!1snl!2snl!4v1705049685361!5m2!1snl!2snl" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</footer>

</body>

</html>