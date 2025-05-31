<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $email = $_SESSION["email"];
    session_write_close();
} else {
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
    exit;
}

$order_id=$_REQUEST['id'];
require '../admin/dbcon.php';
$sql = "SELECT * FROM orders WHERE order_id = '$order_id'";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>#<?php echo "$order_id";?></title>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">

    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png">

</head>

<body class="preload-wrapper">

    <div id="wrapper">
        
        <!-- Header -->
        <?php require"header.php"; ?>

        <!-- page-title -->
        <div class="tf-page-title">
            <div class="container-full">
                <div class="heading text-center">My Orders</div>
            </div>
        </div>
        <!-- /page-title -->

        <!-- page-cart -->
        <section class="flat-spacing-11">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="wrap-sidebar-account">
                            <ul class="my-account-nav">
                                <li><a href="my-account.php" class="my-account-nav-item ">Dashboard</a></li>
                                <li><span class="my-account-nav-item active">Orders</span></li>
                                <li><a href="my-account-address.php" class="my-account-nav-item">Address</a></li>
                                <li><a href="my-account-edit.php" class="my-account-nav-item">Account Details</a></li>
                                <li><a href="my-account-wishlist.php" class="my-account-nav-item">Wishlist</a></li>
                                <li><a href="my-account-wallet.php" class="my-account-nav-item">Wallet</a></li>
                                <li><a href="logout.php" class="my-account-nav-item">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="wd-form-order">
                            <div class="order-head">    <?php
    include '../admin/dbcon.php';

    $sqsl=mysqli_query($con, "select * from orders WHERE order_id='$order_id' LIMIT 1" );
    while($order=mysqli_fetch_array($sqsl))
    {

$sql12 = "SELECT * FROM product_images WHERE product_id = '$order[product_id]'";
$result12 = mysqli_query($con, $sql12);
$images1 = mysqli_fetch_assoc($result12);
        ?>
                                <figure class="img-product">
                                    <img src="../admin/<?php echo"$images1[image_path]"; ?>" alt="product">
                                </figure><?php }?>
                                <div class="content">
                                    <div class="badge" style="background-color: 
                                <?php if ($data['order_status']=="SUCCESS") {

echo "green";                                    } else {
                                        echo "red"; 
                                    }
                                     ?>"><?php echo "$data[order_status]";?></div>
                                    <h6 class="mt-8 fw-5">Order #<?php echo "$order_id"; ?></h6>
                                </div>
                            </div>
                            <div class="tf-grid-layout md-col-2 gap-15">
                                <div class="item">
                                    <div class="text-2 text_black-2">Item</div>
                                    <div class="text-2 mt_4 fw-6"><?php 
                                    
                                    $result = $con->query("SELECT COUNT(*) AS total FROM orders where order_id='$order_id' ");

$row = $result->fetch_assoc();
echo $row['total'];
                                    
                                    ?> Products</div>
                                </div>
                                <div class="item">
                                    <div class="text-2 text_black-2">Courier</div>
                                    <div class="text-2 mt_4 fw-6">ST Courier</div>
                                </div>
                                <div class="item">
                                    <div class="text-2 text_black-2">Ordered Date</div>
                                    <div class="text-2 mt_4 fw-6"> <?php 
echo date("j M Y, h:i A", strtotime($data['inserted_date']));?></td>
</div>
                                </div>
                                <div class="item">
                                    <div class="text-2 text_black-2">Address</div>
                                    <div class="text-2 mt_4 fw-6"><?php echo "$data[billing_address]";?>,<?php echo "$data[city]";?> <?php echo "$data[zipcode]";?></div>
                                </div>
                            </div>
                            <div class="widget-tabs style-has-border widget-order-tab">
                                <ul class="widget-menu-tab">
                                    <li class="item-title active">
                                        <span class="inner">Order History</span>
                                    </li>
                                    <li class="item-title">
                                        <span class="inner">Item Details</span>
                                    </li>
                                    <li class="item-title">
                                        <span class="inner">Courier</span>
                                    </li>
                                    <li class="item-title">
                                        <span class="inner">Receiver</span>
                                    </li>
                                    <li class="item-title">
                                        <span class="inner">Return & Exchange</span>
                                    </li>
                                </ul>
                                <div class="widget-content-tab">
                                    <div class="widget-content-inner active">
                                        <div class="widget-timeline">
                                            <ul class="timeline">
                                                <li>
                                                    <div class="timeline-badge success"></div>
                                                    <div class="timeline-box">
                                                        <a class="timeline-panel" href="javascript:void(0);">
                                                            <div class="text-2 fw-6">Product Corfirmed</div>
                                                            <span><?php 
