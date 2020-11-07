<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>

<?php
    include_once 'header.php';
    
?>

        
    <div class = "container_myprofile">
        <div class="wrapper_myprofile">

        
        <?php
            
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
        <p>Povprečje: '.$row["ocena"].'</p>
        <p>Na voljo za delo od: '.$row["from_date"].' do: '.$row["to_date"].'</p>
        </div>';

    ?>
    <div>
            <a href="filter.php"><button name='filter' id="ureditev_profila" href="setting_myprofile.php">Uredi profil</button></a> <br><br><br>
            <a href="filter.php" id="izbris_profila"><button name='filter'>Izbris profila</button></a>
            </div>
        </div>

    </div>


<?php
    include_once 'footer.php';
?>

        
</body>
    </html>
