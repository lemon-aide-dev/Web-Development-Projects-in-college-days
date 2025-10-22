<?php
include 'DB_conn.php';

$ID = $_REQUEST['id']; 
$result = mysqli_query($conn,"DELETE FROM `tbl_users` WHERE `tbl_users`.`user_Id` = '$ID'");

if($result){
    echo "<script type='text/javascript'>alert('user Successfully removed!');</script>";
    echo "<script type='text/javascript'>document.location='clients.php'</script>";
}
else{
    echo "<script type='text/javascript'>alert('failed to remove');</script>";
    echo "<script type='text/javascript'>document.location='clients.php'</script>";
  
}
?>