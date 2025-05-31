<!DOCTYPE html>
<html lang="en">
<?php
// Database connection
include 'dbcon.php';
?>
<?php require 'session.php';  ?>
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

<!-- Feathericon CSS -->
<link rel="stylesheet" href="assets/css/feather.css">

<!-- Select2 CSS -->
<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<!-- Bootstrap Tagsinput CSS -->
<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

<!-- Datatable CSS -->
<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<!-- Add in <head> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

  
    <style>
        /* General Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;

            padding: 0;
            margin: 0;
        }
        
        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        /* Form Styles */
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
        }
        
        .form-control {
            width: 100%;
            padding: 10px 15px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: border-color 0.3s;
        }
        
        .form-control:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        
        /* Quill Editor Customization */
        #editor {
            height: 300px;
            background: #fff;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        .ql-toolbar {
            border-radius: 4px 4px 0 0;
            background-color: #f8f9fa;
            border-bottom: 1px solid #ddd;
        }
        
        .ql-container {
            border-radius: 0 0 4px 4px;
        }
        
        /* File Input Styling */
        input[type="file"] {
            padding: 10px;
            background: #f8f9fa;
            border: 1px dashed #ddd;
            border-radius: 4px;
            width: 100%;
        }
        
        /* Button Styles */
        button[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            margin: 30px auto 0;
            width: 200px;
        }
        
        button[type="submit"]:hover {
            background-color: #2980b9;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                margin: 15px;
                padding: 15px;
            }
            
            h1 {
                font-size: 24px;
            }
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
<h4>New Product</h4>
<h6>Create new product</h6>
</div>
</div>
<ul class="table-top-head">
<li>
<div class="page-btn">
<a href="home.php" class="btn btn-secondary"><i data-feather="arrow-left"
class="me-2"></i>Back to Product</a>
</div>
</li>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
data-feather="chevron-up" class="feather-chevron-up"></i></a>
</li>
</ul>

</div>
<!-- /add -->
<form method="post" action="product_add.php">
<div class="card">
<div class="card-body add-product pb-0">
<div class="accordion-card-one accordion" id="accordionExample">
<div class="accordion-item">
<div class="accordion-header" id="headingOne">
<div class="accordion-button" data-bs-toggle="collapse"
data-bs-target="#collapseOne" aria-controls="collapseOne">
<div class="addproduct-icon">
<h5><i data-feather="info" class="add-info"></i><span>Product
Information</span></h5>
<a href="javascript:void(0);"><i data-feather="chevron-down"
class="chevron-down-add"></i></a>
</div>
</div>
</div>
<div id="collapseOne" class="accordion-collapse collapse show"
aria-labelledby="headingOne" data-bs-parent="#accordionExample">
<div class="accordion-body">
<div class="row">
<!-- Row 1: Product Name and SKU -->
<div class="col-lg-6 col-sm-12 mb-3">
<label class="form-label">Product Name</label>
<input type="text" name="product_title" class="form-control"
placeholder="Enter product name">
</div>

<div class="col-lg-6 col-sm-12 mb-3">
<label class="form-label">Product id</label>
<div class="input-group">
<input type="text" class="form-control" name="product_id" id="skuInput"
placeholder="Auto-generated SKU">
<button type="button" class="btn btn-primary"
onclick="generateSKU()">Generate Code</button>
</div>
</div>
</div>

<!-- Row 2: WYSIWYG Text Editor -->
<div class="row">
<div class="col-12 mb-3">
<label class="form-label">Product Description</label>

<!-- <div id="editor"></div> -->
                <!-- Hidden input to hold HTML content -->
                <!-- <input type="hidden" name="emailMessage" id="emailMessage"> -->
                            <textarea placeholder="Type here" name="description" class="form-control" rows="10"></textarea>

<!-- <div id="editor" name="description" style="height: 300px;"></div> -->
</div>
</div>

<div class="addservice-info">
<div class="row">
<div class="col-lg-4 col-sm-6 col-12">
<div class="mb-3 add-product">
<div class="add-newplus">
<label class="form-label">Category</label>

