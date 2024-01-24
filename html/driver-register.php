<?php

    include "database-config.php";
    if(isset($_POST["sign_up_btn"])){
        $did= $_POST["driver_id"];
        $name = $_POST["name"];
        $uname = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $phonenum = $_POST["phone_number"];
        $regtime = $_POST["regTime"];
        
        if(empty($did) && empty($name) && empty($uname) && empty($password) && empty($email) && empty($phonenum) && empty($regtime) && empty($address)){

            echo "Check the data entered valid or not";
               
        }else{

            $qry = "INSERT INTO drivers (driver_id,name,username,password,email,phone_number,regTime) VALUES ('{$did}','{name}','{$uname}','{$password}','{$email}','{$phonenum}','{$regtime}')";

            $res = $connect->query($qry);
 
            if($res){
             echo "Data Inserted Successfully";
            }else{
             echo "Something wrong in your code";
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
							<form action="index.php">
              <div class="input-block">
									<label class="form-label">Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control"  placeholder="">
								</div>
                <div class="input-block">
									<label class="form-label">Contact No <span class="text-danger">*</span></label>
									<input type="tel" class="form-control"  placeholder="">
								</div>
                <div class="input-block">
									<label class="form-label">NIC <span class="text-danger">*</span></label>
									<input type="number" class="form-control"  placeholder="">
								</div>
								<div class="input-block">
									<label class="form-label">Username <span class="text-danger">*</span></label>
									<input type="text" class="form-control"  placeholder="">
								</div>
								<div class="input-block">
									<label class="form-label">Email <span class="text-danger">*</span></label>
									<input type="email" class="form-control"  placeholder="">
								</div>
								<div class="input-block">
									<label class="form-label">Password <span class="text-danger">*</span></label>
									<div class="pass-group">
										<input type="password" class="form-control pass-input" placeholder="">
										<span class="fas fa-eye-slash toggle-password"></span>
									</div>
								</div>	
								<a href="login.php" class="btn btn-outline-light w-100 btn-size mt-1" name="sign_up_btn">Sign Up</a>
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