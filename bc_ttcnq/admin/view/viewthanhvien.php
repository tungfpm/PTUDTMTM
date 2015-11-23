<?php
class viewthanhvien
{
	function hienthilienhe($data)
	{
		include 'template/lienhe.php';
	}
	
	function thongbao($thongbao)
	{
		echo $thongbao;
	}
	
	function hienthithanhvien($data)
	{
		include 'template/danhsachthanhvien.php';
	}
	
	function hienformsuathanhvien($data)
	{
		include 'template/suathanhvien.php';
	}
}
