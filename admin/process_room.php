<?php

        class Room
        {
                private $servername = "localhost";
                private $username   = "root";
                private $password   = "";
                private $database   = "hotel";
                public  $con;

                // Kiểm tra kết nối database
                public function __construct()
                {
                    $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
                    if(mysqli_connect_error()) {
                         trigger_error("Kết nối tới MySQL thất bại: " . mysqli_connect_error());
                    }else{
                        return $this->con;
                    }
                }
                
                // Chèn thêm đối tượng vào Database
                public function insertData($post)
                {
                    if (isset($_FILES['image']['name'])) {
                        $anh = $_FILES['image']['name'];
                        if ($anh !=null){
                        $path="image/";
                        $tmp_name = $_FILES['image']['tmp_name'];
                        $anh = $_FILES['image']['name'];
                        move_uploaded_file($tmp_name,$path.$anh);
                        }
                    }
            
                        $room = $this->con->real_escape_string($_POST['room']);
                        $bedding = $this->con->real_escape_string($_POST['bedding']);
                        $price = $this->con->real_escape_string($_POST['price']);
                        $image  =  $anh;
                        $description = $this->con->real_escape_string($_POST['description']);
                   
                        $query= "INSERT INTO room( type, bedding,price, image, description) VALUES('$room','$bedding','$price', '$image', '$description')";
                        
                        $sql = $this->con->query($query);
                         echo $this->con->error;
                        if ($sql==true) {
                            header("Location: index_room.php");
                        }else{
                            echo "Thêm phòng không thành công";
                        }
                }

                // In dữ liệu phòng dạng danh sách
                public function displayData()
                {
                    $query = "SELECT * FROM room";
                    $result = $this->con->query($query);
                    if ($result->num_rows > 0) {
                    $data = array();
                    while ($row = $result->fetch_assoc()) {
                           $data[] = $row;
                    }
                         return $data;
                    }else{
                         echo "Chưa có bất kì tài khoản nào!";
                    return 0;
                    }
                }

                // Hiển thị phòng dựa vào id
                public function displyaRecordById($id)
                {
                    $query = "SELECT * FROM room WHERE id = '$id'";
                    $result = $this->con->query($query);
                if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        return $row;
                    }else{
                        echo "Không tìm thấy tài khoản đó";
                    }
                }

                // Cập nhật 
                public function updateRecord($postData)
                {

                    if (isset($_FILES['unimage']['name'])) {
                        $anh = $_FILES['unimage']['name'];
                        if ($anh !=null){
                        $path="image/";
                        $tmp_name=$_FILES['unimage']['tmp_name'];
                        $anh=$_FILES['unimage']['name'];
                        move_uploaded_file($tmp_name,$path.$anh);
                        }}
            
            
                    $room = $this->con->real_escape_string($_POST['unroom']);
                    $bedding = $this->con->real_escape_string($_POST['unbedding']);
                    $price = $this->con->real_escape_string($_POST['unprice']);
                    $image = $anh;
                    $description = $this->con->real_escape_string($_POST['undescription']);
                    $id = $this->con->real_escape_string($_POST['id']);

                    if (!empty($id) && !empty($postData)) {
                        $query = "UPDATE room SET type = '$room', bedding = '$bedding', price = '$price', image = '$image', description = '$description' WHERE id = '$id'";
                        $sql = $this->con->query($query);
                        if ($sql==true) {
                            header("Location:index_room.php?msg2=update");
                        }else{
                            echo "Cập nhật tài khoản không thành công!";
                        }
                    }
                        
                }


                // Hàm xóa
                public function deleteRecord($id)
                {
                    $query = "DELETE FROM room WHERE id = '$id'";
                    $sql = $this->con->query($query);
                if ($sql==true) {
                        header("Location:index_room.php");
                }else{
                        echo "Xóa không tài khoản không thành công";
                    }
                }

    }
?>