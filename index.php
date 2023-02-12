<?php include('./database_connect.php'); 
$res=$con->query("SELECT * FROM `stats` WHERE `s_id`=1");
$value=$res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Digital Assets-Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <style>
      .my{
          margin-right:20px;
      }
      #myimg{
          width:400px;
      }
      .logo{
          
      }
  </style>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    

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

</head>

<body>
  <?php
  include('Include/header.php');
  ?>


  <!-- ======= hero Section ======= -->
  <section id="hero" style="height:500px;opacity:1;">
    <div class="hero-container" style="opacity:1;">
      <div id="heroCarousel" class="carousel slide " data-bs-ride="carousel" data-bs-interval="1000" style="opacity:1;">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>
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

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About Digital Assets</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-5 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="https://i.postimg.cc/yNnXqtPQ/YDC-250.gif" alt="" style="height:300px;width:360px;">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-7 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">Digital Assets</h4>
                </a>
                <p><i>
                    - The Digital Asset Investor Group of India ,  is  Marketing / Selling The YEM ( Your Everyday Money )   The  Virtual Digital Asset ( Digital Currency / Crypto Currency )  through OTC Market in Live (Current) market rate . Digital Asset Investor Group of India is not creator of YEM ( Your Everyday Money )
                    
                </p>
                <p>
                The YEM Foundation ( 2017 ) is  The Legal Regulatory Authority for YEM Currency , Registered as a Nonprofit Corporation # E0553072017-8 under the Laws of Navada , USA  . International Non -Governmental Organization (INGO) #XM7617 at the Union of International Associations .  ( for farther  details and  update please login  <a href="www.yemfoundation.com">www.yemfoundation.com</a> ).
                </p>
                <p>
                     The people may trade ( buy / Sell)   The YEM ( Your Everyday Money ) The  Virtual Digital Asset ( Digital Currency / Crypto Currency )   from the Exchange  ( for further details and update please login  <a href="www.digitalexchange.center">www.digitalexchange.center</a> )        
                </p>
               
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div>
    </div><!-- End About Section -->
   <?php
   $reg="SELECT * FROM `distributor` ORDER BY `d_no` desc LIMIT 10";
    $data=$con->query($reg);
   ?> 
    
    
        <!-- ======= Pricing Section ======= -->
    <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our Recent Registrations</h2>
            </div>
          </div>
        </div>
       
        <div class="row owl-carousel owl-theme ">
<?php
    while($val=$data->fetch_assoc()){
        
?>
          <div class="col-md-12 col-sm-12 col-xs-12 item">
            <div class="pri_table_list active" style="width:100%;">
              <span class="saleon">Registered</span>
              <h3>Welcome<br /> <span><?php echo $val['name'];?></span></h3>
              <ol>
                <li class="check">ID :<span><mark>DA<?php echo $val['d_id'];?></mark></span></li>
                <li class="check">CITY : <span><mark><?php echo $val['city'];?></mark></span></li>
                <!--<li class="check">EMAIL : <span><mark><?php echo $val['email'];?></mark></span></li>-->
                <li class="check">Registered date/time: <span><mark><?php echo $val['r_date'];?>/<?php echo $val['r_time'];?></mark></span></li>
              </ol>
            </div>
          </div>
<?php 
    }
