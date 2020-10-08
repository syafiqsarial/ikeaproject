<!DOCTYPE html>
<html lang="en">
<?php
  session_start();

if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
  session_destroy();
  header("Location: ../../IKEA E-Restaurant/homepage-static.html");
}
if (isset($_POST['logout'])) {
  header("Location: ../signup-login-cust-admin/logout.php");
}
?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Book A Table</title>
	<link rel="icon" href="../IKEA E-Restaurant/images/ikea-logo3.png" type="image/png">
	
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style-book.css">
	
	<!-- Bootstrap CSS
   ================================================== -->
	<link type="text/css" rel="stylesheet" href="../IKEA E-Restaurant/css/bootstrap.min.css">
	
	<!-- W3School CSS
	================================================= -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="../IKEA E-Restaurant/css/animate.min.css">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="../IKEA E-Restaurant/css/font-awesome.min.css">
	<link rel="stylesheet" href="../IKEA E-Restaurant/css/ionicons.min.css">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="../IKEA E-Restaurant/css/style.css">

	<!-- Google web font 
   ================================================== -->	
  	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet">

</head>
	
<style>

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
      							<li><a href="../customer-page/cust-profile.php" style="letter-spacing: 0.4px; font-size: 16px">My Account</a></li>
	 			 				<li class="divider"></li>
	  							<li><a href="homepage-static.html" style="letter-spacing: 0.4px; font-size: 16px">Logout</a></li>
    						</ul>
  						</div>
					</li>				
          		</ul>
			</div>
		</nav>
	</div>
</div>
<!-- Navigation Block END -->
	
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-push-6">
						<div class="booking-cta">
							<h1>Book Your Table</h1>
							<p>While you’re at the store, take some time to relax and refresh in the IKEA Restaurant. Pop in for a quick snack or stay for a leisurely breakfast, lunch or dinner – the whole family is welcome. To keep the little ones happy we have highchairs, changing areas and a play area, plus FREE baby food with any purchase.
							</p>
						</div>
					</div>
					<div class="col-md-5 col-md-pull-6">
						<?php
						echo	'<div class="booking-form">';
						echo		'<form action="" method="POST">';
						echo			'<div class="form-group">';
						echo				'<span class="form-label">Name</span>';
						echo				"<input type='text' name='name' class='form-control'  required>";
						echo			'</div>';
						echo			'<!--<div class="row">-->';
						echo				'<!--<div class="col-sm-6">-->';
						echo					'<div class="form-group">';
						echo						'<span class="form-label">Email</span>';
						echo						"<input type='email' name='email' class='form-control'  required>";
						echo					'</div>';
						echo				'<!--</div>-->';
						echo				'<!--<div class="col-sm-6">';
						echo					'<div class="form-group">';
						echo						'<span class="form-label">Phone Number</span>';
						echo						"<input type='text' name='phonenumber' class='form-control'  required>";
						echo					'</div>';
						echo				'</div>-->';
						echo			'<!--</div>-->';
						echo			'<div class="form-group">';
						echo				'<span class="form-label">Number of people</span>';
						echo						'<select name="noofpeople" class="form-control">';
						echo						'<option></option>';
						echo						'<option>2</option>';
						echo						'<option>3</option>';
						echo						'<option>4</option>';
						echo						'<option>5</option>';
						echo						'<option>6</option>';
						echo						'<option>7</option>';
						echo						'<option>8</option>';
						echo						'<option>9</option>';
						echo						'<option>10</option>';
						echo						'</select>';
						echo				'<span class="select-arrow"></span>';
						echo			'</div>';
						echo			'<div class="row">';
						echo				'<div class="col-sm-6">';
						echo					'<div class="form-group">';
						echo						'<span class="form-label">Date</span>';
						echo						"<input type='date' name='date' class='form-control'  required>";
						echo					'</div>';
						echo				'</div>';
						echo				'<div class="col-sm-6">';
						echo					'<div class="form-group">';
						echo						'<span class="form-label">Time</span>';
						echo						"<input type='time' name='time' class='form-control' required>";
						echo					'</div>';
						echo				'</div>';
						echo			'</div>';
								
						echo			'<div class="form-group">';
						echo				'<span class="form-label">Special Request</span>';
						echo				'<textarea name="specialrequest" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comments (Optional)"></textarea>';
						echo			'</div>';
						echo			'<div class="form-btn">';
						echo				'<button type="submit" name="booktablebutton" class="submit-btn">Book Table</button>';
						//echo				"<input type='submit' name='booktablebutton' value='Book Table'>";
						echo			'</div>';
						echo			'</form>';
						echo		'</div>';
						
						//echo '<input type="submit" name="addMenu" value="Add Menu"  class="btn btn-primary pull-right" >';
						?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
	
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
      <p class="pr-5 text-white-50" style="font-size: 16px; font-weight: 300; color: #dedede">We want to offer food that’s delicious, sustainable and nutritionally balanced. That’s why we include a variety<br> of more sustainable options at our IKEA Restaurants,<br> IKEA Swedish Food Markets, and IKEA Café. </p><br>
      <p><a href="https://www.facebook.com/IKEAMalaysia"><i class="fab fa-facebook" style="font-size: 20px">&nbsp;&nbsp;</i></a><a href="https://www.instagram.com/ikeamalaysia/"><i class="fab fa-instagram" style="font-size: 20px">&nbsp;&nbsp;</i></a><a href="https://www.linkedin.com/company/ikea-southeast-asia/"><i class="fab fa-linkedin" style="font-size: 20px">&nbsp;&nbsp;</i></a><a href="https://www.youtube.com/user/ikeamalaysia"><i class="fab fa-youtube" style="font-size: 20px">&nbsp;&nbsp;</i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-4" style="font-size: 20px; font-weight: 400; letter-spacing: 0.1rem">Our Company</h4>
        <ul class="m-0 p-0">
          <li><a href="../IKEA E-Restaurant/about-dynamic.html" style="font-size: 17px; font-weight: 300; color: #e6e6e6; letter-spacing: 0.5px">About us</a></li>
          <li><a href="../feedback/feedback-dynamic.php" style="font-size: 17px; font-weight: 300; color: #e6e6e6; letter-spacing: 0.5px">Feedback</a></li>
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

