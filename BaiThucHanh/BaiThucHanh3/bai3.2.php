<!DOCTYPE html>
<html>
<head>
	<title>Bài 3.2</title>
</head>
<body>
<form action="view.php" name="TungfpmForm" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Họ và tên : </td>
			<td><input type="text" size="30" name="fname"></td>
		</tr>
		<tr>
			<td>Số điện thoại : </td>
			<td><input type="tel" size="30" name="fphone"></td>
		</tr>
		<tr>
			<td>Số CMND : </td>
			<td><input type="text" size="30" name="fid"></td>
		</tr>	
		<tr>
			<td>Địa chỉ : </td>
			<td><input type="text" size="30" name="faddress"></td>
		</tr>	
		<tr>
			<td>Email : </td>
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
			<td>Hình ảnh : </td>
			<td>
				<input type="file" name="img" size="30">
			</td>
		</tr>
		<tr>
			<td>Ghi chú cá nhân :  </td>
			<td><textarea rows="10" cols="30" name="fnote"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="Check">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
