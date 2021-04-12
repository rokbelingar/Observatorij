<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Observatorij | Nova doba kadrovanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>

    <header>
                <?php
                    if (isset($_SESSION["userid"])) {
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
                    if (isset($_SESSION["userid"])) {
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
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <main>