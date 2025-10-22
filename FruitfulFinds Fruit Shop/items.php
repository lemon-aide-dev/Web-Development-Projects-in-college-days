<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin_design.css">
	<link rel= "stylesheet" href= "line-awesome-1.3.0/css/line-awesome.min.css" >
	<title>
		Admin | Products
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
		<h1 style="margin-left: 5%; color: red;">Products</h1>
		<table class="table " style="
	         						width: 96%; 
	         						margin-left: 2%;
	         						margin-top: 2%; 
	         						border-style: solid; 
	         						border-color: #D6D2CE;
	         						border-radius: 5px;
	         						border-width: 1px;
	         						text-align: center;
	         						background-color: white;
	         						">
               <thead style="background-color: #D6D2CE;">
                   <tr class="inbox">
                       <th ><p>Item ID</p></th>
                       <th ><p>Item Name</p></th>
                       <th ><p>Item Price</p></th>
                       <th width="200px"><p>Item Description</p></th>
                       <th ><p>Item Origin</p></th>
                       <th ><p>Selling Type</p></th>
                       <th ><p>action</p></th>


                    </tr>
                </thead>
            		<?php include 'DB_conn.php';
					    $sql= "SELECT * FROM `tbl_items`";
					    $result=$conn->query($sql);

					    while($row=mysqli_fetch_array($result)){
					    	if($result->num_rows>0){
					    		$itemId = $row["item_Id"];
					    		$itemN = $row["item_Name"];
					    		$itemP = $row["item_price"];
					    		$itemD = $row["item_description"];
					    		$itemO = $row["item_origin"];
					    		$ItemT = $row["selling_type"];
					 ?>
				<tbody>

                    <tr style="font-size: 20px;">
                          
	              
	                    <td><h6><?php echo  $itemId;?></h6></td>
	                    <td><h6><?php echo  $itemN;?></h6></td>
	                    <td><h6><?php echo  $itemP;?></h6></td>
	                    <td><h6><?php echo  $itemP;?></h6></td>
	                    <td><h6><?php echo  $itemO;?></h6></td>
	                    <td><h6><?php echo  $ItemT;?></h6></td>
	                    <td>
	                        <a href="edit_item.php?id=<?php echo $itemId; ?>" style="color: blue;">
	                        	<span><b><i class="las la-edit"></i></b></span>
	                    	</a>
	                    	<a href="admin_delete_item.php?id=<?php echo $itemId ?>" style="color: red;">
	                        	<span><b><i class="las la-trash"></i></b></span>
	                    	</a>
                    </tr>
         	 
			<?php
                                       
                                    
                                }else{ 
                                        	
					    			// echo "<center><tr><h1>Your Cart</h1>";
							        // echo "<p>Your Cart is currently empty</p>";

							        // echo "<a href='dashboard.php'><button>CONTINUE SHOPPING</button></a>";
							        // echo "</center></tr>";
							        echo "<tr><td><p>No Items</p></td></td>";
	          } }?>
	            </tbody></table>
	     	<script>
				function openNav() {
				  document.getElementById("mySidenav").style.width = "150px";
				}

				function closeNav() {
				  document.getElementById("mySidenav").style.width = "0";
				}
				</script>
	    </div>
	</div>
</div>
	                  	  
	       
</body>
</html>