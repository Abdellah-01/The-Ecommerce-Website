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

	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">

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
					<div class="page-title">
						<h4>Product Details</h4>
						<h6>Full details of a product</h6>
					</div>
				</div>
				<!-- /add -->
				<div class="row">
					<div class="col-lg-8 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="bar-code-view">
									<img src="assets/img/barcode/barcode1.png" alt="barcode">
									<a class="printimg">
										<img src="assets/img/icons/printer.svg" alt="print">
									</a>
								</div>
								<div class="productdetails">
									<ul class="product-bar">
										<li>
											<h4>Product</h4>
											<h6>Macbook pro </h6>
										</li>
										<li>
											<h4>Category</h4>
											<h6>Computers</h6>
										</li>
										<li>
											<h4>Sub Category</h4>
											<h6>None</h6>
										</li>
										<li>
											<h4>Brand</h4>
											<h6>None</h6>
										</li>
										<li>
											<h4>Unit</h4>
											<h6>Piece</h6>
										</li>
										<li>
											<h4>SKU</h4>
											<h6>PT0001</h6>
										</li>
										<li>
											<h4>Minimum Qty</h4>
											<h6>5</h6>
										</li>
										<li>
											<h4>Quantity</h4>
											<h6>50</h6>
										</li>
										<li>
											<h4>Tax</h4>
											<h6>0.00 %</h6>
										</li>
										<li>
											<h4>Discount Type</h4>
											<h6>Percentage</h6>
										</li>
										<li>
											<h4>Price</h4>
											<h6>1500.00</h6>
										</li>
										<li>
											<h4>Status</h4>
											<h6>Active</h6>
										</li>
										<li>
											<h4>Description</h4>
											<h6>Lorem Ipsum is simply dummy text of the printing and typesetting
												industry. Lorem Ipsum has been the industry's standard dummy text ever
												since the 1500s,</h6>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="slider-product-details">
									<div class="owl-carousel owl-theme product-slide">
										<div class="slider-product">
											<img src="assets/img/products/product69.jpg" alt="img">
											<h4>macbookpro.jpg</h4>
											<h6>581kb</h6>
										</div>
										<div class="slider-product">
											<img src="assets/img/products/product69.jpg" alt="img">
											<h4>macbookpro.jpg</h4>
											<h6>581kb</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- /add -->
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

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Owl JS -->
	<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>


</body>

</html>