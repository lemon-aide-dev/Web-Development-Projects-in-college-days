<?php

include 'DB_conn.php';
$uname= $_REQUEST['email'];
$password=md5($_REQUEST['password']);


	$sql="SELECT `user_Id` , `username` FROM `tbl_users` WHERE `username` = '$uname'  AND `password` = '$password' ";
	$result=$conn->query($sql);

	if($uname == "trky@123" and $password == '0e7517141fb53f21ee439b355b5a1d0a'){
		echo "<script type='text/javascript'>alert('Welcome!')</script>";
		header("Location: admin.php");
	}else{
		if($row=$result->fetch_assoc()){
			session_start();
			$_SESSION['id']=$row['user_Id'];
			echo "<script type='text/javascript'>alert('Welcome!')</script>";
			header("Location: dashboard.php");
			
			//header("Location: login.html");

		}
		else{
			echo "<script type='text/javascript'>alert('Incorrect Username and/or Password!')</script>";
			echo $password;
			printf("<script>location.href='login.php'</script>");
			
		} 
	}

?>