<?php include "./database_connect.php";
$que="SELECT * FROM `distributor` WHERE `d_id`='$_GET[id]'";
$res=$con->query($que);
$data=$res->fetch_assoc();

$message='Welcome to Digital Assets , '.$data[name].' your id '.$_GET[id].' pass '.$data[password].' thanks plz login - http://digitalasset.org.in/ - DAIGIT';
	                
	                $dd = str_replace(' ', '%20', $message);
	$url = 'http://sms.hspsms.com/sendSMS?username=digitalasset&message='.$message.'&sendername=DAIGIT&smstype=TRANS&numbers='.$data['mobile'].'&apikey=0dedce42-d76b-4c94-9a52-bd12edca100f';
	//$url = 'http://sms.hspsms.com/sendSMS?username=oranga&message='.$dd.'&sendername=ORGWEL&smstype=TRANS&numbers='.$data[mobile].'&apikey=67b73c31-8c2e-4406-aafd-dda03cf3d224';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	echo $url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register Success :: Digital Asset</title>
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
  <section id="hero" style="height:400px;">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.jpg)">
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
  </section><!-- End Hero Section -->

<main id="main">

<!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area" >
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container " >
          <div class="row" >
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
              <div class="section-headline text-center">
                <h2>Registered</h2>
              </div>
            </div>
          </div>
      

            <!-- Start  contact -->
            <div class=" col-lg-6 offset-xs-3 offset-lg-3" style="margin-top:-30px;">
              <div class="form contact-form f1" style="border:1px solid #3ec1d5;padding:20px;border-radius:20px;background-color:#f9f9f9;">
                  <h1 style="text-align:center;">Welcome <?php echo $data['name']?></h1><hr>
                    <h3>UserId : <code>GW<?php echo $data['d_id']?></code></h3>
                    <h3>Password : <code> <?php echo $data['password']?></code></h3>
                    <h3>Mob : <code><?php echo $data['mobile']?></code></h3>
                    <h5 style="text-align:center;"><a href="./login.php"><b>Log In</b></a>  </h5>
                
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
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
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
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
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
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="assets/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/6.jpg" alt=""></a>
                </div>
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
                &copy; Copyright <strong>DIGITAL ASSETS</strong>. All Rights Reserved
              </p>
            </div>
            Designed by <a href="http://eibo.in/" target="_blank">EIBO SOFTWARES</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
Success!

</html>