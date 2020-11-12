<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Observatorij | Nova doba kadrovanja</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./css/stars.css">
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>

    <header>
                <?php
                    if (isset($_POST["prijava"])) {
                        echo "<a href='profiles.php' class='logo'><img src='./Slikovni-material/LOGOnew.png' alt='LOGO'></a>";
                    }
                    else {
                        echo "<a href='index.php' class='logo'><img src='./Slikovni-material/LOGOnew.png' alt='LOGO'></a>";
                    }
                ?>

        <nav class="nav_links">
            <!-- <a href="#" class="hide-desktop">
                <img src="./Slikovni-material/hamburger.png" alt="toggle menu" class="menu" id="menu">
            </a> -->
            <ul class="show-desktop hide-desktop" id="nav">
                <!-- <li id="exit" class="exit-btn hide-desktop">
                    <img src="./Slikovni-material/exit.svg" alt="exit menu">
                </li> -->
                <?php
                    if (isset($_POST["prijava"])) {
                        echo "<li><a href='profiles.php'>Kandidati</a></li>";
                        echo "<li><a href='myprofile.php'>Profil</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>Odjava</a></li>";
                    }
                    else {
                        echo "<li><a href='#o_nas'>O nas</a></li>";
                        echo "<li><a href='#nabor_podjetij'>Nabor podjetij</a></li>";
                        echo "<li><a class='cta' href='login.php'><button>Prijava</button></a></li>";
                    }

                ?>
            </ul>
        </nav>
    </header>
    <main>