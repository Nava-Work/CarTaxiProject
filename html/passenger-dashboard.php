<?php include 'top.php'; ?>
    <div class="main-wrapper">
      <!-- Header -->
      <?php include 'passenger-header.php'; ?>

      <!-- Banner -->
      <?php include 'banner.php'; ?>
      
      <!-- Search -->
      <?php include 'search.php'; ?>  

      <!-- services -->
      <?php include 'service.php'; ?>
      

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
    function redirectPage() {
        // Redirect to the Reserve taxi page
        window.location.href = "passenger-vehicle-list.php";
    }
    </script>
   
  </body>
</html>
