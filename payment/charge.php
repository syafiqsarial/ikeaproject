<?php
  require_once('../vendor/autoload.php');
  session_start();
  //include "../food-order/cart.php";
  //require_once('db.php');

  \Stripe\Stripe::setApiKey('sk_test_51HWE0rCTyg8yPbldnVEey4eWXw2umCkZ7HwQT4iApxIUPhqMa33tnjBnNNF5dtsm9M9V90cvuHkvastGwuBVb7UX00dosUdJNs');

 // Sanitize POST Array ---------In Stripe
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
 $token = $POST['stripeToken'];
 $email = $POST['email'];
 $amountToPay = $POST['amountToPay'];

// Create Customer ---------In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer ---------In Stripe
$charge = \Stripe\Charge::create(array(
  "amount" => $amountToPay,
  "currency" => "myr",
  "description" => "IKEA E-Restaurant System",
  "customer" => $customer->id
));

////////////////-------------insert itnto db
$con = mysqli_connect("localhost","ikea","ikea","ikea");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
	
//collect data from post array
 $custName = $_POST['custName'];
 $custContact = $_POST['custContact']; 
 $orderQuantity = $_POST['orderQuantity'];
 $orderTotal = $_POST['orderTotal'];


 
 //$orderID=$custName.$orderTotal;
 print_r($_SESSION["cart_item"]);
 $foodname =  json_encode($_SESSION["cart_item"]);//------------------- to masukkan dalam db
 foreach($_SESSION["cart_item"] as $itemfood)
		$estring .= $itemfood["name"].' | ';
 //$_SESSION["cart_item"] as $item){
 //$item_price = $item["quantity"]*$item["price"];

  $sql="INSERT INTO orders (orderID, custName, custEmail, custContact, foodname, orderQuantity, orderTotal) 
  VALUES ('$charge->id','$custName','$email','$custContact','$foodname', '$orderQuantity','$orderTotal')";
 
    echo $sql;
	$qry = mysqli_query($con,$sql);
    mysqli_query($con,$sql);
	

$to = $email;
$subject = 'IKEA E-Restaurant | Food Payment Confirmed';
$message = '
Thank you for your purchased. 
Below is reference for your payment.

Amount: RM '.number_format($orderTotal, 2).'

Food Quantity: '.$orderQuantity.'
Description: IKEA E-Restaurant System
Reference ID: '.$charge->id.'
Food Name(s): '.$estring.'
     
';
$headers = 'From: ikeasd02@gmail.com';

mail($to, $subject, $message, $headers);
 
//echo $message;
// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);