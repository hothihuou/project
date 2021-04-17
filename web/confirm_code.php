<?php
session_start(); //session starts here  

include('db.php');
?>

<?php
if(!isset($_SESSION['code'])) 
header("Location:resetpass.php");//use for the redirection to some page  

error_reporting(0);

if (isset($_POST['confirm'])) {
    $codes = $_POST['coding'];
    if ($codes == $_SESSION['code']) {
            echo "<script>alert('Update code Sucessfull!')</script>";
            //here session is used and value of $user_email store in $_SESSION. 
            header("Location:../index.php");
            exit;
    } else {
            echo "'Your code not true!'";
            echo "$codes";
}
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Confirm your code</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Clean Login Form Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />

    <!-- css files -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/dangki.css" rel="stylesheet" type="text/css" media="all" />
    <!-- /css files -->

    <!-- online fonts -->
    <link href="//fonts.googleapis.com/css?family=Sirin+Stencil" rel="stylesheet">
    <!-- online fonts -->

<body>
    <div class="container demo-1">
        <div class="content">
            <div id="large-header" class="large-header">
                <h1>Enter your code</h1>
                <div class="main-agileits">
                    <!--form-stars-here-->
                    <div class="form-w3-agile">
                        <h2>Code of you</h2>
                        <form action="confirm_code.php" method="post">
                            <div class="form-sub-w3">
                                <input type="number" name="coding" placeholder="coding " required="" />
                                <div class="icon-w3">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>

                                <div class="clear"></div>
                                <div class="submit-w3l">
                                    <input type="submit" name="confirm" value="confirm">
                                </div>
                                <p class="p-bottom-w3ls">Forgot Password?<a class href="resetpass.php"> Click here</a></p>

					            <p class="p-bottom-w3ls1">New User? <a class href="dangki.php"> Register here</a></p>
                            <div class="clear"></div>

                        </form>
                        <div class="social w3layouts">
                            <div class="heading">
                                <h5>Or register with</h5>
                                <div class="clear"></div>
                            </div>
                            <div class="icons">
                                <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/login?lang=vi"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://help.pinterest.com/vi/article/see-recent-logins"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/login"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <!--//form-ends-here-->
                </div><!-- copyright -->
                <div class="copyright w3-agile">
                    <p> © 2021 XUCANA wellcome | Design by <a href="#" target="_blank">Huou</a></p>
                </div>
                <!-- //copyright -->
            </div>
        </div>
    </div>

</body>

</html>