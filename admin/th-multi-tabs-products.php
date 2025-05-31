<!DOCTYPE html>
<html lang="en">
<?php require 'session.php'; ?>

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

	<!-- Summernote CSS -->
	<link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">

	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

	<!-- Datatable CSS -->
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Optional: Include Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>

	<div id="global-loader">
		<div class="whirly-loader"> </div>
	</div>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<?php require"th-header.php"; ?>
		<!-- /Header -->

		<!-- Sidebar -->
		<?php require"th-sidebard.php"; ?>
		<!-- /Sidebar -->

		<div class="page-wrapper">
			<div class="content settings-content">
				
				<div class="row">
					<div class="settings-page-wrap">

									<div class="setting-title">
										<h4>Multi Tabs Products</h4>
									</div>
									<div id="form-container">
    <!-- Dropdowns will be dynamically added here -->
</div>

<!-- <div class="mt-3">
    <button type="button" class="btn btn-submit" onclick="addSingleDropdown()">Add New Collections</button>
</div> -->






<!-- Variant Row -->    <form method="POST" action="multi_collection.php">

<div class="row variant-row">



<div class="col-lg-4 col-sm-6 col-12">
<div class="input-blocks add-product">
<label>Label Name</label>
<input type="text" name="label_name" class="form-control">


</div></div>
<div class="col-lg-4 col-sm-6 col-12">
<div class="input-blocks add-product">
<label>Collection Name</label>
<select class="select" name="collection_name">
<option value="">select any one</option>

	<?php
    include 'dbcon.php';

    $sqsl=mysqli_query($con, "select * from catagory  " );
    while($row=mysqli_fetch_array($sqsl))
    { ?>
							<option value="<?php echo "$row[catagory_name]"; ?>"><?php echo "$row[catagory_name]"; ?></option>
							<?php }?>
						</select>


</div></div>

</div>


<!-- Add Button Row -->
<div class="row mt-3" style="margin-bottom:25px;">
<div class="col-12">
<button  class="btn btn-submit">Add New Collection</button>
</form>


							</div>
				</div>
				
				
			</div>
			
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
									<th>Label </th>

										<th>Sub Collection</th>
										
										<th class="no-sort">Action</th>
									</tr>
								</thead>
								<tbody>
									 <?php
include 'dbcon.php';

$sqsl = mysqli_query($con, "SELECT * FROM multi_tabs");
while ($row = mysqli_fetch_array($sqsl)) { 
?><tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
					<td><?php echo htmlspecialchars($row['label_name']); ?></td>

		<td>  <?php echo htmlspecialchars($row['collection_name']); ?></td>
<td class="action-table-data">
											<div class="edit-delete-action">
												
											<a href="delete_multi_collection.php?id=<?php echo $row['sno']; ?>">
													<i data-feather="trash-2" class="feather-trash-2" onclick="deleteVariant(this)"></i>
												</a>

											</div>

										</td>
									</tr>
									</tbody><?php } ?>
									
								</tbody>
							</table>
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

<script>
let dropdownCount = 0;

function addSingleDropdown() {
    dropdownCount++;
    const container = document.getElementById("form-container");

    const dropdownHTML = `
        <div class="row align-items-end mb-3" id="dropdown-${dropdownCount}">
            <div class="col-md-11">
                <label class="form-label">Collection ${dropdownCount}</label>
                <select class="form-control" name="collection_${dropdownCount}">
                    <option value="">Select Option</option>
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                </select>
            </div>
            <div class="col-md-1 d-flex justify-content-end align-items-start">
                <button type="button" class="btn btn-sm btn-danger mt-4" onclick="removeDropdown('dropdown-${dropdownCount}')">
                    &#x2715;
                </button>
            </div>
        </div>
    `;

    container.insertAdjacentHTML('beforeend', dropdownHTML);
}

function removeDropdown(id) {
    const row = document.getElementById(id);
    if (row) {
        row.remove();
    }
}
</script>


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

	<!-- Summernote JS -->
	<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Sticky-sidebar -->
	<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
	<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

	<!-- Sweetalert 2 -->
	<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
	<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>


</body>

</html></html>