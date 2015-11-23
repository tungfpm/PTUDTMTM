<?php
session_start();
if(mysql_connect("localhost", "root", ""))
mysql_select_db("baocao_web");
else 
echo mysql_error();

	$user=$_SESSION['user'];
	$query=mysql_query("insert into hoadon(user) values('".$user."')");
	if($query)
			{
				foreach($_SESSION['giohang'] as $item)
						{
							$max=mysql_query("select max(mahd) from hoadon");
							$row=mysql_fetch_array($max);
							$mahd=$row[0];
						
							$id=$item['id'];
							
							$soluong=$item['qty'];
							
							$dongia=$item['gia'];
							
							$query=mysql_query("insert into chitiethd(mahd,id,soluong,dongia) values('$mahd','$id','$soluong','$dongia')");
						}
			
			
			header("location:muahang.php");
	exit();
			

			}

	
?>