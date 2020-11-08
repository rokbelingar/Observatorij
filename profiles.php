<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>

    <section class="profile_container">
    <div class="filters">
        <div class="filter-box">
        <form action="filter.php" method="POST">
        <h2>Filtri:</h2>
        <input type="text" name="hometown" placeholder="Mesto...">
        <input type="number" name="age" placeholder="Starost..." min = "16" max= "65">
        <input type="text" name="fakulteta" placeholder="fakulteta/šola/zavod...">
        <input type="number" name="ocena" placeholder="Povprečna ocena..." min = "6" max= "10" step=".01">
        <input type="text" name="zanima_me" placeholder="Vrsta dela...">
        <input type="date" name="from_date" placeholder="Datum začetka..." id="from_date" min="<?php echo date("Y-m-d"); ?>">
        <input type="date" name="to_date" placeholder="datum zaključka..." id="to_date">
        <a href="filter.php" id="filtriraj"><button name='filter'>Filtriraj</button></a>
        </form>
        </div>
        <?php

    include_once 'includes/dbh.inc.php';

    if(isset($_POST['filter'])){
    $hometown = $_POST["hometown"];
    $age = $_POST["age"];
    $fakulteta = $_POST["fakulteta"];
    $ocena = $_POST["ocena"];
    $zanima_me = $_POST["zanima_me"];
    $from_date = $_POST["from_date"];
    $fdate = strtotime($from_date);
    $fdate = date("Y/m/d", $fdate);

    $to_date = $_POST["to_date"];
    $tdate = strtotime($to_date);
    $tdate = date("Y/m/d", $tdate);

    if($hometown != "" || $age != "" || $fakulteta != "" || $ocena != "" || $zanima_me != "" || $fdate != "" || $tdate !=""){
        $sql = "SELECT * FROM users WHERE hometown = '$hometown' OR age = '$age' OR fakulteta = '$fakulteta' OR ocena = '$ocena' OR zanima_me = '$zanima_me' OR from_date <= '$fdate' AND to_date >= '$tdate'";
        $result = mysqli_query($conn, $sql) or die('error');

        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<a href="#">
                    <div class="thecard">
                    <div class = "thefront">
                    <h3>'.$row["usersName"].'</h3>
                    <p>'.$row["fakulteta"].'</p>
                    <p>Od: '.$row["from_date"].'</p>
                    <p>Do: '.$row["to_date"].'</p>
                    </div>
                    <div class="theback">
                    <h3>'.$row["usersName"].'</h3>
                    <p>'.$row["hometown"].'</p>
                    <p>Email: '.$row["usersEmail"].'</p>
                    <p>Starost: '.$row["age"].' Let</p>
                    <p>Izobrazba: '.$row["fakulteta"].'</p>
                    <p>Povprečje: '.$row["ocena"].'</p>
                    <p>Zanima me: '.$row["zanima_me"].'</p>
                    <p>Od: '.$row["from_date"].'</p>
                    <p>Do: '.$row["to_date"].'</p>
                    </div>
                    </div>
                    </a>';
        } 
        }else{
            echo "Ni zadetkov...";      
        }
    } else {
        echo "Zapolni vse prostorčke!";
    }
}
?>
                </div>
    <div class="grid">
        <div class="grid_input">
        <form action="search.php" method="POST" id="po_imenu">
        <input id="search" name="search" type="text" placeholder="Išči po imenu...">
        <a href="search.php"><button id="išči_ime" name='submit-search'>IŠČI</button></a>
        </form>
        </div>
        <div class = "en_profil">
        <?php  
         
         include_once 'includes/dbh.inc.php';

        $sql = "SELECT usersName, usersEmail,  hometown, age, fakulteta, ocena, zanima_me, from_date, to_date FROM users";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed!";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<a href="#">
                <div class="thecard">
                <div class = "thefront">
                <h3>'.$row["usersName"].'</h3>
                <p>'.$row["fakulteta"].'</p>
                <p>Od: '.$row["from_date"].'</p>
                <p>Do: '.$row["to_date"].'</p>
                </div>
                <div class="theback">
                <h3>'.$row["usersName"].'</h3>
                <p>'.$row["hometown"].'</p>
                <p>Email: '.$row["usersEmail"].'</p>
                <p>Starost: '.$row["age"].' Let</p>
                <p>Izobrazba: '.$row["fakulteta"].'</p>
                <p>Povprečje: '.$row["ocena"].'</p>
                <p>Zanima me: '.$row["zanima_me"].'</p>
                <p>Od: '.$row["from_date"].'</p>
                <p>Do: '.$row["to_date"].'</p>
                </div>
                </div>
                </a>';
            }
        }
         
         
        ?>
        </div>
        </div>
        
    </div>
    </section>


    </body>
    </html>

<?php
    include_once 'footer.php';
?>