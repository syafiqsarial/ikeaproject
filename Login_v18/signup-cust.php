 <!DOCTYPE html>
<?php include('php/server.php'); ?>
<html lang="en">
<head>
	<title>Sign Up</title>
	<link rel="icon" href="../images/ikea-logo3.png" type="image/png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="IKEA Demo.apps.googleusercontent.com">
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
  height: 50px;
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
	
.wrap-input100 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  align-items: flex-end;
  width: 100%;
  height: 60px;
  position: relative;
  border: 1px solid #e6e6e6;
  border-radius: 10px;
  margin-bottom: 12px;
}

.label-input100 {
  font-family: Montserrat-Regular;
  font-size: 15.5px;
  color: #999999;
  line-height: 1.2;

  display: block;
  position: absolute;
  pointer-events: none;
  width: 100%;
  padding-left: 24px;
  left: 0;
  top: 20px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.input100 {
  display: block;
  width: 100%;
  background: transparent;
  font-family: Montserrat-Regular;
  font-size: 15.5px;
  color: #555555;
  line-height: 1.2;
  padding: 0 26px;
}

input.input100 {
  height: 100%;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}
	
.input100:focus {
  height: 28px;
}

.input100:focus + .focus-input100 + .label-input100 {
  top: 10px;
  font-size: 13px;
}
	
.has-val {
  height: 38px !important;
}

.has-val + .focus-input100 + .label-input100 {
  top: 10px;
  font-size: 13px;
}

</style>
	
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" action="php/server.php" class="login100-form validate-form" style="padding: 40px 55px 0px 55px;">
					<?php include('php/errors.php'); ?>
				  <span class="login100-form-title p-b-43">
					  <a class="navbar-brand"><img src="../IKEA%20E-Restaurant/images/ikea-logo.png" alt="Ikea Logo" style="width: 145px; height: 55px;"></a><br><br>
					  Sign up Account</span>
					
					<div class="form-group wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" value="<?php echo $email; ?>">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
				    </div>
					
					<div class="form-group wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" value="<?php echo $username; ?>">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
				    </div>
					
					<div class="form-group wrap-input100">
						<input class="input100" type="text" name="name" value="<?php echo $name; ?>">
						<span class="focus-input100"></span>
						<span class="label-input100">Full Name</span>
				    </div>
					
					<div class="form-group wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password_1">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					
					<div class="form-group wrap-input100 validate-input" data-validate = "Confirm Password is required">
						<input class="input100" type="password" name="password_2">
						<span class="focus-input100"></span>
						<span class="label-input100">Re-enter Password</span>
				    </div>

					<div class="flex-sb-m w-full p-t-3 p-b-32"></div>
			

					<div class="container-login100-form-btn">
						<input type="submit" formmethod="post" name="reg_user" class="login100-form-btn"></input>
					</div>
				
					<div class="text-center p-t-30 p-b-20">
						<span class="txt2">
							Already a member? <a href="login-cust.php">Login</a>
						</span>
					</div>
					
		      </form>

				<div class="login100-more" style="background-image: url('images/login-bg2.jpg');">
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
	<script src="js/main.js"></script>
	
	
</body>
</html>