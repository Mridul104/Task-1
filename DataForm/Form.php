<?php

// DataBase Credentials
$serverName = "localhost";
$userName = "root";
$password = "";
$databasName = "infiniqedb";


// Connection to DataBase

$conn = mysqli_connect($serverName,$userName,$password,$databasName);

// include "./DataBase/DBconn.php";





?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form</title>
</head>

<body>

    <!-- NavBar -->

    <!-- As a link -->
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Form</a>
        </div>
    </nav>

    




    <!-- Form -->

    <div class="conatiner-fluid">
        <div class="row-12">
            <div class="col-4 my-3 mx-auto border ">

                <h3  class="my-4 text-center" >Please enter the details</h3>
                <form   class="my-4 mx-5 " action="Form.php" method="post" enctype="multipart/form-data"  >
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input minlength="5" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" required>
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">About Product</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="aboutProduct">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Services</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="services">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">ThumbnailImage</label>
                        <input type="file" class="form-control" id="exampleInputPassword1" name="thumbnailImage">
                    </div>

                    <!-- <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Images</label>
                        <input type="file" class="form-control" id="exampleInputPassword1" name="images">
                    </div> -->
                   
                    <button name="submit" type="submit" class="btn btn-primary ">Submit</button>
                </form>

 


            </div>
        </div>
    </div>















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>






<?php 
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $aboutProduct = $_POST['aboutProduct'];
    $services = $_POST['services'];
    $images ="dummyimage";
    
 
     $thumbnailImage = $_FILES['thumbnailImage'];
    //  print_r($thumbnailImage);

    $fileName = $thumbnailImage['name'];
    $filePath = $thumbnailImage['tmp_name'];

    $fileDest ="UploadedImages/".$fileName;
 
    
    move_uploaded_file($filePath,$fileDest);
    // echo $fileDest;

    $sql = "INSERT INTO `clients` (`ID`, `Name`, `AboutProduct`, `Services`, `Thumbnail_Image`, `Images`) VALUES (NULL, '$name', '$aboutProduct', '$services', '$fileDest', '$images')";
$result = mysqli_query($conn,$sql);

if($result){
    echo 'Image Uploaded';
}
else{
 echo "uploaded failed";

}
    
}

// if(isset($_GET['submit'])){
    // $name = $_POST['name'];
    // $aboutProduct = $_POST['aboutProduct'];
    // $services = $_POST['services'];
    // $thumbnailImage = $_FILES['thumbnailImage'];
    // $images = $_POST['images'];
    

    // print_r($thumbnailImage);

 
//     $fileName = $thumbnailImage['name'];
//     $filePath = $image['tmp_name'];

//     $fileDest ="UploadedImages/".$fileName;
    
//     move_uploaded_file($filePath,$fileDest);
//     echo $imageDest;

//     $sql = "INSERT INTO `clients` (`ID`, `Name`, `AboutProduct`, `Services`, `Thumbnail_Image`, `Images`) VALUES (NULL, '$name', '$aboutProduct', '$services', '$imageDest', '$images')";
// $result = mysqli_query($conn,$sql);

// if($result){
//     echo "image uploaded";
// }
// else{
//  echo "uploaded failed";

// }



// $sql = "INSERT INTO `clients` (`ID`, `Name`, `AboutProduct`, `Services`, `Thumbnail_Image`, `Images`) VALUES (NULL, '$name', '$aboutProduct', '$services', '$thumbnailImage', '$images')";
// $result = mysqli_query($conn,$sql);

// if($result){
   
//         echo '<div class="alert alert-warning text-center alert-dismissible fade show" role="alert">
//        Thank you!!
//         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//       </div>
//       ';

       

  
// }



// }
// else{
//     echo "hello";
// }
      
    
    ?>