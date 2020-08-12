 <!DOCTYPE html>
<?php include('php/server.php'); ?>
<html lang="en">
<head>
	<title>IKEA Restaurant Sign Up</title>
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
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" action="php/server.php" class="login100-form validate-form">
					<?php include('php/errors.php'); ?>
				  <span class="login100-form-title p-b-43">Sign up Account</span>
					
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