<!-- Javascript 
================================================== -->
<script src="../IKEA E-Restaurant/js/jquery.js"></script>
<script src="../IKEA E-Restaurant/js/bootstrap.min.js"></script>
<script src="../IKEA E-Restaurant/js/isotope.js"></script>
<script src="../IKEA E-Restaurant/js/imagesloaded.min.js"></script>
<script src="../IKEA E-Restaurant/js/wow.min.js"></script>
<script src="../IKEA E-Restaurant/js/custom.js"></script>
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
	$con = mysqli_connect("localhost", "root", "root", "ikea");
	
	$username = $_SESSION['username']; ///////////////tambah username dalam db
	$name = $_POST['name'];
	$email = $_POST['email'];
	$noofpeople = $_POST['noofpeople'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$specialrequest = $_POST['specialrequest'];
	$referenceid = $name.$noofpeople.$date;
	
	if (isset($_POST['booktablebutton'])) {
		if (!$con) {
			echo  mysqli_connect_error();
			exit;
		}
		
		$sql = "INSERT INTO `booktable` (`referenceid`, `username`, `customername`, `customeremail`, `datereserved`, `timereserved` ,`paxnumber`,`messages`) VALUES ('$referenceid', '$username', '$name', '$email', '$date', '$time', '$noofpeople', '$specialrequest') ";
        $result = mysqli_query($con, $sql);
		
		//check if book successful
		if ($result)
			echo '<script>alert("Your booking is successful. Please check your email for your booking reference.")</script>';
		else
			echo '<script>alert("Your booking is failed.")</script>';
		
		//echo $sql;
		$sql = "SELECT * FROM booktable";
		$result = mysqli_query($con, $sql);
        mysqli_close($con);
        $qry = $result;
	}
	
$to = $email;
$subject = 'IKEA E-Restaurant | Booking Table Confirmed';
$message = '

Thank you for booking with us. 
Below is reference for your booking.

Reference ID: '.$referenceid.'
Name: '.$name.'
Date Reserved: '.$date.'
Time Reserved: '.$time.'
Number of People: '.$noofpeople.'
Messages: '.$specialrequest.'
     
';
$headers = 'From: ikeasd02@gmail.com';

mail($to, $subject, $message, $headers);

header('Location: book-confirm.php');
?>
</html>