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

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- animation CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

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
			<div class="content">
				<div class="page-header">
					<div class="add-item d-flex">
						<div class="page-title">
							<h4>Purchase order report</h4>
							<h6>Manage your Purchase order report</h6>
						</div>
					</div>
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
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><i data-feather="printer"
									class="feather-rotate-ccw"></i></a>
						</li>
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

				<!-- /product list -->
				<div class="card">
					<div class="card-body">
						<div class="table-top">
							<div class="search-set">
								<div class="search-input">
									<a href="" class="btn btn-searchset"><i data-feather="search"
											class="feather-search"></i></a>
								</div>
							</div>
							<div class="search-path">
								<a class="btn btn-filter" id="filter_search">
									<i data-feather="filter" class="filter-icon"></i>
									<span><img src="assets/img/icons/closes.svg" alt="img"></span>
								</a>
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
											<i data-feather="calendar" class="info-img"></i>
											<div class="input-groupicon">
												<input type="text" class="datetimepicker" placeholder="From Date">
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12">
										<div class="input-blocks">
											<i data-feather="calendar" class="info-img"></i>
											<div class="input-groupicon">
												<input type="text" class="datetimepicker" placeholder="Due Date">
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12">
										<div class="input-blocks">
											<i data-feather="stop-circle" class="info-img"></i>
											<select class="select">
												<option>Choose Supplier</option>
												<option>Suppliers</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6 col-12 ms-auto">
										<div class="input-blocks">
											<a class="btn btn-filters ms-auto"> <i data-feather="search"
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
										<th>Product Name</th>
										<th>Purchased amount</th>
										<th>Purchased QTY</th>
										<th>Instock QTY</th>
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
										<td class="productimgname">
											<a class="product-img">
												<img src="assets/img/products/product1.jpg" alt="product">
											</a>
											<a href="javascript:void(0);">Macbook pro</a>
										</td>
										<td>38698.00</td>
										<td>1248</td>
										<td>1356</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td class="productimgname">
											<a class="product-img">
												<img src="assets/img/products/product2.jpg" alt="product">
											</a>
											<a href="javascript:void(0);">Orange</a>
										</td>
										<td>36080.00</td>
										<td>110</td>
										<td>131</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td class="productimgname">
											<a class="product-img">
												<img src="assets/img/products/product3.jpg" alt="product">
											</a>
											<a href="javascript:void(0);">Pineapple</a>
										</td>
										<td>21000.00</td>
										<td>106</td>
										<td>131</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td class="productimgname">
											<a class="product-img">
												<img src="assets/img/products/product4.jpg" alt="product">
											</a>
											<a href="javascript:void(0);">Strawberry</a>
										</td>
										<td>11000.00</td>
										<td>105</td>
										<td>100</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td class="productimgname">
											<a class="product-img">
												<img src="assets/img/products/product5.jpg" alt="product">
											</a>
											<a href="javascript:void(0);">Sunglasses</a>
										</td>
										<td>10600.00</td>
										<td>105</td>
										<td>100</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td class="productimgname">
											<a class="product-img">
												<img src="assets/img/products/product6.jpg" alt="product">
											</a>
											<a href="javascript:void(0);">Unpaired gray</a>
										</td>
										<td>9984.00</td>
										<td>50</td>
										<td>50</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td class="productimgname">
											<a class="product-img">
												<img src="assets/img/products/product7.jpg" alt="product">
											</a>
											<a href="javascript:void(0);">Avocat</a>
										</td>
										<td>4500.00 </td>
										<td>41</td>
										<td>29</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td class="productimgname">
											<a class="product-img">
												<img src="assets/img/products/product8.jpg" alt="product">
											</a>
											<a href="javascript:void(0);">Banana</a>
										</td>
										<td>900.00 </td>
										<td>28</td>
										<td>24</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td class="productimgname">
											<a class="product-img">
												<img src="assets/img/products/product9.jpg" alt="product">
											</a>
											<a href="javascript:void(0);">Earphones</a>
										</td>
										<td>500.00</td>
										<td>20</td>
										<td>11</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td class="productimgname">
											<a class="product-img">
												<img src="assets/img/products/product8.jpg" alt="product">
											</a>
											<a href="javascript:void(0);">Banana</a>
										</td>
										<td>900.00 </td>
										<td>28</td>
										<td>24</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td class="productimgname">
											<a class="product-img">
												<img src="assets/img/products/product9.jpg" alt="product">
											</a>
											<a href="javascript:void(0);">Earphones</a>
										</td>
										<td>500.00</td>
										<td>20</td>
										<td>11</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /product list -->
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

	<!-- Datatable JS -->
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap5.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Datetimepicker JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Datetimepicker JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Sweetalert 2 -->
	<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
	<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>


</body>

</html>