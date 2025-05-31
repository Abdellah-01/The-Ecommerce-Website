<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>


<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				
				<li class="submenu-open">
					<h6 class="submenu-hdr">Store Front</h6>
					<ul>
						<li class="submenu">
							<a class="<?php echo in_array($current_page, ['th-announcement.php','th-marque.php']) ? 'active subdrop' : ''; ?>"
								href="javascript:void(0);">
								<i data-feather="settings"></i><span>Header</span><span
									class="menu-arrow"></span>
							</a>
							<ul>
								<li><a class="<?php echo ($current_page == 'th-announcement.php') ? 'active subdrop' : ''; ?>"
										href="th-announcement.php">Announcement Bar</a></li>
                                <li><a class="<?php echo ($current_page == 'th-marque.php') ? 'active subdrop' : ''; ?>"
										href="th-marque.php">Add Marque</a></li>
                                <ul>
								
								
							</ul>
								
							</ul>
						</li>

						<li class="submenu">
							<a class="<?php echo in_array($current_page, ['th-banner.php']) ? 'active subdrop' : ''; ?>"
								href="javascript:void(0);">
								<i data-feather="globe"></i><span>Banners</span><span
									class="menu-arrow"></span>
							</a>
							<ul>
								<li><a class="<?php echo ($current_page == 'th-banner.php') ? 'active subdrop' : ''; ?>"
										href="th-banner.php">Add banner</a></li>
								
							</ul>
						</li>
                        <li class="submenu">
							<a class="<?php echo in_array($current_page, ['th-featured-collections.php','th-sub-collections.php']) ? 'active subdrop' : ''; ?>"
								href="javascript:void(0);">
								<i data-feather="settings"></i><span>Collections</span><span
									class="menu-arrow"></span>
							</a>
							<ul>
								<li><a class="<?php echo ($current_page == 'th-featured-collections.php') ? 'active subdrop' : ''; ?>"
										href="th-featured-collections.php">Featured Collections</a></li>
                                <li><a class="<?php echo ($current_page == 'th-sub-collections.php') ? 'active subdrop' : ''; ?>"
										href="th-sub-collections.php">Sub Collections</a></li>
								
							</ul>
						</li>

                        <li class="submenu">
							<a class="<?php echo in_array($current_page, ['th-multi-tabs-products.php','th-featured-products.php']) ? 'active subdrop' : ''; ?>"
								href="javascript:void(0);">
								<i data-feather="settings"></i><span>Products</span><span
									class="menu-arrow"></span>
							</a>
							<ul>
                                <li><a class="<?php echo ($current_page == 'th-multi-tabs-products.php') ? 'active subdrop' : ''; ?>"
										href="th-multi-tabs-products.php">Multi Tab Products</a></li>
								<li><a class="<?php echo ($current_page == 'th-featured-products.php') ? 'active subdrop' : ''; ?>"
										href="th-featured-products.php">Featured Products</a></li>
                                
								
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

