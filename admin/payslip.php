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
			<div class="content mb-3">
				<div class="pay-slip-box" id="pay-slip">
					<div class="modal-dialog modal-dialog-centered stock-adjust-modal">
						<div class="modal-content">
							<div class="page-wrapper-new p-0">
								<div class="contents">
									<div class="modal-header border-0 custom-modal-header">
										<div class="page-header mb-0 w-100">
											<div class="add-item payslip-list d-flex justify-content-between">
												<div class="page-title">
													<h4>Payslip</h4>
												</div>
												<div class="page-btn d-flex align-items-center mt-3 mt-md-0">
													<div class="d-block d-sm-flex align-items-center">
														<a href="#" class="btn btn-added me-2"><i data-feather="mail"
																class="me-2"></i> Send Email</a>
														<a href="#" class="btn btn-added downloader mt-3 mb-3 m-sm-0"><i
																data-feather="download" class="me-2"></i> Download</a>
														<a href="#" class="btn btn-added printer ms-2"><i
																data-feather="printer" class="me-2"></i> Print
															Barcode</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-body custom-modal-body">
										<div class="card mb-0">
											<div class="card-body border-0">
												<div class="payslip-month d-flex">
													<div class="slip-logo">
														<img src="assets/img/logo-small.png" alt="Logo">
													</div>
													<div class="month-of-slip">
														<h4>Payslip for the Month of Sep 2023</h4>
													</div>
												</div>

												<div class="emp-details d-flex">
													<div class="emp-name-id">
														<h6>Emp Name : <span>Herald james</span></h6>
														<h6>Emp Id : <span>POS1234</span></h6>
													</div>
													<div class="emp-location-info">
														<h6>Location : <span>USA</span></h6>
														<h6>Pay Period : <span>Sep 2023</span></h6>
													</div>
												</div>

												<div class="row">
													<div class="table-responsive">
														<table class="w-100">
															<thead>
																<tr class="paysilp-table-border">
																	<th colspan="2">Earnings</th>
																	<th colspan="2">Deduction</th>
																	<thead>
																		<tr class="paysilp-table-border">
																			<th>Pay Type</th>
																			<th>Amount</th>
																			<th>Pay Type</th>
																			<th>Amount</th>
																		</tr>
																	</thead>
																</tr>
															</thead>
															<tbody class="paysilp-table-borders">
																<tr>
																	<td>Basic Salary</td>
																	<td>$32,000</td>
																	<td>PF</td>
																	<td>0.00</td>
																</tr>
																<tr>
																	<td>HRA Allowance</td>
																	<td>0.00</td>
																	<td>Professional Tax</td>
																	<td>0.00</td>
																</tr>
																<tr>
																	<td>Conveyance</td>
																	<td>0.00</td>
																	<td>TDS</td>
																	<td>0.00</td>
																</tr>
																<tr>
																	<td>Medical Allowance</td>
																	<td>0.00</td>
																	<td>Loans & Others</td>
																	<td>0.00</td>
																</tr>
																<tr>
																	<td>Bonus</td>
																	<td>0.00</td>
																	<td>Bonus</td>
																	<td>0.00</td>
																</tr>
																<tr class="payslip-border-bottom">
																	<th>Total Earnings</th>
																	<td>$32,000</td>
																	<th>Total Earnings</th>
																	<td>0.00</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="emp-details d-flex justify-content-start">
														<div class="emp-name-id pay-slip-salery">
															<h6>Net Salary</h6>
															<span>Inwords</span>
														</div>
														<div class="emp-location-info pay-slip-salery">
															<h6>$32,000</h6>
															<span>Thirty Two Thousand Only</span>
														</div>
													</div>
													<div class="product-name-slip text-center">
														<h4>DreamsPOS</h4>
														<p>81, Randall Drive,Hornchurch <br>
															RM126TA.</p>
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

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Sweetalert 2 -->
	<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
	<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>


</body>

</html>