?>
          
        </div>
      </div>
    </div>

  

     <!--======= Team Section ======= -->
    <div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Statistics</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="">
                <a href="#">
                  <img src="assets/img/team/users.png" alt="" style="height:350px;width:100%">
                </a>
              </div>
              <div class="team-content text-center">
                <h4>Current Price</h4>
                <!--<p style="font-size:30px;"><Code><?php echo "$".$value[current_price]."++"?></Code></p>-->
                 <p style="font-size:30px;"><Code><?php echo "$".$value[current_price];?></Code></p>
                
              </div>
            </div>
          </div>
           
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="">
                <a href="#">
                  <img src="assets/img/team/graph.jpg" alt="" style="height:328px;width:100%;">
                </a>
                
              </div>
              <div class="team-content text-center">
                <h4>VOLUME</h4>
                <!--<p style="font-size:25px"><Code><?php echo "$".$value[volume]."++"?>(Approx/day)</code></p>-->
                <p style="font-size:25px"><Code><?php echo "$".$value[volume];?>(Approx/day)</code></p>
                
              </div>
            </div>
          </div>
           
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="">
                <a href="#">
                  <img src="assets/img/team/wallet.png" alt="" style="height:350px;width:100%;">
                </a>
                
              </div>
              <div class="team-content text-center">
                <h4>Yem Holder</h4>
                <p style="font-size:30px"><Code><?php echo "$".$value[yem_hold]."++"?></Code></p>
              </div>
            </div>
          </div>
           
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="">
                <a href="#">
                  <img src="assets/img/team/project.jpg" alt="" style="height:350px;width:100%;">
                </a>
              </div>
              <div class="team-content text-center">
                <h4>PROJECTS</h4>
                <p style="font-size:30px"><Code><?php echo $value[projects]."++"?></Code></p>
              </div>
            </div>
          </div>
           
        </div>
      </div>
    </div><!-- End Team Section -->


    <!-- ======= Portfolio Section (1)======= -->
    <div id="portfolio" class="portfolio-area area-padding fix ">
      <div class="container">
        <div class="row ">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
            <div class="section-headline text-center">
              <h2>YEM In Projects</h2>
            </div>
          </div>
        </div>
        <div class="owl-carousel owl-theme" >
          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item item my" ><a href="" target="_blank">
            <div class=" " style="width:340px;">
              <div class="awesome-img">
                <img src="assets/img/portfolio/tank.jpg" alt="" style="height:300px;width:100%;" >
                <h4 style="text-align:center;"><b><br>THINK TANK</b></h4>
                </div>
            </div></a>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web item my"><a href="http://www.moneypon.com/" target="_blank">
            <div class="" style="width:340px;">
              <div class="awesome-img">
                <img src="assets/img/portfolio/Money.jpg" alt="" style="height:300px;width:100%;">
                <h4 style="text-align:center;"><b><br>MONEY PON</b></h4>
              </div>
            </div></a>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <!--<div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app item my">-->
          <!--  <div class="" style="width:340px;">-->
          <!--    <div class="awesome-img"><a href="https://prizemania.net/" target="_blank">-->
          <!--      <img src="assets/img/portfolio/Prize.jpg" alt="" style="height:300px;width:100%;">-->
          <!--      <h4 style="text-align:center;"><b><br>PRIZE MANIA</b></h4>-->
          <!--    </div>-->
          <!--  </div></a>-->
          <!--</div>-->
          <!-- portfolio-item end -->
           <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item item my"><a href="http://www.yemchain.com/" target="_blank">
            <div class="" style="width:340px;">
              <div class="awesome-img">
                <img src="assets/img/portfolio/yem.jpg" alt="" style="height:300px;width:100%;">
                <h4 style="text-align:center;"><b><br>YEM CHAIN</b></h4>
                
              </div>
            </div></a>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web item my" ><a href="http://www.twnkl.shop/" target="_blank">
            <div class="" style="width:340px;">
              <div class="awesome-img">
                <img src="assets/img/portfolio/twinkl.jpg" alt="" style="height:300px;width:100%;">
                <h4 style="text-align:center;"><b><br>TWINKLE SHOP</b></h4>
               
              </div>
            </div></a>
          </div>
          <!-- portfolio-item end -->
            <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web item my"><a href="https://twnklcars.com/" target="_blank">
            <div class="" style="width:340px;">
              <div class="awesome-img">
                <img src="assets/img/hero-carousel/e3.jpeg" alt="" style="height:300px;width:100%;">
                <h4 style="text-align:center;font-weight:bold;"><br>TWINKLE CARS<b>
                </b></h4>
              </div>
            </div></a>
          </div>
          <!-- portfolio-item start -->
          
          <!-- portfolio-item end -->


        </div>
      </div>
    </div>
    <!-- End Portfolio Section -->
    
    
    <!--Portfolio Section(2) -->
    <div id="portfolio" class="portfolio-area area-padding fix ">
      <div class="container">
        <div class="row ">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
            <div class="section-headline text-center">
              <h2>YEM Free Earn</h2>
            </div>
          </div>
        </div>
        <div class="owl-carousel owl-theme" >
           
          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app item my"><a href="https://prizemania.net/">
            <div class="" style="width:340px;">
              <div class="awesome-img">
                <img src="assets/img/portfolio/Prize.jpg" alt="" style="height:300px;width:100%;" target="_blank">
                <h4 style="text-align:center;"><br>PRIZE MANIA</h4>
                
              </div>
            </div></a>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web item my"><a href="https://myrewards.center/" target="_blank">
            <div class="" style="width:340px;">
              <div class="awesome-img">
                <img src="assets/img/hero-carousel/dg.jpeg" alt="" style="height:300px;width:100%;">
                <h4 style="text-align:center;"><br>MY REWARDS CENTER<b>
                </b></h4>
              </div>
            </div></a>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web item my"><a href="https://internet24.news/" target="_blank">
            <div class="" style="width:340px;">
              <div class="awesome-img">
                <img src="assets/img/hero-carousel/dg1.jpeg" alt="" style="height:300px;width:100%;">
                <h4 style="text-align:center;"><br>INTERNRT 24 NEWS<b>
                </b></h4>
              </div>
            </div></a>
          </div>
          <!-- portfolio-item end -->
          
          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web item my"><a href="https://lottefree.com/" target="_blank">
            <div class="" style="width:340px;">
              <div class="awesome-img">
                <img src="assets/img/hero-carousel/e2.jpeg" alt="" style="height:300px;width:100%;">
                <h4 style="text-align:center;"><br>YEM LOTTERY AND JACKPOT<b>
                </b></h4>
              </div>
            </div></a>
          </div>
          <!-- portfolio-item end -->
          
          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web item my"><a href="http://www.proorno.com/" target="_blank">
            <div class="" style="width:340px;">
              <div class="awesome-img">
                <img src="assets/img/hero-carousel/e1.jpeg" alt="" style="height:300px;width:100%;">
                <h4 style="text-align:center;">PRO OR NO<br>(SHARE YOUR POINT OF VIEW)<b>
                </b></h4>
              </div>
            </div></a>
          </div>
          <!-- portfolio-item end -->
          
         </div>
    <!-- End Portfolio Section(2) -->
    </div>
    </div>


    <!-- ======= Testimonials Section ======= -->
    <h2 style="text-align:center;">Auto Pool Bonus Achievers </h2><br>
    
    <div id="testimonials" class="testimonials" style="height:350px;">
        
      <div class="container" style="margin-top:-30px;">
        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">
        <?php
        $qry="SELECT * FROM `front_top_leaders`";
        $r=$con->query($qry);
        while($val=$r->fetch_assoc()){
        ?> 
    <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="top_leader/<?php echo $val[photo]?>" class="testimonial-img" alt="" style="height:100px;">
                <h3><?php echo $val[name]?></h3>
                <h4><?php echo $val[place]?></h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 <?php echo $val[message]?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
        <?php
        }
        ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </div>
    
    <!-- End Testimonials Section -->


    <!-- ======= Suscribe Section ======= -->
    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>Welcome to Digital Assets</h3>
              <!--<a class="sus-btn" href="#">Get A quote</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Suscribe Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Call: <br>
                    <span>Monday-Friday (9am-5pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Email: info@digitalasset.org.in<br>
                    Support: support@digitalasset.org.in<br>
                    <span>Website: www.digitalasset.org.in</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                    Location: Gwalior<br>
                    <span>Madhya Pradesh,India</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-7 " >
              <!-- Start Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229089.0588585817!2d78.03712961640626!3d26.212400700000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c5d1792291fb%3A0xff4fb56d65bc3adf!2sGwalior%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1657050088870!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-5">
              <div class="form contact-form">
                <form action="" method="post" role="form" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="mobile" id="email" placeholder="Your Mobile No." required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit" name="btn">Send Message</button></div>
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->
    <?php
    if(isset($_POST['btn'])){
         $reg="INSERT INTO `contact_us`(`id`, `name`, `email`,`mobile`, `subject`, `message`,`date`,`time`) VALUES ('null','$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[subject]','$_POST[message]','$date','$time')";
        $data=$con->query($reg);
        if( $data === TRUE){
            echo "<script>alert('Thank you for Contact us!  ');
		location.href='./index.php';</script>";
        }else{
            echo "<script>
		location.href='./index.php';</script>";
        }
    }
    ?>

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
include('Include/footer.php')
?>
<!-- End  Footer -->

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
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script type="text/javascript">
    $('.owl-carousel slide').owlCarousel({
    ltr:true,
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    //autoplayTimeout:1000,
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
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
    ltr:true,
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    //autoplayTimeout:1000,
     responsive: {
       0: {
           items: 1
       },
       600 :{
           items:2
       },
       1000 :{
           items:3
       }
     }
})


</script>

</body>

</html>
