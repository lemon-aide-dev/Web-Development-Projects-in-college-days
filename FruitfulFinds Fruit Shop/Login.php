<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login-register_design.css">
	<link rel= "stylesheet" href= "line-awesome-1.3.0/css/line-awesome.min.css" >
	<title>
		Login
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
			<a href="index.php"><img src="FruITfulFinds.png"></a>
			<div class="cart">
				<a href="" onclick="alert('Login first to buy this!');"><i class="las la-box" ></i>My Orders</a>
				<a href="index.php"><i class="las la-home"></i>Home</a>
				<a href="cart.html" name=""><i class="las la-shopping-basket"></i>Basket</a>
			</div>
		</div>

		<div class="body">
			<div class="card-body">
				<center>
					<form method="POST" action="login_function.php">
						<h1>Login</h1>
				        	<input type="email" name="email" id="email"required placeholder="Email">
				        <br>
				        <br>
				        	<input type="password" name="password" id="password"required placeholder="Password">

				        <br>
				        <br>
				                 
				        <a href="dashboard.php"><button type="submit" class = "btn btn-dark" id="login_button" onclick="dashboard.php"><b>SIGN IN<b></button></a>
				        <br>

				       
			        </form>
			         <p class="float-start"><a href="register.html" style="font-size:16px; text-decoration: none; font-weight: normal; color: black;"><b>Create account</b></a></p> 
			    </center>
	         </div>
	     
	    </div>
	                  	  
	       
		<div class="footer">
			<center><p><i class="las la-copyright"></i>2024, FruitfulFinds</p></center>
		</div>

</body>
</html>