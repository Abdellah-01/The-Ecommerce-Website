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

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">

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
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Main</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><i data-feather="grid"></i><span>Dashboard</span><span
											class="menu-arrow"></span></a>
									<ul>
										<li><a href="index.php">Admin Dashboard</a></li>
										<li><a href="sales-dashboard.php">Sales Dashboard</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i
											data-feather="smartphone"></i><span>Application</span><span
											class="menu-arrow"></span></a>
									<ul>
										<li><a href="chat.php">Chat</a></li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Call<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="video-call.php">Video Call</a></li>
												<li><a href="audio-call.php">Audio Call</a></li>
												<li><a href="call-history.php">Call History</a></li>
											</ul>
										</li>
										<li><a href="calendar.php">Calendar</a></li>
										<li><a href="email.php">Email</a></li>
										<li><a href="todo.php">To Do</a></li>
										<li><a href="notes.php">Notes</a></li>
										<li><a href="file-manager.php">File Manager</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Inventory</h6>
							<ul>
								<li><a href="product-list.php"><i data-feather="box"></i><span>Products</span></a></li>
								<li><a href="add-product.php"><i data-feather="plus-square"></i><span>Create
											Product</span></a></li>
								<li><a href="expired-products.php"><i data-feather="codesandbox"></i><span>Expired
											Products</span></a></li>
								<li><a href="low-stocks.php"><i data-feather="trending-down"></i><span>Low
											Stocks</span></a></li>
								<li><a href="category-list.php"><i data-feather="codepen"></i><span>Category</span></a>
								</li>
								<li><a href="sub-categories.php"><i data-feather="speaker"></i><span>Sub
											Category</span></a></li>
								<li><a href="brand-list.php"><i data-feather="tag"></i><span>Brands</span></a></li>
								<li><a href="units.php"><i data-feather="speaker"></i><span>Units</span></a></li>
								<li><a href="varriant-attributes.php"><i data-feather="layers"></i><span>Variant
											Attributes</span></a></li>
								<li><a href="warranty.php"><i data-feather="bookmark"></i><span>Warranties</span></a>
								</li>
								<li><a href="barcode.php"><i data-feather="align-justify"></i><span>Print
											Barcode</span></a></li>
								<li><a href="qrcode.php"><i data-feather="maximize"></i><span>Print QR Code</span></a>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Stock</h6>
							<ul>
								<li><a href="manage-stocks.php"><i data-feather="package"></i><span>Manage
											Stock</span></a></li>
								<li><a href="stock-adjustment.php"><i data-feather="clipboard"></i><span>Stock
											Adjustment</span></a></li>
								<li><a href="stock-transfer.php"><i data-feather="truck"></i><span>Stock
											Transfer</span></a></li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Sales</h6>
							<ul>
								<li><a href="sales-list.php"><i data-feather="shopping-cart"></i><span>Sales</span></a>
								</li>
								<li><a href="invoice-report.php"><i
											data-feather="file-text"></i><span>Invoices</span></a></li>
								<li><a href="sales-returns.php"><i data-feather="copy"></i><span>Sales
											Return</span></a></li>
								<li><a href="quotation-list.php"><i data-feather="save"></i><span>Quotation</span></a>
								</li>
								<li><a href="pos.php"><i data-feather="hard-drive"></i><span>POS</span></a></li>

							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Promo</h6>
							<ul>
								<li><a href="coupons.php"><i data-feather="shopping-cart"></i><span>Coupons</span></a>
								</li>

							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Purchases</h6>
							<ul>
								<li><a href="purchase-list.php"><i
											data-feather="shopping-bag"></i><span>Purchases</span></a></li>
								<li><a href="purchase-order-report.php"><i data-feather="file-minus"></i><span>Purchase
											Order</span></a></li>
								<li><a href="purchase-returns.php"><i data-feather="refresh-cw"></i><span>Purchase
											Return</span></a></li>

							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Finance & Accounts</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><i
											data-feather="file-text"></i><span>Expenses</span><span
											class="menu-arrow"></span></a>
									<ul>
										<li><a href="expense-list.php">Expenses</a></li>
										<li><a href="expense-category.php">Expense Category</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Peoples</h6>
							<ul>
								<li><a href="customers.php"><i data-feather="user"></i><span>Customers</span></a></li>
								<li><a href="suppliers.php"><i data-feather="users"></i><span>Suppliers</span></a></li>
								<li><a href="store-list.php"><i data-feather="home"></i><span>Stores</span></a></li>
								<li><a href="warehouse.php"><i data-feather="archive"></i><span>Warehouses</span></a>
								</li>

							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">HRM</h6>
							<ul>
								<li><a href="employees-grid.php"><i data-feather="user"></i><span>Employees</span></a>
								</li>
								<li><a href="department-grid.php"><i
											data-feather="users"></i><span>Departments</span></a></li>
								<li><a href="designation.php"><i
											data-feather="git-merge"></i><span>Designation</span></a></li>
								<li><a href="shift.php"><i data-feather="shuffle"></i><span>Shifts</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><i
											data-feather="book-open"></i><span>Attendence</span><span
											class="menu-arrow"></span></a>
									<ul>
										<li><a href="attendance-employee.php">Employee</a></li>
										<li><a href="attendance-admin.php">Admin</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i
											data-feather="calendar"></i><span>Leaves</span><span
											class="menu-arrow"></span></a>
									<ul>
										<li><a href="leaves-admin.php">Admin Leaves</a></li>
										<li><a href="leaves-employee.php">Employee Leaves</a></li>
										<li><a href="leave-types.php">Leave Types</a></li>
									</ul>
								</li>
								<li><a href="holidays.php"><i data-feather="credit-card"></i><span>Holidays</span></a>
								</li>
								<li class="submenu">
									<a href="payroll-list.php"><i
											data-feather="dollar-sign"></i><span>Payroll</span><span
											class="menu-arrow"></span></a>
									<ul>
										<li><a href="payroll-list.php">Employee Salary</a></li>
										<li><a href="payslip.php">Payslip</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Reports</h6>
							<ul>
								<li><a href="sales-report.php"><i data-feather="bar-chart-2"></i><span>Sales
											Report</span></a></li>
								<li><a href="purchase-report.php"><i data-feather="pie-chart"></i><span>Purchase
											report</span></a></li>
								<li><a href="inventory-report.php"><i data-feather="inbox"></i><span>Inventory
											Report</span></a></li>
								<li><a href="invoice-report.php"><i data-feather="file"></i><span>Invoice
											Report</span></a></li>
								<li><a href="supplier-report.php"><i data-feather="user-check"></i><span>Supplier
											Report</span></a></li>
								<li><a href="customer-report.php"><i data-feather="user"></i><span>Customer
											Report</span></a></li>
								<li><a href="expense-report.php"><i data-feather="file"></i><span>Expense
											Report</span></a></li>
								<li><a href="income-report.php"><i data-feather="bar-chart"></i><span>Income
											Report</span></a></li>
								<li><a href="tax-reports.php"><i data-feather="database"></i><span>Tax
											Report</span></a></li>
								<li><a href="profit-and-loss.php"><i data-feather="pie-chart"></i><span>Profit &
											Loss</span></a></li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">User Management</h6>
							<ul>
								<li><a href="users.php"><i data-feather="user-check"></i><span>Users</span></a></li>
								<li><a href="roles-permissions.php"><i data-feather="shield"></i><span>Roles &
											Permissions</span></a></li>
								<li><a href="delete-account.php"><i data-feather="lock"></i><span>Delete Account
											Request</span></a></li>

							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Pages</h6>
							<ul>
								<li><a href="profile.php"><i data-feather="user"></i><span>Profile</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><i
											data-feather="shield"></i><span>Authentication</span><span
											class="menu-arrow"></span></a>
									<ul>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Login<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="signin.php">Cover</a></li>
												<li><a href="signin-2.php">Illustration</a></li>
												<li><a href="signin-3.php">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Register<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="register.php">Cover</a></li>
												<li><a href="register-2.php">Illustration</a></li>
												<li><a href="register-3.php">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Forgot
												Password<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="forgot-password.php">Cover</a></li>
												<li><a href="forgot-password-2.php">Illustration</a></li>
												<li><a href="forgot-password-3.php">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Reset
												Password<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="reset-password.php">Cover</a></li>
												<li><a href="reset-password-2.php">Illustration</a></li>
												<li><a href="reset-password-3.php">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Email
												Verification<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="email-verification.php">Cover</a></li>
												<li><a href="email-verification-2.php">Illustration</a></li>
												<li><a href="email-verification-3.php">Basic</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">2 Step
												Verification<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="two-step-verification.php">Cover</a></li>
												<li><a href="two-step-verification-2.php">Illustration</a></li>
												<li><a href="two-step-verification-3.php">Basic</a></li>
											</ul>
										</li>
										<li><a href="lock-screen.php">Lock Screen</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i data-feather="file-minus"></i><span>Error
											Pages</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="error-404.php">404 Error </a></li>
										<li><a href="error-500.php">500 Error </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i data-feather="map"></i><span>Places</span><span
											class="menu-arrow"></span></a>
									<ul>
										<li><a href="countries.php">Countries</a></li>
										<li><a href="states.php">States</a></li>
									</ul>
								</li>
								<li>
									<a href="blank-page.php"><i data-feather="file"></i><span>Blank Page</span> </a>
								</li>
								<li>
									<a href="coming-soon.php"><i data-feather="send"></i><span>Coming Soon</span> </a>
								</li>
								<li>
									<a href="under-maintenance.php"><i data-feather="alert-triangle"></i><span>Under
											Maintenance</span> </a>
								</li>
							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Settings</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);"><i data-feather="settings"></i><span>General
											Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="general-settings.php">Profile</a></li>
										<li><a href="security-settings.php">Security</a></li>
										<li><a href="notification.php">Notifications</a></li>
										<li><a href="connected-apps.php">Connected Apps</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i data-feather="globe"></i><span>Website
											Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="system-settings.php">System Settings</a></li>
										<li><a href="company-settings.php">Company Settings </a></li>
										<li><a href="localization-settings.php">Localization</a></li>
										<li><a href="prefixes.php">Prefixes</a></li>
										<li><a href="preference.php">Preference</a></li>
										<li><a href="appearance.php">Appearance</a></li>
										<li><a href="social-authentication.php">Social Authentication</a></li>
										<li><a href="language-settings.php">Language</a></li>
									<li><a href="policies.php">Policies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i data-feather="smartphone"></i><span>App
											Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="invoice-settings.php">Invoice</a></li>
										<li><a href="printer-settings.php">Printer</a></li>
										<li><a href="pos-settings.php">POS</a></li>
										<li><a href="custom-fields.php">Custom Fields</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i data-feather="monitor"></i><span>System
											Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="email-settings.php">Email</a></li>
										<li><a href="sms-gateway.php">SMS Gateways</a></li>
										<li><a href="otp-settings.php">OTP</a></li>
										<li><a href="gdpr-settings.php">GDPR Cookies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i data-feather="dollar-sign"></i><span>Financial
											Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="payment-gateway-settings.php">Payment Gateway</a></li>
										<li><a href="bank-settings-grid.php">Bank Accounts</a></li>
										<li><a href="tax-rates.php">Tax Rates</a></li>
										<li><a href="currency-settings.php">Currencies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i data-feather="hexagon"></i><span>Other
											Settings</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="storage-settings.php">Storage</a></li>
										<li><a href="ban-ip-address.php">Ban IP Address</a></li>
									</ul>
								</li>
								<li>
									<a href="signin.php"><i data-feather="log-out"></i><span>Logout</span> </a>
								</li>

							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">UI Interface</h6>
							<ul>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i data-feather="layers"></i><span>Base UI</span><span
											class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="ui-alerts.php">Alerts</a></li>
										<li><a href="ui-accordion.php">Accordion</a></li>
										<li><a href="ui-avatar.php">Avatar</a></li>
										<li><a href="ui-badges.php">Badges</a></li>
										<li><a href="ui-borders.php">Border</a></li>
										<li><a href="ui-buttons.php">Buttons</a></li>
										<li><a href="ui-buttons-group.php">Button Group</a></li>
										<li><a href="ui-breadcrumb.php">Breadcrumb</a></li>
										<li><a href="ui-cards.php">Card</a></li>
										<li><a href="ui-carousel.php">Carousel</a></li>
										<li><a href="ui-colors.php">Colors</a></li>
										<li><a href="ui-dropdowns.php">Dropdowns</a></li>
										<li><a href="ui-grid.php">Grid</a></li>
										<li><a href="ui-images.php">Images</a></li>
										<li><a href="ui-lightbox.php">Lightbox</a></li>
										<li><a href="ui-media.php">Media</a></li>
										<li><a href="ui-modals.php">Modals</a></li>
										<li><a href="ui-offcanvas.php">Offcanvas</a></li>
										<li><a href="ui-pagination.php">Pagination</a></li>
										<li><a href="ui-popovers.php">Popovers</a></li>
										<li><a href="ui-progress.php">Progress</a></li>
										<li><a href="ui-placeholders.php">Placeholders</a></li>
										<li><a href="ui-rangeslider.php">Range Slider</a></li>
										<li><a href="ui-spinner.php">Spinner</a></li>
										<li><a href="ui-sweetalerts.php">Sweet Alerts</a></li>
										<li><a href="ui-nav-tabs.php">Tabs</a></li>
										<li><a href="ui-toasts.php">Toasts</a></li>
										<li><a href="ui-tooltips.php">Tooltips</a></li>
										<li><a href="ui-typography.php">Typography</a></li>
										<li><a href="ui-video.php">Video</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i data-feather="layers"></i><span>Advanced UI</span><span
											class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="ui-ribbon.php">Ribbon</a></li>
										<li><a href="ui-clipboard.php">Clipboard</a></li>
										<li><a href="ui-drag-drop.php">Drag & Drop</a></li>
										<li><a href="ui-rangeslider.php">Range Slider</a></li>
										<li><a href="ui-rating.php">Rating</a></li>
										<li><a href="ui-text-editor.php">Text Editor</a></li>
										<li><a href="ui-counter.php">Counter</a></li>
										<li><a href="ui-scrollbar.php">Scrollbar</a></li>
										<li><a href="ui-stickynote.php">Sticky Note</a></li>
										<li><a href="ui-timeline.php">Timeline</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i
											data-feather="bar-chart-2"></i><span>Charts</span><span
											class="menu-arrow"></span></a>
									<ul>
										<li><a href="chart-apex.php">Apex Charts</a></li>
										<li><a href="chart-c3.php">Chart C3</a></li>
										<li><a href="chart-js.php">Chart Js</a></li>
										<li><a href="chart-morris.php">Morris Charts</a></li>
										<li><a href="chart-flot.php">Flot Charts</a></li>
										<li><a href="chart-peity.php">Peity Charts</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i data-feather="database"></i><span>Icons</span><span
											class="menu-arrow"></span></a>
									<ul>
										<li><a href="icon-fontawesome.php">Fontawesome Icons</a></li>
										<li><a href="icon-feather.php">Feather Icons</a></li>
										<li><a href="icon-ionic.php">Ionic Icons</a></li>
										<li><a href="icon-material.php">Material Icons</a></li>
										<li><a href="icon-pe7.php">Pe7 Icons</a></li>
										<li><a href="icon-simpleline.php">Simpleline Icons</a></li>
										<li><a href="icon-themify.php">Themify Icons</a></li>
										<li><a href="icon-weather.php">Weather Icons</a></li>
										<li><a href="icon-typicon.php">Typicon Icons</a></li>
										<li><a href="icon-flag.php">Flag Icons</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);">
										<i data-feather="edit"></i><span>Forms</span><span class="menu-arrow"></span>
									</a>
									<ul>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Form Elements<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="form-basic-inputs.php">Basic Inputs</a></li>
												<li><a href="form-checkbox-radios.php">Checkbox & Radios</a></li>
												<li><a href="form-input-groups.php">Input Groups</a></li>
												<li><a href="form-grid-gutters.php">Grid & Gutters</a></li>
												<li><a href="form-select.php">Form Select</a></li>
												<li><a href="form-mask.php">Input Masks</a></li>
												<li><a href="form-fileupload.php">File Uploads</a></li>
											</ul>
										</li>
										<li class="submenu submenu-two">
											<a href="javascript:void(0);">Layouts<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="form-horizontal.php">Horizontal Form</a></li>
												<li><a href="form-vertical.php">Vertical Form</a></li>
												<li><a href="form-floating-labels.php">Floating Labels</a></li>
											</ul>
										</li>
										<li><a href="form-validation.php">Form Validation</a></li>
										<li><a href="form-select2.php">Select2</a></li>
										<li><a href="form-wizard.php">Form Wizard</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);" class="subdrop active"><i
											data-feather="columns"></i><span>Tables</span><span
											class="menu-arrow"></span></a>
									<ul>
										<li><a href="tables-basic.php" class="active">Basic Tables </a></li>
										<li><a href="data-tables.php">Data Table </a></li>
									</ul>
								</li>

							</ul>
						</li>
						<li class="submenu-open">
							<h6 class="submenu-hdr">Help</h6>
							<ul>
								<li><a href="javascript:void(0);"><i
											data-feather="file-text"></i><span>Documentation</span></a></li>
								<li><a href="javascript:void(0);"><i data-feather="lock"></i><span>Changelog
											v2.0.7</span></a></li>
								<li class="submenu">
									<a href="javascript:void(0);"><i data-feather="file-minus"></i><span>Multi
											Level</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="javascript:void(0);">Level 1.1</a></li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span
													class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="javascript:void(0);">Level 2.1</a></li>
												<li class="submenu submenu-two submenu-three"><a
														href="javascript:void(0);">Level 2.2<span
															class="menu-arrow inside-submenu inside-submenu-two"></span></a>
													<ul>
														<li><a href="javascript:void(0);">Level 3.1</a></li>
														<li><a href="javascript:void(0);">Level 3.2</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<!-- Sidebar -->
		<div class="sidebar collapsed-sidebar" id="collapsed-sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu-2" class="sidebar-menu sidebar-menu-three">
					<aside id="aside" class="ui-aside">
						<ul class="tab nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#home" id="home-tab" data-bs-toggle="tab"
									data-bs-target="#home" role="tab" aria-selected="true">
									<img src="assets/img/icons/menu-icon.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#messages" id="messages-tab" data-bs-toggle="tab"
									data-bs-target="#product" role="tab" aria-selected="false">
									<img src="assets/img/icons/product.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#profile" id="profile-tab" data-bs-toggle="tab"
									data-bs-target="#sales" role="tab" aria-selected="false">
									<img src="assets/img/icons/sales1.svg" alt="">
								</a>
							</li>

							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#report" id="report-tab" data-bs-toggle="tab"
									data-bs-target="#purchase" role="tab" aria-selected="true">
									<img src="assets/img/icons/purchase1.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set" id="set-tab" data-bs-toggle="tab"
									data-bs-target="#user" role="tab" aria-selected="true">
									<img src="assets/img/icons/users1.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set2" id="set-tab2" data-bs-toggle="tab"
									data-bs-target="#employee" role="tab" aria-selected="true">
									<img src="assets/img/icons/calendars.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set3" id="set-tab3" data-bs-toggle="tab"
									data-bs-target="#report" role="tab" aria-selected="true">
									<img src="assets/img/icons/printer.svg" alt="">
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set4" id="set-tab4" data-bs-toggle="tab"
									data-bs-target="#document" role="tab" aria-selected="true">
									<i data-feather="user"></i>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link active" href="#set5" id="set-tab6" data-bs-toggle="tab"
									data-bs-target="#permission" role="tab" aria-selected="true">
									<i data-feather="file-text"></i>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set6" id="set-tab5" data-bs-toggle="tab"
									data-bs-target="#settings" role="tab" aria-selected="true">
									<i data-feather="settings"></i>
								</a>
							</li>
						</ul>
					</aside>
					<div class="tab-content tab-content-four pt-2">
						<ul class="tab-pane" id="home" aria-labelledby="home-tab">
							<li class="submenu">
								<a href="javascript:void(0);"><span>Dashboard</span> <span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="index.php">Admin Dashboard</a></li>
									<li><a href="sales-dashboard.php">Sales Dashboard</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Application</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="chat.php">Chat</a></li>
									<li class="submenu submenu-two"><a href="javascript:void(0);"><span>Call</span><span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="video-call.php">Video Call</a></li>
											<li><a href="audio-call.php">Audio Call</a></li>
											<li><a href="call-history.php">Call History</a></li>
										</ul>
									</li>
									<li><a href="calendar.php">Calendar</a></li>
									<li><a href="email.php">Email</a></li>
									<li><a href="todo.php">To Do</a></li>
									<li><a href="notes.php">Notes</a></li>
									<li><a href="file-manager.php">File Manager</a></li>
								</ul>
							</li>
						</ul>
						<ul class="tab-pane" id="product" aria-labelledby="messages-tab">
							<li><a href="product-list.php"><span>Products</span></a></li>
							<li><a href="add-product.php"><span>Create Product</span></a></li>
							<li><a href="expired-products.php"><span>Expired Products</span></a></li>
							<li><a href="low-stocks.php"><span>Low Stocks</span></a></li>
							<li><a href="category-list.php"><span>Category</span></a></li>
							<li><a href="sub-categories.php"><span>Sub Category</span></a></li>
							<li><a href="brand-list.php"><span>Brands</span></a></li>
							<li><a href="units.php"><span>Units</span></a></li>
							<li><a href="varriant-attributes.php"><span>Variant Attributes</span></a></li>
							<li><a href="warranty.php"><span>Warranties</span></a></li>
							<li><a href="barcode.php"><span>Print Barcode</span></a></li>
							<li><a href="qrcode.php"><span>Print QR Code</span></a></li>
						</ul>
						<ul class="tab-pane" id="sales" aria-labelledby="profile-tab">
							<li><a href="sales-list.php"><span>Sales</span></a></li>
							<li><a href="invoice-report.php"><span>Invoices</span></a></li>
							<li><a href="sales-returns.php"><span>Sales Return</span></a></li>
							<li><a href="quotation-list.php"><span>Quotation</span></a></li>
							<li><a href="pos.php"><span>POS</span></a></li>
							<li><a href="coupons.php"><span>Coupons</span></a></li>
						</ul>
						<ul class="tab-pane" id="purchase" aria-labelledby="report-tab">
							<li><a href="purchase-list.php"><span>Purchases</span></a></li>
							<li><a href="purchase-order-report.php"><span>Purchase Order</span></a></li>
							<li><a href="purchase-returns.php"><span>Purchase Return</span></a></li>
							<li><a href="manage-stocks.php"><span>Manage Stock</span></a></li>
							<li><a href="stock-adjustment.php"><span>Stock Adjustment</span></a></li>
							<li><a href="stock-transfer.php"><span>Stock Transfer</span></a></li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Expenses</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="expense-list.php">Expenses</a></li>
									<li><a href="expense-category.php">Expense Category</a></li>
								</ul>
							</li>

						</ul>
						<ul class="tab-pane" id="user" aria-labelledby="set-tab">

							<li><a href="customers.php"><span>Customers</span></a></li>
							<li><a href="suppliers.php"><span>Suppliers</span></a></li>
							<li><a href="store-list.php"><span>Stores</span></a></li>
							<li><a href="warehouse.php"><span>Warehouses</span></a></li>

						</ul>
						<ul class="tab-pane" id="employee" aria-labelledby="set-tab2">
							<li><a href="employees-grid.php"><span>Employees</span></a></li>
							<li><a href="department-grid.php"><span>Departments</span></a></li>
							<li><a href="designation.php"><span>Designation</span></a></li>
							<li><a href="shift.php"><span>Shifts</span></a></li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Attendence</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="attendance-employee.php">Employee Attendence</a></li>
									<li><a href="attendance-admin.php">Admin Attendence</a></li>
								</ul>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Leaves</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="leaves-admin.php">Admin Leaves</a></li>
									<li><a href="leaves-employee.php">Employee Leaves</a></li>
									<li><a href="leave-types.php">Leave Types</a></li>
								</ul>
							</li>
							<li><a href="holidays.php"><span>Holidays</span></a></li>
							<li class="submenu">
								<a href="payroll-list.php"><span>Payroll</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="payroll-list.php">Employee Salary</a></li>
									<li><a href="payslip.php">Payslip</a></li>
								</ul>
							</li>
						</ul>
						<ul class="tab-pane" id="report" aria-labelledby="set-tab3">
							<li><a href="sales-report.php"><span>Sales Report</span></a></li>
							<li><a href="purchase-report.php"><span>Purchase report</span></a></li>
							<li><a href="inventory-report.php"><span>Inventory Report</span></a></li>
							<li><a href="invoice-report.php"><span>Invoice Report</span></a></li>
							<li><a href="supplier-report.php"><span>Supplier Report</span></a></li>
							<li><a href="customer-report.php"><span>Customer Report</span></a></li>
							<li><a href="expense-report.php"><span>Expense Report</span></a></li>
							<li><a href="income-report.php"><span>Income Report</span></a></li>
							<li><a href="tax-reports.php"><span>Tax Report</span></a></li>
							<li><a href="profit-and-loss.php"><span>Profit & Loss</span></a></li>
						</ul>
						<ul class="tab-pane active" id="permission" aria-labelledby="set-tab4">
							<li><a href="users.php"><span>Users</span></a></li>
							<li><a href="roles-permissions.php"><span>Roles & Permissions</span></a></li>
							<li><a href="delete-account.php"><span>Delete Account Request</span></a></li>

							<li class="submenu">
								<a href="javascript:void(0);">
									<span>Base UI</span><span class="menu-arrow"></span>
								</a>
								<ul>
									<li><a href="ui-alerts.php">Alerts</a></li>
									<li><a href="ui-accordion.php">Accordion</a></li>
									<li><a href="ui-avatar.php">Avatar</a></li>
									<li><a href="ui-badges.php">Badges</a></li>
									<li><a href="ui-borders.php">Border</a></li>
									<li><a href="ui-buttons.php">Buttons</a></li>
									<li><a href="ui-buttons-group.php">Button Group</a></li>
									<li><a href="ui-breadcrumb.php">Breadcrumb</a></li>
									<li><a href="ui-cards.php">Card</a></li>
									<li><a href="ui-carousel.php">Carousel</a></li>
									<li><a href="ui-colors.php">Colors</a></li>
									<li><a href="ui-dropdowns.php">Dropdowns</a></li>
									<li><a href="ui-grid.php">Grid</a></li>
									<li><a href="ui-images.php">Images</a></li>
									<li><a href="ui-lightbox.php">Lightbox</a></li>
									<li><a href="ui-media.php">Media</a></li>
									<li><a href="ui-modals.php">Modals</a></li>
									<li><a href="ui-offcanvas.php">Offcanvas</a></li>
									<li><a href="ui-pagination.php">Pagination</a></li>
									<li><a href="ui-popovers.php">Popovers</a></li>
									<li><a href="ui-progress.php">Progress</a></li>
									<li><a href="ui-placeholders.php">Placeholders</a></li>
									<li><a href="ui-rangeslider.php">Range Slider</a></li>
									<li><a href="ui-spinner.php">Spinner</a></li>
									<li><a href="ui-sweetalerts.php">Sweet Alerts</a></li>
									<li><a href="ui-nav-tabs.php">Tabs</a></li>
									<li><a href="ui-toasts.php">Toasts</a></li>
									<li><a href="ui-tooltips.php">Tooltips</a></li>
									<li><a href="ui-typography.php">Typography</a></li>
									<li><a href="ui-video.php">Video</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);">
									<span>Advanced UI</span><span class="menu-arrow"></span>
								</a>
								<ul>
									<li><a href="ui-ribbon.php">Ribbon</a></li>
									<li><a href="ui-clipboard.php">Clipboard</a></li>
									<li><a href="ui-drag-drop.php">Drag & Drop</a></li>
									<li><a href="ui-rangeslider.php">Range Slider</a></li>
									<li><a href="ui-rating.php">Rating</a></li>
									<li><a href="ui-text-editor.php">Text Editor</a></li>
									<li><a href="ui-counter.php">Counter</a></li>
									<li><a href="ui-scrollbar.php">Scrollbar</a></li>
									<li><a href="ui-stickynote.php">Sticky Note</a></li>
									<li><a href="ui-timeline.php">Timeline</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Charts</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="chart-apex.php">Apex Charts</a></li>
									<li><a href="chart-c3.php">Chart C3</a></li>
									<li><a href="chart-js.php">Chart Js</a></li>
									<li><a href="chart-morris.php">Morris Charts</a></li>
									<li><a href="chart-flot.php">Flot Charts</a></li>
									<li><a href="chart-peity.php">Peity Charts</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Icons</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="icon-fontawesome.php">Fontawesome Icons</a></li>
									<li><a href="icon-feather.php">Feather Icons</a></li>
									<li><a href="icon-ionic.php">Ionic Icons</a></li>
									<li><a href="icon-material.php">Material Icons</a></li>
									<li><a href="icon-pe7.php">Pe7 Icons</a></li>
									<li><a href="icon-simpleline.php">Simpleline Icons</a></li>
									<li><a href="icon-themify.php">Themify Icons</a></li>
									<li><a href="icon-weather.php">Weather Icons</a></li>
									<li><a href="icon-typicon.php">Typicon Icons</a></li>
									<li><a href="icon-flag.php">Flag Icons</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);">
									<span>Forms</span><span class="menu-arrow"></span>
								</a>
								<ul>
									<li class="submenu submenu-two">
										<a href="javascript:void(0);">Form Elements<span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="form-basic-inputs.php">Basic Inputs</a></li>
											<li><a href="form-checkbox-radios.php">Checkbox & Radios</a></li>
											<li><a href="form-input-groups.php">Input Groups</a></li>
											<li><a href="form-grid-gutters.php">Grid & Gutters</a></li>
											<li><a href="form-select.php">Form Select</a></li>
											<li><a href="form-mask.php">Input Masks</a></li>
											<li><a href="form-fileupload.php">File Uploads</a></li>
										</ul>
									</li>
									<li class="submenu submenu-two">
										<a href="javascript:void(0);">Layouts<span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="form-horizontal.php">Horizontal Form</a></li>
											<li><a href="form-vertical.php">Vertical Form</a></li>
											<li><a href="form-floating-labels.php">Floating Labels</a></li>
										</ul>
									</li>
									<li><a href="form-validation.php">Form Validation</a></li>
									<li><a href="form-select2.php">Select2</a></li>
									<li><a href="form-wizard.php">Form Wizard</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);" class="active subdrop"><span>Tables</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="tables-basic.php" class="active">Basic Tables </a></li>
									<li><a href="data-tables.php">Data Table </a></li>
								</ul>
							</li>

						</ul>
						<ul class="tab-pane" id="document" aria-labelledby="set-tab5">
							<li><a href="profile.php"><span>Profile</span></a></li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Authentication</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li class="submenu submenu-two"><a href="javascript:void(0);">Login<span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="signin.php">Cover</a></li>
											<li><a href="signin-2.php">Illustration</a></li>
											<li><a href="signin-3.php">Basic</a></li>
										</ul>
									</li>
									<li class="submenu submenu-two"><a href="javascript:void(0);">Register<span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="register.php">Cover</a></li>
											<li><a href="register-2.php">Illustration</a></li>
											<li><a href="register-3.php">Basic</a></li>
										</ul>
									</li>
									<li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="forgot-password.php">Cover</a></li>
											<li><a href="forgot-password-2.php">Illustration</a></li>
											<li><a href="forgot-password-3.php">Basic</a></li>
										</ul>
									</li>
									<li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="reset-password.php">Cover</a></li>
											<li><a href="reset-password-2.php">Illustration</a></li>
											<li><a href="reset-password-3.php">Basic</a></li>
										</ul>
									</li>
									<li class="submenu submenu-two"><a href="javascript:void(0);">Email
											Verification<span class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="email-verification.php">Cover</a></li>
											<li><a href="email-verification-2.php">Illustration</a></li>
											<li><a href="email-verification-3.php">Basic</a></li>
										</ul>
									</li>
									<li class="submenu submenu-two"><a href="javascript:void(0);">2 Step
											Verification<span class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="two-step-verification.php">Cover</a></li>
											<li><a href="two-step-verification-2.php">Illustration</a></li>
											<li><a href="two-step-verification-3.php">Basic</a></li>
										</ul>
									</li>
									<li><a href="lock-screen.php">Lock Screen</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Error Pages</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="error-404.php">404 Error </a></li>
									<li><a href="error-500.php">500 Error </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Places</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="countries.php">Countries</a></li>
									<li><a href="states.php">States</a></li>
								</ul>
							</li>
							<li>
								<a href="blank-page.php"><span>Blank Page</span> </a>
							</li>
							<li>
								<a href="coming-soon.php"><span>Coming Soon</span> </a>
							</li>
							<li>
								<a href="under-maintenance.php"><span>Under Maintenance</span> </a>
							</li>
						</ul>
						<ul class="tab-pane" id="settings" aria-labelledby="set-tab6">
							<li class="submenu">
								<a href="javascript:void(0);"><span>General Settings</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="general-settings.php">Profile</a></li>
									<li><a href="security-settings.php">Security</a></li>
									<li><a href="notification.php">Notifications</a></li>
									<li><a href="connected-apps.php">Connected Apps</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Website Settings</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="system-settings.php">System Settings</a></li>
									<li><a href="company-settings.php">Company Settings </a></li>
									<li><a href="localization-settings.php">Localization</a></li>
									<li><a href="prefixes.php">Prefixes</a></li>
									<li><a href="preference.php">Preference</a></li>
									<li><a href="appearance.php">Appearance</a></li>
									<li><a href="social-authentication.php">Social Authentication</a></li>
									<li><a href="language-settings.php">Language</a></li>
									<li><a href="policies.php">Policies</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>App Settings</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="invoice-settings.php">Invoice</a></li>
									<li><a href="printer-settings.php">Printer</a></li>
									<li><a href="pos-settings.php">POS</a></li>
									<li><a href="custom-fields.php">Custom Fields</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>System Settings</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="email-settings.php">Email</a></li>
									<li><a href="sms-gateway.php">SMS Gateways</a></li>
									<li><a href="otp-settings.php">OTP</a></li>
									<li><a href="gdpr-settings.php">GDPR Cookies</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Financial Settings</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="payment-gateway-settings.php">Payment Gateway</a></li>
									<li><a href="bank-settings-grid.php">Bank Accounts</a></li>
									<li><a href="tax-rates.php">Tax Rates</a></li>
									<li><a href="currency-settings.php">Currencies</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Other Settings</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="storage-settings.php">Storage</a></li>
									<li><a href="ban-ip-address.php">Ban IP Address</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0);"><span>Documentation</span></a></li>
							<li><a href="javascript:void(0);"><span>Changelog v2.0.7</span></a></li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Multi Level</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="javascript:void(0);">Level 1.1</a></li>
									<li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="javascript:void(0);">Level 2.1</a></li>
											<li class="submenu submenu-two submenu-three"><a
													href="javascript:void(0);">Level 2.2<span
														class="menu-arrow inside-submenu inside-submenu-two"></span></a>
												<ul>
													<li><a href="javascript:void(0);">Level 3.1</a></li>
													<li><a href="javascript:void(0);">Level 3.2</a></li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<!-- Sidebar -->
		<div class="sidebar horizontal-sidebar">
			<div id="sidebar-menu-3" class="sidebar-menu">
				<ul class="nav">
					<li class="submenu">
						<a href="index.php"><i data-feather="grid"></i><span> Main Menu</span> <span
								class="menu-arrow"></span></a>
						<ul>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Dashboard</span> <span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="index.php">Admin Dashboard</a></li>
									<li><a href="sales-dashboard.php">Sales Dashboard</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Application</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="chat.php">Chat</a></li>
									<li class="submenu submenu-two"><a href="javascript:void(0);"><span>Call</span><span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="video-call.php">Video Call</a></li>
											<li><a href="audio-call.php">Audio Call</a></li>
											<li><a href="call-history.php">Call History</a></li>
										</ul>
									</li>
									<li><a href="calendar.php">Calendar</a></li>
									<li><a href="email.php">Email</a></li>
									<li><a href="todo.php">To Do</a></li>
									<li><a href="notes.php">Notes</a></li>
									<li><a href="file-manager.php">File Manager</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Inventory
							</span> <span class="menu-arrow"></span></a>
						<ul>
							<li><a href="product-list.php"><span>Products</span></a></li>
							<li><a href="add-product.php"><span>Create Product</span></a></li>
							<li><a href="expired-products.php"><span>Expired Products</span></a></li>
							<li><a href="low-stocks.php"><span>Low Stocks</span></a></li>
							<li><a href="category-list.php"><span>Category</span></a></li>
							<li><a href="sub-categories.php"><span>Sub Category</span></a></li>
							<li><a href="brand-list.php"><span>Brands</span></a></li>
							<li><a href="units.php"><span>Units</span></a></li>
							<li><a href="varriant-attributes.php"><span>Variant Attributes</span></a></li>
							<li><a href="warranty.php"><span>Warranties</span></a></li>
							<li><a href="barcode.php"><span>Print Barcode</span></a></li>
							<li><a href="qrcode.php"><span>Print QR Code</span></a></li>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:void(0);"><img src="assets/img/icons/purchase1.svg" alt="img"><span>Sales
								&amp; Purchase</span> <span class="menu-arrow"></span></a>
						<ul>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Sales</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="sales-list.php"><span>Sales</span></a></li>
									<li><a href="invoice-report.php"><span>Invoices</span></a></li>
									<li><a href="sales-returns.php"><span>Sales Return</span></a></li>
									<li><a href="quotation-list.php"><span>Quotation</span></a></li>
									<li><a href="pos.php"><span>POS</span></a></li>
									<li><a href="coupons.php"><span>Coupons</span></a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Purchase</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="purchase-list.php"><span>Purchases</span></a></li>
									<li><a href="purchase-order-report.php"><span>Purchase Order</span></a></li>
									<li><a href="purchase-returns.php"><span>Purchase Return</span></a></li>
									<li><a href="manage-stocks.php"><span>Manage Stock</span></a></li>
									<li><a href="stock-adjustment.php"><span>Stock Adjustment</span></a></li>
									<li><a href="stock-transfer.php"><span>Stock Transfer</span></a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Expenses</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="expense-list.php">Expenses</a></li>
									<li><a href="expense-category.php">Expense Category</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:void(0);" class="active subdrop"><img src="assets/img/icons/users1.svg"
								alt="img"><span>User Management</span> <span class="menu-arrow"></span></a>
						<ul>
							<li class="submenu">
								<a href="javascript:void(0);"><span>People</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="customers.php"><span>Customers</span></a></li>
									<li><a href="suppliers.php"><span>Suppliers</span></a></li>
									<li><a href="store-list.php"><span>Stores</span></a></li>
									<li><a href="warehouse.php"><span>Warehouses</span></a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Roles &amp; Permissions</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="roles-permissions.php"><span>Roles & Permissions</span></a></li>
									<li><a href="delete-account.php"><span>Delete Account Request</span></a></li>

								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Base UI</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="ui-alerts.php">Alerts</a></li>
									<li><a href="ui-accordion.php">Accordion</a></li>
									<li><a href="ui-avatar.php">Avatar</a></li>
									<li><a href="ui-badges.php">Badges</a></li>
									<li><a href="ui-borders.php">Border</a></li>
									<li><a href="ui-buttons.php">Buttons</a></li>
									<li><a href="ui-buttons-group.php">Button Group</a></li>
									<li><a href="ui-breadcrumb.php">Breadcrumb</a></li>
									<li><a href="ui-cards.php">Card</a></li>
									<li><a href="ui-carousel.php">Carousel</a></li>
									<li><a href="ui-colors.php">Colors</a></li>
									<li><a href="ui-dropdowns.php">Dropdowns</a></li>
									<li><a href="ui-grid.php">Grid</a></li>
									<li><a href="ui-images.php">Images</a></li>
									<li><a href="ui-lightbox.php">Lightbox</a></li>
									<li><a href="ui-media.php">Media</a></li>
									<li><a href="ui-modals.php">Modals</a></li>
									<li><a href="ui-offcanvas.php">Offcanvas</a></li>
									<li><a href="ui-pagination.php">Pagination</a></li>
									<li><a href="ui-popovers.php">Popovers</a></li>
									<li><a href="ui-progress.php">Progress</a></li>
									<li><a href="ui-placeholders.php">Placeholders</a></li>
									<li><a href="ui-rangeslider.php">Range Slider</a></li>
									<li><a href="ui-spinner.php">Spinner</a></li>
									<li><a href="ui-sweetalerts.php">Sweet Alerts</a></li>
									<li><a href="ui-nav-tabs.php">Tabs</a></li>
									<li><a href="ui-toasts.php">Toasts</a></li>
									<li><a href="ui-tooltips.php">Tooltips</a></li>
									<li><a href="ui-typography.php">Typography</a></li>
									<li><a href="ui-video.php">Video</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Advanced UI</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="ui-ribbon.php">Ribbon</a></li>
									<li><a href="ui-clipboard.php">Clipboard</a></li>
									<li><a href="ui-drag-drop.php">Drag & Drop</a></li>
									<li><a href="ui-rangeslider.php">Range Slider</a></li>
									<li><a href="ui-rating.php">Rating</a></li>
									<li><a href="ui-text-editor.php">Text Editor</a></li>
									<li><a href="ui-counter.php">Counter</a></li>
									<li><a href="ui-scrollbar.php">Scrollbar</a></li>
									<li><a href="ui-stickynote.php">Sticky Note</a></li>
									<li><a href="ui-timeline.php">Timeline</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Charts</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="chart-apex.php">Apex Charts</a></li>
									<li><a href="chart-c3.php">Chart C3</a></li>
									<li><a href="chart-js.php">Chart Js</a></li>
									<li><a href="chart-morris.php">Morris Charts</a></li>
									<li><a href="chart-flot.php">Flot Charts</a></li>
									<li><a href="chart-peity.php">Peity Charts</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Primary Icons</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="icon-fontawesome.php">Fontawesome Icons</a></li>
									<li><a href="icon-feather.php">Feather Icons</a></li>
									<li><a href="icon-ionic.php">Ionic Icons</a></li>
									<li><a href="icon-material.php">Material Icons</a></li>
									<li><a href="icon-pe7.php">Pe7 Icons</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Secondary Icons</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="icon-simpleline.php">Simpleline Icons</a></li>
									<li><a href="icon-themify.php">Themify Icons</a></li>
									<li><a href="icon-weather.php">Weather Icons</a></li>
									<li><a href="icon-typicon.php">Typicon Icons</a></li>
									<li><a href="icon-flag.php">Flag Icons</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span> Forms</span><span class="menu-arrow"></span></a>
								<ul>
									<li class="submenu submenu-two">
										<a href="javascript:void(0);"><span>Form Elements</span><span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="form-basic-inputs.php">Basic Inputs</a></li>
											<li><a href="form-checkbox-radios.php">Checkbox & Radios</a></li>
											<li><a href="form-input-groups.php">Input Groups</a></li>
											<li><a href="form-grid-gutters.php">Grid & Gutters</a></li>
											<li><a href="form-select.php">Form Select</a></li>
											<li><a href="form-mask.php">Input Masks</a></li>
											<li><a href="form-fileupload.php">File Uploads</a></li>
										</ul>
									</li>
									<li class="submenu submenu-two">
										<a href="javascript:void(0);"><span> Layouts</span><span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="form-horizontal.php">Horizontal Form</a></li>
											<li><a href="form-vertical.php">Vertical Form</a></li>
											<li><a href="form-floating-labels.php">Floating Labels</a></li>
										</ul>
									</li>
									<li><a href="form-validation.php">Form Validation</a></li>
									<li><a href="form-select2.php">Select2</a></li>
									<li><a href="form-wizard.php">Form Wizard</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);" class="active subdrop"><span>Tables</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="tables-basic.php" class="active">Basic Tables </a></li>
									<li><a href="data-tables.php">Data Table </a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:void(0);"><i data-feather="user"></i><span>Profile</span> <span
								class="menu-arrow"></span></a>
						<ul>
							<li><a href="profile.php"><span>Profile</span></a></li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Authentication</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li class="submenu submenu-two"><a href="javascript:void(0);">Login<span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="signin.php">Cover</a></li>
											<li><a href="signin-2.php">Illustration</a></li>
											<li><a href="signin-3.php">Basic</a></li>
										</ul>
									</li>
									<li class="submenu submenu-two"><a href="javascript:void(0);">Register<span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="register.php">Cover</a></li>
											<li><a href="register-2.php">Illustration</a></li>
											<li><a href="register-3.php">Basic</a></li>
										</ul>
									</li>
									<li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="forgot-password.php">Cover</a></li>
											<li><a href="forgot-password-2.php">Illustration</a></li>
											<li><a href="forgot-password-3.php">Basic</a></li>
										</ul>
									</li>
									<li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="reset-password.php">Cover</a></li>
											<li><a href="reset-password-2.php">Illustration</a></li>
											<li><a href="reset-password-3.php">Basic</a></li>
										</ul>
									</li>
									<li class="submenu submenu-two"><a href="javascript:void(0);">Email
											Verification<span class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="email-verification.php">Cover</a></li>
											<li><a href="email-verification-2.php">Illustration</a></li>
											<li><a href="email-verification-3.php">Basic</a></li>
										</ul>
									</li>
									<li class="submenu submenu-two"><a href="javascript:void(0);">2 Step
											Verification<span class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="two-step-verification.php">Cover</a></li>
											<li><a href="two-step-verification-2.php">Illustration</a></li>
											<li><a href="two-step-verification-3.php">Basic</a></li>
										</ul>
									</li>
									<li><a href="lock-screen.php">Lock Screen</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Pages</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="error-404.php">404 Error </a></li>
									<li><a href="error-500.php">500 Error </a></li>
									<li>
										<a href="blank-page.php"><span>Blank Page</span> </a>
									</li>
									<li>
										<a href="coming-soon.php"><span>Coming Soon</span> </a>
									</li>
									<li>
										<a href="under-maintenance.php"><span>Under Maintenance</span> </a>
									</li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Places</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="countries.php">Countries</a></li>
									<li><a href="states.php">States</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Employees</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="employees-grid.php"><span>Employees</span></a></li>
									<li><a href="department-grid.php"><span>Departments</span></a></li>
									<li><a href="designation.php"><span>Designation</span></a></li>
									<li><a href="shift.php"><span>Shifts</span></a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Attendence</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="attendance-employee.php">Employee Attendence</a></li>
									<li><a href="attendance-admin.php">Admin Attendence</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Leaves &amp; Holidays</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="leaves-admin.php">Admin Leaves</a></li>
									<li><a href="leaves-employee.php">Employee Leaves</a></li>
									<li><a href="leave-types.php">Leave Types</a></li>
									<li><a href="holidays.php"><span>Holidays</span></a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="payroll-list.php"><span>Payroll</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="payroll-list.php">Employee Salary</a></li>
									<li><a href="payslip.php">Payslip</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:void(0);"><img src="assets/img/icons/printer.svg"
								alt="img"><span>Reports</span> <span class="menu-arrow"></span></a>
						<ul>
							<li><a href="sales-report.php"><span>Sales Report</span></a></li>
							<li><a href="purchase-report.php"><span>Purchase report</span></a></li>
							<li><a href="inventory-report.php"><span>Inventory Report</span></a></li>
							<li><a href="invoice-report.php"><span>Invoice Report</span></a></li>
							<li><a href="supplier-report.php"><span>Supplier Report</span></a></li>
							<li><a href="customer-report.php"><span>Customer Report</span></a></li>
							<li><a href="expense-report.php"><span>Expense Report</span></a></li>
							<li><a href="income-report.php"><span>Income Report</span></a></li>
							<li><a href="tax-reports.php"><span>Tax Report</span></a></li>
							<li><a href="profit-and-loss.php"><span>Profit & Loss</span></a></li>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:void(0);"><img src="assets/img/icons/settings.svg" alt="img"><span>
								Settings</span> <span class="menu-arrow"></span></a>
						<ul>
							<li class="submenu">
								<a href="javascript:void(0);"><span>General Settings</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="general-settings.php">Profile</a></li>
									<li><a href="security-settings.php">Security</a></li>
									<li><a href="notification.php">Notifications</a></li>
									<li><a href="connected-apps.php">Connected Apps</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Website Settings</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="system-settings.php">System Settings</a></li>
									<li><a href="company-settings.php">Company Settings </a></li>
									<li><a href="localization-settings.php">Localization</a></li>
									<li><a href="prefixes.php">Prefixes</a></li>
									<li><a href="preference.php">Preference</a></li>
									<li><a href="appearance.php">Appearance</a></li>
									<li><a href="social-authentication.php">Social Authentication</a></li>
									<li><a href="language-settings.php">Language</a></li>
									<li><a href="policies.php">Policies</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>App Settings</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="invoice-settings.php">Invoice</a></li>
									<li><a href="printer-settings.php">Printer</a></li>
									<li><a href="pos-settings.php">POS</a></li>
									<li><a href="custom-fields.php">Custom Fields</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>System Settings</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="email-settings.php">Email</a></li>
									<li><a href="sms-gateway.php">SMS Gateways</a></li>
									<li><a href="otp-settings.php">OTP</a></li>
									<li><a href="gdpr-settings.php">GDPR Cookies</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Financial Settings</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="payment-gateway-settings.php">Payment Gateway</a></li>
									<li><a href="bank-settings-grid.php">Bank Accounts</a></li>
									<li><a href="tax-rates.php">Tax Rates</a></li>
									<li><a href="currency-settings.php">Currencies</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Other Settings</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="storage-settings.php">Storage</a></li>
									<li><a href="ban-ip-address.php">Ban IP Address</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0);"><span>Documentation</span></a></li>
							<li><a href="javascript:void(0);"><span>Changelog v2.0.7</span></a></li>
							<li class="submenu">
								<a href="javascript:void(0);"><span>Multi Level</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="javascript:void(0);">Level 1.1</a></li>
									<li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span
												class="menu-arrow inside-submenu"></span></a>
										<ul>
											<li><a href="javascript:void(0);">Level 2.1</a></li>
											<li class="submenu submenu-two submenu-three"><a
													href="javascript:void(0);">Level 2.2<span
														class="menu-arrow inside-submenu inside-submenu-two"></span></a>
												<ul>
													<li><a href="javascript:void(0);">Level 3.1</a></li>
													<li><a href="javascript:void(0);">Level 3.2</a></li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- /Sidebar -->

		<div class="page-wrapper cardhead">
			<div class="content container-fluid">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Basic Tables</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Basic Tables</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Basic Table</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												<th>Firstname</th>
												<th>Lastname</th>
												<th>Email</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>John</td>
												<td>Doe</td>
												<td>john@example.com</td>
											</tr>
											<tr>
												<td>Mary</td>
												<td>Moe</td>
												<td>mary@example.com</td>
											</tr>
											<tr>
												<td>July</td>
												<td>Dooley</td>
												<td>july@example.com</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Striped Rows</h5>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped mb-0">
										<thead>
											<tr>
												<th>Firstname</th>
												<th>Lastname</th>
												<th>Email</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>John</td>
												<td>Doe</td>
												<td>john@example.com</td>
											</tr>
											<tr>
												<td>Mary</td>
												<td>Moe</td>
												<td>mary@example.com</td>
											</tr>
											<tr>
												<td>July</td>
												<td>Dooley</td>
												<td>july@example.com</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Bordered Table</h5>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered mb-0">
										<thead>
											<tr>
												<th>Firstname</th>
												<th>Lastname</th>
												<th>Email</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>John</td>
												<td>Doe</td>
												<td>john@example.com</td>
											</tr>
											<tr>
												<td>Mary</td>
												<td>Moe</td>
												<td>mary@example.com</td>
											</tr>
											<tr>
												<td>July</td>
												<td>Dooley</td>
												<td>july@example.com</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Borderless Table</h5>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-borderless mb-0">
										<thead>
											<tr>
												<th>Firstname</th>
												<th>Lastname</th>
												<th>Email</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>John</td>
												<td>Doe</td>
												<td>john@example.com</td>
											</tr>
											<tr>
												<td>Mary</td>
												<td>Moe</td>
												<td>mary@example.com</td>
											</tr>
											<tr>
												<td>July</td>
												<td>Dooley</td>
												<td>july@example.com</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Hover Rows</h5>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover mb-0">
										<thead>
											<tr>
												<th>Firstname</th>
												<th>Lastname</th>
												<th>Email</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>John</td>
												<td>Doe</td>
												<td>john@example.com</td>
											</tr>
											<tr>
												<td>Mary</td>
												<td>Moe</td>
												<td>mary@example.com</td>
											</tr>
											<tr>
												<td>July</td>
												<td>Dooley</td>
												<td>july@example.com</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Contextual Classes</h5>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												<th>Firstname</th>
												<th>Lastname</th>
												<th>Email</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Default</td>
												<td>Defaultson</td>
												<td>def@somemail.com</td>
											</tr>
											<tr class="table-primary">
												<td>Primary</td>
												<td>Doe</td>
												<td>john@example.com</td>
											</tr>
											<tr class="table-secondary">
												<td>Secondary</td>
												<td>Moe</td>
												<td>mary@example.com</td>
											</tr>
											<tr class="table-success">
												<td>Success</td>
												<td>Dooley</td>
												<td>july@example.com</td>
											</tr>
											<tr class="table-danger">
												<td>Danger</td>
												<td>Refs</td>
												<td>bo@example.com</td>
											</tr>
											<tr class="table-warning">
												<td>Warning</td>
												<td>Activeson</td>
												<td>act@example.com</td>
											</tr>
											<tr class="table-info">
												<td>Info</td>
												<td>Activeson</td>
												<td>act@example.com</td>
											</tr>
											<tr class="table-light">
												<td>Light</td>
												<td>Activeson</td>
												<td>act@example.com</td>
											</tr>
											<tr class="table-dark">
												<td>Dark</td>
												<td>Activeson</td>
												<td>act@example.com</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Responsive Tables</h5>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-nowrap mb-0">
										<thead>
											<tr>
												<th>#</th>
												<th>Firstname</th>
												<th>Lastname</th>
												<th>Age</th>
												<th>City</th>
												<th>Country</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Anna</td>
												<td>Pitt</td>
												<td>35</td>
												<td>New York</td>
												<td>USA</td>
											</tr>
											<tr>
												<td>1</td>
												<td>Anna</td>
												<td>Pitt</td>
												<td>35</td>
												<td>New York</td>
												<td>USA</td>
											</tr>
											<tr>
												<td>1</td>
												<td>Anna</td>
												<td>Pitt</td>
												<td>35</td>
												<td>New York</td>
												<td>USA</td>
											</tr>
											<tr>
												<td>1</td>
												<td>Anna</td>
												<td>Pitt</td>
												<td>35</td>
												<td>New York</td>
												<td>USA</td>
											</tr>
											<tr>
												<td>1</td>
												<td>Anna</td>
												<td>Pitt</td>
												<td>35</td>
												<td>New York</td>
												<td>USA</td>
											</tr>
											<tr>
												<td>1</td>
												<td>Anna</td>
												<td>Pitt</td>
												<td>35</td>
												<td>New York</td>
												<td>USA</td>
											</tr>
											<tr>
												<td>1</td>
												<td>Anna</td>
												<td>Pitt</td>
												<td>35</td>
												<td>New York</td>
												<td>USA</td>
											</tr>
											<tr>
												<td>1</td>
												<td>Anna</td>
												<td>Pitt</td>
												<td>35</td>
												<td>New York</td>
												<td>USA</td>
											</tr>
											<tr>
												<td>1</td>
												<td>Anna</td>
												<td>Pitt</td>
												<td>35</td>
												<td>New York</td>
												<td>USA</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Table Without Borders
								</div>

							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-nowrap table-borderless">
										<thead>
											<tr>
												<th scope="col">User Name</th>
												<th scope="col">Transaction Id</th>
												<th scope="col">Created</th>
												<th scope="col">Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">Harshrath</th>
												<td>#5182-3467</td>
												<td>24 May 2022</td>
												<td><span class="badge bg-primary">Fixed</span></td>
											</tr>
											<tr>
												<th scope="row">Zozo Hadid</th>
												<td>#5182-3412</td>
												<td>02 July 2022</td>
												<td><span class="badge bg-warning">In Progress</span></td>
											</tr>
											<tr>
												<th scope="row">Martiana</th>
												<td>#5182-3423</td>
												<td>15 April 2022</td>
												<td><span class="badge bg-success">Completed</span></td>
											</tr>
											<tr>
												<th scope="row">Alex Carey</th>
												<td>#5182-3456</td>
												<td>17 March 2022</td>
												<td><span class="badge bg-danger">Pending</span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Striped rows
								</div>

							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-nowrap table-striped">
										<thead>
											<tr>
												<th scope="col">ID</th>
												<th scope="col">Date</th>
												<th scope="col">Customer</th>
												<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">2022R-01</th>
												<td>27-010-2022</td>
												<td>Moracco</td>
												<td>
													<button
														class="btn btn-sm btn-success btn-wave waves-effect waves-light">
														<i
															class="feather-download align-middle me-2 d-inline-block"></i>Download
													</button>
												</td>
											</tr>
											<tr>
												<th scope="row">2022R-02</th>
												<td>28-10-2022</td>
												<td>Thornton</td>
												<td>
													<button
														class="btn btn-sm btn-success btn-wave waves-effect waves-light">
														<i
															class="feather-download align-middle me-2 d-inline-block"></i>Download
													</button>
												</td>
											</tr>
											<tr>
												<th scope="row">2022R-03</th>
												<td>22-10-2022</td>
												<td>Larry Bird</td>
												<td>
													<button
														class="btn btn-sm btn-success btn-wave waves-effect waves-light">
														<i
															class="feather-download align-middle me-2 d-inline-block"></i>Download
													</button>
												</td>
											</tr>
											<tr>
												<th scope="row">2022R-04</th>
												<td>29-09-2022</td>
												<td>Erica Sean</td>
												<td>
													<button
														class="btn btn-sm btn-success btn-wave waves-effect waves-light">
														<i
															class="feather-download align-middle me-2 d-inline-block"></i>Download
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>

					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Striped columns
								</div>

							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-nowrap table-striped-columns">
										<thead>
											<tr>
												<th scope="col">ID</th>
												<th scope="col">Date</th>
												<th scope="col">Customer</th>
												<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">2022R-01</th>
												<td>27-010-2022</td>
												<td>Moracco</td>
												<td>
													<button
														class="btn btn-sm btn-danger btn-wave waves-effect waves-light">
														<i
															class="feather-trash align-middle me-2 d-inline-block"></i>Delete
													</button>
												</td>
											</tr>
											<tr>
												<th scope="row">2022R-02</th>
												<td>28-10-2022</td>
												<td>Thornton</td>
												<td>
													<button
														class="btn btn-sm btn-danger btn-wave waves-effect waves-light">
														<i
															class="feather-trash align-middle me-2 d-inline-block"></i>Delete
													</button>
												</td>
											</tr>
											<tr>
												<th scope="row">2022R-03</th>
												<td>22-10-2022</td>
												<td>Larry Bird</td>
												<td>
													<button
														class="btn btn-sm btn-danger btn-wave waves-effect waves-light">
														<i
															class="feather-trash align-middle me-2 d-inline-block"></i>Delete
													</button>
												</td>
											</tr>
											<tr>
												<th scope="row">2022R-04</th>
												<td>29-09-2022</td>
												<td>Erica Sean</td>
												<td>
													<button
														class="btn btn-sm btn-danger btn-wave waves-effect waves-light">
														<i
															class="feather-trash align-middle me-2 d-inline-block"></i>Delete
													</button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Small Tables
								</div>

							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-nowrap table-sm">
										<thead>
											<tr>
												<th scope="col">Invoice</th>
												<th scope="col">Created Date</th>
												<th scope="col">Status</th>
												<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value=""
															id="checkebox-sm" checked="">
														<label class="form-check-label" for="checkebox-sm">
															Zelensky
														</label>
													</div>
												</th>
												<td>25-Apr-2021</td>
												<td><span class="badge bg-soft-success">Paid</span></td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-light"><i
																class="feather-download"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-light"><i
																class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<th scope="row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value=""
															id="checkebox-sm1">
														<label class="form-check-label" for="checkebox-sm1">
															Kim Jong
														</label>
													</div>
												</th>
												<td>29-April-2022</td>
												<td><span class="badge bg-soft-danger">Pending</span></td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-light"><i
																class="feather-download"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-light"><i
																class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<th scope="row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value=""
															id="checkebox-sm2">
														<label class="form-check-label" for="checkebox-sm2">
															Obana
														</label>
													</div>
												</th>
												<td>30-Nov-2022</td>
												<td><span class="badge bg-soft-success">Paid</span></td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-light"><i
																class="feather-download"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-light"><i
																class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<th scope="row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value=""
															id="checkebox-sm3">
														<label class="form-check-label" for="checkebox-sm3">
															Sean Paul
														</label>
													</div>
												</th>
												<td>01-Jan-2022</td>
												<td><span class="badge bg-soft-success">Paid</span></td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-light"><i
																class="feather-download"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-light"><i
																class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<th scope="row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value=""
															id="checkebox-sm4">
														<label class="form-check-label" for="checkebox-sm4">
															Karizma
														</label>
													</div>
												</th>
												<td>14-Feb-2022</td>
												<td><span class="badge bg-soft-danger">Pending</span></td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-light"><i
																class="feather-download"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-light"><i
																class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Table Head Primary
								</div>

							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead class="table-primary">
											<tr>
												<th scope="col">User Name</th>
												<th scope="col">Transaction Id</th>
												<th scope="col">Created</th>
												<th scope="col">Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">Harshrath</th>
												<td>#5182-3467</td>
												<td>24 May 2022</td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-soft-success rounded-pill"><i
																class="feather-download"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-soft-info rounded-pill"><i
																class="feather-edit"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-soft-danger rounded-pill"><i
																class="feather-trash"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<th scope="row">Zozo Hadid</th>
												<td>#5182-3412</td>
												<td>02 July 2022</td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-soft-success rounded-pill"><i
																class="feather-download"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-soft-info rounded-pill"><i
																class="feather-edit"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-soft-danger rounded-pill"><i
																class="feather-trash"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<th scope="row">Martiana</th>
												<td>#5182-3423</td>
												<td>15 April 2022</td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-soft-success rounded-pill"><i
																class="feather-download"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-soft-info rounded-pill"><i
																class="feather-edit"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-soft-danger rounded-pill"><i
																class="feather-trash"></i></a>
													</div>
												</td>
											</tr>
											<tr>
												<th scope="row">Alex Carey</th>
												<td>#5182-3456</td>
												<td>17 March 2022</td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-soft-success rounded-pill"><i
																class="feather-download"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-soft-info rounded-pill"><i
																class="feather-edit"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-soft-danger rounded-pill"><i
																class="feather-trash"></i></a>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>

					<div class="col-xl-12">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">Hoverable Rows</div>

							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-nowrap table-hover">
										<thead>
											<tr>
												<th scope="col">Product Manager</th>
												<th scope="col">Category</th>
												<th scope="col">Team</th>
												<th scope="col">Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar avatar-sm me-2 avatar-rounded">
															<img src="assets/img/avatar/avatar-10.jpg" alt="img">
														</div>
														<div>
															<div class="lh-1">
																<span>Joanna Smith</span>
															</div>
															<div class="lh-1">
																<span
																	class="fs-11 text-muted">joannasmith14@gmail.com</span>
															</div>
														</div>
													</div>
												</td>
												<td><span class="badge bg-soft-primary">Fashion</span></td>
												<td>
													<div class="avatar-list-stacked">
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-2.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-8.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-2.jpg" alt="img">
														</span>
														<a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
															href="javascript:void(0);">
															+5
														</a>
													</div>
												</td>
												<td>
													<div class="progress progress-xs">
														<div class="progress-bar bg-primary" role="progressbar"
															style="width: 52%" aria-valuenow="52" aria-valuemin="0"
															aria-valuemax="100">
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar avatar-sm me-2 avatar-rounded">
															<img src="assets/img/avatar/avatar-2.jpg" alt="img">
														</div>
														<div>
															<div class="lh-1">
																<span>Kara Kova</span>
															</div>
															<div class="lh-1">
																<span
																	class="fs-11 text-muted">milesakara@gmail.com</span>
															</div>
														</div>
													</div>
												</td>
												<td><span class="badge bg-soft-warning">Clothing</span></td>
												<td>
													<div class="avatar-list-stacked">
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-4.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-6.jpg" alt="img">
														</span>
														<a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
															href="javascript:void(0);">
															+6
														</a>
													</div>
												</td>
												<td>
													<div class="progress progress-xs">
														<div class="progress-bar bg-primary" role="progressbar"
															style="width: 40%" aria-valuenow="40" aria-valuemin="0"
															aria-valuemax="100">
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar avatar-sm me-2 avatar-rounded">
															<img src="assets/img/avatar/avatar-16.jpg" alt="img">
														</div>
														<div>
															<div class="lh-1">
																<span>Donald Trimb</span>
															</div>
															<div class="lh-1">
																<span
																	class="fs-11 text-muted">donaldo21@gmail.com</span>
															</div>
														</div>
													</div>
												</td>
												<td><span class="badge bg-soft-dark">Electronics</span></td>
												<td>
													<div class="avatar-list-stacked">
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-1.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-11.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-15.jpg" alt="img">
														</span>
														<a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
															href="javascript:void(0);">
															+2
														</a>
													</div>
												</td>
												<td>
													<div class="progress progress-xs">
														<div class="progress-bar bg-primary" role="progressbar"
															style="width: 17%" aria-valuenow="17" aria-valuemin="0"
															aria-valuemax="100">
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar avatar-sm me-2 avatar-rounded">
															<img src="assets/img/avatar/avatar-13.jpg" alt="img">
														</div>
														<div>
															<div class="lh-1">
																<span>Justin Gaethje</span>
															</div>
															<div class="lh-1">
																<span
																	class="fs-11 text-muted">justingae@gmail.com</span>
															</div>
														</div>
													</div>
												</td>
												<td><span class="badge bg-soft-danger">Sports</span></td>
												<td>
													<div class="avatar-list-stacked">
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-4.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-6.jpg" alt="img">
														</span>
														<a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
															href="javascript:void(0);">
															+5
														</a>
													</div>
												</td>
												<td>
													<div class="progress progress-xs">
														<div class="progress-bar bg-primary" role="progressbar"
															style="width: 72%" aria-valuenow="72" aria-valuemin="0"
															aria-valuemax="100">
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Hoverable rows With striped rows
								</div>

							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-nowrap table-striped table-hover">
										<thead>
											<tr>
												<th scope="col">Invoice</th>
												<th scope="col">Customer</th>
												<th scope="col">Status</th>
												<th scope="col">Date</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">IN-2032</th>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar avatar-sm me-2 avatar-rounded">
															<img src="assets/img/avatar/avatar-15.jpg" alt="img">
														</div>
														<div>
															<div class="lh-1">
																<span>Mark Cruise</span>
															</div>
															<div class="lh-1">
																<span
																	class="fs-11 text-muted">markcruise24@gmail.com</span>
															</div>
														</div>
													</div>
												</td>
												<td><span class="badge bg-soft-success"><i
															class="ri-check-fill align-middle me-1"></i>Paid</span></td>
												<td>Jul 26,2022</td>
											</tr>
											<tr>
												<th scope="row">IN-2022</th>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar avatar-sm me-2 avatar-rounded">
															<img src="assets/img/avatar/avatar-12.jpg" alt="img">
														</div>
														<div>
															<div class="lh-1">
																<span>Charanjeep</span>
															</div>
															<div class="lh-1">
																<span
																	class="fs-11 text-muted">charanjeep@gmail.in</span>
															</div>
														</div>
													</div>
												</td>
												<td><span class="badge bg-soft-success"><i
															class="ri-check-fill align-middle me-1"></i>Paid</span></td>
												<td>Mar 14,2022</td>
											</tr>
											<tr>
												<th scope="row">IN-2014</th>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar avatar-sm me-2 avatar-rounded">
															<img src="assets/img/avatar/avatar-5.jpg" alt="img">
														</div>
														<div>
															<div class="lh-1">
																<span>Samantha Julie</span>
															</div>
															<div class="lh-1">
																<span class="fs-11 text-muted">julie453@gmail.com</span>
															</div>
														</div>
													</div>
												</td>
												<td><span class="badge bg-soft-danger"><i
															class="ri-close-fill align-middle me-1"></i>Cancelled</span>
												</td>
												<td>Feb 1,2022</td>
											</tr>
											<tr>
												<th scope="row">IN-2036</th>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar avatar-sm me-2 avatar-rounded">
															<img src="assets/img/avatar/avatar-11.jpg" alt="img">
														</div>
														<div>
															<div class="lh-1">
																<span>Simon Cohen</span>
															</div>
															<div class="lh-1">
																<span class="fs-11 text-muted">simon@gmail.com</span>
															</div>
														</div>
													</div>
												</td>
												<td><span class="badge bg-light text-dark"><i
															class="ri-reply-line align-middle me-1"></i>Refunded</span>
												</td>
												<td>Apr 24,2022</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Always responsive -->
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Always responsive
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead>
											<tr>

												<th scope="col">Team Head</th>
												<th scope="col">Category</th>
												<th scope="col">Role</th>
												<th scope="col">Gmail</th>
												<th scope="col">Team</th>
												<th scope="col">Work Progress</th>
												<th scope="col">Revenue</th>
												<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>

												<td>
													<div class="d-flex align-items-center">
														<span class="avatar avatar-xs me-2 online avatar-rounded">
															<img src="assets/img/avatar/avatar-3.jpg" alt="img">
														</span>Mayor Kelly
													</div>
												</td>
												<td>Manufacturer</td>
												<td><span class="badge bg-soft-primary">Team Lead</span></td>
												<td>mayorkrlly@gmail.com</td>
												<td>
													<div class="avatar-list-stacked">
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-2.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-8.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-2.jpg" alt="img">
														</span>
														<a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
															href="javascript:void(0);">
															+4
														</a>
													</div>
												</td>
												<td>
													<div class="progress progress-xs">
														<div class="progress-bar bg-primary" role="progressbar"
															style="width: 52%" aria-valuenow="52" aria-valuemin="0"
															aria-valuemax="100">
														</div>
													</div>
												</td>
												<td>$10,984.29</td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-success"><i
																class="feather-download"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-info"><i
																class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>

												<td>
													<div class="d-flex align-items-center">
														<span class="avatar avatar-xs me-2 online avatar-rounded">
															<img src="assets/img/avatar/avatar-12.jpg" alt="img">
														</span>Andrew Garfield
													</div>
												</td>
												<td>Managing Director</td>
												<td><span class="badge bg-soft-warning">Director</span></td>
												<td>andrewgarfield@gmail.com</td>
												<td>
													<div class="avatar-list-stacked">
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-1.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-5.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-11.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-15.jpg" alt="img">
														</span>
														<a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
															href="javascript:void(0);">
															+4
														</a>
													</div>
												</td>
												<td>
													<div class="progress progress-xs">
														<div class="progress-bar bg-primary" role="progressbar"
															style="width: 91%" aria-valuenow="91" aria-valuemin="0"
															aria-valuemax="100">
														</div>
													</div>
												</td>
												<td>$1.4billion</td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-success"><i
																class="feather-download"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-info"><i
																class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>

												<td>
													<div class="d-flex align-items-center">
														<span class="avatar avatar-xs me-2 online avatar-rounded">
															<img src="assets/img/avatar/avatar-14.jpg" alt="img">
														</span>Simon Cowel
													</div>
												</td>
												<td>Service Manager</td>
												<td><span class="badge bg-soft-success">Manager</span></td>
												<td>simoncowel234@gmail.com</td>
												<td>
													<div class="avatar-list-stacked">
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-6.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-16.jpg" alt="img">
														</span>
														<a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
															href="javascript:void(0);">
															+10
														</a>
													</div>
												</td>
												<td>
													<div class="progress progress-xs">
														<div class="progress-bar bg-primary" role="progressbar"
															style="width: 45%" aria-valuenow="45" aria-valuemin="0"
															aria-valuemax="100">
														</div>
													</div>
												</td>
												<td>$7,123.21</td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-success"><i
																class="feather-download"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-info"><i
																class="feather-edit"></i></a>
													</div>
												</td>
											</tr>
											<tr>

												<td>
													<div class="d-flex align-items-center">
														<span class="avatar avatar-xs me-2 online avatar-rounded">
															<img src="assets/img/avatar/avatar-5.jpg" alt="img">
														</span>Mirinda Hers
													</div>
												</td>
												<td>Recruiter</td>
												<td><span class="badge bg-soft-danger">Employee</span></td>
												<td>mirindahers@gmail.com</td>
												<td>
													<div class="avatar-list-stacked">
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-3.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-10.jpg" alt="img">
														</span>
														<span class="avatar avatar-sm avatar-rounded">
															<img src="assets/img/avatar/avatar-14.jpg" alt="img">
														</span>
														<a class="avatar avatar-sm bg-primary text-fixed-white avatar-rounded"
															href="javascript:void(0);">
															+6
														</a>
													</div>
												</td>
												<td>
													<div class="progress progress-xs">
														<div class="progress-bar bg-primary" role="progressbar"
															style="width: 21%" aria-valuenow="21" aria-valuemin="0"
															aria-valuemax="100">
														</div>
													</div>
												</td>
												<td>$2,325.45</td>
												<td>
													<div class="hstack gap-2 fs-15">
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-success"><i
																class="feather-download"></i></a>
														<a href="javascript:void(0);"
															class="btn btn-icon btn-sm btn-info"><i
																class="feather-edit"></i></a>
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
				<!-- /Always responsive -->

				<!-- Primary Table -->
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Primary Table
								</div>

							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-nowrap table-primary">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">First</th>
												<th scope="col">Last</th>
												<th scope="col">Handle</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Larry the Bird</td>
												<td>Thornton</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- /Primary Table -->

				<!-- Table Head -->
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Table head options
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table">
										<thead class="thead-primary">
											<tr>
												<th>#</th>
												<th class="w-25">thead-primary</th>
												<th>Last Name</th>
												<th>Username</th>
												<th>Role</th>
											</tr>
										</thead>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table">
										<thead class="thead-secondary">
											<tr>
												<th>#</th>
												<th class="w-25">thead-secondary</th>
												<th>Last Name</th>
												<th>Username</th>
												<th>Role</th>
											</tr>
										</thead>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table">
										<thead class="thead-success">
											<tr>
												<th>#</th>
												<th class="w-25">thead-success</th>
												<th>Last Name</th>
												<th>Username</th>
												<th>Role</th>
											</tr>
										</thead>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table">
										<thead class="thead-warning">
											<tr>
												<th>#</th>
												<th class="w-25">thead-warning</th>
												<th>Last Name</th>
												<th>Username</th>
												<th>Role</th>
											</tr>
										</thead>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table">
										<thead class="thead-info">
											<tr>
												<th>#</th>
												<th class="w-25">thead-info</th>
												<th>Last Name</th>
												<th>Username</th>
												<th>Role</th>
											</tr>
										</thead>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table">
										<thead class="thead-danger">
											<tr>
												<th>#</th>
												<th class="w-25">thead-danger</th>
												<th>Last Name</th>
												<th>Username</th>
												<th>Role</th>
											</tr>
										</thead>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table mb-0">
										<thead class="thead-dark">
											<tr>
												<th>#</th>
												<th class="w-25">thead-dark</th>
												<th>Last Name</th>
												<th>Username</th>
												<th>Role</th>
											</tr>
										</thead>
									</table>
								</div>
								<div class="table-responsive">
									<table class="table mb-0">
										<thead class="thead-light">
											<tr>
												<th>#</th>
												<th class="w-25">thead-light</th>
												<th>Last Name</th>
												<th>Username</th>
												<th>Role</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Table Head -->
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