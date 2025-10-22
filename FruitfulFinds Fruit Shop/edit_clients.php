<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin_design.css">
	<link rel="stylesheet" type="text/css" href="update_design.css">
	<link rel= "stylesheet" href= "line-awesome-1.3.0/css/line-awesome.min.css" >
	<title>
		Users | edit
	</title>
	<style type="text/css">
		
	</style>
	 <link rel="icon" type="image/x-icon" href="logo-removebg.png">
</head>
<body>	
		<div id="mySidenav" class="sidenav">
  			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  			<a href="admin.php"><i class="las la-home"></i>&nbsp;Home</a>
  			<a href="clients.php"><i class="las la-users"></i>&nbsp;Clients</a>
  			<a href="items.php"><i class="las la-boxes"></i>&nbsp;Items</a>
  			<br>
  			<a href="#">About Us</a>
		</div>
		<div class="header">
			<div class="nav">
				<span style="font-size:20px;cursor:pointer;" onclick="openNav()">&#9776;</span>
			</div>
			<div class="cart">

				<a href="index.php" name=""><i class="las la-shopping-cart"></i>Logout</a>
			</div>
		</div><center>
		<h1 style="margin-left: 5%;">USERS</h1>
		<div class="body">
			<?php include 'DB_conn.php';
				$id = $_REQUEST['id'];
					    $sql= "SELECT * FROM `tbl_users` where `user_Id` = '$id'";

					    $result=$conn->query($sql);

					    $row=mysqli_fetch_array($result);
	
					    		$Id = $row["user_Id"];
					    		$ufirstName = $row["first_Name"];
					    		$ulastName = $row["last_Name"];
					    		$username = $row["username"];
					    		$address = $row["address"];
					    		$password = $row["password"];
					
					 ?>
			<form action="update_user.php?id=<?php echo $Id?>" method="POST">
				
				<label for="id">USER ID</label>
				<input type = "text" id="id" name = "id" value="<?php echo $Id?>" disabled>
				<br>
				<br>
				<br>
				<label for="firstname">FIRST NAME</label>
				<input type = "text" id="firstname" name = "firstname" value="<?php echo $ufirstName;?>">
				<br>
				<br>
				<br>
				<label for="lastname">LAST NAME</label>
				<input type = "text" id="lastname" name = "lastname" value="<?php echo $ulastName; ?>">
				<br>
				<br>
				<br>
				<label for="username">USERNAME</label>
				<input type="text" id="username" name = "username" value="<?php echo $username;?>">
				<br>
				<br>
				<br>
				<label for="address">ADDRESS</label>
				<input type = "text" id="address" name = "address" value="<?php echo $address;?>">
				<br>
				<br>
				<br>
				<input type="submit" name="" class="button">
				<br>
				<br>
			</form>
			<br><br>
			<form method="POST" action="update_user_pass.php?id=<?php echo $Id?>">
				<label for="pass">PASSWORD</label>
				<input type = "text" id="pass" name = "pass"><br>
				<br>
				<br>
				<input type="submit" name="" class="button">
			</form>
			
			

				</center>
	     	<script>
				function openNav() {
				  document.getElementById("mySidenav").style.width = "150px";
				}

				function closeNav() {
				  document.getElementById("mySidenav").style.width = "0";
				}
				</script>
	    
		</div>

	                  	  
	       
</body>
</html>