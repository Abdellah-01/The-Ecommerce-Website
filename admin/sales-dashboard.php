<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>Abdellah | Admin Pannel</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- animation CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

	<!-- Datatable CSS -->
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Daterangepikcer CSS -->
	<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">

	<!-- Map CSS -->
	<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.5.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
	<div id="global-loader">
		<div class="whirly-loader"> </div>
	</div>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<?php require"header.php"; ?>
		<!-- /Header -->

		<!-- Sidebar -->
		<?php require"Sidebar.php"; ?>
		<!-- /Sidebar -->


		<div class="page-wrapper">
			<div class="content">
				<div class="welcome d-lg-flex align-items-center justify-content-between">
					<div class="d-flex align-items-center welcome-text">
						<h3 class="d-flex align-items-center"><img src="assets/img/icons/hi.svg" alt="img">&nbsp;Hi John
							Smilga,</h3>&nbsp;<h6>here's what's happening with your store today.</h6>
					</div>
					<div class="d-flex align-items-center">
						<div class="position-relative daterange-wraper me-2">
							<div class="input-groupicon calender-input">
								<input type="text" class="form-control  date-range bookingrange" placeholder="Select"
									value="13 Aug 1992">
							</div>
							<i data-feather="calendar" class="feather-14"></i>
						</div>
						<button type="button" data-toggle="tooltip"
							class="btn btn-white-outline d-none d-md-inline-block" data-bs-toggle="tooltip"
							data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw"
								class="feather-16"></i></button>
						<a href="#" class="d-none d-lg-inline-block" data-bs-toggle="tooltip" data-bs-placement="top"
							title="Collapse" id="collapse-header"><i data-feather="chevron-up"
								class="feather-16"></i></a>
					</div>
				</div>
				<div class="row sales-cards">
					<div class="col-xl-6 col-sm-12 col-12">
						<div class="card d-flex align-items-center justify-content-between default-cover mb-4">
							<div>
								<h6>Weekly Earning</h6>
								<h3>$<span class="counters" data-count="95000.45">95000.45</span></h3>
								<p class="sales-range"><span class="text-success"><i data-feather="chevron-up"
											class="feather-16"></i>48%&nbsp;</span>increase compare to last week</p>
							</div>
							<img src="assets/img/icons/weekly-earning.svg" alt="img">
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card color-info bg-primary mb-4">
							<img src="assets/img/icons/total-sales.svg" alt="img">
							<h3 class="counters" data-count="10000.00">10,000+</h3>
							<p>No of Total Sales</p>
							<i data-feather="rotate-ccw" class="feather-16" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Refresh"></i>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card color-info bg-secondary mb-4">
							<img src="assets/img/icons/purchased-earnings.svg" alt="img">
							<h3 class="counters" data-count="800.00">800+</h3>
							<p>No of Total Sales</p>
							<i data-feather="rotate-ccw" class="feather-16" data-bs-toggle="tooltip"
								data-bs-placement="top" title="Refresh"></i>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-12 col-xl-4 d-flex">
						<div class="card flex-fill default-cover w-100 mb-4">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h4 class="card-title mb-0">Best Seller</h4>
								<div class="dropdown">
									<a href="javascript:void(0);" class="view-all d-flex align-items-center">
										View All<span class="ps-2 d-flex align-items-center"><i
												data-feather="arrow-right" class="feather-16"></i></span>
									</a>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-borderless best-seller">
										<tbody>
											<tr>
												<td>
													<div class="product-info">
														<a href="product-list.php" class="product-img">
															<img src="assets/img/products/stock-img-01.png"
																alt="product">
														</a>
														<div class="info">
															<a href="product-list.php">Lenovo 3rd Generation</a>
															<p class="dull-text">$4420</p>
														</div>
													</div>
												</td>
												<td>
													<p class="head-text">Sales</p>
													6547
												</td>
											</tr>
											<tr>
												<td>
													<div class="product-info">
														<a href="product-list.php" class="product-img">
															<img src="assets/img/products/stock-img-06.png"
																alt="product">
														</a>
														<div class="info">
															<a href="product-list.php">Bold V3.2</a>
															<p class="dull-text">$1474</p>
														</div>
													</div>
												</td>
												<td>
													<p class="head-text">Sales</p>
													3474
												</td>
											</tr>
											<tr>
												<td>
													<div class="product-info">
														<a href="product-list.php" class="product-img">
															<img src="assets/img/products/stock-img-02.png"
																alt="product">
														</a>
														<div class="info">
															<a href="product-list.php">Nike Jordan</a>
															<p class="dull-text">$8784</p>
														</div>
													</div>
												</td>
												<td>
													<p class="head-text">Sales</p>
													1478
												</td>
											</tr>
											<tr>
												<td>
													<div class="product-info">
														<a href="product-list.php" class="product-img">
															<img src="assets/img/products/stock-img-03.png"
																alt="product">
														</a>
														<div class="info">
															<a href="product-list.php">Apple Series 5 Watch</a>
															<p class="dull-text">$3240</p>
														</div>
													</div>
												</td>
												<td>
													<p class="head-text">Sales</p>
													987
												</td>
											</tr>
											<tr>
												<td>
													<div class="product-info">
														<a href="product-list.php" class="product-img">
															<img src="assets/img/products/stock-img-04.png"
																alt="product">
														</a>
														<div class="info">
															<a href="product-list.php">Amazon Echo Dot</a>
															<p class="dull-text">$597</p>
														</div>
													</div>
												</td>
												<td>
													<p class="head-text">Sales</p>
													784
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-xl-8 d-flex">
						<div class="card flex-fill default-cover w-100 mb-4">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h4 class="card-title mb-0">Recent Transactions</h4>
								<div class="dropdown">
									<a href="javascript:void(0);" class="view-all d-flex align-items-center">
										View All<span class="ps-2 d-flex align-items-center"><i
												data-feather="arrow-right" class="feather-16"></i></span>
									</a>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-borderless recent-transactions">
										<thead>
											<tr>
												<th>#</th>
												<th>Order Details</th>
												<th>Payment</th>
												<th>Status</th>
												<th>Amount</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>
													<div class="product-info">
														<a href="product-list.php" class="product-img">
															<img src="assets/img/products/stock-img-05.png"
																alt="product">
														</a>
														<div class="info">
															<a href="product-list.php">Lobar Handy</a>
															<span class="dull-text d-flex align-items-center"><i
																	data-feather="clock" class="feather-14"></i>15
																Mins</span>
														</div>
													</div>
												</td>
												<td>
													<span class="d-block head-text">Paypal</span>
													<span class="text-blue">#416645453773</span>
												</td>
												<td><span class="badge background-less border-success">Success</span>
												</td>
												<td>$1,099.00</td>
											</tr>
											<tr>
												<td>2</td>
												<td>
													<div class="product-info">
														<a href="product-list.php" class="product-img">
															<img src="assets/img/products/expire-product-01.png"
																alt="product">
														</a>
														<div class="info">
															<a href="product-list.php">Red Premium Handy</a>
															<span class="dull-text d-flex align-items-center"><i
																	data-feather="clock" class="feather-14"></i>10
																Mins</span>
														</div>
													</div>
												</td>
												<td>
													<span class="d-block head-text">Apple Pay</span>
													<span class="text-blue">#147784454554</span>
												</td>
												<td><span class="badge background-less border-danger">Canceled</span>
												</td>
												<td>$600.55</td>
											</tr>
											<tr>
												<td>3</td>
												<td>
													<div class="product-info">
														<a href="product-list.php" class="product-img">
															<img src="assets/img/products/expire-product-02.png"
																alt="product">
														</a>
														<div class="info">
															<a href="product-list.php">Iphone 14 Pro</a>
															<span class="dull-text d-flex align-items-center"><i
																	data-feather="clock" class="feather-14"></i>10
																Mins</span>
														</div>
													</div>
												</td>
												<td>
													<span class="d-block head-text">Stripe</span>
													<span class="text-blue">#147784454554</span>
												</td>
												<td><span class="badge background-less border-primary">Pending</span>
												</td>
												<td>$1,099.00</td>
											</tr>
											<tr>
												<td>4</td>
												<td>
													<div class="product-info">
														<a href="product-list.php" class="product-img">
															<img src="assets/img/products/expire-product-03.png"
																alt="product">
														</a>
														<div class="info">
															<a href="product-list.php">Black Slim 200</a>
															<span class="dull-text d-flex align-items-center"><i
																	data-feather="clock" class="feather-14"></i>10
																Mins</span>
														</div>
													</div>
												</td>
												<td>
													<span class="d-block head-text">PayU</span>
													<span class="text-blue">#147784454554</span>
												</td>
												<td><span class="badge background-less border-success">Success</span>
												</td>
												<td>$1,569.00</td>
											</tr>
											<tr>
												<td>5</td>
												<td>
													<div class="product-info">
														<a href="product-list.php" class="product-img">
															<img src="assets/img/products/expire-product-04.png"
																alt="product">
														</a>
														<div class="info">
															<a href="product-list.php">Woodcraft Sandal</a>
															<span class="dull-text d-flex align-items-center"><i
																	data-feather="clock" class="feather-14"></i>15
																Mins</span>
														</div>
													</div>
												</td>
												<td>
													<span class="d-block head-text">Paytm</span>
													<span class="text-blue">#147784454554</span>
												</td>
												<td><span class="badge background-less border-success">Success</span>
												</td>
												<td>$1,478.00</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Button trigger modal -->

				<div class="row sales-board">
					<div class="col-md-12 col-lg-7 col-sm-12 col-12">
						<div class="card flex-fill default-cover">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h5 class="card-title mb-0">Sales Analytics</h5>
								<div class="graph-sets">
									<div class="dropdown dropdown-wraper">
										<button class="btn btn-white btn-sm dropdown-toggle d-flex align-items-center"
											type="button" id="dropdown-sales" data-bs-toggle="dropdown"
											aria-expanded="false"><i data-feather="calendar"
												class="feather-14"></i>2023</button>
										<ul class="dropdown-menu" aria-labelledby="dropdown-sales">
											<li>
												<a href="javascript:void(0);" class="dropdown-item">2023</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">2022</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">2021</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div id="sales-analysis" class="chart-set"></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-5 col-sm-12 col-12">
						<!-- World Map -->
						<div class="card default-cover">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h5 class="card-title mb-0">Sales by Countries</h5>
								<div class="graph-sets">
									<div class="dropdown dropdown-wraper">
										<button class="btn btn-white btn-sm dropdown-toggle d-flex align-items-center"
											type="button" id="dropdown-country-sales" data-bs-toggle="dropdown"
											aria-expanded="false">This Week</button>
										<ul class="dropdown-menu" aria-labelledby="dropdown-country-sales">
											<li>
												<a href="javascript:void(0);" class="dropdown-item">This Month</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">This Year</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div id="sales_db_world_map" style="height: 265px;"></div>
								<p class="sales-range"><span class="text-success"><i data-feather="chevron-up"
											class="feather-16"></i>48%&nbsp;</span>increase compare to last week</p>
							</div>
						</div>
						<!-- /World Map -->
					</div>
				</div>
			</div>
		</div>

		<div class="customizer-links">
			<ul class="sticky-sidebar">
				<li class="sidebar-icons">
					<a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
						data-bs-original-title="Theme">
						<i data-feather="settings" class="feather-five"></i>
					</a>
				</li>
			</ul>
		</div>


	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.7.1.min.js"></script>

	<!-- Feather Icon JS -->
	<script src="assets/js/feather.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/js/jquery.slimscroll.min.js"></script>

	<!-- Datatable JS -->
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap5.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Chart JS -->
	<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
	<script src="assets/plugins/apexchart/chart-data.js"></script>

	<!-- Daterangepikcer JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>

	<!-- Map JS -->
	<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.5.min.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-ru-mill.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-uk_countries-mill.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-in-mill.js"></script>
	<script src="assets/js/jvectormap.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>


</body>

</html>