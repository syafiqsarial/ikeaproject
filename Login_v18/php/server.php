<?php
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect("localhost", "ikea", "ikea", "ikea");
	if(!$db){
		echo mysqli_connect_error();
		exit;
	}

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$username = mysqli_real_escape_string($db, $_POST['username']);		
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = ($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO customers (`username`, `name`, `email`, `password`, `usertype`) VALUES('$username', '$name', '$email', '$password', 'customer')";
			mysqli_query($db, $query); 

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: ../../IKEA E-Restaurant/homepage-dynamic.html');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			//admin login
			$query = "SELECT * FROM `admin` WHERE username = '" .$_POST['username']. "' and password = '" .$_POST['password']. "'";
			$results = mysqli_query($db, $query);
			$count =  mysqli_num_rows($results);
			$row = mysqli_fetch_assoc($results);
			if ($count == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../admin-page/indexadmin.php');
			}
			//customer login
			$query = "SELECT * FROM `customers` WHERE username = '" .$_POST['username']. "' and password = '" .$_POST['password']. "'";
			$results = mysqli_query($db, $query);
			$count =  mysqli_num_rows($results);
			$row = mysqli_fetch_assoc($results);
			if ($count == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../IKEA E-Restaurant/homepage-dynamic.html');
			}
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
		
	}

?>