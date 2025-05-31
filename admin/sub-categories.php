<?php require 'dbcon.php';  ?><?php
// Check if view_id parameter exists
if(isset($_GET['view_id'])) {
    $view_id = $_GET['view_id'];
    
    // Fetch the sale data from database
    $sql = "SELECT * FROM sub_catagory WHERE sno = $view_id";
    $result = mysqli_query($con, $sql);
    $sale_data = mysqli_fetch_assoc($result);
    
    // Set a flag to show the modal
    $show_modal = true;
} else {
    $show_modal = false;
}
?><?php require 'session.php';  ?><!DOCTYPE html>
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
							<h4>Sub Category</h4>
							<h6>Manage your Sub categories</h6>
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
						<a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-category"><i
								data-feather="plus-circle" class="me-2"></i>Add New Category</a>
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
											<i data-feather="zap" class="info-img"></i>
											<select class="select">
												<option>Choose Category</option>
												<option>Laptop</option>
												<option>Electronics</option>
												<option>Shoe</option>
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
									<div class="col-lg-3 col-sm-6 col-12">
										<div class="input-blocks">
											<i data-feather="stop-circle" class="info-img"></i>
											<select class="select">
												<option>Choose Status</option>
												<option>Active</option>
												<option>Inactive</option>
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
							<table class="table  datanew">
								<thead>
									<tr>
										<th class="no-sort">
											<label class="checkboxs">
												<input type="checkbox" id="select-all">
												<span class="checkmarks"></span>
											</label>
										</th>
										<th>Category</th>
										<th>Sub Category</th>
										<th>Image</th>

										<th>Created On</th>
										<th>Status</th>
										<th class="no-sort">Action</th>
									</tr>
								</thead>
								<tbody>
									   <?php
    include 'dbcon.php';

    $sqsl=mysqli_query($con, "select * from sub_catagory " );
    while($row=mysqli_fetch_array($sqsl))
    { ?><tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td><?php echo "$row[catagory_name]"; ?></td>
										<td><?php echo "$row[sub_catagory_name]"; ?></td>
<td>
  <img src="<?php echo htmlspecialchars($row['image']); ?>" style="width: 10%; max-width: 20%;">
</td>
										<td><?php
// Example date fetched from the database in yyyy-mm-dd format
$dateFromDB = $row['inserted_date'];

// Convert the date from yyyy-mm-dd to DateTime object
$dateTime = DateTime::createFromFormat('Y-m-d', $dateFromDB);

// Format the DateTime object to dd-mm-yyyy
$formattedDate = $dateTime->format('d-m-Y');

// Output the formatted date
$date = DateTime::createFromFormat('d-m-Y', $formattedDate);
echo $date->format('d M Y'); // Outputs: 03 OCT 2024?></td>
										<td><span class="badge badge-linesuccess">Active</span></td>
										<td class="action-table-data">
											<div class="edit-delete-action">
												<a class="me-2 p-2" href="sub-categories.php?view_id=<?php echo $row['sno']; ?>" >
													<i data-feather="edit" class="feather-edit"></i>
												</a>
												<a class="me-2 p-2" href="delete_sub_catagory.php?id=<?php echo "$row[sno]"; ?>">
													<i data-feather="trash-2" class="feather-trash-2"></i>
												</a>
												
											</div>

										</td>
									</tr>
									</tbody><?php } ?>
									
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

	<!-- Add Category -->
	<div class="modal fade" id="add-category">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Create Sub Category</h4>
							</div>
						<a href="category-list.php">	<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button></a>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="sub-create-list.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Category</label>
        <select name="category_name" class="form-control" required>
            <option value="">Select Category</option>
            <?php
            include 'dbcon.php';
            $sql = mysqli_query($con, "SELECT * FROM catagory");
            while($row = mysqli_fetch_array($sql)) { 
            ?>
                <option value="<?php echo htmlspecialchars($row['catagory_name']); ?>">
                    <?php echo htmlspecialchars($row['catagory_name']); ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Sub Category</label>
        <input type="text" name="sub_category_name" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <label class="form-label">Sub Category Image</label>
        <input type="file" name="sub_category_image" class="form-control" accept="image/*" required>
        <small class="text-muted">Max file size: 2MB (JPEG, PNG, JPG, GIF)</small>
    </div>
    
    <div class="modal-footer-btn">
        <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-submit">Create Sub Category</button>
    </div>
</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Category -->

	<!-- Edit Category -->
    <div class="modal fade <?php echo $show_modal ? 'show' : ''; ?>" id="add-sales-new" style="<?php echo $show_modal ? 'display: block; padding-right: 17px;' : ''; ?>">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Edit Category </h4>
							</div>

							<a href="category-list.php"><button  class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button></a>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="update_category.php" method="POST">
    <div class="mb-3">
        <label class="form-label">Category</label>
        <input type="text" class="form-control" name="catagory_name" value="<?php echo htmlspecialchars($sale_data['catagory_name'] ?? ''); ?>">
        <input type="hidden" name="sno" value="<?php echo htmlspecialchars($sale_data['sno'] ?? ''); ?>">
    </div>
    
    <div class="modal-footer-btn">
        <a href="category-list.php"><button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button></a>
        <button type="submit" class="btn btn-submit">Save Changes</button>
    </div>
</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Category -->
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