<?php 
	include 'DB_conn.php';
    $id = $_REQUEST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $address = $_POST['address'];
    $password = $_POST['pass'];


    $sql="UPDATE `tbl_users` SET `first_Name`='$firstname',`last_Name`='$lastname',`username`='$username', `address`= '$address', `password`= '$password' WHERE `user_Id`='$id' ";
	$result=$conn->query($sql);

    if($result){

    	echo "<script type='text/javascript'>alert('Details Updated!')</script>";
		printf("<script>location.href='clients.php'</script>");
    }else{
    	echo "<script type='text/javascript'>alert('Failed to update!')</script>";
		printf("<script>location.href='clients.php'</script>");
    }

?>