<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>


<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="submenu-open">
					<h6 class="submenu-hdr">Main</h6>
					<ul>
						<li class="submenu">
							<a class="<?php echo in_array($current_page, ['index.php', 'sales-dashboard.php']) ? 'active subdrop' : ''; ?>"
								href="javascript:void(0);">
								<i data-feather="grid"></i><span>Dashboard</span><span class="menu-arrow"></span>
							</a>
							<ul>
								<li>
									<a class="<?php echo ($current_page == 'home.php') ? 'active subdrop' : ''; ?>"
										href="home.php">Online</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>

				<li class="submenu-open">
					<h6 class="submenu-hdr">Orders</h6>
					<ul>
						<li class="<?php echo ($current_page == 'sales-list.php') ? 'active' : ''; ?>">
							<a href="sales-list.php">
								<i data-feather="shopping-cart"></i><span>My Orders</span>
							</a>
						</li>
						<li class="<?php echo ($current_page == 'abodant_cart.php') ? 'active' : ''; ?>">
							<a href="abodant_cart.php">
								<i data-feather="shopping-cart"></i><span>Abandoned cart</span>
							</a>
						</li>
						<li class="<?php echo ($current_page == 'return-exchange.php') ? 'active subdrop' : ''; ?>">
							<a href="return-exchange.php">
								<i data-feather="copy"></i><span>Return Exchange</span>
							</a>
						</li>
					</ul>
				</li>


				<li class="submenu-open">
					<h6 class="submenu-hdr">Products</h6>
					<ul>
						<li class="<?php echo ($current_page == 'product-list.php') ? 'active subdrop' : ''; ?>">
							<a href="product-list.php">
								<i data-feather="box"></i><span>Products</span>
							</a>
						</li>
						
						<li class="<?php echo ($current_page == 'category-list.php') ? 'active subdrop' : ''; ?>">
							<a href="category-list.php">
								<i data-feather="codepen"></i><span>Collections</span>
							</a>
						</li>
						<li class="<?php echo ($current_page == 'sub-categories.php') ? 'active subdrop' : ''; ?>">
							<a href="sub-categories.php">
								<i data-feather="speaker"></i><span>Sub Collections</span>
							</a>
						</li>
						
					</ul>
				</li>

				<li class="submenu-open">
					<h6 class="submenu-hdr">Promo</h6>
					<ul>
						<li class="<?php echo ($current_page == 'coupons.php') ? 'active subdrop' : ''; ?>">
							<a href="coupons.php">
								<i data-feather="shopping-cart"></i><span>Coupons</span>
							</a>
						</li>
						<li class="<?php echo ($current_page == 'gift-card.php') ? 'active subdrop' : ''; ?>">
							<a href="gift-card.php">
								<i data-feather="shopping-cart"></i><span>Gift Card</span>
							</a>
						</li>
					</ul>
				</li>

				<li class="submenu-open">
					<h6 class="submenu-hdr">HRM</h6>
					<ul>
						<li class="<?php echo ($current_page == 'employees-grid.php') ? 'active subdrop' : ''; ?>">
							<a href="employees-grid.php"><i data-feather="user"></i><span>Employees</span></a>
						</li>
						<li class="<?php echo ($current_page == 'department-grid.php') ? 'active subdrop' : ''; ?>">
							<a href="customers.php.php"><i data-feather="users"></i><span>Customers</span></a>
						</li>
						

					</ul>
				</li>



				<li class="submenu-open">
					<h6 class="submenu-hdr">Reports</h6>
					<ul>
						<li class="<?php echo ($current_page == 'sales-report.php') ? 'active subdrop' : ''; ?>">
							<a href="sales-report.php"><i data-feather="bar-chart-2"></i><span>Sales Report</span></a>
						</li>
						<li class="<?php echo ($current_page == 'purchase-report.php') ? 'active subdrop' : ''; ?>">
							<a href="purchase-report.php"><i data-feather="pie-chart"></i><span>Purchase
									Report</span></a>
						</li>
						<li class="<?php echo ($current_page == 'inventory-report.php') ? 'active subdrop' : ''; ?>">
							<a href="inventory-report.php"><i data-feather="inbox"></i><span>Inventory Report</span></a>
						</li>
						<li class="<?php echo ($current_page == 'invoice-report.php') ? 'active subdrop' : ''; ?>">
							<a href="invoice-report.php"><i data-feather="file"></i><span>Invoice Report</span></a>
						</li>
						<li class="<?php echo ($current_page == 'supplier-report.php') ? 'active subdrop' : ''; ?>">
							<a href="supplier-report.php"><i data-feather="user-check"></i><span>Supplier
									Report</span></a>
						</li>
						<li class="<?php echo ($current_page == 'customer-report.php') ? 'active subdrop' : ''; ?>">
							<a href="customer-report.php"><i data-feather="user"></i><span>Customer Report</span></a>
						</li>
						<li class="<?php echo ($current_page == 'expense-report.php') ? 'active subdrop' : ''; ?>">
							<a href="expense-report.php"><i data-feather="file"></i><span>Expense Report</span></a>
						</li>
						<li class="<?php echo ($current_page == 'income-report.php') ? 'active subdrop' : ''; ?>">
							<a href="income-report.php"><i data-feather="bar-chart"></i><span>Income Report</span></a>
						</li>
						<li class="<?php echo ($current_page == 'tax-reports.php') ? 'active subdrop' : ''; ?>">
							<a href="tax-reports.php"><i data-feather="database"></i><span>Tax Report</span></a>
						</li>
						<li class="<?php echo ($current_page == 'profit-and-loss.php') ? 'active subdrop' : ''; ?>">
							<a href="profit-and-loss.php"><i data-feather="pie-chart"></i><span>Profit & Loss</span></a>
						</li>
					</ul>
				</li>

				<li class="submenu-open">
					<h6 class="submenu-hdr">Settings</h6>
					<ul>
						<li class="submenu">
							<a class="<?php echo in_array($current_page, ['general-settings.php', 'security-settings.php', 'notification.php', 'connected-apps.php']) ? 'active subdrop' : ''; ?>"
								href="javascript:void(0);">
								<i data-feather="settings"></i><span>General Settings</span><span
									class="menu-arrow"></span>
							</a>
							<ul>
								<li><a class="<?php echo ($current_page == 'general-settings.php') ? 'active subdrop' : ''; ?>"
										href="general-settings.php">Profile</a></li>
								<li><a class="<?php echo ($current_page == 'security-settings.php') ? 'active subdrop' : ''; ?>"
										href="security-settings.php">Security</a></li>
								<li><a class="<?php echo ($current_page == 'notification.php') ? 'active subdrop' : ''; ?>"
										href="notification.php">Notifications</a></li>
								<li><a class="<?php echo ($current_page == 'connected-apps.php') ? 'active subdrop' : ''; ?>"
										href="connected-apps.php">Connected Apps</a></li>
							</ul>
						</li>

						<li class="submenu">
							<a class="<?php echo in_array($current_page, ['system-settings.php', 'company-settings.php', 'localization-settings.php', 'prefixes.php', 'preference.php', 'appearance.php', 'social-authentication.php', 'language-settings.php']) ? 'active subdrop' : ''; ?>"
								href="javascript:void(0);">
								<i data-feather="globe"></i><span>Website Settings</span><span
									class="menu-arrow"></span>
							</a>
							<ul>
								<li><a class="<?php echo ($current_page == 'system-settings.php') ? 'active subdrop' : ''; ?>"
										href="system-settings.php">System Settings</a></li>
								<li><a class="<?php echo ($current_page == 'company-settings.php') ? 'active subdrop' : ''; ?>"
										href="company-settings.php">Company Settings</a></li>
								<li><a class="<?php echo ($current_page == 'localization-settings.php') ? 'active subdrop' : ''; ?>"
										href="localization-settings.php">Localization</a></li>
								<li><a class="<?php echo ($current_page == 'prefixes.php') ? 'active subdrop' : ''; ?>"
										href="prefixes.php">Prefixes</a></li>
								<li><a class="<?php echo ($current_page == 'preference.php') ? 'active subdrop' : ''; ?>"
										href="preference.php">Preference</a></li>
								<li><a class="<?php echo ($current_page == 'appearance.php') ? 'active subdrop' : ''; ?>"
										href="appearance.php">Appearance</a></li>
								<li><a class="<?php echo ($current_page == 'social-authentication.php') ? 'active subdrop' : ''; ?>"
										href="social-authentication.php">Social Authentication</a></li>
								<li><a class="<?php echo ($current_page == 'language-settings.php') ? 'active subdrop' : ''; ?>"
										href="language-settings.php">Language</a></li>
							</ul>
						</li>

						<li class="submenu">
							<a class="<?php echo in_array($current_page, ['invoice-settings.php', 'printer-settings.php', 'pos-settings.php', 'custom-fields.php']) ? 'active subdrop' : ''; ?>"
								href="javascript:void(0);">
								<i data-feather="smartphone"></i><span>App Settings</span><span
									class="menu-arrow"></span>
							</a>
							<ul>
								<li><a class="<?php echo ($current_page == 'invoice-settings.php') ? 'active subdrop' : ''; ?>"
										href="invoice-settings.php">Invoice</a></li>
								<li><a class="<?php echo ($current_page == 'printer-settings.php') ? 'active subdrop' : ''; ?>"
										href="printer-settings.php">Printer</a></li>
								<li><a class="<?php echo ($current_page == 'pos-settings.php') ? 'active subdrop' : ''; ?>"
										href="pos-settings.php">POS</a></li>
								<li><a class="<?php echo ($current_page == 'custom-fields.php') ? 'active subdrop' : ''; ?>"
										href="custom-fields.php">Custom Fields</a></li>
							</ul>
						</li>

						<li class="submenu">
							<a class="<?php echo in_array($current_page, ['email-settings.php', 'sms-gateway.php', 'otp-settings.php', 'gdpr-settings.php']) ? 'active subdrop' : ''; ?>"
								href="javascript:void(0);">
								<i data-feather="monitor"></i><span>System Settings</span><span
									class="menu-arrow"></span>
							</a>
							<ul>
								<li><a class="<?php echo ($current_page == 'email-settings.php') ? 'active subdrop' : ''; ?>"
										href="email-settings.php">Email</a></li>
								<li><a class="<?php echo ($current_page == 'sms-gateway.php') ? 'active subdrop' : ''; ?>"
										href="sms-gateway.php">SMS Gateways</a></li>
								<li><a class="<?php echo ($current_page == 'otp-settings.php') ? 'active subdrop' : ''; ?>"
										href="otp-settings.php">OTP</a></li>
								<li><a class="<?php echo ($current_page == 'gdpr-settings.php') ? 'active subdrop' : ''; ?>"
										href="gdpr-settings.php">GDPR Cookies</a></li>
							</ul>
						</li>

						<li class="submenu">
							<a class="<?php echo in_array($current_page, ['payment-gateway-settings.php', 'bank-settings-grid.php', 'tax-rates.php', 'currency-settings.php']) ? 'active subdrop' : ''; ?>"
								href="javascript:void(0);">
								<i data-feather="dollar-sign"></i><span>Financial Settings</span><span
									class="menu-arrow"></span>
							</a>
							<ul>
								<li><a class="<?php echo ($current_page == 'payment-gateway-settings.php') ? 'active subdrop' : ''; ?>"
										href="payment-gateway-settings.php">Payment Gateway</a></li>
								<li><a class="<?php echo ($current_page == 'bank-settings-grid.php') ? 'active subdrop' : ''; ?>"
										href="bank-settings-grid.php">Bank Accounts</a></li>
								<li><a class="<?php echo ($current_page == 'tax-rates.php') ? 'active subdrop' : ''; ?>"
										href="tax-rates.php">Tax Rates</a></li>
								<li><a class="<?php echo ($current_page == 'currency-settings.php') ? 'active subdrop' : ''; ?>"
										href="currency-settings.php">Currencies</a></li>
							</ul>
						</li>

						<li class="submenu">
							<a class="<?php echo in_array($current_page, ['storage-settings.php', 'ban-ip-address.php']) ? 'active subdrop' : ''; ?>"
								href="javascript:void(0);">
								<i data-feather="hexagon"></i><span>Other Settings</span><span
									class="menu-arrow"></span>
							</a>
							<ul>
								<li><a class="<?php echo ($current_page == 'storage-settings.php') ? 'active subdrop' : ''; ?>"
										href="storage-settings.php">Storage</a></li>
								<li><a class="<?php echo ($current_page == 'ban-ip-address.php') ? 'active subdrop' : ''; ?>"
										href="ban-ip-address.php">Ban IP Address</a></li>
							</ul>
						</li>

						<li>
							<a class="<?php echo ($current_page == 'signin.php') ? 'active subdrop' : ''; ?>"
								href="signin.php">
								<i data-feather="log-out"></i><span>Logout</span>
							</a>
						</li>
					</ul>
				</li>

			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->



