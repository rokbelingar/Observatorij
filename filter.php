<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
<?php
    include_once 'header.php';
?>
<?php

                include_once 'includes/dbh.inc.php';
?>

        
    <section class="profile_container">
    <div class="grid">
        <div class="grid_input">
        <form action="search.php" method="POST" id="po_imenu">
        <input id="search" name="search" type="text" placeholder="Išči po imenu...">
        <!-- <input id="submit" type="submit" value="Search" name="submit-search"> -->
        <!-- button -->
        <a href="search.php"><button id="po_imenu" name='submit-search'>IŠČI</button></a>
    </div>
            <div class = "en_profil">
        
      
            <?php

include_once 'includes/dbh.inc.php';

if(isset($_POST['filter'])){
$hometown = $_POST["hometown"];
$age = $_POST["age"];
$ocena = $_POST["ocena"];
$from_date = $_POST["from_date"];
$fdate = strtotime($from_date);
$fdate = date("Y/m/d", $fdate);

$to_date = $_POST["to_date"];
$tdate = strtotime($to_date);
$tdate = date("Y/m/d", $tdate);

if($hometown != "" || $age != "" || $fdate != "" || $tdate !=""){
    $sql = "SELECT usersName, usersEmail, hometown, age, ocena, from_date, to_date FROM users WHERE hometown = '$hometown' OR age = '$age' OR ocena = '$ocena' OR from_date <= '$fdate' AND to_date >= '$tdate'";
    $result = mysqli_query($conn, $sql) or die('error');

    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<a href="#">
                <div class="thecard">
                <div class = "thefront">
                <h3>'.$row["usersName"].'</h3>
                <p>'.$row["hometown"].'</p>
                <p>Od: '.$row["from_date"].'</p>
                <p>Do: '.$row["to_date"].'</p>
                </div>
                <div class="theback">
                <h3>'.$row["usersName"].'</h3>
                <p>'.$row["hometown"].'</p>
                <p>Email: '.$row["usersEmail"].'</p>
                <p>Starost: '.$row["age"].' Let</p>
                <p>Povprečje: '.$row["ocena"].'</p>
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
                <a href="profiles.php" id="nazaj">NAZAJ</a> 
                </div>


              

    </div>
    </section>


<?php
    include_once 'footer.php';
?>
    </body>
    </html>