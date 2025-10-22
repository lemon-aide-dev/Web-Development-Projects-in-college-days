<?php 
	include 'DB_conn.php';
	session_start();
	$user_id=$_SESSION['id'];
	$order_id=$_REQUEST['orderid'];

	$sql1="SELECT * FROM `tbl_orders` WHERE `order_id`= '$order_id' AND `user_Id`='$user_id'";
    $result1=$conn->query($sql1);

    $sql2="UPDATE `tbl_orders` SET `status`='delivered' WHERE `order_id`= '$order_id' AND `user_Id`='$user_id' ";
    	$result2=$conn->query($sql2);
    if($result2){
    	echo "<script type='text/javascript'>alert('Order Recieved! Thank you for Shopping with us!')</script>";
    	echo "<script type='text/javascript'>document.location='myorders.php'</script>";
	}else{
		echo "<script type='text/javascript'>alert('Something went wrong, Please try again!')</script>";
		echo "<script type='text/javascript'>document.location='myorders.php'</script>";
	}

?>