<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>IHDS (Backup 1589646799774)</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Drag-and-Drop-Multiple-File-Form-Input-upload-Advanced.css">
    <link rel="stylesheet" href="assets/css/Drag-Drop-File-Input-Upload.css">
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
                <div class="container"><a class="navbar-brand" style="font-size:24px;" href="#">Indian Heritage in Digital Space</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="http://localhost/MinorProject/index.php" target="_top">Home </a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="http://localhost/MinorProject/upload.php">Make Contribution</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#team">Available Classes</a></li>
                            <li class="nav-item" role="presentation"></li>
                            <li class="nav-item" role="presentation"></li>
                            <li class="nav-item" role="presentation"></li>
                        </ul>
                </div>
        </div>
        </nav>
        <div class="container hero">
            <?php
                $dir = "C:/xampp/htdocs/MinorProject/admin/photos/";

                // Open a directory, and read its contents
                $i=1;
                if (is_dir($dir)){
                  if ($dh = opendir($dir)){
                    while (($file = readdir($dh)) !== false){
                        if(strlen($file)>3){
                        ?>
                        <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th>#</th>
                            <th>Class Name</th>
                            <th>Make Contribution</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr  class="table-light">
                            <th scope="row"><?php echo $i ?></th>
                            <td><?php echo $file;?></td>
                            <td><a href="http://localhost/MinorProject/upload.php" class="btn btn-outline-success">Contribute</a></td>
                         </tr>
                        </tbody>
                      </table>
                   <?php $i++; }}
                    closedir($dh);
                  }
                }
            ?>
        </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Drag-and-Drop-Multiple-File-Form-Input-upload-Advanced.js"></script>
    <script src="assets/js/Header-Blue--Sticky-Header--Smooth-Scroll-1.js"></script>
    <script src="assets/js/Header-Blue--Sticky-Header--Smooth-Scroll.js"></script>
</body>

</html>