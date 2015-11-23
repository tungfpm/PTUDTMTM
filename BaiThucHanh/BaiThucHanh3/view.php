<?php 
	if(isset($_POST['submit'])){
		$name = $_POST['fname'];
		$phone = $_POST['fphone'];
		$id = $_POST['fid'];
		$address = $_POST['faddress'];
		$gt = $_POST['fgt'];
		$note = $_POST['fnote'];
		$img_name = $_FILES["img"]["name"];
		$img_type = $_FILES["img"]["type"];

		if($name!="" && $phone!="" && $id!="" && $address!="" && $img_name != NULL){	
			if ($name == "Nguyen Hoang Lam" || $id == "8723451") {
				echo "<h2>Sinh viên này chưa đóng học phí cho học kỳ II</h2>";
			}
			echo "<h2>Thông tin vừa nhập</h2>";
			echo "Họ và tên : $name <br>";
			if (is_numeric($phone)) {
				echo "Số điện thoại : $phone <br>";				
			} else {
				echo "Số điện thoại : Not a number <br>́";
			}
			echo "CMND : $id <br>";
			echo "Địa chỉ : $address <br>";
			echo "Giới tính : $gt <br>";
			echo "Ghi chú cả nhân : $note <br>";
			if ($img_type == "image/jpeg") {
				move_uploaded_file($_FILES["img"]["tmp_name"], "images/".$img_name);
				echo "<h3>Upload Success</h3>";
				echo "Upload: " . $img_name . "<br>";
				echo "Type: " . $img_type . "<br>";
				echo "Size: " . ($_FILES["img"]["size"] / 1024) . " kB<br>";
				echo "Tmp Stored in: " . $_FILES["img"]["tmp_name"] ."<br>";
				$name=$img_name;
				echo "Stored in: .../images/$name <br><br>";	
				echo "<img src ='images/$name' />";
			} else {
				echo "<h3>Not a JPEG format. Try again</h3>";
			}			
		} else {
			echo "<h3>Vui lòng nhập đầy đủ thông tin, nhấn Back để thực hiện lại sự việc trên</h3>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>

</body>
</html>