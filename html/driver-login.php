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
	</head>
	<body>
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
							<h1>Sign In As</h1>						
							<form action="index.php">
								<a href="login.php" class="btn btn-outline-light w-100 btn-size mt-1">Passenger</a>
                <a href="driver-login.php" class="btn btn-outline-light w-100 btn-size mt-1">Driver</a>
                <a href="admin-login.php" class="btn btn-outline-light w-100 btn-size mt-1">Admin</a>
                <div class="text-center dont-have">Don't have an account yet? <a href="register.php">Register</a></div>
							</form>							
						</div>
					</div>
				</div>
			</div>	     	
  <?php include 'log-process-footer.php'; ?>