<?php
//addNewTicket function==================
function addNewOrder()
{
$con = mysqli_connect("localhost","root","root","ikea");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
	
 //collect data from post array
 $custName = $_POST['custName'];
 $custEmail = $_POST['custEmail'];
 $custContact = $_POST['custContact'];
 $orderQuantity = $_POST['orderQuantity'];
 $orderTotal = $_POST['orderTotal'];
 
 $orderID=$_POST['orderID'];
 
 //$_SESSION["cart_item"] as $item){
 //$item_price = $item["quantity"]*$item["price"];
 
 
 
  $sql="INSERT INTO foodorders(orderID, custName, custEmail, custContact, orderQuantity, orderTotal)
	VALUES ('$orderID','$custName','$custEmail','$custContact','$orderQuantity','$orderTotal')";
 
  echo $sql;
	$qry = mysqli_query($con,$sql);
 mysqli_query($con,$sql);
}

//getListOfTicket function ==================
function getListOfOrder()
{
//create connection
$con=mysqli_connect("localhost","root","root","ikea");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from foodorders';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

//delete function ==================
function deleteOrder()
{
$con = mysqli_connect("localhost","root","root","ikea");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

 $orderID = $_POST['orderIDToDelete'];//get selected regNumber to delete
  
  $sql="delete from foodorders where orderID ='".$orderID."'";

	$qry = mysqli_query($con,$sql);

}
/*
//searchByRegNumber function ==================
function findCarByRegNumber()
{
//create connection
$con=mysqli_connect("localhost","web2","web2","cardb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from car where regNumber ="'.$_POST['searchValue'].'"';
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
//findCarByBrand function ==================
function findCarByBrand()
{
//create connection
$con=mysqli_connect("localhost","web2","web2","cardb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from car where brand like '%".$_POST['searchValue']."%'";
echo $sql;
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
function findCarByModel()
{
//create connection
$con=mysqli_connect("localhost","web2","web2","cardb");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from car where model like '%".$_POST['searchValue']."%'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}  */
//============getCarInformation
function getOrderInformation($orderID)
{
//create connection
$con=mysqli_connect("localhost","root","root","ikea");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from foodorders where orderID = '".$orderID."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}
//================updateCarInformation
function updateOrderInformation()
{
//create connection
$con=mysqli_connect("localhost","root","root","ikea");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
//get the data to update
 $custName = $_POST['custName'];
 $custEmail = $_POST['custEmail'];
 $custContact = $_POST['custContact'];
 $orderQuantity = $_POST['orderQuantity'];
 $orderTotal = $_POST['orderTotal'];
 $orderID = $_POST['orderID'];
 
$sql = 'update foodorders SET custName ="'.$custName.'", custEmail = "'.$custEmail.'", custContact = "'.$custContact.'", 
orderQuantity = "'.$orderQuantity.'", orderTotal = "'.$orderTotal.'" WHERE orderID = "'.$orderID.'"';

$qry = mysqli_query($con,$sql);//run query
echo $sql;
return $qry;  //return query
}
/*
//getAvailableCarOnTheseDate function ==================
function getAvailableCarOnTheseDate($startDate ,$endDate)
{
$con = mysqli_connect('localhost','web2','web2','cardb');
 if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 $sqlStr = "select regNumber,brand, model,price from car
where regNumber not in(
(SELECT distinct regNumber from foodordersings";
 $sqlStr .= " where Date_rent_start BETWEEN '".$startDate."' AND '".$endDate."'";
 $sqlStr .= " or Date_rent_end BETWEEN '".$startDate."' AND '".$endDate."'))";
 echo $sqlStr;
 $result = mysqli_query($con,$sqlStr);
 return $result;//if no car available, result will be empty

} */
?>