<?php
    session_start();
    include("db.php");
    $firstName=$_POST["firstName"];
    $lastName=$_POST["lastName"];
    $mobileNo=$_POST["mobileNo"];
    $email=$_POST["Email"];
    $pass=md5($_POST["password"]);

    echo $firstName;
    $sql="INSERT INTO users (FirstName, LastName, MobileNo, Email, Password) VALUES ('$firstName','$lastName',$mobileNo,'$email','$pass')";
    $result=mysqli_query($con,$sql);
    if($result){
        $_SESSION["success"]="Regisration Successfull!";
    }
    else{
        echo "failed".mysqli_error($con);
    }

?>
