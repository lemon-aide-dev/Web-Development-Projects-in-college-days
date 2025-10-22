<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="view_design.css">
	<link rel= "stylesheet" href= "line-awesome-1.3.0/css/line-awesome.min.css" >
	<title>
		View Product
	</title>
	<style type="text/css">
		.header a{
			text-decoration: none;
			padding-bottom: 2%;
			color: black;
			padding-right: 3.4%;
		}
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
			<div class="cart" style="
				float: right;
				padding-top: 1%;
				padding-right: 4.1%;
				width: 36%;
			">
				<a href="myorders.php"><i class="las la-shipping-fast"></i> My Orders</a>
				<a href="das_cart.php" name=""><i class="las la-shopping-basket"></i>Basket</a>
				<a href="account.php"><i class="las la-user"></i>Account</a>
				<a href="logout.php" name=""><i class="las la-file-export"></i>Logout</a>
			</div>
		</div>
			
		<div class="body">
			<div class="prod_image">
				<?php 
			    include 'DB_conn.php';
			    $id = $_GET['id'];
			        $query = mysqli_query($conn,"SELECT * FROM `tbl_items` Where `item_Id` = $id");


			        while($row=mysqli_fetch_array($query)){      

			          	$item_Name=$row['item_Name'];
			            $item_ID=$row['item_Id'];
			            $price=$row['item_price'];
			            $item_Description=$row['item_description'];
			            $origin = $row['item_origin'];
			            $sell = $row['selling_type'];
			            $image = $row['item_Image'];
			                           
			                        
			?>
				<img src="<?php echo $image?>">
			</div>
			<div class="description">
				<h1><?php echo $item_Name;?></h1>
				<h3>₱ <?php echo $price;?>  <?php echo $sell;?> </h3>

				<br>
				<p><?php echo $item_Description;?></p>
				<br>
				<p><b>Type: </b><?php echo $origin;?><br><br></p>
				<br>
				<div class="buttons">
					<div class="mainbutt">
						<a href="add_to_cart.php?id=<?php echo $item_ID;?>"><input type="button" value="ADD TO BASKET"></a>
					</div>
					<br>
					<div class="other">
						<a href="dashboard.php"><input class="more" type="button" value="⟵ GO BACK"></a>
						<a href="buy.php?itemid=<?php echo $item_ID;?>"><input class="buy" type="button" value="BUY"></a>
					</div>
					
				</div>
			</div>
	        
	    </div>
	         <?php } ?>         	  
	       
		<div class="footer" style="font-family: arial;">
			<center><p><b><i class="las la-copyright"></i>2024, FruitfulFinds</b></p></center>
		</div>

</body>
</html>