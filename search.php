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

                if (isset($_POST['submit-search'])){
                    $search = mysqli_real_escape_string($conn, $_POST['search']);
                    $sql = "SELECT usersName, usersEmail FROM users WHERE usersName LIKE '%$search%' OR usersEmail LIKE '%$search%'";
                    $result = mysqli_query($conn, $sql);
                    $queryResult = mysqli_num_rows($result);

                    if ($queryResult > 0) {
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
                    } else{
                        echo "Ni zadetkov...";
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
