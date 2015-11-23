<?php 
require_once 'includes/header.admin.php';
 ?>

		<div id="content">
			<div id="feature1">
			<div class="row container">
				<div class="col-sm-12">
					<h2>Reservation Tours</h2>
					<?php 
						if (isset($_GET['tour-id'])) {
							require_once 'process/tour.class.php';
							$show=new tour;
							if ($show->show_Reservation_Tour($_GET['tour-id'])==0) {
								echo $errors['zero']="Zero ! ";
							}else{
								$data=$show->show_Reservation_Tour($_GET['tour-id']);
								//echo print_r($data);
								foreach ($data as $value) {
									$tourID=$value['tour_name'];
									$tourPrice=$value['tour_price'];
									$tourAmount=$value['tour_amount'];
									$tourDescription=$value['tour_description'];
									$tourImage=ltrim($value['image_name'],'/');
									$tourLocate=$value['locate_name'];
									echo "
									<form action='' method='POST'>
									<div class='row container form-group'>
										<div class='col-sm-2'>
											<label for=>Amount</label>
										</div>
										<div class='col-sm-5'>
											<input type='number'  name='touramount' class='form-group form-control' value='' placeholder='so luong nguoi tham gia'>
										</div>
									</div>
									<div class='row container'>
										<div class='col-sm-2'>
											<label for=''>Description</label>
										</div>
										<div class='col-sm-5'>
											<textarea name='description' class='form-control form-group'></textarea>
										</div>
									</div>
									<div class='row container'>
											<div class='col-sm-3'>
												<img src='$tourImage' height='120' width='200' alt=''>
											</div>
											<div class='col-sm-6'>
												<p>$tourDescription</p>
											</div>
											<div class='col-sm-3'>
												<div class='row'>
													<div class='col-sm-12'><span class='price'>Price: $tourPrice</span></div>
												</div>
												<div class='row'>
													<div class='col-sm-12'>
														<button type='submit' name='submit' class='btn btn-success form-group'>Reservation Tour</button>
													</div>
												</div>
											</div>	
											</div>
									</form>
								<div class='row container form-group'>
									<div class='col-sm-3'>
										
									</div>
									<div class='col-sm-6'>
										<ul class='nav nav-tabs'>
											<li role='presentation' class='active'><a href='#image' title='' data-toggle='tab'>Tour's Images</a></li>
											<li role='presentation' class=''><a href='#description' title='' data-toggle='tab'>Tour's Description</a></li>
											<li role='presentation' class=''><a href='#FeedBack' title='' data-toggle='tab'>Tour's FeedBack</a></li>
										</ul>
											<div class='tab-content'>
											<div class='tab-pane active' id='image' >
												<img src='$tourImage' height='500' width='800px' alt=''>
											</div>
											<div class='tab-pane ' id='description' >
												<p>$tourDescription<p>
											</div>
											<div class='tab-pane ' id='FeedBack' >
												<p>Feedback</p>
											</div>
									</div>
									</div>
									
								</div>
								

									";
											
								}
							}
							if (isset($_POST['submit'])) {
								$errors=array();
								if (empty($_POST['touramount'])) {
									echo $errors['amount']="Nhap so luong nguoi tham gia";
								}else{
									$tourAmount=$_POST['touramount'];
								}
								if (empty($_POST['description'])) {
									$errors['description']="Ghi chu";
								}else{
									$tour_Description=$_POST['description'];
								}
								if (empty($errors)) {
									require_once 'process/reservation_tour.class.php';
									$reservation=new reservation_tour;
									if ($reservation->reservation_tour($_SESSION['user_id'],$_GET['tour-id'],$reservation->set_amount($tourAmount),$reservation->set_description($tour_Description))==false) {
										
										}else{
											$errors['success']="Dat tour thanh cong !";
											echo "<p class='success text-center'>{$errors['success']}</p>";
									}
								}else{
									//echo print_r($errors);
								}
						 	
							}
						}else{
							require_once 'process/tour.class.php';
							$show=new tour;
							$errros=array();
							if ($show->show_Tour1()==0) {
								//$errros['zero']="Zero !";
							}else{
								$data=$show->show_Tour1();
								//echo print_r($data);
								foreach ($data as $value) {
									$tourId=$value['tour_id'];
									$tourName=$value['tour_name'];
									$tourPrice=$value['tour_price'];
									$tourDescription=$value['tour_description'];
									$tourImage=ltrim($value['image_name'],'/');
									$tourLocate=$value['locate_name'];
									echo "<div class='col-sm-4'><a href='reservation_tour.php?tour-id=$tourId'>
											<img src='$tourImage' alt='$tourName' title='$tourName' height='200' width='310'></a>
											<h4>$tourName</h4>
											<p>$tourDescription</p>
											</div>
									";

								}
							}
						}
					 ?>
					
					<div class="row">
						
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js" type="text/javascript" ></script>
  	<script src="js/bootstrap.min.js" type="text/javascript" ></script>
</body>
</html>
	
