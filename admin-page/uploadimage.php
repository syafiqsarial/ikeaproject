<?php
$conn = mysqli_connect("localhost", "ikea", "ikea", "ikea");
if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
    //require_once "db.php";
    $imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
	$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
	
	$sql = "INSERT INTO admin(imageType ,imageData)
	VALUES('{$imageProperties['mime']}', '{$imgData}')";
	$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
	if(isset($current_id)) {
		$sql = "SELECT id FROM admin ORDER BY id DESC"; 
        $result = mysqli_query($conn, $sql);
    
        while($row = mysqli_fetch_array($result)) {  
            echo '<img src="imageView.php?image_id= $row["imageId"]" /><br/>';  		
        }
        mysqli_close($conn);     
    }
    if(isset($_GET['image_id'])) {
        $sql = "SELECT imageType,imageData FROM output_images WHERE imageId=" . $_GET['image_id'];
		$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["imageType"]);
        echo $row["imageData"];
	}
	mysqli_close($conn); 
}
}
?>
//<?php
 //echo '<img src="imageView.php?image_id= $row["imageId"]" /><br/>';
//?>