<?php
    include_once 'header.php';
?>

    <section class="signup_form">
        <div id="form">
        <h2>Prijava za podjetja:</h2>
        <form action="includes/login_company.inc.php" method="post">
            <input type="text" name="uid" placeholder="Ime podjetja...">
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
                <div class="nav_links">
                    <div id="prijava_link">
                        <li>
                            <a href="signup_company.php">Registracija za podjetja</a>
                        </li>
                    </div>
                </div>
        </div>
    </section>


<?php
    include_once 'footer.php';
?>