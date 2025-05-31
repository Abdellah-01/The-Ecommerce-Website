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
									<a href="javascript:void(0);" class="subdrop active">
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
										<li><a href="ui-typography.php" class="active">Typography</a></li>
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
									<li><a href="ui-typography.php" class="active">Typography</a></li>
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
								<a href="javascript:void(0);">
									<span>Charts</span><span class="menu-arrow"></span>
								</a>
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
								<a href="javascript:void(0);">
									<span>Tables</span><span class="menu-arrow"></span>
								</a>
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
						<a href="javascript:void(0);" class="active subdrop">
							<img src="assets/img/icons/users1.svg" alt="img">
							<span>User Management</span> <span class="menu-arrow"></span>
						</a>
						<ul>
							<li class="submenu">
								<a href="javascript:void(0);">
									<span>People</span><span class="menu-arrow"></span>
								</a>
								<ul>
									<li><a href="customers.php"><span>Customers</span></a></li>
									<li><a href="suppliers.php"><span>Suppliers</span></a></li>
									<li><a href="store-list.php"><span>Stores</span></a></li>
									<li><a href="warehouse.php"><span>Warehouses</span></a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);">
									<span>Roles &amp; Permissions</span><span class="menu-arrow"></span>
								</a>
								<ul>
									<li><a href="roles-permissions.php"><span>Roles & Permissions</span></a></li>
									<li><a href="delete-account.php"><span>Delete Account Request</span></a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);" class="active">
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
									<li><a href="ui-typography.php" class="active">Typography</a></li>
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
								<a href="javascript:void(0);">
									<span>Charts</span><span class="menu-arrow"></span>
								</a>
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
								<a href="javascript:void(0);">
									<span>Icons</span><span class="menu-arrow"></span>
								</a>
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
								<a href="javascript:void(0);">
									<span>Tables</span><span class="menu-arrow"></span>
								</a>
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
							<li class="submenu"><a href="javascript:void(0);"><span>Pages</span><span
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

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">
				<div class="page-header">
					<div class="page-title">
						<h4>Typography</h4>
					</div>
				</div>
				<div class="row">

					<!-- Headings Tags -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Headings Tags</h5>
							</div>
							<div class="card-body">
								<h1 class="mb-3">h1. Bootstrap heading</h1>
								<h2 class="mb-3">h2. Bootstrap heading</h2>
								<h3 class="mb-3">h3. Bootstrap heading</h3>
								<h4 class="mb-3">h4. Bootstrap heading</h4>
								<h5 class="mb-3">h5. Bootstrap heading</h5>
								<h6 class="mb-0">h6. Bootstrap heading</h6>
							</div>
						</div>
					</div>
					<!-- /Headings Tags -->

					<!-- Headings Class Names -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Heading Class Names</h5>
							</div>
							<div class="card-body">
								<p class="h1 mb-3">h1. Bootstrap heading</p>
								<p class="h2 mb-3">h2. Bootstrap heading</p>
								<p class="h3 mb-3">h3. Bootstrap heading</p>
								<p class="h4 mb-3">h4. Bootstrap heading</p>
								<p class="h5 mb-3">h5. Bootstrap heading</p>
								<p class="h6 mb-0">h6. Bootstrap heading</p>
							</div>
						</div>
					</div>
					<!-- /Headings Class Names -->

					<!-- Display Headings -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Display Headings</h5>
							</div>
							<div class="card-body">
								<h1 class="mb-0 display-1">Display 1</h1>
								<h1 class="mb-0 display-2">Display 2</h1>
								<h1 class="mb-0 display-3">Display 3</h1>
								<h1 class="mb-0 display-4">Display 4</h1>
								<h1 class="mb-0 display-5">Display 5</h1>
								<h1 class="mb-0 display-6">Display 6</h1>
							</div>
						</div>
					</div>
					<!-- /Display Headings -->

					<!-- Text Element -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Text Element</h5>
							</div>
							<div class="card-body">
								<p>You can use the mark tag to <mark>highlight</mark> text.</p>
								<p><del>This line of text is meant to be treated as deleted text.</del></p>
								<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
								<p><ins>This line of text is meant to be treated as an addition to the document.</ins>
								</p>
								<p><u>This line of text will render as underlined</u></p>
								<p><small>This line of text is meant to be treated as fine print.</small></p>
								<p><strong>This line rendered as bold text.</strong></p>
								<p><em>This line rendered as italicized text.</em></p>
								<p class="font-monospace mb-0">This is in monospace</p>
							</div>
						</div>
					</div>
					<!-- /Text Element -->

					<!-- Coloured Link -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Coloured Link</h5>
							</div>
							<div class="card-body">
								<p><a href="#" class="text-primary">Primary link</a></p>
								<p><a href="#" class="text-secondary">Secondary link</a></p>
								<p><a href="#" class="text-success">Success link</a></p>
								<p><a href="#" class="text-danger">Danger link</a></p>
								<p><a href="#" class="text-warning">Warning link</a></p>
								<p><a href="#" class="text-info">Info link</a></p>
								<p><a href="#" class="text-light bg-dark">Light link</a></p>
								<p><a href="#" class="text-dark">Dark link</a></p>
								<p><a href="#" class="text-muted">Muted link</a></p>
								<p><a href="#" class="text-white bg-dark mb-0">White link</a></p>
							</div>
						</div>
					</div>
					<!-- /Coloured Link -->

					<!-- Coloured Text -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Coloured Text</h5>
							</div>
							<div class="card-body">
								<p class="text-primary">.text-primary</p>
								<p class="text-secondary">.text-secondary</p>
								<p class="text-success">.text-success</p>
								<p class="text-danger">.text-danger</p>
								<p class="text-warning">.text-warning</p>
								<p class="text-info">.text-info</p>
								<p class="text-light bg-dark">.text-light</p>
								<p class="text-dark">.text-dark</p>
								<p class="text-muted">.text-muted</p>
								<p class="text-white bg-dark mb-0">.text-white</p>
							</div>
						</div>
					</div>
					<!-- /Coloured Text -->

					<!-- Bullet Lists -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Bullet Lists</h5>
							</div>
							<div class="card-body">
								<ul class="list-disc">
									<li>Consectetur adipiscing elit</li>
									<li>Integer molestie lorem at massa</li>
									<li>Facilisis in pretium nisl aliquet</li>
									<li class="mb-2">
										<ul>
											<li>Phasellus iaculis neque</li>
											<li>Purus sodales ultricies</li>
											<li>Ac tristique libero volutpat at</li>
										</ul>
									</li>
									<li>Faucibus porta lacus fringilla vel</li>
									<li>Aenean sit amet erat nunc</li>
									<li>Eget porttitor lorem</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Bullet Lists -->

					<!-- Number Lists -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Number Lists</h5>
							</div>
							<div class="card-body">
								<ul class="list-decimal">
									<li>Consectetur adipiscing elit</li>
									<li>Integer molestie lorem at massa</li>
									<li>Facilisis in pretium nisl aliquet</li>
									<li class="mb-2">
										Facilisis in pretium nisl aliquet
										<ol>
											<li>Phasellus iaculis neque</li>
											<li>Purus sodales ultricies</li>
											<li>Ac tristique libero volutpat at</li>
										</ol>
									</li>
									<li>Faucibus porta lacus fringilla vel</li>
									<li>Aenean sit amet erat nunc</li>
									<li>Eget porttitor lorem</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Number Lists -->

					<!-- Lead Paragraph -->
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Lead Paragraph</h5>
							</div>
							<div class="card-body">
								<p class="lead mb-0">
									<b>This is a lead paragraph. It stands out from regular paragraphs</b>.There are
									many variations of passages of Lorem Ipsum available, but the majority have suffered
									alteration in some form, by injected humour, or randomised words which don't look
									even slightly believable. If you are going to use a passage of Lorem Ipsum, you need
									to be sure there isn't anything embarrassing hidden in the middle of text.
								</p>
							</div>
						</div>
					</div>
					<!-- /Lead Paragraph -->

					<!-- Blockquote Left Aligned -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Blockquote Left Aligned</h5>
							</div>
							<div class="card-body">
								<figure class="blockquote-container">
									<blockquote class="blockquote mb-2">
										<h6>The greatest glory in living lies not in never falling, but in rising every
											time we fall.</h6>
									</blockquote>
									<figcaption class="blockquote-footer mt-0 mb-0 text-muted op-7"><cite
											title="Source Title">Nelson Mandela</cite>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
					<!-- /Blockquote Left Aligned -->

					<!-- Blockquote Right Aligned -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Blockquote Right Aligned</h5>
							</div>
							<div class="card-body">
								<figure class="blockquote-container text-end">
									<blockquote class="blockquote mb-2">
										<h6>The greatest glory in living lies not in never falling, but in rising every
											time we fall.</h6>
									</blockquote>
									<figcaption class="blockquote-footer mt-0 mb-0 text-muted op-7"><cite
											title="Source Title">Nelson Mandela</cite>
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
					<!-- /Blockquote Right Aligned -->

					<!-- Custom Color Blockquote -->
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Custom Color Blockquote</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-xl-4">
										<blockquote class="blockquote custom-blockquote primary mb-3 text-center">
											<h6>The future belongs to those who believe in the beauty of their dreams..
											</h6>
											<footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0">Someone
												famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
										</blockquote>
									</div>
									<div class="col-xl-4">
										<blockquote class="blockquote custom-blockquote secondary mb-3 text-center">
											<h6>The future belongs to those who believe in the beauty of their dreams..
											</h6>
											<footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0">Someone
												famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
										</blockquote>
									</div>
									<div class="col-xl-4">
										<blockquote class="blockquote custom-blockquote info mb-3 text-center">
											<h6>The future belongs to those who believe in the beauty of their dreams..
											</h6>
											<footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0">Someone
												famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
										</blockquote>
									</div>
									<div class="col-xl-4">
										<blockquote class="blockquote custom-blockquote warning mb-3 text-center">
											<h6>The future belongs to those who believe in the beauty of their dreams..
											</h6>
											<footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0">Someone
												famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
										</blockquote>
									</div>
									<div class="col-xl-4">
										<blockquote class="blockquote custom-blockquote success mb-3 text-center">
											<h6>The future belongs to those who believe in the beauty of their dreams..
											</h6>
											<footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0">Someone
												famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
										</blockquote>
									</div>
									<div class="col-xl-4">
										<blockquote class="blockquote custom-blockquote danger mb-3 text-center">
											<h6>The future belongs to those who believe in the beauty of their dreams..
											</h6>
											<footer class="blockquote-footer mt-3 fs-14 text-muted op-7 mb-0">Someone
												famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Custom Color Blockquote -->

					<!-- Description List Alignment -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Description List Alignment
								</div>
							</div>
							<div class="card-body">
								<dl class="row mb-0">
									<dt class="col-sm-3">Description lists</dt>
									<dd class="col-sm-9">A description list is perfect for defining terms.</dd>

									<dt class="col-sm-3">Term</dt>
									<dd class="col-sm-9">
										<p>Definition for the term.</p>
										<p>And some more placeholder definition text.</p>
									</dd>

									<dt class="col-sm-3">Another term</dt>
									<dd class="col-sm-9">This definition is short, so no extra paragraphs or
										anything.</dd>

									<dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
									<dd class="col-sm-9">This can be useful when space is tight. Adds an
										ellipsis at
										the end.</dd>

									<dt class="col-sm-3">Nesting</dt>
									<dd class="col-sm-9 mb-0">
										<dl class="row mb-0">
											<dt class="col-sm-4">Nested definition list</dt>
											<dd class="col-sm-8 mb-0">I heard you like definition lists. Let me put a
												definition list inside your definition list.</dd>
										</dl>
									</dd>
								</dl>
							</div>
						</div>
					</div>
					<!-- /Description List Alignment -->

					<!-- List Unstyled -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									List Unstyled
								</div>
							</div>
							<div class="card-body">
								<ul class="list-unstyled">
									<li>This is a list.</li>
									<li>It appears completely unstyled.</li>
									<li>Structurally, it's still a list.</li>
									<li>However, this style only applies to immediate child elements.</li>
									<li class="mb-2">Nested lists:
										<ul class="list-circle">
											<li>are unaffected by this style</li>
											<li>will still show a bullet</li>
											<li>and have appropriate left margin</li>
										</ul>
									</li>
									<li>This may still come in handy in some situations.</li>
								</ul>
							</div>
						</div>
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									List Inline
								</div>
							</div>
							<div class="card-body">
								<ul class="list-inline mb-0">
									<li class="list-inline-item">This is a list item.</li>
									<li class="list-inline-item">And another one.</li>
									<li class="list-inline-item">But they're displayed inline.</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /List Unstyled -->

					<!-- Abbreviations -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Abbreviations
								</div>
							</div>
							<div class="card-body">
								<p><abbr title="attribute">attr</abbr></p>
								<p class="mb-0"><abbr title="HyperText Markup Language" class="initialism">HTML</abbr>
								</p>
							</div>
						</div>
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Customizing headings
								</div>
							</div>
							<div class="card-body">
								<h3>
									Fancy display heading
									<small class="text-muted">With faded secondary text</small>
								</h3>
							</div>
						</div>
					</div>
					<!-- /Abbreviations -->

					<!-- Horizontal Rules -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Horizontal Rules
								</div>
							</div>
							<div class="card-body">
								<p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum dolorem
									fuga iste obcaecati natus eos officiis adipisci voluptatibus ipsum, architecto
									veniam delectus vel dolor magni a vero sunt ut harum.</p>
								<div class="text-success">
									<hr>
								</div>
								<p class=" mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto
									perspiciatis, magni numquam quos perferendis nulla magnam odit amet excepturi
									quisquam provident.</p>

								<hr class="border-danger border-2 opacity-50">
								<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus
									aliquid consequatur aut doloremque assumenda voluptatem, id qui vero adipisci!
									Nostrum ipsam praesentium!</p>
								<hr class="border-primary border-3 opacity-75">
							</div>
						</div>
					</div>
					<!-- /Horizontal Rules -->

					<!-- Text Transform -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Text Transform
								</div>
							</div>
							<div class="card-body">
								<p class="text-lowercase">Lowercased text.</p>
								<p class="text-uppercase">Uppercased text.</p>
								<p class="text-capitalize mb-0">CapiTaliZed text.</p>
							</div>
						</div>
					</div>
					<!-- /Text Transform -->

					<!-- Text Decoration -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Text Decoration
								</div>
							</div>
							<div class="card-body">
								<p class="text-decoration-underline">This text has a line underneath it.
								</p>
								<p class="text-decoration-line-through">This text has a line going
									through
									it.
								</p>
								<a href="#" class="text-decoration-none">This link has its text
									decoration
									removed
								</a>
							</div>
						</div>
					</div>
					<!-- /Text Decoration -->

					<!-- Font Weight and Italics -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Font Weight and Italics
								</div>
							</div>
							<div class="card-body">
								<p class="fw-bold">Bold text.</p>
								<p class="fw-bolder">Bolder weight text (relative to the parent element).</p>
								<p class="fw-semibold">Semibold weight text.</p>
								<p class="fw-normal">Normal weight text.</p>
								<p class="fw-light">Light weight text.</p>
								<p class="fw-lighter">Lighter weight text (relative to the parent element).</p>
								<p class="fst-italic">Italic text.</p>
								<p class="fst-normal mb-0">Text with normal font style</p>
							</div>
						</div>
					</div>
					<!-- /Font Weight and Italics -->

					<!-- Line Height -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Line Height
								</div>
							</div>
							<div class="card-body">
								<p class="lh-1">This is a long paragraph written to show how the line-height of
									an
									element is affected by our utilities. Classes are applied to the element
									itself
									or sometimes the parent element. These classes can be customized as needed
									with
									our utility API.
								</p>
								<p class="lh-sm">This is a long paragraph written to show how the line-height of
									an
									element is affected by our utilities. Classes are applied to the element
									itself
									or sometimes the parent element. These classes can be customized as needed
									with
									our utility API.
								</p>
								<p class="lh-base">This is a long paragraph written to show how the line-height
									of
									an element is affected by our utilities. Classes are applied to the element
									itself or sometimes the parent element. These classes can be customized as
									needed with our utility API.
								</p>
								<p class="lh-lg mb-0">This is a long paragraph written to show how the
									line-height
									of an
									element is affected by our utilities. Classes are applied to the element
									itself
									or sometimes the parent element. These classes can be customized as needed
									with
									our utility API.
								</p>
							</div>
						</div>
					</div>
					<!-- /Line Height -->

					<!-- Monospace -->
					<div class="col-xl-3">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Monospace
								</div>
							</div>
							<div class="card-body">
								<p class="font-monospace mb-0">This is in monospace</p>
							</div>
						</div>
					</div>
					<!-- /Monospace -->

					<!-- Reset Color -->
					<div class="col-xl-3">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Reset Color
								</div>
							</div>
							<div class="card-body">
								<p class="text-muted mb-0">
									Muted text with a <a href="#"
										class="text-reset text-decoration-underline text-dark">reset link</a>.
								</p>
							</div>
						</div>
					</div>
					<!-- /Reset Color -->

					<!-- Visible Text -->
					<div class="col-xl-3">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Visible Text
								</div>
							</div>
							<div class="card-body">
								<p class="visible mb-0">This is visible text</p>
							</div>
						</div>
					</div>
					<!-- /Visible Text -->

					<!-- Invisible Text -->
					<div class="col-xl-3">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Invisible Text
								</div>
							</div>
							<div class="card-body">
								<p class="invisible mb-0">This is invisible text</p>
							</div>
						</div>
					</div>
					<!-- /Invisible Text -->

					<!-- Text Alignment -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Text Alignment
								</div>
							</div>
							<div class="card-body">
								<p class="text-start">Start aligned text on all viewport sizes.</p>
								<p class="text-center">Center aligned text on all viewport sizes.</p>
								<p class="text-end">End aligned text on all viewport sizes.</p>

								<p class="text-sm-start">Start aligned text on viewports sized SM (small) or
									wider.
								</p>
								<p class="text-md-start">Start aligned text on viewports sized MD (medium) or
									wider.
								</p>
								<p class="text-lg-start">Start aligned text on viewports sized LG (large) or
									wider.
								</p>
								<p class="text-xl-start">Start aligned text on viewports sized XL (extra-large)
									or
									wider.</p>
							</div>
						</div>
					</div>
					<!-- /Text Alignment -->

					<!-- Text Wrapping and Overflow -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Text Wrapping and Overflow
								</div>
							</div>
							<div class="card-body">
								<div class="badge bg-primary text-wrap mb-3" style="width: 6rem;">
									This text should wrap.
								</div>
								<p class="text-muted mb-2"> use class <code>.text-nowrap</code> to prevent text from
									wrapping</p>
								<div class="text-nowrap bg-light border text-dark" style="width: 8rem;">
									This text should overflow the parent.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Word break
								</div>
							</div>
							<div class="card-body">
								<p class="text-break mb-0">
									mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
								</p>
							</div>
						</div>
					</div>
					<!-- /Text Wrapping and Overflow -->
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

	<!-- Customizer Links -->
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
	<!-- /Customizer Links -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.7.1.min.js"></script>

	<!-- Feather Icon JS -->
	<script src="assets/js/feather.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/js/jquery.slimscroll.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>

</body>

</html>