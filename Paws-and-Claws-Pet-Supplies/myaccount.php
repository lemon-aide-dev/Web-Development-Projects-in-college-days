<!DOCTYPE html>
<?php 
    include 'conn.php';
    session_start();
    $name=$_SESSION['id'];

    $sql= "SELECT * FROM `tbl_account` WHERE `customer_Id` = '$name'";
    $result=$conn->query($sql);

    while($row=mysqli_fetch_array($result)){
?>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Account</title>
    <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            My Profile
            <h6>Manage and protect your account</h6>
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">My Account</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Change password</a>
                        <!-- <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-info">My Info</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-social-links">Social links</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-connections">Connections</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-notifications">My Purchase</a> -->
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <!-- <div class="card-body media align-items-center">
                                <img src="3.webp" alt
                                    class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div> -->
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <form method="POST" action="update_account.php">
                                <div class=" form-group" >
                                    <label class="form-label">Username</label>
                                    <input type="text" name="Username" class="form-control mb-1" value="<?php echo $row['customer_name'];?>" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" name="email" class="form-control mb-1" value="<?php echo $row['email'];?>" required>
                                    <!-- <div class="alert alert-warning mt-3">
                                        Your email is not confirmed. Please check your inbox.<br>
                                        <a href="javascript:void(0)">Resend confirmation</a>
                                    </div> -->
                                </div>
                                 <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <input type="text" name = "address" class="form-control" value="<?php echo $row['address'];?>" required>
                                </div> 
                                
                                <!-- <label for="gender">Gender:</label>
                                    <select id="gender" name="gender" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                </select> -->

                                <div class="text-right mt-3"> <br> <br>
                                    <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                                    <a href="dashboard_clone.php"><button type="button" class="btn btn-default" >Cancel</button></a>
                                </div>
                            </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                            <form method="POST" action="update_pass.php">
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input id="text" name="np" type="text" class="form-control" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" required>Repeat new password</label>
                                    <input id="password" name="rnp" type="password" class="form-control" minlength="">
                                </div>
                                
                        
                        <!-- -->
                            
                            </div>
                            <div class="text-right mt-3"> <br> <br>
                                <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                                <a href="dashboard_clone.php"><button type="button" class="btn btn-default" >Cancel</button></a>
                            </div>
                            </form>
                        </div>
                        
        
        <br>
    </div>
<?php
                               
                             }?>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</div>
</div>
</div>
</div><br>
        <br>
<div class="footer">&copy;<span id="year"> </span><span> Paws&Claws. All rights reserved.</span></div>
</body>
 
  
</html>