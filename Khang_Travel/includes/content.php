<div id="content">
			<div id="calltoaction">
				<div class="jumbotron">
					<h1>Cuộc đời là những chuyến đi</h1>
					<p>Nên hãy cứ đi để tìm lại chính mình</p>
					<a href="reservation_tour.php" class="btn btn-lg btn-success">Đặt Tour</a>
					<a href="#" class="btn btn-lg btn-feature">Giới thiệu</a>
				</div>
			</div>

			<div id="feature1">
				<div class="container">
					<div class="row">
						<div class="col-xs-2"></div>
						<div class="col-xs-10">
					
							<form action="search.php" method="POST" accept-charset="utf-8" role="search" class="navbar-form navbar-left">
								<fieldset>
									<legend><strong>Tìm tour du lịch</strong></legend>
									<div class="form-group">
										<input type="search" name="textsearch" value="" placeholder="Nơi bạn muốn đến...." class="form-control input-lg">
									</div>

									<div class="form-group">
										<select name="locate" class="form-control input-lg">
										<option value="" >Dia Diem</option>
											<?php 
												require_once 'process/locate.class.php';
												$locate=new locate;
												if ($locate->show_Locate()==0) {
													
												}else{
													$data=$locate->show_Locate();
													foreach ($data as $value) {
														$locateId=$value['locate_id'];
														$locateName=$value['locate_name'];
														echo "<option value='$locateId'>$locateName</option>}
														";
													}
												}
											 ?>
										</select>
									</div>
									<div class="form-group">
										<select name="price" class="form-group input-lg form-control">
											<option value="0">Giá</option>
											<option value="100-500">100-500 nghin</option>
											<option value="500-1000">500-1000 nghin</option>
											<option value="1000">tren 1000 nghin</option>
											
										</select>
									</div>

									<!-- <div class="form-group">
										<select name="" class="form-group input-lg form-control">
											<option value="">Thời gian</option>
										</select>
									</div> -->
									<button type="submit" name="search" class="form-group btn btn-success btn-lg">Tìm tour</button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>



			<div id="feature2">
				<div class="container ">
					<div class="row ">
						<h3>Những tour nổi bật</h3>
						<?php 
	require_once 'process/tour.class.php';
	$show=new tour;
	$errros=array();
	if ($show->show_Tour1()==0) {
		$errros['zero']="Zero !";
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
			echo "<div class='col-md-4'><a href='reservation_tour.php?tour-id=$tourId'>
					<img src='$tourImage' alt='$tourName' title='$tourName' height='200' width='310'></a>
					<h4>$tourName</h4>
					<p>$tourDescription</p>
					</div>
			";

		}
	}
 ?>
					</div>
				</div>
			</div><!-- feature2 -->

			<div id="feature3">
				<div class="container">
					<div class="row">
						<div id="highlight" class="col-md-6 text-center ">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tourlike" title="" data-toggle="tab" class="">Tour yêu thích</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade in active" id="tourlike">
									<h3>Những tour nổi bật</h3>
									<div class="col-md-6">
										<img src="images/camranh/camranh1.jpg" alt="" height="170px" width="240px">
										<h4>Tour Cam Ranh Bay</h4>
										<p>Khám phá biển nước Cam Ranh</p>
									</div>
									<div class="col-md-6">
										<img src="images/camranh/camranh2.jpg" alt="" height="170px" width="240px">
										<h4>Tour Hạ Long Bay</h4>
										<p>Khám phá vịnh Hạ Long, kỳ quan thiên nhiên của thế giới</p>
									</div>
									<div class="col-md-6">
										<img src="images/camranh/camranh1.jpg" alt="" height="170px" width="240px">
										<h4>Tour Cam Ranh Bay</h4>
										<p>Khám phá biển nước Cam Ranh</p>
									</div>
									<div class="col-md-6">
										<img src="images/camranh/camranh2.jpg" alt="" height="170px" width="240px">
										<h4>Tour Hạ Long Bay</h4>
										<p>Khám phá vịnh Hạ Long, kỳ quan thiên nhiên của thế giới</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 text-center">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#toursaleof" title="" data-toggle="tab">Tour giảm giá</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade in active" id="toursaleof">
									<h3>Những tour nổi bật</h3>
									<div class="col-md-6">
										<img src="images/camranh/camranh1.jpg" alt="" height="170px" width="240px">
										<h4>Tour Cam Ranh Bay</h4>
										<p>Khám phá biển nước Cam Ranh</p>
									</div>
									<div class="col-md-6">
										<img src="images/camranh/camranh2.jpg" alt="" height="170px" width="240px">
										<h4>Tour Hạ Long Bay</h4>
										<p>Khám phá vịnh Hạ Long, kỳ quan thiên nhiên của thế giới</p>
									</div>
									<div class="col-md-6">
										<img src="images/camranh/camranh1.jpg" alt="" height="170px" width="240px">
										<h4>Tour Cam Ranh Bay</h4>
										<p>Khám phá biển nước Cam Ranh</p>
									</div>
									<div class="col-md-6">
										<img src="images/camranh/camranh2.jpg" alt="" height="170px" width="240px">
										<h4>Tour Hạ Long Bay</h4>
										<p>Khám phá vịnh Hạ Long, kỳ quan thiên nhiên của thế giới</p>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div><!-- feature3 -->

			<div id="feature4">
				<div class="container">
					<div class="row">
						<form class=""  action="">
							<div class=" form-group col-xs-12 col-sm-5 col-sm-offset-2">
								<label for="" class="sr-only">Email</label>
								<input type="email" class="form-control input-lg" name="" value="" placeholder="Nhập email đăng ký..." >
							</div>
							<div class="form-group col-xs-12 col-sm-3 re">
								<a href="register.php" class="btn btn-success btn-lg btn-block form-group">Đăng Ký</a>
							</div>
						</form>
					</div>
				</div>
			</div><!-- feature4 -->
		</div><!-- #content -->