<!-- Sidebar -->
<div class="sidebar horizontal-sidebar">
	<div id="sidebar-menu-3" class="sidebar-menu">
		<ul class="nav">

			<li class="submenu">
				<a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active subdrop' : ''; ?>">
					<i data-feather="grid"></i><span> Main Menu</span>
					<span class="menu-arrow"></span>
				</a>
				<ul>
					<li><a class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>"
							href="index.php">Online</a></li>
				</ul>
			</li>

			<li class="submenu">
				<a href="javascript:void(0);"
					class="<?php echo in_array($current_page, ['sales-list.php', 'product-list.php', 'add-product.php']) ? 'active subdrop' : ''; ?>">
					<img src="assets/img/icons/orders.svg" alt="img"><span> Orders </span>
					<span class="menu-arrow"></span>
				</a>
				<ul>
					<li><a class="<?php echo ($current_page == 'sales-list.php') ? 'active' : ''; ?>"
							href="sales-list.php">My Orders</a></li>
					<li><a class="<?php echo ($current_page == 'product-list.php') ? 'active' : ''; ?>"
							href="product-list.php">Return Exchange</a></li>
							
				</ul>
			</li>

			<li class="submenu">
				<a href="javascript:void(0);"
					class="<?php echo in_array($current_page, ['coupons.php', 'low-stocks.php']) ? 'active subdrop' : ''; ?>">
					<img src="assets/img/icons/product.svg" alt="img"><span> Promo </span>
					<span class="menu-arrow"></span>
				</a>
				<ul>
					<li><a class="<?php echo ($current_page == 'coupons.php') ? 'active' : ''; ?>"
							href="coupons.php">Coupons</a></li>
					<li><a class="<?php echo ($current_page == 'low-stocks.php') ? 'active' : ''; ?>"
							href="low-stocks.php">Gift Cards</a></li>

				</ul>
			</li>

			<li class="submenu">
				<a href="javascript:void(0);"
					class="<?php echo in_array($current_page, ['product-list.php', 'low-stocks.php', 'category-list.php', 'sub-categories.php', 'brand-list.php', 'units.php', 'varriant-attributes.php', 'barcode.php', 'qrcode.php']) ? 'active subdrop' : ''; ?>">
					<img src="assets/img/icons/product.svg" alt="img"><span> Products </span>
					<span class="menu-arrow"></span>
				</a>
				<ul>
					<li><a class="<?php echo ($current_page == 'product-list.php') ? 'active' : ''; ?>"
							href="product-list.php">Products</a></li>
					
					<li><a class="<?php echo ($current_page == 'category-list.php') ? 'active' : ''; ?>"
							href="category-list.php">Collections</a></li>
					<li><a class="<?php echo ($current_page == 'sub-categories.php') ? 'active' : ''; ?>"
							href="sub-categories.php">Sub Collections</a></li>
					
				</ul>
			</li>

			<li class="submenu">
				<a href="javascript:void(0);"
					class="<?php echo in_array($current_page, ['purchase-list.php', 'expense-list.php', 'expense-category.php']) ? 'active subdrop' : ''; ?>">
					<img src="assets/img/icons/purchase1.svg" alt="img"><span> Payflow </span>
					<span class="menu-arrow"></span>
				</a>
				<ul>
					<li><a class="<?php echo ($current_page == 'purchase-list.php') ? 'active' : ''; ?>"
							href="purchase-list.php">Purchases</a></li>
					<li class="submenu">
						<a href="javascript:void(0);"
							class="<?php echo in_array($current_page, ['expense-list.php', 'expense-category.php']) ? 'active subdrop' : ''; ?>">
							<span>Expenses</span><span class="menu-arrow"></span>
						</a>
						<ul>
							<li><a class="<?php echo ($current_page == 'expense-list.php') ? 'active' : ''; ?>"
									href="expense-list.php">Expenses</a></li>
							<li><a class="<?php echo ($current_page == 'expense-category.php') ? 'active' : ''; ?>"
									href="expense-category.php">Expense Category</a></li>
						</ul>
					</li>
				</ul>
			</li>

			<li class="submenu">
				<a href="javascript:void(0);"
					class="<?php echo in_array($current_page, ['customers.php', 'suppliers.php', 'employees-list.php']) ? 'active subdrop' : ''; ?>">
					<img src="assets/img/icons/users1.svg" alt="img"><span> User Management </span>
					<span class="menu-arrow"></span>
				</a>
				<ul>
					<li class="submenu">
						<a href="javascript:void(0);"
							class="<?php echo ($current_page == 'customers.php') ? 'active subdrop' : ''; ?>">
							<span>Customers</span><span class="menu-arrow"></span>
						</a>
						<ul>
							<li><a class="<?php echo ($current_page == 'customers.php') ? 'active' : ''; ?>"
									href="customers.php">Customers</a></li>
							<li><a class="<?php echo ($current_page == 'segments.php') ? 'active' : ''; ?>"
									href="segments.php">Segments</a></li>
						</ul>
					</li>
					<li><a class="<?php echo ($current_page == 'suppliers.php') ? 'active' : ''; ?>"
							href="suppliers.php">Suppliers</a></li>
					<li><a class="<?php echo ($current_page == 'employees-list.php') ? 'active' : ''; ?>"
							href="employees-list.php">Employees</a></li>
				</ul>
			</li>

			<!-- Profile -->
			<li class="submenu">
				<a href="javascript:void(0);"
					class="<?php echo in_array($current_page, ['employees-grid.php', 'department-grid.php', 'designation.php', 'shift.php', 'attendance-employee.php', 'attendance-admin.php', 'leaves-admin.php', 'leaves-employee.php', 'leave-types.php', 'holidays.php', 'payroll-list.php', 'payslip.php']) ? 'active subdrop' : ''; ?>">
					<i data-feather="user"></i><span>Profile</span>
					<span class="menu-arrow"></span>
				</a>
				<ul>
					<li class="submenu">
						<a href="javascript:void(0);"
							class="<?php echo in_array($current_page, ['employees-grid.php', 'department-grid.php', 'designation.php', 'shift.php']) ? 'active subdrop' : ''; ?>">
							<span>Employees</span>
							<span class="menu-arrow"></span>
						</a>
						<ul>
							<li><a class="<?php echo ($current_page == 'employees-grid.php') ? 'active' : ''; ?>"
									href="employees-grid.php">Employees</a></li>
							<li><a class="<?php echo ($current_page == 'department-grid.php') ? 'active' : ''; ?>"
									href="department-grid.php">Departments</a></li>
							<li><a class="<?php echo ($current_page == 'designation.php') ? 'active' : ''; ?>"
									href="designation.php">Designation</a></li>
							<li><a class="<?php echo ($current_page == 'shift.php') ? 'active' : ''; ?>"
									href="shift.php">Shifts</a></li>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:void(0);"
							class="<?php echo in_array($current_page, ['attendance-employee.php', 'attendance-admin.php']) ? 'active subdrop' : ''; ?>">
							<span>Attendance</span>
							<span class="menu-arrow"></span>
						</a>
						<ul>
							<li><a class="<?php echo ($current_page == 'attendance-employee.php') ? 'active' : ''; ?>"
									href="attendance-employee.php">Employee Attendance</a></li>
							<li><a class="<?php echo ($current_page == 'attendance-admin.php') ? 'active' : ''; ?>"
									href="attendance-admin.php">Admin Attendance</a></li>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:void(0);"
							class="<?php echo in_array($current_page, ['leaves-admin.php', 'leaves-employee.php', 'leave-types.php', 'holidays.php']) ? 'active subdrop' : ''; ?>">
							<span>Leaves & Holidays</span>
							<span class="menu-arrow"></span>
						</a>
						<ul>
							<li><a class="<?php echo ($current_page == 'leaves-admin.php') ? 'active' : ''; ?>"
									href="leaves-admin.php">Admin Leaves</a></li>
							<li><a class="<?php echo ($current_page == 'leaves-employee.php') ? 'active' : ''; ?>"
									href="leaves-employee.php">Employee Leaves</a></li>
							<li><a class="<?php echo ($current_page == 'leave-types.php') ? 'active' : ''; ?>"
									href="leave-types.php">Leave Types</a></li>
							<li><a class="<?php echo ($current_page == 'holidays.php') ? 'active' : ''; ?>"
									href="holidays.php">Holidays</a></li>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:void(0);"
							class="<?php echo in_array($current_page, ['payroll-list.php', 'payslip.php']) ? 'active subdrop' : ''; ?>">
							<span>Payroll</span>
							<span class="menu-arrow"></span>
						</a>
						<ul>
							<li><a class="<?php echo ($current_page == 'payroll-list.php') ? 'active' : ''; ?>"
									href="payroll-list.php">Employee Salary</a></li>
							<li><a class="<?php echo ($current_page == 'payslip.php') ? 'active' : ''; ?>"
									href="payslip.php">Payslip</a></li>
						</ul>
					</li>
				</ul>
			</li>

			<!-- Reports -->
			<li class="submenu">
				<a href="javascript:void(0);"
					class="<?php echo in_array($current_page, ['sales-report.php', 'purchase-report.php', 'inventory-report.php', 'invoice-report.php', 'supplier-report.php', 'customer-report.php', 'expense-report.php', 'income-report.php', 'tax-reports.php', 'profit-and-loss.php']) ? 'active subdrop' : ''; ?>">
					<i data-feather="bar-chart"></i><span> Reports </span>
					<span class="menu-arrow"></span>
				</a>
				<ul>
					<li><a class="<?php echo ($current_page == 'sales-report.php') ? 'active' : ''; ?>"
							href="sales-report.php">Sales Report</a></li>
					<li><a class="<?php echo ($current_page == 'purchase-report.php') ? 'active' : ''; ?>"
							href="purchase-report.php">Purchase Report</a></li>
					<li><a class="<?php echo ($current_page == 'inventory-report.php') ? 'active' : ''; ?>"
							href="inventory-report.php">Inventory Report</a></li>
					<li><a class="<?php echo ($current_page == 'invoice-report.php') ? 'active' : ''; ?>"
							href="invoice-report.php">Invoice Report</a></li>
					<li><a class="<?php echo ($current_page == 'supplier-report.php') ? 'active' : ''; ?>"
							href="supplier-report.php">Supplier Report</a></li>
					<li><a class="<?php echo ($current_page == 'customer-report.php') ? 'active' : ''; ?>"
							href="customer-report.php">Customer Report</a></li>
					<li><a class="<?php echo ($current_page == 'expense-report.php') ? 'active' : ''; ?>"
							href="expense-report.php">Expense Report</a></li>
					<li><a class="<?php echo ($current_page == 'income-report.php') ? 'active' : ''; ?>"
							href="income-report.php">Income Report</a></li>
					<li><a class="<?php echo ($current_page == 'tax-reports.php') ? 'active' : ''; ?>"
							href="tax-reports.php">Tax Report</a></li>
					<li><a class="<?php echo ($current_page == 'profit-and-loss.php') ? 'active' : ''; ?>"
							href="profit-and-loss.php">Profit & Loss</a></li>
				</ul>
			</li>

			<!-- Settings -->
			<!-- <li class="submenu">
				<a href="javascript:void(0);"
					class="<?php echo in_array($current_page, ['general-settings.php', 'system-settings.php', 'company-settings.php', 'payment-gateway-settings.php', 'language-settings.php', 'email-settings.php', 'sms-gateway.php', 'gdpr-settings.php']) ? 'active subdrop' : ''; ?>">
					<i data-feather="settings"></i><span> Settings </span>
					<span class="menu-arrow"></span>
				</a>
				<ul>
					<li><a class="<?php echo ($current_page == 'general-settings.php') ? 'active' : ''; ?>"
							href="general-settings.php">General Settings</a></li>
					<li><a class="<?php echo ($current_page == 'system-settings.php') ? 'active' : ''; ?>"
							href="system-settings.php">System Settings</a></li>
					<li><a class="<?php echo ($current_page == 'company-settings.php') ? 'active' : ''; ?>"
							href="company-settings.php">Company Settings</a></li>
					<li><a class="<?php echo ($current_page == 'payment-gateway-settings.php') ? 'active' : ''; ?>"
							href="payment-gateway-settings.php">Payment Gateway</a></li>
					<li><a class="<?php echo ($current_page == 'language-settings.php') ? 'active' : ''; ?>"
							href="language-settings.php">Language</a></li>
					<li><a class="<?php echo ($current_page == 'email-settings.php') ? 'active' : ''; ?>"
							href="email-settings.php">Email</a></li>
					<li><a class="<?php echo ($current_page == 'sms-gateway.php') ? 'active' : ''; ?>"
							href="sms-gateway.php">SMS Gateways</a></li>
					<li><a class="<?php echo ($current_page == 'gdpr-settings.php') ? 'active' : ''; ?>"
							href="gdpr-settings.php">GDPR Cookies</a></li>
				</ul>
			</li> -->

		</ul>
	</div>
</div>
<!-- /Sidebar -->

