

<?php
include 'DB_conn.php';

 ?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin_design.css">
	<link rel= "stylesheet" href= "line-awesome-1.3.0/css/line-awesome.min.css" >
	<title>
		Admin | Dashboard
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
				<span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
			</div>
			<div class="cart">

				<a href="index.php" name=""><i class="las la-file-export"></i>Logout</a>
			</div>
		</div>
		<h1 style="padding-left: 5%; color: red;">DASHBOARD</h1><br><br>
		<div class="body">

			<div class="card-body">
				<div class="analytics">
                
                <div class="card">
                	<?php 
                		$total_users = "SELECT * FROM `tbl_users`";
						$result_users=$conn->query($total_users);
						$rowcount_user=mysqli_num_rows($result_users);
                	?>
                    <div class="card-head">
                        <h3><?php echo $rowcount_user;?></h3>
                        <span class="las la-user" style="color: black;"></span>
                         
                    </div>
                          <b><h4>Users</h4></b> 
                </div>
                <div class="card">
                	<?php 
                		$total_products = "SELECT * FROM `tbl_items`";
						$result_products=$conn->query($total_products);
						$rowcount_products=mysqli_num_rows($result_products);?>
                    <div class="card-head">
                        <h3><?php echo $rowcount_products;?></h3>
                        <span class="las la-apple-alt" style="color: red;"></span>
                        
                    </div>
                           <b><h4>Available Products</h4></b> 
                </div>
                <div class="card">
                	<?php 
                		$total_pending = "SELECT * FROM `tbl_orders` WHERE `status` = 'pending'";
						$result_pending=$conn->query($total_pending);
						$rowcount_pending=mysqli_num_rows($result_pending);?>
                    <div class="card-head">
                        <h3><?php echo $rowcount_pending;?></h3>
                        <span class="las la-box" style="color: #6F4512;"></span>
                        
                    </div>                      
                       <b><h4>Pending Orders</h4></b>
                </div>
                <div class="card">
                	<?php 
                		$total_del = "SELECT * FROM `tbl_orders` WHERE `status` = 'delivered'";
						$result_del=$conn->query($total_del);
						$rowcount_del=mysqli_num_rows($result_del);?>
                    <div class="card-head">
                        <h3><?php echo $rowcount_del;?></h3>
                        <span class="las la-shipping-fast" style="color: #EE8821;"></span>
                        
                    </div>                      
                       <b><h4>Delivered Orders</h4></b>
                </div>
            	</div>
            </div>	
               	
	         
	         <table class="table " style="
	         						width: 100%; 
	         						margin-top: 2%; 
	         						border-style: solid; 
	         						border-color: #D6D2CE;
	         						border-radius: 5px;
	         						border-width: 1px;
	         						text-align: center;
	         						background-color: white;
	         						">
               <thead style="background-color: red; border-radius: 10px;">
                   <tr class="inbox">
                       <th ><p>Order ID</p></th>
                       <th ><p>User ID</p></th>
                       <th ><p>Username</p></th>
                       <th ><p>Orders</p></th>
                       <th ><p>Address</p></th>
                       <th ><p>Total Bill</p></th>
                       <th ><p>status</p></th>

                    </tr>
                </thead>
            		<?php 
					    $sql= "SELECT * FROM `tbl_orders`";
					    $result=$conn->query($sql);

					    while($row=mysqli_fetch_array($result)){
					    	if($result->num_rows>0){
					 ?>
				<tbody>

                    <tr style="font-size: 20px;">
                          
	                    <td><h6><?php echo$row["order_id"];?></h6></td>    
	                    <td><h6><?php echo $row["user_Id"]; ?></h6></td>
	                    <td><h6><?php echo $row["Name"]; ?></h6></td>
	                    <td><h6><?php echo $row["order_list"]; ?></h6></td>
	                    <td><h6><?php echo $row["address"]; ?></h6></td>
	                    <td><h6><?php echo $row["total_orders"]; ?></h6></td>
	                    <td><h6><?php echo $row["status"]; ?></h6></td>
	                            
	                    </td>
                    </tr>
         	 
			<?php
                                       
                                    
                                }else{ 
                                        	
					    			// echo "<center><tr><h1>Your Cart</h1>";
							        // echo "<p>Your Cart is currently empty</p>";

							        // echo "<a href='dashboard.php'><button>CONTINUE SHOPPING</button></a>";
							        // echo "</center></tr>";
							        echo "<tr><td><p>No Items</p></td></td>";
	          } }?>
	            </tbody>
	        	</table>
	        	<br><br>
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