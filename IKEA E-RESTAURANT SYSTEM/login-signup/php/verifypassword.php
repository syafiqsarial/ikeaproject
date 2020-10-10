<?php
$con = mysqli_connect("localhost","ikea","ikea","ikea");
if(!$con){
	echo mysqli_connect_error();
	exit;
}

if (isset($_GET['email']) && !empty($_GET['email']) and isset($_GET['password']) && !empty($_GET['password'])) {
	// Verify data
	$sql = "SELECT * FROM customers where email = '" . $_GET['email'] . "'";
	$result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
	$row = mysqli_fetch_assoc($result);
	
	
	if ($count == 1) {
		$password = $_GET['password'];
		$salt = "codeflix";
		$hash = sha1($password.$salt);
		
		$sql = "UPDATE customers SET password = '" . $hash . "' where email = '" . $_GET['email'] . "'";
		$result = mysqli_query($con, $sql)or die(mysqli_error($con));
		if ($result) {
			header("location: ../../login-signup/login-cust.php");
		} 
		else{
			header("location: ../../login-signup/login-cust.php");	
		}		
	} 
	else {
		header("location: ../../login-signup/login-cust.php");
	}
} 
else {
	header("location: ../../login-signup/login-cust.php");
}
?>