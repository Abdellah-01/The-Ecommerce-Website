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
														<a href="javascript:void(0);" class="active subdrop"><i
																data-feather="archive"></i><span>App
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="invoice-settings.php"
																	class="active">Invoice</a></li>
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
								<form action="invoice-settings.php">
									<div class="setting-title">
										<h4>Invoice Settings</h4>
									</div>
									<div class="company-info border-0">
										<ul class="logo-company">
											<li>
												<div class="row">
													<div class="col-md-4">
														<div class="logo-info me-0 mb-3 mb-md-0">
															<h6>Invoice Logo</h6>
															<p>Upload Logo of your Company to display in Invoice</p>
														</div>
													</div>
													<div class="col-md-6">
														<div class="profile-pic-upload mb-0 me-0">
															<div class="new-employee-field">
																<div class="mb-3 mb-md-0">
																	<div class="image-upload mb-0">
																		<input type="file">
																		<div class="image-uploads">
																			<h4><i data-feather="upload"></i>Upload
																				Photo</h4>
																		</div>
																	</div>
																	<span>For better preview recommended size is 450px x
																		450px. Max size 5mb.</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-2">
														<div class="new-logo ms-auto">
															<a href="#"><img src="assets/img/logo-small.png"
																	alt="Logo"></a>
														</div>
													</div>
												</div>
											</li>
										</ul>
										<div class="localization-info">
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Invoice Prefix</h6>
														<p>Add prefix to your invoice</p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select">
														<input type="text" class="form-control" value="INV -">
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Invoice Due</h6>
														<p>Select due date to display in Invoice</p>
													</div>
												</div>
												<div class="col-sm-4">
													<div
														class="localization-select d-flex align-items-center fixed-width">
														<select class="select">
															<option>5</option>
															<option>6</option>
															<option>7</option>
														</select>
														<span class="ms-2">Days</span>
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Invoice Round Off</h6>
														<p>Value Roundoff in Invoice</p>
													</div>
												</div>
												<div class="col-sm-4">
													<div
														class="localization-select d-flex align-items-center width-custom">
														<div
															class="status-toggle modal-status d-flex justify-content-between align-items-center me-3">
															<input type="checkbox" id="user3" class="check" checked>
															<label for="user3" class="checktoggle"></label>
														</div>
														<select class="select">
															<option>Round Off Up</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Show Company Details</h6>
														<p>Show / Hide Company Details in Invoice</p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="localization-select d-flex align-items-center">
														<div
															class="status-toggle modal-status d-flex justify-content-between align-items-center me-3">
															<input type="checkbox" id="user4" class="check" checked>
															<label for="user4" class="checktoggle"></label>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Invoice Header Terms</h6>
													</div>
												</div>
												<div class="col-sm-8">
													<div class="mb-3">
														<textarea rows="4" class="form-control"
															placeholder="Type your message"></textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="setting-info">
														<h6>Invoice Footer Terms</h6>
													</div>
												</div>
												<div class="col-sm-8">
													<div class="mb-3">
														<textarea rows="4" class="form-control"
															placeholder="Type your message"></textarea>
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