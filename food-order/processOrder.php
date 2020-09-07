<?php
include "order.php";
//if(isSet($_POST['updateTicket']))
//	{
//		updateOrderInformation();
//		header("refresh:1; url=ticketList.php" );
//	}
//
//if(isSet($_POST['deleteOrder']))
//	{
//	deleteOrder();
//	echo "<script>";
//	echo " alert('Order record has been deleted.');
//		</script>";
//	header( "refresh:1; url=ticketList.php" );
//	}
//	
if(isSet($_POST['checkout']))
	{
	addNewOrder();
	echo "<script>";
	echo " alert('Menu ordered!');
		</script>";
	header( "url=homepage-dynamic.html" );
	}
?>