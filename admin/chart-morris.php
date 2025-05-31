<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="POS - Bootstrap Admin Template">
	<meta name="keywords"
		content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
	<meta name="author" content="Dreamguys - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title>Abdellah | Admin Pannel</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- animation CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!-- Datatable CSS -->
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

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

		<div class="page-wrapper cardhead">
			<div class="content">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Morris Chart</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Morris Charts</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title">Bar Chart</div>
							</div>
							<div class="card-body">
								<div id="morrisBar1" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title">Stacked Bar Chart </div>
							</div>
							<div class="card-body">
								<div id="morrisBar3" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title">Line Chart</div>
							</div>
							<div class="card-body">
								<div id="morrisLine1" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->


					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title">Area Chart</div>
							</div>
							<div class="card-body">
								<div id="morrisArea1" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title">Line Chart</div>
							</div>
							<div class="card-body">
								<div id="morrisBar6" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title">Line Chart</div>
							</div>
							<div class="card-body">
								<div id="morrisBar7" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title">Donut Chart</div>
							</div>
							<div class="card-body">
								<div id="morrisDonut1" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

				</div>

			</div>
		</div>
	</div>
	<div class="customizer-links" id="setdata">
		<ul class="sticky-sidebar">
			<li class="sidebar-icons">
				<a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
					data-bs-original-title="Theme">
					<i data-feather="settings" class="feather-five"></i>
				</a>
			</li>
		</ul>
	</div>

	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.7.1.min.js"></script>

	<!-- Feather Icon JS -->
	<script src="assets/js/feather.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/js/jquery.slimscroll.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Chart JS -->
	<script src="assets/plugins/morris/raphael-min.js"></script>
	<script src="assets/plugins/morris/morris.min.js"></script>
	<script src="assets/plugins/morris/chart-data.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>


</body>

</html>