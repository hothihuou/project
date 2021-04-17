<?php
session_start(); //session starts here  
?>
<?php
// kiểm tra kết nối
$conn = mysqli_connect("localhost", "root", "", "hotel");

?>

<?php
function guiemail(){
    //Email address of the receiver
    $_SESSION['code'] = mt_rand(10000,70000);  
    $code = $_SESSION['code'];
    $to = $_POST["email"];
    //Email subject
    $subject = " CODE ACOUNT YOUR XUCANA hotel ";
    //Email message
    $message = "Cảm ơn bạn đã đến với khách sạn chúng tôi!<br> MA CUA BAN LA:$code ";
    //Header information
    $headers = "From: XUCANA hotel <hothihuou2001@gmail.com>\r\n";
    //Send email
    if(mail($to, $subject, $message, $headers))
    echo '<script language="javascript">alert("Bạn đã sửa thành công!"); window.location="dangki.php";</script>';
    else
    echo "Unable to send the email.";
}

if (isset($_POST['add'])) {
    $email = $_POST['email'];
    $password = mysqli_real_escape_string($conn, $_POST['newpass']);
    $newpass = md5($password);

    $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);
    $cpass = md5($cpassword);
    if (empty($newpass) || empty($cpass)) {
        echo "Password is required";
    }
    if ($newpass !== $cpass) {

        echo "<script>alert('Password do not match!')</script>";
    }

    if ($newpass === $cpass) {
        $sql = "UPDATE register SET password ='$newpass' WHERE email='$email' ";
        $results = mysqli_query($conn, $sql);
        if ($results) {
            guiemail();
            header("Location:confirm_code.php");
        } else {
            echo "<script>alert('Khong thanh cong')</script>";
        }
    }
}
?>
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>RESET ACOUNT</title>
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
                <h1>Reset Acount Form</h1>
                <div class="main-agileits">
                    <!--form-stars-here-->
                    <div class="form-w3-agile">
                        <h2>login Now</h2>
                        <form action="resetpass.php" method="post">
                            <div class="form-sub-w3">
                                <input placeholder="email" name="email" type="email" required=>
                                <div class="icon-w3">
                                    <i class="fa fa-envelope-square" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-sub-w3">
                                <input type="password" placeholder="New password" name="newpass" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" id="myInput" required>
                                <div class="icon-w3">
                                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-sub-w3">
                                <input type="password" placeholder="confirm password" name="cpass" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" id="myInput" required>
                                <div class="icon-w3">
                                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-sub-w3">
                                <input type="checkbox" onclick="myFunction()">Show password Click here
                            </div>
                            <p class="p-bottom-w3ls1"><a class href="dangnhap.php"> Sign up here</a></p>
                            <div class="clear"></div>
                            <div class="submit-w3l">
                                <input type="submit"  name="add" value="SIGN IN">
                            </div>
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
                    <p> © 2021 XUCANA wellcome | Design by  | Design by <a href="#" target="_blank">Huou</a></p>
                </div>
                <!-- //copyright -->
            </div>
        </div>
    </div>

</body>

</html>