</div>
<select id="category"  class="select"  name="category">
<option value="">Select Category</option>
<?php
$categories = mysqli_query($con, "SELECT * FROM catagory");
while($cat = mysqli_fetch_array($categories)) {
echo '<option value="'.$cat['catagory_name'].'">'.$cat['catagory_name'].'</option>';
}
?>
</select>
</div>
</div>
<div class="col-lg-4 col-sm-6 col-12">
<div class="mb-3 add-product">
<label class="form-label">Sub Category</label>
<select id="subcategory" class="select" name="subcategory" disabled>
<option value="">Select Subcategory</option>
</select>
</div>
</div>
<div class="col-lg-4 col-sm-6 col-12">
<label class="form-label">Product Type</label>
<input type="text" name="product_type" class="form-control"
placeholder="Enter product name">

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="accordion-card-one accordion" id="accordionExample2">
<div class="accordion-item">
<div class="accordion-header" id="headingTwo">
<div class="accordion-button" data-bs-toggle="collapse"
data-bs-target="#collapseTwo" aria-controls="collapseTwo">
<div class="text-editor add-list">
<div class="addproduct-icon list icon">
<h5><i data-feather="life-buoy" class="add-info"></i><span>Pricing &
Stocks</span></h5>
<a href="javascript:void(0);"><i data-feather="chevron-down"
class="chevron-down-add"></i></a>
</div>
</div>
</div>
</div>
<div id="collapseTwo" class="accordion-collapse collapse show"
aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
<div class="accordion-body">
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-home" role="tabpanel"
aria-labelledby="pills-home-tab">
<div class="row">
<div class="col-lg-4 col-sm-6 col-12">
<div class="input-blocks add-product">
<label>Price</label>
<input type="text" name="regular_price" class="form-control">
</div>
</div>
<div class="col-lg-4 col-sm-6 col-12">
<div class="input-blocks add-product">
<label>Compare-at-Price</label>
<input type="text" name="offer_price" class="form-control">
</div>
</div>
<!-- <div class="col-lg-4 col-sm-6 col-12">
<div class="input-blocks add-product">
<label>Cost Per Item</label>
<input type="text"  class="form-control">
</div>
</div> -->
</div>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="btn-addproduct mb-4">
<button type="button" class="btn btn-cancel me-2">Cancel</button>
<button type="submit" class="btn btn-submit">Save Product</button>
</div>
</div>
</form>
<!-- /add -->

</div>
</div>
</div>
<!-- /Main Wrapper -->

<!-- Add Adjustment -->
<div class="modal fade" id="add-units">
<div class="modal-dialog modal-dialog-centered stock-adjust-modal">
<div class="modal-content">
<div class="page-wrapper-new p-0">
<div class="content">
<div class="modal-header border-0 custom-modal-header">
<div class="page-title">
<h4>Add Variation Attribute</h4>
</div>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body custom-modal-body">
<div class="row">
<div class="col-lg-12">
<div class="input-blocks">
<label>Attribute Name</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-lg-12">
<div class="input-blocks">
<label>Add Value</label>
<input type="text" class="form-control">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<ul class="nav user-menu">
<li class="nav-item nav-searchinputs">
<div class="top-nav-search">
<form action="#" class="dropdown">
<div class="searchinputs list dropdown-toggle"
id="dropdownMenuClickable2" data-bs-toggle="dropdown"
data-bs-auto-close="false">
<input type="text" placeholder="Search">
<i data-feather="search" class="feather-16 icon"></i>
<div class="search-addon d-none">
<span><i data-feather="x-circle"
class="feather-14"></i></span>
</div>
</div>
<div class="dropdown-menu search-dropdown idea"
aria-labelledby="dropdownMenuClickable2">
<div class="search-info">
<p>Black </p>
<p>Red</p>
<p>Green</p>
<p>S</p>
<p>M</p>
</div>
</div>
</form>
</div>
</li>
</ul>
</div>
<div class="col-lg-6">
<div class="modal-footer-btn popup">
<a href="javascript:void(0);" class="btn btn-cancel me-2"
data-bs-dismiss="modal">Cancel</a>
<a href="javascript:void(0);" class="btn btn-submit"
data-bs-dismiss="modal">Create Attribute</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /Add Adjustment -->

<!-- Add Category -->
<div class="modal fade" id="add-units-category">
<div class="modal-dialog modal-dialog-centered custom-modal-two">
<div class="modal-content">
<div class="page-wrapper-new p-0">
<div class="content">
<div class="modal-header border-0 custom-modal-header">
<div class="page-title">
<h4>Add New Category</h4>
</div>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body custom-modal-body">
<div class="mb-3">
<label class="form-label">Name</label>
<input type="text" class="form-control">
</div>
<div class="modal-footer-btn">
<a href="javascript:void(0);" class="btn btn-cancel me-2"
data-bs-dismiss="modal">Cancel</a>
<a href="add-product.php" class="btn btn-submit">Submit</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /Add Category -->

