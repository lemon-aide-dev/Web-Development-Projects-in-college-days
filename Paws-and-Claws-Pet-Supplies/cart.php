<?php 
	include 'conn.php';
	session_start();
	$id=$_SESSION['id'];


	$sql= "SELECT * FROM `tbl_cart` WHERE `customer_Id` = '$id'";
    $result=$conn->query($sql);


    $cart= "SELECT `qty` FROM `tbl_cart` WHERE `customer_Id` = '$id'";
    $cartresult=$conn->query($cart);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="cart.css">
	<title>Cart</title>
</head>
<body>
	<div class="header">
        <div class="animal">
            <img src="\paws_claws\login-register-images\wdog.png">
            <img src="\paws_claws\login-register-images\wcat.png">
            <img src="\paws_claws\login-register-images\wbird.png">
            <img src="\paws_claws\login-register-images\wrep.png">
        </div>
    </div>
    <div class="card container p-2">
		<a href="dashboard_clone.php"><button style="width:150px; margin-right: 1%;padding: 1%; "><span>Back</span></button></a>
        <h2><center>Shopping Cart</center></h2>
                <div class="container float-end w-100 fixTableHead">
                    <table class="table ">
                        <thead class="text-light ">
                            <tr class="inbox">
                            	<th scope="col"><p>&nbsp;Id</p></th>
                                <th scope="col"><p>&nbsp;Item Name</p></th>
                                
                                <th scope="col"><p>Quantity</p></th>
                                <th scope="col"><p>Total Price</p></th>
                                <th scope = "col"><p>&nbsp;</p></th>
                                

                                <th scope="col"><p>Remove</p></th>
                            </tr>
                        </thead>
                        <tbody class="table" style="height: 10%;">
                                    <?php

                                        if($result->num_rows>0){
                                           
                                            while($row = mysqli_fetch_assoc($result)){
                                            	$Item_Id=$row['item_Id'];
    										echo "<tr><td><h6>" . $row["item_Id"] . "<h6></td></tr";
                                            echo "<tr><td><h6>" . $row["item_name"] . "<h6></td></tr";
                                        
                                            echo "<tr><td><h6>" . $row["qty"] . "<h6></td></tr";
                                          
                                            echo "<tr><td><h6>". $row["price"] ."</h6>". "</td></tr";

                                      
                                            echo "<br>";
                            ?><td>
                            <!--to edit_data.php na file-->
                            <a href="addqty.php?id=<?php echo $Item_Id; ?>">
                                <button class = "button" type="submit"><span>+</span></button>
                            </a>
                            <a href="subqty.php?id=<?php echo $Item_Id; ?>">
                                <button class = "button" type="submit"><span>-</span></button>
                            	</a>
                            
                        	</td>
                        	<td>

                            	<a href="remove_item.php?id=<?php echo $Item_Id; ?>">
                                <button class = "button" type="submit"><span>&times;</span></button>
                            	</a>
                            
                        	</td><?php
                                       
                                        }
                                        }else{
                                            echo "<tr><td><p>No Items</p></td></td>";
                                            
                                        }
                                        

                                    ?>
                            
                        </tbody>            
                    </table>
                </div></div>
                <div class="cart" >
                    <h4>Billing Address</h4>
                <?php
                    
                    $sql3= "SELECT * FROM `tbl_account`  WHERE `customer_Id` = '$id' ";
                    $result3=$conn->query($sql3);
                    $row = mysqli_fetch_array($result3);


                ?> 
                            <form method="POST" action="update_account.php">
                                <div class=" form-group" style=" width: 40%;">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="Username" class="form-control mb-1" value="<?php echo $row['customer_name'];?>" required>
                                </div>
                                <div class="form-group" style=" width: 40%;">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" name="email" class="form-control mb-1" value="<?php echo $row['email'];?>" required>
                                    <!-- <div class="alert alert-warning mt-3">
                                        Your email is not confirmed. Please check your inbox.<br>
                                        <a href="javascript:void(0)">Resend confirmation</a>
                                    </div> -->
                                </div>
                                 <div class="form-group" style=" width: 60%;">
                                    <label class="form-label">Address</label>
                                    <input type="text" name = "address" class="form-control" value="<?php echo $row['address'];?>" required>
                                </div></form>    
                        <ul id="cart-items" ></ul>
                        <?php 
                            $sql2= "SELECT SUM(`price`) AS 'Total' FROM `tbl_cart`  WHERE `customer_Id` = '$id' ";
                            $result2=$conn->query($sql2);
                            $row = mysqli_fetch_array($result2);
                            $total = $row['Total'];

                            // $sql4= "SELECT SUM(`qty`) AS 'Total' FROM `tbl_cart`  WHERE `customer_Id` = '$id' ";
                            // $result4=$conn->query($sql4);
                            // $row = mysqli_fetch_array($result4);
                            // $totalq = $row['Total'];

                            
                        ?>  
                        <h3>Total: ₱ <span id="total"><?php echo $total;?></span></h3>
                        <a href="ordered.php"><button onclick="alert('Checking if Order was placed');">Buy all</button></a>
                    </div>
                    </div>

                    <div class="footer">&copy;<span id="year"> </span><span> Paws&Claws. All rights reserved.</span></div>
                    </div>


</body>
</html>