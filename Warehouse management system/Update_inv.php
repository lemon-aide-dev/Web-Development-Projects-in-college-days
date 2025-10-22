<?php
    include 'Connection.php';
    // $con=mysql_connect( '$Item_name','$Stock_Quantity') or die("Server Error");
        
    // if($con==true)
    // {
    //     echo "Success";
    // }
    // else
    // {
    //     mysql_close($con);}

    $id=$_POST['id'];
    $Item_Name=$_POST['ItemName'];
    $description = $_POST['Description'];
    $supplier = $_POST['Supplier'];
    $Stock=$_POST['Stock'];

    $sql = "UPDATE `inventory_system` SET `item_name` = '$Item_Name', `description` = '$description', `supplier_Name` = '$supplier', `stock_Quantity` = '$Stock' WHERE `item_ID` = '$id' ";


    if($conn->query($sql) == TRUE){
      echo "<script>alert('Succesfully updated an item');</script>";
      echo "<script>document.location='display_inventory.php'</script>";
    }      
    else{
      echo "<script>alert('Error:".$sql."<br>".$conn->error."');</script>";
      echo "<script>document.location='edit_data.php'</script>";
    }

    ?>
    