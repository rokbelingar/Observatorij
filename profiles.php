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
    <form action="search.php" method="POST" id="po_imenu">
        <input id="search" name="search" type="text" placeholder="Išči po imenu...">
        <a href="signup.php"><button id="išči_ime" name='submit-search'>IŠČI</button></a>
        </form>
    </div>
    <div class = "en_profil">
        <?php  
         
         include_once 'includes/dbh.inc.php';

        $sql = "SELECT usersName, usersEmail, hometown, age FROM users";
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
                    <p>'.$row["hometown"].'</p>
                    </div>
                    <div class="theback">
                    <p>Email: '.$row["usersEmail"].'</p>
                    <p>Starost: '.$row["age"].' Let</p>
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