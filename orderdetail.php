<?php
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
        <title>TECHWORLD</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
      
        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      
        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
      
        <!-- =======================================================
        * Template Name: Restaurantly - v1.2.0
        * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
      </head>
      <body>
        <div id="topbar" class="d-flex align-items-center fixed-top">
            <div class="container d-flex">
              <div class="contact-info mr-auto">
                <i class="icofont-phone"></i> +92 333 3069692
                <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sun: 10:00 AM - 09:00 PM</span>
              </div>
            </div>
          </div>
        
          <!-- ======= Header ======= -->
          <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
        
              <h1 class="logo mr-auto"><a href="index.html">TECHWORLD</a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        
              <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#prebuilt">Pre-Built Systems</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#chefs">Workers</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="book-a-table text-center"><a href="#book-a-table">Book a Service</a></li>
                </ul>
              </nav><!-- .nav-menu -->
        
            </div>
          </header><!-- End Header -->
        
          <!-- ======= Hero Section ======= -->
          <section id="hero" class="d-flex align-items-center">
            <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
              <div class="row">
                <div class="col-lg-8">
                  <h1 style="text-align:center ;"> <span>Checkout Details</span></h1>
                  <form class="row g-3 " action="detail.php" method="post">
                    <div class="col-md-6">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="col-md-6">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="col-md-6">
                      <label for="number" class="form-label">Phone Number</label>
                      <input type="text" name="number" class="form-control" id="number" placeholder="03xxxxxxxxx">
                    </div>
                    <div class="col-md-6">
                      <label for="address" class="form-label">Address </label>
                      <input type="text" name="address" class="form-control" id="address" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-3">
                      <label for="city" class="form-label">City</label>
                      <input type="text" name="city" class="form-control" id="city">
                    </div>
                    
                    <div class="col-md-3">
                      <label for="zip" class="form-label">Zip</label>
                      <input type="text" name="zip" class="form-control" id="zip">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="payment" class="form-label">Payment Method</label>  <br>
                        <input id="payment" name="payment" class="form-select" placeholder="Easypaisa or COD">
                          
                      </div> 
               
                      <div class="col-md-8">
                        <label for="instruction" class="form-label">Delivery Instructions</label> <br>
                        <textarea rows="5" cols="30" id="instruction" name="instruction"></textarea>
                      </div>

                    <div class="col-12 mt-3">
                        <center>
                      <button type="submit" class="btn btn-primary" style="background-color:  rgb(255, 228, 228); color: black; font-weight:bold; ">Place Order</button>
                    </center>
                    </div>
                    
                  </form>
        
              </div>
            </div>
          </section><!-- End Hero -->

      </body>


       <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>