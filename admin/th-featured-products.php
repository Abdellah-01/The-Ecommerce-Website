<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<title>Abdellah | Admin Panel</title>

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<!-- animation CSS -->
<link rel="stylesheet" href="assets/css/animate.css">

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

<!-- Font Awesome for custom multi-select -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
/* Custom Multi Select */
.sd-multiSelect {
    position: relative;
    margin-bottom: 20px;
}

.sd-multiSelect .ms-choice {
    position: relative;
    width: 100%;
    background: transparent;
    font-size: 15px;
    height: auto;
    min-height: 44px;
    padding: 0.5rem 0.85rem;
    line-height: 1.5;
    border-radius: 4px;
    cursor: pointer;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 5px;
    border: 1px solid #00000029;
    color: #5b6670;
}

.placeholder {
    background-color: transparent !important;
}

.sd-multiSelect .ms-choice:after {
    content: "\f078";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 14px;
    color: #666;
}

.sd-multiSelect .ms-choice:focus {
    border-color: #ff7f27;
    outline: none;
    box-shadow: 0 0 0 2px rgba(255, 127, 39, 0.2);
}

.sd-multiSelect .ms-drop {
    position: absolute;
    width: 100%;
    background: #fff;
    border: 1px solid #e5e5e5;
    border-radius: 4px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    margin-top: 5px;
    display: none;
    max-height: 300px;
    overflow-y: auto;
}

/* Search box */
.search-box {
    padding: 10px;
    position: sticky;
    top: 0;
    background: white;
    z-index: 1;
    border-bottom: 1px solid #eee;
}

.search-box input {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
}

.search-box input:focus {
    outline: none;
    border-color: #ff7f27;
}

.sd-multiSelect .ms-drop ul {
    list-style: none;
    padding: 0 10px 10px;
    margin: 0;
}

.sd-multiSelect .ms-drop li {
    position: relative;
    padding: 8px 10px;
    margin-bottom: 2px;
    cursor: pointer;
    display: flex;
    align-items: center;
}

.sd-multiSelect .ms-drop li:hover {
    background-color: #f5f5f5;
}

.sd-multiSelect .ms-drop li input[type="checkbox"] {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

.sd-multiSelect .ms-drop li label {
    cursor: pointer;
    display: flex;
    align-items: center;
    width: 100%;
    margin: 0;
}

.sd-multiSelect .ms-drop li .checkmark {
    position: relative;
    height: 18px;
    width: 18px;
    min-width: 18px;
    background-color: #fff;
    border: 2px solid #ff7f27;
    border-radius: 3px;
    margin-right: 10px;
}

.sd-multiSelect .ms-drop li input:checked ~ .checkmark {
    background-color: #ff7f27;
}

.sd-multiSelect .ms-drop li .checkmark:after {
    content: "";
    position: absolute;
    display: none;
    left: 5px;
    top: 1px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}

.sd-multiSelect .ms-drop li input:checked ~ .checkmark:after {
    display: block;
}

/* Selected items display */
.selected-items {
    display: flex;
    flex-wrap: wrap;
    gap: 5px;
    width: calc(100% - 20px);
}

.selected-item {
    background-color: #ff7f27;
    color: white;
    padding: 4px 8px;
    font-size: 13px;
    display: flex;
    align-items: center;
    border-radius: 3px;
}

.selected-item .remove-item {
    margin-left: 5px;
    cursor: pointer;
    font-size: 12px;
}

.placeholder {
    color: #999;
    margin-right: auto;
}

.no-results {
    padding: 10px;
    color: #666;
    text-align: center;
    font-style: italic;
}

/* Existing styles */
.select2-selection__choice__display {
    color: black !important;
}

.select2-selection {
    background: transparent !important;
}

.select2-selection__choice__remove {
    background: #B62625 !important;
    color: white !important;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #ffffff00 !important;
}

/* DataTables customization */
.dataTables_wrapper .dataTables_length select {
    border: 1px solid #e5e5e5;
    border-radius: 4px;
    padding: 5px 10px;
}

.dataTables_wrapper .dataTables_filter input {
    border: 1px solid #e5e5e5;
    border-radius: 4px;
    padding: 5px 10px;
    margin-left: 10px;
}

.dataTables_wrapper .dataTables_paginate .paginate_button {
    padding: 5px 10px;
    border: 1px solid #e5e5e5;
    border-radius: 4px;
    margin: 0 2px;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background: #ff7f27;
    color: white !important;
    border-color: #ff7f27;
}

.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background: #e5e5e5;
    color: #333 !important;
    border-color: #e5e5e5;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
    background: #e66a0a;
    color: white !important;
    border-color: #e66a0a;
}
</style>

