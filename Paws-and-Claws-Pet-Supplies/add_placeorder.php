<?php 
	include 'conn.php';
	session_start();
	$user_id=$_SESSION['id'];
	$item_id=$_REQUEST['id'];

	$sql="UPDATE `tbl_cart` SET `qty` = `qty` + 1, 	`price` = `price`* `qty` WHERE `item_Id`= '$item_id' AND `customer_Id`='$user_id'";
    $result=$conn->query($sql);
    if($result){
    	//
    	echo "<script type='text/javascript'>document.location='place_order.php'</script>";
	}
	else{
	    echo "<script type='text/javascript'>document.location='place_order.php'</script>";
	}
	  

?>