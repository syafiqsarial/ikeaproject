<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Food Menu List</title>
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
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-width: 100%;
}
.table-title h2 {
    margin: 8px 0 0;
    font-size: 22px;
}
.search-box {
    position: relative;        
    float: right;
}
.search-box input {
    height: 34px;
    border-radius: 20px;
    padding-left: 35px;
    border-color: #ddd;
    box-shadow: none;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    position: absolute;
    font-size: 19px;
    top: 8px;
    left: 10px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td button {
    color: #a0a5b1;
    display: inline-block;
 
}
table.table td a.view {
    color: #03A9F4;
}
table.table td button.edit {
    color: #FFC107;
	border: none;
	background-color: Transparent;
}
table.table td button.delete {
    color: #E34724;
	border: none;
	background-color: Transparent;
	
}
table.table td i {
    font-size: 19px;
}    
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 95%;
    width: 30px;
    height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
    padding: 0;
}
.pagination li button {
    border: none;
    font-size: 95%;
    width: 30px;
    height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
    padding: 0;
}
.pagination li a:hover {
    color: #666;
}	
.pagination li.active a {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.active button {
    background: #03A9F4;
}
.pagination li.active button:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 6px;
    font-size: 95%;
}
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

  <title>Food Menu List</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


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
	  
	  <!-- Nav Item - Setting Profile -->
      <li class="nav-item">
        <a class="nav-link" href="adminsetting.php">
          <i class="fas fa-user-circle fa-sm fa-fw mr-2 "></i>
          <span>Profile</span></a>
      </li>
	  
	  <!-- Nav Item - Customer List -->
      <li class="nav-item ">
        <a class="nav-link" href="customerlist.php">
          <i class="fas fa-users fa-sm fa-fw mr-2"></i>
          <span>Customer List</span></a>
      </li>

	  <!-- Nav Item - Menus Updated -->
      <li class="nav-item active">
        <a class="nav-link" href="menusupdated.php">
          <i class="fas fa-utensils fa-sm fa-fw mr-2"></i>
          <span>Food Menu List</span></a>
      </li>
	  
	  <!-- Nav Item - Order List  -->
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
                <a class="dropdown-item" href="adminprofile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
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
          <h1 class="h4 mb-2 text-gray-800">Food Menu List</h1><hr><br>

          <!-- Content Row -->
			
         <div class="row">
			<!-- Dropdown Card Example -->
			 
			<div class="col-xl-12 col-lg-7 ">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold" style="color: #152F4F">Food Menu List</h6>
                  
                </div>
                <!-- Setting Info Body -->
                <div class="card-body">
                <?php
					include "function.php";
					echo '<a href="menus.php" class="btn btn-dark float-right">Add Menu</a> <br>';
					
					$con=mysqli_connect("localhost","root","root","ikea");
					
						if (!$con) {
                        echo  mysqli_connect_error();
                        exit;
						}
					
						$sql = "SELECT * FROM menus";

					    $result = mysqli_query($con, $sql);
						mysqli_close($con);
						$qry = $result;
					
 						//$list = mysqli_num_rows($qry);
					
					    //// display menu info
						echo '<table class="table table-striped table-hover table-bordered">
						<br>
							<thead style="color: #152F4F">
								<tr>
								<th>Name</th>
								<th>Price (RM)</th>
								<th>Description</th>
								<th>Category</th>
								<th>Actions</th>
								
								</tr>
							</thead>';
						$i=1;
						while ($row = mysqli_fetch_assoc($qry)) {
						//$menusIDAlterValue = $row['id'];
						  echo '<tbody><tr>';
                          //echo '<form action="" method="POST">';
                          echo "<td> " . $row['name'] . "";
                          echo "<td> " . $row['price'] . "";
                          echo "<td> " . $row['description'] . "";
                          echo "<td> " . $row['category'] . "";
						  echo '<td><a href="imageView2.php?id='.$row['id'].'" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>';
						  $name = $row['name'];
						  ///////////////////////////////////// to update menu
						  //echo '<td>';
							echo '<form style="display:inline-block" action="updatemenu.php" method="post" >';
							echo   "<input type='hidden' value='$name' name='menuToUpdate'>";
						  	echo   '<button type="submit" name="updatemenu" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i>';
							//echo   '<input type="submit" name="updatemenu" value="Update">';
							echo '</form>';
						  //echo '</td>';
						  ///////////////////////////////////// to delete
						  //echo '<td>';
							echo '<form style="display:inline-block" action="process.php" method="post" >';
							echo 	"<input type='hidden' value='$name' name='menuToDelete'>";
							echo	'<button type="submit" name="deletemenu" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>';
							//echo   '<input type="submit" name="deletemenu" value="Delete">';
							echo '</form>';
					      echo '</td>';
							
						  echo '</tbody></tr>';
							$i++;
						}
						echo '</table>';
					
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