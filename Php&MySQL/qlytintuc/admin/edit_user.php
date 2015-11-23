<?php
require("../includes/config.php");
require("../includes/session.php");	
$id=$_GET['uid'];
if(isset($_POST['ok'])){
	if($_POST['txtuser'] == NULL){
		echo "Vui lòng nhập tên truy cập của bạn<br />";
	}else{
		$u=$_POST['txtuser'];
	}
	if($_POST['txtpass'] != $_POST['txtpass2']){
		echo "Mật khẩu và xác nhận mật khẩu không chính xác<br />";
	}else{
		if($_POST['txtpass'] != NULL){
			$p=md5($_POST['txtpass']);
		}else{
			$p="none";
		}
	}
	$l=$_POST['level'];
	if($u && $p && $l){
		$sql="select * from user where username='$u' and userid != '$id'";
		$query=mysql_query($sql);
		if(mysql_num_rows($query) == 1){
			echo "Tên truy cập này đã tồn tại, vui lòng chọn lại tên khác";
		}else{
			if($p != "none"){
				$sql="update user set username='$u', password='$p', level='$l' where userid='$id'";
			}else{
				$sql="update user set username='$u', level='$l' where userid='$id'";
			}
			mysql_query($sql);
			header("location:list_user.php");
			exit();
		}
	}
}
$sql="select * from user where userid='$id'";
$query=mysql_query($sql);
$data=mysql_fetch_assoc($query);
?>

<html>
<head>
	<title>Edit User</title>
	<meta charset="UTF-8">
</head>
<body>
<form action="edit_user.php?uid=<?php echo $data['userid'];?>" method="post">
Cấp bậc: <select name="level">
	<option value="1" <?php if($data['level'] == 1) echo "selected"; ?> >Thành viên</option>
	<option value="2" <?php if($data['level'] == 2) echo "selected"; ?>>Quản trị</option>	
	</select><br />
Tên truy cập: <input type="text" name="txtuser" size="25" value="<?php echo $data['username'];?>" /> <br />
Mật khẩu: <input type="password" name="txtpass" size="25" /><br />
Xác nhận mật khẩu: <input type="password" name="txtpass2" size="25" /><br />
<input type="submit" name="ok" value="Submit" />
</form>
</body>
</html>



