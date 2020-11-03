<?php
    include_once 'header.php';
?>

<?php
    include_once 'includes/dbh.inc.php';
?>

    <!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
        
    </body>
    </html>
        <div class = profiles>
        <?php
            $sql = "SELECT * FROM users;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['usersName'];
                    echo $row['Hometown'];
                    echo $row['Uni'];
                    echo $row['Availability'];
                }
            }
        ?>
         <a href='index.php' id='delete'>Izbriši profil</a>
    </div>
<?php
    include_once 'footer.php';
?>