<?php
    session_start();
    if(!isset($_SESSION["email"])){
        $_SESSION["msg"]="You Need to Login First";
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>IHDS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Header-Blue--Sticky-Header--Smooth-Scroll.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/sidebar-1.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div id="home">
        <div class="header-blue">
            <nav class="navbar navbar-dark navbar-expand-md sticker" style="padding-top:30px;">
                <div class="container"><a class="navbar-brand" style="font-size: 20px;" href="#">Indian Heritage in Digital Space</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="http://localhost/MinorProject/index.php" target="_top">Home </a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="http://localhost/MinorProject/upload.php">Make Contribution</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="http://localhost/MinorProject/classes.php">Available Classes</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="http://localhost/MinorProject/account.php">Account</a></li>
                            <li class="nav-item" role="presentation"></li>
                            <li class="nav-item" role="presentation"></li>
                            <li class="nav-item" role="presentation"></li>
                        </ul>
                </div>
        </div>
        </nav>
        <div class="container hero">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-6 offset-xl-1" style="margin-left:44px;">
                    <h1 style="margin-top:204px;">Crowd Sourcing Platform. </h1>
                    <p>Webframework to collect and organize the the dataset from the users to. </p><button class="btn btn-light btn-lg action-button" style="padding-right:20px;padding-left:20px;padding-bottom:6px;padding-top:6px;font-size:16px;" hover="background: #fff; color: #333;"
                        type="button">Learn More</button></div>
                <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                    <div class="iphone-mockup"><img class="device" src="assets/img/iphone.svg">
                        <div class="screen"><img src="assets/img/Screenshot_2020-05-16-14-47-47-917_android.example.com.tflitecamerademo.jpg" style="width: 262px;height: 490px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Header-Blue--Sticky-Header--Smooth-Scroll-1.js"></script>
    <script src="assets/js/Header-Blue--Sticky-Header--Smooth-Scroll.js"></script>
</body>

</html>