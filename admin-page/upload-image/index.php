<?php
if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
    require_once "db.php";
    $imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
	$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
	
	$sql = "INSERT INTO admin(imageType ,imageData)
	VALUES('{$imageProperties['mime']}', '{$imgData}')";
	$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
	if(isset($current_id)) {
		header("Location: listImages.php");
	}
}
}
?>
<HTML>
<HEAD>
<TITLE>Upload Image to MySQL BLOB</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
<form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
<label>Upload Image File:</label><br/>
<input name="userImage" type="file" class="inputFile" />
<input type="submit" value="Submit" class="btnSubmit" />
</form>
	<form method="POST" action="" enctype="multipart/form-data">
                   <div class="text-center">
					<img src="<?php echo "<img src='img/".$row['image']."' >"?>" class="avatar img-circle img-thumbnail" ><br><br>
					<h6>Upload a different photo...</h6>
					<input type="file"  name="userImage" class="text-center center-block file-upload">	
					<div class="form-group">
				     <div class="col-xs-12"><br>
				       <input type='submit' name='upload' class='btn btn-lg btn-success' ><i class='glyphicon glyphicon-ok-sign'></i>
				     </div>
				    </div>
				  </div><br>
					</form>
</div>
</BODY>
</HTML>