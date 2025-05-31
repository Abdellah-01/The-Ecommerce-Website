<?php
$ipaddress = getenv("REMOTE_ADDR");
include '../admin/dbcon.php';

if (isset($_POST['product_id'])) {
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);

    $sql = mysqli_query($con, "SELECT * FROM product WHERE product_id='$product_id'");
    $product = mysqli_fetch_assoc($sql);

    $img_main = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM product_images WHERE product_id='$product_id' ORDER BY id ASC LIMIT 1"));

    // Fetch all variants
    $variant_query = mysqli_query($con, "SELECT * FROM variant WHERE product_id='$product_id'");
    $variants = [];
    while ($row = mysqli_fetch_assoc($variant_query)) {
        $variants[] = $row;
    }

    // Define correct size order
    $sizeOrder = ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL', '4XL', '5XL'];

    // Sort variants
    usort($variants, function ($a, $b) use ($sizeOrder) {
        $aKey = array_search(strtoupper($a['varient']), $sizeOrder);
        $bKey = array_search(strtoupper($b['varient']), $sizeOrder);
        return $aKey - $bKey;
    });

    ob_start();
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="tf-mini-cart-item" style="flex-direction: column;">
        <div class="mains" style="display: flex; gap: 30px; font-size: 16px; line-height: 1.5;">
            <div class="tf-mini-cart-image">
                <img src="../admin/<?php echo htmlspecialchars($img_main['image_path']); ?>" alt="" style="max-width: 130px;">
            </div>
            <div class="tf-mini-cart-info" style="margin: auto 0;">
                <div class="content">
                    <div class="card-product-info">
                        <p class="title link fw-6"><?php echo htmlspecialchars($product['product_title']); ?></p>
                        <span class="price">
                            <span class="text_primary" id="variant-price">₹<?php echo $variants[0]['varient_price']; ?></span>
                            <span class="fw-4 text-sale" id="variant-original-price">₹1580.00</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="tf-product-info-liveview" style="padding: 20px 0;">
            <p class="fw-6" style="color: green;">In stock</p>
        </div>

      <div class="variant-picker-item mb_30">
    <div class="variant-picker-label">
        Size: <span class="fw-6 variant-picker-label-value">
            <?php 
              $size_query = mysqli_query($con, "SELECT * FROM variant WHERE product_id='$product_id'");
              $sizes = [];
              while($row = mysqli_fetch_array($size_query)) {
                  $sizes[] = $row['varient'];
              }
              
              $sizeOrder = ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL', '4XL', '5XL'];
              usort($sizes, function($a, $b) use ($sizeOrder) {
                  $aKey = array_search(strtoupper($a), $sizeOrder);
                  $bKey = array_search(strtoupper($b), $sizeOrder);
                  return $aKey - $bKey;
              });

              echo !empty($sizes) ? $sizes[0] : '';
            ?>
        </span>
    </div>

    <div class="variant-picker-values">
        <?php
        $first = true;
        foreach ($variants as $variant) {
            $var = htmlspecialchars($variant['varient']);
            $price = htmlspecialchars($variant['varient_price']);
            $original_price = $price + 10000;
        ?>
            <input type="radio" name="size" class="size-radio" value="<?php echo $var; ?>" id="value-<?php echo $var; ?>" <?php if ($first) {
                echo "checked";
                $first = false;
            } ?>>
            <label class="style-text sml"
                   for="value-<?php echo $var; ?>"
                   data-value="<?php echo $var; ?>"
                   data-price="<?php echo $price; ?>"
                   data-original-price="<?php echo $original_price; ?>">
                <p><?php echo $var; ?></p>
            </label>
        <?php } ?>
    </div>
 </div>
<div class="tf-product-info-quantity">
    <div class="quantity-title fw-6">Quantity</div>
    <div class="wg-quantity">
        <span class="btn-quantity btn-decrease">-</span>
        <input type="number" class="quantity-product" name="number" value="1" min="1">
        <span class="btn-quantity btn-increase">+</span>
    </div>
</div>
<br>
        <div class="tf-product-info-buy-button">
            <form class="" action="quick_add_to_cart.php" method="post">

