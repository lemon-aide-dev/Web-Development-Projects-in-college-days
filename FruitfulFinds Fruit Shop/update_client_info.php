<?php 
	include 'DB_conn.php';
    session_start();
    $id = $_SESSION['id'];

    $username = $_GET['username'];
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $address = $_GET['address'];

    $sqlupdateinf="SELECT *  FROM `tbl_users` WHERE `user_Id`='$id' ";
    $resultqry=$conn->query($sqlupdateinf);
    
    if($resultqry){
        $update = "UPDATE `tbl_users` SET `first_Name`='$firstname',`last_Name`='$lastname',`username`='$username',`address`='$address' WHERE `user_Id` = $id";
        $resultupdate=$conn->query($update);
        
        echo "<script type='text/javascript'>alert('Details Updated!')</script>";
        printf("<script>location.href='account.php'</script>");
    }else{
        printf("<script>location.href='account.php'</script>");
        echo "<script type='text/javascript'>alert('Failed to update!')</script>";
    }

?>