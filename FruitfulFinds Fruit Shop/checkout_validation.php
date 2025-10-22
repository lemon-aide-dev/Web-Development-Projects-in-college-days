<?php 
    include 'DB_conn.php';
    session_start();
    $name=$_SESSION['id'];

    //sum quantity
    $qry = "SELECT SUM(qty) AS count 
        FROM tbl_cart where user_Id = $name";
    $res = $conn->query($qry);
    $total = 0;
    $rec = $res->fetch_assoc();
    $total = $rec['count'];

    //sum prices
    $qryprice = "SELECT SUM(price) AS cprice
    FROM tbl_cart where user_Id = $name";
    $resp = $conn->query($qryprice);

    $total2 = 0;
    $rec2 = $resp->fetch_assoc();
    $total2 = $rec2['cprice']+40;

    // merge orders with their quantity
    $qryord = "SELECT user_Id, GROUP_CONCAT(' ',itemName, '[', qty, 'pc/s]') as orders
    FROM tbl_cart where user_Id = $name GROUP BY user_Id ";
    $resp2 = $conn->query($qryord);

    $total3 = "";
    $reco = $resp2->fetch_assoc();
    $total3 = $reco['orders'];

    //merge first name and last names
    $qryname = "SELECT user_Id, GROUP_CONCAT(first_Name, ' ',last_Name) as fullname
    FROM tbl_users where user_Id = $name GROUP BY user_Id ";
    $resp3 = $conn->query($qryname);
    $total4 = "";
    $recn = $resp3->fetch_assoc();
    $total4 = $recn['fullname'];

    $qryadd = "SELECT `address`FROM `tbl_users` WHERE user_Id = $name";
    $resp5 = $conn->query($qryadd);
    $add = mysqli_fetch_assoc($resp5);
    $res=$add['address'];
                            
    // echo $total; //total quantity
    // echo $total2; //total price
    // echo $total3; //orders list with quantity
    // echo $total4; //fullname

    $qryorders = "INSERT INTO `tbl_orders`(`user_Id`, `Name`, `order_list`, `address`, `total_orders`, `status`) VALUES ('$name','$total4','$total3','$res','$total2','pending')";
    $resporders = $conn->query($qryorders);

    if($resporders){
        $remove = mysqli_query($conn,"DELETE FROM `tbl_cart` WHERE `user_Id` = $name");
        echo "<script type='text/javascript'>alert('Order Successful! Please prepare your payment on the delivery date')</script>";
        printf("<script>location.href='das_cart.php'</script>");
    }else{
        echo "<script type='text/javascript'>alert('Order Failed! Please try again')</script>";
        printf("<script>location.href='das_cart.php'</script>");
    }




?>