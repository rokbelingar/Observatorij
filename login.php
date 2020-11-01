<?php
    include_once 'header.php';
?>

    <section class="signup_form">
        <div id="form">
        <h2>Prijava:</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Email/Ime in priimek...">
            <input type="password" name="pwd" placeholder="Geslo...">
            <button type="submit" name="submit">Prijava!</button>
        </form>
            <?php
        if(isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Zapolni vse protorčke!</p>";
            }
            else if ($_GET["error"] == "wronglogin"){
                echo "<p>Prijava ni uspela...</p>";
            }
        }
        ?>
        </div>
    </section>


<?php
    include_once 'footer.php';
?>