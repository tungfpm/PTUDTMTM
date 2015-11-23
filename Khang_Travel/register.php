<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<?php
if (isset($_POST['submit'])) {
	$errors = array();

	if (empty($_POST['email'])) {
		$errors['email'] = "Vui lòng nhập Email đăng ký !";
	} else {
		$email = $_POST['email'];
	}

	if (empty($_POST['username'])) {
		$errors['user'] = "Vui lòng nhập tên bạn muốn hiển thị !";
	} else {
		$user_name = $_POST['username'];
	}

	if (empty($_POST['password1'])) {
		$errors['password']='Vui lòng nhập mật khẩu của bạn !';
	}elseif($_POST['password1']!=$_POST['password2']){
		$errors['checkpassword']='Mật Khẩu xác nhận không đúng !';
	}else{
		$password=$_POST['password1'];
	}
	// if (isset($_POST['password1'])&&isset($_POST['password2'])&&($_POST['password2']==$_POST['password1'])) {
	// 	$user_password = $_POST['password1'];
	// } else {
	// 	$errors[] = "password1";
	// }

	if (empty($_POST['phone'])) {
		$errors['phone'] = "Vui lòng nhập số điện thoại của bạn !";
	} else {
		$user_phone = $_POST['phone'];
	}

	if (empty($_POST['address'])) {
		$errors['address'] = "Vui lòng nhập địa chỉ nơi bạn ở !";
	} else {
		$user_address = $_POST['address'];
	}

	if (empty($_POST['birthday'])) {
		$errors['birthday'] = "Vui lòng nhập năm sinh của bạn !";
	} else {
		$user_birthday = $_POST['birthday'];
	}

	if (empty($_POST['sex'])) {
		$errors[] = "Chọn giới tính của bạn !";
	} else {
		$user_sex = $_POST['sex'];
	}

	if (empty($errors)) {
		require_once 'process/user.class.php';
		$user=new user;
		$user->setEmail($email);
		$user->setName($user_name);
		$user->setPassword($password);
		$user->setPhone($user_phone);
		$user->setAddress($user_address);
		$user->setBirthday($user_birthday);
		$user->setSex($user_sex);
		if ($user->check_Exist()==false) {
			$user->add_User();
			$errors['success']='Tạo tài khoản thành công !';
		}else{
			$errors['fail']="Email đã tồn tại vui lòng chọn email khác !";
		}

		// $q = "INSERT INTO users (name_user, password, birthday, sex, email, phone, address)
		// VALUES('{$username}', '{$password1}', '{$birthday}','{$sex}', '{$email}',$phone, '{$address}') ";
		// $r = mysqli_query($dbc, $q) or die("query {$q} <br/> Mysql error: " . mysqli_error($dbc));
		// if (mysqli_affected_rows($dbc) == 1) {
		// 	echo "<p style='color:blue;font-size:15px;'>Thêm thành công.</p>";
		// } else {
		// 	echo "<p style='color:red;font-size:15px;'> Thêm thất bại.</p>";}
	} else {
		//echo 'nhap day du cac truong';
		// echo "<pre>";
		// echo print_r($errors);
		// echo "</pre>";
	}
}

?>
	<div class="container">
		<form action="" method="POST" accept-charset="utf-8">
			<div id="register" class="form-group">
				<fieldset>
					<legend class="text-center">Register</legend>
					<div class="row">
						<div class="col-sm-3">
							<label for="inputEmail3" >Email</label>
						</div>
						<div class="col-sm-9">
							<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
							<?php 
								if (isset($errors['email'])) {
									echo "<span class='error'>{$errors['email']}</span>";
								}
								if (isset($errors['fail'])) {
									echo "<span class='error'>{$errors['fail']}</span>";
								}
							 ?>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<label for="" >User Name</label>
						</div>
						<div class="col-sm-9">
							<input type="text" name="username" class="form-control" id="" placeholder="user name">
							<?php 
								if (isset($errors['user'])) {
									echo "<span class='error'>{$errors['user']}</span>";
								}
							 ?>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-3">
							<label for="" >Password</label>
						</div>
						<div class="col-sm-9">
							<input type="password" name="password1" class="form-control" id="" placeholder="password">
							<?php 
								if (isset($errors['password'])) {
									echo "<span class='error'>{$errors['password']}</span>";
								}
							 ?>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<label for="" >Confirm Password</label>
						</div>
						<div class="col-sm-9">
							<input type="password" name="password2" class="form-control" id="" placeholder="Confirm Password">
							<?php 
								if (isset($errors['checkpassword'])) {
									echo "<span class='error'>{$errors['checkpassword']}</span>";
								}
							 ?>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-3">
							<label for="" >Phone</label>
						</div>
						<div class="col-sm-9">
							<input type="number" name="phone" class="form-control" id="" placeholder="Phone">
							<?php 
								if (isset($errors['phone'])) {
									echo "<span class='error'>{$errors['phone']}</span>";
								}
							 ?>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-3">
							<label for="" >Address</label>
						</div>
						<div class="col-sm-9">
							<input type="text" name="address" class="form-control" id="" placeholder="address">
							<?php 
								if (isset($errors['address'])) {
									echo "<span class='error'>{$errors['address']}</span>";
								}
							 ?>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-3">
							<label for="" >Birth Day</label>
						</div>
						<div class="col-sm-9">
							<input type="date" name="birthday" class="form-control" id="" >
							<?php 
								if (isset($errors['birthday'])) {
									echo "<span class='error'>{$errors['birthday']}</span>";
								}
							 ?>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-3">
							<label for="" >Sex</label>
						</div>
						<div class="col-sm-9">
							<input type="radio" name="sex" id="" value="Male" checked="checked">Male &nbsp;&nbsp;
							<input type="radio" name="sex"  id="" value="Female">Female
							<?php 
								if (isset($errors['sex'])) {
									echo "<span class='error'>{$errors['sex']}</span>";
								}
							 ?>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 col-sm-offset-3">
							<button type="submit" class="form-control btn btn-success" name="submit">Submit</button>
							
						</div>
					</div>
					<div class="row">
						<div class="col sm-3"></div>
						<div class="col-sm-9 col-offset-3">
							<?php 
								if (isset($errors['success'])) {
									echo "<span class='success text-center'>{$errors['success']}</span>";
								}
							 ?>
						</div>
					</div>
				</fieldset>
			</div>
		</form>
	</div>


	
	<script src="js/jquery.min.js" type="text/javascript" ></script>
  	<script src="js/bootstrap.min.js" type="text/javascript" ></script>

</body>
</html>