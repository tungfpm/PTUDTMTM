<?php 

class modelsanpham

{

	function laydssp()

	{

		if (isset ($_REQUEST['id_loai']))

		{

		$sql = "select * from sanpham where id_loai ='".$_REQUEST['id_loai']."'";

		}

		else

		{

		if (isset ($_REQUEST['id_nhom']))

		{

		$sql = "select sanpham.* from sanpham,loaisanpham where loaisanpham.id_loai = sanpham.id_loai and id_nhom ='".$_REQUEST['id_nhom']."'";

		}

		else

		{

		$sql = "select * from sanpham limit 6";

		}

		}

		$data=array();

		$query = mysql_query($sql);

		$dem = mysql_num_rows($query);

		if ($dem == "")

		{

		echo "<script>alert('Sản phẩm này đang được cập nhật!');window.location='index.php'</script>";

		}

		else

		{

		While ($rows = mysql_fetch_array($query))

		{

			$data[]=$rows;

		}

		return $data;

		}

	}

		function laydsspkm()
	{

		$sql = "select * from sanpham where khuyenmai=1";

		$data=array();

		$query = mysql_query($sql);

		$dem = mysql_num_rows($query);


		While ($rows = mysql_fetch_array($query))

		{

			$data[]=$rows;

		}

		return $data;

	}

	function laychitietsp()

	{

		$id = $_REQUEST['id'];

		$sql = "select * from sanpham where id='".$id."'";

		$query = mysql_query($sql);

		$data = array();

		while ($rows = mysql_fetch_array($query))

		{

			$data[] = $rows;

		}

		return $data;

	}

	

	function xoasp()

	{

		$data = $_REQUEST['id'];

		mysql_connect("localhost","root","");

		mysql_select_db("thuchanh");

		$sql = "Delete from sanpham where id='".$data."'";

		$query = mysql_query($sql);

		return $query;

		

	}

	

	function themsp()

	{

		$data = array();

		$data['id'] = $_REQUEST['id'];

		$data['ten'] = $_REQUEST['ten'];

		$data['mota'] = $_REQUEST['mota'];

		mysql_connect("localhost","root","");

		mysql_select_db("thuchanh");

		$sql = "insert into sanpham values ('".$data['id']."','".$data['ten']."','".$data['mota']."')";

		$kq = mysql_query($sql);

		return $kq;

	}



	function suasp()

	{

		$data = array();

		$data['id'] = $_REQUEST['id'];

		$data['ten'] = $_REQUEST['ten'];

		$data['mota'] = $_REQUEST['mota'];

		mysql_connect("localhost","root","");

		mysql_select_db("thuchanh");

		$sql = "update sanpham set ten='".$data['ten']."',mota='".$data['mota']."' where id='".$data['id']."'";

		$kq = mysql_query($sql);

		return $kq;

	}

	

	function timkiemsp()

	{

		$timkiem = $_REQUEST['search'];

		$data = array();

		$sql = "select * from sanpham where hinh like '%".$timkiem."%' OR tensp like '%".$timkiem."%' OR mota like '%".$timkiem."%'";

		$query = mysql_query($sql);

		$dem = mysql_num_rows($query);

		if ($dem == "")

		{

		echo "<script>alert('Sản phẩm này đang được cập nhật!');window.location='index.php'</script>";

		}

		else

		{

		while ($rows = mysql_fetch_array($query))

		{

			$data[] = $rows;

		}

		return $data;

		}

		

		

		

	}

}