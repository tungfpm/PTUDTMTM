<?php 
require_once 'includes/header.admin.php';
 ?>

		<div id="content">
			<div id="feature1">
			<div class="row">
				<div class="col-sm-12">
					<h2>Manage Categories</h2>
					<div class="row">
						<div class="col-sm-2 ">
							<ul class="list-inline">
								<li><a class="btn btn-primary" href="add-categories.php">Add categories</a></li>
							</ul>
						</div>
						<div class="col-sm-10  container">
						<form action="" method="get" accept-charset="utf-8">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<td><input type="checkbox"></td>
										<th>Categories Id</th>
										<th>Categories Name</th>
										<th>Creat By</th>
										<th>Categories Description</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										require_once 'process/categories.class.php';
										$show=new categories;
										$errors=array();
										if ($show->show_Categories()==0) {
											$errors['null']="khong co ban ghi nao !";
										}else{
											$data=$show->show_Categories();
												foreach ($data as $value) {
													$catId=$value['cat_id'];
													$catName=$value['cat_name'];
													$catDescription=$value['cat_description'];
													$userName=$value['user_name'];
													echo "<tr>
															<td><input type='checkbox' name='multiple[]' value='$catId'></td>
															<td>$catId</td>
															<td>$catName</td>
															<td>$userName</td>
															<td>$catDescription</td>
															<td><a href='edit-categories.php?cat-id=$catId'>Edit</a></td>
															<td><button type='submit' name='delete' class='btn btn-danger'>Delete</button></td>
														</tr>";
												}
										}
									 ?>
								</tbody>
							</table>
							<a href="javascript:void(0)" onclick="CheckAll()">CheckAll</a>
							<a href="javascript:void(0)" onclick="UnCheckAll()">UnCheckAll</a>
							<button type="submit" name="deleteMulti" class="btn btn-danger">Delete Multiple</button>
							</form>
						</div>
					</div>
					<?php 
						if (isset($_GET['deleteMulti'])) {
							$errors=array();
							if (empty($_GET['multiple'])) {
								$errors['uncheck']="Please choose Categories want to Delete !";
							}else{
								$multiple=$_GET['multiple'];
							}
							//echo print_r($errors);
							if (empty($errors)) {

								require_once 'process/categories.class.php';
								foreach ($multiple as $value) {
									$del=new categories;
									$del->delete_Cat($value);
								}
								
							}
							if (isset($errors['uncheck'])) {
								echo "<span class='error'>{$errors['uncheck']}</span>";
							}
						}
						if (isset($_GET['delete'])) {
							$errors=array();
							if (empty($_GET['multiple'])) {
								$errors['uncheck']="Please choose Categories want to Delete !";
							}else{
								$delete=$_GET['multiple'];
							}
							if (empty($errors)) {
								require_once 'process/categories.class.php';
								foreach ($delete as $value) {
									$del=new categories;
									$del->delete_Cat($value);
								}
							}
							if (isset($errors['uncheck'])) {
								echo "<span class='error'>{$errors['uncheck']}</span>";
							}
						}
					 ?>
					<script>
					function CheckAll(){
						l=document.forms[0].length;
						for (var i = 0; i < l-1; i++) {
							document.forms[0].elements[i].checked=true;
						}
					}
					function UnCheckAll(){
						l=document.forms[0].length;
						for (var i = 0; i < l-1; i++) {
							document.forms[0].elements[i].checked=false;
						}
					}
					</script>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>
	
