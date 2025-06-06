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
														<a href="javascript:void(0);" class="subdrop active"><i
																data-feather="credit-card"></i><span>Financial
																Settings</span><span class="menu-arrow"></span></a>
														<ul>
															<li><a href="payment-gateway-settings.php">Payment
																	Gateway</a></li>
															<li><a href="bank-settings-grid.php">Bank Accounts </a>
															</li>
															<li><a href="tax-rates.php">Tax Rates</a></li>
															<li><a href="currency-settings.php"
																	class="active">Currencies</a></li>
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
							<div class="settings-page-wrap w-50">
								<div class="setting-title">
									<h4>Currency</h4>
								</div>
								<div class="page-header bank-settings justify-content-end">
									<div class="page-btn">
										<a href="#" class="btn btn-added" data-bs-toggle="modal"
											data-bs-target="#add-currency"><i data-feather="plus-circle"
												class="me-2"></i>Add New Currency</a>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="card table-list-card">
											<div class="card-body">
												<div class="table-top">
													<div class="search-set">
														<div class="search-input">
															<a href="" class="btn btn-searchset"><i
																	data-feather="search"
																	class="feather-search"></i></a>
														</div>
													</div>
													<div class="search-path">
														<div class="d-flex align-items-center">
															<a class="btn btn-filter" id="filter_search">
																<i data-feather="filter" class="filter-icon"></i>
																<span><img src="assets/img/icons/closes.svg"
																		alt="img"></span>
															</a>
														</div>
													</div>
													<div class="form-sort">
														<i data-feather="sliders" class="info-img"></i>
														<select class="select">
															<option>Sort by Date</option>
															<option>Newest</option>
															<option>Oldest</option>
														</select>
													</div>
												</div>
												<!-- /Filter -->
												<div class="card" id="filter_inputs">
													<div class="card-body pb-0">
														<div class="row">
															<div class="col-lg-4 col-sm-6 col-12">
																<div class="input-blocks">
																	<i data-feather="user" class="info-img"></i>
																	<select class="select">
																		<option>Choose Name</option>
																		<option>Euro</option>
																		<option>England Pound</option>
																	</select>
																</div>
															</div>
															<div class="col-lg-3 col-sm-6 col-12 ms-auto">
																<div class="input-blocks">
																	<a class="btn btn-filters ms-auto"> <i
																			data-feather="search"
																			class="feather-search"></i> Search </a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- /Filter -->
												<div class="table-responsive">
													<table class="table datanew">
														<thead>
															<tr>
																<th class="no-sort">
																	<label class="checkboxs">
																		<input type="checkbox" id="select-all">
																		<span class="checkmarks"></span>
																	</label>
																</th>
																<th>Currency Name</th>
																<th>Code </th>
																<th>Symbol</th>
																<th>Exchange Rate</th>
																<th>Created On</th>
																<th class="no-sort text-end">Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</td>
																<td>
																	Euro
																</td>
																<td>
																	EUR
																</td>
																<td>
																	€
																</td>
																<td>Default</td>
																<td>12 Jul 2023</td>
																<td class="action-table-data justify-content-end">
																	<div class="edit-delete-action">
																		<a class="me-2 p-2" href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#edit-currency">
																			<i data-feather="edit"
																				class="feather-edit"></i>
																		</a>
																		<a class="confirm-text p-2"
																			href="javascript:void(0);">
																			<i data-feather="trash-2"
																				class="feather-trash-2"></i>
																		</a>
																	</div>

																</td>
															</tr>
															<tr>
																<td>
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</td>
																<td>
																	England Pound
																</td>
																<td>
																	GBP
																</td>
																<td>
																	£
																</td>
																<td>Default</td>
																<td>14 Jul 2023</td>
																<td class="action-table-data justify-content-end">
																	<div class="edit-delete-action">
																		<a class="me-2 p-2" href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#edit-currency">
																			<i data-feather="edit"
																				class="feather-edit"></i>
																		</a>
																		<a class="confirm-text p-2"
																			href="javascript:void(0);">
																			<i data-feather="trash-2"
																				class="feather-trash-2"></i>
																		</a>
																	</div>

																</td>
															</tr>
															<tr>
																<td>
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</td>
																<td>
																	India Rupee
																</td>
																<td>
																	INR
																</td>
																<td>
																	₹
																</td>
																<td>76.154</td>
																<td>14 Mar 2023</td>
																<td class="action-table-data justify-content-end">
																	<div class="edit-delete-action">
																		<a class="me-2 p-2" href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#edit-currency">
																			<i data-feather="edit"
																				class="feather-edit"></i>
																		</a>
																		<a class="confirm-text p-2"
																			href="javascript:void(0);">
																			<i data-feather="trash-2"
																				class="feather-trash-2"></i>
																		</a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<label class="checkboxs">
																		<input type="checkbox">
																		<span class="checkmarks"></span>
																	</label>
																</td>
																<td>
																	US Dollar
																</td>
																<td>
																	USD
																</td>
																<td>
																	$
																</td>
																<td>Default</td>
																<td>10 Jan 2023</td>
																<td class="action-table-data justify-content-end">
																	<div class="edit-delete-action">
																		<a class="me-2 p-2" href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#edit-currency">
																			<i data-feather="edit"
																				class="feather-edit"></i>
																		</a>
																		<a class="confirm-text p-2"
																			href="javascript:void(0);">
																			<i data-feather="trash-2"
																				class="feather-trash-2"></i>
																		</a>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
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
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- Add Currency -->
	<div class="modal fade" id="add-currency">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add Currency</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="currency-settings.php">
								<div class="row">
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Name <span> *</span></label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Symbol <span> *</span></label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Code <span> *</span></label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Rate <span> *</span></label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div
											class="status-toggle modal-status d-flex justify-content-between align-items-center">
											<span class="status-label">Status</span>
											<input type="checkbox" id="user6" class="check" checked="">
											<label for="user6" class="checktoggle"></label>
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
	<!-- /Add Currency -->

	<!-- Edit Currency -->
	<div class="modal fade" id="edit-currency">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Edit Currency</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="currency-settings.php">
								<div class="row">
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Name <span> *</span></label>
											<input type="text" class="form-control" value="Euro">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Symbol <span> *</span></label>
											<input type="text" class="form-control" value="EUR">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Code <span> *</span></label>
											<input type="text" class="form-control" value="€">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Currency Rate <span> *</span></label>
											<input type="text" class="form-control" value="Default">
										</div>
									</div>
									<div class="col-lg-12">
										<div
											class="status-toggle modal-status d-flex justify-content-between align-items-center">
											<span class="status-label">Status</span>
											<input type="checkbox" id="user5" class="check" checked="">
											<label for="user5" class="checktoggle"></label>
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
	<!-- /Edit Currency -->
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