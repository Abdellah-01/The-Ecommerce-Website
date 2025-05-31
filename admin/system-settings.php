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
														<a href="javascript:void(0);" class="active subdrop"><i
																data-feather="airplay"></i><span>Website
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="system-settings.php" class="active">System
																	Settings</a></li>
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
								<div class="setting-title">
									<h4>System Settings</h4>
								</div>
								<div class="row">
									<div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
										<div class="connected-app-card d-flex w-100">
											<ul class="w-100">
												<li class="flex-column align-items-start">
													<div
														class="d-flex align-items-center justify-content-between w-100">
														<div class="security-type d-flex align-items-center">
															<span class="system-app-icon">
																<img src="assets/img/icons/app-icon-07.svg" alt="">
															</span>
															<div class="security-title">
																<h5>Google Captcha</h5>
															</div>
														</div>
														<div
															class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
															<input type="checkbox" id="user1" class="check" checked>
															<label for="user1" class="checktoggle"> </label>
														</div>
													</div>
													<p>Captcha helps protect you from spam and password decryption</p>
												</li>
												<li>
													<div class="integration-btn">
														<a href="" data-bs-toggle="modal"
															data-bs-target="#google-captcha"><i data-feather="tool"
																class="me-2"></i>View Integration</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
										<div class="connected-app-card d-flex w-100">
											<ul class="w-100">
												<li class="flex-column align-items-start">
													<div
														class="d-flex align-items-center justify-content-between w-100">
														<div class="security-type d-flex align-items-center">
															<span class="system-app-icon">
																<img src="assets/img/icons/app-icon-08.svg" alt="">
															</span>
															<div class="security-title">
																<h5>Google Analytics</h5>
															</div>
														</div>
														<div
															class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
															<input type="checkbox" id="user2" class="check" checked>
															<label for="user2" class="checktoggle"> </label>
														</div>
													</div>
													<p>Provides statistics and basic analytical tools for SEO and
														marketing purposes.</p>
												</li>
												<li>
													<div class="integration-btn">
														<a href="" data-bs-toggle="modal"
															data-bs-target="#google-analytics"><i data-feather="tool"
																class="me-2"></i>View Integration</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
										<div class="connected-app-card d-flex w-100">
											<ul class="w-100">
												<li class="flex-column align-items-start">
													<div
														class="d-flex align-items-center justify-content-between w-100">
														<div class="security-type d-flex align-items-center">
															<span class="system-app-icon">
																<img src="assets/img/icons/app-icon-09.svg" alt="">
															</span>
															<div class="security-title">
																<h5>Google Adsense Code</h5>
															</div>
														</div>
														<div
															class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
															<input type="checkbox" id="user3" class="check" checked>
															<label for="user3" class="checktoggle"> </label>
														</div>
													</div>
													<p>Provides a way for publishers to earn money from their online
														content.</p>
												</li>
												<li>
													<div class="integration-btn">
														<a href="" data-bs-toggle="modal"
															data-bs-target="#google-adsense"><i data-feather="tool"
																class="me-2"></i>View Integration</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
										<div class="connected-app-card d-flex w-100">
											<ul class="w-100">
												<li class="flex-column align-items-start">
													<div
														class="d-flex align-items-center justify-content-between w-100">
														<div class="security-type d-flex align-items-center">
															<span class="system-app-icon">
																<img src="assets/img/icons/app-icon-10.svg" alt="">
															</span>
															<div class="security-title">
																<h5>Google Map</h5>
															</div>
														</div>
														<div
															class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
															<input type="checkbox" id="user4" class="check" checked>
															<label for="user4" class="checktoggle"> </label>
														</div>
													</div>
													<p>Provides detailed information about geographical regions and
														sites worldwide.</p>
												</li>
												<li>
													<div class="integration-btn">
														<a href="" data-bs-toggle="modal"
															data-bs-target="#google-map"><i data-feather="tool"
																class="me-2"></i>View Integration</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- Google Captcha -->
	<div class="modal fade" id="google-captcha">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Configure Google Captcha</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="system-settings.php">
								<div class="row">
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Google Rechaptcha Site Key <span> *</span></label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-0">
											<label class="form-label">Google Rechaptcha Secret Key <span>
													*</span></label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="modal-footer-btn">
									<button type="button" class="btn btn-cancel me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Google Captcha -->

	<!-- Google Analytics -->
	<div class="modal fade" id="google-analytics">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Configure Google Analytics</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="system-settings.php">
								<div class="row">
									<div class="col-lg-12">
										<div class="mb-0">
											<label class="form-label">Google Analytics <span> *</span></label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="modal-footer-btn">
									<button type="button" class="btn btn-cancel me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Google Analytics -->

	<!-- Google Adsense -->
	<div class="modal fade" id="google-adsense">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Configure Google Adsense Code</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="system-settings.php">
								<div class="row">
									<div class="col-lg-12">
										<div class="mb-0">
											<label class="form-label">Google Adsense Code <span> *</span></label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="modal-footer-btn">
									<button type="button" class="btn btn-cancel me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Google Adsense -->

	<!-- Google Adsense -->
	<div class="modal fade" id="google-map">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Configure Google Map ID</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="system-settings.php">
								<div class="row">
									<div class="col-lg-12">
										<div class="mb-0">
											<label class="form-label">Enter Map ID <span> *</span></label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="modal-footer-btn">
									<button type="button" class="btn btn-cancel me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Google Adsense -->

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