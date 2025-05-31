<?php ?><span class="price">
    <span class="text_primary" id="variant-price">₹<?php echo $variants[0]['varient_price']; ?></span>
    <span class="fw-4 text-sale" id="variant-original-price">₹1580.00</span>
</span>

<input type="text" id="selected-variant-input" name="price" readonly class="form-control" placeholder="price">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Function to extract numeric value from price span
    function getPriceValue(priceSpan) {
        return priceSpan.text().replace(/[^0-9.]/g, '');
    }

    // Initialize input with current price (without ₹ symbol)
    const initialPrice = getPriceValue($('#variant-price'));
    $('#selected-variant-input').val(initialPrice);

    // If you need to update dynamically (when price changes)
    // You would add observers or event triggers here
    // Example: $(document).on('price-updated', function() {
    //     $('#selected-variant-input').val(getPriceValue($('#variant-price')));
    // });
});
</script>