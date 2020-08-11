<?php
    $conn = mysqli_connect("localhost", "ikea", "ikea", "ikea");
    if (!$conn) {
        echo  mysqli_connect_error();
        exit;
    }

	$sql = "SELECT imageType,imageData FROM menus WHERE `id` = '". $_GET['id'] . "'";
	$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br>" . mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	header("Content-type: " . $row["imageType"]);

	echo $row["imageData"];
	mysqli_close($conn);
?>		

