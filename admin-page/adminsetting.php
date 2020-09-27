<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Setting Profile</title>
</head>

<body><!DOCTYPE html>
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
	<style>
		
		a, a:hover{
		  color:#FFFFFF
		}
	</style>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Setting Profile</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	


  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="indexadmin.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin - Dashboard </sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="indexadmin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Utilities
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
		
	  <!-- Nav Item - Profile -->
      <li class="nav-item">
        <a class="nav-link" href="adminprofile.php">
          <i class="fas fa-user fa-sm fa-fw mr-2 "></i>
          <span>Profile</span></a>
      </li>
	  
	  <!-- Nav Item - Setting Profile -->
      <li class="nav-item active">
        <a class="nav-link" href="adminsetting.php">
          <i class="fas fa-user fa-sm fa-fw mr-2 "></i>
          <span>Setting Profile</span></a>
      </li>
	  
	  <!-- Nav Item - Customer List -->
      <li class="nav-item">
        <a class="nav-link" href="customerlist.php">
          <i class="fas fa-table fa-sm fa-fw mr-2"></i>
          <span>Customer List</span></a>
      </li>

      <!-- Nav Item - Menus Add -->
      <!--<li class="nav-item">
        <a class="nav-link" href="menus.php">
          <i class="fas fa-table fa-sm fa-fw mr-2 "></i>
          <span>Menus - Add</span></a>
      </li>-->
	  
	  <!-- Nav Item - Menus Updated -->
      <li class="nav-item">
        <a class="nav-link" href="menusupdated.php">
          <i class="fas fa-table fa-sm fa-fw mr-2"></i>
          <span>Food Menu List</span></a>
      </li>
	  
      <!-- Nav Item - Tables Booking -->
      <li class="nav-item">
        <a class="nav-link" href="tableslist.php">
          <i class="fas fa-table fa-sm fa-fw mr-2"></i>
          <span>Table List</span></a>
      </li>
	  
	  	  <!-- Nav Item - Tables Booking -->
      <li class="nav-item">
        <a class="nav-link" href="bookedtable.php">
          <i class="fas fa-table fa-sm fa-fw mr-2"></i>
          <span>Booked Table</span></a>
      </li>
	  
	  <!-- Nav Item - Feedback Booking -->
      <li class="nav-item">
        <a class="nav-link" href="feedback.php">
          <i class="fas fa-table fa-sm fa-fw mr-2"></i>
          <span>Feedback</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">             
				  <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
				  <?php echo '<img src="imageView.php?username='.$_SESSION['username'].'" class="img-profile rounded-circle">'; ?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="adminprofile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="adminchart.php">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Chart
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="..signup-login-cust-admin/logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Profile</h1>
          <p class="mb-4">Setting admin's profile info.</p>

          <!-- Content Row -->
			
         <div class="row">
			<!-- Dropdown Card Example -->
			 
			<div class="col-xl-12 col-lg-7 ">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Setting Info</h6>
                  
                </div>
                <!-- Setting Info Body -->
                <div class="card-body">
				<?php
					//$con = mysqli_connect("localhost", "ikea", "ikea", "ikea"); 
