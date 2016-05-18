<?php
	require_once("book.php");
	$ms = $_GET['ums'];
	$book = new book;
	$data = $book->get_data($ms);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Book</title>
</head>
<style type="text/css">
	label{
		float: left;
		width: 100px;
	}
</style>
<body>
<form action="edit_book.php?ums=<?php echo $data['masach'];?>" name="Tungfpm_Form" method="post">
	<label>Mã sách : </label><input type="text" name="fmasach" disabled="" value="<?php echo $ms;?>"><br>
	<label>Tên sách : </label><input type="text" name="ftensach" value="<?php echo $data['tensach'];?>"><br>
	<label>Tác giả : </label><input type="text" name="ftacgia" value="<?php echo $data['tacgia'];?>"><br>
	<label>Năm xuất bản : </label>
		<select name="fthang">
			<?php
				$str = $data['namXB'];
				$mstr = substr($str, 0, 2);
				$ystr = substr($str, 3,4);

				for ($i = 1; $i <= 12 ; $i++) { 
					if ($i < 10) {
						echo "<option value='0$i'";
							if ($mstr == "0".$i) {
								echo "selected=''";
							}
						echo ">$i</option>";
					} else {
						echo "<option value='$i'";
							if ($mstr == $i) {
								echo "selected=''";
							}
						echo ">$i</option>";
					}
				}
			?>
		</select>
		 - 
		<select name="fnam">
			<?php
				for ($i = 1945; $i <= date("Y") ; $i++) { 
					echo "<option value='$i'";
						if ($ystr == $i) {
							echo "selected=''";
						}
					echo ">$i</option>";
				}
			?>
		</select>
		<br>
	<label>Nhà XB : </label>
		<select name="fmanxb">
			<?php
				$nxb = $book->list_nhaxb();
				foreach ($nxb as $item) {
					echo "<option value='$item[manhaXB]'";
						if ($data['manhaXB'] == $item['manhaXB']) {
							echo "selected=''";
						}
					echo ">$item[nhaXB]</option>";
				}
			?>
		</select>
		<br>
	<label>&nbsp</label><input type="submit" name="submit" value="Edit">
</form>
</body>
</html>
<?php
	$ts = $tg = "";
	if (isset($_POST['submit'])) {
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
		$namxb = $_POST['fthang']."-".$_POST['fnam'];
		$manxb = $_POST['fmanxb'];
		if ($ts != "" && $tg != "") {
			$book->set_masach($ms);
			$book->set_tensach($ts);
			$book->set_tacgia($tg);
			$book->set_namxb($namxb);
			$book->set_manhaxb($manxb);
			if ($book->check_bk($data['tensach'])) {
				$book->update_book($ms);
				header("location:list_book.php");
			} else {
				echo "Trùng tên sách.<br>";
			}
		}
	}
/* By Tungfpm */
?>