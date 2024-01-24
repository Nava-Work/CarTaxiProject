<?php
session_start(); // Start the session
require 'database-config.php';

	if(isset($_POST["signup"]))
	{
	$na = $_POST["name"];
    $una = $_POST["username"];
    $pass= $_POST["password"];
    $email = $_POST["email"];
    $phonenum = $_POST["phone_number"];
//	$nic = $_POST["NIC"];

	$sql = "insert into drivers (name, username, password, email, phone_number) values('$na','$una','$pass','$email','$phonenum') ";
		if(mysqli_query($conn, $sql))
		{
			echo 
			"
			<script>
			alert('Driver Registration successful');
			document.location.href = 'driver-login.php';
			</script>
			"
			;
			// $_SESSION['registration_success'] = "Registration successful.";
			// header("Location: login.php");
        	// exit();
		}
		else {
			echo "Unable to insert data: " . mysqli_error($conn);
		}
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>City Taxi - Cab Service</title>
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/img/favicon.ico">
		<?php include 'css.php'; ?>
	</head>
	<body>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper login-body">
			<!-- Header -->
			<header class="log-header">
				<a href="index.php"><img class="img-fluid logo-dark" src="assets/img/logo.png" alt="Logo"></a>
			</header>
			<!-- /Header -->

			<div class="login-wrapper">
				<div class="loginbox">						
					<div class="login-auth">
						<div class="login-auth-wrap">
							<div class="sign-group">
								<a href="index.php" class="btn sign-up"><span><i class="fe feather-corner-down-left" aria-hidden="true"></i></span> Back To Home</a>
							</div>
							<h1>Sign Up</h1>
							<p class="account-subtitle">We'll send a confirmation mail to your email.</p>								
							<form action="driver-register.php" method="post">
              					
								<div class="input-block">
									<label class="form-label">Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control"  placeholder="" name="name">
								</div>
                				
								<div class="input-block">
									<label class="form-label">Contact No <span class="text-danger">*</span></label>
									<input type="tel" class="form-control"  placeholder="" name="phone_number">
								</div>
                				
								<!-- <div class="input-block">
									<label class="form-label">NIC <span class="text-danger">*</span></label>
									<input type="number" class="form-control"  placeholder="" name="NIC">
								</div> -->

								<div class="input-block">
									<label class="form-label">Email <span class="text-danger">*</span></label>
									<input type="email" class="form-control"  placeholder="" name="email">
								</div>
								
								<div class="input-block">
									<label class="form-label">Username <span class="text-danger">*</span></label>
									<input type="text" class="form-control"  placeholder="" name="username">
								</div>
								
								<div class="input-block">
									<label class="form-label">Password <span class="text-danger">*</span></label>
									<div class="pass-group">
										<input type="password" class="form-control pass-input" placeholder="" name="password">
										<span class="fas fa-eye-slash toggle-password"></span>
									</div>
								</div>	

								<input class="btn btn-outline-light w-100 btn-size mt-1" type="submit" value="Sign Up" name="signup">

								<!-- <a href="login.php" class="btn btn-outline-light w-100 btn-size mt-1" name="sign_up_btn">Sign Up</a> -->

								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">Or, Create an account with your email</span>
								</div>
								<!-- Social Login -->
								<div class="social-login">
									<a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img src="assets/img/icons/google.svg" class="img-fluid" alt="Google"></span>Log in with Google</a>
								</div>
								<div class="social-login">
									<a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img src="assets/img/icons/facebook.svg" class="img-fluid" alt="Facebook"></span>Log in with Facebook</a>
								</div>
								<!-- /Social Login -->
								<div class="text-center dont-have">Already have an Account? <a href="login.php">Sign In</a></div>
							</form>							
						</div>
					</div>
				</div>
			</div>
			<?php include 'log-process-footer.php';?>