echo date("j M Y, h:i A", strtotime($data['inserted_date']));?></span>
                                                        </a>
                                                        <p><strong>Courier Service : </strong>ST Courier
                                                        </p>
                                                        <p><strong>Estimated Delivery Date : </strong><?php 
echo date("j M Y", strtotime($data['inserted_date'] . ' +4 days'));
?>
</p>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget-content-inner">

                                                <?php
    include '../admin/dbcon.php';

    $sqsl=mysqli_query($con, "select * from orders WHERE order_id='$order_id'" );
    while($order=mysqli_fetch_array($sqsl))
    {

$sql1 = "SELECT * FROM product_images WHERE product_id = '$order[product_id]'";
$result1 = mysqli_query($con, $sql1);
$images = mysqli_fetch_assoc($result1);
        ?>
              
                                        <div class="order-head">
                                            <figure class="img-product">
                                                <img src="../admin/<?php echo"$images[image_path]"; ?>" alt="product">
                                            </figure>
                                            <div class="content">
                                                <div class="text-2 fw-6"><?php echo "$order[product_title]"; ?></div>
                                                <div class="mt_4"><span class="fw-6">Price :</span> ₹<?php echo "$order[total_price]"; ?></div>
                                                <div class="mt_4"><span class="fw-6">Size :</span> <?php echo "$order[varient]"; ?></div>
                                            </div>
                                        </div>

                                    <?php } ?>
                                        
                                        <ul>
                                            <li class="d-flex justify-content-between text-2">
                                                <span>Total Price</span>
                                                <span class="fw-6">₹<?php // Database connection


// Query to calculate sum directly in SQL
$result1 = $con->query("SELECT SUM(total_price) AS total FROM orders WHERE order_id='$order_id'");

// Get the sum
$row1 = $result1->fetch_assoc();
$total1 = $row1['total'];

echo "$total1.00";

// Close connection
?></span>
                                            </li>
                                            <li class="d-flex justify-content-between text-2 mt_4 pb_8 line">
                                                <span>Total Discounts</span>
                                                <span class="fw-6">₹0.00</span>

                                            </li>
                                            <li class="d-flex justify-content-between text-2 mt_8">
                                                <span>Order Total</span>
                                                <span class="fw-6">₹<?php // Database connection


// Query to calculate sum directly in SQL
$result1 = $con->query("SELECT SUM(total_price) AS total FROM orders WHERE order_id='$order_id'");

// Get the sum
$row1 = $result1->fetch_assoc();
$total1 = $row1['total'];

echo "$total1.00";

