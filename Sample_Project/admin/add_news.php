<?php
require("../includes/session.php");
require("../includes/config.php");
if(isset($_POST['ok'])){
	if($_POST['txttitle'] == NULL){
		echo "Vui lòng nhập tiêu đề của bản tin<br />";
	}else{
		$t=$_POST['txttitle'];
	}
	if($_POST['txtauthor'] == NULL){
		echo "Vui lòng nhập tác giả của bản tin <br />";
	}else{
		$a=$_POST['txtauthor'];
	}
	if($_POST['txtinfo'] == NULL){
		echo "Vui lòng nhập mô tả của bản tin<br />";
	}else{
		$i=$_POST['txtinfo'];
	}
	if($_POST['txtfull'] == NULL){
		echo "Vui lòng nhập nội dung chi tiết<br />";
	}else{
		$f=$_POST['txtfull'];
	}
	if($_FILES['img']['name'] != NULL){
		move_uploaded_file($_FILES['img']['tmp_name'],"../data/".$_FILES['img']['name']);
		$img=$_FILES['img']['name'];
	}else{
		$img="none";
	}
	$ca=$_POST['cate'];
	$ch=$_POST['check'];
	$uid=$_SESSION['ses_userid'];
	if($t && $a && $i && $f && $img && $ca && $ch){
		if($img != "none"){
			$sql="insert into news(news_title,news_author,news_info,news_full,news_img,cate_id,news_check,userid) values('$t','$a','$i','$f','$img','$ca','$ch','$uid')";
		}else{
			$sql="insert into news(news_title,news_author,news_info,news_full,cate_id,news_check,userid) values('$t','$a','$i','$f','$ca','$ch','$uid')";
		}
		mysql_query($sql);
		header("location:list_news.php");
		exit();
	
	}

}
?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<form action="add_news.php" method="post" enctype="multipart/form-data">
<table>
	<tr>
		<td>Chuyên mục</td>
		<td><select name="cate">
		<?php
			$sql="select * from cate_news";
			$query=mysql_query($sql);
			while($data=mysql_fetch_assoc($query)){
				echo "<option value='$data[cate_id]'>$data[cate_title]</option>";
			}
		?>
		</select></td>
	</tr>
	<tr>
		<td>Tiêu đề</td>
		<td><input type="text" name="txttitle" size="35" /></td>
	</tr>
	<tr>
		<td>Tác giả</td>
		<td><input type="text" name="txtauthor" size="35" /></td>
	</tr>
	<tr>
		<td>Mô tả</td>
		<td><textarea name="txtinfo" cols="35" rows="5"></textarea></td>
	</tr>
	<tr>
		<td>Chi tiết</td>
		<td><textarea name="txtfull" cols="35" rows="15"></textarea></td>
	</tr>
<script type="text/javascript">
	var editor = CKEDITOR.replace( 'txtfull' );

</script>    
	<tr>
		<td>Kiểm duyệt</td>
		<td><input type="radio" name="check" value="Y" /> Đồng ý 
			<input type="radio" name="check" value="N" checked="checked" /> không đồng ý
	</tr>
	<tr>
		<td>Hình Ảnh</td>
		<td><input type="file" name="img" size="35" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="ok" value="Submit" /></td>
	</tr>
</table>
</form>