<?php 
	require_once 'includes/header.admin.php';
	require_once'process/user.class.php';
	$isAdmin1=new user();
	$isAdmin1->check_Admin();
 ?>

<?php
if (isset($_POST['submit'])) {
	$errors = array();

	if (empty($_POST['username'])) {
		$errors['user'] = "Vui lòng nhập tên bạn muốn hiển thị !";
	} else {
		$user_name = $_POST['username'];
	}

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
	if (empty($_POST['userlevel'])) {
		$errors[]="Chon level cho user";
	}else{
		$user_level=$_POST['userlevel'];
	}

	if (empty($errors)) {
		require_once 'process/user.class.php';
		$user=new user;
		$user->setName($user_name);
		$user->setPhone($user_phone);
		$user->setAddress($user_address);
		$user->setBirthday($user_birthday);
		$user->setSex($user_sex);
		$user->setLevel($user_level);
		if ($user->check_Edit($_GET['user-id'])==false) {
			if ($user->edit_User($_GET['user-id'])==false) {
				$errors['fail']="Chỉnh sửa không thành công !";
			}else{
				$errors['success']="Chỉnh sửa thành công !";
			}
		}else{
			$errors['exist']=" Tên hiển thị của bạn đã trùng !";
		}
		
		
	} else {
		
	}
}

?>
	<div class="container">
		<form action="" method="POST" accept-charset="utf-8">
			<div id="register" class="form-group">
				<fieldset>
					<legend class="text-center">Edit User</legend>
				
					<div class="row">
						<div class="col-sm-3">
							<label for="" >User Name</label>
						</div>
						<div class="col-sm-9">
							<input type="text" name="username" class="form-control" placeholder="user name">
							<?php 
								if (isset($errors['user'])) {
									echo "<span class='error'>{$errors['user']}</span>";
								}
								if (isset($errors['exist'])) {
									echo "<span class='error'>{$errors['exist']}</span>";
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
							<input type="text" name="address" class="form-control" id="" placeholder="address" value="">
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
							<input type="date" name="birthday" class="form-control" id="">
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
						<div class="col-sm-3">
							<label for="" >User Level</label>
						</div>
						<div class="col-sm-9">
							<select name="userlevel" id="" class="form-control">
								<option value="0" selected="selected" >0</option>
								<option value="1" >1</option>
								<option value="2" >2</option>
							</select>
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