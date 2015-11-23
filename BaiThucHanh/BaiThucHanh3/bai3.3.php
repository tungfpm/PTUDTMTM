<!DOCTYPE html>
<html>
<head>
	<title>Bài 3.3</title>
</head>
<body>
<form action="bai3.3.php" name="TungfpmForm" method="POST">
	<label>Đơn giá (vnđ): </label><input type="text" name="fprice"><br>
	<label>Số lượng : </label><input type="number" name="fcount"><br>
	<input type="submit" name="submit" value="Tính tổng tiền">
</form>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		$price = $_POST['fprice'];
		$count = $_POST['fcount'];
		if ($price != "" && $count != "") {
			if ($price > 0 && $count > 0) {
				$total = ($price*$count) + ($price*$count*0.1);
				echo "Tổng tiền là  : " .$total." (đã bao gồm thuế VAT 10%)";
			} else {
				echo "Đơn giá và số lượng phải lớn hơn 0";
			}
		} else {
			echo "Nhập lại đầy đủ ";
		}
	}
?>