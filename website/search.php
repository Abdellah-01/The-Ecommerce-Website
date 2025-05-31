<!-- canvasSearch -->
<div class="offcanvas offcanvas-end canvas-search" id="canvasSearch" style="padding-top: 15px;">
    <div class="canvas-wrapper">
        <header class="tf-search-head">
            <div class="tf-search-sticky">
                <form class="tf-mini-search-frm" id="searchForm" action="search_products.php" method="GET">
                    <fieldset class="text">
                        <input type="text" id="searchInput" placeholder="What are You Trying to Find?" class="" name="q" tabindex="0" value=""
                            aria-required="true" style="border: 0;" required>
                        <!-- Close Button -->
                        <span type="reset" class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close" style="
                            position: absolute;
                            top: 50%;
                            right: 10px;
                            transform: translateY(-50%);
                            background: none;
                            border: none;
                            cursor: pointer;
                            color: #333;
                        "></span>
                    </fieldset>
                    <button type="submit"><i class="icon-search"></i></button>
                </form>
            </div>
        </header>
        <div class="canvas-body p-0">
            <div class="tf-search-content">
                <div class="tf-cart-hide-has-results">
                    <div class="tf-col-quicklink" id="quickLinks">
                        <div class="tf-search-content-title fw-5">Quick link</div>
                        <ul class="tf-quicklink-list">
                            
                            <li class="tf-quicklink-item">
                                <a href="collection.php" class="">Shirt</a>
                            </li>
                            <li class="tf-quicklink-item">
                                <a href="collection.php" class="">Pants</a>
                            </li>
                            <li class="tf-quicklink-item">
                                <a href="collection.php" class="">T-Shirts</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tf-col-content">
                        <div class="tf-search-content-title fw-5" id="resultsTitle">Need some inspiration?</div>
                        <div id="searchResultsContainer">
                            <!-- Default inspiration items -->
                            <div class="tf-search-hidden-inner" id="defaultInspiration">
                                <?php
                                include '../admin/dbcon.php';
                                $inspirationQuery = mysqli_query($con, "SELECT * FROM product ORDER BY RAND() LIMIT 4");
                                while($product = mysqli_fetch_array($inspirationQuery)) {
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
                                <?php } ?>
                            </div>
                            <!-- Dynamic search results will appear here -->
                            <div class="tf-search-results" id="dynamicResults"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /canvasSearch -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const quickLinks = document.getElementById('quickLinks');
    const resultsTitle = document.getElementById('resultsTitle');
    const defaultInspiration = document.getElementById('defaultInspiration');
    const dynamicResults = document.getElementById('dynamicResults');
    const searchForm = document.getElementById('searchForm');
    const offcanvas = bootstrap.Offcanvas.getInstance(document.getElementById('canvasSearch'));
    
    // Debounce function to limit how often search executes during typing
    function debounce(func, wait) {
        let timeout;
        return function() {
            const context = this, args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                func.apply(context, args);
            }, wait);
        };
    }
    
    // Handle search input
    searchInput.addEventListener('input', debounce(function(e) {
        const searchTerm = e.target.value.trim();
        
        if (searchTerm.length > 0) {
            // Hide default content when searching
            quickLinks.style.display = 'none';
            resultsTitle.textContent = 'Search Results';
            defaultInspiration.style.display = 'none';
            dynamicResults.style.display = 'block';
            
            // Perform AJAX search
            fetchSearchResults(searchTerm);
        } else {
            // Show default content when search is empty
            quickLinks.style.display = 'block';
            resultsTitle.textContent = 'Need some inspiration?';
            defaultInspiration.style.display = 'block';
            dynamicResults.style.display = 'none';
            dynamicResults.innerHTML = '';
        }
    }, 300));
    
    // Function to fetch search results via AJAX
    function fetchSearchResults(searchTerm) {
        fetch(`search_products.php?q=${encodeURIComponent(searchTerm)}&live=1`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(html => {
                dynamicResults.innerHTML = html;
                
                // Add click handlers to search results
                document.querySelectorAll('#dynamicResults .tf-loop-item a').forEach(link => {
                    link.addEventListener('click', function(e) {
                        // Close the search offcanvas when a result is clicked
                        if (offcanvas) {
                            offcanvas.hide();
                        }
                        // The default link behavior will handle the navigation
                    });
                });
            })
            .catch(error => {
                console.error('Error fetching search results:', error);
                dynamicResults.innerHTML = '<p class="p-3">Error loading results. Please try again.</p>';
            });
    }
    
    // Handle form submission (redirect to full search page)
    searchForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const searchTerm = searchInput.value.trim();
        if (searchTerm.length > 0) {
            // Close the offcanvas
            if (offcanvas) {
                offcanvas.hide();
            }
            // Redirect to full search page
            window.location.href = `search_products.php?q=${encodeURIComponent(searchTerm)}`;
        }
    });
    
    // Focus the search input when offcanvas is shown
    document.getElementById('canvasSearch').addEventListener('shown.bs.offcanvas', function() {
        searchInput.focus();
    });
    
    // Reset search when offcanvas is hidden
    document.getElementById('canvasSearch').addEventListener('hidden.bs.offcanvas', function() {
        searchInput.value = '';
        quickLinks.style.display = 'block';
        resultsTitle.textContent = 'Need some inspiration?';
        defaultInspiration.style.display = 'block';
        dynamicResults.style.display = 'none';
        dynamicResults.innerHTML = '';
    });
});
</script>