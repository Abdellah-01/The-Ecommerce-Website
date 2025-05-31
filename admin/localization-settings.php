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

	<!-- Bootstrap Tagsinput CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

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
														<a href="javascript:void(0);"><i
																data-feather="settings"></i><span>General
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="general-settings.php">Profile</a></li>
															<li><a href="security-settings.php">Security</a></li>
															<li><a href="notification.php">Notifications</a></li>
															<li><a href="connected-apps.php">Connected Apps</a></li>
														</ul>
													</li>
													<li class="submenu">
														<a href="javascript:void(0);" class="active subdrop"><i
																data-feather="airplay"></i><span>Website
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="system-settings.php">System Settings</a></li>
															<li><a href="company-settings.php">Company Settings </a>
															</li>
															<li><a href="localization-settings.php"
																	class="active">Localization</a></li>
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
								<form action="localization-settings.php">
									<div class="setting-title">
										<h4>Localization</h4>
									</div>
									<div class="company-info company-images">
										<div class="card-title-head">
											<h6><span><i data-feather="list"></i></span>Basic Information</h6>
										</div>
										<div class="localization-info">
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Language</h6>
														<p>Select Language of the Website</p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select">
														<select class="select">
															<option>English</option>
															<option>Spanish</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Language Switcher</h6>
														<p>To display in all the pages</p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select">
														<div
															class="status-toggle modal-status d-flex justify-content-between align-items-center">
															<input type="checkbox" id="user3" class="check" checked>
															<label for="user3" class="checktoggle"></label>
														</div>
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Timezone</h6>
														<p>Select Time zone in website</p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select">
														<select class="select">
															<option>UTC 5:30</option>
															<option>(UTC+11:00) INR</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Date format</h6>
														<p>Select date format to display in website</p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select">
														<select class="select">
															<option>22 Jul 2023</option>
															<option>Jul 22 2023</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Time Format</h6>
														<p>Select time format to display in website</p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select">
														<select class="select">
															<option>12 Hours</option>
															<option>24 Hours</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Financial Year</h6>
														<p>Select year for finance </p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select">
														<select class="select">
															<option>2023</option>
															<option>2022</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Starting Month</h6>
														<p>Select starting month to display </p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select">
														<select class="select">
															<option>January</option>
															<option>February</option>
															<option>March</option>
														</select>
													</div>
												</div>
											</div>
										</div>

									</div>
									<div class="company-info company-images">
										<div class="card-title-head">
											<h6><span><i data-feather="credit-card"></i></span>Currency Settings</h6>
										</div>
										<div class="localization-info">
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Currency</h6>
														<p>Select currency </p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select">
														<select class="select">
															<option>United Stated of America</option>
															<option>India</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Currency Symbol</h6>
														<p>Select currency symbol</p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select">
														<select class="select">
															<option>$</option>
															<option>€</option>
															<option>¥</option>

														</select>
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Currency Position</h6>
														<p>Select currency position</p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select">
														<select class="select">
															<option>$100</option>
															<option>$400</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Decimal Separator</h6>
														<p>Select decimal</p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select">
														<select class="select">
															<option>.</option>
															<option>.</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Thousand Separator</h6>
														<p>Select thousand</p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select">
														<select class="select">
															<option>,</option>
															<option>,</option>
														</select>
													</div>
												</div>
											</div>
										</div>

									</div>
									<div class="company-info company-images">
										<div class="card-title-head">
											<h6><span><i data-feather="map"></i></span>Country Settings</h6>
										</div>
										<div class="localization-info">
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Countries Restriction</h6>
														<p>Select country </p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select">
														<select class="select">
															<option>Allow All Countries</option>
															<option>Deny All Countries</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="company-images">
										<div class="card-title-head">
											<h6><span><i data-feather="map"></i></span>File Settings</h6>
										</div>
										<div class="localization-info">
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Allowed Files</h6>
														<p>Select files </p>
													</div>
												</div>
												<div class="col-xl-6 col-lg-8 col-sm-4">
													<div class="localization-select w-100">
														<div class="input-blocks">
															<input class="input-tags form-control" type="text"
																data-role="tagsinput" name="specialist"
																value="JPG,GIF,PNG">
														</div>

													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info mb-sm-0">
														<h6>Max File Size</h6>
														<p>File size </p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select d-flex align-items-center mb-0">
														<input type="text" class="form-control" value="5000">
														<span class="ms-2"> MB</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2"
											data-bs-dismiss="modal">Cancel</button>
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

	<!-- Bootstrap Tagsinput JS -->
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

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