<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<form action="form.php" name="Tungfpm" method="post">
	<table>
		<tr>
			<td>Tên đăng nhập : </td>
			<td><input type="text" size="30" name="fuser"></td>
		</tr>
		<tr>
			<td>Mật khẩu </td>
			<td><input type="password" size="30" name="fpass"></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><input type="email" size="30" name="femail"></td>
		</tr>
		<tr>
			<td>Giới tính : </td>
			<td>
				<input type="radio" name="fgt" value="Nam" checked="">Nam
				<input type="radio" name="fgt" value="Nữ">Nữ
			</td>
		</tr>
		<tr>
			<td>Ngày sinh : </td>
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
						for ($i=1; $i <=12 ; $i++) { 
							echo "<option value='$i'>$i</option>";
						}
					?>
				</select>
				<select name="fyear">
					<?php
						$now = date("Y");
						for ($i=1990; $i <=$now ; $i++) { 
							echo "<option value='$i'>$i</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Thành phố : </td>
			<td>
				<select name="fdiachi">
					<option value="Thái Nguyên">Thái Nguyên</option>
					<option value="Hà Nội">Hà Nội</option>
					<option value="Thái Bình">Thái Bình</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Sở thích : </td>
			<td>
				<input type="checkbox" name="fst[]" value="Thể thao">Thể thao
				<input type="checkbox" name="fst[]" value="Âm nhạc">Âm nhạc
				<input type="checkbox" name="fst[]" value="Ẩm thực">Ẩm thực
			</td>
		</tr>
		<tr>
			<td>Thông tin thêm :  </td>
			<td><textarea rows="10" cols="30" name="fcmt"></textarea></td>
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
		$user = $_POST['fuser'];
		$pass = $_POST['fpass'];
		$email = $_POST['femail'];
		$gt = $_POST['fgt'];
		$day = $_POST['fday'];
		$month = $_POST['fmonth'];
		$year = $_POST['fyear'];
		$tp = $_POST['fdiachi'];
		$diachi = $_POST['fdiachi'];
		$cmt = $_POST['fcmt'];
		echo "<h2>Thông tin khách hàng</h2>";
		echo "Tên đăng nhập : $user <br>";
		echo "Mật khẩu : $pass <br>";
		echo "Email : $email <br>";
		echo "Giới tính : $gt <br>";
		echo "Sinh ngày $day tháng $month năm $year<br>";
		echo "Địa chỉ : $tp <br>";
		if (isset($_POST['fst'])) {
			$st = $_POST['fst'];
			echo "Sở thích : ";
			foreach ($st as $key => $value) {
				echo "$value  ";
			}
		} else {
			echo "Không chọn sở thích";
		}
		echo "<br>";
		echo "Các thông tin thêm : $cmt";
	}
?>
</html>
