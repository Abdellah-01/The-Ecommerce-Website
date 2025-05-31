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

	<!-- Summernote CSS -->
	<link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">

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
			<div class="content settings-content">
				<div class="page-header settings-pg-header">
					<div class="add-item d-flex">
						<div class="page-title">
							<h4>Settings</h4>
							<h6>Manage your settings on portal</h6>
						</div>
					</div>
					<ul class="table-top-head">
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i
									data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
						</li>
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
									data-feather="chevron-up" class="feather-chevron-up"></i></a>
						</li>
					</ul>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="settings-wrapper d-flex">
							<div class="sidebars settings-sidebar theiaStickySidebar" id="sidebar2">
								<div class="sidebar-inner slimscroll">
									<div id="sidebar-menu5" class="sidebar-menu">
										<ul>
											<li class="submenu-open">
												<ul>
													<li class="submenu">
														<a href="javascript:void(0);" class="active subdrop"><i
																data-feather="settings"></i><span>General
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="general-settings.php"
																	class="active">Profile</a></li>
															<li><a href="security-settings.php">Security</a></li>
															<li><a href="notification.php">Notifications</a></li>
															<li><a href="connected-apps.php">Connected Apps</a></li>
														</ul>
													</li>
													<li class="submenu">
														<a href="javascript:void(0);"><i
																data-feather="airplay"></i><span>Website
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="system-settings.php">System Settings</a></li>
															<li><a href="company-settings.php">Company Settings </a>
															</li>
															<li><a href="localization-settings.php">Localization</a>
															</li>
															<li><a href="prefixes.php">Prefixes</a></li>
															<li><a href="preference.php">Preference</a></li>
															<li><a href="appearance.php">Appearance</a></li>
															<li><a href="social-authentication.php">Social
																	Authentication</a></li>
															<li><a href="language-settings.php">Language</a></li>
									<li><a href="policies.php">Policies</a></li>
														</ul>
													</li>
													<li class="submenu">
														<a href="javascript:void(0);"><i
																data-feather="archive"></i><span>App
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="invoice-settings.php">Invoice</a></li>
															<li><a href="printer-settings.php">Printer </a></li>
															<li><a href="pos-settings.php">POS</a></li>
															<li><a href="custom-fields.php">Custom Fields</a></li>
														</ul>
													</li>
													<li class="submenu">
														<a href="javascript:void(0);"><i
																data-feather="server"></i><span>System
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="email-settings.php">Email</a></li>
															<li><a href="sms-gateway.php">SMS Gateways</a></li>
															<li><a href="otp-settings.php">OTP</a></li>
															<li><a href="gdpr-settings.php">GDPR Cookies</a></li>
														</ul>
													</li>
													<li class="submenu">
														<a href="javascript:void(0);"><i
																data-feather="credit-card"></i><span>Financial
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="payment-gateway-settings.php">Payment
																	Gateway</a></li>
															<li><a href="bank-settings-grid.php">Bank Accounts </a>
															</li>
															<li><a href="tax-rates.php">Tax Rates</a></li>
															<li><a href="currency-settings.php">Currencies</a></li>
														</ul>
													</li>
													<li class="submenu">
														<a href="javascript:void(0);"><i
																data-feather="layout"></i><span>Other
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="storage-settings.php">Storage</a></li>
															<li><a href="ban-ip-address.php">Ban IP Address </a></li>
														</ul>
													</li>
												</ul>
											</li>

										</ul>
									</div>
								</div>
							</div>
							<div class="settings-page-wrap">
								<form action="general-settings.php">
									<div class="setting-title">
										<h4>Profile Settings</h4>
									</div>
									<div class="card-title-head">
										<h6><span><i data-feather="user" class="feather-chevron-up"></i></span>Employee
											Information</h6>
									</div>
									<div class="profile-pic-upload">
										<div class="profile-pic">
											<span><i data-feather="plus-circle" class="plus-down-add"></i> Profile
												Photo</span>
										</div>
										<div class="new-employee-field">
											<div class="mb-0">
												<div class="image-upload mb-0">
													<input type="file">
													<div class="image-uploads">
														<h4>Change Image</h4>
													</div>
												</div>
												<span>For better preview recommended size is 450px x 450px. Max size
													5MB.</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="mb-3">
												<label class="form-label">First Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="mb-3">
												<label class="form-label">Last Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="mb-3">
												<label class="form-label">User Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="mb-3">
												<label class="form-label">Phone Number</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<div class="mb-3">
												<label class="form-label">Email</label>
												<input type="email" class="form-control">
											</div>
										</div>
									</div>
									<div class="card-title-head">
										<h6><span><i data-feather="map-pin" class="feather-chevron-up"></i></span>Our
											Address</h6>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="mb-3">
												<label class="form-label">Address</label>
												<input type="email" class="form-control">
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-3">
											<div class="mb-3">
												<label class="form-label">Country</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-3">
											<div class="mb-3">
												<label class="form-label">State / Province</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-3">
											<div class="mb-3">
												<label class="form-label">City</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-3">
											<div class="mb-3">
												<label class="form-label">Postal Code</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="text-end settings-bottom-btn">
										<button type="button" class="btn btn-cancel me-2">Cancel</button>
										<button type="submit" class="btn btn-submit">Save Changes</button>
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

	<!-- Datetimepicker JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Summernote JS -->
	<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Sticky-sidebar -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

	<!-- Sweetalert 2 -->
	<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
	<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>


</body>

</html>