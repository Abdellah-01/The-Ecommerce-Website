<?php 
include('../admin/dbcon.php');
$sqs=mysqli_query($con, "select * from orders WHERE `order_id`='".$_REQUEST['id']."'");
$data=mysqli_fetch_array($sqs);

include_once '../admin/dbcon.php';
#connection string
 
 #retrieve file title

$customer_fname = $data["customer_fname"];
$customer_lname = $data["customer_lname"];
$customer_mobile = $data["customer_mobile"];
$customer_email = $data["customer_email"];
$billing_address = $data["billing_address"];
$billing_address2 = $data["billing_address2"];
$city = $data["city"];
$zipcode = $data["zipcode"];
$country = $data["country"];
$order_id = $data["order_id"];



$sql = "SELECT SUM(total_price) AS total FROM orders WHERE order_id='$_REQUEST[id]'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$sum = $row['total'];
// echo " ₹$sum";
} else {
// echo "₹0";
}


 
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<!-- Mirrored from themesflat.co/html/ecomus/payment-confirmation.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2025 08:27:07 GMT -->

<head>
    <meta charset="utf-8">
    <title>Payment Success</title>

    <meta name="author" content="themesflat.com">
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
    
    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">

        <!-- Header -->
        <?php require"header.php"; ?>

        <!-- page-title -->
        <div class="tf-page-title">
            <div class="container-full">
                <div class="heading text-center">Payment confirmation</div>
            </div>
        </div>
        <!-- /page-title -->

        <!-- page-cart -->
        <section class="flat-spacing-11">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h5 class="fw-5 mb_20">Payment confirmation</h5>
                        <div class="tf-page-cart-checkout">
                        <form id="redirectForm" method="post" action="demo_payment/request.php">
        <div class="form-group">
          <!--label>App ID:</label><br-->
          <input class="form-control" type="hidden" name="appId" placeholder="Enter App ID here (Ex. 123456a7890bc123defg4567)" value="TEST1005295533ffafdce7b219e296e455925001" >
        </div>
        <div class="form-group">
          <!--label>Order ID:</label--><br>
          <input class="form-control" type="hidden" name="orderId" placeholder="Enter Order ID here (Ex. order00001)" value="<?php  echo "$order_id"; ?>" >
        </div>
        <div class="form-group">
          <!-- <label>Order Amount:</label><br> -->
          <input class="form-control" type="hidden" name="orderAmount" readonly value="<?php echo "$sum";  ?>" placeholder="Enter Order Amount here (Ex. 100)"/>
        </div>
        <div class="form-group">
          <!--label>Order Currency:</label><br-->
          <input class="form-control" type="hidden" name="orderCurrency" value="INR" placeholder="Enter Currency here (Ex. INR)"/>
        </div>
        <div class="form-group">
          <!-- <label>Order Note:</label><br> -->
          <input class="form-control" type="hidden" name="orderNote" value="" placeholder="Enter Order Note here (Ex. Test order)"/>
        </div>    
        <div class="form-group">
          <!-- <label>Name:</label><br> -->
          <input class="form-control" type="hidden" name="customerName" readonly value="<?php echo "$customer_fname $customer_lname";  ?>" placeholder="Enter your name here (Ex. John Doe)"/>
        </div>
        <div class="form-group">
          <!-- <label>Email:</label><br> -->
          <input class="form-control" type="hidden" name="customerEmail" readonly value="<?php echo "$customer_email";  ?>" placeholder="Enter your email address here (Ex. Johndoe@test.com)"/>
        </div>
        <div class="form-group">
          <!-- <label>Phone:</label><br> -->
          <input class="form-control" type="hidden" name="customerPhone" readonly value="<?php echo "$customer_mobile";  ?>" placeholder="Enter your phone number here (Ex. 9999999999)"/>
        </div>
        <div class="form-group">
          <!--label>Return URL:</label><br-->
          <input class="form-control" type="hidden" name="returnUrl" value="http://localhost/FASHION-ECOMMERCE/website/demo_payment/response.php" placeholder="Enter the URL to which customer will be redirected (Ex. www.example.com)"/>
        </div> 

        <div class="form-group">
          <!--label>Notify URL:</label><br-->
          <input class="form-control" type="hidden" name="notifyUrl" placeholder="Enter the URL to get server notificaitons (Ex. www.example.com)"/>
        </div>
        
    

                            <div class="d-flex align-items-center justify-content-between mb_15">
                                <div class="fs-18">Order Date</div>
                                <p><?php echo date('d-m-Y'); ?></p>
                            </div>
                            <!-- <div class="d-flex align-items-center justify-content-between mb_15">
                                <div class="fs-18">Payment method</div>
                                <p>Visa</p>
                            </div> -->
                            <!-- <div class="d-flex align-items-center justify-content-between mb_15">
                                <div class="fs-18">Card number</div>
                                <p>**** **** **** 9999</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb_15">
                                <div class="fs-18">Cardholder name</div>
                                <p>Themesflat</p>
                            </div> -->
                            <div class="d-flex align-items-center justify-content-between mb_15">
                                <div class="fs-18">Email</div>
                                <p><?php echo "$customer_email";  ?></p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb_15">
                                <div class="fs-18">Phone</div>
                                <p><?php echo "$customer_mobile";  ?></p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb_24">
                                <div class="fs-22 fw-6">Subtotal</div>
                                <span class="total-value">₹<?php echo "$sum";  ?>.00 </span>
                            </div>
                            <div class="d-flex gap-10">
                                <a href="checkout.php"
                                    class="tf-btn w-100 btn-outline animate-hover-btn rounded-0 justify-content-center">
                                    <span>Cancel Payment</span>
                                </a>
                                <button type="submit" class="tf-btn w-100 btn-fill animate-hover-btn radius-3 justify-content-center" value="Pay">Confirm Payment</button>
        </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page-cart -->

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

    <!-- toolbar-bottom -->
<?php require"toolbar-bottom.php"; ?>
    <!-- /toolbar-bottom -->

    <!-- Mobile Navigation -->
    <?php require"mob-header.php"; ?>

    <!-- canvasSearch -->
    <?php require"search.php"; ?>
    <!-- /canvasSearch -->

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
    <?php require"cart.php"; ?>
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
</body>


<!-- Mirrored from themesflat.co/html/ecomus/payment-confirmation.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2025 08:27:07 GMT -->

</html>