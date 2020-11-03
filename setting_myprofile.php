<?php
    include_once 'header.php';
?>

<section class="setting_profile">
    <!-- <div id="form"> -->
    <h2>Moj profil:</h2>
    <!-- <form action="includes/signup.inc.php" method="post"> -->
    <div>
        <label for="profile_pic">Profilna slika:</label>
        <input type="file" id="profile_pic" name="profile_image">
        <label for="name">Ime in priimek:</label>
        <input type="text" name="name" id="name" placeholder="Ime in priimek...">
        <label for="mesto">Mesto:</label>
        <input type="text" id="mesto" name="hometown" placeholder="Mesto...">
        <label for="birtday">Rojstni dan</label>
        <input type="date" name="birthday" id="birthday">
    </div>
    <div>
        <label for="uni">Fakulteta:</label>
            <input type="text" name="uni" id="uni" placeholder="Fakulteta...">
        <label for="povprecna_ocena">Povprečna ocena:</label>
            <input type="number" id="povprecna_ocena" name="grade" min="5" max="10">
       <label for="certificates">Dodatna znanja/certifikati:</label>
            <input type="text" name="cetrtificates" placeholder="Dodatna znanja/Certifikati..." id="certificates">
    </div>
    <div>
        <label for="languages">Tuji jeziki:</label>
            <input type="text" name="languages" id="languages" placeholder="Tuji jeziki...">
            <input type="radio" id="A2" name="level" value="A2">
            <label for="A2">A2</label><br>
            <input type="radio" id="A1" name="level" value="A1">
            <label for="A1">A1</label><br>
            <input type="radio" id="B2" name="level" value="B2">
            <label for="B2">B2</label><br>
            <input type="radio" id="B1" name="level" value="B1">
            <label for="B1">B1</label><br>
            <input type="radio" id="C2" name="level" value="C2">
            <label for="C2">C2</label><br>
            <input type="radio" id="C1" name="level" value="C1">
            <label for="C1">C1</label><br>
        </div>
        <div>
            <p>Vnesite od kdaj do kdaj bi želeli delati:</p>
            <label for="datemax"></label>
            <input type="date" id="datemax" name="datemax" max="today"><br><br>
            <label for="datemin"></label>
            <input type="date" id="datemin" name="datemin" min="01.01.2030">
            <p>CV</p>
            <input type="file" name="CV">
        </div>
        <div>
            <input type="password" name="pwd" placeholder="Geslo...">
            <input type="password" name="pwdrepeat" placeholder="Ponovi geslo...">
        </div>
        <button type="submit" name="shrani" href="myprofile.php">Shrani</button>
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
            echo "<p>Spremembe shranjene!</p>";
        }
    }
    ?>
        </div>
    </div>
</section>

<?php
    include_once 'footer.php';
?>