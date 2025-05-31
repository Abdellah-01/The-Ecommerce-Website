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
										<li><a href="ui-modals.php" class="active">Modals</a></li>
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
									<li><a href="ui-modals.php" class="active">Modals</a></li>
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
									<li><a href="ui-modals.php" class="active">Modals</a></li>
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

		<div class="page-wrapper">
			<div class="content">
				<div class="page-header">
					<div class="page-title">
						<h4>Modals</h4>
					</div>
				</div>

				<div class="row">

					<!-- Basic Modal -->
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Basic Modal</h5>
							</div>
							<div class="card-body">

								<div id="standard-modal" class="modal fade" tabindex="-1" role="dialog"
									aria-labelledby="standard-modalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="standard-modalLabel">Modal Heading</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<h6>Text in a modal</h6>
												<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
												<hr>
												<h6>Overflowing text to show scroll behavior</h6>
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
													dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
													ac consectetur ac, vestibulum at eros.</p>
												<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
													Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
													auctor.</p>
												<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
													cursus magna, vel scelerisque nisl consectetur et. Donec sed odio
													dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-cancel"
													data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save changes</button>
											</div>
										</div>
									</div>
								</div>

								<div class="button-list">
									<!-- Standard  modal -->
									<button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
										data-bs-target="#standard-modal">Launch Demo Modal</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Basic Modal -->

					<!-- Static Backdrop -->
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Static Backdrop</h5>
							</div>
							<div class="card-body card-buttons">
								<button type="button" class="btn btn-primary" data-bs-toggle="modal"
									data-bs-target="#staticBackdrop">
									Launch static backdrop modal
								</button>

								<!-- Modal -->
								<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
									data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
									aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
												terry richardson ad squid. 3 wolf moon officia aute,
												non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
												laborum eiusmod. Brunch 3 wolf moon
												tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
												assumenda shoreditch et.
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-cancel"
													data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Understood</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Static Backdrop -->

					<!-- Scrolling Long Content -->
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Scrolling Long Content</h5>
							</div>
							<div class="card-body card-buttons">
								<button type="button" class="btn btn-primary" data-bs-toggle="modal"
									data-bs-target="#scrollable-modal">
									Scrolling Long Content
								</button>

								<!-- Long Content Scroll Modal -->
								<div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog"
									aria-labelledby="scrollableModalTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-scrollable" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
													dapibus ac facilisis in, egestas
													eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
													eros.</p>
												<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
													Vivamus sagittis lacus vel augue
													laoreet rutrum faucibus dolor auctor.</p>
												<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
													cursus magna, vel scelerisque nisl
													consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
													metus auctor fringilla.</p>
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
													dapibus ac facilisis in, egestas
													eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
													eros.</p>
												<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
													Vivamus sagittis lacus vel augue
													laoreet rutrum faucibus dolor auctor.</p>
												<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
													cursus magna, vel scelerisque nisl
													consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
													metus auctor fringilla.</p>
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
													dapibus ac facilisis in, egestas
													eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
													eros.</p>
												<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
													Vivamus sagittis lacus vel augue
													laoreet rutrum faucibus dolor auctor.</p>
												<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
													cursus magna, vel scelerisque nisl
													consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
													metus auctor fringilla.</p>
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
													dapibus ac facilisis in, egestas
													eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
													eros.</p>
												<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
													Vivamus sagittis lacus vel augue
													laoreet rutrum faucibus dolor auctor.</p>
												<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
													cursus magna, vel scelerisque nisl
													consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
													metus auctor fringilla.</p>
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
													dapibus ac facilisis in, egestas
													eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
													eros.</p>
												<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
													Vivamus sagittis lacus vel augue
													laoreet rutrum faucibus dolor auctor.</p>
												<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
													cursus magna, vel scelerisque nisl
													consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
													metus auctor fringilla.</p>
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
													dapibus ac facilisis in, egestas
													eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at
													eros.</p>
												<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
													Vivamus sagittis lacus vel augue
													laoreet rutrum faucibus dolor auctor.</p>
												<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
													cursus magna, vel scelerisque nisl
													consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
													metus auctor fringilla.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-cancel"
													data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save changes</button>
											</div>
										</div>
									</div>
								</div>
								<!-- /Modal -->
							</div>
						</div>
					</div>
					<!-- /Scrolling Long Content -->

				</div>

				<div class="row">

					<!-- Using the Grid -->
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									<h5 class="card-title">Using the grid</h5>
								</div>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-primary" data-bs-toggle="modal"
									data-bs-target="#exampleModalScrollable5">
									Launch demo modal
								</button>
								<div class="modal fade" id="exampleModalScrollable5" tabindex="-1"
									aria-labelledby="exampleModalScrollable5" data-bs-keyboard="false"
									aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="staticBackdropLabel5">Modal title
												</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<div class="container-fluid">
													<div class="row">
														<div class="col-md-4 bg-light border">.col-md-4</div>
														<div class="col-md-4 ms-auto bg-light border">.col-md-4
															.ms-auto</div>
													</div>
													<div class="row mt-3">
														<div class="col-md-3 ms-auto bg-light border">.col-md-3
															.ms-auto</div>
														<div class="col-md-2 ms-auto bg-light border">.col-md-2
															.ms-auto</div>
													</div>
													<div class="row mt-3">
														<div class="col-md-6 ms-auto bg-light border">.col-md-6
															.ms-auto</div>
													</div>
													<div class="row mt-3">
														<div class="col-sm-9 bg-light border">
															Level 1: .col-sm-9
															<div class="row">
																<div class="col-8 col-sm-6 bg-light border">
																	Level 2: .col-8 .col-sm-6
																</div>
																<div class="col-4 col-sm-6 bg-light border">
																	Level 2: .col-4 .col-sm-6
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-cancel"
													data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save
													Changes</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Using the Grid -->

					<!-- Toggle Between Modals -->
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Toggle Between Modals</h5>
							</div>
							<div class="card-body">
								<!-- Modal -->
								<div class="modal fade" id="exampleModalToggle" aria-hidden="true"
									aria-labelledby="exampleModalToggleLabel" tabindex="-1">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="exampleModalToggleLabel">Modal 1</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												Show a second modal and hide this one with the button below.
											</div>
											<div class="modal-footer">
												<button class="btn btn-primary" data-bs-target="#exampleModalToggle2"
													data-bs-toggle="modal" data-bs-dismiss="modal">Open second
													modal</button>
											</div>
										</div>
									</div>
								</div>
								<!-- /Modal -->

								<!-- Modal -->
								<div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
									aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												Hide this modal and show the first with the button below.
											</div>
											<div class="modal-footer">
												<button class="btn btn-primary" data-bs-target="#exampleModalToggle"
													data-bs-toggle="modal" data-bs-dismiss="modal">Back to
													first</button>
											</div>
										</div>
									</div>
								</div>
								<!-- /Modal -->

								<a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle"
									role="button">Open first modal</a>

							</div>
						</div>
					</div>
					<!-- /Toggle Between Modals -->

					<!-- Optional Sizes -->
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Optional Sizes</h5>
							</div>
							<div class="card-body">

								<!--  Modal -->
								<div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog"
									aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												...
											</div>
										</div>
									</div>
								</div>
								<!-- /Modal -->

								<div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog"
									aria-labelledby="mySmallModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-sm">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												...
											</div>
										</div>
									</div>
								</div>
								<!-- /Modal -->

								<!-- Modal -->
								<div class="modal fade" id="exampleModalLg" tabindex="-1"
									aria-labelledby="exampleModalLgLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="exampleModalLgLabel">Extra Large Modal
												</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												...
											</div>
										</div>
									</div>
								</div>
								<!-- /Modal -->

								<div class="button-list">
									<button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
										data-bs-target="#exampleModalLg">Extra Large Modal</button>
									<button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
										data-bs-target="#bs-example-modal-lg">Large Modal</button>
									<button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
										data-bs-target="#bs-example-modal-sm">Small Modal</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Optional Sizes -->

				</div>

				<div class="row">

					<!-- Modal with Pages -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Modal with Pages</h5>
							</div>
							<div class="card-body card-buttons">
								<!-- Modal -->
								<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog"
									aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">

											<div class="modal-body">
												<div class="text-center mt-2 mb-4">
													<div class="auth-logo">
														<a href="index.php" class="logo logo-dark">
															<span class="logo-lg">
																<img src="assets/img/logo.png" alt="Logo" height="42">
															</span>
														</a>
													</div>
												</div>

												<form class="px-3" action="#">

													<div class="mb-3">
														<label for="username" class="form-label">Name</label>
														<input class="form-control" type="email" id="username"
															required="" placeholder="Michael Zenaty">
													</div>

													<div class="mb-3">
														<label for="emailaddress" class="form-label">Email
															address</label>
														<input class="form-control" type="email" id="emailaddress"
															required="" placeholder="john@deo.com">
													</div>

													<div class="mb-3">
														<label for="password" class="form-label">Password</label>
														<input class="form-control" type="password" required=""
															id="password" placeholder="Enter your password">
													</div>

													<div class="mb-3">
														<div class="form-check">
															<input type="checkbox" class="form-check-input"
																id="customCheck1">
															<label class="form-check-label" for="customCheck1">I accept
																<a href="#">Terms and Conditions</a></label>
														</div>
													</div>

													<div class="mb-3 text-center">
														<button class="btn btn-primary" type="submit">Sign Up
															Free</button>
													</div>

												</form>

											</div>
										</div>
									</div>
								</div>
								<!-- /Modal -->

								<!-- Modal -->
								<div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<div class="text-center mt-2 mb-4">
													<div class="auth-logo">
														<a href="index.php" class="logo logo-dark">
															<span class="logo-lg">
																<img src="assets/img/logo.png" alt="Logo" height="42">
															</span>
														</a>
													</div>
												</div>

												<form action="#" class="px-3">

													<div class="mb-3">
														<label for="emailaddress1" class="form-label">Email
															address</label>
														<input class="form-control" type="email" id="emailaddress1"
															required="" placeholder="john@deo.com">
													</div>

													<div class="mb-3">
														<label for="password1" class="form-label">Password</label>
														<input class="form-control" type="password" required=""
															id="password1" placeholder="Enter your password">
													</div>

													<div class="mb-3">
														<div class="form-check">
															<input type="checkbox" class="form-check-input"
																id="customCheck2">
															<label class="form-check-label" for="customCheck2">Remember
																me</label>
														</div>
													</div>

													<div class="mb-2 text-center">
														<button class="btn rounded-pill btn-primary" type="submit">Sign
															In</button>
													</div>

												</form>

											</div>
										</div>
									</div>
								</div>
								<!-- /Modal -->

								<div class="button-list">
									<!-- Sign Up modal -->
									<button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
										data-bs-target="#signup-modal">Sign Up Modal</button>
									<!-- Log In modal -->
									<button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
										data-bs-target="#login-modal">Log In Modal</button>
								</div>

							</div>
						</div>
					</div>
					<!-- /Modal with Pages -->

					<!-- Custom Modals -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Custom Modals</h5>
							</div>
							<div class="card-body">

								<!-- sample modal content -->
								<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog"
									aria-hidden="true" style="display: none;">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Modal Content is Responsive</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body p-4">
												<div class="row">
													<div class="col-md-6">
														<div class="mb-3">
															<label for="field-1" class="form-label">Name</label>
															<input type="text" class="form-control" id="field-1"
																placeholder="John">
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<label for="field-2" class="form-label">Surname</label>
															<input type="text" class="form-control" id="field-2"
																placeholder="Doe">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="mb-3">
															<label for="field-3" class="form-label">Address</label>
															<input type="text" class="form-control" id="field-3"
																placeholder="Address">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<label for="field-4" class="form-label">City</label>
															<input type="text" class="form-control" id="field-4"
																placeholder="Boston">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label for="field-5" class="form-label">Country</label>
															<input type="text" class="form-control" id="field-5"
																placeholder="United States">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label for="field-6" class="form-label">Zip</label>
															<input type="text" class="form-control" id="field-6"
																placeholder="123456">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="">
															<label for="field-7" class="form-label">Personal
																Info</label>
															<textarea class="form-control" id="field-7"
																placeholder="Write something about yourself"></textarea>
														</div>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-cancel waves-effect"
													data-bs-dismiss="modal">Close</button>
												<button type="button"
													class="btn btn-primary waves-effect waves-light">Save
													changes</button>
											</div>
										</div>
									</div>
								</div><!-- /Modal -->

								<div id="accordion-modal" class="modal fade" tabindex="-1" role="dialog"
									aria-hidden="true" style="display: none;">
									<div class="modal-dialog">
										<div class="modal-content p-0">
											<div id="accordion">
												<div class="card mb-0">
													<div class="card-header" id="headingOne">
														<h5 class="m-0">
															<a href="#collapseOne" class="text-dark"
																data-bs-toggle="collapse" aria-expanded="true"
																aria-controls="collapseOne">
																Collapsible Group Item #1
															</a>
														</h5>
													</div>

													<div id="collapseOne" class="collapse show"
														aria-labelledby="headingOne" data-bs-parent="#accordion">
														<div class="card-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life
															accusamus terry richardson ad squid. 3 wolf moon officia
															aute,
															non cupidatat skateboard dolor brunch. Food truck quinoa
															nesciunt laborum eiusmod. Brunch 3 wolf moon
															tempor, sunt aliqua put a bird on it squid single-origin
															coffee nulla assumenda shoreditch et. Nihil
															anim keffiyeh helvetica, craft beer labore wes anderson cred
															nesciunt sapiente ea proident. Ad vegan
															excepteur butcher vice lomo. Leggings occaecat craft beer
															farm-to-table, raw denim aesthetic synth nesciunt
															you probably haven't heard of them accusamus labore
															sustainable VHS.
														</div>
													</div>
												</div>
												<div class="card mb-0">
													<div class="card-header" id="headingTwo">
														<h5 class="m-0">
															<a href="#collapseTwo" class="collapsed text-dark"
																data-bs-toggle="collapse" aria-expanded="false"
																aria-controls="collapseTwo">
																Collapsible Group Item #2
															</a>
														</h5>
													</div>
													<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
														data-bs-parent="#accordion">
														<div class="card-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life
															accusamus terry richardson ad squid. 3 wolf moon officia
															aute,
															non cupidatat skateboard dolor brunch. Food truck quinoa
															nesciunt laborum eiusmod. Brunch 3 wolf moon
															tempor, sunt aliqua put a bird on it squid single-origin
															coffee nulla assumenda shoreditch et. Nihil
															anim keffiyeh helvetica, craft beer labore wes anderson cred
															nesciunt sapiente ea proident. Ad vegan
															excepteur butcher vice lomo. Leggings occaecat craft beer
															farm-to-table, raw denim aesthetic synth nesciunt
															you probably haven't heard of them accusamus labore
															sustainable VHS.
														</div>
													</div>
												</div>
												<div class="card mb-0">
													<div class="card-header" id="headingThree">
														<h5 class="m-0">
															<a href="#collapseThree" class="collapsed text-dark"
																data-bs-toggle="collapse" aria-expanded="false"
																aria-controls="collapseThree">
																Collapsible Group Item #3
															</a>
														</h5>
													</div>
													<div id="collapseThree" class="collapse"
														aria-labelledby="headingThree" data-bs-parent="#accordion">
														<div class="card-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life
															accusamus terry richardson ad squid. 3 wolf moon officia
															aute,
															non cupidatat skateboard dolor brunch. Food truck quinoa
															nesciunt laborum eiusmod. Brunch 3 wolf moon
															tempor, sunt aliqua put a bird on it squid single-origin
															coffee nulla assumenda shoreditch et. Nihil
															anim keffiyeh helvetica, craft beer labore wes anderson cred
															nesciunt sapiente ea proident. Ad vegan
															excepteur butcher vice lomo. Leggings occaecat craft beer
															farm-to-table, raw denim aesthetic synth nesciunt
															you probably haven't heard of them accusamus labore
															sustainable VHS.
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- /Modal -->

								<div class="button-list">
									<!-- Responsive modal -->
									<button type="button" class="btn btn-primary waves-effect waves-light mt-1"
										data-bs-toggle="modal" data-bs-target="#con-close-modal">Responsive
										Modal</button>
									<!-- Accordion modal -->
									<button type="button" class="btn btn-secondary waves-effect waves-light mt-1"
										data-bs-toggle="modal" data-bs-target="#accordion-modal">Accordion in
										Modal</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Custom Modals -->

				</div>


				<div class="row">

					<!-- Vertically Centered Modal -->
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									<h5 class="card-title">Vertically Centered Modal</h5>
								</div>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-primary" data-bs-toggle="modal"
									data-bs-target="#exampleModalScrollable2">
									Vertically centered modal
								</button>
								<div class="modal fade" id="exampleModalScrollable2" tabindex="-1"
									aria-labelledby="exampleModalScrollable2" data-bs-keyboard="false"
									aria-hidden="true">
									<!-- Scrollable modal -->
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="staticBackdropLabel2">Modal title
												</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
													Libero
													ipsum quasi, error quibusdam debitis maiores hic eum? Vitae
													nisi
													ipsa maiores fugiat deleniti quis reiciendis veritatis.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-cancel"
													data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save
													Changes</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Vertically Centered Modal -->

					<!-- Vertically Centered Scrollable -->
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									<h5 class="card-title">Vertical Centered Scrollable</h5>
								</div>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-primary" data-bs-toggle="modal"
									data-bs-target="#exampleModalScrollable3">
									Vertically centered scrollable modal
								</button>
								<div class="modal fade" id="exampleModalScrollable3" tabindex="-1"
									aria-labelledby="exampleModalScrollable3" data-bs-keyboard="false"
									aria-hidden="true">
									<!-- Scrollable modal -->
									<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="staticBackdropLabel3">Modal title
												</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
													voluptatibus, ipsam quo est rerum modi quos expedita facere,
													ex
													tempore fuga similique ipsa blanditiis et accusamus
													temporibus
													commodi voluptas! Nobis veniam illo architecto expedita quam
													ratione quaerat omnis. In, recusandae eos! Pariatur,
													deleniti
													quis ad nemo ipsam officia temporibus, doloribus fuga
													asperiores
													ratione distinctio velit alias hic modi praesentium aperiam
													officiis eaque, accusamus aut. Accusantium assumenda,
													commodi
													nulla provident asperiores fugit inventore iste amet aut
													placeat
													consequatur reprehenderit. Ratione tenetur eligendi, quis
													aperiam dolores magni iusto distinctio voluptatibus minus a
													unde
													at! Consequatur voluptatum in eaque obcaecati, impedit
													accusantium ea soluta, excepturi, quasi quia commodi
													blanditiis?
													Qui blanditiis iusto corrupti necessitatibus dolorem fugiat
													consequuntur quod quo veniam? Labore dignissimos reiciendis
													accusamus recusandae est consequuntur iure.</p>
												<p>Lorem ipsum dolor sit amet.</p>
												<p>Lorem ipsum dolor sit amet.</p>
												<p>Lorem ipsum dolor sit amet.</p>
												<p>Lorem ipsum dolor sit amet.</p>
												<p>Lorem ipsum dolor sit amet.</p>
												<p>Lorem ipsum dolor sit amet.</p>
												<p>Lorem ipsum dolor sit amet.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-cancel"
													data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save
													Changes</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Vertically Centered Scrollable -->

					<!-- Tooltips and popovers -->
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									<h5 class="card-title">Tooltips and popovers</h5>
								</div>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-primary" data-bs-toggle="modal"
									data-bs-target="#exampleModalScrollable4">
									Launch demo modal
								</button>
								<div class="modal fade" id="exampleModalScrollable4" tabindex="-1"
									aria-labelledby="exampleModalScrollable4" data-bs-keyboard="false"
									aria-hidden="true">
									<!-- Scrollable modal -->
									<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="staticBackdropLabel4">Modal title
												</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<h5>Popover in a modal</h5>
												<p>This <a href="#" role="button" class="btn btn-secondary"
														data-bs-toggle="popover" title="Popover title"
														data-bs-content="Popover body content is set in this attribute.">button</a>
													triggers a popover on click.</p>
												<hr>
												<h5>Tooltips in a modal</h5>
												<p><a href="#" class="text-primary" data-bs-toggle="tooltip"
														title="Tooltip">This
														link</a> and <a href="#" class="text-primary"
														data-bs-toggle="tooltip" title="Tooltip">that link</a> have
													tooltips on hover.
												</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-cancel"
													data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save
													Changes</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Tooltips and popovers -->

				</div>

				<div class="row">

					<!-- Fullscreen Modal -->
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									<h5 class="card-title">Fullscreen Modal</h5>
								</div>
							</div>
							<div class="card-body">
								<div class="bd-example">
									<button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
										data-bs-target="#exampleModalFullscreen">Full screen</button>
									<button type="button" class="btn btn-secondary mb-1" data-bs-toggle="modal"
										data-bs-target="#exampleModalFullscreenSm">Full screen below sm</button>
									<button type="button" class="btn btn-warning mb-1" data-bs-toggle="modal"
										data-bs-target="#exampleModalFullscreenMd">Full screen below md</button>
									<button type="button" class="btn btn-info mb-1" data-bs-toggle="modal"
										data-bs-target="#exampleModalFullscreenLg">Full screen below lg</button>
									<button type="button" class="btn btn-success mb-1" data-bs-toggle="modal"
										data-bs-target="#exampleModalFullscreenXl">Full screen below xl</button>
									<button type="button" class="btn btn-danger mb-1" data-bs-toggle="modal"
										data-bs-target="#exampleModalFullscreenXxl">Full screen below
										xxl</button>
								</div>
								<div class="modal fade" id="exampleModalFullscreen" tabindex="-1"
									aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true"
									style="display: none;">
									<div class="modal-dialog modal-fullscreen">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="exampleModalFullscreenLabel">Full
													screen modal</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												...
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1"
									aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true"
									style="display: none;">
									<div class="modal-dialog modal-fullscreen-sm-down">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="exampleModalFullscreenSmLabel">
													Full
													screen below sm</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												...
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1"
									aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true"
									style="display: none;">
									<div class="modal-dialog modal-fullscreen-md-down">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="exampleModalFullscreenMdLabel">
													Full
													screen below md</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												...
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1"
									aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true"
									style="display: none;">
									<div class="modal-dialog modal-fullscreen-lg-down">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="exampleModalFullscreenLgLabel">
													Full
													screen below lg</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												...
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1"
									aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true"
									style="display: none;">
									<div class="modal-dialog modal-fullscreen-xl-down">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="exampleModalFullscreenXlLabel">
													Full
													screen below xl</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												...
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1"
									aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true"
									style="display: none;">
									<div class="modal-dialog modal-fullscreen-xxl-down">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="exampleModalFullscreenXxlLabel">
													Full
													screen below xxl</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												...
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Fullscreen Modal -->

				</div>

				<div class="row">

					<!-- Varying Modal Content -->
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									<h5 class="card-title">Varying Modal Content</h5>
								</div>
							</div>
							<div class="card-body">
								<button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
									data-bs-target="#formmodal" data-bs-whatever="@mdo">Open modal for
									@mdo</button>
								<button type="button" class="btn btn-secondary mb-1" data-bs-toggle="modal"
									data-bs-target="#formmodal" data-bs-whatever="@fat">Open modal for
									@fat</button>
								<button type="button" class="btn btn-light mb-1" data-bs-toggle="modal"
									data-bs-target="#formmodal" data-bs-whatever="@getbootstrap">Open modal for
									@getbootstrap</button>
								<div class="modal fade" id="formmodal" tabindex="-1" aria-labelledby="exampleModalLabel"
									aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="exampleModalLabel">New message</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form>
													<div class="mb-3">
														<label for="recipient-name"
															class="col-form-label">Recipient:</label>
														<input type="text" class="form-control" id="recipient-name">
													</div>
													<div class="mb-3">
														<label for="message-text"
															class="col-form-label">Message:</label>
														<textarea class="form-control" id="message-text"></textarea>
													</div>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Send
													message</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Varying Modal Content -->

				</div>

				<div class="row">

					<!-- Modal Animation Effects -->
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									<h5 class="card-title">Modal Animation Effects</h5>
								</div>
							</div>
							<div class="card-body">
								<div class="row ">
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary d-grid mb-3"
											data-bs-effect="effect-scale" data-bs-toggle="modal"
											href="#modaldemo8">Scale</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary d-grid mb-3"
											data-bs-effect="effect-slide-in-right" data-bs-toggle="modal"
											href="#modaldemo8">Slide In Right</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary d-grid mb-3"
											data-bs-effect="effect-slide-in-bottom" data-bs-toggle="modal"
											href="#modaldemo8">Slide In Bottom</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary d-grid mb-3"
											data-bs-effect="effect-newspaper" data-bs-toggle="modal"
											href="#modaldemo8">Newspaper</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-fall"
											data-bs-toggle="modal" href="#modaldemo8">Fall</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary d-grid mb-3"
											data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal"
											href="#modaldemo8">Flip Horizontal</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary d-grid mb-3"
											data-bs-effect="effect-flip-vertical" data-bs-toggle="modal"
											href="#modaldemo8">Flip Vertical</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary d-grid mb-3"
											data-bs-effect="effect-super-scaled" data-bs-toggle="modal"
											href="#modaldemo8">Super Scaled</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-sign"
											data-bs-toggle="modal" href="#modaldemo8">Sign</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary d-grid mb-3"
											data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal"
											href="#modaldemo8">Rotate Bottom</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-primary d-grid mb-3"
											data-bs-effect="effect-rotate-left" data-bs-toggle="modal"
											href="#modaldemo8">Rotate Left</a>
									</div>
								</div>
								<div class="modal fade" id="modaldemo8">
									<div class="modal-dialog modal-dialog-centered text-center" role="document">
										<div class="modal-content modal-content-demo">
											<div class="modal-header">
												<h4 class="modal-title">Message Preview</h4><button aria-label="Close"
													class="btn-close" data-bs-dismiss="modal"></button>
											</div>
											<div class="modal-body text-start">
												<h6>Why We Use Electoral College, Not Popular Vote</h6>
												<p class="text-muted mb-0">It is a long established fact that a reader
													will be distracted by the readable content of a page when looking at
													its layout. The point of using Lorem Ipsum is that it has a
													more-or-less normal distribution of letters, as opposed to using
													'Content here, content here', making it look like readable English.
												</p>
											</div>
											<div class="modal-footer">
												<button class="btn btn-primary">Save changes</button> <button
													class="btn btn-cancel" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Modal Animation Effects -->

				</div>

				<!-- Close Buttons -->
				<h6 class="mb-3">Close Buttons:</h6>
				<div class="row">
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									<h5 class="card-title">Basic Close</h5>
								</div>
							</div>
							<div class="card-body">
								<button type="button" class="btn-close" aria-label="Close"></button>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card ">
							<div class="card-header justify-content-between">
								<div class="card-title">
									<h5 class="card-title">Disabel state</h5>
								</div>
							</div>
							<div class="card-body">
								<button type="button" class="btn-close" disabled aria-label="Close"></button>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="card overflow-hidden">
							<div class="card-header justify-content-between">
								<div class="card-title">
									<h5 class="card-title">White variant</h5>
								</div>
							</div>
							<div class="card-body bg-black">
								<button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
								<button type="button" class="btn-close btn-close-white" disabled
									aria-label="Close"></button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Close Buttons -->

				<!-- Modal Position -->
				<div class="row">
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Modal Position</h5>
							</div>
							<div class="card-body">
								<!-- Modal	 -->
								<div id="top-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-top">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="topModalLabel">Modal Heading</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<h5>Text in a modal</h5>
												<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-cancel"
													data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save changes</button>
											</div>
										</div>
									</div>
								</div>
								<!-- /Modal -->

								<!-- Modal -->
								<div id="right-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-sm modal-right">
										<div class="modal-content">
											<div class="modal-header border-0">
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<div class="text-center">
													<h4 class="mt-0">Text in a modal</h4>
													<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
													</p>
													<button type="button" class="btn btn-danger btn-sm"
														data-bs-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Modal -->

								<!-- Modal -->
								<div id="bottom-modal" class="modal fade" tabindex="-1" role="dialog"
									aria-hidden="true">
									<div class="modal-dialog modal-sm modal-bottom">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="bottomModalLabel">Modal Heading</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<h5>Text in a modal</h5>
												<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-cancel"
													data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save changes</button>
											</div>
										</div>
									</div>
								</div><!-- /Modal -->

								<!-- Modal -->
								<div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myCenterModalLabel">Center Modal</h4>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<h5>Overflowing text to show scroll behavior</h5>
												<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
													dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
													ac consectetur ac, vestibulum at eros.</p>
												<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
													Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
													auctor.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- /Modal -->

								<div class="button-list">
									<!-- Top modal -->
									<button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
										data-bs-target="#top-modal">Top Modal</button>
									<!-- Bottom modal -->
									<button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
										data-bs-target="#bottom-modal">Bottom Modal</button>
									<!-- Center modal -->
									<button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
										data-bs-target="#centermodal">Center modal</button>
									<!-- Right modal -->
									<button type="button" class="btn btn-primary mt-1" data-bs-toggle="modal"
										data-bs-target="#right-modal">Rightbar Modal</button>
								</div>

							</div>
						</div>
					</div>

					<div class="col-xl-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Modal based Alerts</h5>
							</div>
							<div class="card-body">
								<!-- Success Alert Modal -->
								<div id="success-alert-modal" class="modal fade" tabindex="-1" role="dialog"
									aria-hidden="true">
									<div class="modal-dialog modal-sm">
										<div class="modal-content modal-filled bg-success">
											<div class="modal-body p-4">
												<div class="text-center">
													<i class="dripicons-checkmark h1 text-white"></i>
													<h4 class="mt-2 text-white">Well Done!</h4>
													<p class="mt-3 text-white">Cras mattis consectetur purus sit amet
														fermentum. Cras justo odio, dapibus ac facilisis in, egestas
														eget quam.</p>
													<button type="button" class="btn btn-cancel my-2"
														data-bs-dismiss="modal">Continue</button>
												</div>
											</div>
										</div>
									</div>
								</div><!-- /Modal -->

								<!-- Info Alert Modal -->
								<div id="info-alert-modal" class="modal fade" tabindex="-1" role="dialog"
									aria-hidden="true">
									<div class="modal-dialog modal-sm">
										<div class="modal-content">
											<div class="modal-body p-4">
												<div class="text-center">
													<i class="dripicons-information h1 text-info"></i>
													<h4 class="mt-2">Heads up!</h4>
													<p class="mt-3">Cras mattis consectetur purus sit amet fermentum.
														Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
													<button type="button" class="btn btn-info my-2"
														data-bs-dismiss="modal">Continue</button>
												</div>
											</div>
										</div>
									</div>
								</div><!-- /Modal -->

								<!-- Warning Alert Modal -->
								<div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog"
									aria-hidden="true">
									<div class="modal-dialog modal-sm">
										<div class="modal-content">
											<div class="modal-body p-4">
												<div class="text-center">
													<i class="dripicons-warning h1 text-warning"></i>
													<h4 class="mt-2">Incorrect Information</h4>
													<p class="mt-3">Cras mattis consectetur purus sit amet fermentum.
														Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
													<button type="button" class="btn btn-warning my-2"
														data-bs-dismiss="modal">Continue</button>
												</div>
											</div>
										</div>
									</div>
								</div><!-- /Modal -->

								<!-- Danger Alert Modal -->
								<div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog"
									aria-hidden="true">
									<div class="modal-dialog modal-sm">
										<div class="modal-content modal-filled bg-danger">
											<div class="modal-body p-4">
												<div class="text-center">
													<i class="dripicons-wrong h1 text-white"></i>
													<h4 class="mt-2 text-white">Oh snap!</h4>
													<p class="mt-3 text-white">Cras mattis consectetur purus sit amet
														fermentum. Cras justo odio, dapibus ac facilisis in, egestas
														eget quam.</p>
													<button type="button" class="btn btn-cancel my-2"
														data-bs-dismiss="modal">Continue</button>
												</div>
											</div>
										</div>
									</div>
								</div><!-- /Modal -->

								<div class="button-list">
									<!-- Success Alert modal -->
									<button type="button" class="btn btn-success mt-1" data-bs-toggle="modal"
										data-bs-target="#success-alert-modal">Success Alert</button>
									<!-- Info Alert modal -->
									<button type="button" class="btn btn-info mt-1" data-bs-toggle="modal"
										data-bs-target="#info-alert-modal">Info Alert</button>
									<!-- Warning Alert modal -->
									<button type="button" class="btn btn-warning mt-1" data-bs-toggle="modal"
										data-bs-target="#warning-alert-modal">Warning Alert</button>
									<!-- Danger Alert modal -->
									<button type="button" class="btn btn-danger mt-1" data-bs-toggle="modal"
										data-bs-target="#danger-alert-modal">Danger Alert</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Modal Position -->

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

	<!-- Modal JS -->
	<script src="assets/js/modal.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>

</body>

</html>