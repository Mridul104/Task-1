
<?php 
 include "./DataBase/DBconn.php";
 echo "<br><br>"

 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <form action="fileUpload.php" method="POST" enctype="multipart/form-data">

    <input type="file" name="image">
    <input type="submit" name="submit">

    </form>




    
</body>
</html>


<?php 

$name ="mridul";
$aboutProduct = "lorem ispum";
$services ="web design";
$images = "dummyimage.png";


if(isset($_POST['submit'])){
    $image = $_FILES['image'];
    print_r($image);

 
//     $imageName = $image['name'];
//     $imagePath = $image['tmp_name'];

//     $imageDest ="UploadedImages/".$imageName;
    
//     move_uploaded_file($imagePath,$imageDest);
//     echo $imageDest;

//     $sql = "INSERT INTO `clients` (`ID`, `Name`, `AboutProduct`, `Services`, `Thumbnail_Image`, `Images`) VALUES (NULL, '$name', '$aboutProduct', '$services', '$imageDest', '$images')";
// $result = mysqli_query($conn,$sql);

// if($result){
//     echo "image uploaded";
// }
// else{
//  echo "uploaded failed";

// }

// }
}
//  $file =$_POST['image']

?>