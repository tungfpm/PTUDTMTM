<html>
	<head>
		<title>List</title>
		<meta charset="utf-8">
		<style type="text/css">
			table{
				border : 1px solid;
				text-align : center;
				width : 600px;
				
			}
			tr,td {
				border : 1px solid;
			}
		</style>
		<script>
			function xacnhan(){
				if(!window.confirm("Bạn có muốn xóa sinh viên này ?")){
					return false;
				}
			}
		</script>
	</head>
	<body>
		<table cellspacing="0" align="center">
			<tr>
				<td>Mã SV</td>
				<td>Tên SV</td>
				<td>Địa chỉ</td>
				<td>Năm sinh</td>
				<td>Giới tính</td>
				<td>Lớp</td>
				<td>Action</td>
			</tr>
			<?php
				require_once("student.php");
				$sv = new student;
				$data = $sv->listall();
				if ($data == 0){
					echo "<tr><td colspan='7'>Empty</td></tr>";
				} else {
					foreach($data as $item){
					echo "<tr>";
					echo "<td>$item[masv]</td>";
					echo "<td>$item[tensv]</td>";
					echo "<td>$item[diachi]</td>";
					echo "<td>$item[namsinh]</td>";
					echo "<td>$item[gtinh]</td>";
					echo "<td>$item[lop]</td>";
					echo "<td><a href='edit.php?uid=$item[masv]'>Sửa</a>/<a href='del.php?uid=$item[masv]' onclick=' return xacnhan();'>Xóa</a></td></tr>";
				}
				}					
			?>
		</table>	
	</body>
</html>