<?php
	require ("book.php");
	$ms = $_GET['fmasach'];
	$book = new book;
	$data = $book->get_bookdata($ms);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit book</title>
</head>
<body>
<center>
<form action="edit_book.php?fmasach=<?php echo $data['masach'];?>" name="TungfpmForm" method="post">
<table>	
	<tr>
		<td>Mã sách : </td>
		<td><input type="text" name="fms" size="25" disabled="" value="<?php echo $ms ;?>"/></td>
	</tr>
	<tr>
		<td>Tên sách :</td>
		<td><input type="text" name="fts" size="25" value="<?php echo $data['tensach'] ;?>" /></td>
	</tr>
	<tr>
		<td>Số lượng :</td>
		<td><input type="number" name="fsl" size="25" value="<?php echo $data['soluong'] ;?>" /></td>
	</tr>
	<tr>
		<td>Giá thành :</td>
		<td><input type="number" name="fgt" size="25" value="<?php echo $data['giathanh'] ;?>" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Edit book" /></td>
	</tr>	
</table>
</form>
</center>
</body>
</html>

<?php
$ts = "";
$sl = "";
$gt = "";
if (isset($_POST['submit'])){
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

			if ($book ->check_bk($data['tensach'])) {
				$book->update_book($ms);
				header("location:list_book.php");
				exit();
			} else {
				echo "Tên sách đã tồn tại";
			}
	}
}
?>

