<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form method="post" action="register.php">
                <?php include('errors.php'); ?>
                <div class="form-group">
                
                    <input name="username" value="<?php echo $username; ?>" class="form-control form-control-user" placeholder="Username">
                  
                </div>
                <div class="form-group">
                 
                    <input name="name" value="<?php echo $name; ?>" class="form-control form-control-user" placeholder="Name">
                 
                </div>
                <div class="form-group">
                  <input  name="email" value="<?php echo $email; ?>" class="form-control form-control-user" placeholder="Email Address">
                </div>
                <div class="form-group ">
               
                    <input type="password" name="password_1" class="form-control form-control-user" placeholder="Password">
               
                </div>
                <div class="form-group ">
                 
                    <input type="password" name="password_2" class="form-control form-control-user" placeholder="Repeat Password">
                
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block" name="reg_user">Register Account</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login2.php">Already have an account? Login!</a>
              </div>
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
