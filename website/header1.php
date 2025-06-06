<!-- Announcement bar -->
<?php 
require '../admin/dbcon.php';
$sqsl = mysqli_query($con, "select * from preference_settings WHERE sno ='1'");
while ($checked_in = mysqli_fetch_array($sqsl)) { 
if ($checked_in['status']=='Active') {
// echo"Active";
require 'checkin.php'; 
} else {
}
}
?>   <div class="tf-top-bar bg_dark line">
            <div class="px_15 lg-px_40">
                <div class="tf-top-bar_wrap grid-3 gap-30 align-items-center">
                    <ul class="tf-top-bar_item tf-social-icon d-flex gap-10">
                        <li><a href="#" class="box-icon w_28 round social-facebook bg_line"><i
                                    class="icon fs-12 icon-fb"></i></a>
                        </li>
                        <li><a href="#" class="box-icon w_28 round social-twiter bg_line"><i
                                    class="icon fs-10 icon-Icon-x"></i></a>
                        </li>
                        <li><a href="#" class="box-icon w_28 round social-instagram bg_line"><i
                                    class="icon fs-12 icon-instagram"></i></a></li>
                        <li><a href="#" class="box-icon w_28 round social-tiktok bg_line"><i
                                    class="icon fs-12 icon-tiktok"></i></a>
                        </li>
                        <li><a href="#" class="box-icon w_28 round social-pinterest bg_line"><i
                                    class="icon fs-12 icon-pinterest-1"></i></a></li>
                    </ul>
                    <div class="text-center overflow-hidden">
                        <div dir="ltr" class="swiper tf-sw-top_bar" data-preview="1" data-space="0" data-loop="true"
                            data-speed="1000" data-delay="2000">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <p class="top-bar-text fw-5 text_white">Spring Fashion Sale <a
                                            href="shop-default.php" title="all collection" class="tf-btn btn-line">Shop
                                            now<i class="icon icon-arrow1-top-left"></i></a></p>
                                </div>
                                <div class="swiper-slide">
                                    <p class="top-bar-text fw-5 text_white">Summer sale discount off 70%</p>
                                </div>
                                <div class="swiper-slide">
                                    <p class="top-bar-text fw-5 text_white">Time to refresh your wardrobe.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="top-bar-language tf-cur justify-content-end">



                        <div class="d-flex gap-30 text_white fw-5">
                            <span>+91 7397639193</span>
                            <span>admin@gmail.com</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /Announcement bar -->


        <!-- Header -->
        <header id="header" class="header-default">
            <div class="px_15 lg-px_40">
                <div class="row wrapper-header align-items-center">
                    <div class="col-md-4 col-3 tf-lg-hidden">
                        <a href="#mobileMenu" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16"
                                fill="none">
                                <path
                                    d="M2.00056 2.28571H16.8577C17.1608 2.28571 17.4515 2.16531 17.6658 1.95098C17.8802 1.73665 18.0006 1.44596 18.0006 1.14286C18.0006 0.839753 17.8802 0.549063 17.6658 0.334735C17.4515 0.120408 17.1608 0 16.8577 0H2.00056C1.69745 0 1.40676 0.120408 1.19244 0.334735C0.978109 0.549063 0.857702 0.839753 0.857702 1.14286C0.857702 1.44596 0.978109 1.73665 1.19244 1.95098C1.40676 2.16531 1.69745 2.28571 2.00056 2.28571ZM0.857702 8C0.857702 7.6969 0.978109 7.40621 1.19244 7.19188C1.40676 6.97755 1.69745 6.85714 2.00056 6.85714H22.572C22.8751 6.85714 23.1658 6.97755 23.3801 7.19188C23.5944 7.40621 23.7148 7.6969 23.7148 8C23.7148 8.30311 23.5944 8.59379 23.3801 8.80812C23.1658 9.02245 22.8751 9.14286 22.572 9.14286H2.00056C1.69745 9.14286 1.40676 9.02245 1.19244 8.80812C0.978109 8.59379 0.857702 8.30311 0.857702 8ZM0.857702 14.8571C0.857702 14.554 0.978109 14.2633 1.19244 14.049C1.40676 13.8347 1.69745 13.7143 2.00056 13.7143H12.2863C12.5894 13.7143 12.8801 13.8347 13.0944 14.049C13.3087 14.2633 13.4291 14.554 13.4291 14.8571C13.4291 15.1602 13.3087 15.4509 13.0944 15.6653C12.8801 15.8796 12.5894 16 12.2863 16H2.00056C1.69745 16 1.40676 15.8796 1.19244 15.6653C0.978109 15.4509 0.857702 15.1602 0.857702 14.8571Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6">
                        <a href="index.php" class="logo-header">
                            <img src="images/logo/Logo-Black.png" alt="logo" class="logo">
                        </a>
                    </div>
                    <div class="col-xl-6 tf-md-hidden">
                        <nav class="box-navigation text-center">
                            <ul class="box-nav-ul d-flex align-items-center justify-content-center gap-30">
                                <li class="menu-item"><a href="index.php" class="item-link">Home</a></li>
                                <li class="menu-item"><a href="shop-loadmore.php" class="item-link">New Arrivals</a>
                                </li>
                                <li class="menu-item position-relative">
                                    <a href="#" class="item-link">Themed Collections<i
                                            class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu submenu-default">
                                        <ul class="menu-list">
                                            <li>
                                                <a href="products.php?id=SHIRTS"
                                                    class="menu-link-text link text_black-2">Shirts
                                                </a>
                                            </li>
                                            <li>
                                               <a href="products.php?id=PANTS"
                                                    class="menu-link-text link text_black-2">Pants
                                                </a>
                                            </li>
                                            <li>
                                                <a href="products.php?id=T-SHIRTS"
                                                    class="menu-link-text link text_black-2">T-Shirts
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item position-relative">
                                    <a href="#" class="item-link">Customer Assistance<i
                                            class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu submenu-default">
                                        <ul class="menu-list">
                                            <li>
                                                <a href="https://stcourier.com/track/shipment"
                                                    class="menu-link-text link text_black-2">Track
                                                    Your Order
                                                </a>
                                            </li>
                                            <li>
                                                <a href="return-exchange.php"
                                                    class="menu-link-text link text_black-2">Return's &
                                                    Exchange's
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item"><a href="contact-1.php" class="item-link">Contact</a></li>

                            </ul><?php
 $ipaddress = getenv("REMOTE_ADDR") ;

