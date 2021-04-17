
<?php

// Include database file
include 'process_room.php';

$roomObj = new Room();

// Insert Record in customer table
if(isset($_POST['add'])) {
  $roomObj->insertData($_POST);
}

// Xóa đối tượng khi nhấn vào xóa luôn
if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $roomObj->deleteRecord($deleteId);
}

?>


     

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>CRUD - OOP</title>
  <meta charset="utf-8">
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
 <style>
 .addroom{
     margin-bottom: 15px;
 }
 #addroom{
     color:blue;
     text-align: center;
     font-weight: bold;
 }
 
 
 </style>
</head>
<body>

<div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">MAIN MENU </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
			
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
					
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="settings.php"><i class="fa fa-dashboard"></i>Rooms Status</a>
                    </li>
					<li>
                        <a  class="active-menu" href="index_room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                  
  
            </div>

        </nav>

<div id="page-wrapper" >
            <div id="page-inner">
  <?php
    if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Thêm phòng thành công
            </div>";
      } 
    if (isset($_GET['msg2']) == "update") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Đã cập nhật phòng thành công 
            </div>";
    }
    if (isset($_GET['msg3']) == "delete") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Xóa phòng thành công
            </div>";
    }
  ?>
  

        <div class="row">
                <div class=".col-xs-9 .col-md-7">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ROOMS INFORMATION
                        </div>
                        <div class="panel-body">
								<!-- Advanced Tables -->
                         <div class="addroom">
                            <button type="button" class="btn btn-warning" href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Thêm phòng</button>
                         </div>
                          
                                     
                       <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th> Type room</th>
                                        <th>Bedding</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                        <th>Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $index =0;
                                        $room = $roomObj->displayData(); 
                                        if($room != 0){
                                        foreach ($room as $std) {
                                            $index++;
                                            $name=$std['type'];
                                            $bed=$std['bedding'];
                                            $price=$std['price'];
                                            $image=$std['image'];
                                            $description=$std['description'];
                                            $id = $std['id'];
                                    
                                            echo  "<tr>
                                            <td>$index</td>
                                            <td>$name</td>
                                            <td>$bed</td>
                                            <td> $$price </td>
                                            <td><img src='image/$image' width='400' height='250'></td>
                                            <td>$description</td>
                                            <td >
                                                <a href='edit.php?editId=$id' style='color:green'>
                                                <i class='fa fa-pencil' aria-hidden='true'></i></a>
                                            </td>
                                            <td>
                                                <a href='index_room.php?deleteId=$id' style='color:red' onclick='confirm('Bạn có muốn xóa nó không ?')'>
                                                <i class='fa fa-trash' aria-hidden='true'></i>
                                                </a>
                                            </td>  
                                        
                                        </tr>
                                            ";
                                        }
                                    }
                                        
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
           
     </div>
        </div>
        </div>
</div>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog" role="document">
							<!-- Modal content-->
								<div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id ="addroom">Add room</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
									
                                   <div class="modal-body">
                                        <form name="form" method="post" enctype="multipart/form-data" >
                                                <div class="form-group">
                                                        <label>Type Of Room *</label>
                                                        <select name="room"  class="form-control" required>
                                                            <option value selected ></option>
                                                            <option value="Superior Room">SUPERIOR ROOM</option>
                                                            <option value="Deluxe Room">DELUXE ROOM</option>
                                                            <option value="Guest House">GUEST HOUSE</option>
                                                            <option value="Single Room">SINGLE ROOM</option>
                                                            <option value="Junior Suite">JUNIOR Suite</option>
                                                            <option value="Executive Suite">EXECUTIVE Suite</option>
                                                        
                                                    </select>
                                                </div>
							  
                                                <div class="form-group">
                                                            <label>Bedding Type</label>
                                                            <select name="bedding" class="form-control" required>
                                                                <option value selected ></option>
                                                                <option value="Single">Single</option>
                                                                <option value="Double">Double</option>
                                                                <option value="Triple">Triple</option>
                                                                <option value="Quad">Quad</option>
                                                                <option value="Queen Size ">Queen Size </option>
                                                                <option value="King Size ">King Size </option>
                                                                                                            
                                                            </select>
                                                            
                                            </div>
                                            <div class="form-group">
                                                            <label for="price">Price</label>
                                                            <p>
                                                                    <input type="number" name="price" >
                                                            </p>
                                            </div>

                                            <div class="form-group">
                                                            <label for="image">Image</label>
                                                            <p>
                                                                    <input type="file" name="image" >
                                                            </p>
                                            </div>


                                                <div class="form-group">
                                                    <label for="des">Description:</label>
                                                    <input type="text" class="form-control" name="description" placeholder="Enter description" required="">
                                                </div>  


                                            <input type="submit" name="add" value="Add New" class="btn btn-primary"> 

                                        </form>
                                    </div>
								</div>
							
							</div>
                    </div>
            

                     

<script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
</body>
</html>