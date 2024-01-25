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
      <?php include 'header.php'; ?>

      
      <!-- Banner -->
      <?php include 'banner.php'; ?>
      
     

      <!-- Search -->
      <?php include 'search.php'; ?>
      
      

      <!-- services -->
      <?php include 'service.php'; ?>
      
      

      <!-- Popular Services -->
    
      

      <!-- Popular Cartypes -->
      <?php include 'popularCarType.php'; ?>
    

      <!-- Facts By The Numbers -->
      
      <?php include 'factByTheNumber.php'; ?>
      
      <!-- Why Choose Us -->
      <?php include 'chooseUs.php'; ?>
  

      <!-- Footer -->
      <?php include 'footer.php'; ?>
    </div>

    <!-- scrollToTop start -->
    <?php include 'scrollTop.php'; ?>

    <!-- scrollToTop end -->

		<!-- JS -->
		<?php include 'script.php'; ?>
   
    <script>
    function redirectToSignup() {
        // Redirect to the signup page
        window.location.href = "register-as.php";
    }
    </script>
  </body>
</html>
