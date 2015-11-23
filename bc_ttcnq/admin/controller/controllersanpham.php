<?php
class controllersanpham
{
	function xemnhomsanpham()
	{
		require_once 'model/modelsanpham.php';
		$modelsanpham = New modelsanpham();
		$data = $modelsanpham -> laydsnhomsanpham();
		
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		$viewsanpham -> hienthinhomsanpham($data);
	}
	
	function suanhomsanpham()
	{
		require_once 'model/modelsanpham.php';
		$modelsanpham = New modelsanpham();
		$data = $modelsanpham -> laydssuanhomsanpham();
		
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		$viewsanpham -> formnhomsanpham($data);
	}
	
	function capnhatnhomsp()
	{
		require_once 'model/modelsanpham.php';
		$modelsanpham = New modelsanpham();
		$kq = $modelsanpham -> capnhatnhomsanpham();
		
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		if (isset($kq))
		{
			$viewsanpham -> thongbao("<script>alert('Cap nhat nhom san pham thanh cong'); window.location='index.php';</script>");
		}
		else 
		{
			$viewsanpham -> thongbao("<script>alert('Cap nhat nhom san pham that bai'); window.history.go(-1);</script>");
		}
	}
	
	function xoanhomsanpham()
	{
		require_once 'model/modelsanpham.php';
		$modelsanpham = New modelsanpham();
		$kq = $modelsanpham -> xoanhomsanpham();
		
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		if (isset($kq))
		{
			$viewsanpham -> thongbao("<script>alert('Xoa nhom san pham thanh cong'); window.history.go(-1);</script>");
		}
		else
		{
			$viewsanpham -> thongbao("<script>alert('Xoa nhom san pham that bai'); window.history.go(-1);</script>");
		}
	}
	
	function themnhomsanpham()
	{
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		$viewsanpham -> formnhomsanpham2();
	}
	
	function luunhomsp()
	{
		require_once 'model/modelsanpham.php';
		$modelsanpham = New modelsanpham();
		$kq = $modelsanpham -> themnhomsanpham();
	
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		if (isset($kq))
		{
			$viewsanpham -> thongbao("<script>alert('Them nhom san pham thanh cong'); window.location='index.php';</script>");
		}
		else
		{
			$viewsanpham -> thongbao("<script>alert('Them nhom san pham that bai'); window.history.go(-1);</script>");
		}
	}
	
	function xemloaisanpham()
	{
		require_once 'model/modelsanpham.php';
		$modelsanpham = New modelsanpham();
		$data = $modelsanpham -> laydsloaisanpham();
	
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		$viewsanpham -> hienthiloaisanpham($data);
	}
	
	function sualoaisanpham()
	{
		require_once 'model/modelsanpham.php';
		$modelsanpham = New modelsanpham();
		$data = $modelsanpham -> laydsloaisanphamsua();
		
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		$viewsanpham -> formloaisanpham($data);
	}
	
	function capnhatloaisp()
	{
		require_once 'model/modelsanpham.php';
		$modelsanpham= New modelsanpham();
		$kq = $modelsanpham -> sualoaisp();
		
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		if (isset($kq))
		{
			$viewsanpham -> thongbao("<script>alert('Cap nhat thanh cong'); window.history.go(-2);</script>");
		}
		else 
		{
			$viewsanpham -> thongbao("<script>alert('Cap nhat that bai'); window.history.go(-2);</script>");
		}
		
	}
	
	function xoaloaisanpham()
	{
		require_once 'model/modelsanpham.php';
		$modelsanpham = New modelsanpham();
		$kq = $modelsanpham -> xoaloaisanpham();
	
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		if (isset($kq))
		{
			$viewsanpham -> thongbao("<script>alert('Xoa nhom san pham thanh cong'); window.history.go(-1);</script>");
		}
		else
		{
			$viewsanpham -> thongbao("<script>alert('Xoa nhom san pham that bai'); window.history.go(-1);</script>");
		}
	}
	
	function xemsanpham()
	{
		require_once 'model/modelsanpham.php';
		$modelsanpham = New modelsanpham();
		$data = $modelsanpham -> laydssanpham();
	
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		$viewsanpham -> hienthisanpham($data);
	}
	
	function themsanpham()
	{
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		$viewsanpham -> formsanpham();
	}
	
	function luusanpham()
	{
		require_once 'model/modelsanpham.php';
		$modelsanpham = New modelsanpham();
		$data = $modelsanpham -> luusanpham();
	
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		if (isset($data))
		{
			$viewsanpham -> thongbao("<script>alert('Tham san pham thanh cong'); window.history.go(-2);</script>");
		}
		else
		{
			$viewsanpham -> thongbao("<script>alert('Them san pham that bai'); window.history.go(-2);</script>");
		}
	}
	
	function xoasanpham()
	{
		require_once 'model/modelsanpham.php';
		$modelsanpham = New modelsanpham();
		$kq = $modelsanpham -> xoasanpham();
	
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		if (isset($kq))
		{
			$viewsanpham -> thongbao("<script>alert('Xoa san pham thanh cong'); window.history.go(-1);</script>");
		}
		else
		{
			$viewsanpham -> thongbao("<script>alert('Xoa san pham that bai'); window.history.go(-1);</script>");
		}
	}
	
	function suasanpham()
	{
		require_once 'model/modelsanpham.php';
		$modelsanpham = New modelsanpham();
		$data = $modelsanpham -> laydssanphamsua();
		
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		$viewsanpham -> formsanpham2($data);
	}
	
	function capnhatsanpham()
	{
		require_once 'model/modelsanpham.php';
		$modelsanpham = New modelsanpham();
		$data = $modelsanpham -> capnhatsanpham();
	
		require_once 'view/viewsanpham.php';
		$viewsanpham = New viewsanpham();
		if (isset($data))
		{
			$viewsanpham -> thongbao("<script>alert('Cap nhat san pham thanh cong'); window.history.go(-2);</script>");
		}
		else
		{
			$viewsanpham -> thongbao("<script>alert('Cap nhat san pham that bai'); window.history.go(-2);</script>");
		}
	}
}