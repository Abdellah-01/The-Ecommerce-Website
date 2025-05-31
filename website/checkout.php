<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Checkout</title>

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
                <div class="heading text-center">Check Out</div>
            </div>
        </div>
        <!-- /page-title -->

        <!-- page-cart -->
        <section class="flat-spacing-11">
            <div class="container">
                <div class="tf-page-cart-wrap layout-2">
                    <div class="tf-page-cart-item">
                        <h5 class="fw-5 mb_20">Billing details</h5>
                        <form class="form-checkout" action="checkout_save_product.php" method="POST">
                            <div class="box grid-2">
                                <fieldset class="fieldset">
                                    <label for="first-name">First Name</label>
                                    <input type="text" id="first-name" required name="customer_fname" placeholder="Themesflat">
                                </fieldset>
                                <fieldset class="fieldset">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" name="customer_lname" required id="last-name">
                                </fieldset>
                            </div>
                            <div class="box grid-2">
                                <fieldset class="box fieldset">
                                <label for="phone">Mobile Number</label>
                                <input type="tel" name="customer_mobile" required id="phone">
                                </fieldset>
                                <fieldset class="box fieldset">
                                <label for="email">Email</label>
                                <input type="email" name="customer_email" required id="email">
                                </fieldset>
                            </div>

                            <div class="box grid-2">
                                <fieldset class="box fieldset">
                                <label for="address">Address</label>
                                <input type="text"  name="billing_address" required id="address">
                            </fieldset>
                                <fieldset class="box fieldset">
                                <label for="address">Appartment, Suite etc.. (Optional)</label>
                                <input type="text"  name="billing_address2" id="address">
                            </fieldset>  

                            </div> 

                             <div class="box grid-2">
  <fieldset class="box fieldset">
    <label for="country">Country</label>
    <div class="select-custom">
      <select class="tf-select w-100" id="country" required name="country">
        <option value="India">India</option>
      </select>
    </div>
  </fieldset>

  <fieldset class="box fieldset">
    <label for="state">State</label>
    <div class="select-custom">
      <select class="tf-select w-100" id="state" required name="state">
        <option value="">Select State</option>
      </select>
    </div>
  </fieldset>
</div>

<div class="box grid-2">
  <fieldset class="box fieldset">
    <label for="city">Town/City</label>
    <div class="select-custom">
      <select class="tf-select w-100" id="city" required name="city">
        <option value="">Select City</option>
      </select>
    </div>
  </fieldset>

  <fieldset class="box fieldset">
    <label for="address">Pincode</label>
    <input type="text" name="zipcode" required id="address" />
  </fieldset>
</div>                               
                            

                                            </div>
                    <div class="tf-page-cart-footer">
                        <div class="tf-cart-footer-inner">
                            <h5 class="fw-5 mb_20">Your order</h5>
                            <div class="tf-page-cart-checkout widget-wrap-checkout">
                                <ul class="wrap-checkout-product">

                                          <?php
    include '../admin/dbcon.php';

    $sqsl=mysqli_query($con, "select * from temp_cart WHERE email='$ipaddress'" );
    while($products=mysqli_fetch_array($sqsl))
    {


$sql=mysqli_query($con, "select * from product_images WHERE product_id='$products[product_id]'  order by id asc  limit 1");
$image=mysqli_fetch_array($sql);
?>
          
                                    <li class="checkout-product-item">
                                        <figure class="img-product">
                                            <img src="../admin/<?php echo "$image[image_path]"; ?>" alt="product">
                                            <span class="quantity"><?php echo "$products[qty]"; ?></span>
                                        </figure>
                                        <div class="content">
                                            <div class="info">
                                                <p class="name"><?php echo "$products[product_title]"; ?></p>
                                                <span class="variant"><?php echo "$products[varient]"; ?></span>
                                            </div>
                                            <span class="price">₹ <?php echo "$products[price]"; ?>.00</span>
                                        </div>
                                    </li>
                                   <?php } ?>

                                </ul>
                                <div class="coupon-box">
                                    <input type="text" placeholder="Discount code">
                                    <a href="#"
                                        class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn">Apply</a>
                                </div>
                                <div class="d-flex justify-content-between line pb_20">
                                    <h6 class="fw-5">Total</h6>
                                    <h6 class="total fw-5">₹ <?php

