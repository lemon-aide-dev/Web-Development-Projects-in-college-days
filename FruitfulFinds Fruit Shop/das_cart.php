<?php 
	include 'DB_conn.php';
	session_start();
	$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="cart_design.css">
	<link rel= "stylesheet" href= "line-awesome-1.3.0/css/line-awesome.min.css" >
	<title>
		Basket
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
			<div class="cart" style="
				float: right;
				padding-top: 1%;
				padding-right: 5%;
				width: 35%;
			">
				<a href="myorders.php"><i class="las la-shipping-fast"></i> My Orders</a>
				<a href="das_cart.php" name=""><i class="las la-shopping-basket"></i>Basket</a>
				<a href="account.php"><i class="las la-user"></i>Account</a>
				<a href="logout.php" name=""><i class="las la-file-export"></i>Logout</a>
			</div>
		</div>

		<div class="body" style="padding-left: 2%;">
			

					 <center>
            <table class="table " style="width:100%;">
               <thead >
                   <tr class="inbox">
                       <th style="width: 50%; text-align: left; padding-left: 8%;"><p>PRODUCT</p></th>
                       <th ><p>PRICE</p></th>
                       <th ><p>&nbsp;</p></th>
                       <th style="width: 40px;"><p>QUANTITY</p></th>
                       <th ><p>&nbsp;</p></th>

                    </tr>
                </thead>
                <tbody>
            		<?php 

					    $sql= "SELECT * FROM `tbl_cart` WHERE `user_Id` = '$id'";
					    $result=$conn->query($sql);

					    while($row=mysqli_fetch_array($result)){
					    	if($result->num_rows>0){
                               
                                	$Item_Id=$row['item_Id'];
                                	$image = $row['image'];
                    
                            echo "<tr>";
                            	echo "<td>";
                            		echo "<img src='".$image."' style='width: 80px; height: auto; float: left; padding-left: 12%;'>".$row['itemName']."<br>";
                            			echo "<a href='remove_item.php?id=".$Item_Id."' style='font-size: 15px; color: black;'>Remove</a></td>";
	                            	echo "<td><h6>₱".$row['price']."</h6></td>";
	                            	echo "<td style='width: 30px;'>
	                            			<a href='add_qty.php?id='".$Item_Id.">
	                                		<button class = 'button' type='submit' style='width: 40px;height: 40px;'><span><b>+</b></span></button>
	                            			</a>
	                            		</td>";   
	                            	echo "<td><h6>".$row["qty"]."</h6></td>";

	                           		echo "<td style='width: 30px;'>";
	                            
	                            	echo "<a href='sub_qty.php?id='".$Item_Id."'>";
	                                echo "<button class = 'button' type= 'submit' style='width:40px;height: 40px;'><span><b>-</b></span></button>
	       								</a>
	                        			</td>
                        		</tr>";
      
                                }else{ 
                                        	
					    			echo "<tr>";
					    				echo "<td>".$Item_Id."</td>";
							      	echo "</tr";
  } }?>
	            </tbody>
	        </table></center>
	        <br>
	        <br>
	        
	    </div>
	    <div class="a">

		    <div class="checkoutbutton">  
		    		<?php 
		    			$sql2= "SELECT SUM(`price`) AS 'Total' FROM `tbl_cart`  WHERE `user_Id` = '$id' ";
                            $result2=$conn->query($sql2);
                            $row2 = mysqli_fetch_array($result2);
                            $total = $row2['Total'];
                             
		    		?>
		    		<p>Subtotal: &nbsp; &nbsp;₱<?php if($total>0){ echo $total; }else { echo "0";}?>&nbsp;PHP</p>

		    	<div class="bt">         	  
		     	<a href="checkout.php"  style="float: right; "><button style="width: 200px; padding: 5%;" ><b>CHECKOUT</button></b></a>
		        </div>	
		        	
		  	</div><p style="text-align: right; padding-right: 5%;">Checkout all of your carts contents, make sure that you placed the right items before clicking to avoid additional fees</p>
		  	<p style="text-align: right; padding-right: 5%;">Total bill calculated upon checkout including delivery fee</p>
			<div class="footer" style="font-family: arial;">
				<center><p><b><i class="las la-copyright"></i>2024, FruitfulFinds</b></p></center>
			</div>
		</div>	

</body>
</html>