<?php 
class controllerthanhvien
{
	function dangkytv()
	{
		require_once 'model/modelthanhvien.php';
		$modelthanhvien = New modelthanhvien();
		$kq = $modelthanhvien -> dangky();
		
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
		if (isset($kq))
		{
			$viewthanhvien -> thongbao("Bạn đã đăng ký tài khản thành công!<a href=index.php> [Quay lại]</a> trang chủ");
		}
		else
		{
			$viewthanhvien -> thongbao("Đăng ký tài khoản thất bại!<a href=index.php?controller=thanhvien&task=dangky> [Quay lại]</a> trang đăng ký");
		}
	}
	
	function dangky()
	{
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
		$viewthanhvien -> hienform();
	}
	
	function dangnhap()
	{
		require_once 'model/modelthanhvien.php';
		$modelthanhvien = New modelthanhvien();
		$kq = $modelthanhvien -> dangnhap();
		
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
	}
	
	function xemthongtin()
	{
		require_once 'model/modelthanhvien.php';
		$modelthanhvien = New modelthanhvien();
		$data = $modelthanhvien -> laythongtincanhan();
		
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
		$viewthanhvien -> xemthongtincanhan($data);
	}
	
	function suathongtin()
	{
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
		$viewthanhvien -> suathongtincanhan();
	}
	
	function capnhatthongtin()
	{
		require_once 'model/modelthanhvien.php';
		$modelthanhvien = New modelthanhvien();
		$kq = $modelthanhvien -> capnhatthongtin();
		
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
		if (isset($kq))
		{
			$viewthanhvien -> thongbao("Cập nhật thông tin thành công<a href=index.php> [Quay lại]</a> trang chủ");
		}
		else
		{
			$viewthanhvien -> thongbao("Cập nhật thông tin thất bại<a href=index.php> [Quay lại]</a> trang chủ");
		}
	}
	
	function doimatkhau()
	{
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
		$viewthanhvien -> formmatkhau();
	}
	
	function capnhatmatkhau()
	{
		require_once 'model/modelthanhvien.php';
		$modelthanhvien = New modelthanhvien();
		$kq = $modelthanhvien -> capnhatmatkhau();
		
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
		if (isset($kq))
		{
			$viewthanhvien -> thongbao("<script>alert('Đổi mật khẩu thành công'); window.location='index.php';</script>");
		}
		else
		{
			$viewthanhvien -> thongbao("<script>alert('Đổi mật khẩu thất bại'); window.history.go(-1);</script>");
		}
	}
	
	function lienhe()
	{
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
		$viewthanhvien -> formlienhe();
	}
	
	function guilienhe()
	{
		require_once 'model/modelthanhvien.php';
		$modelthanhvien = New modelthanhvien();
		$kq = $modelthanhvien -> guilienhe();
		
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
		if (isset($kq))
		{
			$viewthanhvien -> thongbao("Thông điệp của bạn đã được gửi, Cảm ơn bạn đã đến với của hàng!");
		}
		else
		{
			$viewthanhvien -> thongbao("Gửi liên hệ thất bại");
		}
	}
	
	
	function gioithieu()
	{
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
		$viewthanhvien -> gioithieu();
	}
	
	function huongdanmuahang()
	{
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
		$viewthanhvien -> huongdanmuahang();
	}
	
	function dangxuat()
	{
		require_once 'model/modelthanhvien.php';
		$modelthanhvien = New modelthanhvien();
		$kq = $modelthanhvien -> logout();
		
		require_once 'view/viewthanhvien.php';
		$viewthanhvien = New viewthanhvien();
	}
}