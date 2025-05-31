<?php require 'session.php';  ?>
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

<!-- Datetimepicker CSS -->
<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

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
<h4>Coupons</h4>
<h6>Manage Your Coupons</h6>
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
<div class="page-btn">
<a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-units"><i
data-feather="plus-circle" class="me-2"></i>Add New Coupons</a>
</div>
</div>
<!-- /product list -->
<div class="card table-list-card">
<div class="card-body">
<div class="table-top">
<div class="search-set">
<div class="search-input">
<a href="" class="btn btn-searchset"><i data-feather="search"
class="feather-search"></i></a>
</div>
</div>
<div class="search-path">
<div class="d-flex align-items-center">
<a class="btn btn-filter" id="filter_search">
<i data-feather="filter" class="filter-icon"></i>
<span><img src="assets/img/icons/closes.svg" alt="img"></span>
</a>
<div class="layout-hide-box">
<a href="javascript:void(0);" class="me-3 layout-box"><i data-feather="layout"
class="feather-search"></i></a>
<div class="layout-drop-item card">
<div class="drop-item-head">
<h5>Want to manage datatable?</h5>
<p>Please drag and drop your column to reorder your table and enable see
option as you want.</p>
</div>
<ul>
<li>
<div
class="status-toggle modal-status d-flex justify-content-between align-items-center">
<span class="status-label"><i data-feather="menu"
		class="feather-menu"></i>Shop</span>
<input type="checkbox" id="option1" class="check" checked>
<label for="option1" class="checktoggle"></label>
</div>
</li>
<li>
<div
class="status-toggle modal-status d-flex justify-content-between align-items-center">
<span class="status-label"><i data-feather="menu"
		class="feather-menu"></i>Product</span>
<input type="checkbox" id="option2" class="check" checked>
<label for="option2" class="checktoggle"> </label>
</div>
</li>
<li>
<div
class="status-toggle modal-status d-flex justify-content-between align-items-center">
<span class="status-label"><i data-feather="menu"
		class="feather-menu"></i>Reference No</span>
<input type="checkbox" id="option3" class="check" checked>
<label for="option3" class="checktoggle"> </label>
</div>
</li>
<li>
<div
class="status-toggle modal-status d-flex justify-content-between align-items-center">
<span class="status-label"><i data-feather="menu"
		class="feather-menu"></i>Date</span>
<input type="checkbox" id="option4" class="check" checked>
<label for="option4" class="checktoggle"> </label>
</div>
</li>
<li>
<div
class="status-toggle modal-status d-flex justify-content-between align-items-center">
<span class="status-label"><i data-feather="menu"
		class="feather-menu"></i>Responsible Person</span>
<input type="checkbox" id="option5" class="check" checked>
<label for="option5" class="checktoggle"> </label>
</div>
</li>
<li>
<div
class="status-toggle modal-status d-flex justify-content-between align-items-center">
<span class="status-label"><i data-feather="menu"
		class="feather-menu"></i>Notes</span>
<input type="checkbox" id="option6" class="check" checked>
<label for="option6" class="checktoggle"> </label>
</div>
</li>
<li>
<div
class="status-toggle modal-status d-flex justify-content-between align-items-center">
<span class="status-label"><i data-feather="menu"
		class="feather-menu"></i>Quantity</span>
<input type="checkbox" id="option7" class="check" checked>
<label for="option7" class="checktoggle"> </label>
</div>
</li>
<li>
<div
class="status-toggle modal-status d-flex justify-content-between align-items-center">
<span class="status-label"><i data-feather="menu"
		class="feather-menu"></i>Actions</span>