?>
                        </nav>
                    </div>
                    <div class="col-xl-3 col-md-4 col-3">
                        <ul class="nav-icon d-flex justify-content-end align-items-center gap-20">
                            <li class="nav-search"><a href="#canvasSearch" data-bs-toggle="offcanvas"
                                    aria-controls="offcanvasLeft" class="nav-icon-item"><i
                                        class="icon icon-search"></i></a>
                            </li>
                            <li class="nav-account"><a href="#login" data-bs-toggle="modal" class="nav-icon-item"><i
                                        class="icon icon-account"></i></a></li>
                            <li class="nav-wishlist"><a href="wishlist.php" class="nav-icon-item"><i
                                        class="icon icon-heart"></i><span class="count-box">0</span></a></li>
                            <li class="nav-cart"><a href="#shoppingCart" data-bs-toggle="modal" class="nav-icon-item"><i
                                        class="icon icon-bag"></i><span class="count-box" id="cart-count">0</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Mobile Filter/Sort Buttons -->
            <div class="str-mobile-buttons">
                <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="str-button">
                    <span class="icon icon-filter" style="font-size: 10px;"></span> Filters
                </a>
                <div class="str-divider"></div>
                <button id="openSortModal" class="str-button" type="button">
                    Sort by <span class="icon icon-arrow-down" style="font-size: 8px; padding-top: 2px;"></span>
                </button>
            </div>
        </header>
        
        <!-- /Header -->


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function updateCartCount() {
        $.ajax({
            url: 'get_cart_count.php',
            method: 'GET',
            success: function (data) {
                $('#cart-count').text(data);
            }
        });
    }

    // Initial load
    updateCartCount();

    // Refresh every 2 seconds
    setInterval(updateCartCount, 1000);
</script>
