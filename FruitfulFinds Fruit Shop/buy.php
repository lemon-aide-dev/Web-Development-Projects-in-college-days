<?php 
	include 'DB_conn.php';
	session_start();
	$id=$_SESSION['id'];
	$itemid = $_REQUEST['itemid'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="cart_design.css">
	<link rel= "stylesheet" href= "line-awesome-1.3.0/css/line-awesome.min.css" >
	<title>
		Checkout
	</title>
	<style type="text/css">
		
	</style>
	 <link rel="icon" type="image/x-icon" href="logo-removebg.png">
</head>
<body>
		<div class="header">
			<a href="dashboard.php"><img src="FruITfulFinds.png"></a>
			<div class="cart">
				<a href="myorders.php"><i class="las la-shipping-fast"></i> My Orders</a>
				<a href="das_cart.php" name=""><i class="las la-shopping-basket"></i>Basket</a>
				<a href="account.php"><i class="las la-home"></i>Home</a>
			</div>
		</div>
	
	    <div class="body" style="padding-left: 2%;"> 
	    <center>             	
	    <h1>CHECKOUT YOUR ORDER</h1> 
	       <table class="table " style="width:60%;">
               <thead >
                   <tr class="inbox">
                       <th style="width: 40%; text-align: left; padding-left: 8%;"><p>PRODUCT</p></th>
                       <th ><p>PRICE</p></th>
                       <th style="width: 40px;"><p>QUANTITY</p></th>

                    </tr>
                </thead>
            		<?php

					    $sql= "SELECT * FROM `tbl_items` WHERE `item_Id` = '$itemid'";
					    $result=$conn->query($sql);
					    $row=mysqli_fetch_array($result);
					    	
					 ?>
				<tbody>
					<?php
                               
                                	$Item_Id=$row['item_Id'];
                                	$image = $row['item_Image'];
                                	$price = $row['item_price'];
                    ?>
                            <tr>
                            	<td>
                            		<img src="<?php echo $image?>" style="width: 50px; height: auto; float: left; padding-left: 12%;">
                            		<?php echo $row["item_Name"]; ?><br>
                            	</td>
	                            <td><h6>₱ <?php echo $price;?></h6></td>
	             <form method="post" action="buy_validation.php?itemid=<?php echo $itemid;?>">
	                            <td><h6><input type="number" id="qty" name="qty" value="<?php echo $qty=1;?>"style="width: 50px; height:30px; text-align: center; " min="1"/></h6></td>

	                            <td style="width: 30px;">
	                            
	                        	</td>
                        	</tr>  
	            </tbody>
	        </table>
	    </center>
	    </div>  
		<div class="a">

		    <div class="checkoutbutton" style="margin-right: 15%;">  
		    		<p>Delivery Fee: ₱ 40</p>
		    		<?php
		    			$sql3= "SELECT `address` FROM `tbl_users` WHERE  `user_Id` = '$id'";
					    $result3=$conn->query($sql3);
					    $row3=mysqli_fetch_array($result3);
					?>
		    		<label for="address" style="
		    			font-size: 20px; float:right; padding-left:2%;
		    			">Billing Address</label>
		    		<input type="text" name="address" id="address" value="<?php echo $row3['address'] ?>" style="
		    								width: 30%; 
		    								text-align:
		    								center;
		    								float: right;
		    								height: 28px; 
		    								font-weight: bold; 
		    								border: solid gray 1px;">
		    								<br>  
		    								<br>
		    								<br>

		    	<div class="bt" style="float: right; ">
		    		      	  
		     		<a   ><button type ="submit"style="width: 200px; padding: 5%;" ><b>PLACE ORDER</button></b></a>
		     		  </form>
		        </div>	
		        
		  	</div>
		  	<center>
		  		<br>
		  		<br>
		  		<br>
		  		<p style="text-align: right; padding-right: 20%;">Make sure that you placed the right items before clicking to avoid additional fees</p>
			<div class="footer" style="font-family: arial; position: initial;">
				<center><p><b><i class="las la-copyright"></i>2024, FruitfulFinds</b></p></center>
			</div>
		</div>	


</body>
</html>