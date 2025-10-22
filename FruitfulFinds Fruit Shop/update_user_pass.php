<?php 
	include 'DB_conn.php';
    $id = $_REQUEST['id'];
    $password = $_POST['pass'];

    $acceptedpass = md5($password);


    $sql="UPDATE `tbl_users` SET `password`= ' $acceptedpass' WHERE `user_Id`='$id' ";
	$result=$conn->query($sql);

    if($result){

    	echo "<script type='text/javascript'>alert('Details Updated!')</script>";
		printf("<script>location.href='clients.php'</script>");
    }else{
    	echo "<script type='text/javascript'>alert('Failed to update!')</script>";
		printf("<script>location.href='clients.php'</script>");
    }

?>