<?php 
    include 'Connection.php';

    $prof = 'no-profile.png';
    $uname=$_POST['Username'];
    $password=$_POST['password'];
    $nickname=$_POST['Nickname'];
    $confirm_password=$_POST['conpassword'];


        if($password == $confirm_password){
            $query = mysqli_query($conn,"select * from users where username = '$username'");
            $duplicateuser=mysqli_num_rows($query);
            
            
           // if($duplicateuser){
                $sql="insert into users(username,password,nickname, profile) value ('$uname','$password','$nickname', '$prof')"; 
                $result=$conn->query($sql);
                
                $sql1="create table IF NOT EXISTS $uname(msg_id int Primary key Not Null auto_increment, message varchar(255) Not Null, date_recieved timestamp)";
                $result1=$conn->query($sql1);
                echo "<script type='text/javascript'>alert('Account created!')</script>";
                printf("<script>location.href='index.html'</script>");
                //header("Location: index.html");
            // }else{
            //     echo "<script type='text/javascript'>alert('Username Already Exists!')</script>";
            //     echo "<script type='text/javascript'>alert('Please Enter other Username!')</script>";
            //         printf("<script>location.href='signup.html'</script>");
            // }
        }else{
            echo "<script type='text/javascript'>alert('Password Mismatch, Please Try again!')</script>";
        
            printf("<script>location.href='signup.html'</script>");
        }
?>