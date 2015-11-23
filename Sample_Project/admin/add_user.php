<?php
require("../includes/session.php");
require("../includes/config.php");
if(isset($_POST['ok'])){
	$u=$p=$l='';
	if($_POST['txtuser'] == NULL){
		echo "Vui lòng nhập tên truy cập của bạn <br />";
	}else{
		$u=$_POST['txtuser'];
	}
	if($_POST['txtpass'] == NULL){
		echo "Vui lòng nhập mật khẩu của bạn <br />";
	}else{
		if($_POST['txtpass'] != $_POST['txtpass2']){
			echo "Mật khẩu và xác nhận mật khẩu không chính xác";
		}else{
			$p=md5($_POST['txtpass']);
		}
	}
	$l=$_POST['level'];
	if($u && $p && $l){

		$sql="select * from user where username='$u'";
		$query=mysql_query($sql);
		if(mysql_num_rows($query) == 1){
			echo "Tên truy cập này đã tồn tại. Vui lòng chọn tên khác.";
		}else{
			$sql="insert into user(username,password,level) values('$u','$p','$l')";
			mysql_query($sql);
			header("location:list_user.php");
			exit();
		}
	}
}
?>
<form action="add_user.php" method="post">
Cấp bậc: <select name="level">
	<option value="1">Thành viên</option>
	<option value="2">Quản trị</option>	
	</select><br />
Tên truy cập: <input type="text" name="txtuser" size="25" /> <br />
Mật khẩu: <input type="password" name="txtpass" size="25" /><br />
Xác nhận mật khẩu: <input type="password" name="txtpass2" size="25" /><br />
<input type="submit" name="ok" value="Submit" />
</form>