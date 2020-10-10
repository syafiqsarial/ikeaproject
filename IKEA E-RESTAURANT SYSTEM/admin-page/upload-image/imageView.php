<?php
    $conn = mysqli_connect("localhost", "ikea", "ikea", "ikea");
    if(isset($_GET['username'])) {
        $sql = "SELECT imageType,imageData FROM admin WHERE `username` = admin";
		echo $sql;
		$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br>" . mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["imageType"]);
        echo $row["imageData"];
	}
	mysqli_close($conn);
?>