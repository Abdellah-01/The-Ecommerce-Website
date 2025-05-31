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
									<a href="javascript:void(0);" class="active subdrop"><i
											data-feather="database"></i><span>Icons</span><span
											class="menu-arrow"></span></a>
									<ul>
										<li><a href="icon-fontawesome.php" class="active">Fontawesome Icons</a></li>
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
								<a href="javascript:void(0);" class="active subdrop"><span>Icons</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="icon-fontawesome.php" class="active">Fontawesome Icons</a></li>
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
								<a href="javascript:void(0);" class="active subdrop"><span>Primary Icons</span><span
										class="menu-arrow"></span></a>
								<ul>
									<li><a href="icon-fontawesome.php" class="active">Fontawesome Icons</a></li>
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
								<a href="javascript:void(0);"><span>Tables</span><span class="menu-arrow"></span></a>
								<ul>
									<li><a href="tables-basic.php">Basic Tables </a></li>
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
						<div class="col-sm-12">
							<h3 class="page-title">Fontawesome Icon</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Fontawesome</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">

					<!-- Chart -->
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="card-title">Fontawesome Icon</div>
							</div>
							<div class="card-body">
								<div class="icons-items">
									<ul class="icons-list">
										<li><i class="fa fa-address-book" data-bs-toggle="tooltip"
												title="fa fa-address-book"></i></li>
										<li><i class="fa fa-address-card" data-bs-toggle="tooltip"
												title="fa fa-address-card"></i></li>
										<li><i class="fa fa-align-center" data-bs-toggle="tooltip"
												title="fa fa-align-center"></i></li>
										<li><i class="fa fa-align-justify" data-bs-toggle="tooltip"
												title="fa fa-align-justify"></i></li>
										<li><i class="fa fa-align-left" data-bs-toggle="tooltip"
												title="fa fa-align-left"></i></li>
										<li><i class="fa fa-align-right" data-bs-toggle="tooltip"
												title="fa fa-align-right"></i></li>
										<li><i class="fa fa-ambulance" data-bs-toggle="tooltip"
												title="fa fa-ambulance"></i></li>
										<li><i class="fa fa-american-sign-language-interpreting"
												data-bs-toggle="tooltip"
												title="fa fa-american-sign-language-interpreting"></i></li>
										<li><i class="fa fa-anchor" data-bs-toggle="tooltip" title="fa fa-anchor"></i>
										</li>
										<li><i class="fa fa-angle-double-down" data-bs-toggle="tooltip"
												title="fa fa-angle-double-down"></i></li>
										<li><i class="fa fa-angle-double-left" data-bs-toggle="tooltip"
												title="fa fa-angle-double-left"></i></li>
										<li><i class="fa fa-angle-double-right" data-bs-toggle="tooltip"
												title="fa fa-angle-double-right"></i></li>
										<li><i class="fa fa-angle-double-up" data-bs-toggle="tooltip"
												title="fa fa-angle-double-up"></i></li>
										<li><i class="fa fa-angle-down" data-bs-toggle="tooltip"
												title="fa fa-angle-down"></i></li>
										<li><i class="fa fa-angle-left" data-bs-toggle="tooltip"
												title="fa fa-angle-left"></i></li>
										<li><i class="fa fa-angle-right" data-bs-toggle="tooltip"
												title="fa fa-angle-right"></i></li>
										<li><i class="fa fa-angle-up" data-bs-toggle="tooltip"
												title="fa fa-angle-up"></i></li>
										<li><i class="fab fa-apple" data-bs-toggle="tooltip" title="fab fa-apple"></i>
										</li>
										<li><i class="fa fa-archive" data-bs-toggle="tooltip" title="fa fa-archive"></i>
										</li>
										<li><i class="fas fa-chart-area" data-bs-toggle="tooltip"
												title="fas fa-chart-area"></i></li>
										<li><i class="fa fa-arrow-circle-down" data-bs-toggle="tooltip"
												title="fa fa-arrow-circle-down"></i></li>
										<li><i class="fa fa-arrow-circle-left" data-bs-toggle="tooltip"
												title="fa fa-arrow-circle-left"></i></li>
										<li><i class="fa fa-arrow-circle-right" data-bs-toggle="tooltip"
												title="fa fa-arrow-circle-right"></i></li>
										<li><i class="fa fa-arrow-circle-up" data-bs-toggle="tooltip"
												title="fa fa-arrow-circle-up"></i></li>
										<li><i class="fa fa-arrow-down" data-bs-toggle="tooltip"
												title="fa fa-arrow-down"></i></li>
										<li><i class="fa fa-arrow-left" data-bs-toggle="tooltip"
												title="fa fa-arrow-left"></i></li>
										<li><i class="fa fa-arrow-right" data-bs-toggle="tooltip"
												title="fa fa-arrow-right"></i></li>
										<li><i class="fa fa-arrow-up" data-bs-toggle="tooltip"
												title="fa fa-arrow-up"></i></li>
										<li><i class="fa fa-arrows-alt" data-bs-toggle="tooltip"
												title="fa fa-arrows-alt"></i></li>
										<li><i class="fa fa-assistive-listening-systems" data-bs-toggle="tooltip"
												title="fa fa-assistive-listening-systems"></i></li>
										<li><i class="fa fa-asterisk" data-bs-toggle="tooltip"
												title="fa fa-asterisk"></i></li>
										<li><i class="fa fa-at" data-bs-toggle="tooltip" title="fa fa-at"></i></li>
										<li><i class="fa fa-audio-description" data-bs-toggle="tooltip"
												title="fa fa-audio-description"></i></li>
										<li><i class="fa fa-backward" data-bs-toggle="tooltip"
												title="fa fa-backward"></i></li>
										<li><i class="fa fa-balance-scale" data-bs-toggle="tooltip"
												title="fa fa-balance-scale"></i></li>
										<li><i class="fa fa-ban" data-bs-toggle="tooltip" title="fa fa-ban"></i></li>
										<li><i class="fa fa-barcode" data-bs-toggle="tooltip" title="fa fa-barcode"></i>
										</li>
										<li><i class="fa fa-bars" data-bs-toggle="tooltip" title="fa fa-bars"></i></li>
										<li><i class="fa fa-bath" data-bs-toggle="tooltip" title="fa fa-bath"></i></li>
										<li><i class="fa fa-battery-empty" data-bs-toggle="tooltip"
												title="fa fa-battery-empty"></i></li>
										<li><i class="fa fa-battery-full" data-bs-toggle="tooltip"
												title="fa fa-battery-full"></i></li>
										<li><i class="fa fa-battery-half" data-bs-toggle="tooltip"
												title="fa fa-battery-half"></i></li>
										<li><i class="fa fa-battery-quarter" data-bs-toggle="tooltip"
												title="fa fa-battery-quarter"></i></li>
										<li><i class="fa fa-battery-three-quarters" data-bs-toggle="tooltip"
												title="fa fa-battery-three-quarters"></i></li>
										<li><i class="fa fa-bed" data-bs-toggle="tooltip" title="fa fa-bed"></i></li>
										<li><i class="fa fa-beer" data-bs-toggle="tooltip" title="fa fa-beer"></i></li>
										<li><i class="fa fa-bell" data-bs-toggle="tooltip" title="fa fa-bell"></i></li>
										<li><i class="fa fa-bell-slash" data-bs-toggle="tooltip"
												title="fa fa-bell-slash"></i></li>
										<li><i class="fa fa-bicycle" data-bs-toggle="tooltip" title="fa fa-bicycle"></i>
										</li>
										<li><i class="fa fa-binoculars" data-bs-toggle="tooltip"
												title="fa fa-binoculars"></i></li>
										<li><i class="fa fa-birthday-cake" data-bs-toggle="tooltip"
												title="fa fa-birthday-cake"></i></li>
										<li><i class="fa fa-blind" data-bs-toggle="tooltip" title="fa fa-blind"></i>
										</li>
										<li><i class="fa fa-bold" data-bs-toggle="tooltip" title="fa fa-bold"></i></li>
										<li><i class="fa fa-bolt" data-bs-toggle="tooltip" title="fa fa-bolt"></i></li>
										<li><i class="fa fa-bomb" data-bs-toggle="tooltip" title="fa fa-bomb"></i></li>
										<li><i class="fa fa-book" data-bs-toggle="tooltip" title="fa fa-book"></i></li>
										<li><i class="fa fa-bookmark" data-bs-toggle="tooltip"
												title="fa fa-bookmark"></i></li>
										<li><i class="fa fa-braille" data-bs-toggle="tooltip" title="fa fa-braille"></i>
										</li>
										<li><i class="fa fa-briefcase" data-bs-toggle="tooltip"
												title="fa fa-briefcase"></i></li>
										<li><i class="fa fa-bug" data-bs-toggle="tooltip" title="fa fa-bug"></i></li>
										<li><i class="fa fa-building" data-bs-toggle="tooltip"
												title="fa fa-building"></i></li>
										<li><i class="fa fa-bullhorn" data-bs-toggle="tooltip"
												title="fa fa-bullhorn"></i></li>
										<li><i class="fa fa-bullseye" data-bs-toggle="tooltip"
												title="fa fa-bullseye"></i></li>
										<li><i class="fa fa-bus" data-bs-toggle="tooltip" title="fa fa-bus"></i></li>
										<li><i class="fa fa-calculator" data-bs-toggle="tooltip"
												title="fa fa-calculator"></i></li>
										<li><i class="fa fa-calendar" data-bs-toggle="tooltip"
												title="fa fa-calendar"></i></li>
										<li><i class="fa fa-camera" data-bs-toggle="tooltip" title="fa fa-camera"></i>
										</li>
										<li><i class="fa fa-camera-retro" data-bs-toggle="tooltip"
												title="fa fa-camera-retro"></i></li>
										<li><i class="fa fa-car" data-bs-toggle="tooltip" title="fa fa-car"></i></li>
										<li><i class="fa fa-caret-down" data-bs-toggle="tooltip"
												title="fa fa-caret-down"></i></li>
										<li><i class="fa fa-caret-left" data-bs-toggle="tooltip"
												title="fa fa-caret-left"></i></li>
										<li><i class="fa fa-caret-right" data-bs-toggle="tooltip"
												title="fa fa-caret-right"></i></li>
										<li><i class="fa fa-cart-arrow-down" data-bs-toggle="tooltip"
												title="fa fa-cart-arrow-down"></i></li>
										<li><i class="fa fa-cart-plus" data-bs-toggle="tooltip"
												title="fa fa-cart-plus"></i></li>
										<li><i class="fa fa-certificate" data-bs-toggle="tooltip"
												title="fa fa-certificate"></i></li>
										<li><i class="fa fa-check" data-bs-toggle="tooltip" title="fa fa-check"></i>
										</li>
										<li><i class="fa fa-check-circle" data-bs-toggle="tooltip"
												title="fa fa-check-circle"></i></li>
										<li><i class="fa fa-chevron-circle-left" data-bs-toggle="tooltip"
												title="fa fa-chevron-circle-left"></i></li>
										<li><i class="fa fa-chevron-circle-right" data-bs-toggle="tooltip"
												title="fa fa-chevron-circle-right"></i></li>
										<li><i class="fa fa-chevron-circle-up" data-bs-toggle="tooltip"
												title="fa fa-chevron-circle-up"></i></li>
										<li><i class="fa fa-chevron-down" data-bs-toggle="tooltip"
												title="fa fa-chevron-down"></i></li>
										<li><i class="fa fa-chevron-left" data-bs-toggle="tooltip"
												title="fa fa-chevron-left"></i></li>
										<li><i class="fa fa-chevron-right" data-bs-toggle="tooltip"
												title="fa fa-chevron-right"></i></li>
										<li><i class="fa fa-chevron-up" data-bs-toggle="tooltip"
												title="fa fa-chevron-up"></i></li>
										<li><i class="fa fa-child" data-bs-toggle="tooltip" title="fa fa-child"></i>
										</li>
										<li><i class="fa fa-circle" data-bs-toggle="tooltip" title="fa fa-circle"></i>
										</li>
										<li><i class="fa fa-clipboard" data-bs-toggle="tooltip"
												title="fa fa-clipboard"></i></li>
										<li><i class="fa fa-clone" data-bs-toggle="tooltip" title="fa fa-clone"></i>
										</li>
										<li><i class="fa fa-cloud" data-bs-toggle="tooltip" title="fa fa-cloud"></i>
										</li>
										<li><i class="fa fa-code" data-bs-toggle="tooltip" title="fa fa-code"></i></li>
										<li><i class="fa fa-coffee" data-bs-toggle="tooltip" title="fa fa-coffee"></i>
										</li>
										<li><i class="fa fa-cog" data-bs-toggle="tooltip" title="fa fa-cog"></i></li>
										<li><i class="fa fa-cogs" data-bs-toggle="tooltip" title="fa fa-cogs"></i></li>
										<li><i class="fa fa-columns" data-bs-toggle="tooltip" title="fa fa-columns"></i>
										</li>
										<li><i class="fa fa-comment" data-bs-toggle="tooltip" title="fa fa-comment"></i>
										</li>
										<li><i class="fa fa-compress" data-bs-toggle="tooltip"
												title="fa fa-compress"></i></li>
										<li><i class="fa fa-copyright" data-bs-toggle="tooltip"
												title="fa fa-copyright"></i></li>
										<li><i class="fa fa-credit-card" data-bs-toggle="tooltip"
												title="fa fa-credit-card"></i></li>
										<li><i class="fa fa-desktop" data-bs-toggle="tooltip" title="fa fa-desktop"></i>
										</li>
										<li><i class="fa fa-edit" data-bs-toggle="tooltip" title="fa fa-edit"></i></li>
										<li><i class="fa fa-eject" data-bs-toggle="tooltip" title="fa fa-eject"></i>
										</li>
										<li><i class="fa fa-ellipsis-h" data-bs-toggle="tooltip"
												title="fa fa-ellipsis-h"></i></li>
										<li><i class="fa fa-ellipsis-v" data-bs-toggle="tooltip"
												title="fa fa-ellipsis-v"></i>
										<li><i class="fa fa-envelope" data-bs-toggle="tooltip"
												title="fa fa-envelope"></i></li>
										<li><i class="fa fa-envelope-open" data-bs-toggle="tooltip"
												title="fa fa-envelope-open"></i></li>
										<li><i class="fa fa-envelope-square" data-bs-toggle="tooltip"
												title="fa fa-envelope-square"></i></li>
										<li><i class="fa fa-eraser" data-bs-toggle="tooltip" title="fa fa-eraser"></i>
										</li>
										<li><i class="fa fa-exclamation" data-bs-toggle="tooltip"
												title="fa fa-exclamation"></i></li>
										<li><i class="fa fa-exclamation-circle" data-bs-toggle="tooltip"
												title="fa fa-exclamation-circle"></i></li>
										<li><i class="fa fa-exclamation-triangle" data-bs-toggle="tooltip"
												title="fa fa-exclamation-triangle"></i></li>
										<li><i class="fa fa-expand" data-bs-toggle="tooltip" title="fa fa-expand"></i>
										</li>
										<li><i class="fa fa-eye" data-bs-toggle="tooltip" title="fa fa-eye"></i></li>
										<li><i class="fa fa-eye-slash" data-bs-toggle="tooltip"
												title="fa fa-eye-slash"></i></li>
										<li><i class="fa fa-fast-backward" data-bs-toggle="tooltip"
												title="fa fa-fast-backward"></i></li>
										<li><i class="fa fa-fast-forward" data-bs-toggle="tooltip"
												title="fa fa-fast-forward"></i></li>
										<li><i class="fa fa-fax" data-bs-toggle="tooltip" title="fa fa-fax"></i></li>
										<li><i class="fa fa-female" data-bs-toggle="tooltip" title="fa fa-female"></i>
										</li>
										<li><i class="fa fa-fighter-jet" data-bs-toggle="tooltip"
												title="fa fa-fighter-jet"></i></li>
										<li><i class="fa fa-file" data-bs-toggle="tooltip" title="fa fa-file"></i></li>
										<li><i class="fa fa-fire" data-bs-toggle="tooltip" title="fa fa-fire"></i></li>
										<li><i class="fa fa-fire-extinguisher" data-bs-toggle="tooltip"
												title="fa fa-fire-extinguisher"></i></li>
										<li><i class="fa fa-flag" data-bs-toggle="tooltip" title="fa fa-flag"></i></li>
										<li><i class="fa fa-flag-checkered" data-bs-toggle="tooltip"
												title="fa fa-flag-checkered"></i></li>
										<li><i class="fa fa-road" data-bs-toggle="tooltip" title="fa fa-road"></i></li>
										<li><i class="fa fa-rocket" data-bs-toggle="tooltip" title="fa fa-rocket"></i>
										</li>
										<li><i class="fa fa-save" data-bs-toggle="tooltip" title="fa fa-save"></i></li>
										<li><i class="fa fa-search" data-bs-toggle="tooltip" title="fa fa-search"></i>
										</li>
										<li><i class="fa fa-search-minus" data-bs-toggle="tooltip"
												title="fa fa-search-minus"></i></li>
										<li><i class="fa fa-search-plus" data-bs-toggle="tooltip"
												title="fa fa-search-plus"></i></li>
										<li><i class="fa fa-server" data-bs-toggle="tooltip" title="fa fa-server"></i>
										</li>
										<li><i class="fa fa-share" data-bs-toggle="tooltip" title="fa fa-share"></i>
										</li>
										<li><i class="fa fa-share-alt" data-bs-toggle="tooltip"
												title="fa fa-share-alt"></i></li>
										<li><i class="fa fa-share-alt-square" data-bs-toggle="tooltip"
												title="fa fa-share-alt-square"></i></li>
										<li><i class="fa fa-share-square" data-bs-toggle="tooltip"
												title="fa fa-share-square"></i></li>
										<li><i class="fa fa-ship" data-bs-toggle="tooltip" title="fa fa-ship"></i></li>
										<li><i class="fa fa-shopping-bag" data-bs-toggle="tooltip"
												title="fa fa-shopping-bag"></i></li>
										<li><i class="fa fa-shopping-basket" data-bs-toggle="tooltip"
												title="fa fa-shopping-basket"></i></li>
										<li><i class="fa fa-shopping-cart" data-bs-toggle="tooltip"
												title="fa fa-shopping-cart"></i></li>
										<li><i class="fa fa-shower" data-bs-toggle="tooltip" title="fa fa-shower"></i>
										</li>
										<li><i class="fa fa-sign-language" data-bs-toggle="tooltip"
												title="fa fa-sign-language"></i></li>
										<li><i class="fa fa-signal" data-bs-toggle="tooltip" title="fa fa-signal"></i>
										</li>
										<li><i class="fa fa-sitemap" data-bs-toggle="tooltip" title="fa fa-sitemap"></i>
										</li>
										<li><i class="fa fa-sort" data-bs-toggle="tooltip" title="fa fa-sort"></i></li>
										<li><i class="fa fa-sort-down" data-bs-toggle="tooltip"
												title="fa fa-sort-down"></i></li>
										<li><i class="fa fa-square" data-bs-toggle="tooltip" title="fa fa-square"></i>
										</li>
										<li><i class="fa fa-star" data-bs-toggle="tooltip" title="fa fa-star"></i></li>
										<li><i class="fa fa-star-half" data-bs-toggle="tooltip"
												title="fa fa-star-half"></i></li>
										<li><i class="fa fa-step-backward" data-bs-toggle="tooltip"
												title="fa fa-step-backward"></i></li>
										<li><i class="fa fa-step-forward" data-bs-toggle="tooltip"
												title="fa fa-step-forward"></i></li>
										<li><i class="fa fa-stethoscope" data-bs-toggle="tooltip"
												title="fa fa-stethoscope"></i></li>
										<li><i class="fa fa-sticky-note" data-bs-toggle="tooltip"
												title="fa fa-sticky-note"></i></li>
										<li><i class="fa fa-stop" data-bs-toggle="tooltip" title="fa fa-stop"></i></li>
										<li><i class="fa fa-stop-circle" data-bs-toggle="tooltip"
												title="fa fa-stop-circle"></i></li>
										<li><i class="fa fa-street-view" data-bs-toggle="tooltip"
												title="fa fa-street-view"></i></li>
										<li><i class="fa fa-subscript" data-bs-toggle="tooltip"
												title="fa fa-subscript"></i></li>
										<li><i class="fa fa-suitcase" data-bs-toggle="tooltip"
												title="fa fa-suitcase"></i></li>
										<li><i class="fa fa-superscript" data-bs-toggle="tooltip"
												title="fa fa-superscript"></i></li>
										<li><i class="fa fa-table" data-bs-toggle="tooltip" title="fa fa-table"></i>
										</li>
										<li><i class="fa fa-tag" data-bs-toggle="tooltip" title="fa fa-tag"></i></li>
										<li><i class="fa fa-tags" data-bs-toggle="tooltip" title="fa fa-tags"></i></li>
										<li><i class="fa fa-tasks" data-bs-toggle="tooltip" title="fa fa-tasks"></i>
										</li>
										<li><i class="fa fa-taxi" data-bs-toggle="tooltip" title="fa fa-taxi"></i></li>
										<li><i class="fa fa-terminal" data-bs-toggle="tooltip"
												title="fa fa-terminal"></i></li>
										<li><i class="fa fa-text-height" data-bs-toggle="tooltip"
												title="fa fa-text-height"></i></li>
										<li><i class="fa fa-text-width" data-bs-toggle="tooltip"
												title="fa fa-text-width"></i></li>
										<li><i class="fa fa-th" data-bs-toggle="tooltip" title="fa fa-th"></i></li>
										<li><i class="fa fa-th-large" data-bs-toggle="tooltip"
												title="fa fa-th-large"></i></li>
										<li><i class="fa fa-th-list" data-bs-toggle="tooltip" title="fa fa-th-list"></i>
										</li>
										<li><i class="fa fa-thermometer" data-bs-toggle="tooltip"
												title="fa fa-thermometer"></i></li>
										<li><i class="fa fa-thermometer-empty" data-bs-toggle="tooltip"
												title="fa fa-thermometer-empty"></i></li>
										<li><i class="fa fa-thermometer-full" data-bs-toggle="tooltip"
												title="fa fa-thermometer-full"></i></li>
										<li><i class="fa fa-thermometer-half" data-bs-toggle="tooltip"
												title="fa fa-thermometer-half"></i></li>
										<li><i class="fa fa-thermometer-quarter" data-bs-toggle="tooltip"
												title="fa fa-thermometer-quarter"></i></li>
										<li><i class="fa fa-thermometer-three-quarters" data-bs-toggle="tooltip"
												title="fa fa-thermometer-three-quarters"></i></li>
										<li><i class="fa fa-thumbs-down" data-bs-toggle="tooltip"
												title="fa fa-thumbs-down"></i></li>
										<li><i class="fa fa-thumbs-up" data-bs-toggle="tooltip"
												title="fa fa-thumbs-up"></i></li>
										<li><i class="fa fa-times" data-bs-toggle="tooltip" title="fa fa-times"></i>
										</li>
										<li><i class="fa fa-times-circle" data-bs-toggle="tooltip"
												title="fa fa-times-circle"></i></li>
										<li><i class="fa fa-tint" data-bs-toggle="tooltip" title="fa fa-tint"></i></li>
										<li><i class="fa fa-toggle-off" data-bs-toggle="tooltip"
												title="fa fa-toggle-off"></i></li>
										<li><i class="fa fa-toggle-on" data-bs-toggle="tooltip"
												title="fa fa-toggle-on"></i></li>
										<li><i class="fa fa-trademark" data-bs-toggle="tooltip"
												title="fa fa-trademark"></i></li>
										<li><i class="fa fa-train" data-bs-toggle="tooltip" title="fa fa-train"></i>
										</li>
										<li><i class="fa fa-transgender" data-bs-toggle="tooltip"
												title="fa fa-transgender"></i></li>
										<li><i class="fa fa-transgender-alt" data-bs-toggle="tooltip"
												title="fa fa-transgender-alt"></i></li>
										<li><i class="fa fa-trash" data-bs-toggle="tooltip" title="fa fa-trash"></i>
										</li>
										<li><i class="fa fa-tree" data-bs-toggle="tooltip" title="fa fa-tree"></i></li>
										<li><i class="fa fa-trophy" data-bs-toggle="tooltip" title="fa fa-trophy"></i>
										</li>
										<li><i class="fa fa-tty" data-bs-toggle="tooltip" title="fa fa-tty"></i></li>
										<li><i class="fa fa-tv" data-bs-toggle="tooltip" title="fa fa-tv"></i></li>
										<li><i class="fa fa-umbrella" data-bs-toggle="tooltip"
												title="fa fa-umbrella"></i></li>
										<li><i class="fa fa-underline" data-bs-toggle="tooltip"
												title="fa fa-underline"></i></li>
										<li><i class="fa fa-undo" data-bs-toggle="tooltip" title="fa fa-undo"></i></li>
										<li><i class="fa fa-universal-access" data-bs-toggle="tooltip"
												title="fa fa-universal-access"></i></li>
										<li><i class="fa fa-university" data-bs-toggle="tooltip"
												title="fa fa-university"></i></li>
										<li><i class="fa fa-unlink" data-bs-toggle="tooltip" title="fa fa-unlink"></i>
										</li>
										<li><i class="fa fa-unlock" data-bs-toggle="tooltip" title="fa fa-unlock"></i>
										</li>
										<li><i class="fa fa-unlock-alt" data-bs-toggle="tooltip"
												title="fa fa-unlock-alt"></i></li>
										<li><i class="fa fa-upload" data-bs-toggle="tooltip" title="fa fa-upload"></i>
										</li>
										<li><i class="fa fa-user-circle" data-bs-toggle="tooltip"
												title="fa fa-user-circle"></i></li>
										<li><i class="fa fa-user-md" data-bs-toggle="tooltip" title="fa fa-user-md"></i>
										</li>
										<li><i class="fa fa-user-plus" data-bs-toggle="tooltip"
												title="fa fa-user-plus"></i></li>
										<li><i class="fa fa-user-secret" data-bs-toggle="tooltip"
												title="fa fa-user-secret"></i></li>
										<li><i class="fa fa-user-times" data-bs-toggle="tooltip"
												title="fa fa-user-times"></i></li>
										<li><i class="fa fa-users" data-bs-toggle="tooltip" title="fa fa-users"></i>
										</li>
										<li><i class="fa fa-venus" data-bs-toggle="tooltip" title="fa fa-venus"></i>
										</li>
										<li><i class="fa fa-venus-double" data-bs-toggle="tooltip"
												title="fa fa-venus-double"></i></li>
										<li><i class="fa fa-venus-mars" data-bs-toggle="tooltip"
												title="fa fa-venus-mars"></i></li>
										<li><i class="fa fa-volume-down" data-bs-toggle="tooltip"
												title="fa fa-volume-down"></i></li>
										<li><i class="fa fa-volume-off" data-bs-toggle="tooltip"
												title="fa fa-volume-off"></i></li>
										<li><i class="fa fa-volume-up" data-bs-toggle="tooltip"
												title="fa fa-volume-up"></i></li>
										<li><i class="fa fa-wheelchair" data-bs-toggle="tooltip"
												title="fa fa-wheelchair"></i></li>
										<li><i class="fa fa-wifi" data-bs-toggle="tooltip" title="fa fa-wifi"></i></li>
										<li><i class="fa fa-window-close" data-bs-toggle="tooltip"
												title="fa fa-window-close"></i></li>
										<li><i class="fa fa-window-maximize" data-bs-toggle="tooltip"
												title="fa fa-window-maximize"></i></li>
										<li><i class="fa fa-window-minimize" data-bs-toggle="tooltip"
												title="fa fa-window-minimize"></i></li>
										<li><i class="fa fa-window-restore" data-bs-toggle="tooltip"
												title="fa fa-window-restore"></i></li>
										<li><i class="fa fa-wrench" data-bs-toggle="tooltip" title="fa fa-wrench"></i>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

				</div>

			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->
	<div class="searchpart">
		<div class="searchcontent">
			<div class="searchhead">
				<h3>Search </h3>
				<a id="closesearch"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
			</div>
			<div class="searchcontents">
				<div class="searchparts">
					<input type="text" placeholder="search here">
					<a class="btn btn-searchs">Search</a>
				</div>
				<div class="recentsearch">
					<h2>Recent Search</h2>
					<ul>
						<li>
							<h6><i class="fa fa-search me-2"></i> Settings</h6>
						</li>
						<li>
							<h6><i class="fa fa-search me-2"></i> Report</h6>
						</li>
						<li>
							<h6><i class="fa fa-search me-2"></i> Invoice</h6>
						</li>
						<li>
							<h6><i class="fa fa-search me-2"></i> Sales</h6>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
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