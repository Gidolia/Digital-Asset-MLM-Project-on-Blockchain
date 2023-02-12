<?php
include('database_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register || Digital Assets</title>
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
  <script>
    function validateForm() {
 	var ser_name = document.forms["Formwer"]["sname"].value;
 	var p_name = document.forms["Formwer"]["pname"].value;
	var password = document.forms["Formwer"]["pwd1"].value;
	var c_password = document.forms["Formwer"]["pwd2"].value;
	var mobile_no = document.forms["Formwer"]["mobile_ck"].value;
	if(mobile_no=="This Mobile Number is Already Register")
	{
	    document.getElementById("text_mob").innerHTML = " This Mobile Number is Already Register ";
    return false;
	}
	if(mobile_no=="Please Check Your Mobile Number")
	{
	    document.getElementById("text_mob").innerHTML = " Please Check Your Mobile Number ";
    return false;
	}
	  if (password != c_password)
		  {
    document.getElementById("cp_msg").innerHTML = " Confirm Password didnt matched to password ";
    return false;
		  }
		  
	
	if(ser_name == "")
		{
			document.getElementById("upline_msg").innerHTML = " Please Check Upline no. ";
			return false;
		}
	if(ser_name == "Please check your upline number")
		{
			document.getElementById("upline_msg").innerHTML = " Please Check Upline no. ";
			return false;
		}
	if(p_name == "")
		{
			document.getElementById("upline_msgp").innerHTML = " Please Check Upline no. ";
			return false;
		}
	if(p_name == "Please check your upline number")
		{
			document.getElementById("upline_msgp").innerHTML = " Please Check Upline no. ";
			return false;
		}
}
   function showHint(str) {
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").value = this.responseText;
		 // document.getElementById("txtg").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "get_name.php?q=" + str, true);
    xmlhttp.send();
    
    var p_id = document.forms["Formwer"]["pid"].value;
    var xmlhttpe = new XMLHttpRequest();
    xmlhttpe.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHints").value = this.responseText;
		  document.getElementById("txtHintst").innerHTML = this.responseText;
      }
    };
    xmlhttpe.open("GET", "get_s_name.php?q=" + str + "&p=" + p_id, true);
    xmlhttpe.send();
  
}
   function showHintp(str) {
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHintp").value = this.responseText;
		 // document.getElementById("txtg").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "get_name.php?q=" + str, true);
    xmlhttp.send();
  
}
function showHint_mob(str) {
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint_mob").value = this.responseText;
        if(this.responseText != "Correct")
				{
					document.getElementById("text_mob").innerHTML = this.responseText;
				}
		else{ document.getElementById("text_mob").innerHTML = "";
		}
        
      }
    };
    xmlhttp.open("GET", "get_hint_mob.php?q=" + str, true);
    xmlhttp.send();
  
}

</script>
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
                <h2><img src="https://i.postimg.cc/bvVQmMpQ/YDCF-310.gif" style="height:50px;width:50px;border-radius:20px;">Register Here</h2>
                
              </div>
            </div>
          </div>
      

            <!-- Start  Register -->
            <div class="offset-lg-2 col-lg-8 offset-xs-3 offset-lg-2">
              <div class="form contact-form">
                <form method="post" class="php-email-form f1" style="border:1px solid #3ec1d5;padding:20px;border-radius:20px;background-color:#f9f9f9;" name="Formwer" onsubmit="return validateForm()">
                    <br>
                  <div class="form-group">
                      <label class="nm" >Proposal Id:</label>
                    <input type="text" name="pid" class="form-control" placeholder="Enter Proposal Id" value="<?php echo $_GET[d_id];?>" required onKeyUp="showHintp(this.value)">
                    <span id="errorp" style="color:red;"></span>
                  </div><br>
                  
                  <div class="form-group">
                      <label class="nm" >Proposal Name:</label>
                      <?php
						    
						     function isNumber($c) {
                                return preg_match('/[0-9]/', $c);
                            }
                            $stringds=$_GET[d_id];
                               
                            $chars = '';
                            $d_id = '';
                            for ($index=0;$index<strlen($stringds);$index++) {
                                if(isNumber($stringds[$index]))
                                {
                                    $d_id .= $stringds[$index];
                                }
                                else {
                                    $chars .= $stringds[$index];}
                             
                            //echo $_GET[d_id];
                            //echo $d_id;
						    $fdfe="SELECT * FROM `distributor` WHERE `d_id`='$d_id'";
						    $scve=$con->query($fdfe);
						    $dckme=$scve->fetch_assoc();
						    }?>
                    <input type="text" name="pname" class="form-control" id="txtHintp" value="<?php echo $dckme[name];?>" placeholder="Your Name" required readonly >
                    <span id="upline_msgp" style="color: red"></span>
                  </div><br>
                  <div class="form-group">
                      <label class="nm" >Sponser Id:</label>
                    <input type="text" name="sid" class="form-control" placeholder="Enter Sponser Id" value="<?php echo $_GET[d_id];?>" required onKeyUp="showHint(this.value)">
                    <span id="error" style="color:red;"></span>
                  </div><br>
                  
                  <div class="form-group">
                      <label class="nm" >Sponser Name:</label>
                      <?php
						    
						     
                            $stringds=$_GET[d_id];
                               
                            $chars = '';
                            $d_id = '';
                            for ($index=0;$index<strlen($stringds);$index++) {
                                if(isNumber($stringds[$index]))
                                {
                                    $d_id .= $stringds[$index];
                                }
                                else {
                                    $chars .= $stringds[$index];}
                             
                            //echo $_GET[d_id];
                            //echo $d_id;
						    $fdf="SELECT * FROM `distributor` WHERE `d_id`='$d_id'";
						    $scv=$con->query($fdf);
						    $dckm=$scv->fetch_assoc();
						    }?>
                    <input type="text" name="sname" class="form-control" id="txtHint" value="<?php echo $dckm[name];?>" placeholder="Your Name" required readonly >
                    <input type="text" hidden name="snamec" class="form-control" id="txtHints" value="<?php echo $dckm[name];?>" placeholder="Your Name" required readonly >
                    <span id="txtHintst" style="color: red"></span>
                    <span id="upline_msg" style="color: red"></span>
                  </div><br>
                  <div class="form-group">
                      <label class="nm" for="name">Full Name:</label>
                    <input type="text" name="name" class="form-control"  placeholder="Your Full Name" required >
                  </div><br>
                 <div class="form-group">
                      <label class="nm" for="mob">Mobile No.:</label>
                    <input type="text" name="mobile" class="form-control" placeholder="Your Mobile Number" required   onKeyUp="showHint_mob(this.value)">
                    <span id="text_mob" style="color: red"></span>
								<span id="text_mobw" style="color: red"></span>
								<input type="hidden" name="mobile_ck" value="Please Check Your Mobile Number" id="txtHint_mob" readonly />
                  </div><br>
                  <div class="form-group">
                      <label class="nm" for="email">Email Id:</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                  </div><br>
                  <div class="form-group">
                      <label class="nm" for="ct">State:</label>
                   <select class="form-control" name="state" required id="select-state" placeholder="Pick a state or Search Here">
                       <option value="">Select State</option>
                       <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
                   </select>
                  </div><br>
                  <div class="form-group">
                      <label class="nm" for="select-district">District:</label>
                    <select class="form-control" name="district" required id="select-district" placeholder="Pick a District or Search Here...">
