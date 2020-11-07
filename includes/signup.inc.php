<?php

if (isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $hometown = $_POST["hometown"];
    $age = $_POST["age"];
    $ocena = $_POST["ocena"];
    $from_date = $_POST["from_date"];
    $to_date = $_POST["to_date"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $hometown, $age, $ocena, $from_date, $to_date, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if(uidExists($conn, $name, $email) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    
    createUser($conn, $name, $email, $hometown, $age, $ocena, $from_date, $to_date, $pwd);
}



else {
    header("location: ../login.php");
    exit();
}