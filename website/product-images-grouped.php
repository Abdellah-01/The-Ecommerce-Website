
<?php 
require '../admin/dbcon.php';

// Fetch product details
$product_id = $_REQUEST['id'];
$product_sql = mysqli_query($con, "SELECT * FROM product WHERE product_id='$product_id'");
$products = mysqli_fetch_assoc($product_sql);

// Fetch product images
$images_sql = mysqli_query($con, "SELECT * FROM product_images WHERE product_id='$product_id'");
$images = mysqli_fetch_all($images_sql, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars($products['product_title']); ?></title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Fonts -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/drift-basic.min.css">
    <link rel="stylesheet" href="css/photoswipe.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png">
    <style>
        #closeModal {
            color: black;
            font-size: 30px;
            cursor: pointer;
        }
        #imageModal {
            background: white;
        }
        /* Shopping cart styles */
        .xyx-cart {
            position: fixed;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
            z-index: 1001;
            overflow-y: auto;
        }
        
        .xyx-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
            transition: opacity 0.3s ease;
        }
        
        .xyx-cart,
        .xyx-overlay {
            pointer-events: none;
        }
        
        .xyx-cart.active,
        .xyx-overlay.active {
            pointer-events: auto;
        }
        
        .xyx-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        /* Desktop View - Cart from Right */
        @media (min-width: 768px) {
            .xyx-cart {
                top: 0;
                right: 0;
                width: 500px;
                height: 100%;
                transform: translateX(100%);
            }
            
            .xyx-cart.active {
                transform: translateX(0);
            }
        }
        
        /* Mobile View - Cart from Bottom */
        @media (max-width: 767px) {
            .xyx-cart {
                bottom: 0;
                left: 0;
                width: 100%;
                height: 60%;
                transform: translateY(100%);
            }
            
            .xyx-cart.active {
                transform: translateY(0);
            }
        }
        
        /* Cart header styles */
        .xyx-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background: #f3f3f3;
            border-bottom: 1px solid #ccc;
            max-height: 90px;
            padding-block-start: 24px;
            padding-block-end: 24px;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .m-title {
            margin: 0;
            font-size: 1.2rem;
        }
        
        .m-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        .m-body {
            padding: 2rem 1.2rem;
        }
        
        .m-item {
            margin-bottom: 10px;
            padding: 10px;
            background: #eee;
            border-radius: 5px;
        }
        
        /* Small size elements */
        .sml {
            min-width: 70px !important;
            height: 55px !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }/* Shopping cart styles */
        .xyx-cart {
            position: fixed;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
            z-index: 1001;
            overflow-y: auto;
        }
        
        .xyx-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
            transition: opacity 0.3s ease;
        }
        
        .xyx-cart,
        .xyx-overlay {
            pointer-events: none;
        }
        
        .xyx-cart.active,
        .xyx-overlay.active {
            pointer-events: auto;
        }
        
        .xyx-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        /* Desktop View - Cart from Right */
        @media (min-width: 768px) {
            .xyx-cart {
                top: 0;
                right: 0;
                width: 500px;
                height: 100%;
                transform: translateX(100%);
            }
            
            .xyx-cart.active {
                transform: translateX(0);
            }
        }
        
        /* Mobile View - Cart from Bottom */
        @media (max-width: 767px) {
            .xyx-cart {
                bottom: 0;
                left: 0;
                width: 100%;
                height: 60%;
                transform: translateY(100%);
            }
            
            .xyx-cart.active {
                transform: translateY(0);
            }
        }
        
        /* Cart header styles */
        .xyx-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background: #f3f3f3;
            border-bottom: 1px solid #ccc;
            max-height: 90px;
            padding-block-start: 24px;
            padding-block-end: 24px;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .m-title {
            margin: 0;
            font-size: 1.2rem;
        }
        
        .m-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        .m-body {
            padding: 2rem 1.2rem;
        }
        
        .m-item {
            margin-bottom: 10px;
            padding: 10px;
            background: #eee;
            border-radius: 5px;
        }
        
        /* Small size elements */
        .sml {
            min-width: 70px !important;
            height: 55px !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }
    </style>
