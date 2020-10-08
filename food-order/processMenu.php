<?php
include "cart.php";
	
if(isSet($_POST['checkout']))
	{
	addNewMenu();
	echo "<script>";
	echo " alert('Your order has been added.');
		</script>";
	header( "refresh:1; url=orderreceived.php" );
	}
?>