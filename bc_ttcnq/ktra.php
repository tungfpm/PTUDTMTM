<?php
session_start();
if(mysql_connect("localhost", "root", ""))
mysql_select_db("baocao_web");
else 
echo mysql_error();

	
	$u=$_POST['ten'];

	$e=$_POST['mail'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	
	$dc=$_POST['dc'];
	$sdt=$_POST['sdt'];
	$l='3';
	$h='1';
	
		$sql="insert thanhvien(hoten,diachi,email,dienthoai,user,pass,hieuluc,capquyen) values('$u','$dc','$e','$sdt','$user','$pass','$h','$l')";		
		$query=mysql_query($sql);
		$max=mysql_query("select max(user) from thanhvien");
		$row=mysql_fetch_array($max);
		$_SESSION['user']=$row[0];
		echo $_SESSION['user'];
		
		header("location:mua.php");
exit();		
		
									
										
										
						
			
					?>