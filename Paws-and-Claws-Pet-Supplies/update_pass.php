<?php 

	include 'conn.php';
    session_start();
    $id=$_SESSION['id'];
	 $newpass=$_POST['np'];
     $confpass=$_POST['rnp'];
            if($newpass == $confpass){

                $sql="UPDATE `tbl_account` SET `password`='$confpass' WHERE `customer_Id`='$id' ";
                $result=$conn->query($sql);

                echo "<script type='text/javascript'>alert('Password Updated')</script>";
               	printf("<script>location.href='myaccount.php'</script>");
            }else{
              	echo "<script type='text/javascript'>alert('Password Failed to Update')</script>";
                printf("<script>location.href='myaccount.php'</script>");
            }
                                    


?>