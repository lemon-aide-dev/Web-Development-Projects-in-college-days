<?php 
session_start();
	include "Connection.php";

	 $_SESSION['name'];

	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" scr="js/bootstrap.min.js"></script>	<title>MANAGE ACCOUNT</title>
		<style>
			.title{
    font-size: 4.5em;
}


/*para sa may table sa dashboard*/
.fixTableHead{
    overflow-y: auto;
    height: 550px;
    
}
.fixTableHead,thead, th{
    position: sticky;
    top: 0;
}
table{
    border-collapse: collapse;
    background-color: #aaa;
    border-color: #4b261d;

   }
   tbody{

    background-color: #ecd9c9;
   }
   td,tr{
    padding:7px 10px;
    border: 2px #4b261d;
    border-collapse: collapse;
   
   }
   thead{
    position:sticky;
    border-color: none;
    border-collapse: collapse;
   }

   #inbox{
    background-image: linear-gradient(to bottom right, #52331f 26%, #3d2313 48%,rgb(44, 28, 11) 70%);
    border-color: #3d1f16; 
    border-radius: 15px;}
    


     .pulse-button{
        
        font-size: 19px;
        width: 200px;
        height: 50px;
        border-radius: 40px;
        animation: pulse 2s ease infinite;
        background: #462a1b;
        cursor: pointer;
        
   }
    .button-container-div{
        text-align: center;
    }

    .pulse-img{
    	width: 120px;
        height: 90px;
        animation: pulse 2s ease infinite;
        cursor: pointer;
    }

   @keyframes pulse{
    0% {
        transform: scale(1);
        opacity: 1;
    }
   
    50% {
        transform: scale(0.7);
        opacity: 0.8;
    }
}

    body{
        background-size: fill;
        background-repeat: no-repeat;
        background-image: linear-gradient(to bottom right, #d3a384 36%, #bb7d5a 58%,#6b412e 100%);
     }
    .card{
        border: #e65252;
        background-color: #fffaf6;
        box-shadow: 13px 13px 7px #574236;
     }
		</style>
</head>
<body>
	<?php
		

		$currentuser=$_SESSION['name'];
		$sql="SELECT * FROM users WHERE username='$currentuser'";
		$result=$conn->query($sql);

		if(mysqli_num_rows($result) > 0){
			while($row= mysqli_fetch_array($result)){
				//print_r($row['username']);
				?>

				
		<div class="container-fluid my-2 ">

			<div class=" container  float-end p-3" style="width: 55%; height: 25%;background-color: #fdece4; margin-right: 22px;">
							<div   class="card w-100  form-box form p-md-3"  style=" height:55%;">
									<center>
										
										<img src=<?php echo $row['profile']; ?> class="center rounded-circle border border-5 border-success mb-3" style="width: 200px; height: 200px;">

										<!-- upload new profile -->

										<form  class="form mb-3 card-footer float-end" method="post" enctype="multipart/form-data">
											<div class="form-floating mb-3" >
												<p><b>Choose new Profile Image</b></p>
												<input type="file" name="image">
											</div>
											<div class="form-floating mb-3">
												<input  type="submit"  name="updtprfl" class="btn bg-success text-light" value="UPDATE PROFILE"/>
											</div>
										</form>
	
										<?php 
										if(isset($_POST['updtprfl'])){
												$folder = "images/" . basename($_FILES['image']['name']);

												$filetype = $_FILES['image']['type'];
												$image= $_FILES['image']['name'];

												$allowed_ext = array("image/jpg", "image/jpeg", "image/png");

											

											//image upload
											if(move_uploaded_file($_FILES['image']['tmp_name'], $folder)){

												//check f its image
												if(in_array($filetype, $allowed_ext)){
													echo "<script type='text/javascript'>alert('Image Successfully Uploaded!')</script>";
													printf("<script>location.href='dash.php'</script>");
													//pag 
													$updt_prf="UPDATE users SET profile='$image'  WHERE username = '$currentuser'";
													$result_prf = $conn->query($updt_prf);

													if($result_prf){
															echo "<script type='text/javascript'>alert('Profile Successfully Uploaded!')</script>";
															printf("<script>location.href='dash.php'</script>");
														}else {
															echo "<script type='text/javascript'>alert('Profile Failed to Update!')</script>";
															printf("<script>location.href='manage.php'</script>");

														}
												}else {
													echo "<script type='text/javascript'>alert('Image Failed to Update! retry again')</script>";
													echo "<script type='text/javascript'>alert('Please Upload jpg,jpeg and png files! retry again')</script>";

														printf("<script>location.href='manage.php'</script>");
												}
											}
											}
										
										
										?>
										</center>
							</div>
						</div>

					<div class=" container col-md-5 float-start">
						<div class="card form-box login-form p-md-3 "  style="width: 95%;background-color: #fdece4; ">
									<div class="card-body form-title">
										<h1 class="fw-bold mb-3 float-end" >ACCOUNT</h1>
										<img src="logo2.png" class="float-start pulse-img" style=" padding-left: 10px; opacity: 50%;"> &nbsp;
										<a type="button" href="dash.php" class="btn btn-secondary text-light float-end"><< BACK TO DASHBOARD</a>
									</div>	
									<form method="POST" class="sign-up-form container " >
										<div class="card-footer">
											<div class="form-floating mb-3">
												<p><b><center>nickname</center></b></p>
												<input type="text" autocomplete="off" class="form-control form-control-sm" id="floatingInput" name="nickname" value="<?php echo $row['nickname']; ?>">
												<br>
												<button id="submit" type="submit" name="update_nn" class="btn bg-dark text-light">Update Nickname</button>
											
											</div>
										</div>
										<br>
										<div class="card-footer">
											<div class="form-floating mb-3">
												<p><b><center>username</center></b></p>
												<input type="text" autocomplete="off" class="form-control form-control-sm required" id="floatingInput"  name="username" required onkeypress="return event.which !=32" value="<?php echo $row['username']; ?>">
												
											</div>
											<div class="mt-3">  
													<button id="submit" type="submit" name="update_usrnm" class="btn bg-dark text-light">UPDATE USERNAME</button>
											</div>
										</div>
										<br>
										<div class="card-footer">
										<div class="form-floating mb-3">
											<p><b><center>current password</center></b></p>
											<input type="text" autocomplete="off"  class="form-control form-control-sm required" id="floatingInput" minlength="8" name="password" required value="<?php echo $row['password']; ?>">
											
										</div>
										<div class="form-floating mb-3">
				                            <input type="password" autocomplete="off" onkeyup="manage(this)" class="form-control form-control-sm required" id="floatingInput" placeholder="Confirm Password"  minlength="8" name="conpassword">
				                            <label for="floatingInput">Confirm New Password</label>
				                        </div>
										
										
										<div class="mt-3">  
												<button id="submit" type="submit" name="update" class="btn bg-dark text-light">UPDATE PASSWORD</button>
										</div>
								<?php
											}
										}
										$currentuser = $_SESSION['name'];

										//pagpalit sa nickname
										if(isset($_REQUEST['update_nn'])){
											$nickname = $_POST['nickname'];
											$updt_nn="UPDATE users SET nickname='$nickname' WHERE username = '$currentuser'";
												$result_nn=$conn->query($updt_nn);

												if($result_nn){
													echo "<script type='text/javascript'>alert('Nickname Successfully Updated!')</script>";
													
													printf("<script>location.href='dash.php'</script>");
												}else {
													echo "<script type='text/javascript'>alert('Nickname failed to Update!')</script>";
													printf("<script>location.href='manage.php'</script>");

												}
										}
										//update username
										if(isset($_REQUEST['update_usrnm'])){
												

												$username = $_POST['username'];

												$sql="SELECT * FROM users WHERE username='$username'";
												$result3=$conn->query($sql);


												
												
												if(!$result3){
													$updt="UPDATE users SET username='$username'  WHERE username = '$currentuser'";
													$result2=$conn->query($updt);

													if($result2){

														mysqli_query($conn, "RENAME TABLE `" . $currentuser . "` TO `" . $username . "`");

														echo "<script type='text/javascript'>alert('Account Successfully Updated!')</script>";
														echo "<script type='text/javascript'>alert('Please Log in Again!')</script>";
														session_destroy();
														printf("<script>location.href='index.html'</script>");
														
													}else{
														echo "<script type='text/javascript'>alert('Account Failed to Update!')</script>";
														echo "<script type='text/javascript'>alert('Please Try Again!')</script>";
														session_destroy();
														printf("<script>location.href='manage.html'</script>");
													
												}
											}else{
														echo "<script type='text/javascript'>alert('Account failed to Update!')</script>";
														echo "<script type='text/javascript'>alert('Username already exists, try another!')</script>";
													
														printf("<script>location.href='manage.php'</script>");
											}
										}
										
										
										// pag update sa account  password

										if(isset($_REQUEST['update'])){
												

												$password = $_POST['password'];
												$confirm_password=$_POST['conpassword'];

												
											if($password == $confirm_password){
												$updt="UPDATE users SET password='$password'  WHERE username = '$currentuser'";
												$result2=$conn->query($updt);

												

												if($result2){

													echo "<script type='text/javascript'>alert('Password Successfully Updated!')</script>";
													
													printf("<script>location.href='manage.php'</script>");
													
												}else{

													echo "<script type='text/javascript'>alert('Password Failed to Update!')</script>";
													
													printf("<script>location.href='manage.php'</script>");
												}
											}
									}
								?>
								</div>

									<div class="mt-2">  
										<button id="submit" type="delete" name="delete" class="btn bg-danger text-light w-100" onclick = "return confirm('Do you want to delete your Account?')">DELETE ACCOUNT</button>

									<?php
									if(isset($_REQUEST['delete'])){

										//$drp = "DROP TABLE '$currentuser'";
										//$drptbl = $conn->query($drp);

										$del = "DELETE FROM users WHERE username = '$currentuser'";
										$delq = $conn->query($del);

										if($delq){
										echo "<script type='text/javascript'>alert('Account DELETED!')</script>";
										printf("<script>location.href='logout.php'</script>");}
									}
									?>
									</div>
																</form>
							</div>
						</div>

				<?php
                    
					//username
						$_SESSION['name'];
									   //nickname
						$nm=$_SESSION['name'];
						$query1=mysqli_query($conn,"SELECT * FROM users WHERE username = '$nm'");
						while($row=mysqli_fetch_array($query1)){
							$nn = $row['nickname'];
						}
						
		  ?><!-- INBOX EDITING -->
		  <br>
		  <br>
	   		<div class="card container p-2" style="width: 55%;background-color: #fdece4;">
                <div class="container float-end w-100 fixTableHead">
                	<center><h2 class="bg-dark text-light w-100 p-3"><i>INBOX</i></h2></center>
					<table class="table table-wrapper-scroll-y my-custom-scrollbar">
						<thead class="text-light">
                            <tr id="inbox">
								
                                <th scope="col"><h5>&nbsp;Message(s)</h5></th>
								<th scope="col"><h5>Message ID</h5></th>
                                <th scope="col"><h5>&nbsp;Action</h5></th>
                            </tr>
						</thead>
						<tbody>
                                    <?php
                                        $sql = "SELECT * FROM $nm order by date_recieved desc";
                                        $result = $conn->query($sql);

                                        if($result->num_rows>0){
                                           
                                            while($row = mysqli_fetch_assoc($result)){
    										echo "<tr>";
                                            echo "<td><h5>" . $row["message"] ."<h6>" . $row["date_recieved"]  . "<h6>" . "</h5></td>";
											echo "<td><h5>" . $row["msg_id"] . "<h5></td>";
											?>

                                            <td><a type='button' name='dltmsg' href="delete_message.php? id=<?php echo $row["msg_id"] ?>"class='btn bg-dark text-light'>DELETE</a></td>
                                            <?php
                                            echo "</tr><br>";
                                        }
                                        }else{
                                            echo "<tr><td><h1>No Messages</h1></td></tr>";
                                            
                                        }
                                        $conn->close();

                                    ?>
                        </tbody>	
					</table>
				</div>
			</div>
		</div>

	</body>

</html>