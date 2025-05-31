<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>View Cart</title>

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

        <!-- page-cart -->
        <section>
            <div class="container">
            <div class="tf-page-title" style="margin-bottom: 15px;">
                <div class="container-full">
                    <div class="heading text-center">Shopping Cart</div>
                </div>
            </div>
      
                <div class="tf-page-cart-wrap">
                    <div class="tf-page-cart-item">
                        <form>
                            <table class="tf-table-page-cart">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                            include '../admin/dbcon.php';


                                            $sqsl=mysqli_query($con, "select * from temp_cart WHERE email='$ipaddress'" );
                                            while($order=mysqli_fetch_array($sqsl))

                                            {
                                        $sql1 = "SELECT * FROM product_images WHERE product_id = '$order[product_id]'";
                                        $result1 = mysqli_query($con, $sql1);
                                        $images = mysqli_fetch_assoc($result1);
                                        ?>
                                    <tr class="tf-cart-item file-delete">
                                        <td class="tf-cart-item_product">
                                            <a href="product-detail.php" class="img-box">
                                                <img src="../admin/<?php echo "$images[image_path]"; ?>" alt="img-product">
                                            </a>
                                            <div class="cart-info">
                                                <a href="product-detail.php" class="cart-title link"><?php echo "$order[product_title]"; ?></a>
                                                <div class="cart-meta-variant"><?php echo "$order[varient]"; ?></div>
                                                <span class="remove-cart link remove">Remove</span>
                                            </div>
                                        </td>
                                        <td class="tf-cart-item_price tf-variant-item-price" cart-data-title="Price">
                                            <div class="cart-price price">₹<?php echo "$order[price]"; ?>.00</div>
                                        </td>
                                        <td class="tf-cart-item_quantity" cart-data-title="Quantity">
                                            <div class="cart-quantity">
                                                <div class="wg-quantity">
                                                    <span class="btn-quantity btndecrease">
                                                        <svg class="d-inline-block" width="9" height="1"
                                                            viewBox="0 0 9 1" fill="currentColor">
                                                            <path
                                                                d="M9 1H5.14286H3.85714H0V1.50201e-05H3.85714L5.14286 0L9 1.50201e-05V1Z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <input type="text" name="number" value="<?php echo "$order[qty]"; ?>">
                                                    <span class="btn-quantity btnincrease">
                                                        <svg class="d-inline-block" width="9" height="9"
                                                            viewBox="0 0 9 9" fill="currentColor">
                                                            <path
                                                                d="M9 5.14286H5.14286V9H3.85714V5.14286H0V3.85714H3.85714V0H5.14286V3.85714H9V5.14286Z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="tf-cart-item_total tf-variant-item-total" cart-data-title="Total">
                                            <div class="cart-total price">₹<?php echo "$order[total_price]"; ?>.00</div>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </form>
                    </div>

                    <div class="tf-page-cart-footer">
                        <div class="tf-cart-footer-inner">
                            <div class="tf-page-cart-checkout">
                                <div class="shipping-calculator">
                                    <summary
                                        class="accordion-shipping-header d-flex justify-content-between align-items-center collapsed"
                                        data-bs-target="#shipping" data-bs-toggle="collapse" aria-controls="shipping">
                                        <h3 class="shipping-calculator-title">Estimate Shipping</h3>
                                        <span class="shipping-calculator_accordion-icon"></span>
                                    </summary>
                                    <div class="collapse" id="shipping">
                                        <div class="accordion-shipping-content">
                                            <fieldset class="field">
                                                <label class="label">Country</label>
                                                <select class="tf-select w-100" name="address[country]" id="countrySelect">
                                                    <option value="---">---</option>
                                                    <option value="India">India</option>
                                                </select>
                                            </fieldset>

                                            <fieldset class="field">
                                                <label class="label">State</label>
                                                <select class="tf-select w-100" name="address[state]" id="stateSelect">
                                                    <option value="---">---</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Odisha">Odisha</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu
                                                    </option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                    <option value="Ladakh">Ladakh</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                    <option value="Puducherry">Puducherry</option>
                                                </select>
                                            </fieldset>

                                            <fieldset class="field">
                                                <label class="label">Zip code</label>
                                                <input type="text" id="zipInput" placeholder="">
                                            </fieldset>

                                            <button type="button" onclick="validateShipping()"
                                                class="tf-btn btn-fill animate-hover-btn radius-3 justify-content-center">
                                                <span>Estimate</span>
                                            </button>

                                            <label id="shippingLabel" class="fw-4" style="padding-top: 20px; display: none;">
                                                <span>Shipping Charge: </span><span class="fw-5">₹30.00</span>
                                            </label>

                                            <p id="errorText" style="padding-top: 20px; color: red; display: none;"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-checkbox">
                                    <input type="checkbox" class="tf-check" id="cart-gift-checkbox">
                                    <label for="cart-gift-checkbox" class="fw-4">
                                        <span>Do you want a gift wrap?</span> Only <span class="fw-5">$5.00</span>
                                    </label>
                                </div>
                                <div class="tf-cart-totals-discounts">
                                    <h3>Subtotal</h3>
                                    <span class="total-value">₹<?php 
                                $sum_query = "SELECT SUM(total_price) AS total FROM temp_cart WHERE email='$ipaddress'";
                                $sum_result = mysqli_query($con, $sum_query);
                                $sum_row = mysqli_fetch_assoc($sum_result);
                                echo number_format($sum_row['total'] ?? 0, 2);
                             ?></span>
                                </div>
                                <p class="tf-cart-tax">
                                    Taxes and <a href="shipping-delivery.php">shipping</a> calculated at checkout
                                </p>
                                <div class="cart-checkbox">
                                    <input type="checkbox" class="tf-check" id="check-agree">
                                    <label for="check-agree" class="fw-4">
                                        I agree with the <a href="terms-conditions.php">terms and conditions</a>
                                    </label>
                                </div>
                                <div class="cart-checkout-btn">
                                    <a href="checkout.php"
                                        class="tf-btn w-100 btn-fill animate-hover-btn radius-3 justify-content-center">
                                        <span>Check out</span>
                                    </a>
                                </div>
                                <div class="tf-page-cart_imgtrust">
                                    <p class="text-center fw-6">Guarantee Safe Checkout</p>
                                    <div class="cart-list-social">
                                        <div class="payment-item">
                                            <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img"
                                                width="38" height="24" aria-labelledby="pi-visa">
                                                <title id="pi-visa">Visa</title>
                                                <path opacity=".07"
                                                    d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                                </path>
                                                <path fill="#fff"
                                                    d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                                </path>
                                                <path
                                                    d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z"
                                                    fill="#142688"></path>
                                            </svg>
                                        </div>
                                        <div class="payment-item">
                                            <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38"
                                                height="24" role="img" aria-labelledby="pi-paypal">
                                                <title id="pi-paypal">PayPal</title>
                                                <path opacity=".07"
                                                    d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                                </path>
                                                <path fill="#fff"
                                                    d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                                </path>
                                                <path fill="#003087"
                                                    d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z">
                                                </path>
                                                <path fill="#3086C8"
                                                    d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z">
                                                </path>
                                                <path fill="#012169"
                                                    d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="payment-item">
                                            <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img"
                                                width="38" height="24" aria-labelledby="pi-master">
                                                <title id="pi-master">Mastercard</title>
                                                <path opacity=".07"
                                                    d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                                </path>
                                                <path fill="#fff"
                                                    d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                                </path>
                                                <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
                                                <circle fill="#F79E1B" cx="23" cy="12" r="7"></circle>
                                                <path fill="#FF5F00"
                                                    d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="payment-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" role="img"
                                                aria-labelledby="pi-american_express" viewBox="0 0 38 24" width="38"
                                                height="24">
                                                <title id="pi-american_express">American Express</title>
                                                <path fill="#000"
                                                    d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3Z"
                                                    opacity=".07"></path>
                                                <path fill="#006FCF"
                                                    d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32Z">
                                                </path>
                                                <path fill="#FFF"
                                                    d="M22.012 19.936v-8.421L37 11.528v2.326l-1.732 1.852L37 17.573v2.375h-2.766l-1.47-1.622-1.46 1.628-9.292-.02Z">
                                                </path>
                                                <path fill="#006FCF"
                                                    d="M23.013 19.012v-6.57h5.572v1.513h-3.768v1.028h3.678v1.488h-3.678v1.01h3.768v1.531h-5.572Z">
                                                </path>
                                                <path fill="#006FCF"
                                                    d="m28.557 19.012 3.083-3.289-3.083-3.282h2.386l1.884 2.083 1.89-2.082H37v.051l-3.017 3.23L37 18.92v.093h-2.307l-1.917-2.103-1.898 2.104h-2.321Z">
                                                </path>
                                                <path fill="#FFF"
                                                    d="M22.71 4.04h3.614l1.269 2.881V4.04h4.46l.77 2.159.771-2.159H37v8.421H19l3.71-8.421Z">
                                                </path>
                                                <path fill="#006FCF"
                                                    d="m23.395 4.955-2.916 6.566h2l.55-1.315h2.98l.55 1.315h2.05l-2.904-6.566h-2.31Zm.25 3.777.875-2.09.873 2.09h-1.748Z">
                                                </path>
                                                <path fill="#006FCF"
                                                    d="M28.581 11.52V4.953l2.811.01L32.84 9l1.456-4.046H37v6.565l-1.74.016v-4.51l-1.644 4.494h-1.59L30.35 7.01v4.51h-1.768Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="payment-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24"
                                                width="38" height="24" aria-labelledby="pi-amazon">
                                                <title id="pi-amazon">Amazon</title>
                                                <path
                                                    d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"
                                                    fill="#000" fill-rule="nonzero" opacity=".07"></path>
                                                <path
                                                    d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"
                                                    fill="#FFF" fill-rule="nonzero"></path>
                                                <path
                                                    d="M25.26 16.23c-1.697 1.48-4.157 2.27-6.275 2.27-2.97 0-5.644-1.3-7.666-3.463-.16-.17-.018-.402.173-.27 2.183 1.504 4.882 2.408 7.67 2.408 1.88 0 3.95-.46 5.85-1.416.288-.145.53.222.248.47v.001zm.706-.957c-.216-.328-1.434-.155-1.98-.078-.167.024-.193-.148-.043-.27.97-.81 2.562-.576 2.748-.305.187.272-.047 2.16-.96 3.063-.14.138-.272.064-.21-.12.205-.604.664-1.96.446-2.29h-.001z"
                                                    fill="#F90" fill-rule="nonzero"></path>
                                                <path
                                                    d="M21.814 15.291c-.574-.498-.676-.73-.993-1.205-.947 1.012-1.618 1.315-2.85 1.315-1.453 0-2.587-.938-2.587-2.818 0-1.467.762-2.467 1.844-2.955.94-.433 2.25-.51 3.25-.628v-.235c0-.43.033-.94-.208-1.31-.212-.333-.616-.47-.97-.47-.66 0-1.25.353-1.392 1.085-.03.163-.144.323-.3.33l-1.677-.187c-.14-.033-.296-.153-.257-.38.386-2.125 2.223-2.766 3.867-2.766.84 0 1.94.234 2.604.9.842.82.762 1.918.762 3.11v2.818c0 .847.335 1.22.65 1.676.113.164.138.36-.003.482-.353.308-.98.88-1.326 1.2a.367.367 0 0 1-.414.038zm-1.659-2.533c.34-.626.323-1.214.323-1.918v-.392c-1.25 0-2.57.28-2.57 1.82 0 .782.386 1.31 1.05 1.31.487 0 .922-.312 1.197-.82z"
                                                    fill="#221F1F"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tf-page-cart-note">
                                <label for="cart-note">Add Order Note</label>
                                <textarea name="note" id="cart-note" placeholder="How can we help you?"></textarea>
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

    <script>
        const stateZipRanges = {
            "Andhra Pradesh": [500001, 534999],
            "Arunachal Pradesh": [790001, 792999],
            "Assam": [781001, 788999],
            "Bihar": [800001, 854999],
            "Chhattisgarh": [490001, 497999],
            "Goa": [403001, 403999],
            "Gujarat": [360001, 396999],
            "Haryana": [121001, 136999],
            "Himachal Pradesh": [171001, 177999],
            "Jharkhand": [811001, 834999],
            "Karnataka": [560001, 591999],
            "Kerala": [670001, 695999],
            "Madhya Pradesh": [450001, 488999],
            "Maharashtra": [400001, 444999],
            "Manipur": [795001, 795999],
            "Meghalaya": [793001, 794999],
            "Mizoram": [796001, 796999],
            "Nagaland": [797001, 798999],
            "Odisha": [751001, 770999],
            "Punjab": [140001, 160999],
            "Rajasthan": [301001, 345999],
            "Sikkim": [737001, 737999],
            "Tamil Nadu": [600001, 643253],
            "Telangana": [500001, 509999],
            "Tripura": [799001, 799999],
            "Uttar Pradesh": [201001, 285999],
            "Uttarakhand": [244001, 263999],
            "West Bengal": [700001, 743999],
            "Andaman and Nicobar Islands": [744101, 744302],
            "Chandigarh": [160001, 160099],
            "Dadra and Nagar Haveli and Daman and Diu": [396210, 396240],
            "Delhi": [110001, 110096],
            "Jammu and Kashmir": [180001, 194999],
            "Ladakh": [194101, 194302],
            "Lakshadweep": [682551, 682559],
            "Puducherry": [605001, 609999]
        };

        function validateShipping() {
            const state = document.getElementById('stateSelect').value;
            const zip = document.getElementById('zipInput').value.trim();
            const shippingLabel = document.getElementById('shippingLabel');
            const errorText = document.getElementById('errorText');

            shippingLabel.style.display = 'none';
            errorText.style.display = 'none';

            if (state in stateZipRanges) {
                const zipCode = parseInt(zip);
                const [min, max] = stateZipRanges[state];

                if (!isNaN(zipCode) && zipCode >= min && zipCode <= max) {
                    shippingLabel.style.display = 'block';
                } else {
                    errorText.textContent = `ZIP code is not valid for ${state}.`;
                    errorText.style.display = 'block';
                }
            } else {
                errorText.textContent = "Please select a valid state.";
                errorText.style.display = 'block';
            }
        }
    </script>

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

</body>
</html>