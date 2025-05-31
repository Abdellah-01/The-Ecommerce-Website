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

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">

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
										<li><a href="index.php">Online</a></li>
										<li><a href="sales-dashboard.php">Offline</a></li>
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
									<a href="javascript:void(0);" class="subdrop active">
										<i data-feather="layers"></i><span>Base UI</span><span
											class="menu-arrow"></span>
									</a>
									<ul>
										<li><a href="ui-alerts.php" class="active">Alerts</a></li>
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
										<li><a href="ribbon.php">Ribbon</a></li>
										<li><a href="clipboard.php">Clipboard</a></li>
										<li><a href="drag-drop.php">Drag & Drop</a></li>
										<li><a href="rangeslider.php">Range Slider</a></li>
										<li><a href="rating.php">Rating</a></li>
										<li><a href="text-editor.php">Text Editor</a></li>
										<li><a href="counter.php">Counter</a></li>
										<li><a href="scrollbar.php">Scrollbar</a></li>
										<li><a href="stickynote.php">Sticky Note</a></li>
										<li><a href="timeline.php">Timeline</a></li>
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
									<a href="javascript:void(0);"><i data-feather="columns"></i><span>Tables</span><span
											class="menu-arrow"></span></a>
									<ul>
										<li><a href="tables-basic.php">Basic Tables </a></li>
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
								<a class="tablinks nav-link active" href="#set4" id="set-tab4" data-bs-toggle="tab"
									data-bs-target="#document" role="tab" aria-selected="true">
									<i data-feather="user"></i>
								</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="tablinks nav-link" href="#set5" id="set-tab6" data-bs-toggle="tab"
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
								<a href="javascript:void(0);" class="active subdrop">
									<span>Base UI</span><span class="menu-arrow"></span>
								</a>
								<ul>
									<li><a href="ui-alerts.php" class="active">Alerts</a></li>
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
								<a href="javascript:void(0);"><span>Tables</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="tables-basic.php">Basic Tables </a></li>
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
						<a href="javascript:void(0);"><img src="assets/img/icons/users1.svg" alt="img"><span>User
								Management</span> <span class="menu-arrow"></span></a>
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
								<a href="javascript:void(0);" class="active subdrop">
									<span>Base UI</span><span class="menu-arrow"></span>
								</a>
								<ul>
									<li><a href="ui-alerts.php" class="active">Alerts</a></li>
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
								<a href="javascript:void(0);">
									<span> Forms Elements</span><span class="menu-arrow"></span>
								</a>
								<ul>
									<li class="submenu submenu-two">
										<a href="javascript:void(0);">
											<span>Form Elements</span><span class="menu-arrow inside-submenu"></span>
										</a>
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
										<a href="javascript:void(0);">
											<span>Layouts</span><span class="menu-arrow inside-submenu"></span>
										</a>
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
								<a href="javascript:void(0);"><span>Tables</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="tables-basic.php">Basic Tables </a></li>
									<li><a href="data-tables.php">Data Table </a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:void(0);" class="active subdrop"><i
								data-feather="user"></i><span>Profile</span> <span class="menu-arrow"></span></a>
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
								<a href="javascript:void(0);" class="active subdrop"><span>Pages</span><span
										class="menu-arrow"></span></a>
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

		<div class="page-wrapper">
			<div class="content">
				<div class="page-header">
					<div class="page-title">
						<h4>Alerts</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Default Alerts</h5>
							</div>
							<div class="card-body">
								<div class="alert alert-primary" role="alert">
									A simple primary alert—check it out!
								</div>
								<div class="alert alert-secondary" role="alert">
									A simple secondary alert—check it out!
								</div>
								<div class="alert alert-success" role="alert">
									A simple success alert—check it out!
								</div>
								<div class="alert alert-danger" role="alert">
									A simple danger alert—check it out!
								</div>
								<div class="alert alert-warning" role="alert">
									A simple warning alert—check it out!
								</div>
								<div class="alert alert-info" role="alert">
									A simple info alert—check it out!
								</div>
								<div class="alert alert-light" role="alert">
									A simple light alert—check it out!
								</div>
								<div class="alert alert-dark" role="alert">
									A simple dark alert—check it out!
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Links in alerts</h5>
							</div>
							<div class="card-body">
								<div class="alert alert-primary" role="alert">
									A simple primary alert with <a href="#" class="alert-link">an example
										link</a>.
									Give it a click if you like.
								</div>
								<div class="alert alert-secondary" role="alert">
									A simple secondary alert with <a href="#" class="alert-link">an example
										link</a>. Give it a click if you like.
								</div>
								<div class="alert alert-success" role="alert">
									A simple success alert with <a href="#" class="alert-link">an example
										link</a>.
									Give it a click if you like.
								</div>
								<div class="alert alert-danger" role="alert">
									A simple danger alert with <a href="#" class="alert-link">an example
										link</a>.
									Give it a click if you like.
								</div>
								<div class="alert alert-warning" role="alert">
									A simple warning alert with <a href="#" class="alert-link">an example
										link</a>.
									Give it a click if you like.
								</div>
								<div class="alert alert-info" role="alert">
									A simple info alert with <a href="#" class="alert-link">an example link</a>.
									Give it a click if you like.
								</div>
								<div class="alert alert-light" role="alert">
									A simple light alert with <a href="#" class="alert-link">an example
										link</a>.
									Give it a click if you like.
								</div>
								<div class="alert alert-dark" role="alert">
									A simple dark alert with <a href="#" class="alert-link">an example link</a>.
									Give it a click if you like.
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Solid Colored Alerts</h5>
							</div>
							<div class="card-body">
								<div class="alert alert-solid-primary alert-dismissible fade show">
									A simple solid primary alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-solid-secondary alert-dismissible fade show">
									A simple solid secondary alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-solid-info alert-dismissible fade show">
									A simple solid info alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-solid-warning alert-dismissible fade show">
									A simple solid warning alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-solid-success alert-dismissible fade show">
									A simple solid success alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-solid-danger alert-dismissible fade show">
									A simple solid danger alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-solid-light alert-dismissible fade show">
									A simple solid light alert—check it out!
									<button type="button" class="btn-close text-default" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-solid-dark alert-dismissible fade show text-white">
									A simple solid dark alert—check it out!
									<button type="button" class="btn-close text-white" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Outline Alerts </h5>
							</div>
							<div class="card-body">
								<div class="alert alert-outline-primary alert-dismissible fade show">
									A simple outline primary alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-outline-secondary alert-dismissible fade show">
									A simple outline secondary alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-outline-info alert-dismissible fade show">
									A simple outline info alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-outline-warning alert-dismissible fade show">
									A simple outline warning alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-outline-success alert-dismissible fade show">
									A simple outline success alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-outline-danger alert-dismissible fade show">
									A simple outline danger alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-outline-light alert-dismissible fade show">
									A simple outline light alert—check it out!
									<button type="button" class="btn-close text-default" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-outline-dark alert-dismissible fade show">
									A simple outline dark alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Rounded Solid Alerts</h5>
							</div>
							<div class="card-body">
								<div class="alert alert-solid-primary rounded-pill alert-dismissible fade show">
									A simple solid rounded primary alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-solid-secondary rounded-pill alert-dismissible fade show">
									A simple solid rounded secondary alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-solid-warning rounded-pill alert-dismissible fade show">
									A simple solid rounded warning alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-solid-danger rounded-pill alert-dismissible fade show">
									A simple solid rounded danger alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Rounded Outline Alerts</h5>
							</div>
							<div class="card-body">
								<div class="alert alert-outline-primary rounded-pill alert-dismissible fade show">
									A simple outline rounded primary alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-outline-secondary rounded-pill alert-dismissible fade show">
									A simple outline rounded secondary alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-outline-warning rounded-pill alert-dismissible fade show">
									A simple outline rounded warning alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-outline-danger rounded-pill alert-dismissible fade show">
									A simple outline rounded danger alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Rounded Default Alerts
								</div>
							</div>
							<div class="card-body">
								<div class="alert alert-primary rounded-pill alert-dismissible fade show">
									A simple rounded primary alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-secondary rounded-pill alert-dismissible fade show">
									A simple rounded secondary alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-warning rounded-pill alert-dismissible fade show">
									A simple rounded warning alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-danger rounded-pill alert-dismissible fade show">
									A simple rounded danger alert—check it out!
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Rounded Alerts With Custom Close Button
								</div>
							</div>
							<div class="card-body">
								<div class="alert alert-primary rounded-pill alert-dismissible fade show">
									A simple rounded primary alert—check it out!
									<button type="button" class="btn-close custom-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-secondary rounded-pill alert-dismissible fade show">
									A simple rounded secondary alert—check it out!
									<button type="button" class="btn-close custom-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-warning rounded-pill alert-dismissible fade show">
									A simple rounded warning alert—check it out!
									<button type="button" class="btn-close custom-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-danger rounded-pill alert-dismissible fade show">
									A simple rounded danger alert—check it out!
									<button type="button" class="btn-close custom-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Alerts with icons</h5>
							</div>
							<div class="card-body">
								<div class="alert alert-primary d-flex align-items-center" role="alert">
									<i class="feather-info flex-shrink-0 me-2"></i>
									<div>
										An example alert with an icon
									</div>
								</div>
								<div class="alert alert-success d-flex align-items-center" role="alert">
									<i class="feather-check-circle flex-shrink-0 me-2"></i>
									<div>
										An example success alert with an icon
									</div>
								</div>
								<div class="alert alert-warning d-flex align-items-center" role="alert">
									<i class="feather-alert-triangle flex-shrink-0 me-2"></i>
									<div>
										An example warning alert with an icon
									</div>
								</div>
								<div class="alert alert-danger d-flex align-items-center" role="alert">
									<i class="feather-alert-octagon flex-shrink-0 me-2"></i>
									<div>
										An example danger alert with an icon
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Customized Alerts With Icons</h5>
							</div>
							<div class="card-body">
								<div class="alert alert-primary alert-dismissible fade show custom-alert-icon shadow-sm d-flex align-items-center"
									role="alert">
									<i class="feather-info flex-shrink-0 me-2"></i>
									A customized primary alert with an icon
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-secondary alert-dismissible fade show custom-alert-icon shadow-sm d-flex align-items-center"
									role="alert">
									<i class="feather-check-circle flex-shrink-0 me-2"></i>
									A customized secondary alert with an icon
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-warning alert-dismissible fade show custom-alert-icon shadow-sm d-flex align-items-center"
									role="alert">
									<i class="feather-alert-triangle flex-shrink-0 me-2"></i>
									A customized warning alert with an icon
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-danger alert-dismissible fade show custom-alert-icon shadow-sm d-flex align-items-centers"
									role="alert">
									<i class="feather-alert-octagon flex-shrink-0 me-2"></i>
									A customized danger alert with an icon
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body pb-0">
								<div class="row">
									<div class="col-xl-3">
										<div class="card border-0">
											<div class="alert alert-primary border border-primary mb-0 p-3">
												<div class="d-flex align-items-start">
													<div class="me-2">
														<i class="feather-info flex-shrink-0"></i>
													</div>
													<div class="text-primary w-100">
														<div class="fw-semibold d-flex justify-content-between">
															Information Alert<button type="button" class="btn-close p-0"
																data-bs-dismiss="alert" aria-label="Close"><i
																	class="fas fa-xmark"></i></button></div>
														<div class="fs-12 op-8 mb-1">Information alert to show to
															information message</div>
														<div class="fs-12">
															<a href="javascript:void(0);"
																class="text-secondary fw-semibold me-2 d-inline-block">cancel</a>
															<a href="javascript:void(0);"
																class="text-primary fw-semibold">open</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3">
										<div class="card border-0">
											<div class="alert alert-secondary border border-secondary mb-0 p-3">
												<div class="d-flex align-items-start">
													<div class="me-2">
														<i class="feather-check-circle flex-shrink-0"></i>
													</div>
													<div class="text-secondary w-100">
														<div class="fw-semibold d-flex justify-content-between">Success
															Alert<button type="button" class="btn-close p-0"
																data-bs-dismiss="alert" aria-label="Close"><i
																	class="fas fa-xmark"></i></button></div>
														<div class="fs-12 op-8 mb-1">Success alert to show to success
															message</div>
														<div class="fs-12">
															<a href="javascript:void(0);"
																class="text-danger fw-semibold me-2 d-inline-block">cancel</a>
															<a href="javascript:void(0);"
																class="text-secondary fw-semibold">open</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3">
										<div class="card border-0">
											<div class="alert alert-warning border border-warning mb-0 p-3">
												<div class="d-flex align-items-start">
													<div class="me-2">
														<i class="feather-alert-triangle flex-shrink-0"></i>
													</div>
													<div class="text-warning w-100">
														<div class="fw-semibold d-flex justify-content-between">Warning
															Alert<button type="button" class="btn-close p-0"
																data-bs-dismiss="alert" aria-label="Close"><i
																	class="fas fa-xmark"></i></button></div>
														<div class="fs-12 op-8 mb-1">Warning alert to show warning
															message</div>
														<div class="fs-12">
															<a href="javascript:void(0);"
																class="text-dark fw-semibold me-2 d-inline-block">cancel</a>
															<a href="javascript:void(0);"
																class="text-warning fw-semibold">open</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3">
										<div class="card border-0">
											<div class="alert alert-danger border border-danger mb-0 p-3">
												<div class="d-flex align-items-start">
													<div class="me-2">
														<i class="feather-alert-octagon flex-shrink-0"></i>
													</div>
													<div class="text-danger w-100">
														<div class="fw-semibold d-flex justify-content-between">Danger
															Alert<button type="button" class="btn-close p-0"
																data-bs-dismiss="alert" aria-label="Close"><i
																	class="fas fa-xmark"></i></button></div>
														<div class="fs-12 op-8 mb-1">Danger alert to show the danger
															message</div>
														<div class="fs-12">
															<a href="javascript:void(0);"
																class="text-info fw-semibold me-2 d-inline-block">cancel</a>
															<a href="javascript:void(0);"
																class="text-danger fw-semibold">open</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-3">
										<div class="card border-0">
											<div class="alert alert-solid-primary border border-primary mb-0 p-3">
												<div class="d-flex align-items-start">
													<div class="me-2">
														<i class="feather-info flex-shrink-0"></i>
													</div>
													<div class="text-fixed-white w-100">
														<div class="fw-semibold d-flex justify-content-between">
															Information Alert<button type="button" class="btn-close p-0"
																data-bs-dismiss="alert" aria-label="Close"><i
																	class="fas fa-xmark"></i></button></div>
														<div class="fs-12 op-8 mb-1">Information alert to show to
															information message</div>
														<div class="fs-12">
															<a href="javascript:void(0);"
																class="text-fixed-white fw-semibold me-2 op-7">cancel</a>
															<a href="javascript:void(0);"
																class="text-fixed-white fw-semibold">open</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3">
										<div class="card border-0">
											<div class="alert alert-solid-secondary border border-secondary mb-0 p-3">
												<div class="d-flex align-items-start">
													<div class="me-2">
														<i class="feather-check-circle flex-shrink-0"></i>
													</div>
													<div class="text-fixed-white w-100">
														<div class="fw-semibold d-flex justify-content-between">Success
															Alert<button type="button" class="btn-close p-0"
																data-bs-dismiss="alert" aria-label="Close"><i
																	class="fas fa-xmark"></i></button></div>
														<div class="fs-12 op-8 mb-1">Success alert to show to success
															message</div>
														<div class="fs-12">
															<a href="javascript:void(0);"
																class="text-fixed-white fw-semibold me-2">close</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3">
										<div class="card border-0">
											<div class="alert alert-solid-warning border border-warning mb-0 p-3">
												<div class="d-flex align-items-start">
													<div class="me-2">
														<i class="feather-alert-triangle flex-shrink-0"></i>
													</div>
													<div class="text-fixed-white w-100">
														<div class="fw-semibold d-flex justify-content-between">Warning
															Alert<button type="button" class="btn-close p-0"
																data-bs-dismiss="alert" aria-label="Close"><i
																	class="fas fa-xmark"></i></button></div>
														<div class="fs-12 op-8 mb-1">Warning alert to show to warning
															message</div>
														<div class="fs-12">
															<a href="javascript:void(0);"
																class="text-fixed-white fw-semibold me-2 op-7">skip</a>
															<a href="javascript:void(0);"
																class="text-fixed-white fw-semibold">open</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3">
										<div class="card border-0">
											<div class="alert alert-solid-danger border border-danger mb-0 p-3">
												<div class="d-flex align-items-start">
													<div class="me-2">
														<i class="feather-alert-octagon flex-shrink-0"></i>
													</div>
													<div class="text-fixed-white w-100">
														<div class="fw-semibold d-flex justify-content-between">Danger
															Alert<button type="button" class="btn-close p-0"
																data-bs-dismiss="alert" aria-label="Close"><i
																	class="fas fa-xmark"></i></button></div>
														<div class="fs-12 op-8 mb-1">Danger alert to show to danger
															message</div>
														<div class="fs-12">
															<a href="javascript:void(0);"
																class="text-fixed-white fw-semibold me-2 op-7">close</a>
															<a href="javascript:void(0);"
																class="text-fixed-white fw-semibold">continue</a>
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

					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Alerts With Images
								</div>
							</div>
							<div class="card-body">
								<div class="alert alert-img alert-primary alert-dismissible fase show rounded-pill flex-wrap"
									role="alert">
									<div class="avatar avatar-sm me-3 avatar-rounded">
										<img src="assets/img/profiles/avatar-01.jpg" alt="img">
									</div>
									<div>A simple primary alert with image—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-img alert-secondary alert-dismissible fase show rounded-pill flex-wrap"
									role="alert">
									<div class="avatar avatar-sm me-3 avatar-rounded">
										<img src="assets/img/profiles/avatar-02.jpg" alt="img">
									</div>
									<div>A simple secondary alert with image—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-img alert-warning alert-dismissible fase show rounded-pill flex-wrap"
									role="alert">
									<div class="avatar avatar-sm me-3 avatar-rounded">
										<img src="assets/img/profiles/avatar-03.jpg" alt="img">
									</div>
									<div>A simple warning alert with image—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-img alert-danger alert-dismissible fase show rounded-pill flex-wrap"
									role="alert">
									<div class="avatar avatar-sm me-3 avatar-rounded">
										<img src="assets/img/profiles/avatar-04.jpg" alt="img">
									</div>
									<div>A simple danger alert with image—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-img alert-info alert-dismissible fase show rounded-pill flex-wrap"
									role="alert">
									<div class="avatar avatar-sm me-3 avatar-rounded">
										<img src="assets/img/profiles/avatar-05.jpg" alt="img">
									</div>
									<div>A simple info alert with image—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-img alert-light alert-dismissible fase show rounded-pill flex-wrap"
									role="alert">
									<div class="avatar avatar-sm me-3 avatar-rounded">
										<img src="assets/img/profiles/avatar-06.jpg" alt="img">
									</div>
									<div>A simple light alert with image—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-img alert-dark alert-dismissible fase show rounded-pill flex-wrap"
									role="alert">
									<div class="avatar avatar-sm me-3 avatar-rounded">
										<img src="assets/img/profiles/avatar-07.jpg" alt="img">
									</div>
									<div>A simple dark alert with image—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark text-muted"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Alerts With Different size Images
								</div>
							</div>
							<div class="card-body">
								<div class="alert alert-img alert-primary alert-dismissible fase show flex-wrap"
									role="alert">
									<div class="avatar avatar-xs me-3">
										<img src="assets/img/profiles/avatar-02.jpg" alt="img">
									</div>
									<div>A simple primary alert with image—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-img alert-secondary alert-dismissible fase show flex-wrap"
									role="alert">
									<div class="avatar avatar-sm me-3">
										<img src="assets/img/profiles/avatar-02.jpg" alt="img">
									</div>
									<div>A simple secondary alert with image—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-img alert-warning alert-dismissible fase show flex-wrap"
									role="alert">
									<div class="avatar me-3">
										<img src="assets/img/profiles/avatar-02.jpg" alt="img">
									</div>
									<div>A simple warning alert with image—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-img alert-danger alert-dismissible fase show flex-wrap"
									role="alert">
									<div class="avatar avatar-md me-3">
										<img src="assets/img/profiles/avatar-02.jpg" alt="img">
									</div>
									<div>A simple danger alert with image—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-img alert-info alert-dismissible fase show flex-wrap"
									role="alert">
									<div class="avatar avatar-lg me-3">
										<img src="assets/img/profiles/avatar-02.jpg" alt="img">
									</div>
									<div>A simple info alert with image—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark"></i></button>
								</div>
								<div class="alert alert-img alert-dark alert-dismissible fase show flex-wrap"
									role="alert">
									<div class="avatar avatar-xl me-3">
										<img src="assets/img/profiles/avatar-02.jpg" alt="img">
									</div>
									<div>A simple info alert with image—check it out!</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"><i class="fas fa-xmark text-muted"></i></button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-12">
						<div class="row">
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="card bg-white border-0">
									<div class="alert custom-alert1 alert-primary">
										<button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"
											aria-label="Close"><i class="fas fa-xmark"></i></button>
										<div class="text-center  px-5 pb-0">
											<div class="custom-alert-icon">
												<i class="feather-info flex-shrink-0"></i>
											</div>
											<h5>Information?</h5>
											<p class="">This alert is created to just show the related information.</p>
											<div class="">
												<button class="btn btn-sm btn-outline-danger m-1">Decline</button>
												<button class="btn btn-sm btn-primary m-1">Accept</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="card bg-white border-0">
									<div class="alert custom-alert1 alert-secondary">
										<button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"
											aria-label="Close"><i class="fas fa-xmark"></i></button>
										<div class="text-center px-5 pb-0">
											<div class="custom-alert-icon">
												<i class="feather-check-circle flex-shrink-0"></i>
											</div>
											<h5>Confirmed</h5>
											<p class="">This alert is created to just show the confirmation message.</p>
											<div class="">
												<button class="btn btn-sm btn-secondary m-1">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="card bg-white border-0">
									<div class="alert custom-alert1 alert-warning">
										<button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"
											aria-label="Close"><i class="fas fa-xmark"></i></button>
										<div class="text-center px-5 pb-0">
											<div class="custom-alert-icon">
												<i class="feather-alert-triangle flex-shrink-0"></i>
											</div>
											<h5>Warning</h5>
											<p class="">This alert is created to just show the warning message.</p>
											<div class="">
												<button class="btn btn-sm btn-outline-secondary m-1">Back</button>
												<button class="btn btn-sm btn-warning m-1">Continue</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
								<div class="card bg-white border-0">
									<div class="alert custom-alert1 alert-danger">
										<button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"
											aria-label="Close"><i class="fas fa-xmark"></i></button>
										<div class="text-center px-5 pb-0">
											<div class="custom-alert-icon">
												<i class="feather-alert-octagon flex-shrink-0"></i>
											</div>
											<h5>danger</h5>
											<p class="">This alert is created to just show the danger message.</p>
											<div class="">
												<button class="btn btn-sm btn-danger m-1">Delete</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Additional content
								</div>

							</div>
							<div class="card-body">
								<div class="row gy-3">
									<div class="col-xl-6">
										<div class="alert alert-primary overflow-hidden p-0" role="alert">
											<div class="p-3 bg-primary text-fixed-white d-flex justify-content-between">
												<h6 class="aletr-heading mb-0 text-fixed-white">Thank you for reporting
													this.</h6>
												<button type="button" class="btn-close p-0 text-fixed-white"
													data-bs-dismiss="alert" aria-label="Close"><i
														class="fas fa-xmark"></i></button>
											</div>
											<hr class="my-0">
											<div class="p-3">
												<p class="mb-0">We appreciate you to let us know the bug in the template
													and for warning us about future consequences <a
														href="javascript:void(0);"
														class="fw-semibold text-decoration-underline text-primary">Visit
														for support for queries ?</a></p>
											</div>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="alert alert-secondary overflow-hidden p-0" role="alert">
											<div
												class="p-3 bg-secondary text-fixed-white d-flex justify-content-between">
												<h6 class="aletr-heading mb-0 text-fixed-white">Thank you for reporting
													this.</h6>
												<button type="button" class="btn-close p-0 text-fixed-white"
													data-bs-dismiss="alert" aria-label="Close"><i
														class="fas fa-xmark"></i></button>
											</div>
											<hr class="my-0">
											<div class="p-3">
												<p class="mb-0">We appreciate you to let us know the bug in the template
													and for warning us about future consequences <a
														href="javascript:void(0);"
														class="fw-semibold text-decoration-underline text-secondary">Visit
														for support for queries ?</a></p>
											</div>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="alert alert-success overflow-hidden p-0" role="alert">
											<div class="p-3 bg-success text-fixed-white d-flex justify-content-between">
												<h6 class="aletr-heading mb-0 text-fixed-white">Thank you for reporting
													this.</h6>
												<button type="button" class="btn-close p-0 text-fixed-white"
													data-bs-dismiss="alert" aria-label="Close"><i
														class="fas fa-xmark"></i></button>
											</div>
											<hr class="my-0">
											<div class="p-3">
												<p class="mb-0">We appreciate you to let us know the bug in the template
													and for warning us about future consequences <a
														href="javascript:void(0);"
														class="fw-semibold text-decoration-underline text-success">Visit
														for support for queries ?</a></p>
											</div>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="alert alert-warning overflow-hidden p-0" role="alert">
											<div class="p-3 bg-warning text-fixed-white d-flex justify-content-between">
												<h6 class="aletr-heading mb-0 text-fixed-white">Thank you for reporting
													this.</h6>
												<button type="button" class="btn-close p-0 text-fixed-white"
													data-bs-dismiss="alert" aria-label="Close"><i
														class="fas fa-xmark"></i></button>
											</div>
											<hr class="my-0">
											<div class="p-3">
												<p class="mb-0">We appreciate you to let us know the bug in the template
													and for warning us about future consequences <a
														href="javascript:void(0);"
														class="fw-semibold text-decoration-underline text-warning">Visit
														for support for queries ?</a></p>
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

	<!-- Chart JS -->
	<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
	<script src="assets/plugins/apexchart/chart-data.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>


</body>

</html>