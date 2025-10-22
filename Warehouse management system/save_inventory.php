<?php 
   include 'Connection.php';

   $Item_Name=$_POST['ItemName'];
   $description = $_POST['Description'];
   $supplier = $_POST['Supplier'];
   $Stock=$_POST['Stock'];

   $sql = "INSERT INTO `inventory_system`( `item_name`, `description`, `supplier_Name`, `stock_Quantity` ) VALUES ('$Item_Name', '$description', '$supplier','$Stock')";
   if($conn->query($sql) == TRUE){
     echo "<script>alert('Succesfully added an item');</script>";
     echo "<script>document.location='display_inventory.php'</script>";
    }      
    else{
     echo "<script>alert('Error:".$sql."<br>".$conn->error."');</script>";
     echo "<script>document.location='insert_inventory.php'</script>";
 }

?>