
<!DOCTYPE html>
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

<head>
    <meta charset="utf-8">
    <title>bs4 edit profile page - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

<style type="text/css">
    body{
    margin-top:20px;
    background:#f8f8f8
  }
</style>

</head>

<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-2 active" href="./overview.html"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Home</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="./users.html"><i class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="./settings.html"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
        </ul>
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
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                    <?php
                      $con = mysqli_connect("localhost", "root", "root", "ikea");
					            if(isset($_POST['upload'])){
						
						          
					
						          if(count($_FILES) > 0) {
						          if(is_uploaded_file($_FILES['image']['tmp_name'])) {
							        //require_once "db.php";
							        $imgData =addslashes(file_get_contents($_FILES['image']['tmp_name']));
							        $imageProperties = getimagesize($_FILES['image']['tmp_name']);
						
							        $sql = "UPDATE `customers` SET `imageData` = '{$imgData}', imageType = '{$imageProperties['mime']}' WHERE `customers`.`username` = '" . $_SESSION['username'] . "'";
							        //$sql = "INSERT INTO admin(imageType ,imageData) VALUES('{$imageProperties['mime']}', '{$imgData}')";
							        $current_id = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
							        if(isset($current_id)) {
								
								      //mysqli_close($conn);     
							        }
							
							        //mysqli_close($conn); 
					          	}
					          	}
						
					            }						
						        ?>

                    <form method="POST" action="" enctype="multipart/form-data">
                    <div class="text-center" >
					          <?php echo '<img src="imageView.php?username='.$_SESSION['username'].'" class="avatar img-circle img-thumbnail">'; ?>
						        <br><br>
                    <!--<input type="file" name="image" class="file-uploader pull-left">-->
					          <!--<input type="file"  name="image" class="text-center center-block file-upload"> <br><br>	-->
					          <div class="form-group">
				     
				            <!--<input type='submit' name='upload' class='btn btn-primary  vertical-center' style="background-color: #c9c9a3; border-color: #bfbf9d">-->
				   
				            </div>
				            </div><br>
					          </form>
                      <!--<span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>-->
                    </div>
                    <input type="file"  name="image" class="text-center center-block file-upload" style="font-size: 12px">
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
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
                    echo    $row['name']; '<h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"></h4>';
                    echo    $row['username']; '<p class="mb-0"></p>';
                    echo    $row['email']; '<p class="mb-0"></p>';
                    echo    $row['phonenumber']; '<p class="mb-0"></p>';
                    ?>
                    <br>
                    <div class="mt-2">
                      <button class="btn btn-primary vertical-center" style="background-color: #c9c9a3; border-color: #bfbf9d; font-size: 15px" type="submit" name='upload'>
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button>
                    </div>
                  </div>
                  <!--<div class="text-center text-sm-right">
                    <span class="badge badge-secondary">administrator</span>
                    <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                  </div>-->
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                          <?php
                            $con = mysqli_connect("localhost", "root", "root", "ikea");
														  if (!$con) {
															  die("Connection failed: " . mysqli_connect_error());
																exit();
															}

														$sql = 'SELECT * FROM `customers` WHERE username = "' . $_SESSION['username'] . '"';
														$result = mysqli_query($con, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($con), E_USER_ERROR);
                            $row = mysqli_fetch_assoc($result);
                            echo   '<form class="form" action="" method="POST" id="registrationForm">';
                            echo    '<div class="form-group">';
                            echo    '<label>Full Name</label>';
                            echo    '<input class="form-control" type="name" name="name" placeholder="John Smith" value='$name'>';
                            echo    '</div>';
                            echo    '</div>';
                            echo    '<div class="col">';
                            echo    '</div>';
                            echo    '</div>';
                            echo    '</div>';
                            echo    '
                        
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <input class="form-control" type="tel" placeholder="Phone Number" value='$phonenumber'>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" name="updatebutton" type="submit" style="background-color: #948757; border-color: #bfbf9d">Update Profile</button>
                      </div>
                    </div>
                  </form>';
                  ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-3 mb-3">
        <div class="card mb-3">
          <div class="card-body">
            <div class="px-xl-3">
              <button class="btn btn-block btn-secondary">
                <i class="fa fa-sign-out"></i>
                <span>Logout</span>
              </button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Support</h6>
            <p class="card-text">Get fast, free help from our friendly assistants.</p>
            <button type="button" class="btn btn-primary">Contact Us</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>