<?php
    include_once 'header.php';
    
    include_once 'includes/dbh.inc.php';

    if (isset($_GET['id'])){
        $userid = $_GET['id'];
        $query ="SELECT * FROM users WHERE usersId = $userid";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
           $row = mysqli_fetch_array($result);
           $name = $row["usersName"];
           $email = $row["usersEmail"];
           $hometown = $row["hometown"];
           $age = $row["age"];
           $fakulteta = $row["fakulteta"];
           $ocena = $row["ocena"];
           $zanima_me = $row["zanima_me"];
           $fdate = $row["from_date"];
           $tdate = $row["to_date"];
        }
    }
    

    if (isset($_POST['update'])) {
        $userid = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $hometown = $_POST['hometown'];
        $age = $_POST['age'];
        $fakulteta = $_POST['fakulteta'];
        $ocena = $_POST['ocena']; 
        $zanima_me = $row["zanima_me"];
        $fdate = $_POST['from_date'];
        $tdate = $_POST['to_date'];

        $query ="UPDATE users set usersName = '$name', usersEmail = '$email', hometown = '$hometown', age = '$age', fakulteta = '$fakulteta' ,ocena = '$ocena', zanima_me = '$zanima_me' ,from_date = '$fdate', to_date = '$tdate' WHERE usersId = $userid";
        mysqli_query($conn, $query);
        header("Location: myprofile.php");
    }

?>

<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>

<section class="signup_form">
<a href="profiles.php" id="nazaj_edit">NAZAJ</a> 
    <div id="form">
    <h2>Uredi:</h2>
    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <input type="text" name="name" placeholder="Ime in priimek..." value="<?php echo $name; ?>">
        <input type="text" name="email" placeholder="Email..." value="<?php echo $email; ?>">
        <input type="text" name="hometown" placeholder="Mesto..." value="<?php echo $hometown; ?>">
        <input type="number" name="age" placeholder="Starost..." min = "16" max= "65" value="<?php echo $age; ?>">
        <input type="text" name="fakulteta" placeholder="Fakulteta/šola/zavod..." value="<?php echo $fakulteta; ?>">
        <input type="number" name="ocena" placeholder="Povprečna ocena..." min = "6" max= "10" step=".01" value="<?php echo $ocena; ?>">
        <input type="text" name="zanima_me" placeholder="Zanima me..." value="<?php echo $zanima_me; ?>">
        <input type="date" name="from_date" placeholder="Datum začetka..." id="from_date" value="<?php echo $fdate; ?>">
        <input type="date" name="to_date" placeholder="datum zaključka..." id="to_date" value="<?php echo $tdate; ?>">
        <button type="submit" name="update" id="shrani_spremembe">Shrani spremembe</button>

        
        
    </form>
    </div>
    <div>
    </div>
</section>

                
</body>
</html>


<?php
    include_once 'footer.php';
?>