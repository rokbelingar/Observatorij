<?php
    include_once 'header.php';
?>

    <section class="signup_form">
        <div id="form">
        <h2>Prijava:</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Ime/Email...">
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
                <div id="nav_links">

                        <li>
                            <a href="signup.php">Registracija</a>
                        </li>
                        <li>
                            <a href="login_company.php">Prijava za podjetja</a>
                        </li>
                        <li>
                            <a href="signup_company.php">Registracija za podjetja</a>
                        </li>
                </div>
        </div>
    </section>


<?php
    include_once 'footer.php';
?>