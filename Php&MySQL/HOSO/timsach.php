
<!DOCTYPE html>
<html>
<head>
	<title>Tìm sách</title>
</head>
<body>
<center>
<form action="timsach.php" name="Tungfpm_Form" method="post">
	<br><br>
	<label>Nhập từ khóa cần tìm : </label>
	<input type="text" size="50" name="fkey"><br><br>
	<input type="submit" name="submit" value="Tìm kiếm">
</form>
</center>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		$k = $_POST['fkey'];
		header("location:list_search.php?ukey=$k");
	}
/* By Tungfpm */
?>