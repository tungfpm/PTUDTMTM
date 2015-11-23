<!DOCTYPE html>
<html>
<head>
	<title>Form sản phẩm</title>
</head>
<body>
<form action="formsp.php" name="Tungfpm" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Tên sản phẩm : </td>
			<td><input type="text" size="30" name="fname"></td>
		</tr>
		<tr>
			<td>Hình đại diện : </td>
			<td>
				<input type="file" name="img" size="30">
			</td>
		</tr>
		<tr>
			<td>Số lượng : </td>
			<td><input type="text" size="30" name="fcount"></td>
		</tr>
		<tr>
			<td>Đơn giá : </td>
			<td><input type="text" size="30" name="fprice"></td>
		</tr>		
		<tr>
			<td>Ngày sản xuất : </td>
			<td>
				<select name="fday">
					<?php
						for ($i=1; $i <=31 ; $i++) { 
							echo "<option value='$i'>$i</option>";
						}
					?>
				</select>
				<select name="fmonth">
					<?php
						$months = array(1 =>"Tháng 1" ,2 =>"Tháng 2" ,3 =>"Tháng 3" ,4 =>"Tháng 4" ,5 =>"Tháng 5" ,6 =>"Tháng 6" ,
						7 =>"Tháng 7" ,8 =>"Tháng 8" ,9 =>"Tháng 9" ,10 =>"Tháng 10" ,11 =>"Tháng 11" ,12 =>"Tháng 12" , );
						foreach ($months as $key => $value) {
							echo "<option value='$key'>$value</option>";
						}
					?>
				</select>
				<select name="fyear">
					<?php
						$now = date("Y");
						for ($i=1990; $i <= $now ; $i++) { 
							echo "<option value='$i'>$i</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Khuyển mại : </td>
			<td>
				<input type="radio" name="fkm" value="25%" checked="">25%
				<input type="radio" name="fkm" value="50%">55%
				<input type="radio" name="fkm" value="50%">69%
			</td>
		</tr>
		<tr>
			<td>Loại sản phẩm : </td>
			<td>
				<select name="ftype">
					<option value="Máy tính">Máy tính</option>
					<option value="Điện thoại">Điện thoại</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nhà sản xuất : </td>
			<td>
				<input type="checkbox" name="fproducer[]" value="Apple">Apple
				<input type="checkbox" name="fproducer[]" value="Sam Sung">Sam Sung
				<input type="checkbox" name="fproducer[]" value="Asus">Asus
				<input type="checkbox" name="fproducer[]" value="Sony">Sony
			</td>
		</tr>
		<tr>
			<td>Chi tiết sản phẩm :  </td>
			<td><textarea rows="10" cols="30" name="fdetail"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="fsubmit" value="Đăng ký">
				<input type="reset" name="freset" value="Làm lại">
			</td>
		</tr>
	</table>
</form>
</body>
<?php 
	if(isset($_POST['fsubmit'])){
		$name = $_POST['fname'];
		$count = $_POST['fcount'];
		$price = $_POST['fprice'];
		$day = $_POST['fday'];
		$month = $_POST['fmonth'];
		$year = $_POST['fyear'];
		$km = $_POST['fkm'];
		$type = $_POST['ftype'];
		$detail = $_POST['fdetail'];
		echo "<h2>Thông tin sản phẩm</h2>";
		echo "Tên sản phẩm : $name <br>";
		echo "Số lượng : $count <br>";
		echo "Đơn giá : $price <br>";
		echo "Ngày sản xuất : $day tháng $month năm $year<br>";
		echo "Khuyến mại : $km <br>";
		echo "Loại sản phẩm : $type <br>";
		if (isset($_POST['fproducer'])) {
			$st = $_POST['fproducer'];
			echo "Nhà sản xuất : ";
			foreach ($st as $key => $value) {
				echo "$value  ";
			}
		} else {
			echo "Không có nhà sản xuất";
		}

		echo "<br>Chi tiết sản phẩm : $detail";
		$img_name = $_FILES["img"]["name"];
		$img_type = $_FILES["img"]["type"];
		if($img_name != NULL){			
			if ($img_type == "image/jpeg" || $img_type == "image/png") {
				move_uploaded_file($_FILES["img"]["tmp_name"], "product/".$img_name);
				echo "<h3>Upload Success</h3>";
				echo "Upload: " . $img_name . "<br>";
				echo "Type: " . $img_type . "<br>";
				echo "Size: " . ($_FILES["img"]["size"] / 1024) . " kB<br>";
				echo "Tmp Stored in: " . $_FILES["img"]["tmp_name"] ."<br>";
				$name=$img_name;
				echo "Stored in: .../product/$name <br><br>";	
				echo "<img src ='product/$name' />";
			} else {
				echo "<h3>Not a JPEG or PNG format. Try again</h3>";
			}			
		} else {
			echo "<h3>You have not chosen file</h3>";
		}
	}
?>
</html>
