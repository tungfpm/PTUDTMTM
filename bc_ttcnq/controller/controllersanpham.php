<?php

class controllersanpham

{

	function xemsanpham()

	{

		require_once 'model/modelsanpham.php';

		$modelsanpham = New modelsanpham();

		$data = $modelsanpham -> laydssp();
		require_once 'view/viewsanpham.php';

		$viewsanpham = New viewsanpham();

		$viewsanpham -> hienthisp($data);			

	}
	function xemkhuyenmai()

	{

		require_once 'model/modelsanpham.php';

		$modelsanpham = New modelsanpham();

		$data = $modelsanpham -> laydsspkm();

		

		require_once 'view/viewsanpham.php';

		$viewsanpham = New viewsanpham();

		$viewsanpham -> hienthisp($data);			

	}



	function chitietsanpham()

	{

		require_once 'model/modelsanpham.php';

		$modelsanpham = New modelsanpham();

		$data = $modelsanpham -> laychitietsp();

		

		require_once 'view/viewsanpham.php';

		$viewsanpham = New viewsanpham();

		$viewsanpham -> hienthichitietsp($data);

	}

	

	function xoasanpham()

	{

		require_once 'model/modelsanpham.php';

		$modelsanpham = New modelsanpham();

		$kq = $modelsanpham -> xoasp();

		

		require_once 'view/viewsanpham.php';

		$viewsanpham = New viewsanpham();

		if ($kq)

		{

			$viewsanpham-> thongbao('Xoa san pham thanh cong <a href=index.php>Quay lai</a>');

		}

		else

		{

			$viewsanpham -> thongbao('Khong the xoa san pham <a href=index.php>Quay lai</a>');

		}

		

	}

	

	function luusanpham()

	{

		require_once 'model/modelsanpham.php';

		$modelsanpham = New modelsanpham();

		$kq = $modelsanpham -> themsp();

				

		require_once 'view/viewsanpham.php';

		$viewsanpham = New viewsanpham();

		if ($kq)

		{

			$viewsanpham-> thongbao('Luu san pham thanh cong <a href=index.php>Quay lai</a>');

		}

		else 

		{

			$viewsanpham -> thongbao('Khong the luu san pham <a href=index.php>Quay lai</a>');

		}

	}

	

	function themsanpham()

	{

		require_once 'view/viewsanpham.php';

		$viewsanpham = New viewsanpham();

		$viewsanpham -> hienthiform();

	}

	

	function suasanpham()

	{

		require_once 'view/viewsanpham.php';

		$viewsanpham = New viewsanpham();

		$viewsanpham -> hienthiform();

	}

	

	function capnhatsanpham()

	{

		require_once 'model/modelsanpham.php';

		$modelsanpham = New modelsanpham();

		$kq = $modelsanpham -> suasp();

		

		require_once 'view/viewsanpham.php';

		$viewsanpham = New viewsanpham();

		if ($kq)

		{

			$viewsanpham -> thongbao("Cap nhat san pham thanh cong <a href=index.php>Quay lai</a>");

		}

		else

		{

			$viewsanpham -> thongbao("Khong the cap nhat san pham <a href=index.php>Quay lai</a>");

		}

	}

		

	function timkiem()

	{

		require_once 'model/modelsanpham.php';

		$modelsanpham = New modelsanpham();

		$data = $modelsanpham -> timkiemsp();

		

		require_once 'view/viewsanpham.php';

		$viewsanpham = New viewsanpham();

		$viewsanpham -> hienthisp($data);

	}	

}