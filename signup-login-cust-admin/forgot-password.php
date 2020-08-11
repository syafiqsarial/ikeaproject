<?php
	if(!empty($_POST["forgot-password"])){
		$conn = mysqli_connect("localhost", "root", "root", "ikea");
		
		$condition = "";
		if(!empty($_POST["email"])) {
			$condition = " email = '" . $_POST["email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "Select * from customers " . $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) {
			require_once("forgot-password-recovery-mail.php");
		} else {
			$error_message = 'No User Found';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Reset Password</title>
  <link rel="icon" href="../IKEA%20E-Restaurant/images/ikea-logo3.png" type="image/png">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<script>
function validate_forgot() {
	if((document.getElementById("email").value == "")) {
		document.getElementById("validation-message").innerHTML = "Email is required!"
		return false;
	}
	return true
}
</script>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5" style="width: 570px; margin: auto;">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row" style="margin: auto;">
           
              <!--<div class="col-lg-6">-->
                <div class="p-5" style="width: 500px; margin: auto;">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2" style="padding-bottom: 13px;">Forgot Your Password?</h1>
                    <p class="mb-4" style="width: 94%; margin: auto;">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                  </div>
                  <form class="user" name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();"></form>
                    <div class="form-group">
					
					
                     <input type="email" class="form-control form-control-user" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <input type="submit" name="forgot-password" class="btn btn-primary btn-user btn-block" value="Reset Password">
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="../Login_v18/signup-cust.php">Create an Account!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="../Login_v18/login-cust.php">Already have an account? Login!</a>
                  </div>
                </div>
          <!--    </div>-->
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
	

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
