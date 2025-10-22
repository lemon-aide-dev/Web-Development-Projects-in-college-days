<?php 
   include 'Connection.php';
 ?>
 <DOCTYPE! html>
 <html>
    <link rel="stylesheet" type="text/css" href="\Warehouse\css\bootstrap.min.css">
      <style>
         
         /*.form-label{
            color: black;
         }
        .mb-3{
         text-align: center;
         font-size:20px;
         border-radius: 20px;
         box-sizing: border-box;
        }
        .form-control{
         box-sizing: border-box;
         border-radius: 20px;
         height: 10%;
         outline: 0;
         padding: 4px 20px 0;
         width: 30%;
        }
*/        body{
            background-image: url('background.jpg');
            background-size: cover;
        }
        h1{
            font-size: 50px;
            color: black;
         }   
         .card{
            background-color: white;
            max-width: 50%;
            height: auto;
            text-align: center;
            margin-top: 2%;
            margin-left: 25%;
            margin-right: auto;
            opacity: 97%;
         }
          input{
            text-align: left;
            padding-left: 20px;
            height: 50px;
            width: 60%;
            font-size: 18px;
        }
         
         .btn{
            border-radius: 2px;
            height: 10%;
            padding: 4px 20px 0;
            width: 80%;
            font-size: 25px;
         }
       .btn span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }
        h4{
            font-size: 20px;
            padding-right: 5px;
        }

        .btn span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }
        .btn:hover span {
            padding-right: 25px;
        }

        .btn:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>
    <head>
        
    <title>Edit Data</title>
    </head>
    <body>
      
        
        <div class="container card p-2">
            <a href="display_inventory.php"  style="font-size: 30px; text-decoration: none; color:black; margin-left: 85%;">&times;</a>
            <h1 class="card-header"><center>Update Item</center></h1>
            <div class="card-body">
                <form action = "Update_inv.php" method = "POST">

                    <?php 
                         $ID=$_GET['id'];
                         $sql= mysqli_query($conn,"SELECT * FROM `inventory_system` WHERE `item_ID`= $ID ");
                            // $result=$conn->query($sql);
                         // $query=mysqli_query($conn,"SELECT * FROM `inventory_system` WHERE 'item_ID' = $ID");
                          while($row=mysqli_fetch_array($sql)){      

                                $Item_Name=$row['item_name'];
                                $Item_ID=$row['item_ID'];
                                $Item_Description=$row['description'];
                                $Supplier=$row['supplier_Name'];
                                $Stock=$row['stock_Quantity'];
                    ?>
                            <label for="id"  class="form-label"><h4>Item ID:</h4></label>
                            <input type="text" name="id" value="<?php echo $Item_ID; ?>">
                            <br>
                            <br>   
                        
                            <label for="ItemName"  class="form-label"><h4>Item Name:</h4></label>
                            <input type="text" name="ItemName"  value="<?php echo $Item_Name; ?>">
                            
                            <br>
                            <br>
                        
                            <label for="Stock"  class="form-label"><h4>Description:</h4></label>
                            <input type="text" name="Description"  value="<?php echo $Item_Description; ?>">
                            <br>    
                            <br>
                        
                            <label for="Stock"  class="form-label"><h4>Supplier:</h4></label>
                            <input type="text" name="Supplier" value="<?php echo $Supplier; ?>">
                            <br>
                            <br>    
                        
                            <label for="Stock"  class="form-label"><h4>Stock Quantity:</h4></label>
                            <input type="number" name="Stock" value="<?php echo $Stock; ?>">
                            
                    
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary"><span>Submit</span></button>
                            <?php } ?>
                  
                </form>
            </div>    
     </div>
    </body>
</html>