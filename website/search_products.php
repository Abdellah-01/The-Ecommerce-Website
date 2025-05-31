<?php
include '../admin/dbcon.php';

if(isset($_GET['q'])) {
    $searchTerm = mysqli_real_escape_string($con, $_GET['q']);
    $query = mysqli_query($con, "SELECT * FROM product WHERE product_title LIKE '%$searchTerm%' ORDER BY product_title LIMIT 10");
    
    if(mysqli_num_rows($query) > 0) {
        while($product = mysqli_fetch_array($query)) {
            $imageQuery = mysqli_query($con, "SELECT * FROM product_images WHERE product_id='$product[product_id]' ORDER BY id ASC LIMIT 1");
            $image = mysqli_fetch_array($imageQuery);
            ?>
            <div class="tf-loop-item">
                <div class="image">
                    <a href="product-images-grouped.php?id=<?php echo $product['product_id']; ?>">
                        <img src="../admin/<?php echo $image['image_path']; ?>" alt="<?php echo $product['product_title']; ?>">
                    </a>
                </div>
                <div class="content">
                    <a href="product-images-grouped.php?id=<?php echo $product['product_id']; ?>"><?php echo $product['product_title']; ?></a>
                    <div class="tf-product-info-price">
                        <?php if($product['offer_price'] < $product['regular_price']): ?>
                            <div class="compare-at-price">₹<?php echo $product['regular_price']; ?>.00</div>
                            <div class="price-on-sale fw-6">₹<?php echo $product['offer_price']; ?>.00</div>
                        <?php else: ?>
                            <div class="price fw-6">₹<?php echo $product['regular_price']; ?>.00</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo '<p>No products found matching your search.</p>';
    }
}
?><?php
$q=$_REQUEST['q'];

?>


<script>
    window.location.href="search-home.php?q=<?php echo"$q"; ?>";
</script>