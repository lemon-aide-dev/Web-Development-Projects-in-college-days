<?php 
	include 'DB_conn.php';
	session_start();
	$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="myorders.css">
	<link rel= "stylesheet" href= "line-awesome-1.3.0/css/line-awesome.min.css" >
	<title>
		My Orders
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
			<div class="cart" style="width: 35%; padding-right: 5%;">
				<a href="myorders.php" ><i class="las la-shipping-fast"></i> My Orders</a>
				<a href="das_cart.php" name=""><i class="las la-shopping-basket"></i>Basket</a>
				<a href="account.php"><i class="las la-user"></i>Account</a>
				<a href="logout.php" name=""><i class="las la-file-export"></i>Logout</a>
			</div>
		</div>
		<center>
		<div class="body" style="padding-top: 4%;">
			<center>
            <table class="table " style="width:100%;">
               <thead >
                   <tr class="inbox" style="background-color: #D0CDCD; border-color: #D0CDCD;">
                       <th style="width: 80px;"><p>Order ID</p></th>
                       <th style="width: 200px;"><p>Recipient Name</p></th>
                       <th style="width: 350px;"><p>List of Order/s</p></th>
                       <th ><p>Delivery Address</p></th>
                       <th ><p>Total Bill</p></th>
                       <th style="width: 150px;"><p>Status</p></th>
                       <th ><p>&nbsp;</p></th>
                    </tr>
                </thead>
                <tbody>
				<?php 
			        $query = mysqli_query($conn,"SELECT * FROM `tbl_orders` WHERE `user_Id` = $id ORDER BY `status` DESC");


			        while($row=mysqli_fetch_array($query)){      

			          	$order_id=$row['order_id'];
			            $user_ID=$row['user_Id'];
			            $name=$row['Name'];
			            $list=$row['order_list'];
			            $address = $row['address'];
			            $bill=$row['total_orders'];
			            $stat = $row['status'];

			            if($query->num_rows>0){
                    
                            echo "<tr>";
                            	
                   
	                            	echo "<td><h6>".$order_id."</h6></td>";
	                            	echo "<td><h6>".$name."</h6></td>";   
	                            	echo "<td><h6>".$list."</h6></td>";
	                           		echo "<td><h6>".$address."</h6></td>";
	                            	echo "<td><h6>₱ ".$bill."</h6></td>";
	                            	echo "<td id='status' value='$stat'><h6>".$stat."</h6></td>";
	                       			echo "<td style='width: 50px;'>
	                            			<a href='order_recieved_func.php?orderid=$order_id'>
	                                		<button class = 'button' id='butt' type='submit' style='width: 130px;height: 40px;'><span><b>Order Recieved</b></span></button>
	                            			</a>
	                            		</td>";
                        	echo "</tr>";
      							
                                }else{ 
                                        	
					    			echo "<tr>";
					    				echo "<td></td>";
							      	echo "</tr>";

							      	


  } }?>
			            
			                           
			                        
					</tbody>
				<br>
	        	</table></center>
			</div>

			  	<div class="footer" style="font-family: arial; ">
			<center><p><b><i class="las la-copyright"></i>2024, FruitfulFinds</b></p></center>
		</div>
</body>

</html>