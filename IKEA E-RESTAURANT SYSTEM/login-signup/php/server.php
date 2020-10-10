<!DOCTYPE html>
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
		$salt = "codeflix";
		$hash2 = sha1($password_1.$salt);

		// form validation: ensure that the form is correctly filled
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		//$alert = "Please check your email to get verification link.";
		//echo "<script type='text/javascript'>alert('$alert');</script>";
		//randomize md5 address for verification.
    	$hash = md5(rand(0, 1000));
		//$password_1 = md5($password_1);
		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			//$hash2 = ($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO customers (`username`, `name`, `email`, `password`, `usertype`) VALUES('$username', '$name', '$email', '$hash2', '$hash')";
			mysqli_query($db, $query); 
			
			//send email
			
			$to = $email;
			$subject = 'IKEA E-Restaurant SIGN UP | Verification E-mail';
			$message = '

			Thanks for signing up!
			Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
			http://localhost/masterfolder_ikea/IKEA%20E-RESTAURANT%20SYSTEM/login-signup/php/verification.php?email='.$email.'&hash='.$hash.'
			';
			$headers = 'From: ikeasd02@gmail.com';
			mail($to, $subject, $message, $headers);
			
			header('location: ../../login-signup/verifyfirst.php'); //////where did it go after click register button
			
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$salt = "codeflix";
		$hash2 = sha1($password.$salt);
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		
		$query1 = "SELECT * FROM `admin` WHERE username = '" .$_POST['username']. "' and password = '" .$_POST['password']. "'";
		$results1 = mysqli_query($db, $query1);
		$count1 =  mysqli_num_rows($results1);
		$row1 = mysqli_fetch_assoc($results1);
		
		$query2 = "SELECT * FROM `customers` WHERE username = '" .$_POST['username']. "' and password = '" .$hash2. "' ";
		$results2 = mysqli_query($db, $query2);
		$count2 =  mysqli_num_rows($results2);
		$row2 = mysqli_fetch_assoc($results2);
		
		if (count($errors) == 0) {
			//admin login
			if ($count1 == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../../admin-page/indexadmin.php');
			}
			//customer login
			else if($count2 == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../../IKEA E-Restaurant/homepage-dynamic.html');
			}
			else {
				header('location: ../../login-signup/wronginput.php');
			}
		}
	}

?>

</html>