<?php 
	include 'DB_conn.php';
	session_start();
	$id=$_SESSION['id'];
	$itemid = $_REQUEST['itemid'];

	$qty = $_POST['qty'];
	$address = $_POST['address'];


	$qryord = "SELECT item_Id, GROUP_CONCAT(' ',item_Name, '[', $qty, 'pc/s]') as orders
    FROM tbl_items where item_Id = $itemid";
    $resp2 = $conn->query($qryord);
    $total3 = "";
    $reco = $resp2->fetch_assoc();
    $orderlist = $reco['orders'];

    $qryprice = "SELECT item_price AS cprice
    FROM tbl_items where item_Id = $itemid";
    $resp = $conn->query($qryprice);
    $total2 = 0;
    $rec2 = $resp->fetch_assoc();
    $total2 = $rec2['cprice']+40;

    $qryname = "SELECT user_Id, GROUP_CONCAT(first_Name, ' ',last_Name) as fullname
    FROM tbl_users where user_Id = $id GROUP BY user_Id ";
    $resp3 = $conn->query($qryname);
    $total4 = "";
    $recn = $resp3->fetch_assoc();
    $total4 = $recn['fullname'];

    $totalbill= $total2*$qty;

    $qryorders = "INSERT INTO `tbl_orders`(`user_Id`, `Name`, `order_list`, `address`, `total_orders`, `status`) VALUES ('$id','$total4','$orderlist','$address','$totalbill','pending')";
    $resporders = $conn->query($qryorders);

    if($resporders){
        echo "<script type='text/javascript'>alert('Order Successful! Please prepare ₱$totalbill on the delivery date')</script>";
        printf("<script>location.href='dashboard.php'</script>");
    }else{
        echo "<script type='text/javascript'>alert('Order Failed! Please try again')</script>";
        printf("<script>location.href='dashboard.php'</script>");
    }
?>