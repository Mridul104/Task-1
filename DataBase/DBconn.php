<?php

// DataBase Credentials
$serverName = "localhost";
$userName = "root";
$password = "";
$databasName = "infiniqedb";


// Connection to DataBase

$conn = mysqli_connect($serverName,$userName,$password,$databasName);

if($conn){
    echo "Connection successful";
}
else{
    echo "Could not connect to database";
}

?>