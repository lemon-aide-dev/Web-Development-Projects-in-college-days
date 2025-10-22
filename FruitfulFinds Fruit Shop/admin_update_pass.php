<?php 
include 'DB_conn.php';
$id =$_REQUEST['id'];

$pass=$_POST['pass'];

$passnew = md5($pass);

$sqlupdatepass="UPDATE `tbl_users` SET `password`='$passnew' WHERE `user_Id`='$id' ";
$resultpass=$conn->query($sqlupdatepass);

if($resultpass){
                echo "<script type='text/javascript'>alert('Password Updated!')</script>";
                printf("<script>location.href='clients.php'</script>");
            }else{
                echo "<script type='text/javascript'>alert('Failed to update!')</script>";
                printf("<script>location.href='clients.php'</script>");
            }
?>