</head>

<body>

<div id="global-loader">
    <div class="whirly-loader"> </div>
</div>

<!-- Main Wrapper -->
<div class="main-wrapper">

<!-- Header -->
<?php require "th-header.php"; ?>
<!-- /Header -->

<!-- Sidebar -->
<?php require "th-sidebard.php"; ?>
<!-- /Sidebar -->

<div class="page-wrapper">
<div class="content settings-content">

<div class="row">
<div class="settings-page-wrap">
    <form action="feather_products.php" method="POST">
        <div class="setting-title">
            <h4>Featured Products</h4>
        </div>
        <div class="form-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Collection name</label>
                        <input type="text" class="form-control" name="collection_name" placeholder="Enter label">
                    </div>
                    <div class="col-md-8">
                        <div class="sd-multiSelect form-group">
                            <label for="product-select" class="form-label">Select Products</label>
                            <div class="ms-choice" id="product-select-trigger">
                                <span class="placeholder">Select products...</span>
                                <div class="selected-items" id="selected-products-container"></div>
                            </div>
                            <div class="ms-drop" id="product-select-dropdown">
                                <div class="search-box">
                                    <input type="text" id="product-search" placeholder="Search products...">
                                </div>
                                <ul id="products-list">
                                    <?php
                                    include 'dbcon.php';
                                    $sqsl = mysqli_query($con, "SELECT * FROM product");
                                    while($row = mysqli_fetch_array($sqsl)) { 
                                    ?>
                                    <li>
                                        <input type="checkbox" id="product-<?php echo $row['product_id']; ?>" value="<?php echo $row['product_id']; ?>">
                                        <label for="product-<?php echo $row['product_id']; ?>">
                                            <span class="checkmark"></span>
                                            <span><?php echo htmlspecialchars($row['product_title']); ?></span>
                                        </label>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <div class="no-results" style="display: none;">No matching products found</div>
                            </div>
                            <select multiple id="product-select" name="product_id[]" class="sd-CustomSelect" style="display: none;">
                                <?php
                                $sqsl = mysqli_query($con, "SELECT * FROM product");
                                while($row = mysqli_fetch_array($sqsl)) { 
                                ?>
                                <option value="<?php echo $row['product_id']; ?>"><?php echo htmlspecialchars($row['product_title']); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-5">
                        <label class="form-label">Link</label>
                        <select class="form-control" id="myLink" name="view_link">
                            <option value="">Select Category</option>
                            <?php
                            include 'dbcon.php';
                            $sqsl = mysqli_query($con, "SELECT * FROM catagory");
                            while($row = mysqli_fetch_array($sqsl)) { 
                            ?>
                            <option value="<?php echo $row['catagory_name']; ?>"><?php echo $row['catagory_name']; ?></option>
                            <?php } ?>                    
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="settings-bottom-btn">
            <button type="button" class="btn btn-cancel me-2">Cancel</button>
            <button type="submit" class="btn btn-submit">Save Changes</button>
        </div>
    </form>
</div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table datanew" id="featuredProductsTable">
                <thead>
                    <tr>
                        <th class="no-sort">
                            <label class="checkboxs">
                                <input type="checkbox" id="select-all">
                                <span class="checkmarks"></span>
                            </label>
                        </th>
                        <th>Collection</th>
                        <th>Product Name</th>
                        <th>Category Link</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'dbcon.php';
                    $collections = mysqli_query($con, "SELECT * FROM feature_products");
                    while($row = mysqli_fetch_array($collections)) { 
                        $sqls = mysqli_query($con, "SELECT * FROM product WHERE product_id='$row[product_id]' LIMIT 1");
                        $products = mysqli_fetch_array($sqls);
                    ?>
                    <tr>
                        <td>
                            <label class="checkboxs">
                                <input type="checkbox">
                                <span class="checkmarks"></span>
                            </label>
                        </td>
                        <td><?php echo htmlspecialchars($row['collection_name']); ?></td>
                        <td><?php echo htmlspecialchars($products['product_title']); ?></td>
                        <td><?php echo htmlspecialchars($row['view_link'] ?? 'N/A'); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div> <!-- /content -->
</div> <!-- /page-wrapper -->
</div> <!-- /main-wrapper -->

<!-- jQuery -->
<script src="assets/js/jquery-3.7.1.min.js"></script>

<!-- Other JS files -->
<script src="assets/js/feather.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
<script src="assets/js/theme-script.js"></script>
<script src="assets/js/script.js"></script>

<script>
$(document).ready(function () {
    // Initialize DataTable first with proper options
    var dataTable = $('#featuredProductsTable').DataTable({
        "columnDefs": [{
            "targets": 'no-sort',
            "orderable": false
        }],
        "language": {
            "search": "_INPUT_",
            "searchPlaceholder": "Search...",
            "lengthMenu": "Show _MENU_ entries",
            "paginate": {
                "previous": "<i class='fas fa-chevron-left'></i>",
                "next": "<i class='fas fa-chevron-right'></i>"
            }
        },
        "dom": "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
               "<'row'<'col-sm-12'tr>>" +
               "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        "drawCallback": function() {
            $('.dataTables_paginate > .pagination').addClass('pagination-sm');
        }
    });

    // Initialize custom multi-select
    const selectTrigger = $('#product-select-trigger');
    const selectDropdown = $('#product-select-dropdown');
    const hiddenSelect = $('#product-select');
    const selectedItemsContainer = $('#selected-products-container');
    const optionsList = $('#products-list');
    const searchInput = $('#product-search');
    const noResults = $('.no-results');

    // Track selected options in order
    let selectedOptions = [];

    // Toggle dropdown
    selectTrigger.on('click', function (e) {
        e.stopPropagation();
        selectDropdown.toggle();
        $('.ms-drop').not(selectDropdown).hide();
        if (selectDropdown.is(':visible')) {
            searchInput.focus();
        }
    });

    // Close dropdown when clicking outside
    $(document).on('click', function () {
        selectDropdown.hide();
    });

    // Prevent dropdown close when clicking inside
    selectDropdown.on('click', function (e) {
        e.stopPropagation();
    });

    // Handle option selection
    selectDropdown.find('input[type="checkbox"]').on('change', function () {
        const value = $(this).val();
        const text = $(this).next('label').find('span:last').text();

        if ($(this).is(':checked')) {
            // Add to selected options if not already there
            if (!selectedOptions.some(opt => opt.value === value)) {
                selectedOptions.push({ value, text });
            }
        } else {
            // Remove from selected options
            selectedOptions = selectedOptions.filter(opt => opt.value !== value);
        }

        // Update hidden select
        hiddenSelect.val(selectedOptions.map(opt => opt.value));

        // Update UI
        updateSelectedItemsDisplay();

        // Hide placeholder if items are selected
        if (selectedOptions.length > 0) {
            selectTrigger.find('.placeholder').hide();
        } else {
            selectTrigger.find('.placeholder').show();
        }
    });

    // Update the selected items display
    function updateSelectedItemsDisplay() {
        selectedItemsContainer.empty();

        selectedOptions.forEach(option => {
            selectedItemsContainer.append(`
                <div class="selected-item">
                    ${option.text}
                    <span class="remove-item" data-value="${option.value}">×</span>
                </div>
            `);
        });

        // Add click handler for remove buttons
        $('.remove-item').on('click', function (e) {
            e.stopPropagation();
            const value = $(this).data('value');

            // Uncheck the corresponding checkbox
            selectDropdown.find(`input[value="${value}"]`).prop('checked', false).trigger('change');
        });
    }

    // Search functionality
    searchInput.on('input', function () {
        const searchTerm = $(this).val().toLowerCase();
        let hasVisibleItems = false;

        optionsList.find('li').each(function () {
            const optionText = $(this).find('span:last').text().toLowerCase();
            if (optionText.includes(searchTerm)) {
                $(this).show();
                hasVisibleItems = true;
            } else {
                $(this).hide();
            }
        });

        if (hasVisibleItems) {
            noResults.hide();
        } else {
            noResults.show();
        }
    });

    // Initialize with any pre-selected options
    hiddenSelect.find('option:selected').each(function () {
        const value = $(this).val();
        const text = $(this).text();
        selectDropdown.find(`input[value="${value}"]`).prop('checked', true);

        if (!selectedOptions.some(opt => opt.value === value)) {
            selectedOptions.push({ value, text });
        }
    });

    if (selectedOptions.length > 0) {
        selectTrigger.find('.placeholder').hide();
        updateSelectedItemsDisplay();
    }

    // Cancel button functionality
    $('.btn-cancel').on('click', function() {
        // Clear form or redirect as needed
        window.location.href = window.location.href;
    });

    // Select all checkboxes in the table
    $('#select-all').on('change', function() {
        $('table tbody input[type="checkbox"]').prop('checked', $(this).prop('checked'));
    });
});
</script>

</body>
</html>