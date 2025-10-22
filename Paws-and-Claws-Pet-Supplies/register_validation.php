<?php

	include 'conn.php';


    $uname=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $confirm_password=$_POST['confirmPassword'];


        if($password == $confirm_password){
            $query = mysqli_query($conn,"SELECT * FROM `tbl_account` WHERE `customer_name`='$uname'");
            $duplicateuser=mysqli_num_rows($query);
            
            
           if(!$duplicateuser){
                $sql="INSERT INTO `tbl_account`( `customer_name`,`email`, `password`, `address`) VALUES ('$uname','$email', '$confirm_password','$address')"; 
                $result=$conn->query($sql);
                
                echo "<script type='text/javascript'>alert('Account created!')</script>";
                printf("<script>location.href='login.html'</script>");
                
            }else{
            	echo "<script type='text/javascript'>alert('Username already exist, Please Try again!')</script>";
        
            	printf("<script>location.href='register.html'</script>");
            }
        }else{
            echo "<script type='text/javascript'>alert('Password Mismatch, Please Try again!')</script>";
        
            printf("<script>location.href='register.html'</script>");
        }
?>