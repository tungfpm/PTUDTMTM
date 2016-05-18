<!DOCTYPE html>
<html>
<head>
	<title>Add Book</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	label{
		float: left;
		width: 100px;
	}
</style>
<body>
<form action="add_book.php" name="Tungfpm_Form" method="post">
	<label>Mã sách : </label><input type="text" name="fmasach"><br>
	<label>Tên sách : </label><input type="text" name="ftensach"><br>
	<label>Tác giả : </label><input type="text" name="ftacgia"><br>
	<label>Năm xuất bản : </label>		
		<select name="fthang">
			<?php
				for ($i=1; $i <= 12 ; $i++) { 
					if ($i < 10) {
						echo "<option value='0$i'>0$i</option>";
					} else {
						echo "<option value='$i'>$i</option>";
					}
				}
			?>
		</select>
		 - 
		<select name="fnam">
			<?php
				for ($i=1945; $i <= date("Y") ; $i++) { 
					echo "<option value='$i'>$i</option>";
				}
			?>
		</select>
	<br>
	<label>Nhà XB : </label>
		<select name="fmanhaxb">
			<?php
			require_once("book.php");
			$book = new book;
			$data = $book->list_nhaxb();
			foreach ($data as $item) {
				echo "<option value='$item[manhaXB]'>$item[nhaXB]</option>";
			}
		?>
		</select>		
	<br>
	<label>&nbsp</label><input type="submit" name="submit" value="Add"><br>
</form>
</body>
</html>

<?php
	$ms = $ts = $tg = "";
	if (isset($_POST['submit'])) {
		if ($_POST['fmasach'] == NULL) {
			echo "Mã sách trống.<br>";
		} else {
			$ms = $_POST['fmasach'];
		}
		if ($_POST['ftensach'] == NULL) {
			echo "Tên sách trống.<br>";
		} else {
			$ts = $_POST['ftensach'];
		}
		if ($_POST['ftacgia'] == NULL) {
			echo "Tác giả trống.<br>";
		} else {
			$tg = $_POST['ftacgia'];
		}
		$namxb=$_POST['fthang']."-".$_POST['fnam'];
		$manxb = $_POST['fmanhaxb'];

		if ($ms != "" && $ts != "" && $tg != "") {
			$book->set_masach($ms);
			$book->set_tensach($ts);
			$book->set_tacgia($tg);
			$book->set_namxb($namxb);
			$book->set_manhaxb($manxb);
			if ($book->check_book($ms,$ts)) {
				$book->insert_book();
				header("location:list_book.php");
			} else {
				echo "Mã hoặc tên sách đã tồn tại.<br>";
			}
		}
	}
/* By Tungfpm */
?>