$sql = "SELECT SUM(total_price) AS total_amount FROM temp_cart WHERE email='$ipaddress'";
$result = mysqli_query($con, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    // If total_amount is null (i.e., no rows), default to 0
    $total = $row['total_amount'] ?? 0;
    echo "$total";
} else {
    echo "0";
}
?>.00</h6>
                                </div>
                                <div class="wd-check-payment">
                                    <div class="fieldset-radio mb_20">
                                        <input type="radio" name="payment" id="bank" class="tf-check" checked>
                                        <label for="bank">Online Mode</label>

                                    </div>
                                    <div class="fieldset-radio mb_20">
                                        <input type="radio" name="payment" id="delivery" class="tf-check">
                                        <label for="delivery">Cash on delivery</label>
                                    </div>
                                    <p class="text_black-2 mb_20">Your personal data will be used to process your order,
                                        support your experience throughout this website, and for other purposes
                                        described in our <a href="privacy-policy.php"
                                            class="text-decoration-underline">privacy policy</a>.</p>
                                    <div class="box-checkbox fieldset-radio mb_20">
                                        <input type="checkbox" id="check-agree" class="tf-check">
                                        <label for="check-agree" class="text_black-2">I have read and agree to the
                                            website <a href="terms-conditions.php"
                                                class="text-decoration-underline">terms and conditions</a>.</label>
                                    </div>
                                </div>
                               <?php
 $ipaddress = getenv("REMOTE_ADDR") ;

?>
<?php
require '../admin/dbcon.php';
$count_query = "SELECT COUNT(*) as total_rows FROM temp_cart where email='$ipaddress'";
$result = mysqli_query($con, $count_query);
$words = mysqli_fetch_assoc($result);


$i =0;


while($i < $words['total_rows']){


$sqls=mysqli_query($con, "select * from temp_cart WHERE email='$ipaddress' " );
while($rsow=mysqli_fetch_array($sqls))


{ 

?>
<input type="hidden" name="total_price<?php echo "$i"; ?>" value="<?php echo "$rsow[total_price]"; ?>">

<input type="hidden" name="email" value="<?php echo "$ipaddress"; ?>">
<input type="hidden" name="product_id<?php echo "$i"; ?>" value="<?php echo "$rsow[product_id]"; ?>">
<input type="hidden" name="product_title<?php echo "$i"; ?>" value="<?php echo "$rsow[product_title]"; ?>">
<input type="hidden" name="varient<?php echo "$i"; ?>" value="<?php echo "$rsow[varient]"; ?>">
<input type="hidden" name="qty<?php echo "$i"; ?>" value="<?php echo "$rsow[qty]"; ?>">

<input type="hidden" name="price<?php echo "$i"; ?>" value="<?php echo "$rsow[price]"; ?>">
<input type="hidden" name="catagory_name<?php echo "$i"; ?>" value="<?php echo "$rsow[catagory_name]"; ?>">
<input type="hidden" name="sub_catagory_name<?php echo "$i"; ?>" value="<?php echo "$rsow[sub_catagory_name]"; ?>">
<input type="hidden" name="email" value="<?php echo "$ipaddress"; ?>">


 <?php
// Step 2: Retrieve the last serial number from the database
$sql = "SELECT MAX(sno) AS last_serial FROM orders";
$result = $con->query($sql);

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$lastSerial = $row["last_serial"];
} else {
$lastSerial = 0; // If no records exist yet
}

// Step 3: Increment the last serial number to generate a new one
$newSerial = $lastSerial + 1;

// Step 4: Use the new serial number as the product ID for the new product
$newProductId = "XVB" . str_pad($newSerial, 6, "0", STR_PAD_LEFT);?>
<input type="hidden" name="order_id" value="<?php echo "$newProductId"; ?>">
<?php 
$i +=1;}
?>

