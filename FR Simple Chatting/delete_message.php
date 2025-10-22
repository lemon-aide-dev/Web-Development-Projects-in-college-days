<?php 
    session_start();
    include 'Connection.php';
    $_SESSION['name'];
    $user = $_SESSION['name'];

                        


    if(isset($_GET['id'])){
        $id=$_GET['id'];

        try{
            $dlt_msg = mysqli_query($conn, "DELETE FROM $user WHERE `msg_id` = '$id'");

            if($dlt_msg){
                echo "<script type='text/javascript'>alert('message DELETED!')</script>";
                } printf("<script>location.href='manage.php'</script>");
        }
        catch(mysqli_sql_exception $e){
            echo $e;

            exit;
        }
        
    //         $query1=mysqli_query($conn,"SELECT * FROM $user WHERE ms_id = ?");
    //                     while($row=mysqli_fetch_array($query1)){
    //                         $nn = $row['msg_id'];
                        
    //                     $id=$_GET['id'];
    //                     $query_dlt_msg = "DELETE FROM `$user` WHERE 'msg_id' = `$id`";
    //                     $resultquery = $conn->query($query_dlt_msg);

    //                     if($resultquery){
    //                         echo "<script type='text/javascript'>alert('message DELETED!')</script>";
    //                         printf("<script>location.href='manage.php'</script>");
    //     }
    //     }
    }
?>

