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
															<li><a href="invoice-settings.php">Invoice</a></li>
															<li><a href="printer-settings.php">Printer </a></li>
															<li><a href="pos-settings.php">POS</a></li>
															<li><a href="custom-fields.php" class="active">Custom
																	Fields</a></li>
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
							<div class="settings-page-wrap w-50">
								<div class="setting-title">
									<h4>Custom Fields</h4>
								</div>
								<div class="page-header justify-content-end">
									<ul class="table-top-head">
										<li>
											<a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img
													src="assets/img/icons/pdf.svg" alt="img"></a>
										</li>
										<li>
											<a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img
													src="assets/img/icons/excel.svg" alt="img"></a>
										</li>
										<li>
											<a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><i
													data-feather="printer" class="feather-rotate-ccw"></i></a>
										</li>
									</ul>
									<div class="page-btn">
										<a href="#" class="btn btn-added" data-bs-toggle="modal"
											data-bs-target="#add-custom-field"><i data-feather="plus-circle"
												class="me-2"></i>Add New Field</a>
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
															<div class="layout-hide-box">
																<a href="javascript:void(0);" class="me-3 layout-box"><i
																		data-feather="layout"
																		class="feather-search"></i></a>
																<div class="layout-drop-item card">
																	<div class="drop-item-head">
																		<h5>Want to manage datatable?</h5>
																		<p>Please drag and drop your column to reorder
																			your table and enable see option as you
																			want.</p>
																	</div>
																	<ul>
																		<li>
																			<div
																				class="status-toggle modal-status d-flex justify-content-between align-items-center">
																				<span class="status-label"><i
																						data-feather="menu"
																						class="feather-menu"></i>Shop</span>
																				<input type="checkbox" id="option1"
																					class="check" checked>
																				<label for="option1"
																					class="checktoggle"> </label>
																			</div>
																		</li>
																		<li>
																			<div
																				class="status-toggle modal-status d-flex justify-content-between align-items-center">
																				<span class="status-label"><i
																						data-feather="menu"
																						class="feather-menu"></i>Product</span>
																				<input type="checkbox" id="option2"
																					class="check" checked>
																				<label for="option2"
																					class="checktoggle"> </label>
																			</div>
																		</li>
																		<li>
																			<div
																				class="status-toggle modal-status d-flex justify-content-between align-items-center">
																				<span class="status-label"><i
																						data-feather="menu"
																						class="feather-menu"></i>Reference
																					No</span>
																				<input type="checkbox" id="option3"
																					class="check" checked>
																				<label for="option3"
																					class="checktoggle"> </label>
																			</div>
																		</li>
																		<li>
																			<div
																				class="status-toggle modal-status d-flex justify-content-between align-items-center">
																				<span class="status-label"><i
																						data-feather="menu"
																						class="feather-menu"></i>Date</span>
																				<input type="checkbox" id="option4"
																					class="check" checked>
																				<label for="option4"
																					class="checktoggle"> </label>
																			</div>
																		</li>
																		<li>
																			<div
																				class="status-toggle modal-status d-flex justify-content-between align-items-center">
																				<span class="status-label"><i
																						data-feather="menu"
																						class="feather-menu"></i>Responsible
																					Person</span>
																				<input type="checkbox" id="option5"
																					class="check" checked>
																				<label for="option5"
																					class="checktoggle"> </label>
																			</div>
																		</li>
																		<li>
																			<div
																				class="status-toggle modal-status d-flex justify-content-between align-items-center">
																				<span class="status-label"><i
																						data-feather="menu"
																						class="feather-menu"></i>Notes</span>
																				<input type="checkbox" id="option6"
																					class="check" checked>
																				<label for="option6"
																					class="checktoggle"> </label>
																			</div>
																		</li>
																		<li>
																			<div
																				class="status-toggle modal-status d-flex justify-content-between align-items-center">
																				<span class="status-label"><i
																						data-feather="menu"
																						class="feather-menu"></i>Quantity</span>
																				<input type="checkbox" id="option7"
																					class="check" checked>
																				<label for="option7"
																					class="checktoggle"> </label>
																			</div>
																		</li>
																		<li>
																			<div
																				class="status-toggle modal-status d-flex justify-content-between align-items-center">
																				<span class="status-label"><i
																						data-feather="menu"
																						class="feather-menu"></i>Actions</span>
																				<input type="checkbox" id="option8"
																					class="check" checked>
																				<label for="option8"
																					class="checktoggle"> </label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
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
															<div class="col-lg-3 col-sm-6 col-12">
																<div class="input-blocks">
																	<i data-feather="zap" class="info-img"></i>
																	<select class="select">
																		<option>Choose Module</option>
																		<option>Expense</option>
																		<option>Transaction</option>
																	</select>
																</div>
															</div>
															<div class="col-lg-3 col-sm-6 col-12">
																<div class="input-blocks">
																	<i data-feather="edit-2" class="info-img"></i>
																	<select class="select">
																		<option>Choose Fields</option>
																		<option>Expense</option>
																		<option>Transaction</option>
																	</select>
																</div>
															</div>
															<div class="col-lg-3 col-sm-6 col-12">
																<div class="input-blocks">
																	<i data-feather="stop-circle" class="info-img"></i>
																	<select class="select">
																		<option>Choose Status</option>
																		<option>Active</option>
																		<option>Inactive</option>
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
													<table class="table  datanew">
														<thead>
															<tr>
																<th class="no-sort">
																	<label class="checkboxs">
																		<input type="checkbox" id="select-all">
																		<span class="checkmarks"></span>
																	</label>
																</th>
																<th>Module</th>
																<th>Label</th>
																<th>Type</th>
																<th>Default Value</th>
																<th>Required</th>
																<th>Status</th>
																<th class="no-sort">Action</th>
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
																	Expense
																</td>
																<td>
																	Name
																</td>
																<td>
																	Text
																</td>
																<td>Name</td>
																<td>Required</td>
																<td><span class="badge badge-linesuccess">Active</span>
																</td>
																<td class="action-table-data">
																	<div class="edit-delete-action">
																		<a class="me-2 p-2" href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#edit-custom-field">
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
																	Transaction
																</td>
																<td>
																	Comment
																</td>
																<td>
																	Textarea
																</td>
																<td>Enter Comments</td>
																<td>Required</td>
																<td><span class="badge badge-linesuccess">Active</span>
																</td>
																<td class="action-table-data">
																	<div class="edit-delete-action">
																		<a class="me-2 p-2" href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#edit-custom-field">
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

	<!-- Add Custom Field -->
	<div class="modal fade" id="add-custom-field">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add New Custom Fields</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="custom-fields.php">
								<div class="row">
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Custom Fields For <span> *</span></label>
											<select class="select">
												<option>Choose</option>
												<option>Expense</option>
												<option>Transaction</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Label <span> *</span></label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Default Value <span> *</span></label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Input Type <span> *</span></label>
											<select class="select">
												<option>Choose</option>
												<option>Text</option>
												<option>Textarea</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12">
										<div
											class="localization-select pos-payment-method mb-3 d-flex align-items-center mb-0 w-100">
											<div class="custom-control custom-checkbox">
												<label class="checkboxs mb-0 pb-0 line-height-1">
													<input type="checkbox" checked>
													<span class="checkmarks"></span>Required
												</label>
											</div>
											<div class="custom-control custom-checkbox">
												<label class="checkboxs mb-0 pb-0 line-height-1">
													<input type="checkbox" checked>
													<span class="checkmarks"></span>Disable
												</label>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div
											class="status-toggle modal-status d-flex justify-content-between align-items-center">
											<span class="status-label">Status</span>
											<input type="checkbox" id="user2" class="check" checked="">
											<label for="user2" class="checktoggle"></label>
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
	<!-- /Add Custom Field -->

	<!-- Edit Custom Field -->
	<div class="modal fade" id="edit-custom-field">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add New Custom Fields</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="custom-fields.php">
								<div class="row">
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Custom Fields For <span> *</span></label>
											<select class="select">
												<option>Expense</option>
												<option>Transaction</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Label <span> *</span></label>
											<input type="text" class="form-control" value="Name">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Default Value <span> *</span></label>
											<input type="text" class="form-control" value="None">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3">
											<label class="form-label">Input Type <span> *</span></label>
											<select class="select">
												<option>Text</option>
												<option>Textarea</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12">
										<div
											class="localization-select pos-payment-method mb-3 d-flex align-items-center mb-0 w-100">
											<div class="custom-control custom-checkbox">
												<label class="checkboxs mb-0 pb-0 line-height-1">
													<input type="checkbox" checked>
													<span class="checkmarks"></span>Required
												</label>
											</div>
											<div class="custom-control custom-checkbox">
												<label class="checkboxs mb-0 pb-0 line-height-1">
													<input type="checkbox" checked>
													<span class="checkmarks"></span>Disable
												</label>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div
											class="status-toggle modal-status d-flex justify-content-between align-items-center">
											<span class="status-label">Status</span>
											<input type="checkbox" id="user3" class="check" checked="">
											<label for="user3" class="checktoggle"></label>
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
	<!-- /Edit Custom Field -->
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

	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>


</body>

</html>