<input type="hidden" name="product_id" value="<?php echo "$product_id"; ?>" readonly>
<input type="hidden" name="product_title" value="<?php echo "$product[product_title]"; ?>" readonly>
<input type="hidden" name="catagory_name" value="<?php echo "$product[catagory_name]"; ?>" readonly>
<input type="hidden" name="sub_catagory_name" value="<?php echo "$product[sub_catagory_name]"; ?>" readonly>


<input type="hidden" name="ip_address" value="<?php echo "$ipaddress"; ?>" readonly>
<!-- Quantity Input (from your quantity picker) -->
<input type="hidden" class="display-quantity" name="quantity" readonly placeholder="Quantity will appear here" id="quantity-qty">

<!-- Variant Price Input (from your variant selection) -->
<input type="hidden" id="selected-variant-price" name="price" readonly class="form-control" placeholder="price">
    <input type="hidden" name="varient" id="selected-variant1" readonly placeholder="Selected Size" value="<?php echo !empty($variants) ? htmlspecialchars($variants[0]['varient']) : ''; ?>">



<button class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart">Add to Cart</button>


<div class="w-100">
<a href="upi://pay?pa=9360985467@sbi&pn=Abdellah&am=599&cu=INR"
class="btns-full">Buy with <img src="images/payments/gpay.png"
alt=""></a>
<a href="#" class="payment-more-option">More payment options</a>
</div>
</form>

        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Function to extract numeric value from price span
    function getPriceValue(priceSpan) {
        return priceSpan.text().replace(/[^0-9.]/g, '');
    }

    // Initialize input with current price (without ₹ symbol)
    const initialPrice = getPriceValue($('#variant-price'));
    $('#selected-variant-price').val(initialPrice);

    
});
</script>

<script>
$(document).ready(function() {
    $('.size-radio').change(function() {
        var selectedValue = $(this).val();
        // Update both the input box and the span
        $('#selected-variant1').val(selectedValue);
        $('.variant-picker-label-value').text(selectedValue);
    });
    
    // Initialize with the first selected value
    var initialValue = $('.size-radio:checked').val();
    $('#selected-variant1').val(initialValue);
    $('.variant-picker-label-value').text(initialValue);
});
</script>
<script>
$(document).ready(function() {
    // Initialize display with current quantity
    $('#quantity-qty').val($('.quantity-product').val());
    
    // Update display when quantity changes
    $('.quantity-product').on('input change', function() {
        $('#quantity-qty').val($(this).val());
    });
    
    // Increase button
    $('.btn-increase').click(function() {
        var $input = $('.quantity-product');
        var currentVal = parseInt($input.val()) || 1; // Fallback to 1 if NaN
        $input.val(currentVal + 1).trigger('change');
    });
    
    // Decrease button (FIXED)
    $('.btn-decrease').click(function() {
        var $input = $('.quantity-product');
        var currentVal = parseInt($input.val()) || 1; // Fallback to 1 if NaN
        var minVal = parseInt($input.attr('min')) || 1; // Fallback to 1 if NaN
        
        if (currentVal > minVal) {
            $input.val(currentVal - 1).trigger('change');
        }
    });
});
</script>
   <script>
$(document).ready(function() {
    // Initialize display with current quantity
    $('#quantity-qty').val($('.quantity-product').val());
    
    // Update display when quantity changes (direct input)
    $('.quantity-product').on('input change', function() {
        $('#quantity-qty').val($(this).val());
    });
    
    // Handle increase button click
    $('.btn-increase').click(function() {
        var $input = $('.quantity-product');
        var currentVal = parseInt($input.val());
        $input.val(currentVal + 1).trigger('change');
    });
    
    // Handle decrease button click
    $('.btn-decrease').click(function() {
        var $input = $('.quantity-product');
        var currentVal = parseInt($input.val());
        if (currentVal > parseInt($input.attr('min'))) {
            $input.val(currentVal - 1).trigger('change');
        }
    });
});
</script>


<?php
    echo ob_get_clean();
}
?>
