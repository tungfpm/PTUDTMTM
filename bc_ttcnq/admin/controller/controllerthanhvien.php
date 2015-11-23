<?php
class controllerthanhvien
{
	function xemlienhe()
	{
		require_once 'model/modelthanhvien.php';
		$modelthanhvien = New modelthanhvien();
		$data = $modelthanhvien -> laydslienhe();
	
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
		$viewthanhvien -> hienthilienhe($data);
	}
	
	function xoalienhe()
	{
		require_once 'model/modelthanhvien.php';
		$modelthanhvien = New modelthanhvien();
		$kq = $modelthanhvien -> xoalienhe();
		
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
		if (isset($kq))
		{
			$viewthanhvien -> thongbao("<script>alert('Xoa lien he thanh cong'); window.history.go(-1);</script>");
		}
		else
		{
			$viewthanhvien -> thongbao("<script>alert('Xoa lien he that bai'); window.history.go(-1);</script>");
		}
	}
	
	function xemthanhvien()
	{
		require_once 'model/modelthanhvien.php';
		$modelthanhvien = New modelthanhvien();
		$data = $modelthanhvien -> laydsthanhvien();
		
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
		$viewthanhvien -> hienthithanhvien($data);
	}
	
	function xoathanhvien()
	{
		require_once 'model/modelthanhvien.php';
		$modelthanhvien = New modelthanhvien();
		$kq = $modelthanhvien -> xoathanhvien();
		
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
		if (isset($kq))
		{
			$viewthanhvien -> thongbao("<script>alert('Xoa thanhvien thanh cong'); window.history.go(-1);</script>");
		}
		else
		{
			$viewthanhvien -> thongbao("<script>alert('Xoa thanh vien that bai'); window.history.go(-1);</script>");
		}
	}
	
	function suathanhvien()
	{
		require_once 'model/modelthanhvien.php';
		$modelthanhvien = New modelthanhvien();
		$kq = $modelthanhvien -> laydssuathanhvien();
		
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien;
		$viewthanhvien -> hienformsuathanhvien($kq);
	}
	
	function capnhatthanhvien()
	{
		require_once 'model/modelthanhvien.php';
		$modelthanhvien = New modelthanhvien();
		$kq = $modelthanhvien -> capnhatthanhvien();
	
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien;
		if (isset($kq))
		{
			$viewthanhvien -> thongbao("<script>alert('Cap nhat thanh vien thanh cong'); window.history.go(-2);</script>");
		}
		else
		{
			$viewthanhvien -> thongbao("<script>alert('Cap nhat thanh vien that bai'); window.history.go(-2);</script>");
		}
	}
	
	function dangxuat()
	{
		require_once 'model/modelthanhvien.php';
		$modelthanhvien = New modelthanhvien();
		$kq = $modelthanhvien -> logout();
	
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
	}
	
	function dangnhap()
	{
		require_once 'model/modelthanhvien.php';
		$modelthanhvien = New modelthanhvien();
		$kq = $modelthanhvien -> kiemtra();
	
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
	}
}