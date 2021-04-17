<?php
session_start(); //session starts here  
?>
<?php
include('db.php');
?>
 
<?php
error_reporting(0);
if (isset($_POST['login'])) {
	$name = $_POST['name'];
	$password = $_POST['Pass'];
	$Password = md5($password);
	$check_user = "SELECT * from register WHERE name ='$name' AND password='$Password'";
	$run = mysqli_query($conn, $check_user);

	if (mysqli_num_rows($run)) {
		$_SESSION['name'] = $name; //here session is used and value of $user_email store in $_SESSION. 
		header("Location:../index.php");
		exit;
	} else {
		echo "<script>alert('email or password is incorrect!')</script>";
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
	<title>Clean Login Form a Flat Responsive Widget Template :: w3layouts</title>
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
				<h1>Sign In Form</h1>
				<div class="main-agileits">
					<!--form-stars-here-->
					<div class="form-w3-agile">
						<h2>Sign in Now</h2>
						<form action="dangnhap.php" method="post">
							<div class="form-sub-w3">
								<input type="text" name="name" placeholder="Username " required="" />
								<div class="icon-w3">
									<i class="fa fa-user" aria-hidden="true"></i>
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
					
					<p class="p-bottom-w3ls">Forgot Password?<a class href="resetpass.php"> Click here</a></p>

					<p class="p-bottom-w3ls1">New User? <a class href="dangki.php"> Register here</a></p>
					
					<div class="clear"></div>
					<div class="submit-w3l">
						<input type="submit" name="login" value="login">
					</div>
					</form>
					<div class="social w3layouts">
						<div class="heading">
							<h5>Or Login with</h5>
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