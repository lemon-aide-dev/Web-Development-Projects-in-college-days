<?php 
    include 'conn.php';
    session_start();
    $name=$_SESSION['id'];

    $sql= "SELECT * FROM `tbl_cart` WHERE `customer_Id` = '$name'";
    $result=$conn->query($sql);

    if($result->num_rows>0){
        while($itemrow=mysqli_fetch_array($result)){

                            //para sa total price
                            $sql2= "SELECT SUM(`price`) AS 'Total' FROM `tbl_cart`  WHERE `customer_Id` = '$name' ";
                            $result2=$conn->query($sql2);
                            $row = mysqli_fetch_array($result2);
                            $total = $row['Total'];


                                //para sa pag update ng stocks


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
    border-color:#494943;
    height: 100%;
    width: 50%;
    margin-left: 25%;
    padding-top: 2%;
    padding-bottom: 2%;
    border-radius: 8px;
    margin-top: 1%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
    margin-bottom: 1%;

}
thead .inbox{
  background-color: none;
  font-size: 100%;
  width: 10%;
}
table{
    height: 400px;
}


    </style>
</head>
<body>
    <script type="text/javascript">
        setTimeout(function () {
            window.alert('Order Placed! Thank You for Shopping! Please prepare the exact amount at the delivery date!');
        window.location.href= 'cart.php'; //redirect 

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
    <div class="container card float-end w-100 fixTableHead">
        <center>    <img src="\paws_claws\otherimages\PAWS-removebg.png" style="width: 20%;">
                    <table class="table ">
                        <thead class="text-light ">
                            <tr class="inbox">
                            
                                <h2>You Ordered:</h2>
                                <hr>
                                
                            </tr>
                            
                        </thead>

                        <tbody class="table" style="height: 10%;">
                                    <?php

                                         
                                            echo "<tr><td><h3>" . $itemrow["item_name"] . "<h3></td></tr";
                                        
                                            echo "<tr><td><h3>" . $itemrow["qty"] . "pcs | <h3></td></tr";
                                          
                                            echo "<tr><td><h3>P". $itemrow["price"] ."</h3>". "</td></tr";

                                      
                                            echo "<br>";
                                       
                                        
                                        

                                    ?>
                            <center><tr><td><h2>Total Amount: P<?php echo $total;?></h2>
                    <p>Shipping will take 2-3 days depending on the location</p><hr>
                    </td></tr></center>
                        </tbody>    
                    </table><img src="\paws_claws\otherimages\claw-removebg.png" style="width: 8%;"></center>
                </div>
                <div class="footer">&copy;<span id="year"> </span><span> Paws&Claws. All rights reserved.</span></div>
                    </div>


                    <?php 
                    

                    $sq= "DELETE FROM `tbl_cart` WHERE `customer_Id` = '$name'";
                    $res=$conn->query($sq);
}
}else{
            echo "<script type='text/javascript'>alert('No Items in cart!')</script>";
            echo "<script type='text/javascript'>document.location='cart.php'</script>";
        }
                    ?>
</body>
</html>