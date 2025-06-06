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

	<!-- animation CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

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

		<div class="page-wrapper">
			<div class="content">
				<div class="page-header">
					<div class="page-title">
						<h4>Profile</h4>
						<h6>User Profile</h6>
					</div>
				</div>
				<!-- /product list -->
				<div class="card">
					<div class="card-body">
						<div class="profile-set">
							<div class="profile-head">

							</div>
							<div class="profile-top">
								<div class="profile-content">
									<div class="profile-contentimg">
										<img src="assets/img/customer/customer5.jpg" alt="img" id="blah">
										<div class="profileupload">
											<input type="file" id="imgInp">
											<a href="javascript:void(0);"><img src="assets/img/icons/edit-set.svg"
													alt="img"></a>
										</div>
									</div>
									<div class="profile-contentname">
										<h2>William Castillo</h2>
										<h4>Updates Your Photo and Personal Details.</h4>
									</div>
								</div>
								<!-- <div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-submit me-2">Save</a>
										<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
									</div> -->
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-sm-12">
								<div class="input-blocks">
									<label class="form-label">First Name</label>
									<input type="text" class="form-control" value="William">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="input-blocks">
									<label class="form-label">Last Name</label>
									<input type="text" class="form-control" value="Castilo">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="input-blocks">
									<label>Email</label>
									<input type="email" class="form-control" value="william@example.com">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="input-blocks">
									<label class="form-label">Phone</label>
									<input type="text" value="+1452 876 5432">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="input-blocks">
									<label class="form-label">User Name</label>
									<input type="text" class="form-control" value="William Castilo">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12">
								<div class="input-blocks">
									<label class="form-label">Password</label>
									<div class="pass-group">
										<input type="password" class="pass-input form-control">
										<span class="fas toggle-password fa-eye-slash"></span>
									</div>
								</div>
							</div>
							<div class="col-12">
								<a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
								<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /product list -->
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

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Sweetalert 2 -->
	<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
	<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>


</body>

</html>