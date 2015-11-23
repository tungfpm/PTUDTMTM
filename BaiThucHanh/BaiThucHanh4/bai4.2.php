<!DOCTYPE html>
<html>
<head>
	<title>Bài 4.2</title>
</head>
<body>
<form action="bai4.2.php" name="TungfpmForm" method="POST">
	<label>Đơn giá (vnđ): </label><input type="text" name="fprice"><br>
	<label>Số lượng : </label><input type="number" name="fcount"><br>
	<input type="submit" name="submit" value="Tính tổng tiền">
</form>
</body>
</html>
<?php
	function total($price,$count){
		if ($price != "" && $count != "") {
			if ($price > 0 && $count > 0) {
				if ($count < 30) {
					$total = ($price*$count) + ($price*$count*0.1);
					echo "Tổng tiền là  : " .$total." (đã bao gồm thuế VAT 10%)";
				} else {
					$total = ($price*$count) + ($price*$count*0.08);
					echo "Tổng tiền là  : " .$total." (đã bao gồm thuế VAT 8%)";
				}				
			} else {
				echo "Đơn giá và số lượng phải lớn hơn 0";
			}
		} else {
			echo "Nhập lại đầy đủ ";
		}
	}

	if (isset($_POST['submit'])) {
		$price = $_POST['fprice'];
		$count = $_POST['fcount'];
		total($price,$count);
	}
?>