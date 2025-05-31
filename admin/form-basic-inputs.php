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
			<div class="content container-fluid">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Basic Inputs</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Basic Inputs</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Basic Inputs</h5>
							</div>
							<div class="card-body">
								<form action="#">
									<div class="mb-3 row">
										<label class="col-form-label col-md-2">Text Input</label>
										<div class="col-md-10">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-form-label col-md-2">Password</label>
										<div class="col-md-10">
											<input type="password" class="form-control">
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-form-label col-md-2">Disabled Input</label>
										<div class="col-md-10">
											<input type="text" class="form-control" disabled="disabled">
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-form-label col-md-2">Readonly Input</label>
										<div class="col-md-10">
											<input type="text" class="form-control" value="readonly"
												readonly="readonly">
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-form-label col-md-2">Placeholder</label>
										<div class="col-md-10">
											<input type="text" class="form-control" placeholder="Placeholder">
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-form-label col-md-2">File Input</label>
										<div class="col-md-10">
											<input class="form-control" type="file">
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-form-label col-md-2">Default Select</label>
										<div class="col-md-10">
											<select class="form-select">
												<option>-- Select --</option>
												<option>Option 1</option>
												<option>Option 2</option>
												<option>Option 3</option>
												<option>Option 4</option>
												<option>Option 5</option>
											</select>
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-form-label col-md-2">Radio</label>
										<div class="col-md-10">
											<div class="radio">
												<label>
													<input type="radio" name="radio"> Option 1
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="radio"> Option 2
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="radio"> Option 3
												</label>
											</div>
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-form-label col-md-2">Checkbox</label>
										<div class="col-md-10">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="checkbox"> Option 1
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="checkbox"> Option 2
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="checkbox"> Option 3
												</label>
											</div>
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-form-label col-md-2">Textarea</label>
										<div class="col-md-10">
											<textarea rows="5" cols="5" class="form-control"
												placeholder="Enter text here"></textarea>
										</div>
									</div>
									<div class="mb-3 mb-0 row">
										<label class="col-form-label col-md-2">Input Addons</label>

										<div class="col-md-10">
											<div class="input-group mb-3">
												<span class="input-group-text" id="basic-addon1">@</span>
												<input type="text" class="form-control" placeholder="Username"
													aria-label="Username" aria-describedby="basic-addon1">
												<button class="btn btn-primary" type="button">Button</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Input Sizes</h5>
							</div>
							<div class="card-body">
								<form action="#">
									<div class="mb-3 row">
										<label class="col-form-label col-md-2">Large Input</label>
										<div class="col-md-10">
											<input type="text" class="form-control form-control-lg"
												placeholder=".form-control-lg">
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-form-label col-md-2">Default Input</label>
										<div class="col-md-10">
											<input type="text" class="form-control" placeholder=".form-control">
										</div>
									</div>
									<div class="mb-3 mb-0 row">
										<label class="col-form-label col-md-2">Small Input</label>
										<div class="col-md-10">
											<input type="text" class="form-control form-control-sm"
												placeholder=".form-control-sm">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->
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

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>


</body>

</html>