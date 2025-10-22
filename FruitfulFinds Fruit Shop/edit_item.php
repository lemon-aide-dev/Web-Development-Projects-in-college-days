<?php include 'DB_conn.php';
				$id = $_REQUEST['id'];
					    $sql= "SELECT * FROM `tbl_items` where `item_Id` = '$id'";

					    $result=$conn->query($sql);

					    $row=mysqli_fetch_array($result);
	
					    		$itemId = $row["item_Id"];
					    		$itemN = $row["item_Name"];
					    		$itemP = $row["item_price"];
					    		$itemD = $row["item_description"];
					    		$itemO = $row["item_origin"];
					    		$ItemT = $row["selling_type"];
					 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin_design.css">
	<link rel="stylesheet" type="text/css" href="update_design.css">
	<link rel= "stylesheet" href= "line-awesome-1.3.0/css/line-awesome.min.css" >
	<title>
		Products | edit
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
				<span style="font-size:20px;cursor:pointer;" onclick="openNav()">&#9776;</span>
			</div>
			<div class="cart">

				<a href="index.php" name=""><i class="las la-shopping-cart"></i>Logout</a>
			</div>
		</div><center>
		<h1 style="margin-left: 5%; padding-top: 2%; color: red;">Update Item</h1>
		<div class="body">
			
			<form action="update_item.php?id=<?php echo $itemId;?>" method="POST">
				
				<label for="itemid">ITEM ID</label>&emsp;
				<input type = "text" id="itemid" name = "itemid" value="<?php echo $itemId;?>" disabled>
				<br>
				<br>
				<label for="itemname">ITEM NAME</label>
				<input type = "text" id="itemname" name = "itemname" value="<?php echo $itemN; ?>">
				<br>
				<br>
				<label for="itemprice">ITEM PRICE</label>
				<input type = "text" id="itemprice" name = "itemprice" value="<?php echo $itemP; ?>">
				<br>
				<br>
				<label for="itemdescription">DECRIPTION</label>
				<textarea id="itemdescription" name = "itemdescription"><?php echo $itemD;?></textarea>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<label for="itemorigin">ITEM ORIGIN</label>
				<input type = "text" id="itemorigin" name = "itemorigin" value="<?php echo $itemO;?>">
				<br>
				<br>
				<br>
				<label for="sellingtype">SELLING TYPE</label>
				<input type = "text" id="sellingtype" name = "sellingtype" value="<?php echo $ItemT;?>">
				<br>
				<br>
				<br>
				<br>
				<input type="submit" name="" class="button">

			</form>
			</center>
			

				
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