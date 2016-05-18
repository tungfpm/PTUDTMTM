<?php
	require_once("student.php");
	$msv = $_GET['uid'];
	$sv = new student;
	$data = $sv->get_data($msv);
?>
<html>
	<head>
		<title>Edit</title>
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
		<form action="edit.php?uid=<?php echo $data['masv']; ?>" name="form" method="post">
			<table><tr><td>
				<p><label>Mã SV : </label><input type="text" name="fmasv" disabled="" value="<?php echo $data['masv']; ?>" ></p>
				<p><label>Tên SV : </label><input type="text" name="ftensv" value="<?php echo $data['tensv']; ?>"></p>
				<p><label>Địa chỉ : </label><input type="text" name="fdiachi" value="<?php echo $data['diachi']; ?>"></p>
				<p><label>Năm sinh : </label>
					<select name = "fnamsinh">
						<?php
							for ($i = 1990; $i <= date("Y"); $i++){
								echo "<option value='$i'";
								if ($data['namsinh'] == $i){
									echo " selected='' ";
								}
								echo ">$i</option>";
							}
						?>
					</select>
				</p>
				<p><label>Giới tính : </label>
					<input type="radio" name="fgt" value ="Nam"
						<?php 
							if ($data['gtinh'] == "Nam"){
								echo " checked='' ";
							}
						?>
					>Nam<input type="radio" name="fgt" value = "Nữ"
						<?php 
							if ($data['gtinh'] == "Nữ"){
								echo " checked='' ";
							}
						?>
					>Nữ
				</p>
				<p><label>Lớp : </label><input type="text" name="flop" value="<?php echo $data['lop']; ?>"></p>
				<p><label>&nbsp </label><input type="submit" name="submit" value="Edit"></p>
			</td></tr></table>
		</form>
	</body>
</html>

<?php
	$tsv = $dc = $lop = "";
	if (isset($_POST['submit'])){
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
		if ($tsv != "" && $dc != "" && $lop != ""){
			$sv->set_tensv($tsv);
			$sv->set_diachi($dc);
			$sv->set_namsinh($ns);
			$sv->set_gtinh($gt);
			$sv->set_lop($lop);
				$sv->update($msv);
				header("location:list.php");
		}
	}
?>