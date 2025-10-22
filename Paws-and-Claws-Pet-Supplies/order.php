<?php 
    include 'conn.php';
    session_start();
    $name=$_SESSION['id'];
    $id = $_GET['id'];
    $sql= "SELECT * FROM `tbl_items` WHERE `item_Id` = '$id'";
    $result=$conn->query($sql);




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title></title>
    <style type="text/css">
        body{
            height: 100%;
            margin:0;
        }
        .header{
        background-color: #494943;
        height: 20%;
        width: 100%;
      }
        .header .animal{
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        margin-left: 18%;
      } 
       .header .animal img{
        width: 6%;
        margin-left: 10%;
       }
       .footer {
      position: inherit;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 2rem;
      background: #494943;
      color: white;
      font-weight: 500;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 0.2rem;
    }
.card{

  height: inherit;
}
thead .inbox{
  background-color: none;
  font-size: 100%;
  width: 100%;
}
table{
    height: 400px;
}


    </style>
</head>
<body>
    <script type="text/javascript">
        setTimeout(function () {
            window.alert('Thank You for Shopping! Please prepare the exact amount at the delivery date!');
        window.location.href= 'cart.php'; // the redirect goes here

        },3000);
    </script>
    <div class="header">
        <div class="animal">
            <img src="\paws_claws\login-register-images\wdog.png">
            <img src="\paws_claws\login-register-images\wcat.png">
            <img src="\paws_claws\login-register-images\wbird.png">
            <img src="\paws_claws\login-register-images\wrep.png">
        </div>
    </div>
    <div class="container float-end w-100 fixTableHead">
        <center>
                    <table class="table ">
                        <thead class="text-light ">
                            <tr class="inbox">
                            
                                <th scope="col"><h2>You Ordered:</h2></th>
                            </tr>
                        </thead>
                        <tbody class="table" style="height: 10%;">
                                    <?php

                                        if($result->num_rows>0){
                                           
                                            while($row = mysqli_fetch_assoc($result)){
                                                $Item_Id=$row['item_Id'];
                                        
                                            echo "<tr><td><h4>" . $row["item_name"] . "<h4></td></tr";
                                        
                                            echo "<tr><td><h4> 1 pc<h4></td></tr";
                                          
                                            echo "<tr><td><h4>P". $row["item_price"] ."</h4>". "</td></tr";

                                      
                                            echo "<br>";
                                       
                                        }
                                        }else{
                                            echo "<tr><td><p>No Items</p></td></td>";
                                            
                                        }
                                        

                                    ?>
                            
                        </tbody>    
                    </table><h2>Total Amount: P<?php echo $row["item_price"];?></h2></center>
                </div>
                <div class="footer">&copy;<span id="year"> </span><span> Paws&Claws. All rights reserved.</span></div>
                    </div>


                    <?php 
                    $sq= "DELETE FROM `tbl_cart` WHERE `customer_Id` = '$name'";
                    $res=$conn->query($sq);

                    ?>
</body>
</html>