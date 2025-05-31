<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Abdellah | Commerce</title>
    
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="fonts/fonts.css">
    
    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/image-compare-viewer.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    
    <!-- Favicon and Touch Icons -->
    <link rel="shortcut icon" href="images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png">
    
    <style>
        /* Banner display control for desktop/mobile */
        .banner-desk {
            display: block; /* Default display for non-mobile devices */
        }
        
        @media (max-width: 768px) {
            .banner-desk {
                display: none; /* Hide on mobile devices */
            }
        }
        
        .banner-mobile {
            display: none; /* Hide by default */
        }
        
        @media (max-width: 768px) {
            .banner-mobile {
                display: block; /* Show only on mobile devices */
            }
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
        }
        .tf-categories-container {
    overflow: auto; /* or scroll if needed */
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* IE/Edge */
}

.tf-categories-container::-webkit-scrollbar {
    width: 0px;
    height: 0px;
    background: transparent;
}

.tf-categories-container::-webkit-scrollbar-thumb {
    background: transparent;
    border: none;
}

    </style>
</head>

<body class="preload-wrapper">
    <!-- Preloader -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <!-- Header -->
        <?php require "header.php"; ?>

        <!-- Slide Show Banner -->
        <div class="banner-desk">
            <div class="tf-slideshow slider-home-4 slider-effect-fade position-relative">
                <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1"
                    data-centered="false" data-space="0" data-loop="true" data-auto-play="true" data-delay="10000"
                    data-speed="1500">
                    <div class="swiper-wrapper">
                        <?php
                        include '../admin/dbcon.php';
                        $sqsl = mysqli_query($con, "select * from banner");
                        while ($desktop_banner = mysqli_fetch_array($sqsl)) { ?>
                            <div class="swiper-slide" lazy="true">
                                <div class="wrap-slider">
                                    <a href="products.php?id=<?php echo "$desktop_banner[link]"; ?>">
                                        <img src="../admin/<?php echo "$desktop_banner[desktop_banner]"; ?>" alt="fashion-slideshow">
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="wrap-pagination sw-absolute-3">
                    <div class="sw-dots style-2 sw-pagination-slider"></div>
                </div>
            </div>
        </div>

        <div class="banner-mobile">
            <div class="tf-slideshow slider-home-4 slider-effect-fade position-relative">
                <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1"
                    data-centered="false" data-space="0" data-loop="true" data-auto-play="true" data-delay="5000"
                    data-speed="1500">
                    <div class="swiper-wrapper">
                        <?php
                        include '../admin/dbcon.php';
                        $sqsl = mysqli_query($con, "select * from banner");
                        while ($mobile_banner = mysqli_fetch_array($sqsl)) { ?>
                            <div class="swiper-slide" lazy="true">
                                <div class="wrap-slider">
                                    <a href="products.php?id=<?php echo "$mobile_banner[link]"; ?>">
                                        <img src="../admin/<?php echo "$mobile_banner[mobile_banner]"; ?>" alt="fashion-slideshow">
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="wrap-pagination sw-absolute-3">
                    <div class="sw-dots style-2 sw-pagination-slider"></div>
                </div>
            </div>
        </div>
        <!-- /SLide Show Banner -->

        <!-- Marquee -->
        <div class="tf-marquee bg_yellow-2">
            <div class="wrap-marquee">
                <?php
                $sqsl = mysqli_query($con, "SELECT * FROM marquee");
                while ($row = mysqli_fetch_array($sqsl)) { 
                    for ($i = 0; $i < 8; $i++) {
                ?>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="15" height="20" viewBox="0 0 15 20">
                            <path d="M14.5833 8H8.61742L9.94318 0L0 12H5.96591L4.64015 20L14.5833 8"></path>
                        </svg>
                    </div>
                    <p class="text"><?php echo htmlspecialchars($row['label']); ?></p>
                </div>
                <?php 
                    } // end for loop
                } // end while loop
                ?>
            </div>
        </div>
        <!-- /Marquee -->

        

        <div id="sections">
            <?php
            include '../admin/dbcon.php';
            $sqsl = mysqli_query($con, "select * from featured_collections limit 1");
            while ($row1 = mysqli_fetch_array($sqsl)) { ?>
                <!-- Collection List -->
                <section class="flat-spacing-26 section">
                    <div class="container">
                        <div class="flat-title">
                            <span class="title font-poppins wow fadeInUp" data-wow-delay="0s">Shop by Collection</span>
                        </div>
                    <?php } ?>
                    <div dir="ltr" class="swiper tf-sw-collection" data-preview="3" data-tablet="3" data-mobile="1"
                        data-space-lg="30" data-space-md="30" data-space="15" data-loop="false" data-auto-play="false">
                        <div class="swiper-wrapper">
                            <?php
                            include '../admin/dbcon.php';
                            $sqsl = mysqli_query($con, "select * from featured_collections");
                            while ($row = mysqli_fetch_array($sqsl)) { 
                                $sql1 = mysqli_query($con, "select * from catagory WHERE `catagory_name`='$row[collection_name]'");
                                $row2 = mysqli_fetch_array($sql1);
                            ?>
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item-centered hover-img">
                                    <div class="img-style">
                                        <a href="products.php?id=<?php echo "$row[collection_name]"; ?>">
                                            <img class="lazyload" data-src="../admin/<?php echo "$row2[image]"; ?>"
                                                src="../admin/<?php echo "$row2[image]"; ?>" alt="banner-collection">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="products.php?id=<?php echo "$row[collection_name]"; ?>"
                                            class="tf-btn btn-light hover-icon font-poppins"><span><?php echo "$row[collection_name]"; ?></span><i
                                                class="icon icon-arrow1-top-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="sw-dots style-2 sw-pagination-collection justify-content-center"></div>
                </section>
                <!-- /Collection List -->

                <!-- Featured Categories -->
                <?php
                include '../admin/dbcon.php';
                ?>
                <section class="flat-spacing-2 bg_grey-3" style="margin-bottom: 40px;">
                    <div class="container">
                        <div class="flat-title gap-12">
                            <span class="title wow fadeInUp" data-wow-delay="0s">Shop by Category</span>
                            <p class="sub-title wow fadeInUp" data-wow-delay="0s">Explore our diverse selection and shop by
                            category to find exactly what you're looking for.</p>
                        </div>
                        <div class="tf-categories-wrap justify-content-start">
                            <div class="tf-categories-container" style="overflow-x: auto; white-space: nowrap;">
                                <?php
                                $result = mysqli_query($con, "SELECT * FROM sub_featured_collections");
                                while ($row3 = mysqli_fetch_assoc($result)) {
                                    $collection_name = mysqli_real_escape_string($con, $row3['collection_name']);
                                    $label = htmlspecialchars($row3['label']);

                                    $subcat_query = mysqli_query($con, "SELECT * FROM sub_catagory WHERE sub_catagory_name='$collection_name'");
                                    $row2 = mysqli_fetch_assoc($subcat_query);
                                    $image = isset($row2['image']) ? $row2['image'] : 'images/collections/placeholder.jpg'; // fallback image
                                ?>
                                <div class="collection-item-circle style-2 hover-img">
                                    <div class="has-saleoff-wrap position-relative">
                                        <a href="shop-collection.php?id=<?php echo urlencode($collection_name); ?>" class="collection-image img-style">
                                            <img class="lazyload" data-src="../admin/<?php echo $image; ?>" src="../admin/<?php echo $image; ?>" alt="collection-img">
                                        </a>
                                        <div class="sale-off fw-5"><?php echo $label; ?></div>
                                    </div>
                                    <div class="collection-content text-center">
                                        <a href="shop-collection-list.php" class="link title fw-6"><?php echo htmlspecialchars($collection_name); ?></a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>

                            
                        </div>
                    </div>
                </section>
                <!-- /Featured Categories -->


                

                <!-- Trending product -->
                <?php
                include '../admin/dbcon.php';
                // Correct SQL query to get distinct collection names
                $sql = "SELECT DISTINCT collection_name FROM feature_products order by sno desc";
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { 
                        $sqls = mysqli_query($con, "SELECT * FROM feature_products WHERE collection_name='$row[collection_name]'");
                        $products = mysqli_fetch_array($sqls);
                        
                        $sql1 = mysqli_query($con, "SELECT * FROM feature_products WHERE collection_name='$row[collection_name]' order by sno asc LIMIT 1");
                        $serial = mysqli_fetch_array($sql1);
                ?>
                <section class="flat-spacing-18 pt_0 section">
                    <div class="container" style="max-width: 100%;">
                        <div class="flat-title flex-row justify-content-between px-0" style="align-items: start;">
                            <div class="view-all-btn">
                                <div class="divs-1">
                                    <span class="title wow fadeInUp font-poppins" data-wow-delay="0s"><?php echo "$row[collection_name]"; ?></span>
                                </div>
                                <div class="divs-2">
                                    <a href="products.php?id=<?php echo "$products[view_link]"; ?>" class="tf-btn fw-5 btn-line">View all<i
                                            class="icon icon-arrow1-top-left"></i></a>
                                </div>
                            </div>

                            <div class="box-sw-navigation">
                                <div class="nav-sw round nav-next-sell-<?php echo "$serial[sno]"; ?> nav-next-slider"><span
                                        class="icon icon-arrow-left"></span>
                                </div>
                                <div class="nav-sw round nav-prev-sell-<?php echo "$serial[sno]"; ?> nav-prev-slider"><span
                                        class="icon icon-arrow-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-full">
                        <div dir="ltr" class="swiper sw-wrapper-right tf-sw-product-sell-<?php echo "$serial[sno]"; ?>" data-preview="4.2"
                            data-tablet="3.2" data-mobile="1.3" data-space-lg="30" data-space-md="15" data-pagination="1"
                            data-pagination-md="3" data-pagination-lg="4">
                            <div class="swiper-wrapper">
                                <?php 
                                $sqsl = mysqli_query($con, "select * from feature_products WHERE collection_name='$row[collection_name]'");
                                while ($row3 = mysqli_fetch_array($sqsl)) { 
                                    $sqls = mysqli_query($con, "SELECT * FROM product WHERE product_id='$row3[product_id]'");
                                    $products = mysqli_fetch_array($sqls);
                                    
                                    if ($products) {
                                        $sqls1 = mysqli_query($con, "SELECT * FROM product_images WHERE product_id='$products[product_id]' order by id asc LIMIT 1");
                                        $image = mysqli_fetch_array($sqls1);

                                        $sqls2 = mysqli_query($con, "SELECT * FROM product_images WHERE product_id='$products[product_id]' ORDER BY id DESC LIMIT 2");
                                        // Fetch first row (but ignore it)
                                        mysqli_fetch_array($sqls2);
                                        // Now fetch the second row (the one you want)
                                        $image1 = mysqli_fetch_array($sqls2);
                                ?>
                                <div class="swiper-slide" lazy="true">
                                    <div class="card-product">
                                        <div class="card-product-wrapper rounded-0">
                                            <a href="product-images-grouped.php?id=<?php echo "$products[product_id]"; ?>" class="product-img">
                                                <img class="lazyload img-product"
                                                    data-src="../admin/<?php echo "$image[image_path]"; ?>"
                                                    src="../admin/<?php echo "$image[image_path]"; ?>" alt="image-product">
                                                <img class="lazyload img-hover" data-src="../admin/<?php echo "$image1[image_path]"; ?>"
                                                    src="../admin/<?php echo "$image1[image_path]"; ?>" alt="image-product">
                                            </a>
                                            <div class="on-sale-wrap text-end">
                                                <div class="on-sale-item">SAVE ₹<?php 
                                                    $save = $products['offer_price'] - $products['regular_price'];
                                                    echo "$save";
                                                ?>.00</div>
                                            </div>

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
                                        <div class="card-product-info">
                                            <a href="product-images-grouped.php?id=<?php echo "$products[product_id]"; ?>" class="title link fw-6"><?php echo "$products[product_title]"; ?></a>
                                            <span class="price">
                                                <span class="text_primary">₹<?php echo "$products[regular_price]"; ?>.00</span>
                                                <span class="fw-4 text-sale">₹<?php echo "$products[offer_price]"; ?>.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Trending product -->
                <?php
                    }
                } else {
                    echo "No collections found";
                }
                ?>
                <!-- Marquee -->
                <section class="flat-spacing-9 pt_0 section">
                    <div class="tf-marquee type-big">
                        <div class="wrap-marquee">
                            <div class="marquee-item">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="44" viewBox="0 0 41 44"
                                        fill="none">
                                        <path
                                            d="M39.8055 21.092C35.4409 21.0775 30.8593 20.1853 27.411 17.3399C24.5125 14.9478 22.7908 11.5526 21.9565 7.93551C21.4356 5.67845 21.2475 3.36835 21.262 1.05825C21.262 0.575971 20.8762 0.36377 20.5 0.36377C20.1238 0.36377 19.738 0.575971 19.738 1.05825C19.7573 4.99845 19.2027 9.07368 17.3652 12.6136C15.6145 15.9847 12.7305 18.5359 9.15686 19.8333C6.60562 20.7592 3.89523 21.0872 1.19448 21.0968C0.712202 21.0968 0.5 21.4875 0.5 21.8636C0.5 22.2398 0.712202 22.6305 1.19448 22.6305C5.55908 22.6449 10.1407 23.5371 13.589 26.3826C16.4875 28.7747 18.2092 32.1699 19.0435 35.787C19.5644 38.044 19.7476 40.3541 19.738 42.6642C19.738 43.1465 20.1238 43.3587 20.5 43.3587C20.8762 43.3587 21.262 43.1465 21.262 42.6642C21.2427 38.724 21.7973 34.6488 23.6348 31.1089C25.3855 27.7378 28.2695 25.1865 31.8431 23.8892C34.3944 22.9632 37.1048 22.6353 39.8055 22.6256C40.2878 22.6256 40.5 22.235 40.5 21.8588C40.5 21.4826 40.2878 21.092 39.8055 21.092ZM26.5381 25.2299C23.3985 27.7522 21.4838 31.4561 20.5772 35.3288C20.5482 35.4445 20.5289 35.5651 20.5 35.6809C20.0901 33.8193 19.4727 32.0107 18.5854 30.318C16.6659 26.6527 13.4829 23.9423 9.6102 22.5195C8.87714 22.2495 8.12479 22.0324 7.36279 21.854C9.92368 21.2415 12.3544 20.1757 14.4571 18.4877C17.5967 15.9654 19.5113 12.2615 20.418 8.38885C20.447 8.2731 20.4662 8.15253 20.4952 8.03679C20.9051 9.89837 21.5224 11.7069 22.4098 13.3997C24.3293 17.065 27.5123 19.7754 31.385 21.1981C32.118 21.4682 32.8704 21.6852 33.6324 21.8636C31.0715 22.481 28.6408 23.542 26.5381 25.2299Z"
                                            fill="black"></path>
                                    </svg>
                                </div>
                                <p class="text fw-6">The benefits of gifting with us.</p>
                            </div>
                            <div class="marquee-item">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="44" viewBox="0 0 41 44"
                                        fill="none">
                                        <path
                                            d="M39.8055 21.092C35.4409 21.0775 30.8593 20.1853 27.411 17.3399C24.5125 14.9478 22.7908 11.5526 21.9565 7.93551C21.4356 5.67845 21.2475 3.36835 21.262 1.05825C21.262 0.575971 20.8762 0.36377 20.5 0.36377C20.1238 0.36377 19.738 0.575971 19.738 1.05825C19.7573 4.99845 19.2027 9.07368 17.3652 12.6136C15.6145 15.9847 12.7305 18.5359 9.15686 19.8333C6.60562 20.7592 3.89523 21.0872 1.19448 21.0968C0.712202 21.0968 0.5 21.4875 0.5 21.8636C0.5 22.2398 0.712202 22.6305 1.19448 22.6305C5.55908 22.6449 10.1407 23.5371 13.589 26.3826C16.4875 28.7747 18.2092 32.1699 19.0435 35.787C19.5644 38.044 19.7476 40.3541 19.738 42.6642C19.738 43.1465 20.1238 43.3587 20.5 43.3587C20.8762 43.3587 21.262 43.1465 21.262 42.6642C21.2427 38.724 21.7973 34.6488 23.6348 31.1089C25.3855 27.7378 28.2695 25.1865 31.8431 23.8892C34.3944 22.9632 37.1048 22.6353 39.8055 22.6256C40.2878 22.6256 40.5 22.235 40.5 21.8588C40.5 21.4826 40.2878 21.092 39.8055 21.092ZM26.5381 25.2299C23.3985 27.7522 21.4838 31.4561 20.5772 35.3288C20.5482 35.4445 20.5289 35.5651 20.5 35.6809C20.0901 33.8193 19.4727 32.0107 18.5854 30.318C16.6659 26.6527 13.4829 23.9423 9.6102 22.5195C8.87714 22.2495 8.12479 22.0324 7.36279 21.854C9.92368 21.2415 12.3544 20.1757 14.4571 18.4877C17.5967 15.9654 19.5113 12.2615 20.418 8.38885C20.447 8.2731 20.4662 8.15253 20.4952 8.03679C20.9051 9.89837 21.5224 11.7069 22.4098 13.3997C24.3293 17.065 27.5123 19.7754 31.385 21.1981C32.118 21.4682 32.8704 21.6852 33.6324 21.8636C31.0715 22.481 28.6408 23.542 26.5381 25.2299Z"
                                            fill="black"></path>
                                    </svg>
                                </div>
                                <p class="text fw-6">Flexible. Safe.Easy.</p>
                            </div>
                            <div class="marquee-item">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="44" viewBox="0 0 41 44"
                                        fill="none">
                                        <path
                                            d="M39.8055 21.092C35.4409 21.0775 30.8593 20.1853 27.411 17.3399C24.5125 14.9478 22.7908 11.5526 21.9565 7.93551C21.4356 5.67845 21.2475 3.36835 21.262 1.05825C21.262 0.575971 20.8762 0.36377 20.5 0.36377C20.1238 0.36377 19.738 0.575971 19.738 1.05825C19.7573 4.99845 19.2027 9.07368 17.3652 12.6136C15.6145 15.9847 12.7305 18.5359 9.15686 19.8333C6.60562 20.7592 3.89523 21.0872 1.19448 21.0968C0.712202 21.0968 0.5 21.4875 0.5 21.8636C0.5 22.2398 0.712202 22.6305 1.19448 22.6305C5.55908 22.6449 10.1407 23.5371 13.589 26.3826C16.4875 28.7747 18.2092 32.1699 19.0435 35.787C19.5644 38.044 19.7476 40.3541 19.738 42.6642C19.738 43.1465 20.1238 43.3587 20.5 43.3587C20.8762 43.3587 21.262 43.1465 21.262 42.6642C21.2427 38.724 21.7973 34.6488 23.6348 31.1089C25.3855 27.7378 28.2695 25.1865 31.8431 23.8892C34.3944 22.9632 37.1048 22.6353 39.8055 22.6256C40.2878 22.6256 40.5 22.235 40.5 21.8588C40.5 21.4826 40.2878 21.092 39.8055 21.092ZM26.5381 25.2299C23.3985 27.7522 21.4838 31.4561 20.5772 35.3288C20.5482 35.4445 20.5289 35.5651 20.5 35.6809C20.0901 33.8193 19.4727 32.0107 18.5854 30.318C16.6659 26.6527 13.4829 23.9423 9.6102 22.5195C8.87714 22.2495 8.12479 22.0324 7.36279 21.854C9.92368 21.2415 12.3544 20.1757 14.4571 18.4877C17.5967 15.9654 19.5113 12.2615 20.418 8.38885C20.447 8.2731 20.4662 8.15253 20.4952 8.03679C20.9051 9.89837 21.5224 11.7069 22.4098 13.3997C24.3293 17.065 27.5123 19.7754 31.385 21.1981C32.118 21.4682 32.8704 21.6852 33.6324 21.8636C31.0715 22.481 28.6408 23.542 26.5381 25.2299Z"
                                            fill="black"></path>
                                    </svg>
                                </div>
                                <p class="text fw-6">The benefits of gifting with us.</p>
                            </div>
                            <div class="marquee-item">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="44" viewBox="0 0 41 44"
                                        fill="none">
                                        <path
                                            d="M39.8055 21.092C35.4409 21.0775 30.8593 20.1853 27.411 17.3399C24.5125 14.9478 22.7908 11.5526 21.9565 7.93551C21.4356 5.67845 21.2475 3.36835 21.262 1.05825C21.262 0.575971 20.8762 0.36377 20.5 0.36377C20.1238 0.36377 19.738 0.575971 19.738 1.05825C19.7573 4.99845 19.2027 9.07368 17.3652 12.6136C15.6145 15.9847 12.7305 18.5359 9.15686 19.8333C6.60562 20.7592 3.89523 21.0872 1.19448 21.0968C0.712202 21.0968 0.5 21.4875 0.5 21.8636C0.5 22.2398 0.712202 22.6305 1.19448 22.6305C5.55908 22.6449 10.1407 23.5371 13.589 26.3826C16.4875 28.7747 18.2092 32.1699 19.0435 35.787C19.5644 38.044 19.7476 40.3541 19.738 42.6642C19.738 43.1465 20.1238 43.3587 20.5 43.3587C20.8762 43.3587 21.262 43.1465 21.262 42.6642C21.2427 38.724 21.7973 34.6488 23.6348 31.1089C25.3855 27.7378 28.2695 25.1865 31.8431 23.8892C34.3944 22.9632 37.1048 22.6353 39.8055 22.6256C40.2878 22.6256 40.5 22.235 40.5 21.8588C40.5 21.4826 40.2878 21.092 39.8055 21.092ZM26.5381 25.2299C23.3985 27.7522 21.4838 31.4561 20.5772 35.3288C20.5482 35.4445 20.5289 35.5651 20.5 35.6809C20.0901 33.8193 19.4727 32.0107 18.5854 30.318C16.6659 26.6527 13.4829 23.9423 9.6102 22.5195C8.87714 22.2495 8.12479 22.0324 7.36279 21.854C9.92368 21.2415 12.3544 20.1757 14.4571 18.4877C17.5967 15.9654 19.5113 12.2615 20.418 8.38885C20.447 8.2731 20.4662 8.15253 20.4952 8.03679C20.9051 9.89837 21.5224 11.7069 22.4098 13.3997C24.3293 17.065 27.5123 19.7754 31.385 21.1981C32.118 21.4682 32.8704 21.6852 33.6324 21.8636C31.0715 22.481 28.6408 23.542 26.5381 25.2299Z"
                                            fill="black"></path>
                                    </svg>
                                </div>
                                <p class="text fw-6">Flexible. Safe.Easy.</p>
                            </div>
                            <div class="marquee-item">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="44" viewBox="0 0 41 44"
                                        fill="none">
                                        <path
                                            d="M39.8055 21.092C35.4409 21.0775 30.8593 20.1853 27.411 17.3399C24.5125 14.9478 22.7908 11.5526 21.9565 7.93551C21.4356 5.67845 21.2475 3.36835 21.262 1.05825C21.262 0.575971 20.8762 0.36377 20.5 0.36377C20.1238 0.36377 19.738 0.575971 19.738 1.05825C19.7573 4.99845 19.2027 9.07368 17.3652 12.6136C15.6145 15.9847 12.7305 18.5359 9.15686 19.8333C6.60562 20.7592 3.89523 21.0872 1.19448 21.0968C0.712202 21.0968 0.5 21.4875 0.5 21.8636C0.5 22.2398 0.712202 22.6305 1.19448 22.6305C5.55908 22.6449 10.1407 23.5371 13.589 26.3826C16.4875 28.7747 18.2092 32.1699 19.0435 35.787C19.5644 38.044 19.7476 40.3541 19.738 42.6642C19.738 43.1465 20.1238 43.3587 20.5 43.3587C20.8762 43.3587 21.262 43.1465 21.262 42.6642C21.2427 38.724 21.7973 34.6488 23.6348 31.1089C25.3855 27.7378 28.2695 25.1865 31.8431 23.8892C34.3944 22.9632 37.1048 22.6353 39.8055 22.6256C40.2878 22.6256 40.5 22.235 40.5 21.8588C40.5 21.4826 40.2878 21.092 39.8055 21.092ZM26.5381 25.2299C23.3985 27.7522 21.4838 31.4561 20.5772 35.3288C20.5482 35.4445 20.5289 35.5651 20.5 35.6809C20.0901 33.8193 19.4727 32.0107 18.5854 30.318C16.6659 26.6527 13.4829 23.9423 9.6102 22.5195C8.87714 22.2495 8.12479 22.0324 7.36279 21.854C9.92368 21.2415 12.3544 20.1757 14.4571 18.4877C17.5967 15.9654 19.5113 12.2615 20.418 8.38885C20.447 8.2731 20.4662 8.15253 20.4952 8.03679C20.9051 9.89837 21.5224 11.7069 22.4098 13.3997C24.3293 17.065 27.5123 19.7754 31.385 21.1981C32.118 21.4682 32.8704 21.6852 33.6324 21.8636C31.0715 22.481 28.6408 23.542 26.5381 25.2299Z"
                                            fill="black"></path>
                                    </svg>
                                </div>
                                <p class="text fw-6">The benefits of gifting with us.</p>
                            </div>
                            <div class="marquee-item">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="44" viewBox="0 0 41 44"
                                        fill="none">
                                        <path
                                            d="M39.8055 21.092C35.4409 21.0775 30.8593 20.1853 27.411 17.3399C24.5125 14.9478 22.7908 11.5526 21.9565 7.93551C21.4356 5.67845 21.2475 3.36835 21.262 1.05825C21.262 0.575971 20.8762 0.36377 20.5 0.36377C20.1238 0.36377 19.738 0.575971 19.738 1.05825C19.7573 4.99845 19.2027 9.07368 17.3652 12.6136C15.6145 15.9847 12.7305 18.5359 9.15686 19.8333C6.60562 20.7592 3.89523 21.0872 1.19448 21.0968C0.712202 21.0968 0.5 21.4875 0.5 21.8636C0.5 22.2398 0.712202 22.6305 1.19448 22.6305C5.55908 22.6449 10.1407 23.5371 13.589 26.3826C16.4875 28.7747 18.2092 32.1699 19.0435 35.787C19.5644 38.044 19.7476 40.3541 19.738 42.6642C19.738 43.1465 20.1238 43.3587 20.5 43.3587C20.8762 43.3587 21.262 43.1465 21.262 42.6642C21.2427 38.724 21.7973 34.6488 23.6348 31.1089C25.3855 27.7378 28.2695 25.1865 31.8431 23.8892C34.3944 22.9632 37.1048 22.6353 39.8055 22.6256C40.2878 22.6256 40.5 22.235 40.5 21.8588C40.5 21.4826 40.2878 21.092 39.8055 21.092ZM26.5381 25.2299C23.3985 27.7522 21.4838 31.4561 20.5772 35.3288C20.5482 35.4445 20.5289 35.5651 20.5 35.6809C20.0901 33.8193 19.4727 32.0107 18.5854 30.318C16.6659 26.6527 13.4829 23.9423 9.6102 22.5195C8.87714 22.2495 8.12479 22.0324 7.36279 21.854C9.92368 21.2415 12.3544 20.1757 14.4571 18.4877C17.5967 15.9654 19.5113 12.2615 20.418 8.38885C20.447 8.2731 20.4662 8.15253 20.4952 8.03679C20.9051 9.89837 21.5224 11.7069 22.4098 13.3997C24.3293 17.065 27.5123 19.7754 31.385 21.1981C32.118 21.4682 32.8704 21.6852 33.6324 21.8636C31.0715 22.481 28.6408 23.542 26.5381 25.2299Z"
                                            fill="black"></path>
                                    </svg>
                                </div>
                                <p class="text fw-6">Flexible. Safe.Easy.</p>
                            </div>
                        </div>
                    </div>
                </section>            
                <div class="container">
                    <div class="line"></div>
                </div>
                <!-- /Marquee -->

                <!-- Gift Card Product -->
                <section class="flat-spacing-11 section">
                    <div class="container">
                        <div class="tf-main-product section-image-zoom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="tf-product-media-wrap sticky-top">
                                            <div class="other-image-zoom" id="gallery-started">
                                                <a href="images/shop/products/gift-card-2.jpg" target="_blank" class="item"
                                                    data-pswp-width="1409px" data-pswp-height="1001px">
                                                    <img class="radius-10 tf-image-zoom lazyload"
                                                        data-zoom="images/shop/products/gift-card-2.jpg"
                                                        data-src="images/shop/products/gift-card-2.jpg"
                                                        src="images/shop/products/gift-card-2.jpg" alt="img-giftcard">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tf-product-info-wrap position-relative">
                                            <div class="tf-zoom-main"></div>
                                            <div class="tf-product-info-list other-image-zoom">
                                                <div class="tf-product-info-title">
                                                    <h5>Abdellah eGift Card</h5>
                                                </div>
                                                <div class="tf-product-info-badges">
                                                    <div class="badges">BEST SELLER</div>
                                                    <div class="product-status-content">
                                                        <i class="icon-lightning"></i>
                                                        <p class="fw-6">Selling fast! 72 people have this in their carts.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="tf-product-info-price">
                                                    <div class="price-on-sale text-black">₹268.00</div>
                                                </div>
                                                <div class="tf-product-info-liveview">
                                                    <div class="liveview-count">20</div>
                                                    <p class="fw-6">People are viewing this right now</p>
                                                </div>
                                                <div class="tf-product-info-countdown">
                                                    <div class="countdown-wrap">
                                                        <div class="countdown-title">
                                                            <i class="icon-time"></i>
                                                            <p>HURRY UP! SALE ENDS IN:</p>
                                                        </div>
                                                        <div class="tf-countdown style-1">
                                                            <div class="js-countdown" data-timer="1007500"
                                                                data-labels="Days :,Hours :,Mins :,Secs"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tf-product-info-variant-picker">
                                                    <div class="variant-picker-item">
                                                        <div class="variant-picker-label">
                                                            Denominations: <span
                                                                class="fw-6 variant-picker-label-value">$268.00</span>
                                                        </div>
                                                        <div class="variant-picker-values">
                                                            <input type="radio" name="price" id="values-1" checked>
                                                            <label class="style-text size-btn" data-price="268"
                                                                for="values-1" data-value="$268.00">
                                                                <p>₹268.00</p>
                                                            </label>
                                                            <input type="radio" name="price" id="values-2">
                                                            <label class="style-text size-btn" data-price="333"
                                                                for="values-2" data-value="$333.00">
                                                                <p>₹333.00</p>
                                                            </label>
                                                            <input type="radio" name="price" id="values-3">
                                                            <label class="style-text size-btn" data-price="564"
                                                                for="values-3" data-value="$564.00">
                                                                <p>₹564.00</p>
                                                            </label>
                                                            <input type="radio" name="price" id="values-4">
                                                            <label class="style-text size-btn" data-price="633"
                                                                for="values-4" data-value="$633.00">
                                                                <p>₹633.00</p>
                                                            </label>
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
                                                    <form class="">
                                                        <div
                                                            class="tf-cart-checkbox mb_12 w-100 item-has-checkox opacity-100 flex-wrap">
                                                            <div class="tf-checkbox-wrapp">
                                                                <input class="" type="checkbox" id="CartDrawer-Form_agree"
                                                                    name="agree_checkbox">
                                                                <div>
                                                                    <i class="icon-check"></i>
                                                                </div>
                                                            </div>
                                                            <label for="CartDrawer-Form_agree" class="fw-6">
                                                                I want to send this as a gift
                                                            </label>
                                                            <div class="wrap-content w-100">
                                                                <div class="tf-product-form">
                                                                    <div class="tf-field">
                                                                        <input class="tf-field-input tf-input"
                                                                            placeholder=" " type="email" id="property1"
                                                                            name="properties[email]">
                                                                        <label class="tf-field-label"
                                                                            for="property1">Recipient
                                                                            email</label>
                                                                    </div>
                                                                    <div class="tf-field">
                                                                        <input class="tf-field-input tf-input"
                                                                            placeholder=" " type="text" id="property2"
                                                                            name="properties[name]">
                                                                        <label class="tf-field-label"
                                                                            for="property2">Recipient
                                                                            name (optional)</label>
                                                                    </div>
                                                                    <div class="tf-field">
                                                                        <textarea class="tf-field-input tf-input"
                                                                            name="note" id="property3"
                                                                            placeholder=""></textarea>
                                                                        <label class="tf-field-label"
                                                                            for="property3">Message
                                                                            (optional)</label>
                                                                        <p class="text-end">200 characters max</p>
                                                                    </div>
                                                                    <div class="tf-field style-1">
                                                                        <input class="fw-6" type="date" name="date"
                                                                            value="">
                                                                        <label class="tf-field-label" for="">Send on
                                                                            (optional)</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:void(0);"
                                                            class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>Add
                                                                to cart -&nbsp;</span><span
                                                                class="tf-qty-price total-price">$268.00</span></a>
                                                        <a href="javascript:void(0);"
                                                            class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist btn-icon-action">
                                                            <span class="icon icon-heart"></span>
                                                            <span class="tooltip">Add to Wishlist</span>
                                                            <span class="icon icon-delete"></span>
                                                        </a>
                                                    </form>
                                                </div>
                                                <div class="tf-product-info-extra-link">
                                                    <a href="#ask_question" data-bs-toggle="modal"
                                                        class="tf-product-extra-icon">
                                                        <div class="icon">
                                                            <svg class="d-inline-block" xmlns="http://www.w3.org/2000/svg"
                                                                width="20" height="20" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path
                                                                    d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18ZM9 13H11V15H9V13ZM11 11.355V12H9V10.5C9 10.2348 9.10536 9.98043 9.29289 9.79289C9.48043 9.60536 9.73478 9.5 10 9.5C10.2841 9.49998 10.5623 9.4193 10.8023 9.26733C11.0423 9.11536 11.2343 8.89837 11.3558 8.64158C11.4773 8.3848 11.5234 8.0988 11.4887 7.81684C11.454 7.53489 11.34 7.26858 11.1598 7.04891C10.9797 6.82924 10.7409 6.66523 10.4712 6.57597C10.2015 6.48671 9.91204 6.47587 9.63643 6.54471C9.36081 6.61354 9.11042 6.75923 8.91437 6.96482C8.71832 7.1704 8.58468 7.42743 8.529 7.706L6.567 7.313C6.68863 6.70508 6.96951 6.14037 7.38092 5.67659C7.79233 5.2128 8.31952 4.86658 8.90859 4.67332C9.49766 4.48006 10.1275 4.44669 10.7337 4.57661C11.3399 4.70654 11.9007 4.99511 12.3588 5.41282C12.8169 5.83054 13.1559 6.36241 13.3411 6.95406C13.5263 7.54572 13.5511 8.17594 13.4129 8.78031C13.2747 9.38467 12.9785 9.9415 12.5545 10.3939C12.1306 10.8462 11.5941 11.1779 11 11.355Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="text fw-6">Ask a question</div>
                                                    </a>
                                                    <a href="#delivery_return" data-bs-toggle="modal"
                                                        class="tf-product-extra-icon">
                                                        <div class="icon">
                                                            <svg class="d-inline-block" xmlns="http://www.w3.org/2000/svg"
                                                                width="22" height="18" viewBox="0 0 22 18"
                                                                fill="currentColor">
                                                                <path
                                                                    d="M21.7872 10.4724C21.7872 9.73685 21.5432 9.00864 21.1002 8.4217L18.7221 5.27043C18.2421 4.63481 17.4804 4.25532 16.684 4.25532H14.9787V2.54885C14.9787 1.14111 13.8334 0 12.4255 0H9.95745V1.69779H12.4255C12.8948 1.69779 13.2766 2.07962 13.2766 2.54885V14.5957H8.15145C7.80021 13.6052 6.85421 12.8936 5.74468 12.8936C4.63515 12.8936 3.68915 13.6052 3.33792 14.5957H2.55319C2.08396 14.5957 1.70213 14.2139 1.70213 13.7447V2.54885C1.70213 2.07962 2.08396 1.69779 2.55319 1.69779H9.95745V0H2.55319C1.14528 0 0 1.14111 0 2.54885V13.7447C0 15.1526 1.14528 16.2979 2.55319 16.2979H3.33792C3.68915 17.2884 4.63515 18 5.74468 18C6.85421 18 7.80021 17.2884 8.15145 16.2979H13.423C13.7742 17.2884 14.7202 18 15.8297 18C16.9393 18 17.8853 17.2884 18.2365 16.2979H21.7872V10.4724ZM16.684 5.95745C16.9494 5.95745 17.2034 6.08396 17.3634 6.29574L19.5166 9.14894H14.9787V5.95745H16.684ZM5.74468 16.2979C5.27545 16.2979 4.89362 15.916 4.89362 15.4468C4.89362 14.9776 5.27545 14.5957 5.74468 14.5957C6.21392 14.5957 6.59575 14.9776 6.59575 15.4468C6.59575 15.916 6.21392 16.2979 5.74468 16.2979ZM15.8298 16.2979C15.3606 16.2979 14.9787 15.916 14.9787 15.4468C14.9787 14.9776 15.3606 14.5957 15.8298 14.5957C16.299 14.5957 16.6809 14.9776 16.6809 15.4468C16.6809 15.916 16.299 16.2979 15.8298 16.2979ZM18.2366 14.5957C17.8853 13.6052 16.9393 12.8936 15.8298 12.8936C15.5398 12.8935 15.252 12.943 14.9787 13.04V10.8511H20.0851V14.5957H18.2366Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="text fw-6">Delivery & Return</div>
                                                    </a>
                                                    <a href="#share_social" data-bs-toggle="modal"
                                                        class="tf-product-extra-icon">
                                                        <div class="icon">
                                                            <svg role="presentation" focusable="false" width="17"
                                                                height="20" fill="none">
                                                                <path
                                                                    d="M12.75 12.188a3.42 3.42 0 0 0-2.273.86L7.29 11a3.443 3.443 0 0 0 0-2l3.188-2.047a3.424 3.424 0 1 0-1.016-1.575L6.272 7.422a3.437 3.437 0 1 0 0 5.152l3.189 2.051a3.438 3.438 0 1 0 3.289-2.437Zm0-9.375a1.563 1.563 0 1 1 0 3.125 1.563 1.563 0 0 1 0-3.125ZM4 11.563a1.562 1.562 0 1 1 0-3.125 1.562 1.562 0 0 1 0 3.125Zm8.75 5.625a1.563 1.563 0 1 1 0-3.126 1.563 1.563 0 0 1 0 3.126Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text fw-6">Share</div>
                                                    </a>
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
                                                <div>
                                                    <a href="product-giftcard.php" class="tf-btn btn-line fw-6">View full
                                                        details<i class="icon icon-arrow1-top-left"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container">
                    <div class="line"></div>
                </div>
                <!-- /Gift Card Product -->

                <!-- Icon box -->
                <section class="flat-spacing-10 flat-iconbox wow fadeInUp has-line-bottom section" data-wow-delay="0s">
                    <div class="container">
                        <div class="wrap-carousel wrap-mobile">
                            <div dir="ltr" class="swiper tf-sw-mobile" data-preview="1" data-space="15">
                                <div class="swiper-wrapper wrap-iconbox">
                                    <div class="swiper-slide">
                                        <div class="tf-icon-box style-row">
                                            <div class="icon">
                                                <i class="icon-shipping"></i>
                                            </div>
                                            <div class="content">
                                                <div class="title fw-4 font-poppins">Free Shipping</div>
                                                <p>Free shipping over order $120</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-icon-box style-row">
                                            <div class="icon">
                                                <i class="icon-payment fs-22"></i>
                                            </div>
                                            <div class="content">
                                                <div class="title fw-4 font-poppins">Flexible Payment</div>
                                                <p>Pay with Multiple Credit Cards</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-icon-box style-row">
                                            <div class="icon">
                                                <i class="icon-return fs-20"></i>
                                            </div>
                                            <div class="content">
                                                <div class="title fw-4 font-poppins">14 Day Returns</div>
                                                <p>Within 30 days for an exchange</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-icon-box style-row">
                                            <div class="icon">
                                                <i class="icon-suport"></i>
                                            </div>
                                            <div class="content">
                                                <div class="title fw-4 font-poppins">Premium Support</div>
                                                <p>Outstanding premium support</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-dots style-2 sw-pagination-mb justify-content-center"></div>
                        </div>
                    </div>
                </section>
                <!-- /Icon box -->

                <!-- Shop gram -->
                <section class="flat-spacing-17 section">
                    <div class="container">
                        <div class="flat-title wow fadeInUp" data-wow-delay="0s">
                            <span class="title font-poppins">Shop Gram</span>
                            <p class="sub-title text_black-2">Tag @deependofficial and #deependclothing for a chance to be
                            featured!</p>
                        </div>
                        <div class="wrap-carousel wrap-shop-gram">
                            <div dir="ltr" class="swiper tf-sw-shop-gallery" data-preview="5" data-tablet="3"
                                data-mobile="1.3" data-space-lg="7" data-space-md="7">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="gallery-item rounded-0 hover-img wow fadeInUp" data-wow-delay=".2s">
                                            <div class="img-style">
                                                <img class="lazyload img-hover"
                                                    data-src="images/shop/gallery/tee-gallery-1.jpg"
                                                    src="images/shop/gallery/tee-gallery-1.jpg" alt="image-gallery">
                                            </div>
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span
                                                    class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gallery-item rounded-0 hover-img wow fadeInUp" data-wow-delay=".3s">
                                            <div class="img-style">
                                                <img class="lazyload img-hover"
                                                    data-src="images/shop/gallery/tee-gallery-2.jpg"
                                                    src="images/shop/gallery/tee-gallery-2.jpg" alt="image-gallery">
                                            </div>
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span
                                                    class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gallery-item rounded-0 hover-img wow fadeInUp" data-wow-delay=".4s">
                                            <div class="img-style">
                                                <img class="lazyload img-hover"
                                                    data-src="images/shop/gallery/tee-gallery-3.jpg"
                                                    src="images/shop/gallery/tee-gallery-3.jpg" alt="image-gallery">
                                            </div>
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span
                                                    class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gallery-item rounded-0 hover-img wow fadeInUp" data-wow-delay=".5s">
                                            <div class="img-style">
                                                <img class="lazyload img-hover"
                                                    data-src="images/shop/gallery/tee-gallery-4.jpg"
                                                    src="images/shop/gallery/tee-gallery-4.jpg" alt="image-gallery">
                                            </div>
                                            <a href="product-images-grouped.php" class="box-icon"><span
                                                    class="icon icon-bag"></span>
                                                <span class="tooltip">View product</span></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gallery-item rounded-0 hover-img wow fadeInUp" data-wow-delay=".6s">
                                            <div class="img-style">
                                                <img class="lazyload img-hover"
                                                    data-src="images/shop/gallery/tee-gallery-5.jpg"
                                                    src="images/shop/gallery/tee-gallery-5.jpg" alt="image-gallery">
                                            </div>
                                            <a href="product-images-grouped.php" class="box-icon"><span
                                                    class="icon icon-bag"></span>
                                                <span class="tooltip">View product</span></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gallery-item rounded-0 hover-img wow fadeInUp" data-wow-delay=".6s">
                                            <div class="img-style">
                                                <img class="lazyload img-hover"
                                                    data-src="images/shop/gallery/tee-gallery-6.jpg"
                                                    src="images/shop/gallery/tee-gallery-6.jpg" alt="image-gallery">
                                            </div>
                                            <a href="product-images-grouped.php" class="box-icon"><span
                                                    class="icon icon-bag"></span>
                                                <span class="tooltip">View product</span></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gallery-item rounded-0 hover-img wow fadeInUp" data-wow-delay=".6s">
                                            <div class="img-style">
                                                <img class="lazyload img-hover"
                                                    data-src="images/shop/gallery/tee-gallery-7.jpg"
                                                    src="images/shop/gallery/tee-gallery-7.jpg" alt="image-gallery">
                                            </div>
                                            <a href="product-images-grouped.php" class="box-icon"><span
                                                    class="icon icon-bag"></span>
                                                <span class="tooltip">View product</span></a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="gallery-item rounded-0 hover-img wow fadeInUp" data-wow-delay=".6s">
                                            <div class="img-style">
                                                <img class="lazyload img-hover"
                                                    data-src="images/shop/gallery/tee-gallery-8.jpg"
                                                    src="images/shop/gallery/tee-gallery-8.jpg" alt="image-gallery">
                                            </div>
                                            <a href="product-images-grouped.php" class="box-icon"><span
                                                    class="icon icon-bag"></span>
                                                <span class="tooltip">View product</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-dots sw-pagination-gallery justify-content-center"></div>
                        </div>
                    </div>
                </section>
                <!-- /Shop gram -->
            </div>

            <!-- Footer -->
            <?php require "footer.php"; ?>
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
        <?php require "mob-header.php"; ?>

        <!-- Canvas Search -->
        <?php require "search.php"; ?>

        <!-- Shop Category Mobile -->
        <?php require "shop-cate.php"; ?>

        <!-- modal login -->
        <?php require "model-login.php"; ?>

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
                                    <div class="price">$18.00</div>
                                </div>
                                <div class="tf-product-description">
                                    <p>Nunc arcu faucibus a et lorem eu a mauris adipiscing conubia ac aptent ligula
                                        facilisis a auctor habitant parturient a a.Interdum fermentum.</p>
                                </div>
                                <div class="tf-product-info-variant-picker">
                                    <div class="variant-picker-item">
                                        <div class="variant-picker-label">
                                            Color: <span class="fw-6 variant-picker-label-value">Orange</span>
                                        </div>
                                        <div class="variant-picker-values">
                                            <input id="values-orange-1" type="radio" name="color-1" checked>
                                            <label class="hover-tooltip radius-60" for="values-orange-1"
                                                data-value="Orange">
                                                <span class="btn-checkbox bg-color-orange"></span>
                                                <span class="tooltip">Orange</span>
                                            </label>
                                            <input id="values-black-1" type="radio" name="color-1">
                                            <label class=" hover-tooltip radius-60" for="values-black-1"
                                                data-value="Black">
                                                <span class="btn-checkbox bg-color-black"></span>
                                                <span class="tooltip">Black</span>
                                            </label>
                                            <input id="values-white-1" type="radio" name="color-1">
                                            <label class="hover-tooltip radius-60" for="values-white-1"
                                                data-value="White">
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
                                        <a href="javascript:void(0);"
                                            class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>Add
                                                to cart -&nbsp;</span><span class="tf-qty-price">$8.00</span></a>
                                        <a href="javascript:void(0);"
                                            class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                                            class="tf-product-btn-wishlist hover-tooltip box-icon bg_white compare btn-icon-action">
                                            <span class="icon icon-compare"></span>
                                            <span class="tooltip">Add to Compare</span>
                                            <span class="icon icon-check"></span>
                                        </a>
                                        <div class="w-100">
                                            <a href="#" class="btns-full">Buy with <img src="images/payments/gpay.png"
                                                    alt=""></a>
                                            <a href="#" class="payment-more-option">View Full Details</a>
                                        </div>
                                    </form>
                                </div>
                                <div>
                                    <a href="product-images-grouped.php" class="tf-btn fw-6 btn-line">View full
                                        details<i class="icon icon-arrow1-top-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /modal quick_view -->

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
                                    <div class="price-on-sale">$.00</div>
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
                                    <a href="#" class="btns-full">Buy with <img src="images/payments/gpay.png" alt=""></a>
                                    <a href="#" class="payment-more-option">view Full Details</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /modal quick_add -->

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
        <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="js/lazysize.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/multiple-modal.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <!-- <script type="text/javascript" src="js/cart.js"></script> -->

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
            document.addEventListener('DOMContentLoaded', function() {
                new Sortable(document.getElementById('sections'), {
                    animation: 150,
                    handle: '.section',
                    onEnd: function(evt) {
                        console.log('New order:', evt.to.children);
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                // When a tab link is clicked
                $('.nav-tab-link').click(function(e) { 
                    // Remove 'active' class from all tab links
                    $('.nav-tab-link').removeClass('active');
                    
                    // Add 'active' class to the clicked link
                    $(this).addClass('active');
                });
                
                // Optional: Activate first tab by default
                $('.nav-tab-link:first').addClass('active');
            });
        </script>
    </body>
</html>