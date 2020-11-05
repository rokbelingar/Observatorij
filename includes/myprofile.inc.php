<?php

if (isset($_GET['delete'])){
    $userid = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE usersid=$usersId") or die($mysqli->error());
}