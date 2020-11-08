<?php

if (isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';

    if (prazenSignup($name, $email, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup_company.php?error=emptyinput");
        exit();
    }

    if (napacenMejl($email) !== false) {
        header("location: ../signup_company.php?error=invalidemail");
        exit();
    }
    if (gesloUjemanje($pwd, $pwdRepeat) !== false) {
        header("location: ../signup_company.php?error=passwordsdontmatch");
        exit();
    }
    if(imeObstaja($conn, $name, $email) !== false) {
        header("location: ../signup_company.php?error=passwordsdontmatch");
        exit();
    }
    
    createCompany($conn, $name, $email, $pwd);
}
else {
    header("location: ../login.php");
    exit();
}

function prazenSignup($name, $email, $pwd, $pwdRepeat) {
    $result;
    if (empty($name) || empty($email) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


function napacenMejl($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function gesloUjemanje($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


function  imeObstaja($conn, $name, $email){
    $sql = "SELECT * FROM podjetja WHERE usersName = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup_company.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);


    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function  createCompany($conn, $name, $email, $pwd) {
    $sql = "INSERT INTO podjetja (usersName, usersEmail, pwd) VALUES(?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup_company.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php");
    exit();
}

