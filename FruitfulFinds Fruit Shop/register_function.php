<?php
	include 'DB_conn.php';


    $uname=$_POST['email'];
    $fname=$_POST['First_Name'];
    $lname=$_POST['Last_Name'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $confirm_password=$_POST['rpassword'];


        if($password == $confirm_password){
            $query = mysqli_query($conn,"SELECT * FROM `tbl_users` WHERE `username` = '$uname'");
            $duplicateuser=mysqli_num_rows($query);
            
            $acceptedpass= md5($password);
            
           if(!$duplicateuser){
                $sql="INSERT INTO `tbl_users`(`first_Name`, `last_Name`, `username`, `address`, `password`) VALUES ('$fname','$lname','$uname', $address, '$acceptedpass')"; 
                $result=$conn->query($sql);
                
                echo "<script type='text/javascript'>alert('Account created!')</script>";
                printf("<script>location.href='login.php'</script>");
                
            }else{
            	echo "<script type='text/javascript'>alert('Username already exist, Please Try again!')</script>";
        
            	printf("<script>location.href='register.html'</script>");
            }
        }else{
            echo "<script type='text/javascript'>alert('Password Mismatch, Please Try again!')</script>";
        
            printf("<script>location.href='register.html'</script>");
        }
?>