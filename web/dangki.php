<?php
include('db.php');
?>
<?php
  error_reporting(0);
function guiemail(){
                    //Email address of the receiver
                    $to = $_POST["email"];
                    //Email subject
                    $subject = " Bạn đã đăng kí thành công ";
                    //Email message
                    $message = "Cảm ơn bạn đã đến với khách sạn chúng tôi";
                    //Header information
                    $headers = "From: XUCANA hotel <hothihuou2001@gmail.com>\r\n";
                    //Send email
                    if(mail($to, $subject, $message, $headers))
                    echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="../index.php";</script>';
                    else
                    echo "Unable to send the email.";
}

if(isset($_POST['signin'])){

      //lấy thông tin từ các form bằng phương thức POST
          //lấy thông tin từ các form bằng phương thức POST
          $name =$_POST["fname"];
          $email =$_POST["email"];
          $password = $_POST['Pass'];
	      $Password = md5($password);
          $sdt=$_POST["sdt"];
          $cmnd=$_POST["cmnd"];
          $address=$_POST["address"];
              //Kiểm tra email có đúng định dạng hay không
            if (!preg_match("/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i", $email))
            {
                echo'<script language="javascript">alert("email not Invalid . Please enter other email"); window.history.go(-1);</script>';
            exit;
            }
         
               // Kiểm tra tài khoản đã tồn tại chưa
               $sql="select * from register where name='$name'";
                $kt=mysqli_query($conn, $sql);
            if(mysqli_num_rows($kt)> 0){
                echo '<script language="javascript">alert("Name is already exist in our database, Please try another one!"); window.history.go(-1);</script>';
            }else{
                $sql = "
                INSERT INTO register(name, email, password,phone,CMND,adress) VALUES
                ( '$name', '$email','$Password','$sdt','$cmnd','$address')
                ";  
                 // thực thi câu $sql với biến conn lấy từ file connection.php
                    mysqli_query($conn,$sql);
                    guiemail();
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
    <title>Chào mừng bạn đến với khách sạn chúng tôi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="XUCANA" />

    <!-- css files -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/dangki.css" rel="stylesheet" type="text/css" media="all" />
    <!-- /css files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- online fonts -->
    <link href="//fonts.googleapis.com/css?family=Sirin+Stencil" rel="stylesheet">
    <!-- online fonts -->

<body>
    <div class="container demo-1">
        <div class="content">
            <div id="large-header" class="large-header">
              
                <div class="main-agileits">
                    <!--form-stars-here-->
                    <div class="form-w3-agile">
                        <h1>Sign Up</h1>
                        <form action="dangki.php" method="post">
                            <div class="form-sub-w3">
                                <input placeholder="Name" name="fname" type="text" required>
                                <div class="icon-w3">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-sub-w3">
                                <input  placeholder="Sdt" name="sdt" type="number" required>
                                <div class="icon-w3">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-sub-w3">
                                <input placeholder="CMND" name="cmnd" type="number" required>
                                <div class="icon-w3">
                                    <i class="fa fa-address-card" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-sub-w3">
                                <input  placeholder="Address" name="address" type="text" required>
                                <div class="icon-w3">
                                    <i class="fa fa-address-card" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-sub-w3">
                                <input  placeholder="Email" name="email" type="email" require=>
                                <div class="icon-w3">
                                    <i class="fa fa-envelope-square" aria-hidden="true"></i>
                                </div>
                            </div>
                            
                            <div class="form-sub-w3">
                                <input type="password" placeholder="Password" name="Pass" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" id="myInput" required>
                                <div class="icon-w3">
                                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-sub-w4">
                              <p style="color:white" > <input type="checkbox" onclick="myFunction()">Show password Click here</p>
                            </div>
                            <p class="p-bottom-w3ls1" style="margin-top: 10px">
                                <a class href="dangnhap.php"> Sign up here</a></p>
                            <div class="clear"></div>
                            <div class="submit-w3l">
                                <input type="submit" name="signin" value="SIGN UP">
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
                    <p> © 2021 XUCANA wellcome | Design by  | Design by <a href="http://w3layouts.com/" target="_blank">Huou</a></p>
                </div>
                <!-- //copyright -->
            </div>
        </div>
    </div>
 
</body>

</html>