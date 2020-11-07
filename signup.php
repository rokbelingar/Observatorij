<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>

<?php
    include_once 'header.php';
?>

<section class="signup_form">
    <div id="form">
    <h2>Registracija:</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Ime in priimek...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="hometown" placeholder="Mesto...">
        <input type="number" name="age" placeholder="Starost..." min = "16" max= "65">
        <input type="number" name="ocena" placeholder="Povprečna ocena..." min = "6" max= "10" step=".01">
        <input type="date" name="from_date" placeholder="Datum začetka..." id="from_date" min="<?php echo date("Y-m-d"); ?>">
        <input type="date" name="to_date" placeholder="datum zaključka..." id="to_date">
        <input type="password" name="pwd" placeholder="Geslo...">
        <input type="password" name="pwdrepeat" placeholder="Ponovi geslo...">
        <button type="submit" name="submit">Nadaljuj</button>
    </form>
    <?php
    if(isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Zapolni vse protorčke</p>";
        }
        else if ($_GET["error"] == "invalidname"){
            echo "<p>Vaš ime in priimek</p>";
        }
        else if ($_GET["error"] == "invalidemail"){
            echo "<p>Vaš email</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch"){
            echo "<p>Gesla se ne ujemata</p>";
        }
        #spodaj je nepotreben error(facebook protokol imen...)
        else if ($_GET["error"] == "nametaken"){
            echo "<p>Ta kombinacija imena in priimka je že zauzeta!</p>";
        }
        else if ($_GET["error"] == "stmtfailed"){
            echo "<p>Nekaj je narobe, poizkusite še enkrat!</p>";
        }
        else if ($_GET["error"] == "none"){
            echo "<p>Registrirani ste!</p>";
        }
    }
    ?>
        <div class="nav_links">
                    <div id="registracija_link">
                        <li>
                           <p>Že imate profil?  <a href="login.php"> Prijava</a></p>
                        </li>
                    </div>
                </div>
        </div>
    </div>
</section>

<?php
    include_once 'footer.php';
?>

</body>
</html>