<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "paws_claws";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//checking connection
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
else{
   // echo "connected to database";
}
?>