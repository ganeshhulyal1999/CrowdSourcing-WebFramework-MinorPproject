<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="ihds";

    //Connection to DB
    $con = mysqli_connect($server,$username,$password,$db);
    if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
?>