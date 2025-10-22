<?php 
	include 'DB_conn.php';
    session_start();
    $id = $_SESSION['id'];
    $password = $_GET['Password'];
    $newpassword = $_GET['newPassword'];
    $reenteredpassword = $_GET['renewPassword'];

    $acceptedpass = md5($password);
    
    $sqlupdatepass="SELECT `password` as password FROM `tbl_users` WHERE `user_Id`='$id' ";
    $resultpass=$conn->query($sqlupdatepass);
    $recn = $resultpass->fetch_assoc();
    $pass = $recn['password'];

    

    if($acceptedpass == $pass){
        if($newpassword == $reenteredpassword){ 
            $newpass = md5($reenteredpassword);

            $sqlupdatepass="UPDATE `tbl_users` SET `password`='$newpass' WHERE `user_Id`='$id' ";
            $resultpass=$conn->query($sqlupdatepass);

            if($resultpass){
                echo "<script type='text/javascript'>alert('Details Updated!')</script>";
                printf("<script>location.href='account.php'</script>");
            }else{
                echo "<script type='text/javascript'>alert('Failed to update!')</script>";
                printf("<script>location.href='account.php'</script>");
            }
            
        }else{
             echo "<script type='text/javascript'>alert('Failed to update!')</script>";
            printf("<script>location.href='account.php'</script>");
        }
       
    }else{
        echo "<script type='text/javascript'>alert('Failed to update!')</script>";
        printf("<script>location.href='account.php'</script>");
    }


    // if($resultpass){
    //         $sql="UPDATE `tbl_users` SET `password`= ' $acceptedpass' WHERE `user_Id`='$id' ";
    //         $result=$conn->query($sql);
    // 	echo "<script type='text/javascript'>alert('Details Updated!')</script>";
	// 	printf("<script>location.href='clients.php'</script>");
    // }else{
    // 	echo "<script type='text/javascript'>alert('Failed to update!')</script>";
	// 	printf("<script>location.href='clients.php'</script>");
    // }

?>