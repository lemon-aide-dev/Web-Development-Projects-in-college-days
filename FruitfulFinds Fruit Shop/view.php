<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="view_design.css">
	<link rel= "stylesheet" href= "line-awesome-1.3.0/css/line-awesome.min.css" >
	<title>
		View Product
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
			<div class="cart" style="
				float: right;
				padding-top: 1%;
				padding-right: 3%;
				width: 20%;
			">
				<a href="Login.php"><i class="las la-user"></i>Account</a>
				<a href="cart.html" name=""><i class="las la-shopping-basket"></i>Basket</a>
			</div>
		</div>
			<?php 
			    include 'DB_conn.php';
			    $id = $_REQUEST['id'];
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
		<div class="body">
			<div class="prod_image">
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
						<a href="cart.html"><input type="button" value="ADD TO BASKET" onclick="alert('Login first!')"></a>
					</div>
					<br>
					<div class="other">
						<a href="index.php"><input class="more" type="button" value="⟵ GO BACK"></a>
						<a href=""><input class="buy" type="button" value="BUY" onclick="alert('Login first to buy this!')"></a>
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