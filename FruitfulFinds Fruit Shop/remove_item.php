<?php

include 'DB_conn.php';

$ID = $_REQUEST['id']; 
$result = mysqli_query($conn,"DELETE FROM `tbl_cart` WHERE `item_Id` = $ID");

if($result){
    echo "<script type='text/javascript'>alert('Successfully removed an Item');</script>";
    echo "<script type='text/javascript'>document.location='das_cart.php'</script>";
}
else{
    echo "<script type='text/javascript'>alert('Failed to remove an Item');</script>";
    echo "<script type='text/javascript'>document.location='das_cart.php'</script>";
  
}
?>