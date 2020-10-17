<!DOCTYPE html>
<html lang="en">
	<?php
  session_start();

if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
  session_destroy();
  header("Location: ../../IKEA E-Restaurant/homepage-static.html");
}
if (isset($_POST['logout'])) {
  header("Location: ../login-signup/php/logout.php");
}
?>
<head>
	<title>Feedback</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" href="../IKEA E-Restaurant/images/ikea-logo3.png" type="image/png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	
	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="../IKEA E-Restaurant/css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="../IKEA E-Restaurant/css/animate.min.css">
	
	<!-- W3School CSS
	================================================= -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="../IKEA E-Restaurant/css/font-awesome.min.css">
	<link rel="stylesheet" href="../IKEA E-Restaurant/css/ionicons.min.css">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="../IKEA E-Restaurant/css/style.css">
	
</head>
	
<style>
* {box-sizing: border-box;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 5s;
  animation-name: fade;
  animation-duration: 5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 2}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 2}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
	
/* NavBar */
#nav-bloc {
  margin-top: 1px;
  z-index: 9999;
}

.navbar{
	margin-bottom: 0px;
}
.navbar-brand{
	font-size: 25px;
	font-weight: bold;
	font-family: 'Source Sans Pro', sans-serif;
	font-weight: 600;
}
.navbar-brand img{
	width: auto;
	max-height: 70px;
}
.navbar-brand{
	padding: 20px 20px;
	margin: 5px 5px 0 0;
}
.navbar .nav{
	padding-top: 20px;
	margin-right: -16px;
	float:right;
}
.nav > li{
	float: left;
	margin-top: 4px;
	font-size: 20px;
	font-weight: 400;
}
.nav > li a:hover{
	background:transparent;
}
.navbar-toggle{
	margin: 12px;
	border: 0px;
}
.navbar-toggle:hover{
	background:transparent!important;
}
.navbar-toggle .icon-bar{
	background-color: rgba(0,0,0,.5);
	width: 26px;
}
.navbar-collapse.in {
overflow-y: visible;
float: left;
width: 100%;
}
.navbar-1 {
  float: right;
}
.site-navigation:first-child {
  float: left;
}
.site-navigation:nth-child(2) {
  float: right;
}
.site-navigation:nth-child(2) a {
  color: #ccc;
  font-size: 85%;
  padding-right: 0px;
}

.site-navigation .nav > .active{
  color: #333;
}

.navbtn {
  background-color: #000000;
  border: none;
  color: white;
  padding: 9px 17px;
  text-align: center;
  font-size: 15px;
  font-weight: 500;
  margin: -20px 1px 0 0;
  opacity: 1;
  transition: 0.3s;
  letter-spacing: 0.15rem;
}
	
.navbtn:hover {opacity: 0.6}
	
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

hr.new1 {
  border: 0.5px solid #c4c4c4;	
}
	
hr.new2 {
  border: 0.5px solid grey;
  opacity: 0.2;
}
</style>
	
<body>
	
<!-- Navigation section
================================================== -->
<div class="bloc l-bloc" id="nav-bloc" style="background: #ffffff">
	<div class="container">
		<nav class="navbar row">
			<div class="navbar-header">
				<a class="navbar-brand" href="../IKEA E-Restaurant/homepage-dynamic.html"><img src="../IKEA E-Restaurant/images/ikea-logo.png" alt="Ikea Logo" style="width: 130px; height: 50px;"></a>
				<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-1">
				<ul class="site-navigation nav">
					<li>
						<a href="../food-order/index.php">HUNGRY?</a>
					</li>
					<li>
						<a href="../book-table/book-table.php">BOOK A TABLE</a>
					</li>
					<li>&emsp;&emsp;</li>
					<li>
						<div class="dropdown">
    					<a href="#" class="fas fa-user-alt dropdown-toggle" style="font-size: 18px; padding-top: 16px" type="button" data-toggle="dropdown"></a>
    						<ul class="dropdown-menu">
      							<li><a href="../customer-page/cust-profile.php" style="letter-spacing: 0.4px; font-size: 14px">My Account</a></li>
	 			 				<li class="divider"></li>
	  							<li><a href="../login-signup/php/logout.php" style="letter-spacing: 0.4px; font-size: 14px">Logout</a></li>
    						</ul>
  						</div>
					</li>				
          		</ul>
			</div>
		</nav>
	</div>
</div>
<!-- Navigation Block END -->

	<div class="container-contact100">
		<div class="wrap-contact100">
			<span class="contact100-form-symbol">
				<img src="images/icons/symbol-01.png" alt="SYMBOL-MAIL">
			</span>
			<?php
			echo'<form action="" method="POST" class="contact100-form validate-form flex-sb flex-w">';
			echo	'<span class="contact100-form-title">';
			echo		'Drop Us Your Feedback';
			echo	'</span>';
			
			echo	'<div class="form-group wrap-input100 rs1 validate-input" data-validate = "Name is required">';
			echo		"<input type='text' name='name' class='input100' placeholder='Name' style='font-size: 16px'>";
			echo		'<span class="focus-input100"></span>';
			echo	'</div>';

			echo	'<div class="form-group wrap-input100 rs1 validate-input" data-validate = "Email is required: a@b.c">';
			echo		"<input type='text' name='email' class='input100' placeholder='Email Address' style='font-size: 16px'>";
			echo		'<span class="focus-input100"></span>';
			echo	'</div>';
	
			echo	'<div class="form-group wrap-input100 validate-input" data-validate = "Message is required">';
			echo		'<textarea name="message" class="input100" placeholder="Write Us A Message"></textarea>';
			echo		'<span class="focus-input100"></span>';
			echo	'</div>';
			echo	'<div class="row"><br>';
            echo    	'<div class="form-group col-sm-12 ">';
            echo        	'<label style="font-family: OpenSans-Regular; letter-spacing: 0.4px; font-size: 16px; display: inline-block">How do you rate your overall experience?					</label>';
			echo				'<p style="color: black; font-family: OpenSans-Regular">';
            echo                	'<label class="radio-inline">';
            echo                    	"<input type='radio' name='experience'  value='bad'>Bad";
			echo					'</label>';
            echo                    '<label class="radio-inline">';
            echo                        "<input type='radio' name='experience'  value='average'>Average ";
            echo                    '</label>';
            echo                    '<label class="radio-inline">';
            echo                        "<input type='radio' name='experience'  value='good'>Good";
            echo                    '</label>';
            echo                '</p>';
            echo        '</div>';
            echo    '</div>';
			
			echo	'<div class="container-contact100-form-btn">';
			echo		'<button type="submit" name="feedbackbutton" class="contact100-form-btn">Send</button>';
			echo	'</div>';
			echo '</form>';
			?>
			<!--</form>-->
		</div>
	</div>

