<!DOCTYPE html>
<html>
<head>
	<title>Bài 4.1</title>
</head>
<body>
<form action="bai4.1.php" name="TungfpmForm" method="POST">
	<label>Tên đăng nhập : </label><br>
	<input name="fcontent"><br>
	<input type="submit" name="fa" value="Nhập">
</form>
</body>
</html>

<?php
	$path = "user.txt";
	if (isset($_POST['fa'])) {
		$content = $_POST['fcontent'];
		if ($content != "") {
			$p = fopen($path, "a");
			$content = $content."<br>";
			fwrite($p, $content);
			fclose($p);
			echo "Nhập thành công<br>Các user là : <br><br>";
			$p = fopen($path, "r");
			while (!feof($p)) {
				echo fgets($p)."<br>";
			}
			fclose($p);
		} else {
			echo "Không có nội dung để ghi";
		}
	}
	
?>