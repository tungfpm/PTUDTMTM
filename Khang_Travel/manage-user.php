<?php 
	require_once'includes/header.admin.php';
	require_once'process/user.class.php';
	$isAdmin=new user();
	$isAdmin->check_Admin();
 ?>
<div id="content" >
	<div class="row">
		<h2 class="text-center">Manage Users</h2>
	</div>
	<div class="container">
		<section>
			<table class="table table-bordered table-hover">
 				<thead>
					<tr>
						<th>User Name</th>
	 					<th>User Mail</th>
	 					<th>User Phone</th>
	 					<th>User Address</th>
	 					<th>User Birthday</th>
	 					<th>User Sex</th>
	 					<th>User Level</th>
	 					<th>Edit</th>
	 					
					</tr>
 				</thead>
 				<tbody>
 				<?php 
 					
 					$show=new user;
 					if ($show->show_User()==0) {
 						echo "Khong co ban ghi";
 					}else{
 						$data=$show->show_User();
 						// echo "<pre>";
 						// echo print_r($data);
 						// echo "</pre>";
 						foreach ($data as $value) {
 							$userId=$value['user_id'];
 							$userName=$value['user_name'];
 							$userEmail=$value['user_email'];
 							$userPassword=$value['password'];
 							$userPhone=$value['phone'];
 							$userAddress=$value['address'];
 							$userBirthday=$value['birthday'];
 							$userSex=$value['sex'];
 							$userLevel=$value['user_level'];
 							echo "<tr>
			 						<td>$userName</td>
			 						<td>$userEmail</td>
			 						<td>$userPhone</td>
			 						<td>$userAddress</td>
			 						<td>$userBirthday</td>
			 						<td>$userSex</td>
			 						<td>$userLevel</td>
			 						<td><a href='edit-user.php?user-id=$userId'>Edit</a></td>
 								</tr>";
 						}
 					}
 				 ?>
 					
 				</tbody>
			</table>
		</section>
	</div>
</div>

	<script src="js/jquery.min.js" type="text/javascript" ></script>
  	<script src="js/bootstrap.min.js" type="text/javascript" ></script>
</body>
</html>