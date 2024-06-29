<style>

    .sort-dropdown {
        float: right;
        padding: 1rem;
    }

    /* Style for dropdown */
    .sort-dropdown select {
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .category-list {
        list-style-type: none;
        padding: 0;
        background: white;
        margin: 1rem 0rem;
    }

    .category-item {
        margin-bottom: 10px;
    }

    .category-link {
        text-decoration: none;
        color: #333;
        transition: color 0.3s ease;
    }

    .category-link:hover {
        color: #007bff;
    }

    .category-section {
        margin-top: 20px;
    }
    .container-product-page{
        width: 80%;
        margin: 0px auto;padding: 1rem;
        display: flex;
        justify-content: space-between;
    }
 
          /* Responsive layout adjustments */
  @media (max-width: 768px) {
    .container-product-page {
        display: flex;
        flex-direction: column;
    }
}

    
</style>
<section class="container-product-page">
    <div style="width:25%;" class="product-category-panel">
        <h3>Product Category</h3>
        <ul class="category-list">
            <li class="category-item"><a class="category-link" href="#sanitary">Sanitary Ware</a></li>
            <li class="category-item"><a class="category-link" href="#tiles">Tiles</a></li>
            <li class="category-item"><a class="category-link" href="#bathroom">Bathroom Accessories</a></li>
            <li class="category-item"><a class="category-link" href="#kitchen">Kitchen Fixtures</a></li>
        </ul>

    </div>
    <div style="width:75%;">
        <!-- sorting panel -->
        <div class="shorting-panel">

            <div class="sort-dropdown">
                <label for="sort">Sort by:</label>
                <select id="sort">
                    <option value="price_low_to_high">Price: Low to High</option>
                    <option value="price_high_to_low">Price: High to Low</option>
                    <option value="name_az">Name: A to Z</option>
                    <option value="name_za">Name: Z to A</option>
                    <!-- Add more sorting options as needed -->
                </select>
            </div>


        </div>

        <!-- sorting panel -->
        <!-- product panel -->
        <div style="width:100%;display: flex;">
    
            <div>
                <div style="border-radius: 8px;display: flex;flex-wrap: wrap;justify-content: center; align-items: center;">
                <?php foreach ($params['products'] as $key => $product) : ?>
                        <div class="product-card" style="min-width:280px;width:25%;flex:none;margin-bottom: 1rem;">
                            <div class="hover-animation">
                                <img src="https://www.empolobath.com/wp-content/uploads/2023/12/eb734w.jpg" class="image-back">
                                <img src="<?=ASSETS?>/img/uploads/<?=$product["productImage"]?>" class="image-front">
                            </div>
                            <div class="product-info">
                                <div class="product-name"><?=$product['productName']?> </div>
                                <div class="product-description"><?=$product['productDesc']?></div>
                                <div class="price-cart">
                                    <div class="product-price">$<?=$product['productPrice']?></div>
                                    <div class="cart-container" onclick="window.location.href = '<?=ROOT?>/product/<?=$product['productIdentify']?>'">
                                        <span class="cart-text">READ MORE</span> <i class="uil uil-shopping-cart"></i>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; ?>



                    <!-- Add more product cards as needed -->
                </div>
            </div>

        </div>
        <!-- product panel -->


    </div>
</section>