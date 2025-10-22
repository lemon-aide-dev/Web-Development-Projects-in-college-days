<?php

include'connection.php';

$ID = $_REQUEST['id']; 
$result = mysqli_query($conn,"DELETE FROM `inventory_system` WHERE `item_ID` = $ID");

if($result){
    echo "<script type='text/javascript'>alert('Successfully remove an Item');</script>";
    echo "<script type='text/javascript'>document.location='display_inventory.php'</script>";
}
else{
    echo "<script type='text/javascript'>alert('Failed to remove an Item');</script>";
    echo "<script type='text/javascript'>document.location='display_inventory.php'</script>";
  
}
?>