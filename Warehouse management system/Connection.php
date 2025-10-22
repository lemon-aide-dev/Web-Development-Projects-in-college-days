<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//checking connection
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
else{
    // echo "Connected successfully !";
}
?>