<input type="checkbox" id="option8" class="check" checked>
<label for="option8" class="checktoggle"> </label>
</div>
</li>
</ul>
</div>
</div>
</div>
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
<i data-feather="zap" class="info-img"></i>
<select class="select">
<option>Choose Name</option>
<option>Coupons 21</option>
<option>First Offer</option>
<option>Offer 40</option>
<option>Subscription</option>
</select>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="input-blocks">
<i data-feather="box" class="info-img"></i>
<select class="select">
<option>Choose Type</option>
<option>Fixed</option>
<option>Percentage</option>
</select>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="input-blocks">
<i data-feather="calendar" class="info-img"></i>
<div class="input-groupicon">
<input type="text" class="datetimepicker" placeholder="Choose Date">
</div>
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
<table class="table  datanew">
<thead>
<tr>
<th class="no-sort">
<label class="checkboxs">
<input type="checkbox" id="select-all">
<span class="checkmarks"></span>
</label>
</th>
<th>Name</th>
<th>Code</th>
<th>Type</th>
<th>Discount</th>
<th>Created</th>
<th>Status</th>
<th class="no-sort">Action</th>
</tr>
</thead>
<tbody>

	   <?php
    include 'dbcon.php';

    $sqsl=mysqli_query($con, "select * from coupon " );
    while($row=mysqli_fetch_array($sqsl))
    { ?>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td><?php echo "$row[name]"; ?></td>
<td><span class="badge badge-bgdanger"><?php echo "$row[coupon_code]"; ?></span></td>
<td>
<?php echo "$row[type]"; ?></td>
<td><?php echo "$row[percentage]"; ?></td>

<td><?php echo "$row[inserted_date]"; ?></td>
<td><span class="badge badge-linesuccess">Active</span></td>
<td class="action-table-data">
<div class="edit-delete-action">
<a class="me-2 p-2" href="#" data-bs-toggle="modal"
data-bs-target="#edit-units">
<i data-feather="edit" class="feather-edit"></i>
</a>
<a class="confirm-text p-2" href="delete-coupons.php?id=<?php echo "$row[sno]"; ?>">
<i data-feather="trash-2" class="feather-trash-2"></i>
</a>
</div>

</td>
</tr>

<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
<!-- /product list -->
</div>
</div>
</div>
<!-- /Main Wrapper -->

<!-- Add coupons -->
<div class="modal fade" id="add-units">
<div class="modal-dialog modal-dialog-centered custom-modal-two">
<div class="modal-content">
<div class="page-wrapper-new p-0">
<div class="content">
<div class="modal-header border-0 custom-modal-header">
<div class="page-title">
<h4>Add Coupons</h4>
</div>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body custom-modal-body">
<form action="coupons.php">
<div class="row">
<div class="col-lg-6">
<div class="mb-3">
<label class="form-label">Name</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-lg-6">
<div class="mb-3">
<label class="form-label">Code</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-lg-6">
<div class="mb-3">
<label class="form-label">Type</label>
<select class="select">
<option>Choose Type</option>
<option>Fixed</option>
<option>Percentage</option>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="mb-3">
<label class="form-label">Discount</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-lg-12">
<div class="mb-3">
<label class="form-label"> Limit</label>
<input type="text" class="form-control">
<span class="unlimited-text">0 for Unlimited</span>
</div>

</div>
<div class="col-lg-6">
<div class="input-blocks">
<label>Start Date</label>

<div class="input-groupicon calender-input">
<i data-feather="calendar" class="info-img"></i>
<input type="text" class="datetimepicker form-control"
placeholder="Select Date">
</div>
</div>
</div>
<div class="col-lg-6">
<div class="input-blocks">
<label>End Date</label>

<div class="input-groupicon calender-input">
<i data-feather="calendar" class="info-img"></i>
<input type="text" class="datetimepicker form-control"
placeholder="Select Date">
</div>
</div>
</div>
<div class="input-blocks">
<div
class="status-toggle modal-status d-flex justify-content-between align-items-center mb-2">
<span class="status-label">All Products</span>
<div class="d-flex align-items-center">
<input type="checkbox" id="user4" class="check">
<label for="user4" class="checktoggle mb-0 me-1"></label>
<span class="customer-toggle">Once Per Customer</span>
</div>
</div>
<select class="select">
<option>Choose</option>
<option>Nike Jordan</option>
<option>Amazon Echo Dot</option>
</select>
</div>

<div class="input-blocks m-0">
<div
class="status-toggle modal-status d-flex justify-content-between align-items-center">
<span class="status-label">Status</span>
<input type="checkbox" id="user3" class="check" checked>
<label for="user3" class="checktoggle"> </label>
</div>
</div>
</div>


<div class="modal-footer-btn">
<button type="button" class="btn btn-cancel me-2"
data-bs-dismiss="modal">Cancel</button>
<button type="submit" class="btn btn-submit">Create Coupon</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /Add Coupons -->

<!-- Edit coupons -->
<div class="modal fade" id="edit-units">
<div class="modal-dialog modal-dialog-centered custom-modal-two">
<div class="modal-content">
<div class="page-wrapper-new p-0">
<div class="content">
<div class="modal-header border-0 custom-modal-header">
<div class="page-title">
<h4>Edit Coupons</h4>
</div>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body custom-modal-body">
<form action="coupons.php">
<div class="row">
<div class="col-lg-6">
<div class="input-blocks">
<label>Name</label>
<input type="text" value="Coupons 21">
</div>
</div>
<div class="col-lg-6">
<div class="input-blocks">
<label>Code</label>
<input type="text" value="Christmas">
</div>
</div>
<div class="col-lg-6">
<div class="input-blocks">
<label>Type</label>
<select class="select">
<option>Fixed</option>
<option>Percentage</option>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="input-blocks">
<label>Discount</label>
<input type="text" value="$20">
</div>
</div>
<div class="col-lg-12">
<div class="input-blocks">
<label>Limit</label>
<input type="text" value="04">
<span class="unlimited-text">0 for Unlimited</span>
</div>

</div>
<div class="col-lg-6">
<div class="input-blocks">
<label>Start Date</label>
<div class="input-groupicon calender-input">
<i data-feather="calendar" class="info-img"></i>
<input type="text" class="datetimepicker form-control"
placeholder="Select Date">
</div>
</div>
</div>
<div class="col-lg-6">
<div class="input-blocks">
<label>End Date</label>
<div class="input-groupicon calender-input">
<i data-feather="calendar" class="info-img"></i>
<input type="text" class="datetimepicker form-control"
placeholder="Select Date">
</div>
</div>
</div>
<div class="input-blocks">
<div
class="status-toggle modal-status d-flex justify-content-between align-items-center mb-2">
<span class="status-label">All Products</span>
<div class="d-flex align-items-center">
<input type="checkbox" id="user5" class="check">
<label for="user5" class="checktoggle mb-0 me-1"></label>
<span class="customer-toggle">Once Per Customer</span>
</div>
</div>
<select class="select">
<option>Nike Jordan</option>
<option>Amazon Echo Dot</option>
</select>
</div>

<div class="input-blocks m-0">
<div
class="status-toggle modal-status d-flex justify-content-between align-items-center">
<span class="status-label">Status</span>
<input type="checkbox" id="user6" class="check" checked>
<label for="user6" class="checktoggle"> </label>
</div>
</div>
</div>
<div class="modal-footer-btn">
<button type="button" class="btn btn-cancel me-2"
data-bs-dismiss="modal">Cancel</button>
<button type="submit" class="btn btn-submit">Save Changes</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /Edit Coupons -->

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

<!-- Sweetalert 2 -->
<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<!-- Custom JS -->
<script src="assets/js/theme-script.js"></script>
<script src="assets/js/script.js"></script>


</body>

</html>