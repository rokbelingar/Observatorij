<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>

<?php
    include_once 'header.php';
    
    if(isset($_GET['edit'])){
        $userid = $_GET['edit'];

        $rec = mysqli_query($conn, "SELECT * FROM users WHERE usersId = $userid") or die('error');
        $record = mysqli_fetch_array($rec);
        $name = $record["usersName"];
        $email = $record["usersEmail"];
        $hometown = $record["hometown"];
        $age = $record["age"];
        $fakulteta = $record["fakulteta"];
        $ocena = $record["ocena"];
        $zanima_me = $record["zanima_me"];
        $fdate = $record["from_date"];
        $tdate = $record["to_date"];
    }
?>

        
    <div class = "container_myprofile">
        <div class="wrapper_myprofile">
        
        <?php

// $name = "";
// $email = "";
// $hometown = "";
// $age = "";
// $ocena = "";
// $fdate = "";
// $tdate = "";
// $userid = 0;

// $edit_state = false;
            
            include_once 'includes/dbh.inc.php';

            $sql = "SELECT * FROM users WHERE usersId = '$_SESSION[userid]' ;";
            $result = mysqli_query($conn, $sql) or die('error');
        ?>
        <?php

        $row = mysqli_fetch_assoc($result);

        echo '<div class="window_myprofile">
        <h2>'.$row["usersName"].'</h2><br>
        <p>Kraj: '.$row["hometown"].'</p>
        <p>Email: '.$row["usersEmail"].'</p> 
        <p>Starost: '.$row["age"].' Let</p><br>
        <p>Izobrazba: '.$row["fakulteta"].'</p><br>
        <p>Povprečje: '.$row["ocena"].'</p>
        <p>Zanima me: '.$row["zanima_me"].'</p>
        <p>Na voljo za delo od: '.$row["from_date"].' do: '.$row["to_date"].'</p>
        </div>';

    ?>
    <div>
            <a href = "edit.php?id=<?php echo $row['usersId'] ?>"><button name='filter' id="ureditev_profila">Uredi profil</button></a> <br><br><br>
            <a id="izbris_profila" href="delete_profile.php?id=<?php echo $row['usersId'] ?>"><button name='filter'>Izbris profila</button></a>
            </div>
        </div>
    </div>


<?php
    include_once 'footer.php';
?>

        
</body>
    </html>
