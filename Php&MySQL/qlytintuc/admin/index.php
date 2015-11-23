<?php
require("../includes/config.php");
require("../includes/session.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Manage</title>
	<meta charset="UTF-8">
	<link href='style.css' rel='stylesheet' type='text/css' />
</head>
<body>
<table align='center' width='750'>
	<tr>
		<td colspan='7' class='title'>Chào bạn, <?php echo $_SESSION['ses_username'];?> </td>
	</tr>
	<tr>
		<td><a href='add_cate.php'>Thêm chuyên mục</a></td>
		<td><a href='list_cate.php'>Quản lý chuyên mục</a></td>
		<td><a href='add_news.php'>Thêm tin tức</a></td>
		<td><a href='list_news.php'>Quản lý tin tức</a></td>	
		<td><a href='add_user.php'>Thêm thành viên</a></td>
		<td><a href='list_user.php'>Quản lý thành viên</a></td>
	</tr>
    <tr>
    	<td colspan="2"><a href='add_page.php'>Thêm trang</a></td>
    	<td colspan="2"><a href='list_page.php'>Quản lý trang</a></td>  
		<td colspan="2"><a href='logout.php'>Đăng xuất</a></td>              
    </tr>
</table>
</body>
</html>
