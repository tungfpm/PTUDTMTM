<!DOCTYPE html>
<html>
<head>
	<title>Thêm sản phẩm</title>
	<style type="text/css">
		label{
			width: 150px;
			float: left;
		}
	</style>
</head>
<body>
<form action="add.php" name="TungfpmForm" method="POST">
	<label>Mã sản phẩm :</label><input type="text" name="fmsp"><br/>
	<label>Tên sản phẩm :</label><input type="text" name="ftensp"><br/>
	<label> Số lượng :</label><input type="number" name="fsoluong" value="1"><br/>
	<label> Giá thành :</label><input type="text" name="fgiathanh"><br/>
	<label> Time :</label><input type="date" name="fgiathnh"><br/>
	<label>&nbsp</label><input type="submit" name="submit" value="Add">
</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$msp = $_POST['fmsp'];
		$tensp = $_POST['ftensp'];
		$soluong = $_POST['fsoluong'];
		$giathanh = $_POST['fgiathanh'];
		if($msp == NULL || $tensp == NULL || $soluong == NULL || $giathanh == NULL){
			echo "Điền đầy đủ thông tin";
		} else {
			require("config.php");
			$sql_msp = "select * from ttsp where msp = '$msp' and tensp = '$tensp'";
			$query = mysql_query($sql);
			if (mysql_num_rows($query) == 1){
				echo "Mã hoặc tên sản phẩm đã tồn tại";
			} else {
				$sql = "insert into ttsp(msp,tensp,soluong,giathanh) values('$msp','$tensp','$soluong','$giathanh')";
				mysql_query($sql);
				header("location:list.php");
			}
		}
	}
?>