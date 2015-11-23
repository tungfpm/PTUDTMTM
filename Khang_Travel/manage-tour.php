<?php 
	session_start();
	require_once 'includes/header.admin.php';
	require_once'process/user.class.php';
	$isAdmin=new user();
	$isAdmin->check_Admin();
 ?>

<div id="content">
		<div class="row">
			<h2 class="text-center">Manage Tours</h2>
		</div>
	
	<div class="container">
		<section>
		<div class="row">
			<div class="col-xs-12 col-sm-1">
				<a href="add-tour.php" class="btn btn-primary ">Add tours</a>
			</div>
			<div class="col-xs-10 col-sm-11">
				<form action="" method="get" accept-charset="utf-8">
				<table class="table table-bordered table-hover">
	 				<thead>
						<tr>
							<td><input type="checkbox"></td>
							<th>Tour ID</th>
		 					<th>Tour Name</th>
		 					<th>Categories Tour</th>
		 					<th>Location</th>
		 					<th>Creat by</th>
		 					<th>Tour Price</th>
		 					<th>Tour Amount</th>
		 					<th>Tour Description</th>
		 					<th>Edit</th>
		 					<th>Delete</th>
		 					
						</tr>
	 				</thead>
	 				<tbody>
	 				<?php 
	 					require_once'process/tour.class.php';
	 					$show=new tour;
	 					if ($show->show_Tour()==0) {
	 						echo "Zero !";
	 					}else{
	 						$data=$show->show_Tour();
	 						// echo "<pre>";
	 						// echo print_r($data);
	 						// echo "</pre>";
	 						foreach ($data as $value) {
	 							$tourId=$value['tour_id'];
	 							$tourUserName=$value['user_name'];
	 							$tourCategories=$value['cat_name'];
	 							$tourLocation=$value['locate_name'];
	 							$tourName=$value['tour_name'];
	 							$tourPrice=$value['tour_price'];
	 							$tourAmount=$value['tour_amount'];
	 							$tourDescription=$value['tour_description'];
	 							//$tourImageName=ltrim($value['image_name'],'/');
	 							echo "<tr>
	 									<td><input type='checkbox' name='multi[]' value='$tourId'></td>
				 						<td>$tourId</td>
				 						<td>$tourName</td>
				 						<td>$tourCategories</td>
				 						<td>$tourLocation</td>
				 						<td>$tourUserName</td>
				 						<td>$tourPrice</td>
				 						<td>$tourAmount</td>
				 						<td>$tourDescription</td>
				 						<td><a href='edit-tour.php?tour-id=$tourId'>Edit</a></td>
				 						<td><button type='submit' name='submit' class='btn btn-danger' onclick=' myFunction()'>Delete</button></td>
	 								</tr>";
	 						}
	 					}
	 				 ?>
	 					
	 				</tbody>
				</table>
	 				<a href="javascript:void(0)" onclick="CheckAll()">CheckAll</a>
	 				<a href="javascript:void(0)" onclick="UnCheckAll()">UnCheckAll</a>
				</form>
			</div>
		</div>
		</section>
	</div>
</div>
<?php 
	if (isset($_GET['submit'])) {
		$multi=$_GET['multi'];
		foreach ($multi as $tours) {
			require_once 'process/tour.class.php';
			$del=new tour;
			$del->delete_Tour($tours);
		}
		require_once 'process/tour.class.php';
		$delImage=new tour;
		foreach ($multi as  $image) {
			$delImage->delete_Image($image);
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
	<script src="js/jquery.min.js" type="text/javascript" ></script>
  	<script src="js/bootstrap.min.js" type="text/javascript" ></script>
</body>
</html>