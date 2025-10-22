<?php 
	include 'conn.php';
    session_start();
    $id=$_SESSION['id'];


    $name = $_POST['Username'];
    $email = $_POST['email'];
    $add = $_POST['address'];


    $sql="UPDATE `tbl_account` SET `customer_name`='$name',`email`='$email',`address`='[$add' WHERE `customer_Id`='$id' ";
	$result=$conn->query($sql);

    if($result){

    	echo "<script type='text/javascript'>alert('Details Updated!')</script>";
		printf("<script>location.href='myaccount.php'</script>");
    }else{
    	echo "<script type='text/javascript'>alert('Failed to update!')</script>";
		printf("<script>location.href='myaccount.php'</script>");
    }

?>