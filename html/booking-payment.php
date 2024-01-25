<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>City Taxi - Cab Service</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/img/favicon.ico">
  <?php include 'css.php'; ?>

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
							<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
						</a>		
						<a href="index.php" class="navbar-brand logo-small">
							<img src="assets/img/logo-small.png" class="img-fluid" alt="Logo">
						</a>					
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.php" class="menu-logo">
								<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
						</div>
						<ul class="main-nav">
							<li><a class="active" href="index.php">Home</a></li>
							<li class="has-submenu">
								<a href="#">Listings <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
								    <li><a href="listing-grid.php">Listing Grid</a></li>
								    <li><a href="listing-list.php">Listing List</a></li>					
								    <li><a href="listing-details.php">Listing Details</a></li>								
								</ul>
							</li>
							<li class="has-submenu active">
								<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
								    <li><a href="about-us.php">About Us</a></li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Authentication</a>
										<ul class="submenu">
											<li><a href="register.php">Signup</a></li>
											<li><a href="login.php">Signin</a></li>
											<li><a href="forgot-password.php">Forgot Password</a></li>
											<li><a href="reset-password.php">Reset Password</a></li>
										</ul>
									</li>
									<li class="has-submenu active">
										<a href="javascript:void(0);">Booking</a>
										<ul class="submenu">											
											<li class="active"><a href="booking-payment.php">Booking Checkout</a></li>
											<li><a href="booking.php">Booking</a></li>
											<li><a href="invoice-details.php">Invoice Details</a></li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Error Page</a>
										<ul class="submenu">
											<li><a href="error-404.php">404 Error</a></li>
											<li><a href="error-500.php">500 Error</a></li>
										</ul>
									</li>
									<li><a href="pricing.php">Pricing</a></li>
									<li><a href="faq.php">FAQ</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="our-team.php">Our Team</a></li>
									<li><a href="testimonial.php">Testimonials</a></li>
									<li><a href="terms-condition.php">Terms & Conditions</a></li>
									<li><a href="privacy-policy.php">Privacy Policy</a></li>									
									<li><a href="maintenance.php">Maintenance</a></li>
									<li><a href="coming-soon.php">Coming Soon</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Blog <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
								    <li><a href="blog-list.php">Blog List</a></li>
									<li><a href="blog-grid.php">Blog Grid</a></li>
									<li><a href="blog-details.php">Blog Details</a></li>																		
								</ul>
							</li>
							<li><a href="contact-us.php">Contact</a></li>
							<li class="login-link">
								<a href="register.php">Sign Up</a>
							</li>
							<li class="login-link">
								<a href="login.php">Sign In</a>
							</li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">
						<li class="nav-item">
							<a class="nav-link header-login" href="login.php"><span><i class="fa-regular fa-user"></i></span>Sign In</a>
						</li>
						<li class="nav-item">
							<a class="nav-link header-reg" href="register.php"><span><i class="fa-solid fa-lock"></i></span>Sign Up</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<!-- /Header -->
		
		<!-- Breadscrumb Section -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row align-items-center text-center">
		    		<div class="col-md-12 col-12">
			    	    <h2 class="breadcrumb-title">Booking</h2>
				    	<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Booking</li>
							</ol>
						</nav>							
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadscrumb Section -->

		<!-- Booking  -->        
        <section class="booking-section">
            <div class="container">
                <ul class="nav nav-pills booking-tab" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-booking-tab" data-bs-toggle="pill" href="#pills-booking" role="tab" aria-controls="pills-booking" aria-selected="true">
                        <span>Step 1</span>
                        <h5>Booking Details</h5>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-payment-tab" data-bs-toggle="pill" href="#pills-payment" role="tab" aria-controls="pills-payment" aria-selected="false">
                        <span>Step 2</span>
                        <h5>Payments Details</h5>
                      </a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-booking" role="tabpanel" aria-labelledby="pills-booking-tab">
						<div class="booking-details">
							<div class="booking-title">
								<h3>Booking Details</h3>
							</div>		
							<div class="row booking-info">
								<div class="col-md-4 col-sm-6 pickup-address">
									<h5>Pickup</h5>
									<p>45, 4th Avanue  Mark Street USA</p>
									<span>Date & time : 11 Jan 2023</span>
								</div>
								<div class="col-md-4 col-sm-6 drop-address">
									<h5>Drop Off</h5>
									<p>78, 10th street Laplace USA</p>
									<span>Date & time : 11 Jan 2023</span>
								</div>
								<div class="col-md-4 col-sm-6 booking-amount">
									<h5>Amount to be paid</h5>
									<h6><span>$315 </span><i class="feather-info"></i></h6>
								</div>
							</div>
							<div class="booking-form">
								<div class="booking-title">
									<h5>Enter Below details</h5>
								</div>
								<form class="#">
									<div class="row">
										<div class="col-lg-6">												
											<div class="input-block">														
												<label>Enter Name <span class="text-danger">*</span></label>	
												<input type="text" class="form-control" placeholder="Your Name">
											</div>
										</div>
										<div class="col-lg-6">													
											<div class="input-block">
												<label>Email Address <span class="text-danger">*</span></label>	
												<input type="email" class="form-control" placeholder="Your Email">
											</div>
										</div>
										<div class="col-lg-6">												
											<div class="input-block">														
												<label>Phone Number  <span class="text-danger">*</span></label>	
												<input type="text" class="form-control" placeholder="+ 1 65656565656">
											</div>
										</div>
										<div class="col-lg-6">													
											<div class="input-block">
												<label>Address <span class="text-danger">*</span></label>	
												<input type="text" class="form-control" placeholder="Adderss">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="input-block">
												<label>Comments <span class="text-danger"> *</span> </label>	
												<textarea rows="4" class="form-control" placeholder="Comments"></textarea>
											</div>
										</div>
									</div>
									<div class="payment-btn">
										<button class="btn btn-primary submit-review" type="submit">Go to Payment<i class="fa-solid fa-arrow-right ms-2"></i></button>
									</div>
								</form>
							</div>
						</div>
						<div class="back-detail-page">
							<a href="listing-details.php"><i class="fa-solid fa-arrow-left me-2"></i> Back to detail page</a>
						</div>
					</div>
                    <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
						<div class="booking-details payment-details">
							<div class="booking-title">
								<h3>Payment Details</h3>
							</div>		
							<div class="booking-info">
								<div class="booking-amount">
									<h5>Your Payment</h5>
									<h6><span>$315 </span><i class="feather-info"></i></h6>
								</div>
							</div>
							<div class="payment-method">
								<h4>Choose your Payment Method</h4>
								<ul>
									<li><a href="#"><img src="assets/img/icons/payment-1.svg" alt="Payment Icon"></a></li>
									<li><a href="#"><img src="assets/img/icons/payment-2.svg" alt="Payment Icon"></a></li>
									<li><a href="#"><img src="assets/img/icons/payment-3.svg" alt="Payment Icon"></a></li>
									<li><a href="#"><img src="assets/img/icons/payment-4.svg" alt="Payment Icon"></a></li>
								</ul>
								<div class="booking-form">
									<div class="booking-title">
										<h5>Enter Below details</h5>
									</div>
									<form class="#">
										<div class="row">
											<div class="col-lg-12">												
												<div class="input-block">														
													<label>Card Number <span class="text-danger">*</span></label>	
													<input type="number" class="form-control" placeholder="45612212255455">
												</div>
											</div>
											<div class="col-lg-6">													
												<div class="input-block">
													<label>Expiration date  <span class="text-danger">*</span></label>	
													<input type="number" class="form-control" placeholder="12/25">
												</div>
											</div>
											<div class="col-lg-6">												
												<div class="input-block">														
													<label>Security number  <span class="text-danger">*</span></label>	
													<input type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="input-block payment-checkbox m-0">
												<label class="custom_check">
													<input type="checkbox" name="rememberme" class="rememberme">
													<span class="checkmark"></span>
													Save this account for future transaction
												</label>
											</div>
										</div>
										<div class="payment-btn">
											<button class="btn btn-primary submit-review w-100" type="button"  data-bs-toggle="modal" data-bs-target="#pages_edit">Pay $315</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="back-detail-page">
							<a href="booking.php"><i class="fa-solid fa-arrow-left me-2"></i> Back to Booking Detail</a>
						</div>
					</div>
                </div>
            </div>
        </section>
        <!-- /Booking  --> 

		<!-- Modal -->
		<div class="modal custom-modal fade check-availability-modal payment-success-modal" id="pages_edit" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-body">
						<div class="payment-success">
							<span class="check"><i class="fa-solid fa-check-double"></i></span>
							<h5>Payment Successful</h5>
							<p>You Payment has been successfully done.
								Trasaction id :<span> #5064164454</span>
							</p>
							<div class="order-confirm">
								<a href="booking.php">Go to Order Confirmation<i class="fa-solid fa-arrow-right ms-2"></i></a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->
	
	    <!-- Footer -->
		<footer class="footer">	
			<!-- Footer Top -->	
			<div class="footer-top aos" data-aos="fade-down">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<!-- Footer Widget -->
									<div class="footer-widget footer-menu">
										<h5 class="footer-title">About Company</h5>
										<ul>
											<li>
												<a href="about.php">Our Company</a>
											</li>
											<li>
												<a href="javascript:void(0)">Shop Toyota</a>
											</li>
											<li>
												<a href="javascript:void(0)">Dreamsrentals USA</a>
											</li>
											<li>
												<a href="javascript:void(0)">Dreamsrentals Worldwide</a>
											</li>
											<li>
												<a href="javascript:void(0)">Dreamsrentals Racing</a>
											</li>	
											<li>
												<a href="javascript:void(0)">Dreamsrentals Racing</a>
											</li>
											<li>
												<a href="javascript:void(0)">Virtual Auto Show</a>
											</li>									
										</ul>
									</div>
									<!-- /Footer Widget -->
								</div>
								<div class="col-lg-4 col-md-6">
									<!-- Footer Widget -->
									<div class="footer-widget footer-menu">
										<h5 class="footer-title">Vehicles Type</h5>
										<ul>
											<li>
												<a href="javascript:void(0)">All  Vehicles</a>
											</li>
											<li>
												<a href="javascript:void(0)">SUVs</a>
											</li>
											<li>
												<a href="javascript:void(0)">Trucks</a>
											</li>
											<li>
												<a href="javascript:void(0)">Cars</a>
											</li>
											<li>
												<a href="javascript:void(0)">Crossovers</a>
											</li>
											<li>
												<a href="javascript:void(0)">Electrified Vehicles</a>
											</li>	
											<li>
												<a href="javascript:void(0)">Hybrids</a>
											</li>								
										</ul>
									</div>
									<!-- /Footer Widget -->
								</div>
								<div class="col-lg-4 col-md-6">
									<!-- Footer Widget -->
									<div class="footer-widget footer-menu">
										<h5 class="footer-title">Quick links</h5>
										<ul>
											<li>
												<a href="javascript:void(0)">My Account</a>
											</li>
											<li>
												<a href="javascript:void(0)">Champaigns</a>
											</li>
											<li>
												<a href="javascript:void(0)">Dreamsrental Dealers</a>
											</li>
											<li>
												<a href="javascript:void(0)">Deals and Incentive</a>
											</li>
											<li>
												<a href="javascript:void(0)">Financial Services</a>
											</li>	
											<li>
												<a href="javascript:void(0)">Dreamsrental Insurance</a>
											</li>	
											<li>
												<a href="javascript:void(0)">Dreamsrental Care</a>
											</li>								
										</ul>
									</div>
									<!-- /Footer Widget -->
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="footer-contact footer-widget">
								<h5 class="footer-title">Contact Info</h5>
								<div class="footer-contact-info">									
									<div class="footer-address">											
										<span><i class="feather-phone-call"></i></span>
										<div class="addr-info">
											<a href="tel:+1(888)7601940">+ 1 (888) 760 1940</a>
										</div>
									</div>
									<div class="footer-address">
										<span><i class="feather-mail"></i></span>
										<div class="addr-info">
											<a href="https://dreamsrent.dreamstechnologies.com/cdn-cgi/l/email-protection#acdfd9dcdcc3ded8ecc9d4cdc1dcc0c982cfc3c1"><span class="__cf_email__" data-cfemail="30434540405f4244705548515d405c551e535f5d">[email&#160;protected]</span></a>
										</div>
									</div>
									<div class="update-form">
										<form action="#">
											<span><i class="feather-mail"></i></span> 
											<input type="email" class="form-control" placeholder="Enter You Email Here">
											<button type="submit" class="btn btn-subscribe"><span><i class="feather-send"></i></span></button>
										</form>
									</div>
								</div>								
								<div class="footer-social-widget">
									<h6>Connect with us</h6>
									<ul class="nav-social">
										<li>
											<a href="javascript:void(0)"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fab fa-instagram fi-icon"></i></a>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fab fa-behance fi-icon"></i></a>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fab fa-twitter fi-icon"></i> </a>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fab fa-linkedin fi-icon"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
			<!-- /Footer Top -->

			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<!-- Copyright -->
					<div class="copyright">
						<div class="row align-items-center">
							<div class="col-md-6">
								<div class="copyright-text">
									<p>© 2023 Dreams Rent. All Rights Reserved.</p>
								</div>
							</div>
							<div class="col-md-6">
								<!-- Copyright Menu -->
								<div class="copyright-menu">
									<div class="vistors-details">
										<ul class="d-flex">											
											<li><a href="javascript:void(0)"><img class="img-fluid" src="assets/img/icons/paypal.svg" alt="Paypal"></a></li>											
											<li><a href="javascript:void(0)"><img class="img-fluid" src="assets/img/icons/visa.svg" alt="Visa"></a></li>
											<li><a href="javascript:void(0)"><img class="img-fluid" src="assets/img/icons/master.svg" alt="Master"></a></li>
											<li><a href="javascript:void(0)"><img class="img-fluid" src="assets/img/icons/applegpay.svg" alt="applegpay"></a></li>
										</ul>										   								
									</div>
								</div>
								<!-- /Copyright Menu -->
							</div>
						</div>
					</div>
					<!-- /Copyright -->
				</div>
			</div>
			<!-- /Footer Bottom -->			
		</footer>
		<!-- /Footer -->
				
	</div>

    <!-- scrollToTop start -->
	<div class="progress-wrap active-progress">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
		</svg>
	</div>
	<!-- scrollToTop end -->
	
	<!-- jQuery -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>	
	
	<!-- Aos -->
	<script src="assets/plugins/aos/aos.js"></script>

    <!-- Slick JS -->
    <script src="assets/plugins/slick/slick.js"></script>

    <!-- Owl Carousel JS -->
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<!-- Top JS -->
	<script src="assets/js/backToTop.js"></script>
	
	<!-- Sticky Sidebar JS -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>	
	
	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	
</body>

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/booking-payment.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jan 2024 07:34:44 GMT -->
</html>