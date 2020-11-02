<?php
    include_once 'header.php';
?>

        <section id="home">
        <div class="stars">
            <section class="wrapper">
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
        </section>
    </div>
        <div class="greet">
            <div>
            <?php
                if (isset($_SESSION["useruid"])) {
                     echo "<p>Živjo " . $_SESSION["useruid"] . "</p>";
                    }
                ?>
            <h1>DOBRODOŠLI V OBSERVATORIJU!</h1>
            <p>Spletno štičišče študentov in podjetij, 
                kjer zgolj s prijavo v portal kandidirate 
                za delovna mesta na vašem akademskem področju.</p>
            </div>
            <!-- <img src="./Slikovni-material/MAINPIC.png" alt="main-pic" class="main-pic"> -->
        </div>
        <div class="signup_container">
                <h1>PRIDRUŽI SE PLATFORMI:</h1>
            <div class="buttons_sign">
                <a href="signup.php"><button id="search-job">REGISTRACIJA</button></a>
                <a href="signup_company.php"><button id="supply-job">ZA PODJETJA</button></a>
            </div>
        </div>
    </section>
        <!-- <div class="oval"></div> -->
        <section id="o_nas">
        <div class="about">
            <h2>O NAS</h2>
            <div class="onas_zgoraj">
                <div>
                <p>Spletna platforma xy je namenjena dijakom, 
                študentom in vsem mladim željanih dela. 
                Platforma deluje na principu pristopa 
                delodajalec - delojemalec torej obratno od 
                navadnih spletnih portalov te vrste.</p>

                <p>Več informacij kot jih zaupaš platformi, boljšo
                    sliko si bodo podjetja o tebi ustvarila in s tem
                    imaš večjo verjetnost povabila na razgovore.</p>
                </div>
                <img src="./Slikovni-material/ONAS_zgoraj.png" alt="Slikovni-material">
            </div>    
            <div class="onas_spodaj">
            <!-- <div> -->
            <img src="./Slikovni-material/spodaj_ONAS.png" alt="Slikovni-material">
            <!-- </div> -->
            <div>
            <p>Obogati svoj CV z izkušnjami, pri tem pa se posveti 
                študiju in se prepusti xy, preko katere te bodo kontaktirali 
                delodajalci.</p>

            <p>Slovenski in tuji delodajalci iščejo talentirane in 
                perspektivne kadre kot si ti. Ne zamudi priložnosti in se prijavi, 
                ter tako znanje, ki si ga pridobil izza šolskih klopi prenesi 
                v prakso.</p>  
            </div>
            </div>
        </div>
    </section>
    <section id="nabor_podjetij">
    <div class="nabor">
        <h2>NABOR PODJETIJ</h2>
        <div class="references">
            <img src="./Slikovni-material/REFERENCA1.png" alt="podjetje1">
            <img src="./Slikovni-material/REFERENCA2.png" alt="podjetje2">
            <img src="./Slikovni-material/REFERENCA3.png" alt="podjetje3">
        </div>
    </div>
    </section>
    </main>
    
<?php
    include_once 'footer.php';
?>