<!-- Add Brand -->
<div class="modal fade" id="add-units-brand">
<div class="modal-dialog modal-dialog-centered custom-modal-two">
<div class="modal-content">
<div class="page-wrapper-new p-0">
<div class="content">
<div class="modal-header border-0 custom-modal-header">
<div class="page-title">
<h4>Add New Brand</h4>
</div>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body custom-modal-body">
<div class="mb-3">
<label class="form-label">Brand</label>
<input type="text" class="form-control">
</div>
<div class="modal-footer-btn">
<a href="javascript:void(0);" class="btn btn-cancel me-2"
data-bs-dismiss="modal">Cancel</a>
<a href="add-product.php" class="btn btn-submit">Submit</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /Add Brand -->

<!-- Add Unit -->
<div class="modal fade" id="add-unit">
<div class="modal-dialog modal-dialog-centered custom-modal-two">
<div class="modal-content">
<div class="page-wrapper-new p-0">
<div class="content">
<div class="modal-header border-0 custom-modal-header">
<div class="page-title">
<h4>Add Unit</h4>
</div>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body custom-modal-body">
<div class="mb-3">
<label class="form-label">Unit</label>
<input type="text" class="form-control">
</div>
<div class="modal-footer-btn">
<a href="javascript:void(0);" class="btn btn-cancel me-2"
data-bs-dismiss="modal">Cancel</a>
<a href="add-product.php" class="btn btn-submit">Submit</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /Add Unit -->

<!-- Add Variatent -->
<div class="modal fade" id="add-variation">
<div class="modal-dialog modal-dialog-centered custom-modal-two">
<div class="modal-content">
<div class="page-wrapper-new p-0">
<div class="content">
<div class="modal-header border-0 custom-modal-header">
<div class="page-title">
<h4>Add Variation</h4>
</div>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body custom-modal-body">
<div class="modal-title-head people-cust-avatar">
<h6>Variant Thumbnail</h6>
</div>
<div class="new-employee-field">
<div class="profile-pic-upload">
<div class="profile-pic">
<span><i data-feather="plus-circle" class="plus-down-add"></i> Add Image</span>
</div>
<div class="mb-3">
<div class="image-upload mb-0">
<input type="file">
<div class="image-uploads">
<h4>Change Image</h4>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 pe-0">
<div class="mb-3">
<label class="form-label">Barcode Symbology</label>
<select class="select">
<option>Choose</option>
<option>Code34</option>
</select>
</div>
</div>
<div class="col-lg-6 pe-0">
<div class="mb-3">
<div class="input-blocks add-product list">
<label>Item Code</label>
<input type="text" class="form-control list" value="455454478844">
<button type="submit" class="btn btn-primaryadd">
Generate Code
</button>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="input-blocks image-upload-down">
<div class="image-upload download">
<input type="file">
<div class="image-uploads">
<img src="assets/img/download-img.png" alt="img">
<h4>Drag and drop a <span>file to upload</span></h4>
</div>
</div>
</div>
<div class="accordion-body">
<div class="text-editor add-list add">
<div class="col-lg-12">
<div class="add-choosen mb-3">
<div class="phone-img ms-0">
<img src="assets/img/products/phone-add-2.png" alt="image">
<a href="javascript:void(0);"><i data-feather="x"
class="x-square-add remove-product"></i></a>
</div>

<div class="phone-img">
<img src="assets/img/products/phone-add-1.png" alt="image">
<a href="javascript:void(0);"><i data-feather="x"
class="x-square-add remove-product"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 pe-0">
<div class="mb-3">
<label class="form-label">Quantity</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-lg-6 pe-0">
<div class="mb-3">
<label class="form-label">Quantity Alert</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-lg-6 pe-0">
<div class="mb-3">
<label class="form-label">Tax Type</label>
<select class="select">
<option>Choose</option>
<option>Direct</option>
<option>Indirect</option>
</select>
</div>
</div>
<div class="col-lg-6 pe-0">
<div class="mb-3">
<label class="form-label">Tax </label>
<select class="select">
<option>Choose</option>
<option>Income Tax</option>
<option>Service Tax</option>
</select>
</div>
</div>
<div class="col-lg-12 pe-0">
<div class="mb-3">
<label class="form-label">Discount Type </label>
<select class="select">
<option>Choose</option>
<option>Percentage</option>
<option>Early Payment</option>
</select>
</div>
</div>
<div class="col-lg-12 pe-0">
<div>
<label class="form-label">Discount Value</label>
<input type="text" class="form-control">
</div>
</div>
</div>


