<?php
class modelthanhvien
{
	function dangky()
	{
		$data = array();
		if (isset($_REQUEST['chapnhan']))
		{
			if ($_REQUEST['hoten']!="" and $_REQUEST['user']!="" and $_REQUEST['pass']!="" and $_REQUEST['apass']!="" and $_REQUEST['email']!="" and $_REQUEST['dienthoai']!="")
			{
				$data['hoten'] = $_REQUEST['hoten'];
				$data['user'] = $_REQUEST['user'];
				$data['diachi'] = $_REQUEST['diachi'];
				$data['email'] = $_REQUEST['email'];
				$data['dienthoai'] = $_REQUEST['dienthoai'];
				$data['pass'] = md5($_REQUEST['pass']);
				$data['apass'] = md5($_REQUEST['apass']);
				if ($data['pass'] == $data['apass'])
				{
				$sql = "insert into thanhvien values('".$data['hoten']."','".$data['diachi']."','".$data['email']."','".$data['dienthoai']."','".$data['user']."','".$data['pass']."',1,3)";
				$query = mysql_query($sql);
				return $query;
				}
				else
				{
					echo "<script>alert('Hai mật khẩu không trùng nhau'); window.history.go(-1);</script>";
				}
			}
			else
			{
				echo "<script>alert('Vui lòng nhập đầy đủ các mục có gắn dấu *'); window.history.go(-1);</script>";
			}
		}
	}
	
	function dangnhap()
	{
		if(!isset($_POST["user"]))
		{
			echo "<script>alert('Bạn chưa nhập username');window.location='index.php';</script>";
		}
		else
		{
			$user=$_POST["user"];
			if (!isset($_POST["pass"])) 
			{
				echo "<script>alert('Bạn chưa nhập mật khẩu');window.location='index.php';</script>";
					
			}
			else
			{
				$pass=$_POST["pass"];				echo $pass;				echo $user;
				$sql="select * from thanhvien where user='$user' and pass='$pass'";
				$kq=mysql_query($sql);
				$thanhvien=mysql_fetch_array($kq);
				$hieuluc=$thanhvien["hieuluc"];
				$n=mysql_num_rows($kq);
				if($n==0)
				{
					echo "<script>alert('thong tin dang nhap khong chinh xac!');window.location='index.php';</script>";
				}
				else
				{
					if($hieuluc==1)
					{
						if(!isset($_SESSION))
							session_start();
						$_SESSION["user"]=$user;
						$_SESSION["success"]=true;
						$_SESSION['hoten']=$thanhvien['hoten'];
						$_SESSION["hieuluc"]=$thanhvien["hieuluc"];
						$_SESSION['capquyen']=$thanhvien["capquyen"];
						header("location:admin/index.php");
					}
					else echo"<script>alert('Bạn không có quyền truy cập!');window.location='index.php'</script>";
				}
			}
		}
	}
	function logout()
	{
		if(!isset($_SESSION))
		session_start();
		unset($_SESSION["success"]);
		unset($_SESSION["user"]);
		header("location:index.php");
	}
	function laythongtincanhan()
	{
		$data = array();
		$data['user'] = $_REQUEST['user'];
		$sql = "Select * from thanhvien where user='".$data['user']."'";
		$query=mysql_query($sql);
		while ($rows = mysql_fetch_array($query))
		{
			$data[] = $rows;
		}
	}
	
	function capnhatthongtin()
	{
		$data = array();
		if (isset($_REQUEST['chapnhan']))
		{
			if ($_REQUEST['hoten']!="" and $_REQUEST['pass']!="" and $_REQUEST['apass']!="" and $_REQUEST['email']!="" and $_REQUEST['dienthoai']!="")
			{
				$data['hoten'] = $_REQUEST['hoten'];
				$data['diachi'] = $_REQUEST['diachi'];
				$data['email'] = $_REQUEST['email'];
				$data['dienthoai'] = $_REQUEST['dienthoai'];
				$data['pass'] = md5($_REQUEST['pass']);
				$data['apass'] = md5($_REQUEST['apass']);
				$sql = "select * from thanhvien where user='".$_REQUEST['user']."'";
				$query = mysql_query($sql);
				$rows = mysql_fetch_array($query);
				if ($data['pass'] == $rows['pass'])
					{
					if ($data['pass'] == $data['apass'])
					{
						$sql1 = "update thanhvien set hoten='".$data['hoten']."', diachi='".$data['diachi']."', email='".$data['email']."', dienthoai='".$data['dienthoai']."' where user='".$_REQUEST["user"]."'";
						$query1 = mysql_query($sql1);
						return $query1;
					}
					else
					{
						echo "<script>alert('Hai mật khẩu không trùng nhau'); window.history.go(-1);</script>";
					}
					}
				else 
				{
					echo "<script>alert('Bạn đã nhập sai mật khẩu'); window.history.go(-1);</script>";
				}
			}
			else
			{
				echo "<script>alert('Vui lòng nhập đầy đủ các mục được gắn dấu *'); window.history.go(-1);</script>";
			}
		}
	}
	
	function capnhatmatkhau()
	{
		$data = array();
		if (isset($_REQUEST['dongy']))
		{
			$data['user'] = $_REQUEST['user'];
			$data['passold'] = md5($_REQUEST['passold']);
			$data['passnew'] = md5($_REQUEST['passnew']);
			$data['apassnew'] = md5($_REQUEST['apassnew']);
			if ($_REQUEST['passold']!=null and $_REQUEST['apassnew']!=null and $_REQUEST['passnew']!=null)
			{
				$sql = "Select * from thanhvien where user='".$data['user']."'";
				$query = mysql_query($sql);
				$rows = mysql_fetch_array($query);
				if ($data['passold'] == $rows['pass'])
				{
					if ($data['passnew'] == $data['apassnew'])
					{
						$sql1 = "update thanhvien set pass='".$data['passnew']."' where user='".$data['user']."'";
						$query1 = mysql_query($sql1);
						return $query1;
					}
					else 
					{
						echo "<script>alert('Hai mật khẩu không trùng nhau'); window.history.go(-1);</script>";
					}
				}
				else 
				{
					echo "<script>alert('Bạn đã nhập sai mật khẩu, vui lòng nhập lại'); window.history.go(-1);</script>";
				}
			}
			else 
			{
				echo "<script>alert('Nhập đầy đủ các mục được yêu cầu'); window.history.go(-1);</script>";
			}
		}
	}
	
	function guilienhe()
	{
		$data = array();
		$data['hoten'] = $_REQUEST['hoten'];
		$data['email'] = $_REQUEST['email'];
		$data['diachi'] = $_REQUEST['diachi'];
		$data['dienthoai'] = $_REQUEST['dienthoai'];
		$data['noidung'] = $_REQUEST['noidung'];
		$data['ngay'] =date("Y-m-d H:i:s");
		if ($data['hoten']!="" and $data['diachi']!="" and $data['dienthoai']!="" and $data['email']!="" and $data['noidung']!="")
		{
			$sql = "insert into lienhe(hoten,email,dienthoai,diachi,noidung,ngaylienhe) values ('".$data['hoten']."','".$data['email']."','".$data['dienthoai']."','".$data['diachi']."','".$data['noidung']."','".$data['ngay']."')";
			$query = mysql_query($sql);
			return $query;
		}
		else
		{
			echo "<script>alert('Vui lòng nhập đầy đủ các mục được yêu cầu'); window.history.go(-1);</script>";
		}
		
	}
}