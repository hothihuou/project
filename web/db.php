
<?php

// kiểm tra kết nối
$conn = mysqli_connect("localhost", "root", "", "hotel");
if ($conn) {
     //echo"Đã kết nối đến DATABASE";
} else {
    die("Không thể kết nối đến DATABSE");
}
?>