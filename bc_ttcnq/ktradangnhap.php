<?php
session_start();
	if($_SESSION["user"] ==null)
			{
				header("location:dky.php");
			}
	else
		{
			header("location:mua.php");
		}
?>