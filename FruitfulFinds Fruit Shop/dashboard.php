<?php 
    include 'DB_conn.php';
    session_start();
    $name=$_SESSION['id'];

    $sql= "SELECT * FROM `tbl_users` WHERE `user_Id` = '$name'";
    $result=$conn->query($sql);

    while($row=mysqli_fetch_array($result)){
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="dashboard_design.css">
	<link rel= "stylesheet" href= "line-awesome-1.3.0/css/line-awesome.min.css" >
	<script type="text/javascript" src="carousel_effect.js"></script>
	<title>
		Dashboard
	</title>
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
		<!-- <div class="promotion">
			<center><img src="promotion.png"></center>
		</div> -->
		<div class="slideshow-container"><center>
		  <div class="slide">
		    <img src="ADS/1.png">
		  </div>
		  <div class="slide">
		    <img src="ADS/2.png">
		  </div>
		  <div class="slide">
		    <img src="ADS/4.png">
		  </div>
		  <a class="prev" onclick="prevSlide()">&#10094;</a>
		  <a class="next" onclick="nextSlide()">&#10095;</a>
		</div></center>
		<br>
		<div class="body">
			<div class="content">
				<?php 
			    include 'DB_conn.php';
			        $query = mysqli_query($conn,"SELECT * FROM `tbl_items` ");


			        while($row=mysqli_fetch_array($query)){      

			          	$item_Name=$row['item_Name'];
			            $item_ID=$row['item_Id'];
			            $price=$row['item_price'];
			            $item_Description=$row['item_description'];
			            $origin = $row['item_origin'];
			            $sell = $row['selling_type'];
			            $image = $row['item_Image'];
			                           
			                        
			?>
		
					<div class="card">
           					<a type="submit" href="das_view.php?id=<?php echo $item_ID?>" ><img src="<?php echo $image?>" id="<?php echo $item_ID;?>" name="<?php echo $item_ID;?>"></a>
           					<div class="card-content">
           						
           							<h2><center><?php echo $item_Name;?></center></h2><b>
           							
           							<p>₱ <?php echo $price;?> <?php echo $sell;?></p></b>

           							<a href="add_to_cart.php?id=<?php echo $item_ID?>"><button onclick="alert('Added to cart!')"><span><b>ADD TO BASKET</b></span></button></a>
           					</div>
                    </div>  
		
			<?php } } ?>
			</div>
		</div>

		<div class="footer" style="font-family: arial;">
			<center><p><b><i class="las la-copyright"></i>2024, FruitfulFinds</b></p></center>
		</div>
</body>
</html>