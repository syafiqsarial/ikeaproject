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
    <meta charset="utf-8">
    <title>My Account</title>
	<link rel="icon" href="../IKEA E-Restaurant/images/ikea-logo3.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	
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
	
<style>
		
body{
    margin-top:20px;
    background:#f2f2f2;
}
	
	/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
	
/* NavBar */
#nav-bloc {
  	
  z-index: 9999;
}

.navbar{
	margin-bottom: 30px;
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
	padding-top: 10px;
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
</head>
<body>

<!-- Navigation section
================================================== -->
<div class="bloc l-bloc" id="nav-bloc" style="background: #ffffff; margin-top: -30px">
	<div class="container">
		<nav class="navbar row">
			<div class="navbar-header">
				<a class="navbar-brand" href="../IKEA E-Restaurant/homepage-dynamic.html"><img src="../IKEA E-Restaurant/images/ikea-logo.png" alt="Ikea Logo" style="width: 130px; height: 50px"></a>
				<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="">
				<ul class="site-navigation nav">
					<li>
						<a href="../food-order/index.php" style="font-size: 17px; letter-spacing: 0.7px">HUNGRY?</a>&emsp;&emsp;
					</li>
					<li>
						<a href="../book-table/book-table.php" style="font-size: 17px; letter-spacing: 0.2px">BOOK A TABLE</a>&emsp;&emsp;&emsp;
					</li>
					<li>
						<div class="dropdown">
    					<a href="#" class="fas fa-user-alt dropdown-toggle" style="font-size: 18px" type="button" data-toggle="dropdown"></a>
    						<ul class="dropdown-menu">
      							<li><a href="cust-profile.php" style="letter-spacing: 0.4px; font-size: 14px; color: #5c5c5c">&emsp;My Account</a></li>
      							<li class="dropdown-divider"></li>
	  							<li><a href="../login-signup/php/logout.php" style="letter-spacing: 0.4px; font-size: 14px; color: #5c5c5c">&emsp;Logout</a></li>
    						</ul>
  						</div>
					</li>				
          		</ul>
			</div>
		</nav>
	</div>
</div>
<!-- Navigation Block END -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 280px;">
    <div class="card p-3">
      
	  <div class="card-body">
					<?php
					if(isset($_POST['upload'])){
						
						$conn = mysqli_connect("localhost", "root", "root", "ikea");
					
						if(count($_FILES) > 0) {
						if(is_uploaded_file($_FILES['image']['tmp_name'])) {
							//require_once "file:///C|/Users/User/Downloads/db.php";
							$imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
							$imageProperties = getimagesize($_FILES['image']['tmp_name']);
						
							$sql = "UPDATE `customers` SET `imageData` = '{$imgData}', imageType = '{$imageProperties['mime']}' WHERE `customers`.`username` = '" . $_SESSION['username'] . "'";
							//$sql = "INSERT INTO admin(imageType ,imageData) VALUES('{$imageProperties['mime']}', '{$imgData}')";
							$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
							if(isset($current_id)) {
 
							}

						}
						}
						
					}						
						?>
					
					<form method="POST" action="" enctype="multipart/form-data">
                   <div class="text-center" >
					   <?php echo '<img src="imageView.php?username='.$_SESSION['username'].'" class="avatar img-circle img-thumbnail">'; ?>
						<br><br>
				
					<input type="file"  name="image" class="text-center center-block file-upload word-wrap: break-word" style="font-size: 13px"> <br><br>	
					<div class="form-group">
				     
				       <input type='submit' name='upload' class='btn btn-dark vertical-center' style="font-size: 13px; letter-spacing: 0.9px">
				   
				    </div>
				  </div><br>
					</form>
                </div>
    </div>
  </div>

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
				<div class="row">
              	<div class="col-12 col-sm-auto mb-3">
					<div class="mx-auto" style="width: 280px;"></div>
				</div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3" >
                  <div class=" mb-5 mb-sm-0" style="text-align:center">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap" style="letter-spacing: 1.5px; font-size: 22px; font-weight: 500">MY PROFILE</h4>
                  </div>
               
                </div>
              </div>
             
              <ul class="nav nav-tabs">
				<li class="nav-item"><a href="cust-profile.php" class="active nav-link" style="font-size: 15px;">Info</a></li>&ensp;
                <li class="nav-item"><a href="cust-setting.php" class="active nav-link" style="font-size: 15px;">Settings</a></li>&ensp;
				<li class="nav-item"><a href="cust-password.php" class="active nav-link" style="font-size: 15px;">Password Setting</a></li>
              </ul>
			  <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="card-body">
							 <table class="table">
							 <?php
								//create connection								
								$con=mysqli_connect("localhost","root","root","ikea");
								if (!$con) {
								echo  mysqli_connect_error();
								exit;
								}
								
								 $sql = 'SELECT * FROM customers where username = "' . $_SESSION['username'] . '"';

								$result = mysqli_query($con, $sql);
								mysqli_close($con);
								$qry = $result;								                     	
								while ($row = mysqli_fetch_assoc($qry)) {		
									echo '<form>';
									echo '<div class="row" style="padding-left: 50px">';
									echo        '<div class="column">';

									echo         '<div class="col-md-12" align="right" style="color: grey">';      
									echo              'Username  :';                  
									echo         '</div><br>';

									echo         '<div class="col-md-12" align="right" style="color: grey">';      
									echo              'Name  :';                  
									echo         '</div><br>';

									echo          '<div class="col-md-12" align="right" style="color: grey">';       
									echo              'Email  :';                    
									echo         '</div><br>';

									echo          '<div class="col-md-12" align="right" style="color: grey">';       
									echo              'Phone Number  :';                    
									echo         '</div><br>';

									echo       '</div>';

									echo          '<div class="col-md-6" align="left">';   
									echo              $row['username']. '<br><br>'; 
									echo 			  $row['name']. '<br><br>'; 
									echo 			  $row['email']. '<br><br>';
									echo 			  $row['phonenumber']. '<br><br>';
									echo          '</div>';
									echo '</div>';
									echo '</form>';
								}						
							 ?>					 
						</table>
						</div>			 
                    </div>                 
                  </form>

                </div>
              </div>
                  </form>
				  
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

 
  </div>

</div>
</div>
</div>

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
      <p class="pr-5 text-white-50" style="font-size: 15px; font-weight: 20; color: #dedede">We want to offer food that’s delicious, sustainable and nutritionally balanced. That’s why we include a variety of more sustainable options at our IKEA Restaurants, IKEA Swedish Food Markets, and <br>IKEA Café. </p><br>
      <p><a href="https://www.facebook.com/IKEAMalaysia"><i class="fab fa-facebook" style="font-size: 20px">&nbsp;&ensp;</i></a><a href="https://www.instagram.com/ikeamalaysia/"><i class="fab fa-instagram" style="font-size: 20px">&nbsp;&ensp;</i></a><a href="https://www.linkedin.com/company/ikea-southeast-asia/"><i class="fab fa-linkedin" style="font-size: 20px">&nbsp;&ensp;</i></a><a href="https://www.youtube.com/user/ikeamalaysia"><i class="fab fa-youtube" style="font-size: 20px">&nbsp;&ensp;</i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-4" style="font-size: 20px; font-weight: 400; letter-spacing: 0.1rem">Our Company</h4>
        <ul class="m-0 p-0">
          <li><a href="../IKEA E-Restaurant/about-dynamic.html" style="font-size: 16px; font-weight: 300; color: #e6e6e6; letter-spacing: 0.5px">About us</a></li>
          <li><a href="../feedback/feedback-dynamic.php" style="font-size: 16px; font-weight: 300; color: #e6e6e6; letter-spacing: 0.5px">Feedback</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4" style="font-size: 20px; font-weight: 400; letter-spacing: 0.1rem">Location</h4>
      <p style="font-size: 16px; font-weight: 300; ">2A, Jalan Cochrane, Maluri, 55100 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur, Malaysia.</p><br>
      <p class="mb-0" style="font-size: 15px; color: #e6e6e6"><i class="fas fa-phone-alt">&nbsp;&ensp;</i><a href="tel:+60379527575">+603-7952 7575</a></p>
      <p style="font-size: 15px; color: #e6e6e6"><i class="fas fa-envelope">&nbsp;&ensp;</i><a href="mailto:customerservice.ikeamy@ikano.asia">customerservice.ikeamy@ikano.asia</a></p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class="" style="color: #dedede"><small class="text-white-50">© Inter IKEA Systems B.V. 1999-2020</small></p>
    </div>
  </div>
</div>
</div>

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

//</script>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript"></script>

</body>
</html>