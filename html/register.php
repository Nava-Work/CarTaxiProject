<?php

$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Connection Error: " . mysqli_connect_error());
} else {
    //echo "Connection object is created"; // here check if the connection is ok

	//after connection ok create database based on giving query
	// $sqlDatabase = "create databse 14_cartaxi";
	// if(mysqli_query($conn, $sqlDatabase))
	// {
	// 	echo "Database created";
	// }
	// else 
	// {
	// 	echo "Unable to create Database";

	// }

	//creating table
	mysqli_select_db($conn, "14_cartaxi"); //select databse name
	
	// $sqlTable= "create table passenger(id, primary key(id), name varchar(191), username varchar(191), password varchar(50))";
	// if(mysqli_query($conn, $sqlTable))
	// 	{
	// 		echo "Table created";
	// 	}
	// 	else 
	// 	{
	// 		echo "Unable to create Table";

	// 	}
	if(isset($_POST["signup"]))
	{
	//$na = $_POST["name"];
    $una = $_POST["username"];
    $pass= $_POST["password"];
    $email = $_POST["email"];
    //$phonenum = $_POST["phone_number"];
	$sql = "insert into passenger (name, username, password, email, phone_number) values('fathimaSajaana','$una','$pass','$email','0928212121') ";
		if(mysqli_query($conn, $sql))
		{
			echo "Data inserted";
		}
		else 
		{
			echo "Unable to insert data";

		}
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
							<form action="register.php" method="post">
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

								<div class="input-block">
									<label class="form-label">Email <span class="text-danger">*</span></label>
									<input type="email" class="form-control"  placeholder="" name="email">
								</div>	
								
								<input type="submit" value="Sign Up" name="signup">
								<!-- <a href="login.php" class="btn btn-outline-light w-100 btn-size mt-1">Sign Up</a> -->
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
			<?php include 'log-process-footer.php'; ?>