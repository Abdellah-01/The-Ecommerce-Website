<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Shirts</title>

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
        .striked {
            padding-left: 12px;
            font-weight: 300;
            text-decoration: line-through;
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
    <?php require"header.php"; ?>

        <!-- page-title -->
        <div class="tf-page-title">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center">New Arrival</div>
                        <p class="text-center text-2 text_black-2 mt_5">Shop through our latest selection of Fashion</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <!-- grid -->
        <section class="flat-spacing-1">
            <div class="container">
                <div class="tf-shop-control grid-3 align-items-center">
                    <div class="tf-control-filter">
                        <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                            class="tf-btn-filter"><span class="icon icon-filter"></span><span
                                class="text">Filter</span></a>
                    </div>
                    <ul class="tf-control-layout d-flex justify-content-center">
                        <li class="tf-view-layout-switch sw-layout-list list-layout" data-value-layout="list">
                            <div class="item"><span class="icon icon-list"></span></div>
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
                    <div class="tf-list-layout wrapper-shop" id="listLayout">
                        <!-- card product 1 -->
                        <div class="loadItem card-product list-layout" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="#" class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/orange-1.jpg"
                                        src="images/products/orange-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/white-1.jpg"
                                        src="images/products/white-1.jpg" alt="image-product">
                                </a>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">Ribbed Tank Top</a>
                                <span class="price current-price">$16.95</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                                    with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                                    responsibly sourced wood-based fibres produced through a process that reduces...</p>
                                <ul class="list-color-product">
                                    <li class="list-color-item hover-tooltip color-swatch active">
                                        <span class="tooltip tooltip-bottom">Orange</span>
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
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal"
                                        class="box-icon quick-add style-3 hover-tooltip"><span
                                            class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3 hover-tooltip"><span
                                            class="icon icon-heart"></span> <span class="tooltip">Add to
                                            Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas"
                                        class="box-icon compare style-3 hover-tooltip"><span
                                            class="icon icon-compare"></span> <span class="tooltip">Add to
                                            Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal"
                                        class="box-icon quickview style-3 hover-tooltip"><span
                                            class="icon icon-view"></span><span class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- card product 2 -->
                        <div class="loadItem card-product list-layout" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <div class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/brown.jpg"
                                        src="images/products/brown.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/purple.jpg"
                                        src="images/products/purple.jpg" alt="image-product">
                                </div>
                                <div class="countdown-box">
                                    <div class="js-countdown" data-timer="1007500" data-labels="d :,h :,m :,s"></div>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">Ribbed modal T-shirt</a>
                                <span class="price current-price">$18.95</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                                    with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                                    responsibly sourced wood-based fibres produced through a process that reduces...</p>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Brown</span>
                                        <span class="swatch-value bg_brown"></span>
                                        <img class="lazyload" data-src="images/products/brown.jpg"
                                            src="images/products/brown.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Purple</span>
                                        <span class="swatch-value bg_purple"></span>
                                        <img class="lazyload" data-src="images/products/purple.jpg"
                                            src="images/products/purple.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Green</span>
                                        <span class="swatch-value bg_light-green"></span>
                                        <img class="lazyload" data-src="images/products/green.jpg"
                                            src="images/products/green.jpg" alt="image-product">
                                    </li>
                                </ul>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add style-3"><span
                                            class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3"><span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" class="box-icon compare style-3"><span
                                            class="icon icon-compare"></span> <span class="tooltip">Add to
                                            Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal"
                                        class="box-icon quickview style-3"><span class="icon icon-view"></span><span
                                            class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- card product 3 -->
                        <div class="loadItem card-product list-layout" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <div class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/white-3.jpg"
                                        src="images/products/white-3.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/white-4.jpg"
                                        src="images/products/white-4.jpg" alt="image-product">
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">Oversized Printed T-shirt</a>
                                <span class="price current-price">$10.00</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                                    with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                                    responsibly sourced wood-based fibres produced through a process that reduces...</p>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add style-3"><span
                                            class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3"><span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" class="box-icon compare style-3"><span
                                            class="icon icon-compare"></span> <span class="tooltip">Add to
                                            Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal"
                                        class="box-icon quickview style-3"><span class="icon icon-view"></span><span
                                            class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- card product 4 -->
                        <div class="loadItem card-product list-layout" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <div class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/white-2.jpg"
                                        src="images/products/white-2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/pink-1.jpg"
                                        src="images/products/pink-1.jpg" alt="image-product">
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">Oversized Printed T-shirt</a>
                                <span class="price current-price">$16.95</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                                    with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                                    responsibly sourced wood-based fibres produced through a process that reduces...</p>
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
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add style-3"><span
                                            class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3"><span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" class="box-icon compare style-3"><span
                                            class="icon icon-compare"></span> <span class="tooltip">Add to
                                            Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal"
                                        class="box-icon quickview style-3"><span class="icon icon-view"></span><span
                                            class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- card product 5 -->
                        <div class="loadItem card-product list-layout" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <div class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/brown-2.jpg"
                                        src="images/products/brown-2.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/brown-3.jpg"
                                        src="images/products/brown-3.jpg" alt="image-product">
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">V-neck linen T-shirt</a>
                                <span class="price current-price">$114.95</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                                    with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                                    responsibly sourced wood-based fibres produced through a process that reduces...</p>
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
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add style-3"><span
                                            class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3"><span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" class="box-icon compare style-3"><span
                                            class="icon icon-compare"></span> <span class="tooltip">Add to
                                            Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal"
                                        class="box-icon quickview style-3"><span class="icon icon-view"></span><span
                                            class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- card product 6 -->
                        <div class="loadItem card-product list-layout" data-availability="In stock" data-brand="M&H">
                            <div class="card-product-wrapper">
                                <div class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/light-green-1.jpg"
                                        src="images/products/light-green-1.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/light-green-2.jpg"
                                        src="images/products/light-green-2.jpg" alt="image-product">
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">Loose Fit Sweatshirt</a>
                                <span class="price current-price">$10.00</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                                    with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                                    responsibly sourced wood-based fibres produced through a process that reduces...</p>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Light Green</span>
                                        <span class="swatch-value bg_light-green"></span>
                                        <img class="lazyload" data-src="images/products/light-green-1.jpg"
                                            src="images/products/light-green-1.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="images/products/black-3.jpg"
                                            src="images/products/black-3.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Blue</span>
                                        <span class="swatch-value bg_blue-2"></span>
                                        <img class="lazyload" data-src="images/products/blue.jpg"
                                            src="images/products/blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Dark Blue</span>
                                        <span class="swatch-value bg_dark-blue"></span>
                                        <img class="lazyload" data-src="images/products/dark-blue.jpg"
                                            src="images/products/dark-blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="images/products/white-6.jpg"
                                            src="images/products/white-6.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Grey</span>
                                        <span class="swatch-value bg_light-grey"></span>
                                        <img class="lazyload" data-src="images/products/light-grey.jpg"
                                            src="images/products/light-grey.jpg" alt="image-product">
                                    </li>
                                </ul>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add style-3"><span
                                            class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3"><span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" class="box-icon compare style-3"><span
                                            class="icon icon-compare"></span> <span class="tooltip">Add to
                                            Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal"
                                        class="box-icon quickview style-3"><span class="icon icon-view"></span><span
                                            class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- card product 7 -->
                        <div class="loadItem card-product list-layout" data-availability="Out of stock"
                            data-brand="M&H">
                            <div class="card-product-wrapper">
                                <div class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/black-4.jpg"
                                        src="images/products/black-4.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/black-5.jpg"
                                        src="images/products/black-5.jpg" alt="image-product">
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">Regular Fit Oxford Shirt</a>
                                <span class="price current-price">$10.00</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                                    with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                                    responsibly sourced wood-based fibres produced through a process that reduces...</p>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="images/products/black-4.jpg"
                                            src="images/products/black-4.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Dark Blue</span>
                                        <span class="swatch-value bg_dark-blue"></span>
                                        <img class="lazyload" data-src="images/products/dark-blue-2.jpg"
                                            src="images/products/dark-blue-2.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Beige</span>
                                        <span class="swatch-value bg_beige"></span>
                                        <img class="lazyload" data-src="images/products/beige.jpg"
                                            src="images/products/beige.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Light Blue</span>
                                        <span class="swatch-value bg_light-blue"></span>
                                        <img class="lazyload" data-src="images/products/light-blue.jpg"
                                            src="images/products/light-blue.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="images/products/white-7.jpg"
                                            src="images/products/white-7.jpg" alt="image-product">
                                    </li>
                                </ul>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add style-3"><span
                                            class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3"><span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" class="box-icon compare style-3"><span
                                            class="icon icon-compare"></span> <span class="tooltip">Add to
                                            Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal"
                                        class="box-icon quickview style-3"><span class="icon icon-view"></span><span
                                            class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- card product 8 -->
                        <div class="loadItem card-product list-layout" data-availability="Out of stock"
                            data-brand="M&H">
                            <div class="card-product-wrapper">
                                <div class="product-img">
                                    <img class="lazyload img-product" data-src="images/products/white-8.jpg"
                                        src="images/products/white-8.jpg" alt="image-product">
                                    <img class="lazyload img-hover" data-src="images/products/black-6.jpg"
                                        src="images/products/black-6.jpg" alt="image-product">
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="#" class="title link">Loose Fit Hoodie</a>
                                <span class="price current-price">$9.95</span>
                                <p class="description">Button-up shirt sleeves and a relaxed silhouette. It’s tailored
                                    with drapey, crinkle-texture fabric that’s made from LENZING™ ECOVERO™ Viscose —
                                    responsibly sourced wood-based fibres produced through a process that reduces...</p>
                                <ul class="list-color-product">
                                    <li class="list-color-item color-swatch active">
                                        <span class="tooltip">White</span>
                                        <span class="swatch-value bg_white"></span>
                                        <img class="lazyload" data-src="images/products/white-8.jpg"
                                            src="images/products/white-8.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Black</span>
                                        <span class="swatch-value bg_dark"></span>
                                        <img class="lazyload" data-src="images/products/black-7.jpg"
                                            src="images/products/black-7.jpg" alt="image-product">
                                    </li>
                                    <li class="list-color-item color-swatch">
                                        <span class="tooltip">Blue</span>
                                        <span class="swatch-value bg_blue-2"></span>
                                        <img class="lazyload" data-src="images/products/blue-2.jpg"
                                            src="images/products/blue-2.jpg" alt="image-product">
                                    </li>
                                </ul>
                                <div class="size-list">
                                    <span class="size-item">S</span>
                                    <span class="size-item">M</span>
                                    <span class="size-item">L</span>
                                    <span class="size-item">XL</span>
                                </div>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon quick-add style-3"><span
                                            class="icon icon-bag"></span><span class="tooltip">Quick add</span></a>
                                    <a href="#" class="box-icon wishlist style-3"><span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span></a>
                                    <a href="#compare" data-bs-toggle="offcanvas" class="box-icon compare style-3"><span
                                            class="icon icon-compare"></span> <span class="tooltip">Add to
                                            Compare</span></a>
                                    <a href="#quick_view" data-bs-toggle="modal"
                                        class="box-icon quickview style-3"><span class="icon icon-view"></span><span
                                            class="tooltip">Quick view</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Load Item -->
                        <button id="loadMoreListBtn"
                            class="tf-btn-loading tf-loading-default tf-loading animate-hover-btn"><span
                                class="text">Load more</span></button>
                    </div>
                    <div class="tf-grid-layout wrapper-shop tf-col-4" id="gridLayout">
                        <!-- card product 1 -->


                         <?php
    include '../admin/dbcon.php';

    $sqsl=mysqli_query($con, "select * from product WHERE sub_catagory_name='$_REQUEST[id]'" );
    while($products=mysqli_fetch_array($sqsl))
    {
$sql=mysqli_query($con, "select * from product_images WHERE product_id='$products[product_id]'  order by id asc  limit 1");
$image=mysqli_fetch_array($sql);


$sql1=mysqli_query($con, "select * from product_images WHERE product_id='$products[product_id]'  order by id desc  limit 1");
$image1=mysqli_fetch_array($sql1);


 

     ?>
                        <!-- card product 1 -->
                       <div class="loadItem card-product grid" data-availability="In stock" data-brand="Ecomus">
                            <div class="card-product-wrapper">
                                <a href="product-images-grouped.php?id=<?php echo "$products[product_id]"; ?>" class="product-img">
                                    <img class="lazyload img-product" data-src="../admin/<?php echo "$image[image_path]"; ?>"
                                        src="../admin/<?php echo "$image[image_path]"; ?>" alt="image-product">
                                    <img class="lazyload img-hover" data-src="../admin/<?php echo "$image1[image_path]"; ?>"
                                        src="../admin/<?php echo "$image1[image_path]"; ?>" alt="image-product">
                                </a>
                                <div class="list-product-btn">
                                    <a href="#quick_add" data-bs-toggle="modal"
                                        class="box-icon bg_white quick-add tf-btn-loading">
                                        <span class="icon icon-bag"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                    <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                   
                                    <a href="#quick_view" data-bs-toggle="modal"
                                        class="box-icon bg_white quickview tf-btn-loading">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </div>
                                <div class="size-list">
                                    <?php 
                                      $sqs1l=mysqli_query($con, "select * from variant" );
    while($variant=mysqli_fetch_array($sqs1l))
    {
        ?>
                                    <span class="size-item"><?php echo "$variant[varient]"; ?></span>
                                   <?php }?>
                                </div>
                                <div class="on-sale-wrap text-end">

                                    <?php $save=$products['offer_price']-$products['regular_price']; ?>
                                    <div class="on-sale-item">SAVE ₹<?php echo $save ?>.00</div>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-images-grouped.php?id=<?php echo "$products[product_id]"; ?>" class="title link"><?php echo "$products[product_title]"; ?></a>
                                <label class="price current-price">₹<?php echo "$products[regular_price]"; ?>.00<span class="striked"> ₹<?php echo "$products[offer_price]"; ?>.00</span></label>

                            </div>
                        </div>
                    <?php }?>
                        <!-- Load Item -->
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

        <!-- Header -->
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
                            <li class="cate-item current"><a href="shop-default.php"><span>Fashion</span></a></li>
                            <li class="cate-item"><a href="shop-default.php"><span>Men</span></a></li>
                            <li class="cate-item"><a href="shop-default.php"><span>Women</span></a></li>
                            <li class="cate-item"><a href="shop-default.php"><span>Denim</span></a></li>
                            <li class="cate-item"><a href="shop-default.php"><span>Dress</span></a></li>
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
    
    <!-- /toolbarShopmb -->

    <!-- modal login -->
    <?php require"model-login.php"; ?>
<?php require 'cart.php'; ?>

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
                                <a href="product-images-grouped.php" class="tf-btn fw-6 btn-line">View full details<i
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