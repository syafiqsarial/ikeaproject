<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Customer</title>
<link rel="icon" href="../IKEA E-Restaurant/images/ikea-logo3.png" type="image/png">
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
		
		.btn-dark{
			background-color: #152F4F !important;
			border-color: #152F4F !important;
		}
		
		.text-primary {
			color: #152F4F
		}
</style>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Update Customer</title>

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
    <ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #152F4F">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="indexadmin.php">
        <div class="sidebar-brand-icon">
          <img src="../IKEA%20E-Restaurant/images/ikea-logo.png" alt="logo-ikea" style="width: 75px; height: 28px">
        </div>
        <div class="sidebar-brand-text mx-1">IKEA E-Restaurant</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="indexadmin.php">
          <i class="fas fa-fw fa-chart-line"></i>
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
        <a class="nav-link" href="adminsetting.php">
          <i class="fas fa-user fa-sm fa-fw mr-2 "></i>
          <span>Profile</span></a>
      </li>
	  
	  
	  <!-- Nav Item - Customer List -->
      <li class="nav-item active">
        <a class="nav-link" href="customerlist.php">
          <i class="fas fa-users fa-sm fa-fw mr-2"></i>
          <span>Customer List</span></a>
      </li>
	  
	  <!-- Nav Item - Menus Updated -->
      <li class="nav-item">
        <a class="nav-link" href="menusupdated.php">
          <i class="fas fa-utensils fa-sm fa-fw mr-2"></i>
          <span>Food Menu List</span></a>
      </li>
	  <!-- Nav Item - Orders-->
      <li class="nav-item">
        <a class="nav-link" href="orders.php">
          <i class="fas fa-clipboard-list fa-sm fa-fw mr-2"></i>
          <span>Order List</span></a>
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
          <i class="fas fa-chair fa-sm fa-fw mr-2"></i>
          <span>Booked Table</span></a>
      </li>
	  
	  <!-- Nav Item - Feedback Booking -->
      <li class="nav-item">
        <a class="nav-link" href="feedback.php">
          <i class="fas fa-comments fa-sm fa-fw mr-2"></i>
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
                <button class="btn btn-dark" type="button">
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
                      <button class="btn btn-dark" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
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
                <a class="dropdown-item" href="adminsetting.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="indexadmin.php?logout='1'" data-toggle="modal" data-target="#logoutModal">
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
          <h1 class="h4 mb-2 text-gray-800">Update Existing Customer</h1><hr><br>

          <!-- Content Row -->
			
         <div class="row">
			<!-- Dropdown Card Example -->
			 
			<div class="col-xl-12 col-lg-7 ">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold" style="color: #152F4F">Update Customer</h6>
                  
                </div>
                <!-- Setting Info Body -->
                <div class="card-body">
				<?php
					
					$con = mysqli_connect("localhost", "root", "root", "ikea"); 
					//if (!$con) {
//                        echo  mysqli_connect_error();
//                        exit;
//                      }
//                      $sql = "SELECT * FROM menus";
//
//                      $result = mysqli_query($con, $sql);
//                      mysqli_close($con);
//                      $qry = $result;
					
					include "function.php";
					$username=$_POST['customerToUpdate'];
					$qry = getCustomerInformation($username); ///////buat function.php to store all functions
					$row = mysqli_fetch_assoc($qry);
					
					//assign data to variable
					//$oldname = $_POST['name'];
					//$newname = $_POST['newname'];
					$name = $row['name'];
					$email =$row['email'];
					$phonenumber =$row['phonenumber'];
					
					
					
					
					  echo '<form action="process.php" method="POST">';
					
					  echo '<div class="form-group"><label class="bmd-label-floating" style="font-size: 16px; font-weight: bold">Username</label>';  
					   echo 	"<input type='text' name='newusername' value='".$row['username']."' class='form-control' readonly> ";
					   //echo 	"<input type='text' name='newname' value='$name' class='form-control' required> </div>";
					   echo     "<input type='hidden' name='username' value='".$row['username']."' readonly> </div>";

					  echo '<div class="form-group"><label class="bmd-label-floating" style="font-size: 16px; font-weight: bold">Name</label>'; 
					  echo 		"<input type='text' name='name' value='".$row['name']."' class='form-control'> </div>";
					  //echo 		"<input type='number' name='price' value='$price' class='form-control'> </div>";

					  echo '<div class="form-group"><label class="bmd-label-floating" style="font-size: 16px; font-weight: bold">Email</label>'; 
					  echo 		"<input type='text' name='email' value='".$row['email']."' class='form-control'> </div>";
					  //echo 		"<input type='text' name='price' value='$description' class='form-control'> </div>";
					
					  echo '<div class="form-group"><label class="bmd-label-floating" style="font-size: 16px; font-weight: bold">Phone Number</label>'; 
					  echo 		"<input type='text' name='phonenumber' value='".$row['phonenumber']."' class='form-control'> </div><br>";
					  //echo 		"<input type='text' name='price' value='$description' class='form-control'> </div>";
					  echo             '<div class="col d-flex justify-content-end">';
  					  echo                  '<br>';
					  echo '<input type="submit" name="updatecustomer" value="Update Customer"  class="btn btn-dark pull-right" >';
					  echo '</div></form>';
						?>
                </div>		
              </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

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
          <a class="btn btn-dark" href="../signup-login-cust-admin/logout.php">Logout</a>
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
 
	
        
       
</html>

</body>
</html>