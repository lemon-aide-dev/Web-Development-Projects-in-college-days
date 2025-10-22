
<?php 
    include 'DB_conn.php';
    session_start();
    $id=$_SESSION['id'];

    $sql= "SELECT * FROM `tbl_users` WHERE `user_Id` = '$id'";
    $result=$conn->query($sql);

    while($row=mysqli_fetch_array($result)){
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="account_design.css">
	<link rel= "stylesheet" href= "line-awesome-1.3.0/css/line-awesome.min.css" >
	
	<title>
		My Account
	</title>
	<style type="text/css">
		
	</style>
	 <link rel="icon" type="image/x-icon" href="logo-removebg.png">
</head>
<body>
		<div class="top-part">
			<center>
				<h3>Hand-picked selections of local & imported fruits. Order all your favorite fruits with ease for delivery in General Trias City.<br>
				100% Guaranteed Fresh upon delivery.</h3>
			</center>	
		</div>
		<div class="header">
			<a href="dashboard.php"><img src="FruITfulFinds.png"></a>
			<div class="cart">
				<a href="myorders.php"><i class="las la-shipping-fast"></i> My Orders</a>
                <a href="das_cart.php" name=""><i class="las la-shopping-basket"></i>Basket</a>
                <a href="account.php"><i class="las la-user"></i>Account</a>
                <a href="logout.php" name=""><i class="las la-file-export"></i>Logout</a>
			</div>
		</div>
            <center><h1 style="padding-top: 1%;">My Account</h1></center>
		<div class="body">
            <form action="update_client_info.php" type="POST">
            	<center>
                <div class="mainpage">
                    <div class="label">
                        <label for="username">Username: </label>
                        <br>
                        <br>

                        <label for="firstname">First Name: </label>
                        <br>
                        <br>
                        <label for="lastname">Lastname: </label>
                        <br>
                        <br>
                        <label for="lastname">Address: </label>
                    </div>
                    <div class="formInpt">
                        <input type="text" name="username" id="username" value="<?php echo $row['username'];?>">
                        <input type="text" name="firstname" id="firstname" value="<?php echo $row['first_Name'];?>">
                        <input type="text" name="lastname" id="lastname" value="<?php echo $row['last_Name'];?>">
                        <input type="text" name="address" id="address" value="<?php echo $row['address'];?>">
                    </div></center><?php }?> 
                    <br> 
                   
                    

                
                    <button type="submit" >Save Changes</button>    
            </form>
            		<a href="dashboard.php" style="background-color: lightgray; "><button>Cancel</button></a>
                     <br>               
                    
                </div>
                <hr>
        <div class="changep">   
            <center>    
            <form  action="update_client_pass.php" type="POST" >  
            		  	
                <h2>Change Password</h2>
                <input type="password" name="Password" id="Password" style="width: 20%; height: 30px;" placeholder="Enter your current password" required>
                <br>
        		<br>
            	<input type="password" name="newPassword" id="newPassword" style="width: 20%; height: 30px;" placeholder="Enter New Password" required>
            	<br>
            	<br>
            	<input type="password" name="renewPassword" id="renewPassword" style="width: 20%; height: 30px;" placeholder="Re-enter New Password" required>
            	<br>
            	<br>
            	<button type="submit">Change Password</button>
            </form>  </center>  
	    </div>
	    </div> 
	             <br>	  
	       
		<div class="footer" style="font-family: arial;">
			<center><p><b><i class="las la-copyright"></i>2024, FruitfulFinds</b></p></center>
		</div>

</body>
</html>