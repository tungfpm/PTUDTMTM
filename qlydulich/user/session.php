<?php
session_start();
	if(isset($_SESSION['ses_level'])){
		if ($_SESSION['ses_level'] != 2){
			header("location:../index.php");
			exit();
			}
	}
?>