//					
//					include "function.php";
//					$username=$_POST['adminToUpdate'];
//					$qry = getAdminInformation($username); ///////buat function.php to store all functions
//					$row = mysqli_fetch_assoc($qry);
//					
//					$username = $row['username'];
//					$name = $row['name'];
//					$email =$row['email'];
//					$password =$row['password'];
//					
//					
//					echo '<form action="process.php" method="POST">';
//					
//					  echo '<div class="form-group"><label class="bmd-label-floating">Username</label>';  
//					   echo 	"<input type='text' name='newusername' value='".$row['username']."' class='form-control' required> ";
//					   //echo 	"<input type='text' name='newname' value='$name' class='form-control' required> </div>";
//					   echo     "<input type='hidden' name='username' value='".$row['username']."'> </div>";
//
//					  echo '<div class="form-group"><label class="bmd-label-floating">Name</label>'; 
//					  echo 		"<input type='text' name='name' value='".$row['name']."' class='form-control'> </div>";
//					  //echo 		"<input type='number' name='price' value='$price' class='form-control'> </div>";
//
//					  echo '<div class="form-group"><label class="bmd-label-floating">Email</label>'; 
//					  echo 		"<input type='text' name='email' value='".$row['email']."' class='form-control'> </div>";
//					  //echo 		"<input type='text' name='price' value='$description' class='form-control'> </div>";
//					
//					  echo '<div class="form-group"><label class="bmd-label-floating">Password</label>'; 
//					  echo 		"<input type='text' name='password' value='".$row['password']."' class='form-control'> </div>";
//					  //echo 		"<input type='text' name='price' value='$description' class='form-control'> </div>";
//
//					  echo '<input type="submit" name="updateadmin" value="Update Admin"  class="btn btn-primary pull-right" >';
//					  echo '</form>';
					if (isset($_POST['updatebutton'])) {

                    if (empty($_POST['password'])) {
                      $setChangePWD = $_SESSION['password'];
                    } else {
                      $setChangePWD = $_POST['password'];
                    }


                    if (!empty($_POST['email'])) {
                      $setChangeEMAIL = $_POST['email'];
                    } 
						
					if (!empty($_POST['name'])) {
                      $setChangeNAME = $_POST['name'];
                    } 
						
                    $con = mysqli_connect("localhost", "ikea", "ikea", "ikea");
                    if (!$con) {
                      die("Connection failed: " . mysqli_connect_error());
                      exit();
                    }
                    $sql = "UPDATE `admin` SET  `name` = '" . $setChangeNAME . "',`email` = '" . $setChangeEMAIL . "', `password` = '" . $setChangePWD . "'  WHERE `admin`.`username` = '" . $_SESSION['username'] . "'";
                    $result = mysqli_query($con, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($con), E_USER_ERROR);
						
                    if ($result) {
                      echo "<script type='text/javascript'>alert('Successfull.');</script>";
                    } else {
                      echo "<script type='text/javascript'>alert('Error. Unsuccessful');</script>";
                    }
                    $_SESSION['password'] = $setChangePWD;
                  }

                  $con = mysqli_connect("localhost", "ikea", "ikea", "ikea");
                  if (!$con) {
                    die("Connection failed: " . mysqli_connect_error());
                    exit();
                  }
                  $sql = 'SELECT * FROM admin where username = "' . $_SESSION['username'] . '"';
                  $result = mysqli_query($con, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($con), E_USER_ERROR);
                  $row = mysqli_fetch_assoc($result);
				
				  echo   '<form class="form" action="##" method="post" id="registrationForm">';		 

				  echo       '<div class="form-group">';                       
				  echo            '<div class="col-xs-6">';
				  echo              '<label for="name"><h4>Name</h4></label>';
				  echo                "<input type='name' class='form-control' name='name'  placeholder='".$row['name']."' title='enter your name if any.' value='$name' >";
				  echo            '</div>';
				  echo        '</div>';          
				  echo        '<div class="form-group">';                       
				  echo            '<div class="col-xs-6">';
				  echo                '<label for="email"><h4>Email</h4></label>';
				  echo                "<input type='email' class='form-control' name='email'  placeholder='".$row['email']."' title='enter your email if any.' value='$email' >";
				  echo            '</div>';
				  echo        '</div>' ;
					
				  echo       '<div class="form-group">';
				  echo            '<div class="col-xs-6">';
				  echo               '<label for="password"><h4>Password</h4></label>';
				  echo					'<div class="input-group" id="show_hide_password">';
				  echo                		"<input type='password' class='form-control' name='password'  placeholder='Password' title='enter your password if any.' value='$password' >";
				  echo						'<div class="input-group-append">
                								<button class="btn btn-primary" type="button">
												<i class="fas fa-eye-slash fa-sm aria-hidden="true""></i>
                								</button>
              								</div>';
				  echo 					'</div>';
				  echo            '</div>';
				  echo        '</div>';

				  echo        '<div class="form-group">';
				  echo             '<div class="col-xs-12">';
				  echo                  '<br>';
				  echo 					"<input type='hidden' value='$usernamealter' name='usernamealter'>";
				  echo                	"<input type='submit' name='updatebutton' class='btn btn-lg btn-success' ><i class='glyphicon glyphicon-						ok-sign'></i>";

				  echo             '</div>';
				  echo       '</div>';

				  echo	'</form>';
							//<!--<div class="input-group-append">
////													<a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
////											 </div>-->	
					?> 
                </div>		
              </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../signup-login-cust-admin/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>

</body>
	
	<?php
	function getadmininfo(){
		//create connection
		$con=mysqli_connect("localhost","ikea","ikea","ikea");
		if(!$con)
			{
			echo  mysqli_connect_error(); 
			exit;
			}
		$sql = "select * from admin where username = '".$username."'";

		$qry = mysqli_query($con,$sql);//run query
		return $qry;  //return query
	}
	
      ?>   
	
	<script>
		$(document).ready(function() {
    $("#show_hide_password button").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
	</script>
        
       
</html>

</body>
</html>