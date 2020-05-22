<?php
    session_start();
    include('db.php');
    $email=$_POST["email"];
    $password=md5($_POST["password"]);
    $sql="SELECT * from users where Email='$email' and Password='$password'";
    $query=mysqli_query($con,$sql);
    $result=mysqli_num_rows($query);
    if($result==1){
        $_SESSION["email"]=$email;
        header("location:http://localhost/MinorProject/index.php");    
    }
    else{
        $_SESSION["msg"]="Invalid Credentials";
        header("location:http://localhost/MinorProject/login.php");
    }
?>