<div id="dropDownSelect1"></div>
	
<!-- Footer section
================================================== -->
	
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.footer{
  background: #152F4F;
	color:white; }
  
.links{
    ul {list-style-type: none;}
    li a{
      color: white;
      transition: color .2s;
    }
 }  

a:hover{
        text-decoration:none;
        color: #949494;
        }
	
.about-company{
    i{font-size: 25px;}
    a{
      color:white;
      transition: color .2s;
      &:hover{color:#949494;}
    }
} 
	
.location{
    i{font-size: 18px;}
}
	
.copyright p{border-top:1px solid rgba(255,255,255,.1);} 
	
</style>

<div class="mt-5 pt-5 pb-5 footer">
<div class="container">
  <div class="row"><br><br>
    <div class="col-lg-5 col-xs-12 about-company">
      <h2 style="font-size: 27px; font-weight: 600; letter-spacing: 0.1rem">Food at IKEA</h2>
      <p class="pr-5 text-white-50" style="font-size: 16px; font-weight: 300; color: #dedede">We want to offer food that’s delicious, sustainable and nutritionally balanced. That’s why we include a variety of more sustainable options at our IKEA Restaurants, IKEA Swedish Food Markets, and IKEA Café. </p><br>
      <p><a href="https://www.facebook.com/IKEAMalaysia"><i class="fab fa-facebook" style="font-size: 20px">&nbsp;&nbsp;</i></a><a href="https://www.instagram.com/ikeamalaysia/"><i class="fab fa-instagram" style="font-size: 20px">&nbsp;&nbsp;</i></a><a href="https://www.linkedin.com/company/ikea-southeast-asia/"><i class="fab fa-linkedin" style="font-size: 20px">&nbsp;&nbsp;</i></a><a href="https://www.youtube.com/user/ikeamalaysia"><i class="fab fa-youtube" style="font-size: 20px">&nbsp;&nbsp;</i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-4" style="font-size: 20px; font-weight: 400; letter-spacing: 0.1rem">Our Company</h4>
        <ul class="m-0 p-0">
          <li><a href="../IKEA E-Restaurant/about-dynamic.html" style="font-size: 17px; font-weight: 300; color: #e6e6e6; letter-spacing: 0.5px">About us</a></li>
          <li><a href="feedback-dynamic.php" style="font-size: 17px; font-weight: 300; color: #e6e6e6; letter-spacing: 0.5px">Feedback</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4" style="font-size: 20px; font-weight: 400; letter-spacing: 0.1rem">Location</h4>
      <p style="font-size: 16px; font-weight: 300; ">2A, Jalan Cochrane, Maluri, 55100 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur, Malaysia.</p>
      <p class="mb-0" style="font-size: 16px; font-weight: 300; color: #e6e6e6"><i class="fas fa-phone-alt">&nbsp;</i><a href="tel:+60379527575">+603-7952 7575</a></p>
      <p style="font-size: 16px; font-weight: 300; color: #e6e6e6"><i class="fas fa-envelope">&nbsp;</i><a href="mailto:customerservice.ikeamy@ikano.asia">customerservice.ikeamy@ikano.asia</a></p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright"><br>
      <p class="" style="color: #dedede"><small class="text-white-50">© Inter IKEA Systems B.V. 1999-2020</small></p><br><br>
    </div>
  </div>
</div>
</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	
<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("nav-bloc");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
	<?php
	$con = mysqli_connect("localhost", "ikea", "ikea", "ikea");
	
	$username = $_SESSION['username']; ///////////////tambah username dalam db
	$name = $_POST['name'];
	$email = $_POST['email'];
	$experience = $_POST['experience'];
	$message = $_POST['message'];
	
	
	if (isset($_POST['feedbackbutton'])) {
		if (!$con) {
			echo  mysqli_connect_error();
			exit;
		}
		$sql = "INSERT INTO `feedback` ( `email`,`name`,`experience`, `message`) VALUES ('$email','$name','$experience', '$message') ";
        $result = mysqli_query($con, $sql);
		
		
		//check if book successful
		if ($result)
			echo '<script>alert("Your feedback has been sent.")</script>';
		else
			echo '<script>alert("Error occured. Please try again.")</script>';
		
		$sql = "SELECT * FROM feedback";
		$result = mysqli_query($con, $sql);
        mysqli_close($con);
        $qry = $result;
	}
?>
</body>
</html>