</head>
<body class="preload-wrapper">
    <!-- Preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /Preload -->
     
    <div id="wrapper">
        <!-- Header -->
        <?php require "header.php"; ?>
        <!-- Breadcrumb -->
        <div class="tf-breadcrumb">
            <div class="container">
                <div class="tf-breadcrumb-wrap d-flex justify-content-between flex-wrap align-items-center">
                    <div class="tf-breadcrumb-list">
                        <a href="index.php" class="text">Home</a>
                        <i class="icon icon-arrow-right"></i>
                        <a href="#" class="text"><?php echo htmlspecialchars($products['catagory_name']); ?></a>
                        <i class="icon icon-arrow-right"></i>
                        <span class="text"><?php echo htmlspecialchars($products['product_title']); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->
        <!-- Default -->
        <section class="flat-spacing-4 pt_0">
            <div class="tf-main-product section-image-zoom">
                <div class="container widget-tabs">
                    <div class="row filter-images-group">
                        <div class="col-md-6">
                            <div class="tf-product-media-wrap sticky-top">
                                <div class="tab-content">
                                    <!-- Main Tab -->
                                    <div class="tab-pane active show" id="swBeigge" role="tabpanel">
                                        <div class="thumbs-slider1 thumbs-default">
                                            <div dir="ltr" class="swiper tf-product-media-thumbs tf-product-media-thumbs-default other-image-zoom" data-direction="vertical">
                                                <div class="swiper-wrapper stagger-wrap wrap-images-group-item">
                                                    <!-- Beige Images -->
                                                    <?php foreach ($images as $image): ?>
                                                        <div class="swiper-slide stagger-item images-group-item beige">
                                                            <div class="item">
                                                                <img class="lazyload tf-image-zoom" data-src="../admin/<?php echo htmlspecialchars($image['image_path']); ?>" src="../admin/<?php echo htmlspecialchars($image['image_path']); ?>" alt="">
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div dir="ltr" class="swiper tf-product-media-main tf-product-media-main-default" id="gallery-swiper-started1">
                                                <div class="swiper-wrapper">
                                                    <!-- Beige Main Images -->
                                                    <?php foreach ($images as $image): ?>
                                                        <div class="swiper-slide images-group-item beige">
                                                            <div class="item">
                                                                <img class="tf-image-zoom lazyload" data-zoom="../admin/<?php echo htmlspecialchars($image['image_path']); ?>" data-src="../admin/<?php echo htmlspecialchars($image['image_path']); ?>" src="../admin/<?php echo htmlspecialchars($image['image_path']); ?>" alt="">
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                                <div class="swiper-button-next button-style-arrow thumbs-next"></div>
                                                <div class="swiper-button-prev button-style-arrow thumbs-prev"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal for displaying the image -->
                        <div id="imageModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: white; z-index: 1000;">
                            <span id="closeModal" style="position: absolute; top: 20px; right: 20px; font-size: 30px; cursor: pointer;">&times;</span>
                            <img id="modalImage" src="" style="max-width: 90%; max-height: 90%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const images = document.querySelectorAll('.tf-image-zoom');
                                const modal = document.getElementById('imageModal');
                                const modalImage = document.getElementById('modalImage');
                                const closeModal = document.getElementById('closeModal');

                                images.forEach(image => {
                                    image.addEventListener('click', function () {
                                        modal.style.display = 'block';
                                        modalImage.src = this.src;
                                    });
                                });

                                closeModal.addEventListener('click', function () {
                                    modal.style.display = 'none';
                                });

                                modal.addEventListener('click', function (event) {
                                    if (event.target === modal) {
                                        modal.style.display = 'none';
                                    }
                                });
                            });
                        </script>
                        <div class="col-md-6">
                            <div class="tf-product-info-wrap position-relative">
                                <div class="tf-zoom-main"></div>
                                <div class="tf-product-info-list other-image-zoom">
                                    <div class="tf-product-info-title">
                                        <h5><?php echo htmlspecialchars($products['product_title']); ?></h5>
                                    </div>
                                    <div class="tf-product-info-badges">
                                        <div class="badges">Best seller</div>
                                        <div class="product-status-content">
                                            <i class="icon-lightning"></i>
                                            <p class="fw-6">Selling fast! 56 people have this in their carts.</p>
                                        </div>
                                    </div>
                                    <div class="tf-product-info-price">
                                        <div class="price-on-sale" id="sale-price"></div>
                                        <div class="compare-at-price" id="compare-price">₹<?php echo htmlspecialchars($products['offer_price']); ?>.00</div>
                                        <div class="badges-on-sale" id="discount-badge"><span>33</span></div>
                                    </div>
                                    <div class="tf-product-inventory">
                                        <div class="d-flex align-items-center gap-5">
                                            <svg width="15" height="15" aria-hidden="true">
                                                <circle cx="7.5" cy="7.5" r="7.5" fill="currentColor"></circle>
                                                <circle cx="7.5" cy="7.5" r="5" stroke="rgb(255, 255, 255)" stroke-width="1" fill="currentColor"></circle>
                                            </svg>
                                            <div class="fw-6">In stock</div>
                                        </div>
                                    </div>
                                    <div class="tf-product-info-variant-picker">
                                        <div class="variant-picker-item">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="variant-picker-label">
                                                    Size: <span class="fw-6 variant-picker-label-value">
                                                        <?php 
                                                        // Get the first size for the label (sorted properly)
                                                        $size_query = mysqli_query($con, "SELECT * FROM variant WHERE product_id='$product_id'");
                                                        $sizes = [];
                                                        while ($row = mysqli_fetch_array($size_query)) {
                                                            $sizes[] = $row['varient'];
                                                        }
                                                        // Define the correct size order
                                                        $sizeOrder = ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL', '4XL', '5XL'];
                                                        // Sort the sizes according to our predefined order
                                                        usort($sizes, function ($a, $b) use ($sizeOrder) {
                                                            $aKey = array_search(strtoupper($a), $sizeOrder);
                                                            $bKey = array_search(strtoupper($b), $sizeOrder);
                                                            return $aKey - $bKey;
                                                        });
                                                        // Display the first size as default
                                                        echo !empty($sizes) ? htmlspecialchars($sizes[0]) : '';
                                                        ?>
                                                    </span>
                                                </div>
                                                <a href="#find_size" data-bs-toggle="modal" class="find-size fw-6">Find your size</a>
                                            </div>
                                            <div class="variant-picker-values">
                                                <?php 
                                                // Re-fetch all variants to get prices and other data
                                                $sqs1l = mysqli_query($con, "SELECT * FROM variant WHERE product_id='$product_id'");
                                                $variants = [];
                                                while ($row = mysqli_fetch_array($sqs1l)) {
                                                    $variants[] = $row;
                                                }
                                                // Sort variants according to our size order
                                                usort($variants, function ($a, $b) use ($sizeOrder) {
                                                    $aKey = array_search(strtoupper($a['varient']), $sizeOrder);
                                                    $bKey = array_search(strtoupper($b['varient']), $sizeOrder);
                                                    return $aKey - $bKey;
                                                });
                                                // Display all size options
                                                $first = true;
                                                foreach ($variants as $variant) {
                                                ?>
                                                    <input type="radio" name="size1" id="values-<?php echo htmlspecialchars($variant['varient']); ?>" value="<?php echo htmlspecialchars($variant['varient']); ?>" data-price="<?php echo htmlspecialchars($variant['varient_price']); ?>" <?php if ($first) { echo "checked"; $first = false; } ?>>
                                                    <label class="style-text size-btn" for="values-<?php echo htmlspecialchars($variant['varient']); ?>">
                                                        <p><?php echo htmlspecialchars($variant['varient']); ?></p>
                                                    </label>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-product-info-quantity">
                                        <div class="quantity-title fw-6">Quantity</div>
                                        <div class="wg-quantity">
                                            <span class="btn-quantity btn-decrease">-</span>
                                            <input type="text" class="quantity-product" name="number" value="1">
                                            <span class="btn-quantity btn-increase">+</span>
                                        </div>
                                    </div>
                                    <div class="tf-product-info-buy-button">
                                        <form action="add_to_cart.php" method="post">
                                            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product_id); ?>" readonly>
                                            <input type="hidden" name="product_title" value="<?php echo htmlspecialchars($products['product_title']); ?>" readonly>
                                            <input type="hidden" name="catagory_name" value="<?php echo htmlspecialchars($products['catagory_name']); ?>" readonly>
                                            <input type="hidden" name="sub_catagory_name" value="<?php echo htmlspecialchars($products['sub_catagory_name']); ?>" readonly>
                                            <input type="hidden" name="ip_address" value="<?php echo htmlspecialchars($_SERVER['REMOTE_ADDR']); ?>" readonly>
                                            <!-- Quantity Input (from your quantity picker) -->
                                            <input type="hidden" class="display-quantity" name="quantity" readonly placeholder="Quantity will appear here" id="quantity-input">
                                            <!-- Variant Price Input (from your variant selection) -->
                                            <input type="hidden" id="selected-variant-input" name="price" readonly class="form-control" placeholder="Selected variant">
                                            <input type="hidden" name="varient" id="selected-variant" readonly placeholder="Selected Size">
                                            <button class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart">Add to Cart</button>
                                            <a href="javascript:void(0);" id="wishlistBtn" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete d-none"></span>
                                            </a>
                                            <div class="w-100">
                                                <a href="upi://pay?pa=9360985467@sbi&pn=Abdellah&am=599&cu=INR" class="btns-full">Buy with <img src="images/payments/gpay.png" alt=""></a>
                                                <a href="#" class="payment-more-option">More payment options</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tf-product-info-extra-link">
                                        <a href="#compare_color" data-bs-toggle="modal" class="tf-product-extra-icon">
                                            <div class="icon">
                                                <img src="images/item/compare.svg" alt="">
                                            </div>
                                            <div class="text fw-6">Compare color</div>
                                        </a>
                                        <a href="#ask_question" data-bs-toggle="modal" class="tf-product-extra-icon">
                                            <div class="icon">
                                                <i class="icon-question"></i>
                                            </div>
                                            <div class="text fw-6">Ask a question</div>
                                        </a>
                                        <a href="#delivery_return" data-bs-toggle="modal" class="tf-product-extra-icon">
                                            <div class="icon">
                                                <svg class="d-inline-block" xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18" fill="currentColor">
                                                    <path d="M21.7872 10.4724C21.7872 9.73685 21.5432 9.00864 21.1002 8.4217L18.7221 5.27043C18.2421 4.63481 17.4804 4.25532 16.684 4.25532H14.9787V2.54885C14.9787 1.14111 13.8334 0 12.4255 0H9.95745V1.69779H12.4255C12.8948 1.69779 13.2766 2.07962 13.2766 2.54885V14.5957H8.15145C7.80021 13.6052 6.85421 12.8936 5.74468 12.8936C4.63515 12.8936 3.68915 13.6052 3.33792 14.5957H2.55319C2.08396 14.5957 1.70213 14.2139 1.70213 13.7447V2.54885C1.70213 2.07962 2.08396 1.69779 2.55319 1.69779H9.95745V0H2.55319C1.14528 0 0 1.14111 0 2.54885V13.7447C0 15.1526 1.14528 16.2979 2.55319 16.2979H3.33792C3.68915 17.2884 4.63515 18 5.74468 18C6.85421 18 7.80021 17.2884 8.15145 16.2979H13.423C13.7742 17.2884 14.7202 18 15.8297 18C16.9393 18 17.8853 17.2884 18.2365 16.2979H21.7872V10.4724ZM16.684 5.95745C16.9494 5.95745 17.2034 6.08396 17.3634 6.29574L19.5166 9.14894H14.9787V5.95745H16.684ZM5.74468 16.2979C5.27545 16.2979 4.89362 15.916 4.89362 15.4468C4.89362 14.9776 5.27545 14.5957 5.74468 14.5957C6.21392 14.5957 6.59575 14.9776 6.59575 15.4468C6.59575 15.916 6.21392 16.2979 5.74468 16.2979ZM15.8298 16.2979C15.3606 16.2979 14.9787 15.916 14.9787 15.4468C14.9787 14.9776 15.3606 14.5957 15.8298 14.5957C16.299 14.5957 16.6809 14.9776 16.6809 15.4468C16.6809 15.916 16.299 16.2979 15.8298 16.2979ZM18.2366 14.5957C17.8853 13.6052 16.9393 12.8936 15.8298 12.8936C15.5398 12.8935 15.252 12.943 14.9787 13.04V10.8511H20.0851V14.5957H18.2366Z"></path>
                                                </svg>
                                            </div>
                                            <div class="text fw-6">Delivery & Return</div>
                                        </a>
                                        <a href="#share_social" data-bs-toggle="modal" class="tf-product-extra-icon">
                                            <div class="icon">
                                                <i class="icon-share"></i>
                                            </div>
                                            <div class="text fw-6">Share</div>
                                        </a>
                                    </div>
                                    <div class="tf-product-info-delivery-return">
                                        <div class="row">
                                            <div class="col-xl-6 col-12">
                                                <div class="tf-product-delivery">
                                                    <div class="icon">
                                                        <i class="icon-delivery-time"></i>
                                                    </div>
                                                    <p>Estimate delivery times: <span class="fw-7">12-26 days</span> (International), <span class="fw-7">3-6 days</span> (United States).</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-12">
                                                <div class="tf-product-delivery mb-0">
                                                    <div class="icon">
                                                        <i class="icon-return-order"></i>
                                                    </div>
                                                    <p>Return within <span class="fw-7">30 days</span> of purchase. Duties & taxes are non-refundable.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-product-info-trust-seal">
                                        <div class="tf-product-trust-mess">
                                            <i class="icon-safe"></i>
                                            <p class="fw-6">Guarantee Safe <br> Checkout</p>
                                        </div>
                                        <div class="tf-payment">
                                            <img src="images/payments/visa.png" alt="">
                                            <img src="images/payments/img-1.png" alt="">
                                            <img src="images/payments/img-2.png" alt="">
                                            <img src="images/payments/img-3.png" alt="">
                                            <img src="images/payments/img-4.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Default -->
        <!-- Tabs -->
        <section class="flat-spacing-17 pt_0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="widget-tabs style-has-border">
                            <ul class="widget-menu-tab">
                                <li class="item-title active">
                                    <span class="inner">Description</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Additional Information</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Review</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Shipping</span>
                                </li>
                                <li class="item-title">
                                    <span class="inner">Return Policies</span>
                                </li>
                            </ul>
                            <div class="widget-content-tab">
                                <div class="widget-content-inner active">
                                    <div class="">
                                        <p class="mb_30"><?php echo $products['description']; ?></p>
                                        <div class="tf-product-des-demo"></div>
                                    </div>
                                </div>
                                <div class="widget-content-inner">
                                    <table class="tf-pr-attrs">
                                        <tbody>
                                            <tr class="tf-attr-pa-size">
                                                <th class="tf-attr-label">Size</th>
                                                <td class="tf-attr-value">
                                                    <p><?php
                                                        $sqs1l = mysqli_query($con, "SELECT * FROM variant WHERE product_id='$product_id' ORDER BY varient ASC");
                                                        $variants = [];
                                                        while ($variant = mysqli_fetch_array($sqs1l)) {
                                                            $variants[] = $variant['varient'];
                                                        }
                                                        echo htmlspecialchars(implode(", ", $variants));
                                                        ?></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="widget-content-inner">
                                    <div class="tab-reviews write-cancel-review-wrap">
                                        <div class="tab-reviews-heading">
                                            <div class="top">
                                                <div class="text-center">
                                                    <h1 class="number fw-6">4.8</h1>
                                                    <div class="list-star">
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                        <i class="icon icon-star"></i>
                                                    </div>
                                                    <p>(168 Ratings)</p>
                                                </div>
                                                <div class="rating-score">
                                                    <div class="item">
                                                        <div class="number-1 text-caption-1">5</div>
                                                        <i class="icon icon-star"></i>
                                                        <div class="line-bg">
                                                            <div style="width: 94.67%;"></div>
                                                        </div>
                                                        <div class="number-2 text-caption-1">59</div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="number-1 text-caption-1">4</div>
                                                        <i class="icon icon-star"></i>
                                                        <div class="line-bg">
                                                            <div style="width: 60%;"></div>
                                                        </div>
                                                        <div class="number-2 text-caption-1">46</div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="number-1 text-caption-1">3</div>
                                                        <i class="icon icon-star"></i>
                                                        <div class="line-bg">
                                                            <div style="width: 0%;"></div>
                                                        </div>
                                                        <div class="number-2 text-caption-1">0</div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="number-1 text-caption-1">2</div>
                                                        <i class="icon icon-star"></i>
                                                        <div class="line-bg">
                                                            <div style="width: 0%;"></div>
                                                        </div>
                                                        <div class="number-2 text-caption-1">0</div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="number-1 text-caption-1">1</div>
                                                        <i class="icon icon-star"></i>
                                                        <div class="line-bg">
                                                            <div style="width: 0%;"></div>
                                                        </div>
                                                        <div class="number-2 text-caption-1">0</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="tf-btn btn-outline-dark fw-6 btn-comment-review btn-cancel-review">Cancel Review</div>
                                                <div class="tf-btn btn-outline-dark fw-6 btn-comment-review btn-write-review">Write a review</div>
                                            </div>
                                        </div>
                                        <div class="reply-comment cancel-review-wrap">
                                            <div class="d-flex mb_24 gap-20 align-items-center justify-content-between flex-wrap">
                                                <h5 class="">03 Comments</h5>
                                                <div class="d-flex align-items-center gap-12">
                                                    <div class="text-caption-1">Sort by:</div>
                                                    <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                                                        <div class="btn-select">
                                                            <span class="text-sort-value">Most Recent</span>
                                                            <span class="icon icon-arrow-down"></span>
                                                        </div>
                                                        <div class="dropdown-menu">
                                                            <div class="select-item active"><span class="text-value-item">Most Recent</span></div>
                                                            <div class="select-item"><span class="text-value-item">Oldest</span></div>
                                                            <div class="select-item"><span class="text-value-item">Most Popular</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $sqsl = mysqli_query($con, "SELECT * FROM review WHERE product_id='$product_id'");
                                            while ($review = mysqli_fetch_array($sqsl)) {
                                            ?>
                                                <div class="reply-comment-wrap">
                                                    <div class="reply-comment-item">
                                                        <div class="user">
                                                            <div class="image">
                                                                <img src="images/collections/collection-circle-9.jpg" alt="">
                                                            </div>
                                                            <div>
                                                                <h6><a href="#" class="link"><?php echo htmlspecialchars($review['username']); ?></a></h6>
                                                                <div class="rating"><?= str_repeat('★', $review['rate']) . str_repeat('☆', 5 - $review['rate']) ?></div>
                                                                <div class="day text_black-2">1 days ago</div>
                                                            </div>
                                                        </div>
                                                        <h5 class="text_black-2"><?php echo htmlspecialchars($review['product_review_title']); ?></h5>
                                                        <p class="text_black-2"><?php echo nl2br(htmlspecialchars($review['product_review'])); ?></p>
                                                    </div>
                                            <?php
                                            }
                                            ?>
                                            <form action="review.php" method="POST">
                                                <div class="heading">
                                                    <h5>Write a review:</h5>
                                                    <div class="list-rating-check">
                                                        <input type="radio" id="star5" name="rate" value="5" />
                                                        <label for="star5" title="text"></label>
                                                        <input type="radio" id="star4" name="rate" value="4" />
                                                        <label for="star4" title="text"></label>
                                                        <input type="radio" id="star3" name="rate" value="3" />
                                                        <label for="star3" title="text"></label>
                                                        <input type="radio" id="star2" name="rate" value="2" />
                                                        <label for="star2" title="text"></label>
                                                        <input type="radio" id="star1" name="rate" value="1" />
                                                        <label for="star1" title="text"></label>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product_id); ?>">
                                                <div class="form-content">
                                                    <fieldset class="box-field">
                                                        <label class="label">Review Title</label>
                                                        <input type="text" placeholder="Give your review a title" name="product_review_title" tabindex="2" value="" aria-required="true" required="">
                                                    </fieldset>
                                                    <fieldset class="box-field">
                                                        <label class="label">Review</label>
                                                        <textarea rows="4" placeholder="Write your comment here" tabindex="2" name="product_review" aria-required="true" required=""></textarea>
                                                    </fieldset>
                                                    <div class="box-field group-2">
                                                        <fieldset>
                                                            <input type="text" placeholder="You Name (Public)" name="username" tabindex="2" value="" aria-required="true" required="">
                                                        </fieldset>
                                                        <fieldset>
                                                            <input type="email" placeholder="Your email (private)" name="email" tabindex="2" value="" aria-required="true" required="">
                                                        </fieldset>
                                                    </div>
                                                    <div class="box-check">
                                                        <input type="checkbox" name="availability" class="tf-check" id="check1">
                                                        <label class="text_black-2" for="check1">Save my name, email, and website in this browser for the next time I comment.</label>
                                                    </div>
                                                </div>
                                                <div class="button-submit">
                                                    <button class="tf-btn btn-fill animate-hover-btn">Submit Reviews</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="widget-content-inner">
                                        <div class="tf-page-privacy-policy">
                                            <div class="title">The Company Private Limited Policy</div>
                                            <p>The Company Private Limited and each of their respective subsidiary, parent and affiliated companies is deemed to operate this Website (“we” or “us”) recognizes that you care how information about you is used and shared. We have created this Privacy Policy to inform you what information we collect on the Website, how we use your information and the choices you have about the way your information is collected and used. Please read this Privacy Policy carefully. Your use of the Website indicates that you have read and accepted our privacy practices, as outlined in this Privacy Policy.</p>
                                            <p>Please be advised that the practices described in this Privacy Policy apply to information gathered by us or our subsidiaries, affiliates or agents: (i) through this Website, (ii) where applicable, through our Customer Service Department in connection with this Website, (iii) through information provided to us in our free standing retail stores, and (iv) through information provided to us in conjunction with marketing promotions and sweepstakes.</p>
                                            <p>We are not responsible for the content or privacy practices on any websites.</p>
                                            <p>We reserve the right, in our sole discretion, to modify, update, add to, discontinue, remove or otherwise change any portion of this Privacy Policy, in whole or in part, at any time. When we amend this Privacy Policy, we will revise the “last updated” date located at the top of this Privacy Policy.</p>
                                            <p>If you provide information to us or access or use the Website in any way after this Privacy Policy has been changed, you will be deemed to have unconditionally consented and agreed to such changes. The most current version of this Privacy Policy will be available on the Website and will supersede all previous versions of this Privacy Policy.</p>
                                            <p>If you have any questions regarding this Privacy Policy, you should contact our Customer Service Department by email at marketing@company.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Tabs -->
        <!-- You May Also Like -->
        <section class="flat-spacing-18">
            <div class="container">
                <div class="flat-title flex-row justify-content-between px-0" style="align-items: start;">
                    <span class="title wow fadeInUp font-poppins" data-wow-delay="0s">You may Also Like</span>
                    <div class="box-sw-navigation">
                        <div class="nav-sw round nav-next-sell-1 nav-next-slider"><span class="icon icon-arrow-left"></span></div>
                        <div class="nav-sw round nav-prev-sell-1 nav-prev-slider"><span class="icon icon-arrow-right"></span></div>
                    </div>
                </div>
            </div>
            <div class="container-full slider-layout-right">
                <div dir="ltr" class="swiper sw-wrapper-right tf-sw-product-sell-1" data-preview="4.2" data-tablet="3.2" data-mobile="1.3" data-space-lg="30" data-space-md="15" data-pagination="1" data-pagination-md="3" data-pagination-lg="4">
                    <div class="swiper-wrapper">
                        <?php
                        $sqsl = mysqli_query($con, "SELECT * FROM product ORDER BY RAND()");
                        while ($product = mysqli_fetch_assoc($sqsl)) {
                            $sql = mysqli_query($con, "SELECT * FROM product_images WHERE product_id='$product[product_id]' ORDER BY id ASC LIMIT 1");
                            $image = mysqli_fetch_assoc($sql);
                        ?>
                            <div class="swiper-slide" lazy="true">
                                <div class="card-product">
                                    <div class="card-product-wrapper rounded-0">
                                        <a href="product-images-grouped.php?id=<?php echo htmlspecialchars($product['product_id']); ?>" class="product-img">
                                            <img class="lazyload img-product" data-src="../admin/<?php echo htmlspecialchars($image['image_path']); ?>" src="../admin/<?php echo htmlspecialchars($image['image_path']); ?>" alt="image-product">
                                            <img class="lazyload img-hover" data-src="../admin/<?php echo htmlspecialchars($image['image_path']); ?>" src="../admin/<?php echo htmlspecialchars($image['image_path']); ?>" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                                <!-- Desktop Only -->
                                                <a 
                                                    class="xyx-toggle box-icon quickview tf-btn animate-hover-btn w-100 justify-content-center d-none d-lg-flex"
                                                    data-product-id="<?php echo $products['product_id']; ?>">
                                                    Quick View
                                                </a>

                                                <!-- Mobile Only -->
                                                <a 
                                                    class="xyx-toggle box-icon bg_white quickview tf-btn-loading d-flex d-lg-none" 
                                                    data-product-id="<?php echo $products['product_id']; ?>" 
                                                    style="position: absolute; left: 15px; bottom: 12px;">
                                                    <span class="icon icon-bag"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                        </div>
                                    </div>
                                    <!-- <div class="card-product-info">
                                        <a href="product-images-grouped.php?id=<?php echo htmlspecialchars($product['product_id']); ?>" class="title link font-poppins"><?php echo htmlspecialchars($product['product_title']); ?></a>
                                        <span class="price">₹<?php echo htmlspecialchars($product['regular_price']); ?>.00</span>
                                    </div> -->
                                    <div class="card-product-info">
                                            <a href="product-images-grouped.php?id=<?php echo htmlspecialchars($product['product_id']); ?>" class="title link fw-6"><?php echo htmlspecialchars($product['product_title']); ?></a>
                                            <span class="price">
                                                <span class="text_primary">₹<?php echo htmlspecialchars($product['regular_price']); ?>.00</span>
                                                <span class="fw-4 text-sale">₹<?php echo htmlspecialchars($product['offer_price']); ?>.00</span>
                                            </span>
                                        </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- /You May Also Like -->

        <!-- Footer -->
        <?php require "footer.php"; ?>
    </div>

    <!-- Modal compare_color -->
    <div class="modal fade modalDemo tf-product-modal modal-part-content" id="compare_color">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Compare color</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="tf-compare-color-wrapp">
                    <div class="tf-compare-color-grid">
                        <input type="checkbox" class="sr-only" id="remove-compare-color-beige-1">
                        <div class="tf-compare-color-item">
                            <div class="tf-compare-color-top">
                                <label for="remove-compare-color-beige-1" class="tf-compare-color-remove">Remove</label>
                                <img class="lazyload" data-src="images/shop/products/hmgoepprod2.jpg" src="images/shop/products/hmgoepprod2.jpg" alt="img-compare">
                            </div>
                            <div class="tf-compare-color-bottom">
                                <div class="tf-compare-color-color">
                                    <span class="tf-color-list-color bg-color-beige"></span>
                                    <span>Beige</span>
                                </div>
                                <form class="">
                                    <select class="tf-select" name="id">
                                        <option value="46633906045232" selected="">S - ₹599</option>
                                        <option value="47256262738224">M - ₹599</option>
                                        <option value="47256262770992">L - ₹599</option>
                                        <option value="47256262803760">XL - ₹599</option>
                                    </select>
                                    <a href="javascript:void(0);" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn btn-add-to-cart"><span>Add to cart</span></a>
                                </form>
                            </div>
                        </div>

                        <input type="checkbox" class="sr-only" id="remove-compare-color-beige-2">
                        <div class="tf-compare-color-item">
                            <div class="tf-compare-color-top">
                                <label for="remove-compare-color-beige-2" class="tf-compare-color-remove">Remove</label>
                                <img class="lazyload" data-src="images/shop/products/hmgoepprod12.jpg" src="images/shop/products/hmgoepprod12.jpg" alt="">
                            </div>
                            <div class="tf-compare-color-bottom">
                                <div class="tf-compare-color-color">
                                    <span class="tf-color-list-color bg-color-blue"></span>
                                    <span>Blue</span>
                                </div>
                                <form class="">
                                    <select class="tf-select" name="id">
                                        <option value="46633906045232" selected="">S - ₹599</option>
                                        <option value="47256262738224">M - ₹599</option>
                                        <option value="47256262770992">L - ₹599</option>
                                        <option value="47256262803760">XL - ₹599</option>
                                    </select>
                                    <a href="javascript:void(0);" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn btn-add-to-cart"><span>Add to cart</span></a>
                                </form>
                            </div>
                        </div>

                        <input type="checkbox" class="sr-only" id="remove-compare-color-beige-3">
                        <div class="tf-compare-color-item">
                            <div class="tf-compare-color-top">
                                <label for="remove-compare-color-beige-3" class="tf-compare-color-remove">Remove</label>
                                <img class="lazyload" data-src="images/shop/products/hmgoepprod7.jpg" src="images/shop/products/hmgoepprod7.jpg" alt="">
                            </div>
                            <div class="tf-compare-color-bottom">
                                <div class="tf-compare-color-color">
                                    <span class="tf-color-list-color bg-color-black"></span>
                                    <span>Black</span>
                                </div>
                                <form class="">
                                    <select class="tf-select" name="id">
                                        <option value="46633906045232" selected="">S - ₹599</option>
                                        <option value="47256262738224">M - ₹599</option>
                                        <option value="47256262770992">L - ₹599</option>
                                        <option value="47256262803760">XL - ₹599</option>
                                    </select>
                                    <a href="javascript:void(0);" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn btn-add-to-cart"><span>Add to cart</span></a>
                                </form>
                            </div>
                        </div>

                        <input type="checkbox" class="sr-only" id="remove-compare-color-beige-4">
                        <div class="tf-compare-color-item">
                            <div class="tf-compare-color-top">
                                <label for="remove-compare-color-beige-4" class="tf-compare-color-remove">Remove</label>
                                <img class="lazyload" data-src="images/shop/products/hmgoepprod14.jpg" src="images/shop/products/hmgoepprod14.jpg" alt="">
                            </div>
                            <div class="tf-compare-color-bottom">
                                <div class="tf-compare-color-color">
                                    <span class="tf-color-list-color bg-color-white"></span>
                                    <span>White</span>
                                </div>
                                <form class="">
                                    <select class="tf-select" name="id">
                                        <option value="46633906045232" selected="">S - ₹599</option>
                                        <option value="47256262738224">M - ₹599</option>
                                        <option value="47256262770992">L - ₹599</option>
                                        <option value="47256262803760">XL - ₹599</option>
                                    </select>
                                    <a href="javascript:void(0);" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn btn-add-to-cart"><span>Add to cart</span></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal compare_color -->

    <!-- modal ask_question -->
    <div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="ask_question">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Ask a question</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="overflow-y-auto">
                    <form class="">
                        <fieldset class="">
                            <label for="">Name *</label>
                            <input type="text" placeholder="" class="" name="text" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="">
                            <label for="">Email *</label>
                            <input type="email" placeholder="" class="" name="text" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="">
                            <label for="">Phone number</label>
                            <input type="number" placeholder="" class="" name="text" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="">
                            <label for="">Message</label>
                            <textarea name="message" rows="4" placeholder="" class="" tabindex="2" aria-required="true" required=""></textarea>
                        </fieldset>
                        <button type="submit" class="tf-btn w-100 btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn"><span>Send</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal ask_question -->

    <!-- modal delivery_return -->
    <div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="delivery_return">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Shipping & Delivery</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="overflow-y-auto">
                    <div class="tf-product-popup-delivery">
                        <div class="title">Delivery</div>
                        <p class="text-paragraph">All orders shipped with UPS Express.</p>
                        <p class="text-paragraph">Always free shipping for orders over US $250.</p>
                        <p class="text-paragraph">All orders are shipped with a UPS tracking number.</p>
                    </div>
                    <div class="tf-product-popup-delivery">
                        <div class="title">Returns</div>
                        <p class="text-paragraph">Items returned within 14 days of their original shipment date in same as new condition will be eligible for a full refund or store credit.</p>
                        <p class="text-paragraph">Refunds will be charged back to the original form of payment used for purchase.</p>
                        <p class="text-paragraph">Customer is responsible for shipping charges when making returns and shipping/handling fees of original purchase is non-refundable.</p>
                        <p class="text-paragraph">All sale items are final purchases.</p>
                    </div>
                    <div class="tf-product-popup-delivery">
                        <div class="title">Help</div>
                        <p class="text-paragraph">Give us a shout if you have any other questions and/or concerns.</p>
                        <p class="text-paragraph">Email: <a href="mailto:contact@domain.com" aria-describedby="a11y-external-message"><span class="__cf_email__">contact@domain.com</span></a></p>
                        <p class="text-paragraph mb-0">Phone: +1 (23) 456 789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal delivery_return -->

    <!-- modal share social -->
    <div class="modal modalCentered fade modalDemo tf-product-modal modal-part-content" id="share_social">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <div class="demo-title">Share</div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="overflow-y-auto">
                    <ul class="tf-social-icon d-flex gap-10">
                        <li><a href="#" class="box-icon social-facebook bg_line"><i class="icon icon-fb"></i></a></li>
                        <li><a href="#" class="box-icon social-twiter bg_line"><i class="icon icon-Icon-x"></i></a></li>
                        <li><a href="#" class="box-icon social-instagram bg_line"><i class="icon icon-instagram"></i></a></li>
                        <li><a href="#" class="box-icon social-tiktok bg_line"><i class="icon icon-tiktok"></i></a></li>
                        <li><a href="#" class="box-icon social-pinterest bg_line"><i class="icon icon-pinterest-1"></i></a></li>
                    </ul>
                    <form class="form-share" method="post" accept-charset="utf-8">
                        <fieldset>
                            <input type="text" value="https://themesflat.co/html/ecomus/" tabindex="0" aria-required="true">
                        </fieldset>
                        <div class="button-submit">
                            <button class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn" type="button">Copy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal share social -->
    
    <!-- Gotop -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>
    <!-- /Gotop -->

    <!-- toolbar-bottom -->
<?php require"toolbar-bottom.php"; ?>
    <!-- /toolbar-bottom -->

    <!-- Mobile Navigation -->
    <?php require "mob-header.php"; ?>

    <!-- Canvas Search -->
    <?php require "search.php"; ?>

    <!-- shoppingCart -->
    <?php require 'cart.php'; ?>
    <!-- /shoppingCart -->

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
                                            <a href="product-images-grouped.php">
                                                <img class="radius-3" src="images/products/orange-1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tf-compare-item">
                                        <div class="position-relative">
                                            <div class="icon">
                                                <i class="icon-close"></i>
                                            </div>
                                            <a href="product-images-grouped.php">
                                                <img class="radius-3" src="images/products/pink-1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-compare-buttons">
                                    <div class="tf-compare-buttons-wrap">
                                        <a href="compare.php" class="tf-btn radius-3 btn-fill justify-content-center fw-6 fs-14 flex-grow-1 animate-hover-btn ">Compare</a>
                                        <div class="tf-compapre-button-clear-all link">Clear All</div>
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
    
    <?php require 'model-login.php'; ?>

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
                            <a href="product-images-grouped.php">Ribbed Tank Top</a>
                            <div class="tf-product-info-price">
                                <div class="price-on-sale">₹599</div>
                                <div class="compare-at-price">$10.00</div>
                                <div class="badges-on-sale"><span>20</span>% OFF</div>
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
                                <input type="radio" name="size" id="values2-s" checked>
                                <label class="style-text" for="values2-s" data-value="S">
                                    <p>S</p>
                                </label>
                                <input type="radio" name="size" id="values2-m">
                                <label class="style-text" for="values2-m" data-value="M">
                                    <p>M</p>
                                </label>
                                <input type="radio" name="size" id="values2-l">
                                <label class="style-text" for="values2-l" data-value="L">
                                    <p>L</p>
                                </label>
                                <input type="radio" name="size" id="values2-xl">
                                <label class="style-text" for="values2-xl" data-value="XL">
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
                            <a href="javascript:void(0);" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>Add to cart -&nbsp;</span><span class="tf-qty-price">₹59</span></a>
                            <div class="tf-product-btn-wishlist btn-icon-action">
                                <i class="icon-heart"></i>
                                <i class="icon-delete"></i>
                            </div>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-product-btn-wishlist box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="icon icon-check"></span>
                            </a>
                            <div class="w-100">
                                <a href="upi://pay?pa=9360985467@sbi&pn=Abdellah&am=599&cu=INR" class="btns-full">Buy with <img src="images/payments/gpay.png" alt=""></a>
                                <a href="#" class="payment-more-option">More payment options</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal quick_add -->
    
    <?php require 'model-login.php'; ?>

    <!-- modal quick_view -->
    <div class="modal fade modalDemo" id="quick_view">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="wrap">
                    <div class="tf-product-media-wrap">
                        <div dir="ltr" class="swiper tf-single-slide">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <img src="images/products/orange-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <img src="images/products/pink-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next button-style-arrow single-slide-prev"></div>
                            <div class="swiper-button-prev button-style-arrow single-slide-next"></div>
                        </div>
                    </div>
                    <div class="tf-product-info-wrap position-relative">
                        <div class="tf-product-info-list">
                            <div class="tf-product-info-title">
                                <h5><a class="link" href="product-images-grouped.php">Ribbed Tank Top</a></h5>
                            </div>
                            <div class="tf-product-info-badges">
                                <div class="badges text-uppercase">Best seller</div>
                                <div class="product-status-content">
                                    <i class="icon-lightning"></i>
                                    <p class="fw-6">Selling fast! 48 people have this in their carts.</p>
                                </div>
                            </div>
                            <div class="tf-product-info-price">
                                <div class="price">₹599</div>
                            </div>
                            <div class="tf-product-description">
                                <p>Nunc arcu faucibus a et lorem eu a mauris adipiscing conubia ac aptent ligula facilisis a auctor habitant parturient a a.Interdum fermentum.</p>
                            </div>
                            <div class="tf-product-info-variant-picker">
                                <div class="variant-picker-item">
                                    <div class="variant-picker-label">
                                        Color: <span class="fw-6 variant-picker-label-value">Orange</span>
                                    </div>
                                    <div class="variant-picker-values">
                                        <input id="values-orange-1" type="radio" name="color-1" checked>
                                        <label class="hover-tooltip radius-60" for="values-orange-1" data-value="Orange">
                                            <span class="btn-checkbox bg-color-orange"></span>
                                            <span class="tooltip">Orange</span>
                                        </label>
                                        <input id="values-black-1" type="radio" name="color-1">
                                        <label class=" hover-tooltip radius-60" for="values-black-1" data-value="Black">
                                            <span class="btn-checkbox bg-color-black"></span>
                                            <span class="tooltip">Black</span>
                                        </label>
                                        <input id="values-white-1" type="radio" name="color-1">
                                        <label class="hover-tooltip radius-60" for="values-white-1" data-value="White">
                                            <span class="btn-checkbox bg-color-white"></span>
                                            <span class="tooltip">White</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="variant-picker-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="variant-picker-label">
                                            Size: <span class="fw-6 variant-picker-label-value">S</span>
                                        </div>
                                        <div class="find-size btn-choose-size fw-6">Find your size</div>
                                    </div>
                                    <div class="variant-picker-values">
                                        <input type="radio" name="size-1" id="values-s-1" checked>
                                        <label class="style-text" for="values-s-1" data-value="S">
                                            <p>S</p>
                                        </label>
                                        <input type="radio" name="size-1" id="values-m-1">
                                        <label class="style-text" for="values-m-1" data-value="M">
                                            <p>M</p>
                                        </label>
                                        <input type="radio" name="size-1" id="values-l-1">
                                        <label class="style-text" for="values-l-1" data-value="L">
                                            <p>L</p>
                                        </label>
                                        <input type="radio" name="size-1" id="values-xl-1">
                                        <label class="style-text" for="values-xl-1" data-value="XL">
                                            <p>XL</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-product-info-quantity">
                                <div class="quantity-title fw-6">Quantity</div>
                                <div class="wg-quantity">
                                    <span class="btn-quantity minus-btn">-</span>
                                    <input type="text" name="number" value="1">
                                    <span class="btn-quantity plus-btn">+</span>
                                </div>
                            </div>
                            <div class="tf-product-info-buy-button">
                                <form class="">
                                    <a href="javascript:void(0);" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>Add to cart -&nbsp;</span><span class="tf-qty-price">₹599</span></a>
                                    <a href="javascript:void(0);" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <div class="w-100">
                                        <a href="upi://pay?pa=9360985467@sbi&pn=Abdellah&am=599&cu=INR" class="btns-full">Buy with <img src="images/payments/gpay.png" alt=""></a>
                                        <a href="#" class="payment-more-option">More payment options</a>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <a href="product-images-grouped.php" class="tf-btn fw-6 btn-line">View full details<i class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal quick_view -->

    <!-- modal find_size -->
    <?php require "size-chart.php"; ?>
    <!-- /modal find_size -->

    <div class="xyx-overlay"></div>

        <div class="xyx-cart">
            <div class="xyx-header">
                <h2 class="m-title">Choose Option</h2>
                <button class="m-close">&times;</button>
            </div>
            <div class="m-body">
                <div class="wrap">
                    <div class="tf-mini-cart-wrap">
                        <div class="tf-mini-cart-main">
                            <div class="tf-mini-cart-sroll">
                                <div class="tf-mini-cart-items">
                                    <div class="tf-mini-cart-item" style="flex-direction: column;">
                                        <div class="mains" style="display: flex; gap: 30px; font-size: 16px; line-height: 1.5;">
                                            <div class="tf-mini-cart-image">
                                                <img src="images/products/white-2.jpg" alt="" style="max-width: 130px;">
                                            </div>
                                            <div class="tf-mini-cart-info" style="margin: auto 0;">
                                                <div class="content">
                                                    <div class="card-product-info">
                                                        <p class="title link fw-6">White Formal Shirt</p>
                                                        <span class="price">
                                                            <span class="text_primary">₹799.00</span>
                                                            <span class="fw-4 text-sale">₹1299.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="tf-product-info-liveview" style="padding: 20px 0;">
                                            <p class="fw-6" style="color: green;">Instock</p>
                                        </div> 
                                        <div class="variant-picker-item mb_30">
                                            <div class="variant-picker-label">
                                                Size: <span class="fw-6 variant-picker-label-value">S</span>
                                            </div>
                                            <div class="variant-picker-values">
                                                <input type="radio" name="size" id="values-s" checked="">
                                                <label class="style-text sml" for="values-s" data-value="S">
                                                    <p>S</p>
                                                </label>
                                                <input type="radio" name="size" id="values-m">
                                                <label class="style-text sml" for="values-m" data-value="M">
                                                    <p>M</p>
                                                </label>
                                                <input type="radio" name="size" id="values-l">
                                                <label class="style-text sml" for="values-l" data-value="L">
                                                    <p>L</p>
                                                </label>
                                                <input type="radio" name="size" id="values-xl">
                                                <label class="style-text sml" for="values-xl" data-value="XL">
                                                    <p>XL</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="tf-product-info-quantity mb_30">
                                            <div class="quantity-title fw-6">Quantity</div>
                                            <div class="wg-quantity">
                                                <span class="btn-quantity minus-btn">-</span>
                                                <input type="text" name="number" value="1" fdprocessedid="wwe1fl">
                                                <span class="btn-quantity plus-btn">+</span>
                                            </div>
                                        </div>
                                        <div class="tf-product-info-buy-button">
                                            <form class="">
                                                <a href="javascript:void(0);" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>Add to Cart</span></a>
                                                <div class="w-100">
                                                    <a href="#" class="btns-full">Buy with <img src="images/payments/gpay.png" alt=""></a>
                                                    <a href="#" class="payment-more-option">View Full Details</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".xyx-toggle").on("click", function () {
                    $(".xyx-cart, .xyx-overlay").toggleClass("active");
                });

                $(".m-close, .xyx-overlay").on("click", function () {
                    $(".xyx-cart, .xyx-overlay").removeClass("active");
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $(".xyx-toggle").on("click", function () {
                    let productId = $(this).data("product-id");

                    $.ajax({
                        url: 'quickview.php',
                        type: 'POST',
                        data: { product_id: productId },
                        success: function (response) {
                            $(".xyx-cart .m-body").html(response);
                            $(".xyx-cart, .xyx-overlay").addClass("active");
                        },
                        error: function () {
                            alert('Failed to load product details.');
                        }
                    });
                });

                $(".m-close, .xyx-overlay").on("click", function () {
                    $(".xyx-cart, .xyx-overlay").removeClass("active");
                });
            });
        </script>

    <!-- Javascript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/custom-carousel.js"></script>
    <script type="text/javascript" src="js/count-down.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/drift.min.js"></script>
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

    <!-- Wishlist Script -->
    <script>
        let isLoggedIn = false;

        const wishlistBtn = document.getElementById("wishlistBtn");
        const heartIcon = wishlistBtn.querySelector(".icon-heart");
        const deleteIcon = wishlistBtn.querySelector(".icon-delete");

        wishlistBtn.addEventListener("click", function () {
            if (!isLoggedIn) {
                const loginModal = new bootstrap.Modal(document.getElementById("login"));
                loginModal.show();
            } else {
                toggleWishlistIcon();
            }
        });

        document.getElementById("customLoginBtn").addEventListener("click", function () {
            const emailInput = document.querySelector('#login input[type="email"]');
            const passwordInput = document.querySelector('#login input[type="password"]');

            if (emailInput.value && passwordInput.value) {
                isLoggedIn = true;
                const loginModalEl = document.getElementById("login");
                const loginModal = bootstrap.Modal.getInstance(loginModalEl);
                loginModal.hide();
                toggleWishlistIcon();
            } else {
                alert("Please enter email and password.");
            }
        });

        function toggleWishlistIcon() {
            heartIcon.classList.toggle("d-none");
            deleteIcon.classList.toggle("d-none");
        }
    </script>

    <script type="module" src="js/model-viewer.min.js"></script>
    <script type="module" src="js/zoom.js"></script>

    <script>
        const sizeButtons = document.querySelectorAll('.size-btn');
        const salePriceEl = document.getElementById('sale-price');
        const comparePriceEl = document.getElementById('compare-price');
        const discountBadgeEl = document.getElementById('discount-badge').querySelector('span');

        sizeButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const newPrice = parseFloat(btn.getAttribute('data-price'));
                const oldPrice = parseFloat(comparePriceEl.textContent.replace('₹', ''));

                // Update displayed sale price
                salePriceEl.textContent = `₹${newPrice.toFixed(2)}`;

                // Update discount percentage
                const discount = Math.round(((oldPrice - newPrice) / oldPrice) * 100);
                discountBadgeEl.textContent = discount;
            });
        });

        // Trigger click on the initially checked radio
        document.querySelector('input[name="size1"]:checked + label').click();
    </script>
    
    <script>
  document.addEventListener('DOMContentLoaded', function () {
    const quantityInput = document.querySelector('.quantity-product');
    const displayInput = document.querySelector('.display-quantity');
    const decreaseBtn = document.querySelector('.btn-decrease');
    const increaseBtn = document.querySelector('.btn-increase');

    // Update display function
    function updateDisplay() {
      displayInput.value = quantityInput.value;
    }

    // Initial update
    updateDisplay();

    // Input change handler
    quantityInput.addEventListener('input', updateDisplay);

    // Button click handlers with small delay
    decreaseBtn.addEventListener('click', function () {
      setTimeout(updateDisplay, 10);
    });

    increaseBtn.addEventListener('click', function () {
      setTimeout(updateDisplay, 10);
    });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const sizeRadios = document.querySelectorAll('input[name="size1"]');
    const variantInput = document.getElementById('selected-variant-input');
    const salePriceDiv = document.getElementById('sale-price');

    function updateVariantDisplay() {
      const selectedRadio = document.querySelector('input[name="size1"]:checked');

      if (selectedRadio) {
        const price = selectedRadio.getAttribute('data-price');

        // Update input field (if needed for form submission)
        variantInput.value = price;

        // Update sale price div with formatted price
        salePriceDiv.innerHTML = `<span class="price-amount">₹${price}</span>`;
      }
    }

    sizeRadios.forEach(radio => {
      radio.addEventListener('change', updateVariantDisplay);
    });

    // Initialize on page load
    updateVariantDisplay();
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Get all radio buttons
    const sizeRadios = document.querySelectorAll('input[name="size1"]');
    const selectedVariantInput = document.getElementById('selected-variant');

    // Set initial value (if 'S' is checked by default)
    const checkedRadio = document.querySelector('input[name="size1"]:checked');
    if (checkedRadio) {
      selectedVariantInput.value = checkedRadio.value;
    }

    // Update input box when a new variant is selected
    sizeRadios.forEach(radio => {
      radio.addEventListener('change', function () {
        selectedVariantInput.value = this.value;
      });
    });
  });
</script>
</body>
</html>