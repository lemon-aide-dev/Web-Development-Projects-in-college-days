
	<?php include 'DB_conn.php';
	session_start();
	$user_id=$_SESSION['id'];
	$item_id=$_REQUEST['id'];

	$sqlitem="SELECT * FROM `tbl_items` WHERE `item_Id`='$item_id'";
    $resultitem=$conn->query($sqlitem);
    $row = mysqli_fetch_array($resultitem);
    $price = $row['item_price'];


	$sql="UPDATE `tbl_cart` SET `qty` = `qty` + 1, `price` = `price`+'$price' WHERE `item_Id`= '$item_id' AND `user_Id`='$user_id'";
    $result=$conn->query($sql);
    if($result){
    	//
    echo "<script type='text/javascript'>document.location='das_cart.php'</script>";
	}
	else{
	    echo "<script type='text/javascript'>document.location='das_cart.php'</script>";
	}
	  

?>