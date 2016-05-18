<html>
	<head>
		<title>Add</title>
		<meta charset="utf-8">
		<style type="text/css">
			label{
				float : left;
				width : 100px;
			}
			table{
				border : 1px solid;
				text-align : center;
			}
			td {
				padding-left : 10px;
			}
		</style>
	</head>
	<body>
		<form action="add.php" name="form" method="post">
			<table><tr><td>
				<p><label>Mã SV : </label><input type="text" name="fmasv"></p>
				<p><label>Tên SV : </label><input type="text" name="ftensv"></p>
				<p><label>Địa chỉ : </label><input type="text" name="fdiachi"></p>
				<p><label>Năm sinh : </label>
					<select name = "fnamsinh">
						<?php
							for ($i = 1990; $i <= date("Y"); $i++){
								echo "<option value='$i'>$i</option>";
							}
						?>
					</select>
				</p>
				<p><label>Giới tính : </label>
					<input type="radio" name="fgt" value="Nam" checked="">Nam<input type="radio" name="fgt" value="Nữ">Nữ
				</p>
				<p><label>Lớp : </label><input type="text" name="flop"></p>
				<p><label>&nbsp </label><input type="submit" name="submit" value="Add"></p>
			</td></tr></table>
		</form>
	</body>
</html>

<?php
	require_once("student.php");
	$msv = $tsv = $dc = $lop = "";
	if (isset($_POST['submit'])){
		if($_POST['fmasv'] == NULL){
			echo "Nhập mã sinh viên";
		} else {
			$msv = $_POST['fmasv'];
		}
		if($_POST['ftensv'] == NULL){
			echo "Nhập tên sinh viên";
		} else {
			$tsv = $_POST['ftensv'];
		}
		if($_POST['fdiachi'] == NULL){
			echo "Nhập địa chỉ";
		} else {
			$dc = $_POST['fdiachi'];
		}
		if($_POST['flop'] == NULL){
			echo "Nhập lớp";
		} else {
			$lop = $_POST['flop'];
		}
		$ns = $_POST['fnamsinh'];
		$gt = $_POST['fgt'];
		if ($msv != "" && $tsv != "" && $dc != "" && $lop != "" ){
			$sv = new student;
			$sv->set_masv($msv);
			$sv->set_tensv($tsv);
			$sv->set_diachi($dc);
			$sv->set_namsinh($ns);
			$sv->set_gtinh($gt);
			$sv->set_lop($lop);
			if($sv->check()){
				$sv->insert();
				header("location:list.php");
			} else {
				echo "Mã sinh viên đã tồn tại";
			}
		}
	}
?>