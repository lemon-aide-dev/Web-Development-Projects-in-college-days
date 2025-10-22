<?php 
	include 'conn.php';
	session_start();
	$user_id=$_SESSION['id'];
	$item_id=$_REQUEST['id'];

	



	$sql1="SELECT * FROM `tbl_cart` WHERE `item_Id`= '$item_id' AND `customer_Id`='$user_id'";
    $result1=$conn->query($sql1);
    while($itemrow=mysqli_fetch_array($result1)){
    	$qty = $itemrow['qty'];
	    	$sqlitem="SELECT * FROM `tbl_items` WHERE `item_Id`='$item_id'";
	    	$resultitem=$conn->query($sqlitem);
	    	$row = mysqli_fetch_array($resultitem);
	    	$price = $row['item_price'];
    	
			$sql="UPDATE `tbl_cart` SET `qty` = `qty` - 1, `price`=`price` - '$price'  WHERE `item_Id`= '$item_id' AND `customer_Id`='$user_id'";
		    $result=$conn->query($sql);
		    if($result){
		    echo "<script type='text/javascript'>document.location='cart.php'</script>";
		    	$sql2="DELETE FROM `tbl_cart` WHERE `qty`= 0 AND `item_Id`= '$item_id' AND `customer_Id`='$user_id'";
			    	$result2=$conn->query($sql2);
				}if($result2){
					

			    	echo "<script type='text/javascript'>document.location='cart.php'</script>";
				}
			else{
			    echo "<script type='text/javascript'>document.location='cart.php'</script>";
			}
	  }

?>