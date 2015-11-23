<!DOCTYPE html>
<html>
<head>
	<title>Write file</title>
</head>
<body>
<form method="POST">
	<label>Nội dung cần ghi vào file : </label><br>
	<textarea name="fcontent" cols="30" rows="5"></textarea><br>
	<input type="submit" name="fw" value="Ghi đè">
	<input type="submit" name="fa" value="Ghi tiếp">
</form>
</body>
</html>

<?php
	$path = "a.txt";
	if (isset($_POST['fw'])) {
		$content = $_POST['fcontent'];
		if ($content != "") {
			$p = fopen($path, "w");
			fwrite($p, $content);
			fclose($p);
			echo "Ghi đè thành công<br>File sau khi ghi là : <br><br>";
			$p = fopen($path, "r");
			while (!feof($p)) {
				echo fgets($p)."<br>";
			}
			fclose($p);
		} else {
			echo "Không có nội dung để ghi";
		}
	}
	if (isset($_POST['fa'])) {
		$content = $_POST['fcontent'];
		if ($content != "") {
			$p = fopen($path, "a");
			fwrite($p, $content);
			fclose($p);
			echo "Ghi tiếp thành công<br>File sau khi ghi là : <br><br>";
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