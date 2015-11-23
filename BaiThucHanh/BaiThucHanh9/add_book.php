<!DOCTYPE html>
<html>
<head>
	<title>Add book</title>
</head>
<body>
<center>
<form action="add_book.php" name="TungfpmForm" method="post">
<table>	
	<tr>
		<td>Mã sách : </td>
		<td><input type="text" name="fms" size="25" /></td>
	</tr>
	<tr>
		<td>Tên sách :</td>
		<td><input type="text" name="fts" size="25" /></td>
	</tr>
	<tr>
		<td>Số lượng :</td>
		<td><input type="number" name="fsl" size="25" value="1" /></td>
	</tr>
	<tr>
		<td>Giá thành :</td>
		<td><input type="number" name="fgt" size="25" value="1000" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Add book" /></td>
	</tr>	
</table>
<?php
require("book.php");
$ms = "";
$ts = "";
$sl = "";
$gt = "";
if (isset($_POST['submit'])){
	if($_POST['fms'] == NULL) {
		echo "Vui lòng nhập mã sách<br />";
	}else{
		$ms=$_POST['fms'];
	}
	if ($_POST['fts'] == NULL) {
		echo "Vui lòng nhập tên sách<br />";
	} else {
		$ts = ($_POST['fts']);	
	}
	if($_POST['fsl'] == NULL) {
		echo "Vui lòng nhập số lượng<br />";
	}else{
		if ($_POST['fsl'] <= 0) {
			echo "Số lượng phải lớn hơn 0";
		} else {
			$sl=$_POST['fsl'];
		}
	}
	if($_POST['fgt'] == NULL) {
		echo "Vui lòng nhập giá thành<br />";
	}else{
		if ($_POST['fgt'] <= 0) {
			echo "Giá thành phải lớn hơn 0";
		} else {
			$gt=$_POST['fgt'];
		}
	}

	if($ms != "" && $ts != "" && $sl != "" && $gt){
		$book = new book;
			$book->set_masach($ms);
			$book->set_tensach($ts);
			$book->set_soluong($sl);
			$book->set_giathanh($gt);

			if ($book->check_idbook() && $book->check_book()) {
				$book->insert_book();
				header("location:list_book.php");
				exit();
			} else {
				echo "Mã sách hoặc tên sách đã tồn tại";
			}
	}
}
?>
</form>
</center>
</body>
</html>



