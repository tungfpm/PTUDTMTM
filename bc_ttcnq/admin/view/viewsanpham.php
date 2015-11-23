<?php
class viewsanpham
{
	function hienthinhomsanpham($data)
	{
		include 'template/nhomsanpham.php';
	}
	
	function hienthiloaisanpham($data)
	{
		include 'template/loaisanpham.php';
	}
	
	function formnhomsanpham($data)
	{
		include 'template/nhomsanpham.php';
	}
	
	function formnhomsanpham2()
	{
		include 'template/themnhomsanpham.php';
	}
	
	function thongbao($thongbao)
	{
		echo $thongbao;
	}
	
	function formloaisanpham($data)
	{
		include 'template/loaisanpham.php';
	}
	
	function hienthisanpham($data)
	{
		include 'template/danhsachsanpham.php';
	}
	
	function formsanpham()
	{
		include 'template/themsanpham.php';
	}
	
	function formsanpham2($data)
	{
		include 'template/suasanpham.php';
	}
}