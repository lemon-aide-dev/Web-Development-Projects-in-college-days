<?php
	
	session_start();
	include 'Connection.php';

	$uname= $_GET['username'];
	$password=$_GET['password'];


	$sql="SELECT * FROM users WHERE username='$uname' AND password = '$password'";
	$result=$conn->query($sql);


	if(!$row=$result->fetch_assoc()){

		echo "<script type='text/javascript'>alert('Incorrect Username and/or Password!')</script>";
		printf("<script>location.href='login.html'</script>");
		
		//header("Location: login.html");

	}
	else{

		$_SESSION['name']=$_GET['username'];
		header("Location: dash.php");
	} 
?>