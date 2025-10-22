<?php 
	include 'conn.php';
	$uname= $_REQUEST['email'];
	$password=$_REQUEST['password'];


	$sql="SELECT `customer_Id` FROM `tbl_account` WHERE `customer_name` = '$uname'  AND `password` = '$password' ";
	$result=$conn->query($sql);


	if($row=$result->fetch_assoc()){
		session_start();
		$_SESSION['id']=$row['customer_Id'];
		header("Location: dashboard_clone.php");
		
		//header("Location: login.html");

	}
	else{
		echo "<script type='text/javascript'>alert('Incorrect Username and/or Password!')</script>";
		printf("<script>location.href='login.html'</script>");
		
	} 
?>