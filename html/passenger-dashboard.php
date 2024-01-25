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
    <div class="main-wrapper">
      <!-- Header -->
      <header class="header">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
              <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </a>
              <a href="index.php" class="navbar-brand logo">
                <img src="assets/img/logo.png" class="img-fluid" alt="Logo" width="400"/>
              </a>
              <a href="index.php" class="navbar-brand logo-small" >
                <img
                  src="assets/img/logo-2.png"
                  class="img-fluid"
                  alt="Logo"
                  width="60"
                />
              </a>
            </div>
            <div class="main-menu-wrapper">
              <div class="menu-header">
                <a href="index.php" class="menu-logo">
                  <img src="assets/img/logo.png" class="img-fluid" alt="Logo" />
                </a>
                <a
                  id="menu_close"
                  class="menu-close"
                  href="javascript:void(0);"
                >
                  <i class="fas fa-times"></i
                ></a>
              </div>
              <ul class="main-nav">
                <li class="active"><a href="index.php">Booking Details</a></li>
                <li class="has-submenu">
                  <a href="#"><i class="fas fa-chevron-down"></i></a>
                  <ul class="submenu">
                    <li><a href="listing-grid.php">Booking History</a></li>
                    <li><a href="listing-list.php">Current Booking</a></li>
                    <li><a href="listing-details.php">Upcoming Booking</a></li>
                  </ul>
                </li>
                <li class="has-submenu">
                  <a href="#">Payment Details <i class="fas fa-chevron-down"></i></a>
                  <ul class="submenu">
                    <li><a href="about-us.php">Payment History</a></li>
                    <li class="has-submenu">
                      <a href="javascript:void(0);">Current Payment</a>
                    </li>
                    <li><a href="pricing.php">Upcoming Payment</a></li>
                    <li>
                      <a href="terms-condition.php">Terms & Conditions</a>
                    </li>
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="maintenance.php">Maintenance</a></li>
                    <li><a href="coming-soon.php">Coming Soon</a></li>
                  </ul>
                </li>
                <li class="has-submenu">
                  <a href="#">Rating and Feedbacks</a>
                  <!-- <ul class="submenu">
                     <i class="fas fa-chevron-down"></i>
                    <li><a href="blog-list.php">Blog List</a></li>
                    <li><a href="blog-grid.php">Blog Grid</a></li>
                    <li><a href="blog-details.php">Blog Details</a></li>
                  </ul> -->
                </li>
                <li><a href="contact-us.php">Contact</a></li>
                <li class="login-link">
                  <a href="register-as.php">Sign Up</a>
                </li>
                <li class="login-link">
                  <a href="login-as.php">Sign In</a>
                </li>
              </ul>
            </div>
            <ul class="nav header-navbar-rht">
              <li class="nav-item">
                <a class="nav-link header-login" href="login-as.php"
                  ><span><i class="fa-regular fa-user"></i></span>User Profile</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link header-reg" href="register-as.php"
                  ><span><i class="fa-solid fa-lock"></i></span>Log Out</a
                >
              </li>
            </ul>
          </nav>
        </div>
      </header>