<?php
class modelthanhvien
{
	function laydslienhe()
	{
		$sql = "select * from lienhe";
		$query = mysql_query($sql);
		$data = array();
		while ($rows = mysql_fetch_array($query))
		{
			$data[] = $rows;
		}
		return $data;
	}
	
	function xoalienhe()
	{
		$id = $_REQUEST['id_lienhe'];
		$sql = "delete from lienhe where id_lienhe='".$id."'";
		$query = mysql_query($sql);
		return ($query);
	}
	
	function laydsthanhvien()
	{
		$sql = "select * from thanhvien";
		$query = mysql_query($sql);
		$data = array();
		while ($rows = mysql_fetch_array($query))
		{
			$data[] = $rows;
		}
		return $data;
	}
	
	function xoathanhvien()
	{
		$user = $_REQUEST['user'];
		$sql = "delete from thanhvien where user='".$user."'";
		$query = mysql_query($sql);
		return ($query);
	}
	
	function laydssuathanhvien()
	{	
		$user = $_REQUEST['user'];
		$sql = "select * from thanhvien where user='".$user."'";
		$query = mysql_query($sql);
		$data = array();
		while ($rows = mysql_fetch_array($query))
		{
			$data[] = $rows;
		}
		return $data;
	}
	
	function capnhatthanhvien()
	{
		$data = array();
		$data['user'] = $_REQUEST['user'];
		$data['hoten'] = $_REQUEST['hoten'];
		$data['email'] = $_REQUEST['email'];
		$data['diachi'] = $_REQUEST['diachi'];
		$data['dienthoai'] = $_REQUEST['dienthoai'];
		$sql = "update thanhvien set hoten='".$data['hoten']."',email='".$data['email']."',diachi='".$data['diachi']."',dienthoai='".$data['dienthoai']."' where user='".$data['user']."'";
		$query = mysql_query($sql);
		return $query;
	}
	
	function logout()
	{
		if(!isset($_SESSION))
			session_start();
		unset($_SESSION["success"]);
		unset($_SESSION["user"]);
		header("location:index.php");
	}
	
	function kiemtra()
	{
	if(!isset($_POST["user"])){	

		echo "<script>alert('Bạn chưa nhập username');window.history.go(-1);</script>";

		//header("location:login.php");

	}

	else 

	{

		$user=$_POST["user"];

		if (!isset($_POST["pass"])) {

			echo "<script>alert('Bạn chưa nhập mật khẩu');window.history.go(-1);</script>";

			//header("location:login.php");					

		}

		else

		{

			$pass=md5($_POST["pass"]);			

			$sql="select * from thanhvien where user='$user' and pass='$pass'";

			$kq=mysql_query($sql);

			$thanhvien=mysql_fetch_array($kq);

			$hieuluc=$thanhvien["hieuluc"];

			$n=mysql_num_rows($kq);

			if($n==0)

			{

				echo "<script>alert('Thông tin bạn nhập không chính xác!');window.history.go(-1);</script>";

				//header("location: login.php");

			}	

			else 

			{	

				if($hieuluc==1){

					if(!isset($_SESSION))

					session_start();

					$_SESSION["user"]= $user;

					$_SESSION["success"]=true;

					$_SESSION['hotenadmin']=$thanhvien['hoten'];	

					$_SESSION["hieuluc"]=$thanhvien["hieuluc"];

					$_SESSION['capquyen']=$thanhvien["capquyen"];

					header("location:index.php");

				}

				else echo"<script>alert('Bạn không có quyền truy cập!');window.location='login.php'</script>";

			}

		}

	}
		
	}
}