// Close connection
?></span>
                                            </li>
                                        </ul>
                                        <div class="delivery-status">
                                            <div class="title-text" style="
                                                    padding-bottom: 20px;
                                                ">
                                                <p>Are your products delivered?</p>
                                            </div>
                                            <div class="btns">
                                                <a href="my-account-orders-details.php"
                                                    class="tf-btn btn-fill animate-hover-btn rounded-0 justify-content-center"
                                                    id="yesBtn">
                                                    <span>Yes</span>
                                                </a>
                                                <a href="contact-1.php"
                                                    class="tf-btn btn-fill animate-hover-btn rounded-0 justify-content-center">
                                                    <span>No</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-inner">
                                        <p>Your order has been successfully dispatched on <?php echo date("j M Y, h:i A", strtotime($data['inserted_date']));?>, through ST Courier and is now in transit. You can track its journey and expected delivery status using the provided tracking details.</p>
                                        <ul class="mt_20">
                                            <li>AWB Number : <span class="fw-7">#<?php echo "$order_id"; ?></span></li>
                                            
                                        </ul>
                                        <p>Click here to <a Class="link-a" href="https://stcourier.com/track/shipment">Track your order</a> and check the delivery status.</p>
                                    </div>
                                    <div class="widget-content-inner">
                                        <p class="text-2 text_success">Thank you Your order has been received</p>
                                        <ul class="mt_20">
                                            <li>Order Number : <span class="fw-7">#<?php echo "$order_id"; ?></span></li>
                                            <li>Date : <span class="fw-7"> <?php echo date("j M Y, h:i A", strtotime($data['inserted_date']));?></span></li>
                                            <li>Total : <span class="fw-7">₹<?php echo "$data[total_price]"; ?></span></li>
                                            <li>Payment Methods : <span class="fw-7">Online Payment</span></li>
                                            <li>Payment Gateway : <span class="fw-7">Cash Free</span></li>

                                        </ul>
                                    </div>
                                    <div class="widget-content-inner">
                                        <form class="tf-product-form-bundle">
                                            <div class="tf-bundle-products">
    <?php
    include '../admin/dbcon.php';

    $sqsl=mysqli_query($con, "select * from orders WHERE order_id='$order_id'" );
    while($order=mysqli_fetch_array($sqsl))
    {
        $sql1 = "SELECT * FROM product_images WHERE product_id = '$order[product_id]'";
$result1 = mysqli_query($con, $sql1);
$images = mysqli_fetch_assoc($result1);?>
                                                <div class="tf-bundle-product-item item-has-checkox mb_15">
                                                    <div class="tf-bundle-check align-self-center">
                                                        <input type="checkbox" id="bundle-ck-2">
                                                        <label for="bundle-ck-2" class="">
                                                            <i class="icon-check"></i>
                                                        </label>
                                                    </div>
                                                    <div class="tf-product-bundle-image">
                                                        <a href="#">
                                                            <img src="../admin/<?php echo"$images[image_path]"; ?>" alt="Order-1">
                                                        </a>
                                                    </div>
                                                    <div class="tf-product-bundle-infos">
                                                        <div class="content">
                                                            <div class="text-2 fw-6"><?php echo "$order[product_title]"; ?></div>
                                                            <div class="mt_4"><span class="fw-6">Price :</span> ₹<?php echo "$order[total_price]"; ?>.00
                                                            </div>
                                                            <div class="mt_4"><span class="fw-6">Size :</span> <?php echo "$order[varient]"; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <!-- Dropdown for Reason for Returns and Exchange -->
                                            <div class="mb_drops">
                                                <select name="reason" id="reason" required class="w-100">
                                                    <option value="" disabled selected>Select Reason for Return/Exchange
                                                        *</option>
                                                    <option value="wrong-item">Received Wrong Item</option>
                                                    <option value="damaged">Item Damaged</option>
                                                    <option value="size-issue">Size Issue</option>
                                                    <option value="quality">Quality Not as Expected</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>

                                            <div class="mb_15">
                                                <textarea placeholder="Message" name="message" id="message" required
                                                    cols="30" rows="10"></textarea>
                                            </div>

                                            <div class="send-wrap">
                                                <button type="submit"
                                                    class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Send</button>
                                            </div>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page-cart -->

        <div class="btn-sidebar-account">
            <button data-bs-toggle="offcanvas" data-bs-target="#mbAccount" aria-controls="offcanvas"><i
                    class="icon icon-sidebar-2"></i></button>
        </div>

        <!-- Footer -->
        <?php require"footer.php"; ?>

    </div>

    <!-- gotop -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;">
            </path>
        </svg>
    </div>
    <!-- /gotop -->

    <!-- sidebar account-->
    <div class="offcanvas offcanvas-start canvas-filter canvas-sidebar canvas-sidebar-account" id="mbAccount">
        <div class="canvas-wrapper">
            <header class="canvas-header">
                <span class="title">SIDEBAR ACCOUNT</span>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
            </header>
            <div class="canvas-body sidebar-mobile-append"> </div>
        </div>
    </div>
    <!-- End sidebar account -->


    <!-- toolbar-bottom -->
<?php require"toolbar-bottom.php"; ?>
    <!-- /toolbar-bottom -->

    <!-- Mobile Navigation -->
    <?php require"mob-header.php"; ?>



    <!-- canvasSearch -->
    <?php require"search.php"; ?>
    <!-- /canvasSearch -->

    <!-- Mobile Shopping Side bar -->
    <?php require "shop-cate.php"; ?>
    <!-- /Mobile Shopping Side bar -->

    <!-- modal login -->
    <?php require"model-login.php"; ?>

    <!-- modal compare -->
    <div class="offcanvas offcanvas-bottom canvas-compare" id="compare">
        <div class="canvas-wrapper">
            <header class="canvas-header">
                <div class="close-popup">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                </div>
            </header>
            <div class="canvas-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tf-compare-list">
                                <div class="tf-compare-head">
                                    <div class="title">Compare Products</div>
                                </div>
                                <div class="tf-compare-offcanvas">
                                    <div class="tf-compare-item">
                                        <div class="position-relative">
                                            <div class="icon">
                                                <i class="icon-close"></i>
                                            </div>
                                            <a href="product-detail.php">
                                                <img class="radius-3" src="images/products/orange-1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tf-compare-item">
                                        <div class="position-relative">
                                            <div class="icon">
                                                <i class="icon-close"></i>
                                            </div>
                                            <a href="product-detail.php">
                                                <img class="radius-3" src="images/products/pink-1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-compare-buttons">
                                    <div class="tf-compare-buttons-wrap">
                                        <a href="compare.php"
                                            class="tf-btn radius-3 btn-fill justify-content-center fw-6 fs-14 flex-grow-1 animate-hover-btn ">Compare</a>
                                        <div class="tf-compapre-button-clear-all link">
                                            Clear All
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
    <!-- /modal compare -->

    <!-- modal quick_add -->
    <div class="modal fade modalDemo" id="quick_add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="wrap">
                    <div class="tf-product-info-item">
                        <div class="image">
                            <img src="images/products/orange-1.jpg" alt="">
                        </div>
                        <div class="content">
                            <a href="product-detail.php">Ribbed Tank Top</a>
                            <div class="tf-product-info-price">
                                <!-- <div class="price-on-sale">$8.00</div>
                                <div class="compare-at-price">$10.00</div>
                                <div class="badges-on-sale"><span>20</span>% OFF</div> -->
                                <div class="price">$18.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-product-info-variant-picker mb_15">
                        <div class="variant-picker-item">
                            <div class="variant-picker-label">
                                Color: <span class="fw-6 variant-picker-label-value">Orange</span>
                            </div>
                            <div class="variant-picker-values">
                                <input id="values-orange" type="radio" name="color" checked>
                                <label class="hover-tooltip radius-60" for="values-orange" data-value="Orange">
                                    <span class="btn-checkbox bg-color-orange"></span>
                                    <span class="tooltip">Orange</span>
                                </label>
                                <input id="values-black" type="radio" name="color">
                                <label class=" hover-tooltip radius-60" for="values-black" data-value="Black">
                                    <span class="btn-checkbox bg-color-black"></span>
                                    <span class="tooltip">Black</span>
                                </label>
                                <input id="values-white" type="radio" name="color">
                                <label class="hover-tooltip radius-60" for="values-white" data-value="White">
                                    <span class="btn-checkbox bg-color-white"></span>
                                    <span class="tooltip">White</span>
                                </label>
                            </div>
                        </div>
                        <div class="variant-picker-item">
                            <div class="variant-picker-label">
                                Size: <span class="fw-6 variant-picker-label-value">S</span>
                            </div>
                            <div class="variant-picker-values">
                                <input type="radio" name="size" id="values-s" checked>
                                <label class="style-text" for="values-s" data-value="S">
                                    <p>S</p>
                                </label>
                                <input type="radio" name="size" id="values-m">
                                <label class="style-text" for="values-m" data-value="M">
                                    <p>M</p>
                                </label>
                                <input type="radio" name="size" id="values-l">
                                <label class="style-text" for="values-l" data-value="L">
                                    <p>L</p>
                                </label>
                                <input type="radio" name="size" id="values-xl">
                                <label class="style-text" for="values-xl" data-value="XL">
                                    <p>XL</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="tf-product-info-quantity mb_15">
                        <div class="quantity-title fw-6">Quantity</div>
                        <div class="wg-quantity">
                            <span class="btn-quantity minus-btn">-</span>
                            <input type="text" name="number" value="1">
                            <span class="btn-quantity plus-btn">+</span>
                        </div>
                    </div>
                    <div class="tf-product-info-buy-button">
                        <form class="">
                            <a href="javascript:void(0);"
                                class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>Add
                                    to cart -&nbsp;</span><span class="tf-qty-price">$18.00</span></a>
                            <div class="tf-product-btn-wishlist btn-icon-action">
                                <i class="icon-heart"></i>
                                <i class="icon-delete"></i>
                            </div>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                class="tf-product-btn-wishlist box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="icon icon-check"></span>
                            </a>
                            <div class="w-100">
                                <a href="#" class="btns-full">Buy with <img src="images/payments/paypal.png" alt=""></a>
                                <a href="#" class="payment-more-option">More payment options</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal quick_add -->

    <!-- modal quick_view -->
    <?php require"size-chart.php"; ?>
    <!-- /modal quick_view -->

    <!-- modal find_size -->
    <?php require"size-chart.php"; ?>
    <!-- /modal find_size -->

    <!-- Javascript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>

    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/count-down.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/multiple-modal.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <script src="js/sibforms.js" defer></script>

    <script>
        window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
        window.LOCALE = 'en';
        window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";

        window.GENERIC_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.translation = {
            common: {
                selectedList: '{quantity} list selected',
                selectedLists: '{quantity} lists selected'
            }
        };

        var AUTOHIDE = Boolean(0);
    </script>

    <script>
        document.getElementById("yesBtn").addEventListener("click", function (event) {
            event.preventDefault(); // Prevent default link behavior
            let badge = document.querySelector(".badge");
            let deliveryStatus = document.querySelector(".delivery-status");

            if (badge) {
                badge.style.backgroundColor = "green"; // Change background to green
                badge.textContent = "Delivered"; // Change text to Delivered
                deliveryStatus.style.display = "none";
            }
        });
    </script>
</body>



</html>