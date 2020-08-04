<?php 
	ob_start();
	session_start();
	print_r($_POST);
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect("localhost", "root", "root", "ikea");
	if (!$db) {
       echo  mysqli_connect_error();
       exit;
    }
	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = ($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO customers (`username`, `name`, `email`, `password`, `usertype`) 
					  VALUES('$username', '$name', '$email', '$password', 'customer')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now signed in";
			header('location: http://localhost/IKEA%20E-System/IKEA%20E-Restaurant/homepage-dynamic.html');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		echo'test';
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		//if (count($errors) == 0) {
			//admin login
			$query = "SELECT * FROM `admin` WHERE username = '" .$_POST['username']. "' and password = '" .$_POST['password']. "'";
			$results = mysqli_query($db, $query) or trigger_error("<b>Error:<br/>" . mysqli_error($db));
			$count =  mysqli_num_rows($results);
			echo $count;
			$row = mysqli_fetch_assoc($results);
			if ($count == 1) {
				echo'test';
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: http://localhost/IKEA%20E-System/admin-page/indexadmin.php');
			}
			//customer login
			$query = "SELECT * FROM `customers` WHERE username = '" .$_POST['username']. "' and password = '" .$_POST['password']. "'";
			$results = mysqli_query($db, $query) or trigger_error("<b>Error:<br/>" . mysqli_error($db));
			$count =  mysqli_num_rows($results);
			echo $count;
			$row = mysqli_fetch_assoc($results);
			if ($count == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: http://localhost/IKEA%20E-System/IKEA%20E-Restaurant/homepage-dynamic.html');
			}
			else {
				array_push($errors, "Wrong username/password combination");
			}
		//}
		
	}

?>