<?php
class viewsanpham
{
	function hienthisp($data)
	{
		include 'template/sanpham.php';
	}
	
	function hienthiform()
	{
		include 'template/hienthiform.php';
	}
	
	function thongbao($thongbao)
	{
		echo $thongbao;
	}
	
	function hienthichitietsp($data)
	{
		foreach($data as $rows)
		{
			include 'template/chitietsanpham.php';
		}
	}
}