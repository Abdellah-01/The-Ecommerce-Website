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

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

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
					<div class="add-item d-flex">
						<div class="page-title">
							<h4>New Employee</h4>
							<h6>Create new Employee</h6>
						</div>
					</div>
					<ul class="table-top-head">
						<li>
							<div class="page-btn">
								<a href="employees-list.php" class="btn btn-secondary"><i data-feather="arrow-left"
										class="me-2"></i>Back to Employee List</a>
							</div>
						</li>
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
									data-feather="chevron-up" class="feather-chevron-up"></i></a>
						</li>
					</ul>
				</div>
				<!-- /product list -->
				<form action="add-employee.php">
					<div class="card">
						<div class="card-body">
							<div class="new-employee-field">
								<div class="card-title-head">
									<h6><span><i data-feather="info" class="feather-edit"></i></span>Employee
										Information</h6>
								</div>
								<div class="profile-pic-upload">
									<div class="profile-pic">
										<span><i data-feather="plus-circle" class="plus-down-add"></i> Profile
											Photo</span>
									</div>
									<div class="input-blocks mb-0">
										<div class="image-upload mb-0">
											<input type="file">
											<div class="image-uploads">
												<h4>Change Image</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4 col-md-6">
										<div class="mb-3">
											<label class="form-label">First Name</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="mb-3">
											<label class="form-label">Last Name</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input type="email" class="form-control">
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="mb-3">
											<label class="form-label">Contact Number</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="mb-3">
											<label class="form-label">Emp Code</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="input-blocks">
											<label>Date of Birth</label>

											<div class="input-groupicon calender-input">
												<i data-feather="calendar" class="info-img"></i>
												<input type="text" class="datetimepicker form-control"
													placeholder="Select Date">
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="mb-3">
											<label class="form-label">Gender</label>
											<select class="select">
												<option>Choose</option>
												<option>Male</option>
												<option>Female</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="mb-3">
											<label class="form-label">Nationality</label>
											<select class="select">
												<option>Choose</option>
												<option>United Kingdom</option>
												<option>India</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="input-blocks">
											<label>Joining Date</label>
											<div class="input-groupicon calender-input">
												<i data-feather="calendar" class="info-img"></i>
												<input type="text" class="datetimepicker form-control"
													placeholder="Select Date">
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="mb-3">
											<div class="add-newplus">
												<label class="form-label">Shift</label>
												<a href="#"><span><i data-feather="plus-circle"
															class="plus-down-add"></i>Add new</span></a>
											</div>
											<select class="select">
												<option>Choose</option>
												<option>Regular</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="mb-3">
											<label class="form-label">Department</label>
											<select class="select">
												<option>Choose</option>
												<option>UI/UX</option>
												<option>Support</option>
												<option>HR</option>
												<option>Engineering</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="mb-3">
											<label class="form-label">Designation</label>
											<select class="select">
												<option>Choose</option>
												<option>Designer</option>
												<option>Developer</option>
												<option>Tester</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="mb-3">
											<label class="form-label">Blood Group</label>
											<select class="select">
												<option>Choose</option>
												<option>A+</option>
												<option>A-</option>
												<option>B+</option>
												<option>B-</option>
												<option>O+</option>
												<option>O-</option>
												<option>AB+</option>
												<option>AB-</option>
											</select>
										</div>
									</div>
								</div>
								<div class="other-info">
									<div class="card-title-head">
										<h6><span><i data-feather="info" class="feather-edit"></i></span>Other
											Information</h6>
									</div>
									<div class="row">
										<div class="col-lg-4 col-md-6">
											<div class="mb-3">
												<label class="form-label">Emergency No 1</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="mb-3">
												<label class="form-label">Emergency No 2</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="mb-3">
												<label class="form-label">Address</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="mb-3">
												<label class="form-label">Country</label>
												<select class="select">
													<option>Choose</option>
													<option>United Kingdom</option>
													<option>USA</option>
												</select>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="mb-3">
												<label class="form-label">State</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="mb-3">
												<label class="form-label">City</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="mb-3">
												<label class="form-label">Zipcode</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="pass-info">
									<div class="card-title-head">
										<h6><span><i data-feather="info" class="feather-edit"></i></span>Password</h6>
									</div>
									<div class="row">
										<div class="col-lg-4 col-md-6">
											<div class="input-blocks mb-md-0 mb-sm-3">
												<label>Password</label>
												<div class="pass-group">
													<input type="password" class="pass-input">
													<span class="fas toggle-password fa-eye-slash"></span>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="input-blocks mb-0">
												<label>Confirm Password</label>
												<div class="pass-group">
													<input type="password" class="pass-inputa">
													<span class="fas toggle-passworda fa-eye-slash"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /product list -->

					<div class="text-end mb-3">
						<button type="button" class="btn btn-cancel me-2">Cancel</button>
						<button type="submit" class="btn btn-submit">Save Product</button>
					</div>
				</form>
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

	<!-- Datetimepicker JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>


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