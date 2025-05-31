<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Wishlist</title>

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

      <style>
       .list-product-btn .box-icon {
    display: inline-flex !important; /* Ensure it remains visible */
    opacity: 1 !important;
    visibility: visible !important;
}

.list-product-btn .icon-delete {
    display: inline-block !important; /* Ensure the icon is always shown */
    opacity: 1 !important;
    visibility: visible !important;
}


    </style>

</head>

<body class="preload-wrapper">
    
    <div id="wrapper">
        
        <!-- Header -->
        <?php require"header.php"; ?>

        <!-- page-title -->
        <div class="tf-page-title">
            <div class="container-full">
                <div class="heading text-center">Wishlist</div>
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
                                <li><a href="my-account-orders.php" class="my-account-nav-item">Orders</a></li>
                                <li><a href="my-account-address.php" class="my-account-nav-item">Address</a></li>
                                <li><a href="my-account-edit.php" class="my-account-nav-item">Account Details</a></li>
                                <li><span class="my-account-nav-item active">Wishlist</span></li>
                                <li><a href="my-account-wallet.php" class="my-account-nav-item">Wallet</a></li>
                                <li><a href="logout.php" class="my-account-nav-item">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="my-account-content account-wishlist">
                            <div class="grid-layout wrapper-shop" data-grid="grid-3">
                                <!-- card product 1 -->
                    <div class="card-product">
                        <div class="card-product-wrapper">
                            <a href="product-detail.php" class="product-img">
                                <img class="lazyload img-product" data-src="images/products/orange-1.jpg"
                                    src="images/products/orange-1.jpg" alt="image-product">
                                <img class="lazyload img-hover" data-src="images/products/white-1.jpg"
                                    src="images/products/white-1.jpg" alt="image-product">
                            </a>
                            <div class="on-sale-wrap">
                                <div class="on-sale-item">-33%</div>
                            </div>
                            <div class="list-product-btn type-wishlist">
                                <a href="javascript:void(0);" class="box-icon bg_white">
                                    <span class="tooltip">Remove Wishlist</span>
                                    <span class="icon icon-delete"></span>
                                </a>
                            </div>
                            <div class="list-product-btn">
                                <a href="#quick_add" data-bs-toggle="modal"
                                    class="box-icon bg_white quick-add tf-btn-loading">
                                    <span class="icon icon-bag"></span>
                                    <span class="tooltip">Quick Add</span>
                                </a>
                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                    class="box-icon bg_white compare btn-icon-action">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Add to Compare</span>
                                    <span class="icon icon-check"></span>
                                </a>
                                <a href="#quick_view" data-bs-toggle="modal"
                                    class="box-icon bg_white quickview tf-btn-loading">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.php" class="title link">Ribbed Tank Top</a>
                            <span class="price">$16.95</span>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch active">
                                    <span class="tooltip">Orange</span>
                                    <span class="swatch-value bg_orange-3"></span>
                                    <img class="lazyload" data-src="images/products/orange-1.jpg"
                                        src="images/products/orange-1.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch">
                                    <span class="tooltip">Black</span>
                                    <span class="swatch-value bg_dark"></span>
                                    <img class="lazyload" data-src="images/products/black-1.jpg"
                                        src="images/products/black-1.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch">
                                    <span class="tooltip">White</span>
                                    <span class="swatch-value bg_white"></span>
                                    <img class="lazyload" data-src="images/products/white-1.jpg"
                                        src="images/products/white-1.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- card product 2 -->
                     <div class="card-product">
                        <div class="card-product-wrapper">
                            <div class="product-img">
                                <img class="lazyload img-product" data-src="images/products/white-3.jpg"
                                    src="images/products/white-3.jpg" alt="image-product">
                                <img class="lazyload img-hover" data-src="images/products/white-4.jpg"
                                    src="images/products/white-4.jpg" alt="image-product">
                            </div>
                            <div class="list-product-btn type-wishlist">
                                <a href="javascript:void(0);" class="box-icon bg_white">
                                    <span class="tooltip">Remove Wishlist</span>
                                    <span class="icon icon-delete"></span>
                                </a>
                            </div>
                            <div class="list-product-btn absolute-2">
                                <a href="#shoppingCart" data-bs-toggle="modal"
                                    class="box-icon bg_white quick-add tf-btn-loading">
                                    <span class="icon icon-bag"></span>
                                    <span class="tooltip">Add to cart</span>
                                </a>
                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                    class="box-icon bg_white compare btn-icon-action">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Add to Compare</span>
                                    <span class="icon icon-check"></span>
                                </a>
                                <a href="#quick_view" data-bs-toggle="modal"
                                    class="box-icon bg_white quickview tf-btn-loading">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.php" class="title link">Oversized Printed T-shirt</a>
                            <span class="price">$10.00</span>
                        </div>
                    </div>
                    <!-- card product 3 -->
                    <div class="card-product">
                        <div class="card-product-wrapper">
                            <div class="product-img">
                                <img class="lazyload img-product" data-src="images/products/white-3.jpg"
                                    src="images/products/white-3.jpg" alt="image-product">
                                <img class="lazyload img-hover" data-src="images/products/white-4.jpg"
                                    src="images/products/white-4.jpg" alt="image-product">
                            </div>
                            <div class="list-product-btn type-wishlist">
                                <a href="javascript:void(0);" class="box-icon bg_white">
                                    <span class="tooltip">Remove Wishlist</span>
                                    <span class="icon icon-delete"></span>
                                </a>
                            </div>
                            <div class="list-product-btn absolute-2">
                                <a href="#shoppingCart" data-bs-toggle="modal"
                                    class="box-icon bg_white quick-add tf-btn-loading">
                                    <span class="icon icon-bag"></span>
                                    <span class="tooltip">Add to cart</span>
                                </a>
                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                    class="box-icon bg_white compare btn-icon-action">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Add to Compare</span>
                                    <span class="icon icon-check"></span>
                                </a>
                                <a href="#quick_view" data-bs-toggle="modal"
                                    class="box-icon bg_white quickview tf-btn-loading">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.php" class="title link">Oversized Printed T-shirt</a>
                            <span class="price">$10.00</span>
                        </div>
                    </div>
                    <!-- card product 4 -->
                    <div class="card-product">
                        <div class="card-product-wrapper">
                            <div class="product-img">
                                <img class="lazyload img-product" data-src="images/products/white-2.jpg"
                                    src="images/products/white-2.jpg" alt="image-product">
                                <img class="lazyload img-hover" data-src="images/products/pink-1.jpg"
                                    src="images/products/pink-1.jpg" alt="image-product">
                            </div>
                            <div class="list-product-btn type-wishlist">
                                <a href="javascript:void(0);" class="box-icon bg_white">
                                    <span class="tooltip">Remove Wishlist</span>
                                    <span class="icon icon-delete"></span>
                                </a>
                            </div>
                            <div class="list-product-btn">
                                <a href="#quick_add" data-bs-toggle="modal"
                                    class="box-icon bg_white quick-add tf-btn-loading">
                                    <span class="icon icon-bag"></span>
                                    <span class="tooltip">Quick Add</span>
                                </a>
                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                    class="box-icon bg_white compare btn-icon-action">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Add to Compare</span>
                                    <span class="icon icon-check"></span>
                                </a>
                                <a href="#quick_view" data-bs-toggle="modal"
                                    class="box-icon bg_white quickview tf-btn-loading">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                            </div>
                            <div class="size-list">
                                <span>S</span>
                                <span>M</span>
                                <span>L</span>
                                <span>XL</span>
                            </div>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.php" class="title">Oversized Printed T-shirt</a>
                            <span class="price">$16.95</span>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch active">
                                    <span class="tooltip">White</span>
                                    <span class="swatch-value bg_white"></span>
                                    <img class="lazyload" data-src="images/products/white-2.jpg"
                                        src="images/products/white-2.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch">
                                    <span class="tooltip">Pink</span>
                                    <span class="swatch-value bg_purple"></span>
                                    <img class="lazyload" data-src="images/products/pink-1.jpg"
                                        src="images/products/pink-1.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch">
                                    <span class="tooltip">Black</span>
                                    <span class="swatch-value bg_dark"></span>
                                    <img class="lazyload" data-src="images/products/black-2.jpg"
                                        src="images/products/black-2.jpg" alt="image-product">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- card product 5 -->
                    <div class="card-product">
                        <div class="card-product-wrapper">
                            <div class="product-img">
                                <img class="lazyload img-product" data-src="images/products/brown-2.jpg"
                                    src="images/products/brown-2.jpg" alt="image-product">
                                <img class="lazyload img-hover" data-src="images/products/brown-3.jpg"
                                    src="images/products/brown-3.jpg" alt="image-product">
                            </div>
                            <div class="size-list">
                                <span>S</span>
                                <span>M</span>
                                <span>L</span>
                                <span>XL</span>
                            </div>
                            <div class="list-product-btn type-wishlist">
                                <a href="javascript:void(0);" class="box-icon bg_white">
                                    <span class="tooltip">Remove Wishlist</span>
                                    <span class="icon icon-delete"></span>
                                </a>
                            </div>
                            <div class="list-product-btn">
                                <a href="#quick_add" data-bs-toggle="modal"
                                    class="box-icon bg_white quick-add tf-btn-loading">
                                    <span class="icon icon-bag"></span>
                                    <span class="tooltip">Quick Add</span>
                                </a>
                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                    class="box-icon bg_white compare btn-icon-action">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Add to Compare</span>
                                    <span class="icon icon-check"></span>
                                </a>
                                <a href="#quick_view" data-bs-toggle="modal"
                                    class="box-icon bg_white quickview tf-btn-loading">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick View</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.php" class="title link">V-neck linen T-shirt</a>
                            <span class="price">$114.95</span>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch active">
                                    <span class="tooltip">Brown</span>
                                    <span class="swatch-value bg_brown"></span>
                                    <img class="lazyload" data-src="images/products/brown-2.jpg"
                                        src="images/products/brown-2.jpg" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch">
                                    <span class="tooltip">White</span>
                                    <span class="swatch-value bg_white"></span>
                                    <img class="lazyload" data-src="images/products/white-5.jpg"
                                        src="images/products/white-5.jpg" alt="image-product">
                                </li>
                            </ul>
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
</body>


<!-- Mirrored from themesflat.co/html/ecomus/my-account-wishlist.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2025 08:27:07 GMT -->

</html>