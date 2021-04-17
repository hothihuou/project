<?php
  
  // Include database file
  include 'process_room.php';

  $roomObj = new Room();

  // Edit customer record
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $room = $roomObj->displyaRecordById($editId);
  }

  // Update Record in customer table
  if(isset($_POST['update'])) {
    $roomObj->updateRecord($_POST);
  }  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bé </title>
  <meta charset="utf-8">
  <meta name="viewport"content="width=device-width, initial-scale=1">
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

<div id="wrapper">
<div id="page-wrapper" >
            <div id="page-inner">
<div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                          <div class="panel-heading">
                          EDIT ROOM
                              </div>
									  <div class="panel-body">
                    <div class="table-responsive">
										
                                  <form name="form" method="post" enctype="multipart/form-data" >
                                                <div class="form-group">
                                                        <label>Type Of Room *</label>
                                                        <select name="unroom"  class="form-control" required="" value="<?php echo $room['room']; ?>" >
                                                            
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
                                                            <select name="unbedding" class="form-control" required=""  value="<?php echo $room['bedding']; ?>">
                                                                
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
                                                                    <input type="price" name="unprice" value="<?php echo $room['price'] ?>" >
                                                            </p>
                                            </div>
                                            <div class="form-group">
                                                            <label for="image">Image</label>
                                                            <p>
                                                                    <input type="file" name="unimage" >
                                                            </p>
                                            </div>


                                            <div class="form-group">
                                                    <label for="des">Description:</label>
                                                    <input type="text" class="form-control" name="undescription"  required="" value="<?php  echo $room['description']; ?>">
                                            </div>  


                                            <div class="form-group">
                                                <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                                                <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
                                              </div>

                                    </form>
									</div>
								</div>
							</div>
       </div>
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