<?php 
	include 'DB_conn.php';
	session_start();
	$user_id=$_SESSION['id'];
	$item_id=$_REQUEST['id'];


	$sql1="SELECT * FROM `tbl_items` WHERE `item_Id` = '$item_id'";
	$result1=$conn->query($sql1);


	$sql5="SELECT * FROM `tbl_cart` WHERE `item_Id` = '$item_id'";
	$result5=$conn->query($sql5);
	$duplicateuser=mysqli_num_rows($result5);

	if(!$duplicateuser){
		while($row = mysqli_fetch_assoc($result1)){

		$itemname=$row['item_Name'];
		$itemprice=$row['item_price'];
		$image = $row['item_Image'];

	    	$sql="INSERT INTO `tbl_cart`(`user_Id`, `item_Id`, `itemName`, `qty`, `price`,`image`) VALUES ('$user_id','$item_id','$itemname','1','$itemprice', '$image')";
	    	$result=$conn->query($sql);
	    	echo "<script type='text/javascript'>alert('Succesfully added!')</script>";
	    	echo "<script type='text/javascript'>document.location='dashboard.php'</script>";
		}
	}
		else{
			echo "<script type='text/javascript'>alert('Item Already in Basket!')</script>";
		    echo "<script type='text/javascript'>document.location='das_cart.php'</script>";
		}
	

?>