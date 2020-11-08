<?php

if (isset($_POST["submit"])) {

        $name = $_POST["uid"];
        $pwd = $_POST["pwd"];

        require_once 'dbh.inc.php';

        if (prazenLogin($name, $pwd) !== false) {
            header("location: ../login_company.php?error=emptyinput");
            exit();
        }

        prijavaUporabnika($conn, $name, $pwd);

}
else{
    header("location: ../profiles.php");
    exit();
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
function prazenLogin($name, $pwd) {
    $result;
    if (empty($name) || empty($pwd)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function prijavaUporabnika($conn, $name, $pwd) {
    $imeObstaja = imeObstaja($conn, $name, $name);

    if ($imeObstaja === false){
        header("location: ../login_company.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $imeObstaja["pwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false){
        header("location: ../login_company.php?error=wronglogin");
        exit();
    }
    else if($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["username"] = $uidExists["usersName"];
        header("location: ../profiles.php");
        exit();
    }
}