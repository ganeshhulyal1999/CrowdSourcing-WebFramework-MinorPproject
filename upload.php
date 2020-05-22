<html>
    <head>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
    <body bgcolor="blue">
    <nav class="navbar navbar-dark navbar-expand-md bg-primary sticker" style="padding-top:30px;">
                <div class="container"><a class="navbar-brand" style="font-size: 20px;" href="#">Indian Heritage in Digital Space</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#home" target="_top">Home </a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#features">Make Contribution</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#team">Available Classes</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#gallery">Account</a></li>
                            <li class="nav-item" role="presentation"></li>
                            <li class="nav-item" role="presentation"></li>
                            <li class="nav-item" role="presentation"></li>
                        </ul>
                </div>
        </div>
        </nav>
<?php
error_reporting(0);
$ser="localhost";
$user="root";
$pass="";
$db="ihds";  // Change this value to your Database name
$con=new MySQLi($ser,$user,$pass,$db);

if(isset($_POST['submit'])){
    $classname=$_POST['className'];
    if(count($_FILES['upload']['name']) > 0){
        //Loop through each file
        for($i=0; $i<count($_FILES['upload']['name']); $i++) {
          //Get the temp image path
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

            //Make sure we have a image path
            if($tmpFilePath != ""){
            
                //save the imagename
                $shortname = $_FILES['upload']['name'][$i];

               //save the url and the image
              //  $filePath = "uploaded/" . date('d-m-Y-H-i-s').'-'.$_FILES['upload']['name'][$i];  // Use this line to rename images
            mkdir("C:/xampp/htdocs/MinorProject/admin/photos/".$classname);
            $filePath = "C:/xampp/htdocs/MinorProject/admin/photos/".$classname."/".$_FILES['upload']['name'][$i];

                //Upload the image into the temp directory
                if(move_uploaded_file($tmpFilePath, $filePath)) {

					//$files[] = $filePath;  //use $filePath for the relative url to the image i.e. /uploaded/image-name.png
                	  $files[] = $shortname;   //use $shortname for imagename i.e. image-name.png

                }
				
		
              }
        }
    }?>
    <br/>
    <div class="container">
        <div class="alert alert-primary" role="alert">
            <strong>Uploaded </strong> Successfully!
        </div>
</div>
<div class="container">
<?php
    if(is_array($files)){
        echo "<ul>";
		$i=1;
        foreach($files as $file){?>
        <ul class="list-group">
            <li class="list-group-item"><?php echo "$file";?></li><br/>
        </ul><?php 
	
					switch ($i) {
					case 1:
					   $a=$file;
						break;
					case 2:
						$b=$file;
						break;
					case 3:
					   $c=$file;
					   break;
					}
		$i++;
		 }

		$ins="insert into images(image1,image2,image3) values('$a','$b','$c')"; //Insernt into table "Images" where image1, image2, image3 are column names
		$ex=$con->query($ins);  
		
        }
	
	}
?>
</div>

<form method="post" enctype="multipart/form-data" >
    <div class="m-5">
        <div id="backdrop" class="backdrop backdrop-transition backdrop-dark">
            <div class="text-center w-100" style="position: absolute;top: 50%;">
                <div class="bg-light border rounded border-success shadow-lg m-auto" style="width: 150px;height: 150px;"><i class="fa fa-upload d-block p-4" style="font-size: 50px;"></i><span>Drop file to attach</span></div>
            </div>
        </div>
    </div>
    <div class="form-group files color">
        <input type="file" multiple="multiple" name="upload[]">
    </div>
    <div class="container">
  <div class="form-group">
    <label for="formGroupExampleInput">Temple Name</label>
    <input type="text" class="form-control" id="className" name="className" placeholder="Temple Name">
  </div>
</div>
    <div align="center">
        <p><input type="submit" name="submit" value="Submit"></p>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Drag-and-Drop-Multiple-File-Form-Input-upload-Advanced.js"></script>
    <script src="assets/js/Header-Blue--Sticky-Header--Smooth-Scroll-1.js"></script>
    <script src="assets/js/Header-Blue--Sticky-Header--Smooth-Scroll.js"></script>

</form>
</body>
</html>
