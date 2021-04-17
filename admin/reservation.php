<?php 
error_reporting(0);
?>


<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVATION SUNRISE HOTEL</title>
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
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>

                </ul>

            </div>

        </nav>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div>


                <div class="row">

                    <div class="col-md-5 col-sm-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                PERSONAL INFORMATION
                            </div>
                            <div class="panel-body">
                                <form name="form" method="post">
                                    <div class="form-group">
                                        <label>Title </label>
                                        <select name="title" class="form-control" required>
                                            <option value selected></option>
                                            <option value="Dr.">Dr.</option>
                                            <option value="Miss.">Miss.</option>
                                            <option value="Mr.">Mr.</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Prof.">Prof.</option>
                                            <option value="Rev .">Rev .</option>
                                            <option value="Rev . Fr">Rev . Fr .</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>First Name <span style="color: red"> * </span></label>
                                        <input name="fname" class="form-control" required>

                                    </div>
                                    <div class="form-group">
                                        <label>Last Name <span style="color: red"> * </span> </label>
                                        <input name="lname" class="form-control" required>

                                    </div>
                                    <div class="form-group">
                                        <label>Email <span style="color: red"> * </span></label>
                                        <input name="email" type="email" class="form-control" required>

                                    </div>
                                    <div class="form-group">
                                        <label>Nationality </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="nation" value="Vietnam" checked="">Vietnam
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="nation" value="Anh"> Anh
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="nation" value="My"> My
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="nation" value="Han Quoc"> Han Quoc
                                        </label>

                                    </div>


                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input name="phone" type="text" class="form-control" required>

                                    </div>

                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    RESERVATION INFORMATION
                                </div>
                                <div class="panel-body">

                                    
                                <?php
                                    //đặt giờ của Việt Nam
                                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                                    //lấy ngày hiện tại
                                    $today = date("Y-m-d");
                                    $date = date('Y-m-d', strtotime($today . ' + 1 days'));
                                    ?>
                                    <div class="form-group">
                                        <label>Check-In <span style="color: red"> * </span></label>
                                        <input name="cin" type="date" min=<?php echo $today; ?> class="form-control" onkeydown="return false" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Check-Out <span style="color: red"> * </span></label>
                                        <!-- <?php
                                            
                                            //cộng thêm 1 ngàY
                                            $cin = $_POST['cin'];
                                            $date = date('Y-m-d', strtotime($cin . ' + 1 days'));
                                        ?> -->
                                        <input name="cout" type="date" min=<?php echo $date; ?> class="form-control" onkeydown="return false" required>
                                       
                                    </div>


                                    <div class="form-group">
                                        <label>Type Of Room <span style="color: red"> * </span></label>
                                        <select name="troom" class="form-control" required>
                                            <option value selected></option>
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
                                        <select name="bed" class="form-control" required>
                                            <option value selected></option>
                                            <option value="Single">Single</option>
                                            <option value="Double">Double</option>
                                            <option value="Triple">Triple</option>
                                            <option value="Quad">Quad</option>
                                            <option value="Queen Size ">Queen Size </option>
                                            <option value="King Size ">King Size </option>


                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>No.of Rooms <span style="color: red"> * </span></label>
                                        <select name="nroom" class="form-control" required>
                                            <option value selected></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label>Meal Plan</label>
                                        <select name="meal" class="form-control" required>
                                            <option value selected></option>
                                            <option value="Room only">Room only</option>
                                            <option value="Breakfast">Breakfast</option>
                                            <option value="Half Board">Half Board</option>
                                            <option value="Full Board">Full Board</option>



                                        </select>
                                    </div>

                                </div>

                            </div>
                        </div>


                        <div class="col-md-12 col-sm-12">
                            <div class="well">

                                <input type="submit" name="submit" class="btn btn-primary" value="Submit">

                                <?php

                              
                               


                                if (isset($_POST['submit'])) {
                                    $rsql = "select * from room";
                                    $rre = mysqli_query($con, $rsql);
                                    $r = 0;
                                    $sc = 0;
                                    $gh = 0;
                                    $sr = 0;
                                    $dr = 0;
                                    $js = 0;
                                    $es = 0;
                                    while ($rrow = mysqli_fetch_array($rre)) {
                                        $r = $r + 1;
                                        $s = $rrow['type'];

                                        if ($s == "Superior Room") {
                                            $sc = $sc + 1;
                                        }

                                        if ($s == "Guest House") {
                                            $gh = $gh + 1;
                                        }
                                        if ($s == "Single Room") {
                                            $sr = $sr + 1;
                                        }
                                        if ($s == "Deluxe Room") {
                                            $dr = $dr + 1;
                                        }
                                        if ($s == "Junior Suite") {
                                            $js = $js + 1;
                                        }
                                        if ($s == "Executive Suite") {
                                            $es = $es + 1;
                                        }
                                    }
                                ?>

                                <?php
                                    $csql = "select * from payment";
                                    $cre = mysqli_query($con, $csql);
                                    $cr = 0;
                                    $csc = 0;
                                    $cgh = 0;
                                    $csr = 0;
                                    $cdr = 0;
                                    $cjs = 0;
                                    $ces = 0;

                                    while ($crow = mysqli_fetch_array($cre)) {
                                        $cr = $cr + 1;
                                        $cs = $crow['troom'];

                                        if ($cs == "Superior Room") {
                                            $csc = $csc + 1;
                                        }

                                        if ($cs == "Guest House") {
                                            $cgh = $cgh + 1;
                                        }
                                        if ($cs == "Single Room") {
                                            $csr = $csr + 1;
                                        }
                                        if ($cs == "Deluxe Room") {
                                            $cdr = $cdr + 1;
                                        }
                                        if ($cs == "Junior Suite") {
                                            $cjs = $cjs + 1;
                                        }
                                        if ($cs == "Executive Suite") {
                                            $ces = $ces + 1;
                                        }
                                    }
                                    $f1 = $sc - $csc;
                                    if ($f1 <= 0) {
                                        $f1 = "NO";
                                    }


                                    $f2 =  $gh - $cgh;
                                    if ($f2 <= 0) {
                                        $f2 = "NO";
                                    }

                                    $f3 = $sr - $csr;
                                    if ($f3 <= 0) {
                                        $f3 = "NO";
                                    }

                                    $f4 = $dr - $cdr;
                                    if ($f4 <= 0) {
                                        $f4 = "NO";
                                    }

                                    $f5 = $js - $cjs;
                                    if ($f5 <= 0) {
                                        $f5 = "NO";
                                    }
                                    $f6 = $es - $ces;
                                    if ($f6 <= 0) {
                                        $f6 = "NO";
                                    }

                                    $room = $_POST['troom'];
                                  

                                    if ($room == "Superior Room") {
                                        if ($f1 == "NO") {
                                            echo "<script type='text/javascript'> alert('Sorry! Not Available Superior Room ')</script>";
                                            header("Location: index.php");
                                            
                                        }
                                        else {

                                            $new = "Not Confirm";
                                           $newUser = "INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                                           if (mysqli_query($con, $newUser)) {
                                               echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                                           } else {
                                               echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                                           }
                                       }
                                    } else if ($room == "Guest House") {
                                        if ($f2 == "NO") {
                                            echo "<script type='text/javascript'> alert('Sorry! Not Available Guest Room ')</script>";
                                            header("Location: index.php");
                                        }
                                        else {

                                            $new = "Not Confirm";
                                           $newUser = "INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                                           if (mysqli_query($con, $newUser)) {
                                               echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                                           } else {
                                               echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                                           }
                                       }
                                    } else if ($room == "Single Room") {
                                        if ($f3 == "NO") {
                                            echo "<script type='text/javascript'> alert('Sorry! Not Available Single Room ')</script>";
                                            header("Location: index.php");
                                        }
                                        else {

                                            $new = "Not Confirm";
                                           $newUser = "INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                                           if (mysqli_query($con, $newUser)) {
                                               echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                                           } else {
                                               echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                                           }
                                       }
                                    } else if ($room == "Deluxe Room") {
                                        if ($f4 == "NO") {
                                            echo "<script type='text/javascript'> alert('Sorry! Not Available Deluxe Room ')</script>";
                                            header("Location: index.php");
                                        }
                                        else {

                                            $new = "Not Confirm";
                                           $newUser = "INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                                           if (mysqli_query($con, $newUser)) {
                                               echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                                           } else {
                                               echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                                           }
                                       }
                                    } else if ($room == "Junior Suite") {
                                        if ($f5 == "NO") {
                                            echo "<script type='text/javascript'> alert('Sorry! Not Available Junior Suite Room ')</script>";
                                            header("Location: index.php");
                                        }
                                        else {

                                            $new = "Not Confirm";
                                           $newUser = "INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                                           if (mysqli_query($con, $newUser)) {
                                               echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                                           } else {
                                               echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                                           }
                                       }
                                    } else if ($room == "Executive Suite") {
                                        if ($f6 == "NO") {
                                            echo "<script type='text/javascript'> alert('Sorry! Not Available Executive Suite Room ')</script>";
                                            header("Location: index.php");
                                        }
                                        else {

                                            $new = "Not Confirm";
                                           $newUser = "INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                                           if (mysqli_query($con, $newUser)) {
                                               echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                                           } else {
                                               echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                                           }
                                       }
                                    
                                   
                                    }
                                }



                                ?>
                                </form>

                            </div>
                        </div>
                    </div>


                </div>



            </div>
            <!-- /. PAGE INNER  -->
        </div>
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