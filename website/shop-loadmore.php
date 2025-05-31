<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Abdellah | New Arrivals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png">

    <style>
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
        .sml {
            min-width: 70px !important;
            height: 55px !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }
        .str-mobile-buttons {
            display: none;
        }

        @media (max-width: 768px) {
            .str-mobile-buttons {
                display: flex;
                justify-content: space-between;
                border-top: 1px solid #ccc;
                border-bottom: 1px solid #ccc;
                background-color: white;
            }

            .str-button {
                flex: 1;
                padding: 12px 0;
                text-align: center;
                font-size: 16px;
                color: #333;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 8px;
                cursor: pointer;
                text-decoration: none;
                background: none;
                border: none;
            }

            .str-divider {
                width: 1px;
                background-color: #ccc;
            }

            .str-icon {
                font-size: 18px;
            }
        }

        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;

            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .modal-overlay.active {
            opacity: 1;
            pointer-events: auto;
            
        }

        .modal-bottom {
            background: white;
            position: Fixed;
            bottom: 0;
            width: 100%;
            max-height: 80%;
            padding: 20px;
            overflow-y: auto;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .modal-overlay.active .modal-bottom {
            transform: translateY(0);
        }

        .modal-header {
            display: flex;
            justify-content: center;
            position: relative;
            margin-bottom: 20px;
        }

        .modal-header h2 {
            margin: 0;
            font-size: 18px;
            font-weight: 500;
        }

        .close-btn {
            position: absolute;
            right: 20px;
            top: 0;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #000;
        }

        .sort-options {
            display: flex;
            flex-direction: column;
            padding: 0 20px;
        }

        .sort-option {
            padding: 12px 0;
            font-size: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }

        .sort-option.active {
            font-weight: 500;
        }

        .checkmark {
            font-size: 16px;
            color: black;
        }
        @media (max-width: 768px) {
            .hide-on-mobile {
                display: none !important;
            }
        }
        .abc-center {
      text-align: center; /* Center the navbar-wrapper */
      margin-bottom: 20px;
    }

    /* Full-width wrapper for borders */
    .abc-navbar-border-wrapper {
      border-top: 1px solid #ccc;
      border-bottom: 1px solid #ccc;
      
      width: 100%;
      margin-bottom: 20px;
    }

    .abc-navbar-wrapper {
      display: inline-block; /* Makes it shrink-to-fit */
      max-width: 100%;
      padding: 0 16px;
      text-align: center; /* Center the navbar-wrapper */
      /* Removed borders from here */
      margin-bottom: 0; /* handled by border wrapper */
    }

    .abc-navbar {
      display: inline-flex; /* Changed to inline-flex as requested */
      align-items: center;
      max-width: 100%;
      position: relative;
      padding: 20px 0;
    }

    .abc-section-label {
      color: #777;
      font-weight: bold;
      letter-spacing: 2px;
      white-space: nowrap;
      flex-shrink: 0;
    }

    .abc-menu-scroll-wrapper {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      scrollbar-width: none;
    }

    .abc-menu-scroll-wrapper::-webkit-scrollbar {
      display: none;
    }

    .abc-menu-items {
      display: flex;
      gap: 24px;
      white-space: nowrap;
      padding: 0 16px;
    }

    .abc-menu-items a {
      text-decoration: none;
      color: black;
      font-size: 16px;
      flex-shrink: 0;
    }

    .abc-menu-items a.abc-active {
      text-decoration: underline;
      text-underline-offset: 4px;
    }

    </style>


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
        <?php require"header1.php"; ?>

        

        <!-- page-title -->
        <div class="tf-page-title">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">ALL Products</div>
                        <p class="text-center text-2 text_black-2 mt_5">28 Products</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <div class="abc-center">
    <div class="abc-navbar-border-wrapper">
      <div class="abc-navbar-wrapper">
        <div class="abc-navbar">
          <span class="abc-section-label">MEN</span>
          <div class="abc-menu-scroll-wrapper">
            <div class="abc-menu-items">
              <a href="#"  class="abc-active">All</a>
              <a href="products.php?id=SHIRTS">Shirts</a>
              <a href="products.php?id=PANTS">T-Shirts</a>
              <a href="products.php?id=T-SHIRTS">Pants</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


        <!-- grid -->
        <section style="margin-bottom: 60px;">
            <div class="container">
                <div class="hide-on-mobile tf-shop-control grid-3 align-items-center">
                    <div class="tf-control-filter">
                        <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                            class="tf-btn-filter"><span class="icon icon-filter"></span><span
                                class="text">Filter</span></a>
                    </div>
                    <ul class="tf-control-layout d-flex justify-content-center">
                        </li>
                        <li class="tf-view-layout-switch sw-layout-2" data-value-layout="tf-col-2">
                            <div class="item"><span class="icon icon-grid-2"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-3" data-value-layout="tf-col-3">
                            <div class="item"><span class="icon icon-grid-3"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-4 active" data-value-layout="tf-col-4">
                            <div class="item"><span class="icon icon-grid-4"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-5" data-value-layout="tf-col-5">
                            <div class="item"><span class="icon icon-grid-5"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-6" data-value-layout="tf-col-6">
                            <div class="item"><span class="icon icon-grid-6"></span></div>
                        </li>
                    </ul>
                    <div class="tf-control-sorting d-flex justify-content-end">
                        <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                            <div class="btn-select">
                                <span class="text-sort-value">Featured</span>
                                <span class="icon icon-arrow-down"></span>
                            </div>
                            <div class="dropdown-menu">
                                <div class="select-item active">
                                    <span class="text-value-item">Featured</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Best selling</span>
                                </div>
                                <div class="select-item" data-sort-value="a-z">
                                    <span class="text-value-item">Alphabetically, A-Z</span>
                                </div>
                                <div class="select-item" data-sort-value="z-a">
                                    <span class="text-value-item">Alphabetically, Z-A</span>
                                </div>
                                <div class="select-item" data-sort-value="price-low-high">
                                    <span class="text-value-item">Price, low to high</span>
                                </div>
                                <div class="select-item" data-sort-value="price-high-low">
                                    <span class="text-value-item">Price, high to low</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Date, old to new</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Date, new to old</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="wrapper-control-shop">
                    <div class="meta-filter-shop">
                        <div id="product-count-grid" class="count-text"></div>
                        <div id="product-count-list" class="count-text"></div>
                        <div id="applied-filters"></div>
                        <button id="remove-all" class="remove-all-filters" style="display: none;">Remove All <i
                                class="icon icon-close"></i></button>
                    </div>


                    <div class="tf-grid-layout wrapper-shop tf-col-4" id="gridLayout">
                        <!-- card product 1 -->

                         <?php
                            include '../admin/dbcon.php';

                            $sqsl=mysqli_query($con, "select * from product  order by sno desc" );
                            while($products=mysqli_fetch_array($sqsl))
                            {
                        $sql=mysqli_query($con, "select * from product_images WHERE product_id='$products[product_id]'  order by id asc  limit 1");
                        $image=mysqli_fetch_array($sql);


                        $sqls2 = mysqli_query($con, "SELECT * FROM product_images WHERE product_id='$products[product_id]' ORDER BY id DESC LIMIT 2");
                        // Fetch first row (but ignore it)
                        mysqli_fetch_array($sqls2);
                        // Now fetch the second row (the one you want)
                        $image1 = mysqli_fetch_array($sqls2);

                        

                            ?>
                        <div class="loadItem card-product grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-images-grouped.php?id=<?php echo"$products[product_id]"; ?>" class="product-img">
                                    <img class="lazyload img-product" data-src="../admin/<?php echo "$image[image_path]"; ?>"
                                        src="../admin/<?php echo "$image[image_path]"; ?>" alt="image-product">
                                    <img class="lazyload img-hover" data-src="../admin/<?php echo "$image1[image_path]"; ?>"
                                        src="../admin/<?php echo "$image1[image_path]"; ?>" alt="image-product">
                                </a>
                                   <div class="on-sale-wrap text-end">

                                        <div class="on-sale-item">SAVE ₹<?php 

$save=$products['offer_price']-$products['regular_price'];
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
                                <a href="product-images-grouped.php?id=<?php echo"$products[product_id]"; ?>" class="title link"><?php echo "$products[product_title]"; ?></a>
                               <span class="price">
                                    <span class="text_primary">
                                        ₹<?php echo "$products[regular_price]"; ?>.00
                                    </span>
                                    <span class="fw-4 text-sale">
                                        ₹<?php echo "$products[offer_price]"; ?>.00
                                    </span>

                                </span>
                               
                            </div>
                        </div>    <?php }?>  <!-- Load Item -->
                        <div class="wd-load d-flex justify-content-center">
                            <button id="loadMoreGridBtn"
                                class="tf-btn-loading tf-loading-default tf-loading animate-hover-btn"><span
                                    class="text">Load more</span></button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- /grid -->

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

    <!-- Filter -->
    <div class="offcanvas offcanvas-start canvas-filter" id="filterShop">
        <div class="canvas-wrapper">
            <header class="canvas-header">
                <div class="filter-icon">
                    <span class="icon icon-filter"></span>
                    <span>Filter</span>
                </div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
            </header>
            <div class="canvas-body">
                <div class="widget-facet wd-categories">
                    <div class="facet-title" data-bs-target="#categories" data-bs-toggle="collapse" aria-expanded="true"
                        aria-controls="categories">
                        <span>Product categories</span>
                        <span class="icon icon-arrow-up"></span>
                    </div>
                    <div id="categories" class="collapse show">
                        <ul class="list-categoris current-scrollbar mb_36">
                            <li class="cate-item current"><a href="collection.php"><span>Fashion</span></a></li>
                            <li class="cate-item"><a href="collection.php"><span>Men</span></a></li>
                            <li class="cate-item"><a href="collection.php"><span>Women</span></a></li>
                            <li class="cate-item"><a href="collection.php"><span>Denim</span></a></li>
                            <li class="cate-item"><a href="collection.php"><span>Dress</span></a></li>
                        </ul>
                    </div>
                </div>
                <form action="#" id="facet-filter-form" class="facet-filter-form">
                    <div class="widget-facet">
                        <div class="facet-title" data-bs-target="#availability" data-bs-toggle="collapse"
                            aria-expanded="true" aria-controls="availability">
                            <span>Availability</span>
                            <span class="icon icon-arrow-up"></span>
                        </div>
                        <div id="availability" class="collapse show">
                            <ul class="tf-filter-group current-scrollbar mb_36">
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="availability" class="tf-check" id="inStock">
                                    <label for="inStock" class="label"><span>In
                                            stock</span>&nbsp;<span>(14)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="availability" class="tf-check" id="outStock">
                                    <label for="outStock" class="label"><span>Out of
                                            stock</span>&nbsp;<span>(2)</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-facet">
                        <div class="facet-title" data-bs-target="#price" data-bs-toggle="collapse" aria-expanded="true"
                            aria-controls="price">
                            <span>Price</span>
                            <span class="icon icon-arrow-up"></span>
                        </div>
                        <div id="price" class="collapse show">
                            <div class="widget-price filter-price">
                                <div class="price-val-range" id="price-value-range" data-min="0" data-max="500"></div>
                                <div class="box-title-price">
                                    <span class="title-price">Price :</span>
                                    <div class="caption-price">
                                        <div class="price-val" id="price-min-value" data-currency="$"></div>
                                        <span>-</span>
                                        <div class="price-val" id="price-max-value" data-currency="$"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="widget-facet">
                        <div class="facet-title" data-bs-target="#brand" data-bs-toggle="collapse" aria-expanded="true"
                            aria-controls="brand">
                            <span>Brand</span>
                            <span class="icon icon-arrow-up"></span>
                        </div>
                        <div id="brand" class="collapse show">
                            <ul class="tf-filter-group current-scrollbar mb_36">
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="brand" class="tf-check" id="Ecomus">
                                    <label for="Ecomus" class="label"><span>Ecomus</span>&nbsp;<span>(8)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="brand" class="tf-check" id="M&H">
                                    <label for="M&H" class="label"><span>M&H</span>&nbsp;<span>(8)</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-facet">
                        <div class="facet-title" data-bs-target="#color" data-bs-toggle="collapse" aria-expanded="true"
                            aria-controls="color">
                            <span>Color</span>
                            <span class="icon icon-arrow-up"></span>
                        </div>
                        <div id="color" class="collapse show">
                            <ul class="tf-filter-group filter-color current-scrollbar mb_36">
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_beige" id="Beige"
                                        value="Beige">
                                    <label for="Beige" class="label"><span>Beige</span>&nbsp;<span>(3)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_dark" id="Black"
                                        value="Black">
                                    <label for="Black" class="label"><span>Black</span>&nbsp;<span>(18)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_blue-2" id="Blue"
                                        value="Blue">
                                    <label for="Blue" class="label"><span>Blue</span>&nbsp;<span>(3)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_brown" id="Brown"
                                        value="Brown">
                                    <label for="Brown" class="label"><span>Brown</span>&nbsp;<span>(3)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_cream" id="Cream"
                                        value="Cream">
                                    <label for="Cream" class="label"><span>Cream</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_dark-beige"
                                        id="Dark Beige" value="Dark Beige">
                                    <label for="Dark Beige" class="label"><span>Dark
                                            Beige</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_dark-blue" id="Dark Blue"
                                        value="Dark Blue">
                                    <label for="Dark Blue" class="label"><span>Dark
                                            Blue</span>&nbsp;<span>(3)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_dark-green"
                                        id="Dark Green" value="Dark Green">
                                    <label for="Dark Green" class="label"><span>Dark
                                            Green</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_dark-grey" id="Dark Grey"
                                        value="Dark Grey">
                                    <label for="Dark Grey" class="label"><span>Dark
                                            Grey</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_grey" id="Grey"
                                        value="Grey">
                                    <label for="Grey" class="label"><span>Grey</span>&nbsp;<span>(2)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_light-blue"
                                        id="Light Blue" value="Light Blue">
                                    <label for="Light Blue" class="label"><span>Light
                                            Blue</span>&nbsp;<span>(5)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_light-green"
                                        id="Light Green" value="Light Green">
                                    <label for="Light Green" class="label"><span>Light
                                            Green</span>&nbsp;<span>(3)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_light-grey"
                                        id="Light Grey" value="Light Grey">
                                    <label for="Light Grey" class="label"><span>Light
                                            Grey</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_light-pink"
                                        id="Light Pink" value="Light Pink">
                                    <label for="Light Pink" class="label"><span>Light
                                            Pink</span>&nbsp;<span>(2)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_purple" id="Light Purple"
                                        value="Light Purple">
                                    <label for="Light Purple" class="label"><span>Light
                                            Purple</span>&nbsp;<span>(2)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_light-yellow"
                                        id="Light Yellow" value="Light Yellow">
                                    <label for="Light Yellow" class="label"><span>Light
                                            Yellow</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_orange" id="Orange"
                                        value="Orange">
                                    <label for="Orange" class="label"><span>Orange</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_pink" id="Pink"
                                        value="Pink">
                                    <label for="Pink" class="label"><span>Pink</span>&nbsp;<span>(2)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_taupe" id="Taupe"
                                        value="Taupe">
                                    <label for="Taupe" class="label"><span>Taupe</span>&nbsp;<span>(1)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_white" id="White"
                                        value="White">
                                    <label for="White" class="label"><span>White</span>&nbsp;<span>(14)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="color" class="tf-check-color bg_yellow" id="Yellow"
                                        value="Yellow">
                                    <label for="Yellow" class="label"><span>Yellow</span>&nbsp;<span>(1)</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-facet">
                        <div class="facet-title" data-bs-target="#size" data-bs-toggle="collapse" aria-expanded="true"
                            aria-controls="size">
                            <span>Size</span>
                            <span class="icon icon-arrow-up"></span>
                        </div>
                        <div id="size" class="collapse show">
                            <ul class="tf-filter-group current-scrollbar">
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="size" class="tf-check tf-check-size" value="S" id="S">
                                    <label for="S" class="label"><span>S</span>&nbsp;<span>(7)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="size" class="tf-check tf-check-size" value="M" id="M">
                                    <label for="M" class="label"><span>M</span>&nbsp;<span>(8)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="size" class="tf-check tf-check-size" value="L" id="L">
                                    <label for="L" class="label"><span>L</span>&nbsp;<span>(8)</span></label>
                                </li>
                                <li class="list-item d-flex gap-12 align-items-center">
                                    <input type="radio" name="size" class="tf-check tf-check-size" value="XL" id="XL">
                                    <label for="XL" class="label"><span>XL</span>&nbsp;<span>(6)</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Filter -->

    <!-- canvasSearch -->
<?php require"search.php"; ?>
    <!-- /canvasSearch -->

    <!-- toolbarShopmb -->
    <?php require "shop-cate.php"; ?>
    <!-- /toolbarShopmb -->

    <!-- modal login -->
    <?php require"model-login.php"; ?>
    <?php require"cart.php"; ?>

    <!-- shoppingCart -->
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
                                            <a href="product-images-grouped.php?id=<?php echo"$products[product_id]"; ?>">
                                                <img class="radius-3" src="images/products/orange-1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tf-compare-item">
                                        <div class="position-relative">
                                            <div class="icon">
                                                <i class="icon-close"></i>
                                            </div>
                                            <a href="product-images-grouped.php?id=<?php echo"$products[product_id]"; ?>">
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
                            <a href="product-images-grouped.php?id=<?php echo"$products[product_id]"; ?>">Ribbed Tank Top</a>
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
                                <h5><a class="link" href="product-images-grouped.php?id=<?php echo"$products[product_id]"; ?>">Ribbed Tank Top</a></h5>
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
                                        <a href="#" class="btns-full">Buy with <img src="images/payments/paypal.png"
                                                alt=""></a>
                                        <a href="#" class="payment-more-option">More payment options</a>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <a href="product-images-grouped.php?id=<?php echo"$products[product_id]"; ?>" class="tf-btn fw-6 btn-line">View full details<i
                                        class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal quick_view -->

    <!-- modal find_size -->
    <?php require"size-chart.php"; ?>
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
                                    <div class="tf-mini-cart-item" style="
                                            flex-direction: column;
                                        ">
                                        <div class="mains" style="
                                                    display: flex;
                                                    gap: 30px;
                                                    font-size: 16px;
                                                    line-height: 1.5;
                                                ">
                                            <div class="tf-mini-cart-image">
                                                    <img src="images/products/white-2.jpg" alt="" style="
                                                        max-width: 130px;
                                                    ">
                                                                                                    
                                            </div>
                                            <div class="tf-mini-cart-info" style="
                                                    margin: auto 0;
                                                ">
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
                                            <p class="fw-6" style = "color: green;">Instock</p>
                                            </div> 
                                             <div class="variant-picker-item mb_30" >
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
                                    <a href="javascript:void(0);" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>Add
                                            to Cart</span></a>
                                    
                                    
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

    <!-- Modal -->
    <div id="sortModal" class="modal-overlay" role="dialog" aria-modal="true" aria-labelledby="modalTitle"
        tabindex="-1">
        <div class="modal-bottom">
            <div class="modal-header">
                <h2 id="modalTitle">Sort by</h2>
                <button class="close-btn" id="closeSortModal" aria-label="Close modal">&times;</button>
            </div>
            <div class="sort-options">
                <div class="sort-option">Featured</div>
                <div class="sort-option">Best selling</div>
                <div class="sort-option">Alphabetically, A–Z</div>
                <div class="sort-option">Alphabetically, Z–A</div>
                <div class="sort-option">Price, low to high</div>
                <div class="sort-option">Price, high to low</div>
                <div class="sort-option">Date, old to new</div>
                <div class="sort-option active">Date, new to old <span class="checkmark">&#10003;</span></div>
            </div>
        </div>
    </div>

    <script>
        const openSortModalBtn = document.getElementById('openSortModal');
        const sortModal = document.getElementById('sortModal');
        const closeSortModalBtn = document.getElementById('closeSortModal');

        openSortModalBtn.addEventListener('click', function (e) {
            e.preventDefault();
            sortModal.classList.add('active');
            sortModal.focus();
        });

        closeSortModalBtn.addEventListener('click', function () {
            sortModal.classList.remove('active');
            openSortModalBtn.focus();
        });

        sortModal.addEventListener('click', function (e) {
            if (e.target === sortModal) {
                sortModal.classList.remove('active');
                openSortModalBtn.focus();
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && sortModal.classList.contains('active')) {
                sortModal.classList.remove('active');
                openSortModalBtn.focus();
            }
        });

        // Active sort option selector
        const sortOptions = document.querySelectorAll('.sort-option');
        sortOptions.forEach(option => {
            option.addEventListener('click', function () {
                sortOptions.forEach(o => {
                    o.classList.remove('active');
                    const check = o.querySelector('.checkmark');
                    if (check) check.remove();
                });

                this.classList.add('active');
                const checkmark = document.createElement('span');
                checkmark.classList.add('checkmark');
                checkmark.innerHTML = '&#10003;';
                this.appendChild(checkmark);
            });
        });
    </script>
    


    <!-- Javascript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/count-down.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/nouislider.min.js"></script>
    <script type="text/javascript" src="js/shop.js"></script>
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
</html>