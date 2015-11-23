<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
	<form action="upload.php" name="Tungfpm" method="post" enctype="multipart/form-data">
		<label>File name : </label>
		<input type="file" name="img" size="30"><br>
		<input type="submit" name="sm" value="Upload">
	</form>
	<br>
</body>
</html>

<?php
	if(isset($_POST['sm'])){
		if($_FILES["img"]["name"] != NULL){
			
			if ($_FILES["img"]["type"] == "image/jpeg" || $_FILES["img"]["type"] == "image/png") {
				move_uploaded_file($_FILES["img"]["tmp_name"], "data/".$_FILES["img"]["name"]);
				echo "<h3>Upload Success</h3>";
				echo "Upload: " . $_FILES["img"]["name"] . "<br>";
				echo "Type: " . $_FILES["img"]["type"] . "<br>";
				echo "Size: " . ($_FILES["img"]["size"] / 1024) . " kB<br>";
				echo "Tmp Stored in: " . $_FILES["img"]["tmp_name"] ."<br>";
				$name=$_FILES["img"]["name"];
				echo "Stored in: .../data/$name <br><br>";	
				echo "<img src ='data/$name' />";
			} else {
				echo "<h3>Not a JPEG or PNG format. Try again</h3>";
			}			
		} else {
			echo "<h3>You have not chosen file</h3>";
		}
	}
?>