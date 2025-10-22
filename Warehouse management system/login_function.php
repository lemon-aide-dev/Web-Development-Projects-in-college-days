					<?php
	                  	  $admin = $_POST['adminname'];
	                  	  $admin_pass = $_POST['password'];

	                  	  $enc = md5($admin_pass);
	                  	  include 'Connection.php';
                        	$sql ="SELECT * FROM `admin_account` where `username` = '$admin' and `password`='$enc'";
                        	$result=$conn->query($sql);


                        	if(!$row=$result->fetch_assoc()){
                        		echo "<script> window.location.href='login.php'; alert('Wrong Username and/or Password');</script>";
                        	}else{
                        		echo "<script> window.location.href='display_inventory.php'; alert('Admin Recognized! Welcome!');</script>";
                        		
                        	}
	                  	   ?>