<?php include "database_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login || Digital Asset</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
  <style>
      .nm{
          font-size:20px;
          font-family: "Raleway", sans-serif;
          font-weight:bold;
      }
      .f1{
          box-shadow:10px 10px  20px black;
      }
     
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('./Include/header.php');?>
  <!-- End Header -->

  <!-- ======= hero Section ======= -->
 <section id="hero" style="height:500px;opacity:1;">
    <div class="hero-container" style="opacity:1;">
      <div id="heroCarousel" class="carousel slide " data-bs-ride="carousel" data-bs-interval="5000" style="opacity:1;">



        <div class="carousel-inner" role="listbox" style="opacity:1;">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero1.jpeg);opacity:1;">
            <div class="carousel-container">
              <div class="container">
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero2.jpeg);opacity:1;">
            <div class="carousel-container">
              <div class="container">
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero4.jpeg)">
            <div class="carousel-container">
              <div class="container">
              </div>
            </div>
          </div>
          
          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/img10.jpeg)">
            <div class="carousel-container">
              <div class="container">
           
              </div>
            </div>
          </div>
          
          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/img11.jpeg)">
            <div class="carousel-container">
              <div class="container">
           
              </div>
            </div>
          </div>
          
          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/img12.jpeg)">
            <div class="carousel-container">
              <div class="container">
           
              </div>
            </div>
          </div>
          
          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/img14.jpeg)">
            <div class="carousel-container">
              <div class="container">
           
              </div>
            </div>
          </div>
          
          
          
          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/img17.jpeg)">
            <div class="carousel-container">
              <div class="container">
           
              </div>
            </div>
          </div>
          
          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/img18.jpeg)">
            <div class="carousel-container">
              <div class="container">
           
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section>
  <!-- End Hero Section -->

<main id="main">

<!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area" >
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container " >
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
              <div class="section-headline text-center">
                <h2>Login</h2>
              </div>
            </div>
          </div>
      

            <!-- Start  contact -->
            <div class=" col-lg-6 offset-xs-3 offset-lg-3" style="margin-top:-30px;">
              <div class="form contact-form">
                <form  method="post" action="./ibo_panel/production/process_login.php" role="form" class="php-email-form f1" style="border:1px solid #3ec1d5;padding:20px;border-radius:20px;background-color:#f9f9f9;">
                    <br>
                  <div class="form-group">
                      <label class="nm" >Members Id</label>
                    <input type="text" name="uid" class="form-control" id="name" placeholder="Enter MemberId" required value="">
                  </div><br>
                  
                  <div class="form-group" for="pwd">
                      <label class="nm" >Password:</label>
                    <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Your Password" required value="">
                  </div><br>
                 
                  <div class="text-center"><button type="submit" style="background-color:#3ec1d5;" name="btn_log">Sign In</button></div><br>
                  Not have an account? <a href="./register.php">Register</a>
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->
 <footer>
    <div class="footer-area" >
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>Digital</span>Assets</h2>
                </div>

                <p></p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-3">
            <div class="footer-content">
              <div class="footer-head">
                <!--<h4>information</h4>-->
                <!--<p>-->
                <!--  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.-->
                <!--</p>-->
                <div class="footer-contacts">
                    <p><span>Email : </span><a href="info@digitalasset.org.in"  style="color:red;">info@digitalasset.org.in/</a> </p>
                    <p><span>Support : </span><a href="support@digitalasset.org.in"  style="color:red;">support@digitalasset.org.in/</a> </p>
                  <p><span>Website : </span><a href="http://digitalasset.org.in"  style="color:red;">http://digitalasset.org.in/</a> </p>
                  <p style="color:red;"><span >Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
           <div class="col-md-6">
            <div class="footer-content">
              <div class="footer-head">
                <img src="assets/img/logo1.png" style="height:300px;margin-top:-60px;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Digital Assets</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              Designed by <a href="http://eibo.in/" target="_blank">EIBO SOFTWARES</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  

  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
    ltr:true,
    loop:false,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:1000,
     responsive: {
       0: {
           items: 1
       },
       600 :{
           items:2
       },
       1000 :{
           items:10
       }
     }
})


</script>

</html>