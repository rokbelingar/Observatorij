<?php

include_once 'includes/dbh.inc.php';

if(isset($_GET['id'])){
         $userid = $_GET['id'];
         $query = "DELETE FROM users WHERE usersId = $userid";
         $result = mysqli_query($conn, $query);

         if (!$result){
             die("Query failed!");
         }else 
         header("location: includes/logout.inc.php");

      }

?>