<div class="modal-footer-btn">
<a href="javascript:void(0);" class="btn btn-cancel me-2"
data-bs-dismiss="modal">Cancel</a>
<a href="add-product.php" class="btn btn-submit">Submit</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /Add Variatent -->
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

<!-- JavaScript for SKU generation -->
<script>
function generateSKU() {
const randomSKU = 'SKU-' + Math.random().toString(36).substr(2, 9).toUpperCase();
document.getElementById('skuInput').value = randomSKU;
}


</script>
 <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    
    <!-- Initialize Quill -->
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow',
            placeholder: 'Write your message here...',
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline', 'strike'],
                    ['blockquote', 'code-block'],
                    [{ 'header': 1 }, { 'header': 2 }],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                    [{ 'script': 'sub'}, { 'script': 'super' }],
                    [{ 'indent': '-1'}, { 'indent': '+1' }],
                    [{ 'direction': 'rtl' }],
                    [{ 'size': ['small', false, 'large', 'huge'] }],
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'font': [] }],
                    [{ 'align': [] }],
                    ['link', 'image'],
                    ['clean']
                ]
            }
        });
        
        // Before submitting the form, copy HTML to hidden input
        document.querySelector('form').addEventListener('submit', function() {
            document.querySelector('#emailMessage').value = quill.root.innerHTML;
        });
    </script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

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

<!-- Bootstrap Tagsinput JS -->
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

<!-- Sweetalert 2 -->
<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<!-- Custom JS -->

<script src="assets/js/theme-script.js"></script>
<script src="assets/js/script.js"></script>

<!-- JavaScript -->


<script>
$(document).ready(function() {
// When category changes
$('#category').change(function() {
var category = $(this).val();

// Clear and disable subcategory dropdown
$('#subcategory').html('<option value="">Loading...</option>').prop('disabled', true);

if(category) {
// Fetch subcategories via AJAX
$.ajax({
url: 'fetch_subcategories.php',
type: 'GET',
data: {category: category},
success: function(data) {
$('#subcategory').html('<option value="">Select Subcategory</option>');

if(data.length > 0) {
$.each(data, function(key, value) {
$('#subcategory').append('<option value="'+value.sub_catagory_name+'">'+value.sub_catagory_name+'</option>');
});
$('#subcategory').prop('disabled', false);
} else {
$('#subcategory').html('<option value="">No subcategories found</option>');
}
},
error: function() {
$('#subcategory').html('<option value="">Error loading subcategories</option>');
}
});
}
});
});
</script>

<script>
function addVariant() {
const wrapper = document.getElementById('variant-wrapper');
const firstRow = wrapper.querySelector('.variant-row');
const newRow = firstRow.cloneNode(true);

// Reset input values
newRow.querySelectorAll('input').forEach(input => input.value = '');
newRow.querySelectorAll('select').forEach(select => select.selectedIndex = 0);

wrapper.appendChild(newRow);
}

function deleteVariant(button) {
const row = button.closest('.variant-row');
const wrapper = document.getElementById('variant-wrapper');

// Prevent deletion if it's the only row
if (wrapper.querySelectorAll('.variant-row').length > 1) {
wrapper.removeChild(row);
} else {
alert("At least one variant row must remain.");
}
}
</script>

<!-- image -->
<script>
document.getElementById('imageInput').addEventListener('change', function (event) {
const files = event.target.files;
const container = document.getElementById('imagePreviewContainer');

for (let i = 0; i < files.length; i++) {
const file = files[i];

if (file && file.type.startsWith('image/')) {
const reader = new FileReader();

reader.onload = function (e) {
const imageBlock = document.createElement('div');
imageBlock.className = 'phone-img position-relative';

imageBlock.innerHTML = `
<img src="${e.target.result}" alt="image" style="width:100px; height:auto; border-radius: 6px;">
<a href="javascript:void(0);" class="remove-product" title="Remove">
<i data-feather="x" class="x-square-add"></i>
</a>
`;

container.appendChild(imageBlock);

// Re-initialize Feather icons (if using Feather)
if (typeof feather !== 'undefined') {
feather.replace();
}

// Attach delete handler
imageBlock.querySelector('.remove-product').addEventListener('click', () => {
imageBlock.remove();
});
};

reader.readAsDataURL(file);
}
}

// Clear input to allow re-upload of same file
event.target.value = '';
});
</script>



</body>

</html>