<option value="">Select District</option>
<option value="Anantapur">Anantapur</option> 
<option value="Chittoor">Chittoor </option>
<option value="Cuddapah">Cuddapah</option>
<option value="East Godavari">East Godavari</option>
<option value="Guntur">Guntur</option>
<option value="Krishna">Krishna</option>
<option value="Kurnool">Kurnool</option>
<option value="Nellore">Nellore</option>
<option value="Prakasam">Prakasam</option>
<option value="Srikakulam">Srikakulam</option>
<option value="Visakhapatnam">Visakhapatnam</option>
<option value="Vizianagaram">Vizianagaram</option>
<option value="West Godavari">West Godavari</option>
<option value="Anjaw">Anjaw </option>
<option value="Changlang">Changlang</option>
<option value="Dibang Valley ">Dibang Valley </option>
<option value="East Kameng ">East Kameng </option>
<option value="East Siang">East Siang</option>
<option value="Kurung Kumey ">Kurung Kumey </option>
<option value="Lohit">Lohit</option>
<option value="Lower Dibang Valley">Lower Dibang Valley</option>
<option value="Lower Subansiri ">Lower Subansiri </option>
<option value="Papum Pare">Papum Pare</option>
<option value="Tawang">Tawang</option>
<option value="Tirap">Tirap</option>
<option value="Upper Siang ">Upper Siang </option>
<option value="Upper Subansiri">Upper Subansiri</option>
<option value="West Kameng ">West Kameng </option>
<option value="West Siang">West Siang</option>
<option value="Baksa">Baksa</option>
<option value="Barpeta">Barpeta</option>
<option value="Bongaigaon">Bongaigaon</option>
<option value="Cachar">Cachar</option>
<option value="Chirang">Chirang</option>
<option value="Darrang">Darrang</option>
<option value="Dhemaji">Dhemaji</option>
<option value="Dhubri">Dhubri</option>
<option value="Dibrugarh">Dibrugarh</option>
<option value="Dima Hasao">Dima Hasao</option>
<option value="Goalpara">Goalpara</option>
<option value="Golaghat">Golaghat</option>
<option value="Hailakandi">Hailakandi</option>
<option value="Jorhat">Jorhat</option>
<option value="Kamrup">Kamrup</option>
<option value="Kamrup">Kamrup Metropolitan</option>
<option value="Karbi Anglong">Karbi Anglong</option>
<option value="Karimganj">Karimganj</option>
<option value="Kokrajhar">Kokrajhar</option>
<option value="Lakhimpur">Lakhimpur</option>
<option value="Marigaon">Marigaon</option>
<option value="Nagaon">Nagaon</option>
<option value="Nalbari">Nalbari</option>
<option value="Sibsagar">Sibsagar</option>
<option value="Sonitpur">Sonitpur</option>
<option value="Tinsukia">Tinsukia</option>
<option value="Udalguri">Udalguri</option>
<option value="Araria">Araria</option>
<option value="Arwal">Arwal</option>
<option value="Aurangabad">Aurangabad</option>
<option value="Banka">Banka</option>
<option value="Begusarai">Begusarai</option>
<option value="Bhagalpur">Bhagalpur</option>
<option value="Bhojpur">Bhojpur</option>
<option value="Buxar">Buxar</option>
<option value="Darbhanga">Darbhanga</option>
<option value="Gaya">Gaya</option>
<option value="Gopalganj">Gopalganj</option>
<option value="Jamui">Jamui</option>
<option value="Jehanabad">Jehanabad</option>
<option value="Kaimur">Kaimur</option>
<option value="Katihar">Katihar</option>
<option value="Khagaria">Khagaria</option>
<option value="Kishanganj">Kishanganj</option>
<option value="Lakhisarai">Lakhisarai</option>
<option value="Madhepura">Madhepura</option>
<option value="Madhubani">Madhubani</option>
<option value="Munger">Munger</option>
<option value="Muzaffarpur">Muzaffarpur</option>
<option value="Nalanda">Nalanda</option>
<option value="Nawada">Nawada</option>
<option value="Pashchim Champaran">Pashchim Champaran</option>
<option value="Patna">Patna</option>
<option value="Purba Champaran">Purba Champaran</option>
<option value="Purnia">Purnia</option>
<option value="Rohtas">Rohtas</option>
<option value="Saharsa">Saharsa</option>
<option value="Samastipur">Samastipur</option>
<option value="Saran">Saran</option>
<option value="Sheikhpura">Sheikhpura</option>
<option value="Sheohar">Sheohar</option>
<option value="Sitamarhi">Sitamarhi</option>
<option value="Siwan">Siwan</option>
<option value="Supaul">Supaul</option>
<option value="Vaishali">Vaishali</option>
<option value="Bastar">Bastar</option>
<option value="Bijapur">Bijapur</option>
<option value="Bilaspur">Bilaspur</option>
<option value="Dakshin Bastar Dantewada">Dakshin Bastar Dantewada</option>
<option value="Dhamtari">Dhamtari</option>
<option value="Durg">Durg</option>
<option value="Janjgir Champa">Janjgir Champa</option>
<option value="Jashpur">Jashpur</option>
<option value="Kabeerdham">Kabeerdham</option>
<option value="Korba">Korba</option>
<option value="Koriya">Koriya</option>
<option value="Mahasamund">Mahasamund</option>
<option value="Narayanpur">Narayanpur</option>
<option value="Raigarh">Raigarh</option>
<option value="Raipur">Raipur</option>
<option value="Rajnandgaon">Rajnandgaon</option>
<option value="Surguja">Surguja</option>
<option value="Uttar Bastar Kanker ">Uttar Bastar Kanker </option>
<option value="North Goa">North Goa</option>
<option value="South Goa">South Goa</option>
<option value="Ahmadabad">Ahmadabad</option>
<option value="Amreli">Amreli</option>
<option value="Anand">Anand</option>
<option value="Banas Kantha">Banas Kantha</option>
<option value="Bharuch">Bharuch</option>
<option value="Bhavnagar">Bhavnagar</option>
<option value="Dohad">Dohad</option>
<option value="Gandhinagar">Gandhinagar</option>
<option value="Jamnagar">Jamnagar</option>
<option value="Junagadh">Junagadh</option>
<option value="Kachchh">Kachchh</option>
<option value="Kheda">Kheda</option>
<option value="Mahesana">Mahesana</option>
<option value="Narmada">Narmada</option>
<option value="Navsari">Navsari</option>
<option value="Panch Mahals">Panch Mahals</option>
<option value="Patan">Patan</option>
<option value="Porbandar">Porbandar</option>
<option value="Rajkot">Rajkot</option>
<option value="Sabar Kantha">Sabar Kantha</option>
<option value="Surat">Surat</option>
<option value="Surendranagar">Surendranagar</option>
<option value="Tapi">Tapi</option>
<option value="The Dangs">The Dangs</option>
<option value="Vadodara">Vadodara</option>
<option value="Valsad">Valsad</option>
<option value="Ambala">Ambala</option>
<option value="Bhiwani">Bhiwani</option>
<option value="Faridabad">Faridabad</option>
<option value="Fatehabad">Fatehabad</option>
<option value="Gurgaon">Gurgaon</option>
<option value="Hisar">Hisar</option>
<option value="Jhajjar">Jhajjar</option>
<option value="Jind">Jind</option>
<option value="Kaithal">Kaithal</option>
<option value="Karnal">Karnal</option>
<option value="Kurukshetra">Kurukshetra</option>
<option value="Mahendragarh">Mahendragarh</option>
<option value="Mewat">Mewat</option>
<option value="Palwal">Palwal</option>
<option value="Panchkula">Panchkula</option>
<option value="Panipat">Panipat</option>
<option value="Rewari">Rewari</option>
<option value="Rohtak">Rohtak</option>
<option value="Sirsa">Sirsa</option>
<option value="Sonipat">Sonipat</option>
<option value="Yamunanagar">Yamunanagar</option>
<option value="Bilaspur">Bilaspur</option>
<option value="Chamba">Chamba</option>
<option value="Hamirpur">Hamirpur</option>
<option value="Kangra">Kangra</option>
<option value="Kinnaur">Kinnaur</option>
<option value="Kullu">Kullu</option>
<option value="Lahul and Spiti">Lahul and Spiti</option>
<option value="Mandi">Mandi</option>
<option value="Shimla">Shimla</option>
<option value="Sirmaur">Sirmaur</option>
<option value="Solan">Solan</option>
<option value="Una">Una</option>
<option value="Anantanag">Anantanag</option>
<option value="Badgam">Badgam</option>
<option value="Bandipore">Bandipore</option>
<option value="Baramula">Baramula</option>
<option value="Doda">Doda</option>
<option value="Ganderbal">Ganderbal</option>
<option value="Jammu">Jammu</option>
<option value="Kargil">Kargil</option>
<option value="Kathua">Kathua</option>
<option value="Kishtwar">Kishtwar</option>
<option value="Kulgam">Kulgam</option>
<option value="Kupwara">Kupwara</option>
<option value="Leh">Leh</option>
<option value="Pulwama">Pulwama</option>
<option value="Rajauri">Rajauri</option>
<option value="Punch">Punch</option>
<option value="Rajauri">Rajauri</option>
<option value="Ramban">Ramban</option>
<option value="Reasi">Reasi</option>
<option value="Samba">Samba</option>
<option value="Shupiyan">Shupiyan</option>
<option value="Srinagar">Srinagar</option>
<option value="Udhampur">Udhampur</option>
<option value="Bokaro">Bokaro</option>
<option value="Chatra">Chatra</option>
<option value="Deoghar">Deoghar</option>
<option value="Dhanbad">Dhanbad</option>
<option value="Dumka">Dumka</option>
<option value="Garhwa">Garhwa</option>
<option value="Giridih">Giridih</option>
<option value="Godda">Godda</option>
<option value="Gumla">Gumla</option>
<option value="Hazaribagh">Hazaribagh</option>
<option value="Jamtara">Jamtara</option>
<option value="Khunti">Khunti</option>
<option value="Kodarma">Kodarma</option>
<option value="Latehar">Latehar</option>
<option value="Lohardaga">Lohardaga</option>
<option value="Pakur">Pakur</option>
<option value="Palamu">Palamu</option>
<option value="Pashchimi Singhbhum">Pashchimi Singhbhum</option>
<option value="urbi Singhbhum">Purbi Singhbhum</option>
<option value="Ramgarh">Ramgarh</option>
<option value="Ranchi">Ranchi</option>
<option value="Sahibganj">Sahibganj</option>
<option value="Saraikella Kharsawan">Saraikella Kharsawan</option>
<option value="Simdega">Simdega</option>
<option value="Bagalkot">Bagalkot</option>
<option value="Bangalore">Bangalore</option>
<option value="Bangalore Rural">Bangalore Rural</option>
<option value="Belgaum">Belgaum</option>
<option value="Bellary">Bellary</option>
<option value="Bidar">Bidar</option>
<option value="Bijapur">Bijapur</option>
<option value="Chamarajanagar">Chamarajanagar</option>
<option value="Chikkaballapura">Chikkaballapura</option>
<option value="Chikmagalur">Chikmagalur</option>
<option value="Chitradurga">Chitradurga</option>
<option value="Dakshina Kannada">Dakshina Kannada</option>
<option value="Davanagere">Davanagere</option>
<option value="Dharwad">Dharwad</option>
<option value="Gadag">Gadag</option>
<option value="Gulbarga">Gulbarga</option>
<option value="Hassan">Hassan</option>
<option value="Haveri">Haveri</option>
<option value="Kodagu">Kodagu</option>
<option value="Kolar">Kolar</option>
<option value="Koppal">Koppal</option>
<option value="Mandya">Mandya</option>
<option value="Mysore">Mysore</option>
<option value="Raichur">Raichur</option>
<option value="Ramanagara">Ramanagara</option>
<option value="Shimoga">Shimoga</option>
<option value="Tumkur">Tumkur</option>
<option value="Udupi">Udupi</option>
<option value="Uttara Kannada">Uttara Kannada</option>
<option value="Yadgir">Yadgir</option>
<option value="lappuzha">lappuzha</option>
<option value="Ernakulam">Ernakulam</option>
<option value="Idukki">Idukki</option>
<option value="Kannur">Kannur</option>
<option value="Kasaragod">Kasaragod</option>
<option value="Kollam">Kollam</option>
<option value="Kottayam">Kottayam</option>
<option value="Kozhikode">Kozhikode</option>
<option value="Malappuram">Malappuram</option>
<option value="Palakkad">Palakkad</option>
<option value="Pathanamthitta">Pathanamthitta</option>
<option value="Thiruvananthapuram">Thiruvananthapuram</option>
<option value="Thrissur">Thrissur</option>
<option value="Wayanad">Wayanad</option>
<option value="Alirajpur">Alirajpur</option>
<option value="Anuppur">Anuppur</option>
<option value="Ashoknagar">Ashoknagar</option>
<option value="Balaghat">Balaghat</option>
<option value="Barwani">Barwani</option>
<option value="Betul">Betul</option>
<option value="Bhind">Bhind</option>
<option value="Bhopal">Bhopal</option>
<option value="Burhanpur">Burhanpur</option>
<option value="Chhatarpur">Chhatarpur</option>
<option value="Chhindwara">Chhindwara</option>
<option value="Damoh">Damoh</option>
<option value="Datia">Datia</option>
<option value="Dewas">Dewas</option>
<option value="Dhar">Dhar</option>
<option value="Dindori">Dindori</option>
<option value="East Nimar">East Nimar</option>
<option value="Guna">Guna</option>
<option value="Gwalior">Gwalior</option>
<option value="Harda">Harda</option>
<option value="Hoshangabad">Hoshangabad</option>
<option value="Indore">Indore</option>
<option value="Jabalpur">Jabalpur</option>
<option value="Jhabua">Jhabua</option>
<option value="Katni">Katni</option>
<option value="Mandla">Mandla</option>
<option value="Mandsaur">Mandsaur</option>
<option value="Morena">Morena</option>
<option value="Narsimhapur">Narsimhapur</option>
<option value="Neemuch">Neemuch</option>
<option value="Panna">Panna</option>
<option value="Raisen">Raisen</option>
<option value="Rajgarh">Rajgarh</option>
<option value="Ratlam">Ratlam</option>
<option value="Rewa">Rewa</option>
<option value="Sagar">Sagar</option>
<option value="Satna">Satna</option>
<option value="Sehore">Sehore</option>
<option value="Seoni">Seoni</option>
<option value="Shahdol">Shahdol</option>
<option value="Shajapur">Shajapur</option>
<option value="Sheopur">Sheopur</option>
<option value="Shivpuri">Shivpuri</option>
<option value="Sidhi">Sidhi</option>
<option value="Singrauli">Singrauli</option>
<option value="Tikamgarh">Tikamgarh</option>
<option value="Ujjain">Ujjain</option>
<option value="Umaria">Umaria</option>
<option value="Vidisha">Vidisha</option>
<option value="West Nimar">West Nimar</option>
<option value="Ahmadnagar">Ahmadnagar</option>
<option value="Akola">Akola</option>
<option value="Amravati">Amravati</option>
<option value="Aurangabad">Aurangabad</option>
<option value="Bhandara">Bhandara</option>
<option value="Bid">Bid</option>
<option value="Buldana">Buldana</option>
<option value="Chandrapur">Chandrapur</option>
<option value="Dhule">Dhule</option>
<option value="Gadchiroli">Gadchiroli</option>
<option value="Gondiya">Gondiya</option>
<option value="Hingoli">Hingoli</option>
<option value="Jalgaon">Jalgaon</option>
<option value="Jalna">Jalna</option>
<option value="Kolhapur">Kolhapur</option>
<option value="Latur">Latur</option>
<option value="Mumbai">Mumbai</option>
<option value="Mumbai (Suburban)">Mumbai (Suburban)</option>
<option value="Nagpur">Nagpur</option>
<option value="Nanded">Nanded</option>
<option value="Nandurbar">Nandurbar</option>
<option value="Nashik">Nashik</option>
<option value="Osmanabad">Osmanabad</option>
<option value="Parbhani">Parbhani</option>
<option value="Pune">Pune</option>
<option value="Raigarh">Raigarh</option>
<option value="Ratnagiri">Ratnagiri</option>
<option value="Sangli">Sangli</option>
<option value="Satara">Satara</option>
<option value="Sindhudurg">Sindhudurg</option>
<option value="Solapur">Solapur</option>
<option value="Thane">Thane</option>
<option value="Wardha">Wardha</option>
<option value="Washim">Washim</option>
<option value="Yavatmal">Yavatmal</option>
<option value="Yishnupur">Yishnupur</option>
<option value="Chandel">Chandel</option>
<option value="Churachandpur">Churachandpur</option>
<option value="Imphal East">Imphal East</option>
<option value="Imphal West">Imphal West</option>
<option value="Senapati">Senapati</option>
<option value="Tamenglong">Tamenglong</option>
<option value="Thoubal">Thoubal</option>
<option value="Ukhrul">Ukhrul</option>
<option value="East Garo Hills">East Garo Hills</option>
<option value="East Khasi Hills">East Khasi Hills</option>
<option value="Jaintia Hills">Jaintia Hills</option>
<option value="Ri Bhoi">Ri Bhoi</option>
<option value="South Garo Hills">South Garo Hills</option>
<option value="West Garo Hills">West Garo Hills</option>
<option value="West Khasi Hills">West Khasi Hills</option>
<option value="Aizawl">Aizawl</option>
<option value="Champhai">Champhai</option>
<option value="Kolasib">Kolasib</option>
<option value="Lawngtlai">Lawngtlai</option>
<option value="Lunglei">Lunglei</option>
<option value="Mamit">Mamit</option>
<option value="Saiha">Saiha</option>
<option value="Serchhip">Serchhip</option>
<option value="Simapur">Simapur</option>
<option value="Kiphire">Kiphire</option>
<option value="Kohima">Kohima</option>
<option value="Longleng">Longleng</option>
<option value="Mokokchung">Mokokchung</option>
<option value="Mon">Mon</option>
<option value="Peren">Peren</option>
<option value="Phek">Phek</option>
<option value="Tuensang">Tuensang</option>
<option value="Wokha">Wokha</option>
<option value="Zunheboto">Zunheboto</option>
<option value="Anugul">Anugul</option>
<option value="Balangir">Balangir</option>
<option value="Baleshwar">Baleshwar</option>
<option value="Bargarh">Bargarh</option>
<option value="Baudh">Baudh</option>
<option value="Bhadrak">Bhadrak</option>
<option value="Cuttack">Cuttack</option>
<option value="Debagarh">Debagarh</option>
<option value="Dhenkanal">Dhenkanal</option>
<option value="Gajapati">Gajapati</option>
<option value="Ganjam">Ganjam</option>
<option value="Jagatsinghapur">Jagatsinghapur</option>
<option value="Jajapur">Jajapur</option>
<option value="Jharsuguda">Jharsuguda</option>
<option value="Kalahandi">Kalahandi</option>
<option value="Kandhamal">Kandhamal</option>
<option value="Kendrapara">Kendrapara</option>
<option value="Kendujhar">Kendujhar</option>
<option value="Khordha">Khordha</option>
<option value="Koraput">Koraput</option>
<option value="Malkangiri">Malkangiri</option>
<option value="Mayurbhanj">Mayurbhanj</option>
<option value="Nabarangapur">Nabarangapur</option>
<option value="Nayagarh">Nayagarh</option>
<option value="Nuapada">Nuapada</option>
<option value="Puri">Puri</option>
<option value="Rayagada">Rayagada</option>
<option value="Sambalpur">Sambalpur</option>
<option value="Subarnapur">Subarnapur</option>
<option value="Sundargarh">Sundargarh</option>
<option value="Amritsar">Amritsar</option>
<option value="Barnala">Barnala</option>
<option value="Bathinda">Bathinda</option>
<option value="Faridkot">Faridkot</option>
<option value="Fatehgarh Sahib">Fatehgarh Sahib</option>
<option value="Firozpur">Firozpur</option>
<option value="Gurdaspur">Gurdaspur</option>
<option value="Hoshiarpur">Hoshiarpur</option>
<option value="Jalandhar">Jalandhar</option>
<option value="Kapurthala">Kapurthala</option>
<option value="Ludhiana">Ludhiana</option>
<option value="Mansa">Mansa</option>
<option value="Moga">Moga</option>
<option value="Muktsar">Muktsar</option>
<option value="Patiala">Patiala</option>
<option value="Rupnagar">Rupnagar</option>
<option value="Sahibzada Ajit Singh Nagar">Sahibzada Ajit Singh Nagar</option>
<option value="Sangrur">Sangrur</option>
<option value="Shahid Bhagat Singh Nagar">Shahid Bhagat Singh Nagar</option>
<option value="Tarn Taran">Tarn Taran</option>
<option value="Ajmer">Ajmer</option>
<option value="Alwar">Alwar</option>
<option value="Banswara">Banswara</option>
<option value="Baran">Baran</option>
<option value="Barmer">Barmer</option>
<option value="Bharatpur">Bharatpur</option>
<option value="Bhilwara">Bhilwara</option>
<option value="Bikaner">Bikaner</option>
<option value="Bundi">Bundi</option>
<option value="Chittaurgarh">Chittaurgarh</option>
<option value="Churu">Churu</option>
<option value="Dausa">Dausa</option>
<option value="Dhaulpur">Dhaulpur</option>
<option value="Dungarpur">Dungarpur</option>
<option value="Ganganagar">Ganganagar</option>
<option value="Hanumangarh">Hanumangarh</option>
<option value="Jaipur">Jaipur</option>
<option value="Jaisalmer">Jaisalmer</option>
<option value="Jalor">Jalor</option>
<option value="Jhalawar">Jhalawar</option>
<option value="Jhunjhunun">Jhunjhunun</option>
<option value="Jodhpur">Jodhpur</option>
<option value="Karauli">Karauli</option>
<option value="Kota">Kota</option>
<option value="Nagaur">Nagaur</option>
<option value="Pali">Pali</option>
<option value="Pratapgarh">Pratapgarh</option>
<option value="Rajsamand">Rajsamand</option>
<option value="Sawai Madhopur">Sawai Madhopur</option>
<option value="Sikar">Sikar</option>
<option value="Sirohi">Sirohi</option>
<option value="Tonk">Tonk</option>
<option value="Udaipurr">Udaipur</option>
<option value="Bastr">Bast</option>
<option value="Northr">North</option>
<option value="Southr">South</option>
<option value="Westr">West</option>
<option value="Ariyalurr">Ariyalur</option>
<option value="Chennair">Chennai</option>
<option value="Coimbatorer">Coimbatore</option>
<option value="Cuddalorer">Cuddalore</option>
<option value="Dharmapurir">Dharmapuri</option>
<option value="Dindigulr">Dindigul</option>
<option value="Eroder">Erode</option>
<option value="Kancheepuram">Kancheepuram</option>
<option value="Kanniyakumari">Kanniyakumari</option>
<option value="Karur">Karur</option>
<option value="Krishnagiri">Krishnagiri</option>
<option value="Madurai">Madurai</option>
<option value="Nagapattinam">Nagapattinam</option>
<option value="Namakkal">Namakkal</option>
<option value="Perambalur">Perambalur</option>
<option value="Pudukkottai">Pudukkottai</option>
<option value="Ramanathapuram">Ramanathapuram</option>
<option value="Salem">Salem</option>
<option value="Sivaganga">Sivaganga</option>
<option value="Thanjavu">Thanjavu</option>
<option value="The Nilgiris">The Nilgiris</option>
<option value="Theni">Theni</option>
<option value="Thiruvallur">Thiruvallur</option>
<option value="Thiruvarur">Thiruvarur</option>
<option value="Tiruchirappalli">Tiruchirappalli</option>
<option value="Tirunelveli">Tirunelveli</option>
<option value="Tiruppur">Tiruppur</option>
<option value="Tiruvanamalai">Tiruvanamalai</option>
<option value="Toothukudr">Toothukudr</option>
<option value="Vellore">Vellore</option>
<option value="Viluppuram">Viluppuram</option>
<option value="Virudhunagar">Virudhunagar</option>
<option value="Adilabad">Adilabad</option>
<option value="Hyderabad">Hyderabad</option>
<option value="Karimnagar">Karimnagar</option>
<option value="Khammam">Khammam</option>
<option value="Mahbubnagar">Mahbubnagar</option>
<option value="Medak">Medak</option>
<option value="Nalgonda">Nalgonda</option>
<option value="Nizamabad">Nizamabad</option>
<option value="Rangareddi">Rangareddi</option>
<option value="Warangal">Warangal</option>
<option value="halai">halai</option>
<option value="North Tripura">North Tripura</option>
<option value="South Tripura">South Tripura</option>
<option value="West Tripura">West Tripura</option>
<option value="Agra">Agra</option>
<option value="Aligarh">Aligarh</option>
<option value="Allahabad">Allahabad</option>
<option value="Ambedkar Nagar">Ambedkar Nagar</option>
<option value="Auraiya">Auraiya</option>
<option value="Azamgarh">Azamgarh</option>
<option value="Baghpat">Baghpat</option>
<option value="Bahraich">Bahraich</option>
<option value="Ballia">Ballia</option>
<option value="Balrampur">Balrampur</option>
<option value="Banda">Banda</option>
<option value="Barabanki">Barabanki</option>
<option value="Bareilly">Bareilly</option>
<option value="Basti">Basti</option>
<option value="Bijnor">Bijnor</option>
<option value="Budaun">Budaun</option>
<option value="Bulandshahar">Bulandshahar</option>
<option value="Chandauli">Chandauli</option>
<option value="Chitrakoot">Chitrakoot</option>
<option value="Deoria">Deoria</option>
<option value="Etah">Etah</option>
<option value="Etawah">Etawah</option>
<option value="Faizabad">Faizabad</option>
<option value="Farrukhabad">Farrukhabad</option>
<option value="Fatehpur">Fatehpur</option>
<option value="Firozabad">Firozabad</option>
<option value="Gautam Buddha Nagar">Gautam Buddha Nagar</option>
<option value="Ghaziabad">Ghaziabad</option>
<option value="Ghazipur">Ghazipur</option>
<option value="Gonda">Gonda</option>
<option value="Gorakhpur">Gorakhpur</option>
<option value="Hamirpur">Hamirpur</option>
<option value="Hardoi">Hardoi</option>
<option value="Jalaun">Jalaun</option>
<option value="Jaunpu">Jaunpu</option>
<option value="Jhansi">Jhansi</option>
<option value="Jyotiba Phule Nagar">Jyotiba Phule Nagar</option>
<option value="Kannauj">Kannauj</option>
<option value="Kanpur Dehat">Kanpur Dehat</option>
<option value="Kanpur Nagar">Kanpur Nagar</option>
<option value="Kanshiram Naga">Kanshiram Nagar</option>
<option value="Kaushambi">Kaushambi</option>
<option value="Kheri">Kheri</option>
<option value="Kushinagar">Kushinagar</option>
<option value="Lalitpur">Lalitpur</option>
<option value="Lucknow">Lucknow</option>
<option value="Mahamaya Nagarr">Mahamaya Nagarr</option>
<option value="Maharajganj">Maharajganj</option>
<option value="Mahoba">Mahoba</option>
<option value="Mainpuri">Mainpuri</option>
<option value="Mathura">Mathura</option>
<option value="Mau">Mau</option>
<option value="Meerut">Meerut</option>
<option value="Mirzapur">Mirzapur</option>
<option value="Moradabad">Moradabad</option>
<option value="Muzaffarnagar">Muzaffarnagar</option>
<option value="Pilibhit">Pilibhit</option>
<option value="Pratapgarh">Pratapgarh</option>
<option value="Rae Bareli">Rae Bareli</option>
<option value="Rampur">Rampur</option>
<option value="Saharanpur">Saharanpur</option>
<option value="Sant Kabir Nagar">Sant Kabir Nagar</option>
<option value="Sant Ravidas Nagar">Sant Ravidas Nagar</option>
<option value="Shahjahanpur">Shahjahanpur</option>
<option value="Shravasti">Shravasti</option>
<option value="Siddharthnagar">Siddharthnagar</option>
<option value="Sitapur">Sitapur</option>
<option value="Sonbhadra">Sonbhadra</option>
<option value="Sultanpur">Sultanpur</option>
<option value="Unnao">Unnao</option>
<option value="Varanasi">Varanasi</option>
<option value="Almora">Almora</option>
<option value="Bageshwar">Bageshwar</option>
<option value="Chamoli">Chamoli</option>
<option value="Champawat">Champawat</option>
<option value="Dehradun">Dehradun</option>
<option value="Garhwal">Garhwal</option>
<option value="Hardwar">Hardwar</option>
<option value="Nainital">Nainital</option>
<option value="Pithoragarh">Pithoragarh</option>
<option value="Rudraprayag">Rudraprayag</option>
<option value="Tehri Garhwal">Tehri Garhwal</option>
<option value="Udham Singh Nagar">Udham Singh Nagar</option>
<option value="Uttarkashi">Uttarkashi</option>
<option value="Bankura">Bankura</option>
<option value="Barddhaman">Barddhaman</option>
<option value="Birbhum">Birbhum</option>
<option value="Dakshin Dinajpur">Dakshin Dinajpur</option>
<option value="Darjiling">Darjiling</option>
<option value="Haora">Haora</option>
<option value="Hugli">Hugli</option>
<option value="Jalpaiguri">Jalpaiguri</option>
<option value="Koch Bihar">Koch Bihar</option>
<option value="Kolkata">Kolkata</option>
<option value="Maldah">Maldah</option>
<option value="Murshidabad">Murshidabad</option>
<option value="Nadia">Nadia</option>
<option value="North Twenty Four Parganas">North Twenty Four Parganas</option>
<option value="Paschim Medinipur">Paschim Medinipur</option>
<option value="Purba Medinipur">Purba Medinipur</option>
<option value="Puruliya">Puruliya</option>
<option value="South Twenty Four Parganas">South Twenty Four Parganas</option>
<option value="Uttar Dinajpur">Uttar Dinajpur</option>                        
                    </select>
                  </div><br>
                  <div class="form-group">
                      <label class="nm" for="ct">City:</label>
                    <input type="text" name="city" class="form-control" id="ct" placeholder="Your City" required>
                  </div><br>
                   
                  <div class="form-group" for="pwd">
                      <label class="nm" >Password:</label>
                    <input type="password" name="pwd1" class="form-control" id="pwd" placeholder="Your Password" required>
                  </div><br>
                  <div class="form-group">
                      <label class="nm" for="cpwd">Confirm Password:</label>
                    <input type="password" name="pwd2" class="form-control" id="cpwd" placeholder="Confirm Password" required>
                    <span id="cp_msg" style="color: red"></span>
                  </div><br>
                   <div class="form-group">
                      <label class="nm" for="cpwd" style="font-size:15px;color:red;">I am 18yrs old</label>&nbsp;&nbsp;
                    <input type="checkbox" name="c_age" id="cbox"  required>
                  </div>
                  <div class="form-group">
                      <label class="nm" for="cpwd"  style="font-size:15px;color:red;">I accept terms&conditions</label>&nbsp;&nbsp;
                    <input type="checkbox" name="c_tnc" id="cbox"  required>
                  </div>
                  <div class="text-center">
                    <input type="submit" name="btn_reg" style="background-color:#3ec1d5;border-radius:10px;" value="SIGN UP">
                    </div><br>
                  Already have an account? <a href="./login.php">Login</a>
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->


  </main><!-- End #main -->
