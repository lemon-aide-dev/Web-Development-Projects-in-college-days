<?php 
	include 'DB_conn.php';
    $id = $_REQUEST['id'];
    $itemname = $_POST['itemname'];
    $price = $_POST['itemprice'];
    $des = $_POST['itemdescription'];
    $origin = $_POST['itemorigin'];
    $type = $_POST['sellingtype'];

    $sqlupdateinf="SELECT * FROM `tbl_items` WHERE `item_Id`='$id' ";
    $resultqry=$conn->query($sqlupdateinf);
    
    if($resultqry){
        $update = "UPDATE `tbl_items` SET `item_Name`='$itemname',`item_price`='$price',`item_description`='$des',`item_origin`='$origin',`selling_type`='$type' WHERE `item_Id` = $id";
        $resultupdate=$conn->query($update);
        
        echo "<script type='text/javascript'>alert('Details Updated!')</script>";
        printf("<script>location.href='items.php'</script>");
    }else{
        echo "<script type='text/javascript'>alert('Failed to update!')</script>";
        printf("<script>location.href='items.php'</script>");
        
    }

?>