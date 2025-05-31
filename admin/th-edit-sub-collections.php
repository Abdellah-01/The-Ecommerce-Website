<?php
require 'session.php';
require 'dbcon.php';

// Initialize variables
$collection_name = '';
$label = '';
$sno = '';

// Check if view_id parameter exists
if(isset($_GET['view_id'])) {
    $sno = $_GET['view_id'];
    
    // Fetch the record to edit
    $query = "SELECT * FROM sub_featured_collections WHERE sno = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $sno);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $collection_name = $row['collection_name'];
        $label = $row['label'];
    } else {
        header("Location: th-sub-collections.php");
        exit();
    }
}

// Handle form submission
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sno = $_POST['sno'];
    $collection_name = $_POST['collection_name'];
    $label = $_POST['label'];
    
    // Update the record
    $query = "UPDATE sub_featured_collections SET collection_name = ?, label = ? WHERE sno = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ssi", $collection_name, $label, $sno);
    
    if($stmt->execute()) {
        $_SESSION['success'] = "Sub-collection updated successfully";
        header("Location: th-sub-collections.php");
        exit();
    } else {
        $_SESSION['error'] = "Error updating sub-collection";
    }
}
?>

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
        <div class="whirly-loader"></div>
    </div>

    <div class="main-wrapper">
        <?php require "th-header.php"; ?>
        <?php require "th-sidebard.php"; ?>

        <div class="page-wrapper">
            <div class="content settings-content">
                <div class="row">
                    <div class="settings-page-wrap">
                        <div class="setting-title">
                            <h4>Edit Sub-Collection</h4>
                        </div>

                        <form method="POST" action="th-edit-sub-collections.php">
                            <input type="hidden" name="sno" value="<?php echo htmlspecialchars($sno); ?>">
                            
                            <div class="row variant-row">
                                <div class="col-lg-4 col-sm-6 col-12">
                                    <div class="input-blocks add-product">
                                        <label>Collection</label>
                                        <select class="select" name="collection_name" required>
                                            <option value="">Select any one</option>
                                            <?php
                                            $sqsl = mysqli_query($con, "SELECT * FROM sub_catagory");
                                            while($row_option = mysqli_fetch_array($sqsl)) {
                                                $selected = ($row_option['sub_catagory_name'] == $collection_name) ? 'selected' : '';
                                                echo '<option value="'.htmlspecialchars($row_option['sub_catagory_name']).'" '.$selected.'>'.htmlspecialchars($row_option['sub_catagory_name']).'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6 col-12">
                                    <div class="input-blocks add-product">
                                        <label>Tag Line</label>
                                        <input type="text" name="label" value="<?php echo htmlspecialchars($label); ?>" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3" style="margin-bottom:25px;">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-submit">Update Collection</button>
                                    <a href="sub_collections.php" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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

    <!-- Add other JS files as needed -->
</body>
</html>