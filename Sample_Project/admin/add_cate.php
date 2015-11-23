<?php
require("../includes/session.php");
require("../includes/config.php");
if(isset($_POST['ok'])){
	$c='';
	if($_POST['txtcate'] == NULL){
		echo "Vui lòng nhập tên chuyên mục <br />";
	}else{
		$c=$_POST['txtcate'];
	}
	

	if($c){

		$sql="select * from cate_news where cate_title='$c'";
		$query=mysql_query($sql);
		if(mysql_num_rows($query) == 1){
			echo "Tên chuyên mục này đã có. Vui lòng chọn tên khác.";
		}else{
			$sql="insert into cate_news(cate_title) values('$c')";
			mysql_query($sql);
			header("location:list_cate.php");
			exit();
		}
	}
}
?>
<form action="add_cate.php" method="post">
Tên chuyên mục: <input type="text" name="txtcate" size="25" /> <br />
<input type="submit" name="ok" value="Submit" />
</form>