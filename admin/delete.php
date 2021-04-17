<?php
        // kiểm tra kết nối
        $conn = mysqli_connect("localhost", "root","","hotel");
        if($conn){
            //echo"Đã kết nối đến DATABASE";
        }
        else{
            die("Không thể kết nối đến DATABSE");
        }
$delete_id=$_GET['del']; 

$delete_query="delete  from register WHERE id='$delete_id'";//delete query  
$run=mysqli_query($conn,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('Admin_login.php?deleted=register has been deleted','_self')</script>";  
}  
  
?>  