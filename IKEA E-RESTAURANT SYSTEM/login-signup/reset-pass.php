<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reset your password</title>
	<link rel="icon" href="images/ikea-logo3.png" type="image/png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/ikea-logo3.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
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
				<form method="post" action="" class="login100-form validate-form" style="padding: 80px 55px 0px 55px;">
					
				  <span class="login100-form-title p-b-43">
				  <a class="navbar-brand"><img src="../IKEA%20E-Restaurant/images/ikea-logo.png" alt="Ikea Logo" style="width: 145px; height: 55px;"></a><br><br>
				  Forgot Password?<br>
				</span>
					<div class="text-center p-b-30">
					<span class="txt3">
							That's okay, it happens! Please enter your email and new password. Check your email once you submitted.
						</span>
					</div><br>
					
					<div class="form-group wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
				  </div>
					
					
					<div class="form-group wrap-input100 validate-input" data-validate="New Password is required">
						<input class="input100" type="password" name="password" id="myInput">
						<span class="focus-input100"></span>
						<span class="label-input100">New Password</span>
					</div>
					<input type="checkbox" onclick="myFunction()">&nbsp;&nbsp;Show Password</input><br><br>
			

					<div class="container-login100-form-btn">
						<button type="submit" onclick="myFunction()" class="login100-form-btn btn btn-dark" name="resetPassword">Reset password</button>	
					
					</div>
					

		      </form>

				<div class="login100-more" style="background-color: #152F4F;">
				</div>
			</div>
		</div>
	</div>
	
	

	
	<!--<script src="php/server.php"></script>-->
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
	<script src="js/main.js"></script>
	
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

<?php
	
	if (isset($_POST['resetPassword'])) {
    $to = $_POST['email'];
    $subject = 'IKEA E-Restaurant Notification | Forget Password';
    $message = '
 
        A request for password change has been activated.
        You can change your password by visiting the link below.
        
         
        Please click this link to reset your password:
        http://localhost/masterfolder_ikea/IKEA%20E-RESTAURANT%20SYSTEM/login-signup/php/verifypassword.php?email='. $_POST['email'].'&password='.$_POST['password'].'
         
        ';
    $headers = 'From: ikeasd02@gmail.com';
    mail($to, $subject, $message, $headers);

	echo "<meta http-equiv='refresh' content='0;url=login-cust.php'>";
	$alert = "Please check your email to get reset password link.";
	echo "<script type='text/javascript'>alert('$alert');</script>";
	
	}

?>