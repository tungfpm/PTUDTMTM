<?php
	$n = "";
	if (isset($_POST['ktchanle'])) {
		$n = $_POST['fn'];
		if ($n != "") {
			if (is_numeric($n)) {
				if ($n % 2 == 0) {
					echo "$n là số chẵn <br>";
				} else {
					echo "$n là số lẻ <br>";
				}
			} else {
				echo "Must be a number";
			}
		} else {
			echo "Not Empty";
		}
	}
	if (isset($_POST['tinhtong'])) {
		$n = $_POST['fn'];
		if ($n != "") {
			if (is_numeric($n)) {
				$sum = 0;
				for ($i = 1; $i <= $n ; $i++) { 
					$sum += $i;
				}
				echo "Tổng = $sum";
			} else {
				echo "Must be a number";
			}
		} else {
			echo "Not Empty";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bài 4.3</title>
</head>
<body>
<form action="bai4.3.php" name="TungfpmForm" method="POST">
	<label>Nhập vào 1 số : </label>
	<input type="text" name="fn" value="<?php echo $n; ?>">
	<input type="submit" name="ktchanle" value="Kiểm tra chẵn lẻ">
	<input type="submit" name="tinhtong" value="Tính tổng tới nó">
</form>
</body>
</html>