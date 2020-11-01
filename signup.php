<?php
    include_once 'header.php';
?>

<section class="signup_form">
    <div id="form">
    <h2>Registracija:</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Ime in priimek...">
        <input type="text" name="email" placeholder="Email...">
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
    </div>
</section>

<?php
    include_once 'footer.php';
?>