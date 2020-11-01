<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Observatorij | Nova doba iskanja talentov</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="stars.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <header>
            <a href="index.php" class="logo"><img src="./Slikovni-material/LOGOnew.png" alt="LOGO"></a>

        <nav class="nav_links">
            <!-- <a href="#" class="hide-desktop">
                <img src="./Slikovni-material/hamburger.png" alt="toggle menu" class="menu" id="menu">
            </a> -->
            <ul class="show-desktop hide-desktop" id="nav">
                <!-- <li id="exit" class="exit-btn hide-desktop">
                    <img src="./Slikovni-material/exit.svg" alt="exit menu">
                </li> -->
                <li><a href="#o_nas">O nas</a></li>
                <li><a href="#nabor_podjetij">Nabor podjetij</a></li>
                <?php
                    if (isset($_SESSION["userid"])) {
                        echo "<li><a href='profile.php'>Profil</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>Odjava</a></li>";
                    }
                    else {
                        echo "<li><a class='cta' href='login.php'><button>Prijava</button></a></li>";
                    }
                ?>
            </ul>
        </nav>
    </header>
    <main>