<?php
class modelsanpham
{
	function laydsnhomsanpham()
	{
		$sql = "select * from nhomsanpham";
		$query = mysql_query($sql);
		$data = array();
		while ($rows = mysql_fetch_array($query))
		{
			$data[] = $rows;
		}
		return $data;
	}
	
	function capnhatnhomsanpham()
	{
		$data = array();
		$data['id'] = $_REQUEST['id_nhom'];
		$data['tennhom'] = $_REQUEST['ten'];
		if ($data['tennhom'] =="")
		{
			echo "<script>alert('Vui lòng nhập đầy đủ các mục được yêu cầu'); window.history.go(-1);</script>";
		}
		else 
		{
		$sql = "update nhomsanpham set tennhom='".$data['tennhom']."' where id_nhom='".$data['id']."'";
		$query = mysql_query($sql);
		return $query;
		}
	}
	
	function themnhomsanpham()
	{
		$data = array();
		$data['ten'] = $_REQUEST['ten'];
		if ($data['ten'] =="")
		{
			echo "<script>alert('Vui lòng nhập đầy đủ các mục được yêu cầu'); window.history.go(-1);</script>";
		}
		else 
		{
			$sql = "insert into nhomsanpham(tennhom) values ('".$data['ten']."')";
			$query = mysql_query($sql);
			return $query;
			
		}
	}
	
	function xoanhomsanpham()
	{
		$data = array();
		$data['id'] = $_REQUEST['id_nhom'];
		$sql = "delete from nhomsanpham where id_nhom='".$data['id']."'";
		$query = mysql_query($sql);
		return $query;
	}
	
	function laydsloaisanpham()
	{
		$sql = "select * from loaisanpham";
		$query = mysql_query($sql);
		$data = array();
		while ($rows = mysql_fetch_array($query))
		{
			$data[] = $rows;
		}
		return $data;
	}
	
	function laydsloaisanphamsua()
	{
		$data = array();
		$data['id_loai'] = $_REQUEST['id_loai'];
		

		$sql = "select * from nhomsanpham, loaisanpham where nhomsanpham.id_nhom = loaisanpham.id_nhom and id_loai = '".$data['id_loai']."'"; 
		$query = mysql_query($sql);
		$rows = mysql_fetch_array($query);
		return $rows;
	}
	
	function sualoaisp()
	{
		$data = array();
		$data['id_loai'] = $_REQUEST['id_loai'];
		$data['tenloaisp'] = $_REQUEST['tenloaisp'];
		$sql = "update loaisanpham set tenloaisp='".$data['tenloaisp']."' where id_loai='".$data['id_loai']."'";
		$query = mysql_query($sql);
		return $query;
		
	}
	
	function xoaloaisanpham()
	{
		$data = array();
		$data['id'] = $_REQUEST['id_loai'];
		$sql = "delete from loaisanpham where id_loai='".$data['id']."'";
		$query = mysql_query($sql);
		return $query;
	}
	
	function laydssualoaisanpham()
	{
		if ($_REQUEST['task'] == "sualoaisanpham")
		{
			$data = array();
			$data['id_loai'] = $_REQUEST['id_loai'];
			$sql = "Select * from loaisanpham where id_loai='".$data['id_loai']."'";
			$query = mysql_query($sql);
			$rows = mysql_fetch_array($query);
		
			$sql1 = "select * from nhomsanpham, loaisanpham where nhomsanpham.id_nhom = loaisanpham.id_nhom and id_loai = '".$data['id_loai']."'";
			$query1 = mysql_query($sql1);
			$rows1 = mysql_fetch_array($query1);
		}
		else
		{
			$rows = array();
			$rows['tenloai'] = "";
		}
	}
	
	function laydssuanhomsanpham()
	{
			$id = $_REQUEST['id_nhom'];
			$sql = "Select * from nhomsanpham where id_nhom='".$id."'";
			$query = mysql_query($sql);
			$rows = mysql_fetch_array($query);
			return $rows;
		
	}
	
	function laydssanpham()
	{
		$sql = "select * from sanpham";
		$query = mysql_query($sql);
		$data = array();
		while ($rows = mysql_fetch_array($query))
		{
			$data[] = $rows;
		}
		return $data;
	}
	
	function luusanpham()
	{
				 
				$link = $_REQUEST['file_up'];
				$tensp = $_REQUEST['tensp'];
				$id = rand (100,9999999999);
				$loaisp = $_REQUEST['loaisp'];
				$mota = $_REQUEST['mota'];
				$gia = $_REQUEST['gia'];
				$giakm = $_REQUEST['giakm'];
				$baohanh = $_REQUEST['baohanh'];
				$ghichu = $_REQUEST['ghichu'];
				$sql = "INSERT INTO sanpham (id,id_loai,tensp,mota,hinh,gia,giakm,baohanh,ghichu) VALUES('$id','$loaisp','$tensp','$mota','$link','$gia','$giakm','$baohanh','$ghichu')";
				$query = mysql_query($sql);
				return $query;
	}
	
	function xoasanpham()
	{
		$data = array();
		$data['id'] = $_REQUEST['id'];
		$sql = "delete from sanpham where id='".$data['id']."'";
		$query = mysql_query($sql);
		return $query;
	}
	
	function laydssanphamsua()
	{
		$id = $_REQUEST['id'];
		$sql = "select * from sanpham where id='".$id."'";
		$query = mysql_query($sql);
		$data = mysql_fetch_array($query);
		return $data;
	}
	
	function capnhatsanpham()
	{
		$id = $_REQUEST['id'];
		$link = $_REQUEST['file_up'];
		$tensp = $_REQUEST['tensp'];
		$loaisp = $_REQUEST['loaisp'];
		$mota = $_REQUEST['mota'];
		$gia = $_REQUEST['gia'];
		$giakm = $_REQUEST['giakm'];
		$baohanh = $_REQUEST['baohanh'];
		$ghichu = $_REQUEST['ghichu'];
		$str = "update sanpham set id_loai='$loaisp', tensp='$tensp', mota='$mota', hinh='$link', gia='$gia', giakm='$giakm', baohanh='$baohanh', ghichu='$ghichu' where id='$id'";
		$query = mysql_query($str);
		return $query;
	}
	
}