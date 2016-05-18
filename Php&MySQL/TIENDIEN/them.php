<!DOCTYPE html>
<html>
<head>
	<title>Thêm</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	label{
		float: left;
		width: 100px;
	}
</style>
<body>
<form action="them.php" name="Tungfpm_Form" method="post">
	<label>Mã hóa đơn : </label><input type="text" name="fmahd"><br>
	<label>Phòng : </label>
		<select name="fmaphong">
			<?php
				require_once("hoadon.php");
				$hd = new hoadon;
				$data = $hd->list_phong();
				foreach ($data as $item) {
					echo "<option value='$item[MaPhong]'>$item[TenPhong]</option>";
				}
			?>
		</select>	
	<br>
	<label>Chỉ số đầu: </label><input type="number" name="fcsd" value="1"><br>
	<label>Chỉ số cuối: </label><input type="number" name="fcsc" value="1"><br>
	<label>&nbsp</label><input type="submit" name="submit" value="Thêm"><br>	
</form>
</body>
</html>

<?php
	$mhd = $csd = $csc = "";
	if (isset($_POST['submit'])) {
		if ($_POST['fmahd'] == NULL) {
			echo "Mã hóa đơn trống.<br>";
		} else {
			$mhd = $_POST['fmahd'];
		}
		$mp = $_POST['fmaphong'];
		if($_POST['fsl'] == NULL) {
		echo "Vui lòng nhập số lượng<br />";
		}else{
			if ($_POST['fsl'] <= 0) {
				echo "Số lượng phải lớn hơn 0";
			} else {
				$sl=$_POST['fsl'];
			}
		}
		if ($_POST['fcsd'] == NULL) {
			echo "Chỉ số đầu trống.<br>";
		} else {
			if ($_POST['fcsd'] <= 0) {
				echo "Chỉ số đầu phải lớn hơn 0";
			} else {
				$csd = $_POST['fcsd'];
			}
		}
		if ($_POST['fcsc'] == NULL) {
			echo "Chỉ số cuối trống.<br>";
		} else {
			if ($_POST['fcsc'] <= 0) {
				echo "Chỉ số cuối phải lớn hơn 0";
			} else {
				$csc = $_POST['fcsc'];
			}
		}
		if ($mhd != "" && $csd != "" && $csc != "") {
			$tt = ($csc - $csd) * 500;
			$hd->set_mahd($mhd);
			$hd->set_maphong($mp);
			$hd->set_chisodau($csd);
			$hd->set_chisocuoi($csc);
			$hd->set_thanhtien($tt);
			if ($hd->check_hd()) {
				$hd->insert();
				header("location:hienthi.php");
			} else {
				echo "Mã hóa đơn đã tồn tại.<br>";
			}
		}
	}
/* By Tungfpm */
?>