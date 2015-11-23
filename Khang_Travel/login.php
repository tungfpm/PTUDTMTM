<?php
session_start();
?>
<?php
require 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

<div id="form">	
<?php
if (isset($_POST['submit'])) {
	$errors=array();
	if (empty($_POST['email'])) {
		$errors['email']="Vui lòng nhập email để đăng nhập !";
	}else{
		$email = $_POST['email'];
	}
	if (empty($_POST['password'])) {
		$errors['password']="Vui lòng nhập mật khẩu của bạn !";
	}else{
		$password = $_POST['password'];
	}
	if (empty($errors)) {
		require_once 'process/user.class.php';
		$login=new user;
		$login->setEmail($email);
		$login->setPassword($password);
		if ($login->check_Login()==false) {
			$errors['login']="Email hoặc mật khẩu không chính xác !";
		}else{
			$data=$login->check_Login();
			$_SESSION['user_id']=$data['user_id'];
			$_SESSION['user_name']=$data['user_name'];
			$_SESSION['user_level']=$data['user_level'];
			header("Location:index.php");
		}
	}
}	
?>

	<div class="container" id="form-login">
		<form action="" method="POST">
			<fieldset>
			<legend>Login</legend>
		   <div class="form-group">
		      <label for="exampleInputEmail1">Email address</label>
		      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		   		<?php 
		   			if (isset($errors['email'])) {
		   				echo "<span class='error'>{$errors['email']}</span>";
		   			}
		   		 ?>
		   </div>
		   <div class="form-group">
		      <label for="exampleInputPassword1">Password</label>
		      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		   		<?php 
		   			if (isset($errors['password'])) {
		   				echo "<span class='error'>{$errors['password']}</span>";
		   			}
		   		 ?>
		   </div>
		  
		   <button type="submit" name="submit" class="btn btn-default">Submit</button>
		    <?php 
		   	if (isset($errors['login'])) {
		   		echo "<span class='error'>{$errors['login']}</span>";
		   	}
		    ?>
		   </fieldset>
		</form>

	</div>
</div>
	<script src="js/jquery.min.js" type="text/javascript" ></script>
  	<script src="js/bootstrap.min.js" type="text/javascript" ></script>
</body>
</html>