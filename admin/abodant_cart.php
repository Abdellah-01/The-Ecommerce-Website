<?php require 'dbcon.php';  ?><?php
// Check if view_id parameter exists
if(isset($_GET['view_id'])) {
$view_id = $_GET['view_id'];

// Fetch the sale data from database
$sql = "SELECT * FROM orders WHERE order_id = '$view_id'";
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
    <h4>Abandoned Cart List</h4>
    <h6>Manage Your Abandoned Cart</h6>
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
<a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-sales-new"><i
        data-feather="plus-circle" class="me-2"></i> Add New Sales</a>
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

        </div>

    </div>
    <div class="form-sort">
        <i data-feather="sliders" class="info-img"></i>
        <select class="select">
            <option>Sort by Date</option>
            <option>07 09 23</option>
            <option>21 09 23</option>
        </select>
    </div>
</div>
<!-- /Filter -->
<div class="card" id="filter_inputs">
    <div class="card-body pb-0">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="input-blocks">
                    <i data-feather="user" class="info-img"></i>
                    <select class="select">
                        <option>Choose Customer Name</option>
                        <option>Macbook pro</option>
                        <option>Orange</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-12">
                <div class="input-blocks">
                    <i data-feather="stop-circle" class="info-img"></i>
                    <select class="select">
                        <option>Choose Status</option>
                        <option>Computers</option>
                        <option>Fruits</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-12">
                <div class="input-blocks">
                    <i data-feather="file-text" class="info-img"></i>
                    <input type="text" placeholder="Enter Reference" class="form-control">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="input-blocks">
                    <i data-feather="stop-circle" class="info-img"></i>
                    <select class="select">
                        <option>Choose Payment Status</option>
                        <option>Computers</option>
                        <option>Fruits</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-12">
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
                <th>Customer Name</th>
                <th>Order ID</th>
                <th>Date</th>
                <th>Status</th>
                <th>Grand Total</th>
                <th>Payment Status</th>

                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody class="sales-list">
            <?php
include 'dbcon.php';

$sqsl = mysqli_query($con, "SELECT 
order_id, 
customer_fname, 
customer_lname, 
inserted_date, 
status, 
order_status, 
SUM(total_price) as total_price 
FROM orders 
WHERE order_status!='SUCCESS' 
GROUP BY order_id 
ORDER BY order_id DESC");
while($row=mysqli_fetch_array($sqsl))
{ 
    
    
    
    ?>


            <tr>
                <td>
                    <label class="checkboxs">
                        <input type="checkbox">
                        <span class="checkmarks"></span>
                    </label>
                </td>
                <td><?php echo "$row[customer_fname]"; ?> <?php echo "$row[customer_lname]"; ?></td>
                <td><?php echo "$row[order_id]"; ?></td>
                <td><?php
// Example date fetched from the database in yyyy-mm-dd format
$dateFromDB = $row['inserted_date'];

// Convert the date from yyyy-mm-dd to DateTime object
$dateTime = DateTime::createFromFormat('Y-m-d', $dateFromDB);

// Format the DateTime object to dd-mm-yyyy
$formattedDate = $dateTime->format('d-m-Y');

// Output the formatted date
$date = DateTime::createFromFormat('d-m-Y', $formattedDate);
echo $date->format('d M Y'); // Outputs: 03 OCT 2024?>

</td>
                <td><span class="<?php if ($row['status']=="Order Confirmed") {
                    echo "badge badge-bgsuccess";
                } else {
                    echo "badge badge-bgdanger";
                }
                    ?>"><?php echo "$row[status]"; ?></span></td>

                <td>₹<?php echo "$row[total_price]"; ?>.00</td>

                <td><span class="
                    <?php if ($row['order_status']=="SUCCESS") {
                    echo "badge badge-linesuccess";
                } else {
                    echo "badge badge-linedanger";
                }
                    ?>"><?php echo "$row[order_status]"; ?></span></td>

                <td class="text-center">
                    <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown"
                        aria-expanded="true">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
<a href="abodant_cart.php?view_id=<?php echo $row['order_id']; ?>" class="dropdown-item">
<i data-feather="eye" class="info-img"></i>View Sale
</a>
</li>
                        <li>
                            <a href="edit-sales.php" class="dropdown-item"
                                data-bs-toggle="modal" data-bs-target="#edit-sales-new"><i
                                    data-feather="edit" class="info-img"></i>Edit Sale</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item"
                                data-bs-toggle="modal" data-bs-target="#showpayment"><i
                                    data-feather="dollar-sign" class="info-img"></i>Show
                                Payments</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item"
                                data-bs-toggle="modal" data-bs-target="#createpayment"><i
                                    data-feather="plus-circle" class="info-img"></i>Create
                                Payment</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item"><i
                                    data-feather="download" class="info-img"></i>Download
                                pdf</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                class="dropdown-item confirm-text mb-0"><i
                                    data-feather="trash-2" class="info-img"></i>Delete Sale</a>
                        </li>
                    </ul>
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

<!--add popup -->
<div class="modal fade <?php echo $show_modal ? 'show' : ''; ?>" id="add-sales-new" style="<?php echo $show_modal ? 'display: block; padding-right: 17px;' : ''; ?>">
<div class="modal-dialog sales-details-modal">
<div class="modal-content">
<div class="page-wrapper details-blk">
<div class="content p-0">
<div class="page-header p-4 mb-0">
    <div class="add-item d-flex">
        <div class="page-title modal-datail">
            <h4>Sales Detail :<?php echo "$sale_data[order_id]"; ?></h4>
        </div>
      <!--  <div class="page-btn">
             <a href="#" class="btn btn-added" data-bs-toggle="modal"
                data-bs-target="#add-payroll-new"><i data-feather="plus-circle"
                    class="me-2"></i> Add New Sales</a>
        </div>-->
        <div class="page-btn"> 
            <a href="abodant_cart.php" class="btn btn-added" > Back</a>
        </div>
    </div>
    <ul class="table-top-head">
        <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><i
                    data-feather="edit" class="action-edit sales-action"></i></a>
        </li>
        <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img
                    src="assets/img/icons/pdf.svg" alt="img"></a>
        </li>
        <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img
                    src="assets/img/icons/excel.svg" alt="img"></a>
        </li>
        <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><i
                    data-feather="printer" class="feather-rotate-ccw"></i></a>
        </li>
    </ul>
</div>

<div class="card">
    <div class="card-body">
        <form action="sales-list.php">
            <div class="invoice-box table-height"
                style="max-width: 1600px;width:100%;overflow: auto;padding: 0;font-size: 14px;line-height: 24px;color: #555;">
                <div class="sales-details-items d-flex">
                    <div class="details-item">
                        <h6>Customer Info</h6>
                        <p><?php echo "$sale_data[customer_fname]"; ?> <?php echo "$sale_data[customer_lname]"; ?><br>
                            <?php echo "$sale_data[customer_email]"; ?><br>
                            <?php echo "$sale_data[customer_mobile]"; ?><br>
                            <?php echo "$sale_data[billing_address]"; ?> , <?php echo "$sale_data[billing_address2]"; ?>,<?php echo "$sale_data[city]"; ?> <?php echo "$sale_data[zipcode]"; ?>
                        </p>
                    </div>
                    <div class="details-item">
                        <h6>Company Info</h6>
                        <p>SRM University Final Project <br>By Abdur Rahman<br>
                            ao4318@srmist.edu.in<br>
                            1234567890<br>
                            Chennai
                        </p>
                    </div>
                    <div class="details-item">
                        <h6>Invoice Info</h6>
                        <p>Reference No: <?php echo "$sale_data[order_id]"; ?><br>
                        Payment Status: <?php echo "$sale_data[order_status]"; ?><br>
                        Order Status: <?php echo "$sale_data[status]"; ?><br>

                        </p>
                    </div>
                    <!-- <div class="details-item">
                        <h5><span><?php echo "$sale_data[order_id]"; ?></span><br> <?php echo "$sale_data[status]"; ?></h5>
                    </div> -->
                </div>
                <h5 class="order-text">Order Summary</h5>
                <div class="table-responsive no-pagination">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Qty</th>
                                <th>Purchase Price($)</th>
                                <th>Discount($)</th>
                                <th>Tax(%)</th>
                                <th>Tax Amount($)</th>
                                <th>Total Cost(%)</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
include 'dbcon.php';

$sqsl=mysqli_query($con, "select * from orders WHERE order_id='$sale_data[order_id]'" );
while($row=mysqli_fetch_array($sqsl))

{
    
    
$sqls1 = mysqli_query($con, "SELECT * FROM product_images WHERE product_id='$row[product_id]' order by id asc LIMIT 1");
$image = mysqli_fetch_array($sqls1);

?>
                            <tr>
                                <td>
                                    <div class="productimgname">
                                        <a href="javascript:void(0);"
                                            class="product-img stock-img">
                                            <img src="<?php echo "$image[image_path]"; ?>"
                                                alt="product">
                                        </a>
                                        <a href="javascript:void(0);"><?php echo "$row[product_title]"; ?></a>
                                    </div>
                                </td>
                                <td>

                                        <span><?php echo "$row[qty]"; ?></span>

                                </td>
                                <td>₹<?php echo "$row[price]"; ?></td>
                                <td>₹0.00</td>
                                <td>
                                    0.00
                                </td>
                                <td>₹0.00</td>
                                <td>₹<?php echo "$row[total_price]"; ?>.00</td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">

                <div class="row">
                    <div class="col-lg-6 ms-auto">
                        <div class="total-order w-100 max-widthauto m-auto mb-4">
                            <ul>
                                <li>
                                    <h4>Discount</h4>
                                    <h5>₹0.00</h5>
                                </li>
                                <li>
                                    <h4>Grand Total</h4>
                                    <h5><?php

$sql = "SELECT SUM(total_price) AS total FROM orders WHERE order_id='$sale_data[order_id]'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$sum = $row['total'];
echo " ₹$sum";
} else {
echo "₹0";
}
 ?>.00</h5>
                                </li>
                                <li>
                                    <h4>Paid</h4>
                                    <h5><?php

$sql = "SELECT SUM(amount) AS total FROM payment WHERE order_id='$sale_data[order_id]'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$sum1 = $row['total'];
echo " ₹$sum1";
} else {
echo "₹0";
}
 ?>.00</h5></h5>
                                </li>
                                <li>
                                    <h4>Due</h4>
                                    <h5><?php 
                                    $due=$sum-$sum1;
                                                    echo "₹$due";                                               
                                        ?></h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php if($show_modal): ?>
<div class="modal-backdrop fade show"></div>
<?php endif; ?>
<!-- /add popup -->

<!-- details popup -->
<div class="modal fade" id="sales-details-new">
<div class="modal-dialog sales-details-modal">
<div class="modal-content">
<div class="page-wrapper details-blk">
<div class="content p-0">
<div class="page-header p-4 mb-0">
    <div class="add-item d-flex">
        <div class="page-title modal-datail">
            <h4>Sales Detail : SL0101</h4>
        </div>
        <div class="page-btn">
            <a href="#" class="btn btn-added" data-bs-toggle="modal"
                data-bs-target="#add-payroll-new"><i data-feather="plus-circle"
                    class="me-2"></i> Add New Sales</a>
        </div>
    </div>
    <ul class="table-top-head">
        <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><i
                    data-feather="edit" class="action-edit sales-action"></i></a>
        </li>
        <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img
                    src="assets/img/icons/pdf.svg" alt="img"></a>
        </li>
        <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img
                    src="assets/img/icons/excel.svg" alt="img"></a>
        </li>
        <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><i
                    data-feather="printer" class="feather-rotate-ccw"></i></a>
        </li>
    </ul>
</div>

<div class="card">
    <div class="card-body">
        <form action="sales-list.php">
            <div class="invoice-box table-height"
                style="max-width: 1600px;width:100%;overflow: auto;padding: 0;font-size: 14px;line-height: 24px;color: #555;">
                <div class="sales-details-items d-flex">
                    <div class="details-item">
                        <h6>Customer Info</h6>
                        <p>walk-in-customer<br>
                            walk-in-customer@example.com<br>
                            123456780<br>
                            N45 , Dhaka
                        </p>
                    </div>
                    <div class="details-item">
                        <h6>Company Info</h6>
                        <p>DGT<br>
                            admin@example.com<br>
                            6315996770<br>
                            3618 Abia Martin Drive
                        </p>
                    </div>
                    <div class="details-item">
                        <h6>Invoice Info</h6>
                        <p>Reference<br>
                            Payment Status<br>
                            Status
                        </p>
                    </div>
                    <div class="details-item">
                        <h5><span>SL0101</span>Paid<br> Completed</h5>
                    </div>
                </div>
                <h5 class="order-text">Order Summary</h5>
                <div class="table-responsive no-pagination">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Qty</th>
                                <th>Purchase Price($)</th>
                                <th>Discount($)</th>
                                <th>Tax(%)</th>
                                <th>Tax Amount($)</th>
                                <th>Unit Cost($)</th>
                                <th>Total Cost(%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="productimgname">
                                        <a href="javascript:void(0);"
                                            class="product-img stock-img">
                                            <img src="assets/img/products/stock-img-02.png"
                                                alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Nike Jordan</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-quantity">
                                        <span class="quantity-btn">+<i
                                                data-feather="plus-circle"
                                                class="plus-circle"></i></span>
                                        <input type="text" class="quntity-input" value="2">
                                        <span class="quantity-btn"><i
                                                data-feather="minus-circle"
                                                class="feather-search"></i></span>
                                    </div>
                                </td>
                                <td>2000</td>
                                <td>500</td>
                                <td>
                                    0.00
                                </td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>1500</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="productimgname">
                                        <a href="javascript:void(0);"
                                            class="product-img stock-img">
                                            <img src="assets/img/products/stock-img-03.png"
                                                alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Apple Series 5 Watch</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-quantity">
                                        <span class="quantity-btn">+<i
                                                data-feather="plus-circle"
                                                class="plus-circle"></i></span>
                                        <input type="text" class="quntity-input" value="2">
                                        <span class="quantity-btn"><i
                                                data-feather="minus-circle"
                                                class="feather-search"></i></span>
                                    </div>
                                </td>
                                <td>3000</td>
                                <td>400</td>
                                <td>
                                    0.00
                                </td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>1700</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="productimgname">
                                        <a href="javascript:void(0);"
                                            class="product-img stock-img">
                                            <img src="assets/img/products/stock-img-05.png"
                                                alt="product">
                                        </a>
                                        <a href="javascript:void(0);">Lobar Handy</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-quantity">
                                        <span class="quantity-btn">+<i
                                                data-feather="plus-circle"
                                                class="plus-circle"></i></span>
                                        <input type="text" class="quntity-input" value="2">
                                        <span class="quantity-btn"><i
                                                data-feather="minus-circle"
                                                class="feather-search"></i></span>
                                    </div>
                                </td>
                                <td>2500</td>
                                <td>500</td>
                                <td>
                                    0.00
                                </td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">

                <div class="row">
                    <div class="col-lg-6 ms-auto">
                        <div class="total-order w-100 max-widthauto m-auto mb-4">
                            <ul>
                                <li>
                                    <h4>Order Tax</h4>
                                    <h5>$ 0.00</h5>
                                </li>
                                <li>
                                    <h4>Discount</h4>
                                    <h5>$ 0.00</h5>
                                </li>
                                <li>
                                    <h4>Grand Total</h4>
                                    <h5>$ 5200.00</h5>
                                </li>
                                <li>
                                    <h4>Paid</h4>
                                    <h5>$ 5200.00</h5>
                                </li>
                                <li>
                                    <h4>Due</h4>
                                    <h5>$ 0.00</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /details popup -->

<!-- edit popup -->
<div class="modal fade" id="edit-sales-new">
<div class="modal-dialog edit-sales-modal">
<div class="modal-content">
<div class="page-wrapper p-0 m-0">
<div class="content p-0">
<div class="page-header p-4 mb-0">
    <div class="add-item new-sale-items d-flex">
        <div class="page-title">
            <h4>Edit Sales</h4>
        </div>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="sales-list.php">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="input-blocks">
                        <label>Customer</label>
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-10">
                                <select class="select">
                                    <option>Thomas</option>
                                    <option>Name</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-2 ps-0">
                                <div class="add-icon">
                                    <a href="#" class="choose-add"><i data-feather="plus-circle"
                                            class="plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="input-blocks">
                        <label>Purchase Date</label>
                        <div class="input-groupicon calender-input">
                            <i data-feather="calendar" class="info-img"></i>
                            <input type="text" class="datetimepicker" placeholder="19 jan 2023">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="input-blocks">
                        <label>Supplier</label>
                        <select class="select">
                            <option>Dazzle Shoes</option>
                            <option>Supplier Name</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6 col-12">
                    <div class="input-blocks">
                        <label>Product Name</label>
                        <div class="input-groupicon select-code">
                            <input type="text"
                                placeholder="Please type product code and select">
                            <div class="addonset">
                                <img src="assets/img/icons/scanners.svg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive no-pagination">
                <table class="table  datanew">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Purchase Price($)</th>
                            <th>Discount($)</th>
                            <th>Tax(%)</th>
                            <th>Tax Amount($)</th>
                            <th>Unit Cost($)</th>
                            <th>Total Cost(%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="productimgname">
                                    <a href="javascript:void(0);" class="product-img stock-img">
                                        <img src="assets/img/products/stock-img-02.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Nike Jordan</a>
                                </div>
                            </td>
                            <td>
                                <div class="product-quantity">
                                    <span class="quantity-btn">+<i data-feather="plus-circle"
                                            class="plus-circle"></i></span>
                                    <input type="text" class="quntity-input" value="2">
                                    <span class="quantity-btn"><i data-feather="minus-circle"
                                            class="feather-search"></i></span>
                                </div>
                            </td>
                            <td>2000</td>
                            <td>500</td>
                            <td>
                                0.00
                            </td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>1500</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="productimgname">
                                    <a href="javascript:void(0);" class="product-img stock-img">
                                        <img src="assets/img/products/stock-img-03.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Apple Series 5 Watch</a>
                                </div>
                            </td>
                            <td>
                                <div class="product-quantity">
                                    <span class="quantity-btn">+<i data-feather="plus-circle"
                                            class="plus-circle"></i></span>
                                    <input type="text" class="quntity-input" value="2">
                                    <span class="quantity-btn"><i data-feather="minus-circle"
                                            class="feather-search"></i></span>
                                </div>
                            </td>
                            <td>3000</td>
                            <td>400</td>
                            <td>
                                0.00
                            </td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>1700</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="productimgname">
                                    <a href="javascript:void(0);" class="product-img stock-img">
                                        <img src="assets/img/products/stock-img-05.png"
                                            alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Lobar Handy</a>
                                </div>
                            </td>
                            <td>
                                <div class="product-quantity">
                                    <span class="quantity-btn">+<i data-feather="plus-circle"
                                            class="plus-circle"></i></span>
                                    <input type="text" class="quntity-input" value="2">
                                    <span class="quantity-btn"><i data-feather="minus-circle"
                                            class="feather-search"></i></span>
                                </div>
                            </td>
                            <td>2500</td>
                            <td>500</td>
                            <td>
                                0.00
                            </td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-lg-6 ms-auto">
                    <div class="total-order w-100 max-widthauto m-auto mb-4">
                        <ul>
                            <li>
                                <h4>Order Tax</h4>
                                <h5>$ 0.00</h5>
                            </li>
                            <li>
                                <h4>Discount</h4>
                                <h5>$ 0.00</h5>
                            </li>
                            <li>
                                <h4>Shipping</h4>
                                <h5>$ 0.00</h5>
                            </li>
                            <li>
                                <h4>Grand Total</h4>
                                <h5>$5200.00</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="input-blocks">
                        <label>Order Tax</label>
                        <div class="input-groupicon select-code">
                            <input type="text" placeholder="0">
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="input-blocks">
                        <label>Discount</label>
                        <div class="input-groupicon select-code">
                            <input type="text" placeholder="0">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="input-blocks">
                        <label>Shipping</label>
                        <div class="input-groupicon select-code">
                            <input type="text" placeholder="0">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="input-blocks mb-5">
                        <label>Status</label>
                        <select class="select">
                            <option>Choose</option>
                            <option>Completed</option>
                            <option>Inprogress</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="input-blocks">
                        <label>Notes</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 text-end">
                    <button type="button" class="btn btn-cancel add-cancel me-3"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-submit add-sale">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /edit popup -->

<!-- show payment Modal -->
<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered stock-adjust-modal">
<div class="modal-content">
<div class="page-wrapper-new p-0">
<div class="content">
<div class="modal-header border-0 custom-modal-header">
    <div class="page-title">
        <h4>Show Payments</h4>
    </div>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body custom-modal-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="modal-body-table total-orders">
                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Reference</th>
                                <th>Amount</th>
                                <th>Paid By</th>
                                <th class="no-sort">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>19 Jan 2023</td>
                                <td>INV/SL0101</td>
                                <td>$1500</td>
                                <td>Cash</td>
                                <td class="action-table-data">
                                    <div class="edit-delete-action">
                                        <a class="me-3 p-2" href="javascript:void(0);">
                                            <i data-feather="printer"
                                                class="feather-rotate-ccw"></i>
                                        </a>
                                        <a class="me-3 p-2" href="#" data-bs-toggle="modal"
                                            data-bs-target="#editpayment">
                                            <i data-feather="edit" class="feather-edit"></i>
                                        </a>
                                        <a class="confirm-text p-2" href="javascript:void(0);">
                                            <i data-feather="trash-2"
                                                class="feather-trash-2"></i>
                                        </a>
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
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
<!-- show payment Modal -->

<!-- Create payment Modal -->
<div class="modal fade" id="createpayment" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header border-0 custom-modal-header">
<div class="page-title">
<h4>Create Payments</h4>
</div>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body custom-modal-body">
<form action="sales-list.php">
<div class="row">
    <div class="col-lg-6">
        <div class="input-blocks">
            <label> Date</label>
            <div class="input-groupicon calender-input">
                <i data-feather="calendar" class="info-img"></i>
                <input type="text" class="datetimepicker" placeholder="Choose Date">
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-12">
        <div class="input-blocks">
            <label>Reference</label>
            <input type="text" class="form-control">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-sm-12 col-12">
        <div class="input-blocks">
            <label>Received Amount</label>
            <div class="input-groupicon calender-input">
                <i data-feather="dollar-sign" class="info-img"></i>
                <input type="text">
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12 col-12">
        <div class="input-blocks">
            <label>Paying Amount</label>
            <div class="input-groupicon calender-input">
                <i data-feather="dollar-sign" class="info-img"></i>
                <input type="text">
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12 col-12">
        <div class="input-blocks">
            <label>Payment type</label>
            <select class="select">
                <option>Choose</option>
                <option>Online</option>
                <option>Cash</option>
            </select>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="input-blocks">
            <label>Description</label>
            <textarea class="form-control"></textarea>
            <p>Maximum 60 Characters</p>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="modal-footer-btn">
        <button type="button" class="btn btn-cancel me-2"
            data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-submit">Submit</button>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
<!-- Create payment Modal -->

<!-- edit payment Modal -->
<div class="modal fade" id="editpayment" tabindex="-1" aria-labelledby="editpayment" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-header border-0 custom-modal-header">
<div class="page-title">
<h4>Edit Payments</h4>
</div>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body custom-modal-body">
<form action="sales-list.php">
<div class="row">
    <div class="col-lg-6">
        <div class="input-blocks">
            <label>19 Jan 2023</label>
            <div class="input-groupicon calender-input">
                <i data-feather="calendar" class="info-img"></i>
                <input type="text" class="datetimepicker form-control"
                    placeholder="Select Date">
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-12 col-12">
        <div class="input-blocks">
            <label>Reference</label>
            <input type="text" value="INV/SL0101">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-sm-12 col-12">
        <div class="input-blocks">
            <label>Received Amount</label>
            <div class="input-groupicon calender-input">
                <i data-feather="dollar-sign" class="info-img"></i>
                <input type="text" value="1500">
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12 col-12">
        <div class="input-blocks">
            <label>Paying Amount</label>
            <div class="input-groupicon calender-input">
                <i data-feather="dollar-sign" class="info-img"></i>
                <input type="text" value="1500">
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12 col-12">
        <div class="input-blocks">
            <label>Payment type</label>
            <select class="select">
                <option>Cash</option>
                <option>Online</option>
                <option>Inprogress</option>
            </select>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="input-blocks summer-description-box transfer">
            <label>Description</label>
            <textarea class="form-control"></textarea>
        </div>
        <p>Maximum 60 Characters</p>
    </div>
</div>
<div class="col-lg-12">
    <div class="modal-footer-btn mb-3 me-3">
        <button type="button" class="btn btn-cancel me-2"
            data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-submit">Save Changes</button>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
<!-- edit payment Modal -->
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