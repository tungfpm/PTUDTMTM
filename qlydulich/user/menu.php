<?php
	require 'session.php';
?>

<meta charset=utf-8>
<title>Menu</title>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<style>
body{
    background-color: pink;
}
.menu a{
	text-decoration:none;
}
.menu h1{
	text-align:center;
}
.menu table th,td{
	padding:5px;
}
.menu table th{
	font-size:30px;
}
.tbl {
	width: 700px;
}
.tbl a {
	font-weight: bold;
}
.table {
	width: 300px;
}
</style>
<div class="menu">
	<h1>TRANG QUẢN TRỊ - <a href="../index.php">Trang Chủ</a></h1>
	<br>
	<div class="container tbl">
	<table align="center">
		<tr>
			<td>
				<table  class="table table-hover table-bordered">
					<tr class="info">
					<th>Quản lý thành viên</th>
					</tr>
					<tr>
					<td><a href="list_user.php">Danh sách thành viên</a></td>
					</tr>
					<tr>
					<td><a href="add_user.php">Thêm thành viên</a></td>	
					</tr>
				</table>
			</td>
			<td>
				<table align="center" class="table table-hover table-bordered">
					<tr class="info">
					<th>Quản lý tour du lịch</th>
					</tr>
					<tr>
					<td><a href="list_tour.php">Danh sách tour du lịch</a></td>
					</tr>
					<tr>
					<td><a href="add_tour.php">Thêm tour du lịch</a></td>	
					</tr>
				</table>
			</td>
		</tr>
	</table>
	</div>
</div>