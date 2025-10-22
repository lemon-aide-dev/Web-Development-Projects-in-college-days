<?php 
   include 'Connection.php';
 ?>
<DOCTYPE! html>
<html>
<head>
    <title>Insert Item</title>
    <style>
        body{
            background-image: url('background.jpg')
        } 
        
        .card{
            max-width: 50%;
            height: auto;
            text-align: center;
            position: absolute;
            margin-left: 25%;
            margin-right: auto;
         }
         .card-body{

            text-align: center;
            margin-left: 4%;
            font-size:20px;
            max-width: 90%;

         }
    
        input{
            text-align: center;
            border-radius: 20px;
            height: 50px;
            width: 70%;
        }
        .card-header{
            font-size: 50px;
            color: black;
            height: 10%;
        }
        .btn{
            background-color:  #548dbf;
            border-radius: 20px;
            height: 20%;
            padding: 4px 20px 0;
            width: 100%;
            font-size: 25px;
         }
       .btn span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
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
    
        <link rel="stylesheet" type="text/css" href="\Warehouse\css\bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="card">
                <a href="display_inventory.php"  style="font-size: 30px; text-decoration: none; color:black; margin-left: 85%;">&times;</a>
                <h1 class="card-header"><center>Insert Item</center></h1>

                <div class="card-body">

                    <form action = "save_inventory.php"  method = "POST">
                            <label for="ItemName" class="form-label"><h4>Item Name:</h4></label>
                            <input type="text" name="ItemName" class="form-control" placeholder="Enter Item Name" required>
                            <br>
                            <label for="Stock" class="form-label"><h4>Description:</h4></label>
                            <input type="text" name="Description" class="form-control" placeholder="Enter Brief Product Description" required>
                            <br>
                            <label for="Stock" class="form-label"><h4>Supplier:</h4></label>
                            <input type="text" name="Supplier" class="form-control" placeholder="Enter Supplier name" required>
                            <br>
                            <label for="Stock" class="form-label"><h4>Stock Quantity:</h4></label>
                            <input type="text" name="Stock" class="form-control" placeholder="Enter Stock" required>
                            <br>
                            <button type="submit" class="btn btn-primary"><span>Submit</span></button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>