<?php
$db = mysqli_connect("localhost", "ikea", "ikea", "ikea");

// Verify data
$sql = "SELECT * FROM customers where email = '" . $_GET['email'] . "' and usertype ='" . $_GET['hash'] . "'";
echo $sql;
$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result); //check how many matching record - should be 1 if correct
$row = mysqli_fetch_assoc($result);

if ($count == 1) {
$sql = "UPDATE customers SET `usertype` = 'customer' where email = '" . $_GET['email'] . "' and usertype = '" . $_GET['hash'] . "' ";
echo $sql;
$result = mysqli_query($db, $sql);
	if ($result) {
		header('location: ../../login-signup/verifiedemail.php');
	} else {
		header('location: ../../IKEA E-Restaurant/homepage-static.html'); 
	}
		  
}
?>