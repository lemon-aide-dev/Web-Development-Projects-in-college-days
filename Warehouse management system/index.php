<DOCTYPE! html>
<html>
    <style>
        body{
            background-image: url('background.jpg');
            background-size: cover;
            
        }
        
        tr,td,th{
            font-size: 20px;

            color: black;
        }
        .Inv_head{
            font-size: 40px;
            color: black;
            font-family: arial;
            padding-top: 2%;
        }
        button{
            background-color: dimgray; 
            border: none;
            color: white;
            
            padding: 5px 15px;
            opacity: 0.5;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer
            
        } 
        button:hover{
            opacity: 1;
        }
        #inv_tbl{
            opacity: 93%;
            margin-top: 5%;
            background-color: whitesmoke;
            max-height: 500px;
            overflow: scroll;
            color: black;
        }
        .but_choice{
            width: 200px;
            height: 60px;
            font-size: 18px;
        }
        .table{
            
        }
            
    </style>

    <head>
        <meta charset='utf-8'>
        <meta name = 'viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" type="text/css" href="\Warehouse\css\bootstrap.min.css">
    <title>Inventory</title>
            
    </head>
    <body>
            
            
        <div class="container" id="inv_tbl">
                <h1>
                    <center>
                        <p class = "Inv_head">STOCKPILE Inventory</p>
                    </center>
                    
                </h1>
                <a href="login.php">
                    <button class = "but_choice float-end" type="submit"><hover>Administrator Log in</hover></button>

                </a>
        	<table class="table">
                <thead>

                    <!-- <tr>
                        <th>
                            
                        </th> 
                        <th>
                    </tr> -->
                    <tr>
                        
                        
                        <th scope="col">Item Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Supplier</th>
                        <th scope="col">Stock</th>
                        <!-- <th scope = 'col'>Update</th>
                        <th scope = 'col'>Remove</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include 'Connection.php';
                        $query = mysqli_query($conn,"SELECT * FROM `inventory_system` ");


                        while($row=mysqli_fetch_array($query)){      

                        	$Item_Name=$row['item_name'];
                            $Item_ID=$row['item_ID'];
                            $Item_Description=$row['description'];
                            $Supplier=$row['supplier_Name'];
                            $Stock=$row['stock_Quantity'];
                           
                        
                    ?>
                    <tr>
                    	
                    	<td>
                            <?php echo $Item_Name;?>
                    		
                    	</td>
                    
                        <td>
                            <?php echo $Item_Description;?>
                        </td>
                        <td>
                            <?php echo $Supplier;?>
                            
                        </td>
                        <td>
                            <?php echo $Stock;?>
                        </td>

                    	
                        <!-- <td>
                            to edit_data.php na file
                            <a href="edit_data.php?id=<?php //echo $Item_ID; ?>">
                                <button class = "button" type="submit"><span>EDIT</span></button>
                            </a>
                        </td>
                        <td>

                            <a href="Delete.php?id=<?php //echo $Item_ID; ?>">
                                <button class = "button" type="submit"><span>Remove</span></button>
                            </a> -->
                            
                        <!--</td> -->
                    </tr>
                <?php } ?>


                </tbody>
        </table>
        </div>
    </body>
    </html>
