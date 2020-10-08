<?php
include "function.php";
//if(isSet($_POST['addCarButton']))
//	{
//	header('Location: carInfo.php');
//	}
//else if(isSet($_POST['saveNewCarButton']))
//	{
//	addNewCar();
//	header('Location: menusupdated.php');
//	}
//else 
	if(isSet($_POST['deletemenu']))
	{
	deleteMenu();
	echo "<script>";
	echo " alert('One food menu has been deleted.');
		</script>";
	header( "refresh:1; url=menusupdated.php" );
	}
else if(isSet($_POST['updatemenu']))
	{
	updateMenuInformation();
	header( "refresh:1; url=menusupdated.php" );
	}
else if(isSet($_POST['updatecustomer']))
	{
	updateCustomerInformation();
	header( "refresh:1; url=customerlist.php" );
	}
else if(isSet($_POST['deletecustomer']))
	{
	deleteCustomer();
	echo "<script>";
	echo " alert('A customer has been deleted.');
		</script>";
	header( "refresh:1; url=customerlist.php" );
	}
else if(isSet($_POST['updatetable']))
	{
	updateTableInformation();
	header( "refresh:1; url=tableslist.php" );
	}
else if(isSet($_POST['deletetable']))
	{
	deleteTable();
	echo "<script>";
	echo " alert('A table has been deleted.');
		</script>";
	header( "refresh:1; url=tableslist.php" );
	}
else if(isSet($_POST['updateadmin']))
	{
	getAdminInformation();
	header( "refresh:1; url=adminsetting.php" );
	}

?>