<?php
    
    
    if(isset($_POST['btn_reg'])){
    $string=$_POST[sid];
    $string1=$_POST[pid];
       
    $chars = '';
    $d_id = '';
    for ($index=0;$index<strlen($string);$index++) {
        if(isNumber($string[$index]))
        {
            $s_id .= $string[$index];
        }
        else {
            $chars .= $string[$index];}
    }
    
    for ($index=0;$index<strlen($string1);$index++) {
        if(isNumber($string1[$index]))
        {
            $p_id .= $string1[$index];
        }
        else {
            $chars .= $string1[$index];}
    }

        
    //For Inserting Registration data//
    if($_POST['pwd1']==$_POST['pwd2']){
        //echo "pressed";
                //For Distributers Id Generate//
            function distributerId_generate($chars) 
                {
                  $data = '123456789';
                  return substr(str_shuffle($data), 0, $chars);
                }
            for($x=0; $x<100; $x++)
            {
                //echo $x;
                $d_id=distributerId_generate(6);
                $sqsqqs="SELECT d_id FROM `distributor` WHERE `d_id`='$d_id'";
                $qur=$con->query($sqsqqs);
                if(mysqli_num_rows($qur)==0)
                {
                    break;
                }
            }
            
            $sid_csel="SELECT * FROM `distributor` WHERE `d_id`='$s_id'";
                $qureds=$con->query($sid_csel);
                $cer=$qureds->fetch_assoc();
                if($cer[status]==1){
            
           $reg="INSERT INTO `distributor` (`d_no`, `d_id`, `s_id`, `sname`, `name`, `mobile`, `email`, `city`, `district`, `state`, `password`, `profile_photo`, `yem_wallet_id`, `yem_id_status`, `r_date`, `r_time`, `status`, `block_status`, `block_note`, `a_date`, `a_time`, `withdrawal_wallet`, `tds_wallet`, `admin_wallet`, `yem_wallet`, `pw_1`, `pw_2`, `pw_3`, `pw_4`, `pw_5`, `pw_6`, `pw_7`, `pw_8`, `a_plan`, `a_status`, `p_id`) VALUES (NULL, '$d_id', '$s_id', '$_POST[sname]', '$_POST[name]', '$_POST[mobile]', '$_POST[email]', '$_POST[city]', '$_POST[district]', '$_POST[state]', '$_POST[pwd1]', '', NULL, '', '$date', '$time', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$p_id');";
           
           
           
               if($con->query($reg)===TRUE){
                  echo "<script>location.href='register_success.php?id=$d_id';</script>";
               }else{
                  echo "<script>alert('Registration Fail');location.href='register.php?registration-fail';</script>";
               }
                }else{
            echo "<script>alert('Sponser Not Active');location.href='register.php';
            </script>";
        }
        }else{
            echo "<script>alert('password and Confirm password doesnt matched please try again');location.href='register.php?password doesnt match';
            </script>";
        }
        
    }
?>    

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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  

</body>
<script> $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });</script>
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
    loop:true,
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
</html>