<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>Abdellah | Admin Panel</title>

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

	<!-- Quill CSS -->
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<style>
		/* Quill Editor Custom Styles */
		.ql-container {
			border-bottom-left-radius: 0.5em;
			border-bottom-right-radius: 0.5em;
			background: transparent;
		}
		
		.ql-toolbar {
			border-top-left-radius: 0.5em;
			border-top-right-radius: 0.5em;
			background: transparent;
		}
		
		.ql-editor {
			min-height: 300px;
		}
		
		.policy-editor {
			margin-bottom: 30px;
		}
		
		.policy-editor .card-title-head {
			margin-bottom: 15px;
		}
        .mbs-50 {
            margin-bottom: 50px !important;
        }
	</style>
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
															<li><a href="localization-settings.php">Localization</a></li>
															<li><a href="prefixes.php">Prefixes</a></li>
															<li><a href="preference.php">Preference</a></li>
															<li><a href="appearance.php">Appearance</a></li>
															<li><a href="social-authentication.php">Social
																	Authentication</a></li>
															<li><a href="language-settings.php">Language</a></li>
									                        <li><a href="policies.php" 
                                                            class="active">Policies</a></li>
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
								<form action="policies.php" id="policies-form">
									<div class="setting-title">
										<h4>POLICIES</h4>
									</div>
									
									<!-- Privacy Policy Section -->
									<div class="company-info company-images policy-editor">
										<div class="card-title-head">
											<h6><span><i data-feather="lock"></i></span>Privacy Policy</h6>
										</div>
										<div class="localization-info">
											<div class="row">
												<div class="col-12 mbs-50">
													<!-- Quill Toolbar -->
													<div id="privacy-policy-toolbar">
														<span class="ql-formats">
															<select class="ql-header">
																<option value="1">Heading 1</option>
																<option value="2">Heading 2</option>
																<option value="3">Heading 3</option>
																<option selected>Normal</option>
															</select>
															<select class="ql-font"></select>
														</span>
														<span class="ql-formats">
															<button class="ql-bold"></button>
															<button class="ql-italic"></button>
															<button class="ql-underline"></button>
															<button class="ql-strike"></button>
														</span>
														<span class="ql-formats">
															<select class="ql-color"></select>
															<select class="ql-background"></select>
														</span>
														<span class="ql-formats">
															<button class="ql-list" value="ordered"></button>
															<button class="ql-list" value="bullet"></button>
															<button class="ql-indent" value="-1"></button>
															<button class="ql-indent" value="+1"></button>
														</span>
														<span class="ql-formats">
															<button class="ql-link"></button>
															<button class="ql-image"></button>
															<button class="ql-video"></button>
														</span>
														<span class="ql-formats">
															<button class="ql-clean"></button>
														</span>
													</div>
													<!-- Quill Editor -->
													<div id="privacy-policy-editor">
														<h3>Privacy Policy</h3>
														<p>This Privacy Policy describes how your personal information is collected, used, and shared when you visit or make a purchase from our website.</p>
														<h4>Personal Information We Collect</h4>
														<p>When you visit the Site, we automatically collect certain information about your device, including information about your web browser, IP address, time zone, and some of the cookies that are installed on your device.</p>
														<h4>How We Use Your Personal Information</h4>
														<p>We use the Order Information that we collect generally to fulfill any orders placed through the Site (including processing your payment information, arranging for shipping, and providing you with invoices and/or order confirmations).</p>
													</div>
													<!-- Hidden input to store the HTML content -->
													<input type="hidden" name="privacy_policy" id="privacy_policy_html">
												</div>
											</div>
										</div>
									</div>
									
									<!-- Refund Policy Section -->
									<div class="company-info company-images policy-editor">
										<div class="card-title-head">
											<h6><span><i data-feather="dollar-sign"></i></span>Refund Policy</h6>
										</div>
										<div class="localization-info">
											<div class="row">
												<div class="col-12 mbs-50">
													<!-- Quill Toolbar -->
													<div id="refund-policy-toolbar">
														<span class="ql-formats">
															<select class="ql-header">
																<option value="1">Heading 1</option>
																<option value="2">Heading 2</option>
																<option value="3">Heading 3</option>
																<option selected>Normal</option>
															</select>
															<select class="ql-font"></select>
														</span>
														<span class="ql-formats">
															<button class="ql-bold"></button>
															<button class="ql-italic"></button>
															<button class="ql-underline"></button>
															<button class="ql-strike"></button>
														</span>
														<span class="ql-formats">
															<select class="ql-color"></select>
															<select class="ql-background"></select>
														</span>
														<span class="ql-formats">
															<button class="ql-list" value="ordered"></button>
															<button class="ql-list" value="bullet"></button>
															<button class="ql-indent" value="-1"></button>
															<button class="ql-indent" value="+1"></button>
														</span>
														<span class="ql-formats">
															<button class="ql-link"></button>
															<button class="ql-image"></button>
															<button class="ql-video"></button>
														</span>
														<span class="ql-formats">
															<button class="ql-clean"></button>
														</span>
													</div>
													<!-- Quill Editor -->
													<div id="refund-policy-editor">
														<h3>Refund Policy</h3>
														<p>We offer refunds within 30 days of purchase for most products. To be eligible for a return, your item must be unused and in the same condition that you received it.</p>
														<h4>Refund Process</h4>
														<ol>
															<li>Contact our customer service to initiate a return</li>
															<li>Ship the item back to us</li>
															<li>Once received, we will inspect the item</li>
															<li>Your refund will be processed within 5-7 business days</li>
														</ol>
														<h4>Non-Refundable Items</h4>
														<p>Certain items are not eligible for refunds including digital products, gift cards, and personalized items.</p>
													</div>
													<!-- Hidden input to store the HTML content -->
													<input type="hidden" name="refund_policy" id="refund_policy_html">
												</div>
											</div>
										</div>
									</div>
									
									<!-- Terms of Service Section -->
									<div class="company-info company-images policy-editor">
										<div class="card-title-head">
											<h6><span><i data-feather="file-text"></i></span>Terms of Service</h6>
										</div>
										<div class="localization-info">
											<div class="row">
												<div class="col-12 mbs-50">
													<!-- Quill Toolbar -->
													<div id="terms-service-toolbar">
														<span class="ql-formats">
															<select class="ql-header">
																<option value="1">Heading 1</option>
																<option value="2">Heading 2</option>
																<option value="3">Heading 3</option>
																<option selected>Normal</option>
															</select>
															<select class="ql-font"></select>
														</span>
														<span class="ql-formats">
															<button class="ql-bold"></button>
															<button class="ql-italic"></button>
															<button class="ql-underline"></button>
															<button class="ql-strike"></button>
														</span>
														<span class="ql-formats">
															<select class="ql-color"></select>
															<select class="ql-background"></select>
														</span>
														<span class="ql-formats">
															<button class="ql-list" value="ordered"></button>
															<button class="ql-list" value="bullet"></button>
															<button class="ql-indent" value="-1"></button>
															<button class="ql-indent" value="+1"></button>
														</span>
														<span class="ql-formats">
															<button class="ql-link"></button>
															<button class="ql-image"></button>
															<button class="ql-video"></button>
														</span>
														<span class="ql-formats">
															<button class="ql-clean"></button>
														</span>
													</div>
													<!-- Quill Editor -->
													<div id="terms-service-editor">
														<h3>Terms of Service</h3>
														<p>By accessing or using our website, you agree to be bound by these Terms of Service.</p>
														<h4>Account Terms</h4>
														<ul>
															<li>You must be 18 years or older to use this service</li>
															<li>You are responsible for maintaining the security of your account</li>
															<li>You are responsible for all content posted and activity that occurs under your account</li>
														</ul>
														<h4>General Conditions</h4>
														<p>We reserve the right to refuse service to anyone for any reason at any time. Your content may be transferred unencrypted and involve transmissions over various networks.</p>
													</div>
													<!-- Hidden input to store the HTML content -->
													<input type="hidden" name="terms_service" id="terms_service_html">
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
	
	<!-- Quill JS -->
	<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
	
	<!-- Sticky-sidebar -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
	
	<!-- Sweetalert 2 -->
	<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
	<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
	
	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>
	
	<script>
		$(document).ready(function() {
			// Initialize all Quill editors
			const editors = {};
			
			// Initialize Privacy Policy Editor
			editors.privacy = new Quill('#privacy-policy-editor', {
				modules: {
					toolbar: '#privacy-policy-toolbar'
				},
				theme: 'snow'
			});
			
			// Initialize Refund Policy Editor
			editors.refund = new Quill('#refund-policy-editor', {
				modules: {
					toolbar: '#refund-policy-toolbar'
				},
				theme: 'snow'
			});
			
			// Initialize Terms of Service Editor
			editors.terms = new Quill('#terms-service-editor', {
				modules: {
					toolbar: '#terms-service-toolbar'
				},
				theme: 'snow'
			});
			
			// Form submission handler
			$('#policies-form').on('submit', function(e) {
				e.preventDefault();
				
				// Get HTML content from each editor and store in hidden inputs
				$('#privacy_policy_html').val(editors.privacy.root.innerHTML);
				$('#refund_policy_html').val(editors.refund.root.innerHTML);
				$('#terms_service_html').val(editors.terms.root.innerHTML);
				
				// Here you would typically submit the form via AJAX
				// For now, we'll just show a success message
				Swal.fire({
					title: 'Success!',
					text: 'Policies have been saved successfully.',
					icon: 'success',
					confirmButtonText: 'OK'
				});
			});
		});
	</script>
</body>
</html>