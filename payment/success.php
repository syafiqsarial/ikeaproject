<?php
  if(!empty($_GET['tid'] && !empty($_GET['product']))) {
    $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

    $tid = $GET['tid'];
    $product = $GET['product'];
  } else {
    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Payment Success</title>
	<link rel="icon" href="images/ikea-logo3.png" type="image/png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/ikea-logo3.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login_v18/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login_v18/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login_v18/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login_v18/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Login_v18/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login_v18/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login_v18/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Login_v18/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login_v18/css/util.css">
	<link rel="stylesheet" type="text/css" href="../Login_v18/css/main.css">
<!--===============================================================================================-->
	
<style>
.login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 5	0px;
  border-radius: 10px;
  background-color: #000000 ;

  font-family: Montserrat-Regular;
  font-size: 13.5px;
  font-weight: bold;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;
  letter-spacing: 1px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}
	
.login100-form-btn:hover {
  opacity: 0.8;
}
	
.focus-input100 {
  position: absolute;
  display: block;
  width: calc(100% + 2px);
  height: calc(100% + 2px);
  top: -1px;
  left: -1px;
  pointer-events: none;
  border: 1px solid #c2c2c2;
  border-radius: 10px;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;

  -webkit-transform: scaleX(1.1) scaleY(1.3);
  -moz-transform: scaleX(1.1) scaleY(1.3);
  -ms-transform: scaleX(1.1) scaleY(1.3);
  -o-transform: scaleX(1.1) scaleY(1.3);
  transform: scaleX(1.1) scaleY(1.3);
}

a:hover {
	text-decoration: none;
  color: #999999;
}
.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  background: #f2f2f2;
}

.wrap-login100 {
  width: 100%;
  background: #152F4F;
  overflow: hidden;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  justify-content: center;
}
	
.login100-more {
  width: 100%;
  background-color: #152F4F;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;

}

.login100-more::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(0,0,0,0.1);
}

.txt3 {
  font-family: Montserrat-Regular;
  font-size: 15px;
  font-weight: 500;
  line-height: 1.2;
  letter-spacing: 0.8px;
  color: #4f4f4f;
}

</style>
	
</head>
<body style="background-color: #152F4F">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="../IKEA E-Restaurant/homepage-dynamic.html" class="login100-form validate-form" style="padding: 80px 55px 0px 55px;">
				  <span class="login100-form-title p-b-43">
				  <a class="navbar-brand"><img src="../IKEA%20E-Restaurant/images/ikea-logo.png" alt="Ikea Logo" style="width: 145px; height: 55px;"></a><br><br>
				  Thanks you for purchasing in <br> <?php echo $product; ?> <br>
				  </span>
					<div class="text-center p-b-30">
					<span class="txt3">
						Your transaction ID is <?php echo $tid; ?>
					</span>
						<!--<a href="../../Login_v18/login-cust.php">Click here to login.</a>-->
					</div><br>
					<div class="col d-flex justify-content-center">
                  	<br>
					<input type="submit" name="pay" value="Homepage" class="btn btn-dark pull-right" >
					</div>
					<!--<button type="submit" name="pay" class="btn btn-dark">Order Again</button>-->
					
	<!--				<body>
 <form action="../food-order/index.php"> 
	<div class="container mt-4">
    <h2>Thank you for purchasing <?php //echo $product; ?></h2>
    <hr>
    <p>Your transaction ID is <?php //echo $tid; ?></p>
    <p>Check your email for more info</p>
	<button type="submit" name="pay" class="button">Order Again</button>
    <!--<p><a href="index.php" class="btn btn-light mt-2">Go Back</a></p>-->
  </div>
</body>
		       </form>

				<div class="login100-more" style="background-color: #152F4F;">
				</div>
			</div>
		</div>
	</div>
	
	

	
	<!--<script src="php/server.php"></script>-->
<!--===============================================================================================-->
	<script src="../Login_v18/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login_v18/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login_v18/vendor/bootstrap/js/popper.js"></script>
	<script src="../Login_v18/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login_v18/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../Login_v18/vendor/daterangepicker/moment.min.js"></script>
	<script src="../Login_v18/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../Login_v18/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../Login_v18/js/main.js"></script>
	
	</body>
	
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html>