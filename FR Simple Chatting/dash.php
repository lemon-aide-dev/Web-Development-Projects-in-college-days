<?php 
    session_start();
    include 'Connection.php';
    $name=$_SESSION['name'];

    $sql= "SELECT * from users WHERE username = '$name'";
    $result=$conn->query($sql);

    while($row=mysqli_fetch_array($result)){
?>

<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="dashdesign.css">
        <script type="text/javascript" scr="js/bootstrap.min.js"></script>

                <title>HOME | ACCOUNT</title>

    </head>
    <body onload="window.alert('Welcome Back!');">
        <!-- account page-->

        <div class="container-m p-2 my-2 ">
            <div class="card container p-2 float-start" style=" background-color: #fdece4; width: 450px; "><center>
        
                
                <p><a href="logout.php"><img src="logout-icon.png" class="float-end" style="width:30px; height: 30px;" onclick="return confirm('Do you want to Log out?')"></a></p>
                <br>
                <center><img src=<?php echo $row['profile']; }?> class="center rounded-circle border border-4 border-success" style=" width: 190px; height: 190px;"></center>
                <h1><b>
                    
                    <?php

                    
                        //username
                        echo $_SESSION['name'];
                    ?>
                </b></h1>
                <h3>
                        <?php 
                        //nickname
                            $nm=$_SESSION['name'];
                            $query1=mysqli_query($conn,"SELECT * FROM users WHERE username = '$nm'");
                            while($row=mysqli_fetch_array($query1)){
                                $nn = $row['nickname'];
                            }
                                echo "($nn)";
                            ?>
                    </h3>
                
                <div class="card-footer" style="background-color: #f8d3c9;">
                <br>
                    <a href="manage.php">
                        <img src="manageacc.png"style="width:50px; height: 50px;" ><br><br>
                     
                    </a>
                    <br>
                 
                        <center>
                        <a href="dashmessage.php">
                                <button  class="btn pulse-button text-light" value="Submit" style="background-color:#5c3925 ;">SEND MESSAGE !</button>
                        </a></center>
                        
                </div>
                
                

            </div>
                <?php
                    
                        //username
                            $_SESSION['name'];
                                           //nickname
                            $nm=$_SESSION['name'];
                            $query1=mysqli_query($conn,"SELECT * FROM users WHERE username = '$nm'");
                            while($row=mysqli_fetch_array($query1)){
                                $nn = $row['username'];
                            }
                            
              ?>
           <div class="card container p-2" style="width: 60%;background-color: #fdece4;">
                <div class="container float-end w-100 fixTableHead">
                    <table class="table table-wrapper-scroll-y my-custom-scrollbar">
                        <thead class="text-light">
                            <tr id="inbox">
                                <th scope="col"><img src="message-icon.png" class="float-start" style="width:30px; height: 30px;"><h4>&nbsp;Message(s)</h4></th>
                                <th scope="col"><h4>Date Recieved</h4></th>
                            </tr>
                        </thead>
                        <tbody>
                                    <?php
                                        $sql = "SELECT * FROM `$nn` order by date_recieved desc";
                                        $result = $conn->query($sql);

                                        if($result->num_rows>0){
                                           
                                            while($row = mysqli_fetch_assoc($result)){
    
                                            echo "<tr><td><h5>" . $row["message"] . "<h5></td></tr";
                                            echo "<tr><td><h6>"."(" . $row["date_recieved"] .")</h6>". "</td></tr";
                                            echo "<br>";
                                       
                                        }
                                        }else{
                                            echo "<tr><td><h1>No Messages</h1></td></td>";
                                            
                                        }
                                        $conn->close();

                                    ?>
                        </tbody>            
                    </table>
                    

                </div>
                
            </div>
            
            <br>
            
            
            
            <img src="logo2.png" class="float-end" style="width: 70px; height: 60px; padding-right: 10px;"> &nbsp;
            <br>
        </div></center>
        
        <br>
            <br>

    </body>
</html>