<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>

    <section>
    <div class="grid">
    <div class="grid_input">
    <form action="search.php" method="POST">
        <input id="search" name="search" type="text" placeholder="Išči po imenu...">
        <input id="submit" type="submit" value="Search" name="submit-search">
        </form>
    </div>
            <div class = "en_profil">
        <?php  
         
         include_once 'includes/dbh.inc.php';

        $sql = "SELECT usersName, usersEmail FROM users";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed!";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<a href="#">
                    <div>
                    <div class = "profil">
                    <h3>'.$row["usersName"].'</h3>
                    <p>'.$row["usersEmail"].'</p>
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