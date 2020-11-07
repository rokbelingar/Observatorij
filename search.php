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

    <section class="profile_container">
    <div class="grid">
    <form action="search.php" method="POST" id="po_imenu">
        <input id="search" name="search" type="text" placeholder="Išči po imenu...">
        <a href="search.php"><button id="po_imenu" name='submit-search'>IŠČI</button></a>
        </form>
    <div class="grid_input">
    </div>
            <div class = "en_profil">
            <?php

                include_once 'includes/dbh.inc.php';

                if (isset($_POST['submit-search'])){
                    $search = mysqli_real_escape_string($conn, $_POST['search']);
                    $sql = "SELECT usersName, usersEmail, hometown, age, from_date, to_date FROM users WHERE usersName LIKE '%$search%' OR usersEmail LIKE '%$search%'";
                    $result = mysqli_query($conn, $sql);
                    $queryResult = mysqli_num_rows($result);

                    if ($queryResult > 0) {
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
                    <p>Od: '.$row["from_date"].'</p>
                    <p>Do: '.$row["to_date"].'</p>
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
                <a href="profiles.php" id="nazaj">NAZAJ</a> 
                </div>            
            </div>
            </section>
        
                
            </body>
            </html>
    <?php
    include_once 'footer.php';
?>