<br>
<?php  }?>

                                <button
                                    class="tf-btn radius-3 btn-fill btn-icon animate-hover-btn justify-content-center"name="submit">Place
                                    order</button>
                            </div></form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page-cart -->

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



<!-- Canvas Search -->
<?php require"search.php"; ?>

    <!-- toolbarShopmb -->
    <?php require "shop-cate.php"; ?>
    <!-- /toolbarShopmb -->

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
const stateCityMap = {
  "Andhra Pradesh": [
    "Visakhapatnam", "Vijayawada", "Guntur", "Nellore", 
    "Anantapur", "Chittoor", "East Godavari", "Krishna", 
    "Kurnool", "Prakasam", "Srikakulam", "Vizianagaram", 
    "West Godavari", "YSR Kadapa", "Bapatla", "Palnadu", "Nandyal"
  ],
  "Arunachal Pradesh": [
    "Itanagar", "Tawang", "Ziro", "Pasighat", 
    "West Kameng", "East Kameng", "Papum Pare", "Lower Subansiri",
    "Upper Subansiri", "West Siang", "East Siang", "Lohit", "Changlang", "Longding", "Kra Daadi"
  ],
  "Assam": [
    "Guwahati", "Silchar", "Dibrugarh", "Jorhat", 
    "Bongaigaon", "Barpeta", "Nagaon", "Sonitpur",
    "Tinsukia", "Karbi Anglong", "Dhemaji", "Kamrup", "Cachar", "Hailakandi", "Karimganj", "Darrang"
  ],
  "Bihar": [
    "Patna", "Gaya", "Bhagalpur", "Muzaffarpur", 
    "Munger", "Begusarai", "Nalanda", "Purnia", 
    "Buxar", "Darbhanga", "Katihar", "Supaul", "Kishanganj", "Bhojpur", "Jehanabad", "Sitamarhi"
  ],
  "Chhattisgarh": [
    "Raipur", "Bilaspur", "Durg", "Korba", 
    "Rajnandgaon", "Raigarh", "Janjgira", "Jashpur",
    "Koriya", "Surguja", "Balod", "Dantewada", "Mahasamund", "Kabirdham", "Balrampur"
  ],
  "Goa": [
    "Panaji", "Margao", "Mapusa", "Vasco da Gama", 
    "Ponda", "Sanguem", "Canacona", "Tiswadi", "North Goa", "South Goa"
  ],
  "Gujarat": [
    "Ahmedabad", "Surat", "Vadodara", "Rajkot", 
    "Bhavnagar", "Jamnagar", "Junagadh", "Anand", 
    "Narmada", "Patan", "Mehsana", "Sabarkantha", "Banaskantha", "Kutch", "Navsari", "Valsad"
  ],
  "Haryana": [
    "Chandigarh", "Faridabad", "Gurugram", "Panipat", 
    "Ambala", "Hisar", "Karnal", "Sonipat",
    "Rohtak", "Yamunanagar", "Sirsa", "Bhiwani", "Mahendragarh", "Jhajjar", "Palwal"
  ],
  "Himachal Pradesh": [
    "Shimla", "Manali", "Dharamshala", "Solan", 
    "Kullu", "Mandi", "Bilaspur", "Una", 
    "Hamirpur", "Chamba", "Kangra", "Sirmaur", "Kullu", "Solan", "Nahan"
  ],
  "Jharkhand": [
    "Ranchi", "Jamshedpur", "Dhanbad", "Bokaro", 
    "Giridih", "Deoghar", "Hazaribagh", "Dumka", 
    "Khunti", "Palamu", "Latehar", "Lohardaga", "Godda", "Sahebganj", "Pakur"
  ],
  "Karnataka": [
    "Bengaluru", "Mysuru", "Mangaluru", "Hubballi", 
    "Belagavi", "Tumakuru", "Chitradurga", "Shivamogga", 
    "Mandya", "Bagalkot", "Dakshina Kannada", "Gadag", "Bidar", "Haveri", "Chikkamagaluru", "Udupi"
  ],
  "Kerala": [
    "Thiruvananthapuram", "Kochi", "Kozhikode", "Thrissur", 
    "Alappuzha", "Kottayam", "Palakkad", "Malappuram", 
    "Wayanad", "Kannur", "Idukki", "Ernakulam", "Pathanamthitta", "Kollam", "Kasargod"
  ],
  "Madhya Pradesh": [
    "Bhopal", "Indore", "Jabalpur", "Gwalior", 
    "Ujjain", "Sagar", "Rewa", "Shivpuri", 
    "Damoh", "Katni", "Satna", "Khandwa", "Burhanpur", "Sehore", "Rajgarh", "Vidisha"
  ],
  "Maharashtra": [
    "Mumbai", "Pune", "Nagpur", "Nashik", 
    "Thane", "Solapur", "Aurangabad", "Kolhapur", 
    "Jalna", "Raigad", "Akola", "Buldhana", "Amravati", "Yavatmal", "Ratnagiri", "Sindhudurg"
  ],
  "Manipur": [
    "Imphal", "Thoubal", "Churachandpur", "Ukhrul", 
    "Bishnupur", "Chandel", "Senapati", "Tamenglong", "Jiribam", "Kangpokpi"
  ],
  "Meghalaya": [
    "Shillong", "Tura", "Nongpoh", "Jowai", 
    "West Garo Hills", "East Khasi Hills", "South West Khasi Hills", 
    "West Khasi Hills", "East Jaintia Hills", "Ri Bhoi", "South Garo Hills", "North Garo Hills"
  ],
  "Mizoram": [
    "Aizawl", "Lunglei", "Champhai", "Serchhip", 
    "Mamit", "Kolasib", "Lawngtlai", "Saiha", "Hnahthial"
  ],
  "Nagaland": [
    "Kohima", "Dimapur", "Mokokchung", "Tuensang", 
    "Mon", "Zunheboto", "Peren", "Wokha", "Longleng"
  ],
  "Odisha": [
    "Bhubaneswar", "Cuttack", "Rourkela", "Puri", 
    "Sambalpur", "Berhampur", "Baleswar", "Balangir", 
    "Koraput", "Khurda", "Jagatsinghpur", "Kandhamal", "Nayagarh", "Ganjam", "Malkangiri"
  ],
  "Punjab": [
    "Amritsar", "Ludhiana", "Jalandhar", "Patiala", 
    "Bathinda", "Mohali", "Hoshiarpur", "Ferozepur", 
    "Faridkot", "Rupnagar", "Moga", "Barnala", "Sangrur", "Fatehgarh Sahib", "Kapurthala"
  ],
  "Rajasthan": [
    "Jaipur", "Jodhpur", "Udaipur", "Kota", 
    "Ajmer", "Bikaner", "Alwar", "Sikar", 
    "Churu", "Nagaur", "Jhunjhunu", "Tonk", "Pali", "Barmer", "Chittorgarh", "Jhalawar"
  ],
  "Sikkim": [
    "Gangtok", "Namchi", "Geyzing", "Mangan", "Rangpo", "Soreng"
  ],
  "Tamil Nadu": [
    "Chennai", "Madurai", "Coimbatore", "Tiruchirapalli", 
    "Salem", "Erode", "Vellore", "Tirunelveli", 
    "Thanjavur", "Kanchipuram", "Theni", "Villupuram",
    "Ramanathapuram", "Dindigul", "Karur", "Nagapattinam",
    "Cuddalore", "Sivaganga", "Tiruvarur", "Kanyakumari",
    "Pudukkottai", "Ariyalur", "Krishnagiri", "Tirupur",
    "The Nilgiris", "Virudhunagar", "Theni", "Namakkal",
    "Tiruvallur", "Kallakurichi", "Ranipet", "Chengalpattu",
    "Tiruvannamalai", "Tiruchengode", "Vellore"
  ],
  "Telangana": [
    "Hyderabad", "Warangal", "Nizamabad", "Karimnagar", 
    "Khammam", "Mahabubnagar", "Nalgonda", "Adilabad", 
    "Rangareddy", "Medak", "Karimnagar", "Jagtial", "Suryapet", "Jagitial", "Nirmal"
  ],
  "Tripura": [
    "Agartala", "Udaipur", "Dharmanagar", "Kailashahar", 
    "Sabroom", "Belonia", "Amarpur", "Sonamura", "Sepahijala", "Dhalai"
  ],
  "Uttar Pradesh": [
    "Lucknow", "Kanpur", "Varanasi", "Agra", 
    "Ghaziabad", "Aligarh", "Meerut", "Bareilly", 
    "Moradabad", "Muzaffarnagar", "Allahabad", "Noida", "Mathura", "Etawah", "Shahjahanpur"
  ],
  "Uttarakhand": [
    "Dehradun", "Haridwar", "Nainital", "Haldwani", 
    "Roorkee", "Rishikesh", "Pithoragarh", "Champawat", "Uttarkashi", "Tehri", "Almora"
  ],
  "West Bengal": [
    "Kolkata", "Howrah", "Durgapur", "Siliguri", 
    "Asansol", "Kharagpur", "Burdwan", "Malda", 
    "Murshidabad", "Purulia", "Nadia", "Hooghly", "North 24 Parganas", "South 24 Parganas"
  ],
  "Andaman and Nicobar Islands": [
    "Port Blair", "Havelock", "Neil Island", "Car Nicobar", "Great Nicobar"
  ],
  "Chandigarh": [
    "Chandigarh"
  ],
  "Dadra and Nagar Haveli and Daman and Diu": [
    "Silvassa", "Daman", "Diu"
  ],
  "Delhi": [
    "New Delhi", "Dwarka", "Rohini", "Saket", "Janakpuri", "Pitampura"
  ],
  "Jammu and Kashmir": [
    "Srinagar", "Jammu", "Anantnag", "Baramulla", 
    "Kupwara", "Poonch", "Rajouri", "Kathua", 
    "Doda", "Udhampur", "Pulwama", "Reasi", "Shopian"
  ],
  "Ladakh": [
    "Leh", "Kargil"
  ],
  "Lakshadweep": [
    "Kavaratti", "Agatti", "Minicoy"
  ],
  "Puducherry": [
    "Puducherry", "Karaikal", "Mahe", "Yanam"
  ]
};




window.onload = function () {
  const stateSelect = document.getElementById("state");
  const citySelect = document.getElementById("city");

  // Load all states into the state dropdown
  Object.keys(stateCityMap).forEach(state => {
    let opt = document.createElement("option");
    opt.value = state;
    opt.innerHTML = state;
    stateSelect.appendChild(opt);
  });

  // When a state is selected, populate city dropdown
  stateSelect.addEventListener("change", function () {
    const selectedState = this.value;

    // Clear previous cities
    citySelect.innerHTML = "<option value=''>Select City</option>";

    if (stateCityMap[selectedState]) {
      stateCityMap[selectedState].forEach(city => {
        let opt = document.createElement("option");
        opt.value = city;
        opt.innerHTML = city;
        citySelect.appendChild(opt);
      });
    }
  });
};
</script>
</body>


<!-- Mirrored from themesflat.co/html/ecomus/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2025 08:27:07 GMT -->

</html>