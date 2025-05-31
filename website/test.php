<?php
// Database connection
include '../admin/dbcon.php';

// Function to get products by category
function getProducts($category_name) {
    global $con;
    
    $output = '';
    

$query = "SELECT * FROM product";

    
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0) {
        $output .= '<div class="product-grid">';
        
        while($product = mysqli_fetch_assoc($result)) {


        $product_id = mysqli_real_escape_string($con, $product['product_id']);

            // Get product images (assuming you have a product_images table)
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Tabs</title>
    <style>
        .tab-header {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            border-bottom: 1px solid #eee;
        }
        .tab-btn {
            padding: 10px 25px;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            color: #666;
            position: relative;
        }
        .tab-btn.active {
            color: #333;
        }
        .tab-btn.active:after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #333;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
        }
        .product-card {
            border: 1px solid #eee;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .product-card:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        .product-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }
        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.3s ease;
        }
        .hover-img {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }
        .product-card:hover .main-img {
            opacity: 0;
        }
        .product-card:hover .hover-img {
            opacity: 1;
        }
        .discount {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ff5252;
            color: white;
            padding: 3px 10px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }
        .product-info {
            padding: 15px;
        }
        .product-info h3 {
            margin: 0 0 10px;
            font-size: 16px;
        }
        .product-info h3 a {
            color: #333;
            text-decoration: none;
        }
        .price {
            margin: 10px 0;
        }
        .current {
            font-weight: bold;
            color: #333;
        }
        .original {
            text-decoration: line-through;
            color: #999;
            font-size: 14px;
            margin-left: 8px;
        }
        .add-to-cart {
            width: 100%;
            padding: 10px;
            background: #333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s ease;
        }
        .add-to-cart:hover {
            background: #555;
        }
        .no-products {
            text-align: center;
            padding: 50px;
            color: #666;
        }
    </style>

    <div class="container">
        <div class="tab-header">
            <?php
            // Get all categories
            $categories = mysqli_query($con, "SELECT * FROM catagory");
            $first = true;
            while($cat = mysqli_fetch_assoc($categories)) {
                echo '<button class="tab-btn '.($first ? 'active' : '').'" 
                      data-category="'.$cat['catagory_name'].'">'.$cat['catagory_name'].'</button>';
                $first = false;
            }
            ?>
        </div>
        
        <div class="tab-content">
            <?php
            // Display first category products by default
            mysqli_data_seek($categories, 0);
            $first_cat = mysqli_fetch_assoc($categories);
            echo getProducts($first_cat['catagory_name']);
            ?>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContent = document.querySelector('.tab-content');
        
        tabBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Update active tab
                tabBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                // Get category name
                const categoryName = this.getAttribute('data-category');
                
                // Fetch products for this category
                fetch('get_test.php?category=' + encodeURIComponent(categoryName))
                    .then(response => response.text())
                    .then(data => {
                        tabContent.innerHTML = data;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        tabContent.innerHTML = '<p class="no-products">Error loading products</p>';
                    });
            });
        });
    });
    </script>
</body>
</html>