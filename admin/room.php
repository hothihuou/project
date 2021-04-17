
<?php

// Include database file
include 'process_room.php';

$roomObj = new Room();

// Insert Record in customer table
if(isset($_POST['submit'])) {
  $roomObj->insertData($_POST);
}

?>

<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SUNRISE HOTEL</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                        <a  class="active-menu" href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a  href="roomdel.php"><i class="fa fa-desktop"></i> Delete Room</a>
                    </li>
					

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-header">
                                NEW ROOM <small></small>
                                </h1>
                            </div>
                        </div> 
                 
                                 
                        <div class="row">
                
                            <div class="col-md-5 col-sm-5">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        ADD NEW ROOM
                                    </div>
                                    <div class="panel-body">
                                    <form name="form" method="post">
                                                <div class="form-group">
                                                        <label>Type Of Room *</label>
                                                        <select name="room"  class="form-control" required>
                                                            <option value selected ></option>
                                                            <option value="Superior Room">SUPERIOR ROOM</option>
                                                            <option value="Deluxe Room">DELUXE ROOM</option>
                                                            <option value="Guest House">GUEST HOUSE</option>
                                                            <option value="Single Room">SINGLE ROOM</option>
                                                            <option value="Junior Suite">JUNIOR SUITE</option>
                                                            <option value="Executive Suite">EXECUTIVE SUITE</option>
                                                        
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
                </div>
        </div>
			 <!-- /. PAGE INNER  -->
           
         <!-- /. PAGE WRAPPER  -->
    </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
