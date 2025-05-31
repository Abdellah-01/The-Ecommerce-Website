<?php
include '../admin/dbcon.php';

if(isset($_GET['category'])) {
    $category_name = mysqli_real_escape_string($con, $_GET['category']);
    
    function getProducts($category_name) {
        global $con;
        
        $output = '';
        
        $query = "SELECT * FROM product 
                  WHERE catagory_name = '$category_name'
                  LIMIT 8";
        
        $result = mysqli_query($con, $query);
        
        if(mysqli_num_rows($result) > 0) {
            $output .= '<div class="product-grid">';
            
            while($product = mysqli_fetch_assoc($result)) {
                // Get product images (assuming you have this table)
                $img_query = "SELECT * FROM product_images WHERE product_id = '$product[product_id]' LIMIT 2";
                $img_result = mysqli_query($con, $img_query);
                $main_img = mysqli_fetch_assoc($img_result);
                $hover_img = mysqli_fetch_assoc($img_result);
                
                $output .= '<div class="product-card">
                    <div class="product-image">
                        <a href="product.php?id='.$product['product_id'].'">
                            <img src="../admin/'.$main_img['image_path'].'" class="main-img">
                            '.($hover_img ? '<img src="../admin/'.$hover_img['image_path'].'" class="hover-img">' : '').'
                        </a>
                        '.($product['offer_price'] < $product['regular_price'] ? 
                        '<span class="discount">-'.round(($product['regular_price'] - $product['offer_price']) / $product['regular_price'] * 100).'%</span>' : '').'
                    </div>
                    <div class="product-info">
                        <h3><a href="product.php?id='.$product['product_id'].'">'.$product['product_title'].'</a></h3>
                        <div class="price">
                            <span class="current">₹'.$product['offer_price'].'</span>
                            '.($product['offer_price'] < $product['regular_price'] ? 
                            '<span class="original">₹'.$product['regular_price'].'</span>' : '').'
                        </div>
                        <button class="add-to-cart" data-id="'.$product['product_id'].'">Add to Cart</button>
                    </div>
                </div>';
            }
            
            $output .= '</div>';
        } else {
            $output = '<p class="no-products">No products found in this category</p>';
        }
        
        return $output;
    }
    
    echo getProducts($category_name);
}
?>