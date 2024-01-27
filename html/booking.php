<!DOCTYPE html>
<html lang="en">
  <html>
  <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>City Taxi - Cab Service</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/img/favicon.ico">
  <?php include 'css.php'; ?>
<body>
	
	<div class="main-wrapper">
	<?php include 'passenger-header.php';?>
		
		<!-- Breadscrumb Section -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row align-items-center text-center">
		    		<div class="col-md-12 col-12">
			    	    <h2 class="breadcrumb-title">Order Confirmation</h2>						
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadscrumb Section -->
        
        <section class="order-confirmation">
            <div class="container">
				<div class="confirm-order">
					<div class="section-title">
						<h3>Order Confirmation</h3>
						<h5>Order Total : <span>$315.00</span></h5>
					</div>
					<div class="booking-details order-confirm-box">
						<div class="row">
							<div class="col-lg-6">
								<div class="confirmation-title">
									<h4>Car Details</h4>
									<a href="javascript:void(0)">Edit</a>
								</div>
								<div class="order-car">
									<span><img src="assets/img/detail-smallcar-img-2.jpg" alt="car"></span>
									<h5>Chevrolet Camaro<span>$315</span></h5>
									
								</div>
							</div>
							<div class="col-lg-6">
								<div class="confirmation-title">
									<h4>Extra Service</h4>
									<a href="javascript:void(0)">Edit</a>
								</div>
								<ul class="address-info">
									<li>Baby Seat : $10</li>
								</ul>
							</div>
							<div class="col-lg-6">
								<div class="confirmation-title">
									<h4>Payment details</h4>
									<a href="javascript:void(0)">Edit</a>
								</div>
								<div class="visa-card">
									<a href="#"><img src="assets/img/visa.svg" alt="Visa"></a>
									<h6>Visa card ending in 1245</h6>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="confirmation-title">
									<h4>Pickup Location & Date</h4>
									<a href="javascript:void(0)">Edit</a>
								</div>
								<ul class="address-info">
									<li>45, 4th Avanue  Mark Street USA</li>
									<li>11 Jan 2023 - 11:00 PM</li>
								</ul>
							</div>
							<div class="col-lg-6">
								<div class="confirmation-title">
									<h4>Your Information</h4>
									<a href="javascript:void(0)">Edit</a>
								</div>
								<ul class="address-info">
									<li>Casandra</li>
									<li><a href="https://dreamsrent.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2a494b594b444e584b6a4f524b475a464f04494547">[email&#160;protected]</a></li>
									<li>+1 73940 45355</li>
									<li>45, 4th Avanue  Mark Street USA</li>
								</ul>
							</div>
							<div class="col-lg-6">
								<div class="confirmation-title">
									<h4>Drop Off Location</h4>
									<a href="javascript:void(0)">Edit</a>
								</div>
								<ul class="address-info mb-0">
									<li>45, 4th Avanue  Mark Street USA</li>
									<li>11 Jan 2023 - 11:00 PM</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="place-order-btn">
						<a href="#" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#pages_edit"><i class="feather-bar-chart me-2"></i>Place Order</a>
					</div>
				</div>
            </div>
        </section>

		<!-- Modal -->
		<div class="modal custom-modal fade check-availability-modal payment-success-modal" id="pages_edit" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-body">
						<div class="payment-success">
							<span class="check"><i class="fa-solid fa-check-double"></i></span>
							<h5>Order Confirmed</h5>
							<p>You Payment has been successfully done.
								Trasaction id :<span> #5064164454</span>
							</p>
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
												<a href="about.html">Our Company</a>
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
											<a href="https://dreamsrent.dreamstechnologies.com/cdn-cgi/l/email-protection#deadabaeaeb1acaa9ebba6bfb3aeb2bbf0bdb1b3"><span class="__cf_email__" data-cfemail="15666065657a676155706d74786579703b767a78">[email&#160;protected]</span></a>
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

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jan 2024 07:34:46 GMT -->
</html>