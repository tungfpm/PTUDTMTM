<?php
	require("config.php");

	$msp = $_GET['masp'];
	$tensp = $_GET['tensp'];

	if (isset($_POST['submit'])) {
		$m = $msp;
		$t = $_POST['ftensp'];
		$s = $_POST['fsoluong'];
		$g = $_POST['fgiathanh'];

		if ($m == NULL || $t == NULL || $s == NULL || $g == NULL) {
			echo "Điền đầy đủ thông tin";
		} elseif ($s <= 0 || $g <= 0) {
			echo "Số lượng hoặc giá thành phải lớn hơn 0";
		} else {
			if ($t == $tensp) {
				$sql="update ttsp set soluong='$s', giathanh='$g' where msp='$msp' and tensp='$tensp'";
				mysql_query($sql);
				header("location:list.php");
			} else {
				$sql = "select * from ttsp where tensp = '$t' and msp != '$msp'";
				$query = mysql_query($sql);
				if (mysql_num_rows($query) == 1){
					echo "Tên sản phẩm đã tồn tại";
				} else {
					$sql = "update ttsp set tensp ='$t', soluong = '$s', giathanh = '$g' where msp = '$msp'";
					mysql_query($sql);
					header("location:list.php");
				}
			}
			
		}
	}
	$sql = "select * from ttsp where msp = '$msp'";
	$query = mysql_query($sql);
	$data = mysql_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<style type="text/css">
		label{
			width: 150px;
			float: left;
		}
	</style>
</head>
<body>
<form action="edit.php?masp=<?php echo $data['msp']?>&tensp=<?php echo $data['tensp']?>" name="TungfpmForm" method="post">
	<label>Mã sản phẩm</label><input type="text" name="fmsp" disabled="" value="<?php echo $data['msp'];?>"><br/>
	<label>Tên sản phẩm</label><input type="text" name="ftensp" value="<?php echo $data['tensp'];?>"><br/>
	<label>Số lượng</label><input type="number" name="fsoluong" value="<?php echo $data['soluong'];?>"><br/>
	<label>Giá thành</label><input type="text" name="fgiathanh" value="<?php echo $data['giathanh'];?>"><br/>
	<label>&nbsp</label><input type="submit" name="submit" value="Sửa">
</form>
</body>
</html>