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
										<h4>Announcement bar</h4>
									</div>
									<div id="form-container">
								<form action="anouncement_backent.php" method="POST">
										<div class="row align-items-end mb-3">
											<div class="col-md-6">
												<label class="form-label">label</label>
												<input type="text" class="form-control" name="label">
											</div>
											<div class="col-md-6">
												<label class="form-label">Link</label>
												<input type="text" class="form-control" name="link">
											</div>
										</div>
									</div>



									<div class="settings-bottom-btn">
										<button type="button" class="btn btn-cancel me-2">Cancel</button>
										<button type="submit" class="btn btn-submit">Add Announcement</button>
									</div>
								</form>
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
										
										<th class="no-sort">Action</th>
									</tr>
								</thead>
								<tbody>
									 <?php
include 'dbcon.php';

$sqsl = mysqli_query($con, "SELECT * FROM announcement_bar");
while ($row = mysqli_fetch_array($sqsl)) { 
?><tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
					<td><?php echo htmlspecialchars($row['label']); ?></td>


<td class="action-table-data">
											<div class="edit-delete-action">
												
											<a href="delete_announcement.php?id=<?php echo $row['sno']; ?>">
													<i data-feather="trash-2" class="feather-trash-2" onclick="deleteVariant(this)"></i>
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
function addAnnouncement() {
    const container = document.getElementById("form-container");

    const row = document.createElement("div");
    row.className = "row align-items-end mb-3";

    row.innerHTML = `
        <div class="col-md-6">
            <label class="form-label">Label</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-5">
            <label class="form-label">Link</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-1 text-end">
            <button type="button" class="btn btn-danger" onclick="this.closest('.row').remove()">
                <i class="bi bi-trash"></i>
            </button>
        </div>
    `;

    container.appendChild(row);
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

</html>