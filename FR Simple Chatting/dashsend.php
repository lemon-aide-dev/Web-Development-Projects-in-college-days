

<?php 
session_start();
include 'Connection.php';




//ini_set("display_errors", "off");

error_reporting(0);
$mess=$_POST['message'];
$name=$_POST['sndmsg'];


$chck = "select * from users where username = '$name' ";

$res=$conn->query($chck);

if(!$row=$res->fetch_assoc()){

        echo "<script type='text/javascript'>alert('Username not Exist!')</script>";
        printf("<script>location.href='dashmessage.php'</script>");
        
        //header("Location: login.html");

    }
    else{

        $sql="INSERT INTO $name (message, date_recieved) values('$mess', now())";
        $result=$conn->query($sql);
        echo "<script type='text/javascript'>alert('Message Sent!')</script>";
        printf("<script>location.href='dashmessage.php'</script>");
        
    } 


?>