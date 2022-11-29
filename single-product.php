<?php
    require "./lib/config.php";
    require_once ROOT_LIB_PATH."/func.php";
    require ROOT_MODEL_PATH."/db.php";
    require ROOT_MODEL_PATH."/product.php";

    $id = $_GET["id"];
    if( !preg_match( "/^[1-9][0-9]*$/", $id ) ) { 
        header("Location: ".PAGE_URL."/home.php");
        exit;
    }

    $mo_product = new Product();
    $product_detail = $mo_product->getProductById( $id );
    if( empty($product_detail) ) {
        header("Location: ".PAGE_URL."/home.php");
        exit;
    }

    $similar_product = $mo_product->getProductLatestByTypeId( $product_detail["type_id"], 4 );
?>

<?=l_func_GetHeader("Home")?>
    <!-- Header /- -->
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2><?=$product_detail["name"]?></h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="<?=PAGE_URL."/home.php"?>">Trang chủ</a>
                    </li>
                    <li class="is-marked">
                        <a href="<?=PAGE_URL."/single-product.php?id".$product_detail["id"]?>"><?=$product_detail["name"]?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Single-Product-Full-Width-Page -->
    <div class="page-detail u-s-p-t-80">
        <div class="container">
            <!-- Product-Detail -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- Product-zoom-area -->
                    <div class="zoom-area">
                        <img id="zoom-pro" class="img-fluid" src="<?=ROOT_IMAGE_URL."/product/".$product_detail["image"]?>" data-zoom-image="<?=ROOT_IMAGE_URL."/product/".$product_detail["image"]?>" alt="Zoom Image">
                        <div id="gallery" class="u-s-m-t-10">
                            <a class="active" data-image="<?=ROOT_IMAGE_URL."/product/".$product_detail["image"]?>" data-zoom-image="<?=ROOT_IMAGE_URL."/product/".$product_detail["image"]?>">
                                <img src="<?=ROOT_IMAGE_URL."/product/".$product_detail["image"]?>" alt="Product">
                            </a>
                            <a data-image="public/images/product/product@4x.jpg" data-zoom-image="public/images/product/product@4x.jpg">
                                <img src="public/images/product/product@2x.jpg" alt="Product">
                            </a>
                            <a data-image="public/images/product/product@4x.jpg" data-zoom-image="public/images/product/product@4x.jpg">
                                <img src="public/images/product/product@2x.jpg" alt="Product">
                            </a>
                            <a data-image="public/images/product/product@4x.jpg" data-zoom-image="public/images/product/product@4x.jpg">
                                <img src="public/images/product/product@2x.jpg" alt="Product">
                            </a>
                            <a data-image="public/images/product/product@4x.jpg" data-zoom-image="public/images/product/product@4x.jpg">
                                <img src="public/images/product/product@2x.jpg" alt="Product">
                            </a>
                            <a data-image="public/images/product/product@4x.jpg" data-zoom-image="public/images/product/product@4x.jpg">
                                <img src="public/images/product/product@2x.jpg" alt="Product">
                            </a>
                        </div>
                    </div>
                    <!-- Product-zoom-area /- -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- Product-details -->
                    <div class="all-information-wrapper">
                        <div class="section-1-title-breadcrumb-rating">
                            <div class="product-title">
                                <h1>
                                    <a href="single-product.php"><?=$product_detail["name"]?></a>
                                </h1>
                            </div>
                            <ul class="bread-crumb">
                                <li class="has-separator">
                                    <a href="home.php">Home</a>
                                </li>
                                <li class="has-separator">
                                    <a href="shop-v1-root-category.php">Men's Clothing</a>
                                </li>
                                <li class="has-separator">
                                    <a href="shop-v2-sub-category.php">Tops</a>
                                </li>
                                <li class="is-marked">
                                    <a href="shop-v3-sub-sub-category.php">Hoodies</a>
                                </li>
                            </ul>
                            <div class="product-rating">
                                <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                    <span style='width:67px'></span>
                                </div>
                                <span>(23)</span>
                            </div>
                        </div>
                        <div class="section-2-short-description u-s-p-y-14">
                            <h6 class="information-heading u-s-m-b-8">Description:</h6>
                            <p>
                                <?=$product_detail["description"]?>
                            </p>
                        </div>
                        <div class="section-3-price-original-discount u-s-p-y-14">
                            <div class="price">
                                <h4><?=number_format($product_detail["price"])?> VND</h4>
                            </div>
                            <!-- <div class="original-price">
                                <span>Original Price:</span>
                                <span>$60.00</span>
                            </div>
                            <div class="discount-price">
                                <span>Discount:</span>
                                <span>8%</span>
                            </div>
                            <div class="total-save">
                                <span>Save:</span>
                                <span>$5</span>
                            </div> -->
                        </div>
                        <!-- <div class="section-4-sku-information u-s-p-y-14">
                            <h6 class="information-heading u-s-m-b-8">Sku Information:</h6>
                            <div class="availability">
                                <span>Availability:</span>
                                <span>In Stock</span>
                            </div>
                            <div class="left">
                                <span>Only:</span>
                                <span>50 left</span>
                            </div>
                        </div> -->
                        <!-- <div class="section-5-product-variants u-s-p-y-14">
                            <h6 class="information-heading u-s-m-b-8">Product Variants:</h6>
                            <div class="color u-s-m-b-11">
                                <span>Available Color:</span>
                                <div class="color-variant select-box-wrapper">
                                    <select class="select-box product-color">
                                        <option value="1">Heather Grey</option>
                                        <option value="3">Black</option>
                                        <option value="5">White</option>
                                    </select>
                                </div>
                            </div>
                            <div class="sizes u-s-m-b-11">
                                <span>Available Size:</span>
                                <div class="size-variant select-box-wrapper">
                                    <select class="select-box product-size">
                                        <option value="">Male 2XL</option>
                                        <option value="">Male 3XL</option>
                                        <option value="">Kids 4</option>
                                        <option value="">Kids 6</option>
                                        <option value="">Kids 8</option>
                                        <option value="">Kids 10</option>
                                        <option value="">Kids 12</option>
                                        <option value="">Female Small</option>
                                        <option value="">Male Small</option>
                                        <option value="">Female Medium</option>
                                        <option value="">Male Medium</option>
                                        <option value="">Female Large</option>
                                        <option value="">Male Large</option>
                                        <option value="">Female XL</option>
                                        <option value="">Male XL</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->
                        <div class="section-6-social-media-quantity-actions u-s-p-y-14">
                                <div class="quick-social-media-wrapper u-s-m-b-22">
                                    <span>Share:</span>
                                    <ul class="social-media-list">
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-rss"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="quantity-wrapper u-s-m-b-22">
                                    <span>Quantity:</span>
                                    <div class="quantity">
                                        <input type="text" name="quantity" class="quantity-text-field" value="1">
                                        <a class="plus-a" data-max="1000">&#43;</a>
                                        <a class="minus-a" data-min="1">&#45;</a>
                                    </div>
                                </div>
                                <div>
                                    <input type="hidden" name="product_id" value="1"/>
                                    <input class="button button-outline-secondary" onclick="addToCart(<?=$product_detail['id']?>,'single-product.php')" name="add" type="submit" value="Thêm vào giỏ hàng" />
                                    <button class="button button-outline-secondary far fa-heart u-s-m-l-6"></button>
                                    <button class="button button-outline-secondary far fa-envelope u-s-m-l-6"></button>
                                </div>
                        </div>
                    </div>
                    <!-- Product-details /- -->
                </div>
            </div>
            <!-- Product-Detail /- -->
            <!-- Detail-Tabs -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="detail-tabs-wrapper u-s-p-t-80">
                        <div class="detail-nav-wrapper u-s-m-b-30">
                            <ul class="nav single-product-nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#description">Mô tả</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#specification">Thông số kỹ thuật</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#review">Reviews (15)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <!-- Description-Tab -->
                            <div class="tab-pane fade active show" id="description">
                                <div class="description-whole-container">
                                    <p class="desc-p u-s-m-b-26">
                                        <?=$product_detail["description"]?>
                                    </p>
                                </div>
                            </div>
                            <!-- Description-Tab /- -->
                            <!-- Specifications-Tab -->
                            <div class="tab-pane fade" id="specification">
                                <div class="specification-whole-container">
                                    <div class="spec-ul u-s-m-b-50">
                                        <h4 class="spec-heading">Key Features</h4>
                                        <ul>
                                            <li>Heather Grey</li>
                                            <li>Black</li>
                                            <li>White</li>
                                        </ul>
                                    </div>
                                    <div class="u-s-m-b-50">
                                        <h4 class="spec-heading">What's in the Box?</h4>
                                        <h3 class="spec-answer">1 x hoodie</h3>
                                    </div>
                                    <div class="spec-table u-s-m-b-50">
                                        <h4 class="spec-heading">General Information</h4>
                                        <table>
                                            <tr>
                                                <td>Sku</td>
                                                <td>AY536FA08JT86NAFAMZ</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="spec-table u-s-m-b-50">
                                        <h4 class="spec-heading">Product Information</h4>
                                        <table>
                                            <tr>
                                                <td>Main Material</td>
                                                <td>Cotton</td>
                                            </tr>
                                            <tr>
                                                <td>Color</td>
                                                <td>Heather Grey, Black, White</td>
                                            </tr>
                                            <tr>
                                                <td>Sleeves</td>
                                                <td>Long Sleeve</td>
                                            </tr>
                                            <tr>
                                                <td>Top Fit</td>
                                                <td>Regular</td>
                                            </tr>
                                            <tr>
                                                <td>Print</td>
                                                <td>Not Printed</td>
                                            </tr>
                                            <tr>
                                                <td>Neck</td>
                                                <td>Round Neck</td>
                                            </tr>
                                            <tr>
                                                <td>Pieces Count</td>
                                                <td>1 piece</td>
                                            </tr>
                                            <tr>
                                                <td>Occasion</td>
                                                <td>Casual</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping Weight (kg)</td>
                                                <td>0.5</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Specifications-Tab /- -->
                            <!-- Reviews-Tab -->
                            <div class="tab-pane fade" id="review">
                                <div class="review-whole-container">
                                    <div class="row r-1 u-s-m-b-26 u-s-p-b-22">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="total-score-wrapper">
                                                <h6 class="review-h6">Average Rating</h6>
                                                <div class="circle-wrapper">
                                                    <h1>4.5</h1>
                                                </div>
                                                <h6 class="review-h6">Based on 23 Reviews</h6>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="total-star-meter">
                                                <div class="star-wrapper">
                                                    <span>5 Stars</span>
                                                    <div class="star">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                                <div class="star-wrapper">
                                                    <span>4 Stars</span>
                                                    <div class="star">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
                                                </div>
                                                <div class="star-wrapper">
                                                    <span>3 Stars</span>
                                                    <div class="star">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                                <div class="star-wrapper">
                                                    <span>2 Stars</span>
                                                    <div class="star">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                                <div class="star-wrapper">
                                                    <span>1 Star</span>
                                                    <div class="star">
                                                        <span style='width:0'></span>
                                                    </div>
                                                    <span>(0)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row r-2 u-s-m-b-26 u-s-p-b-22">
                                        <div class="col-lg-12">
                                            <div class="your-rating-wrapper">
                                                <h6 class="review-h6">Your Review is matter.</h6>
                                                <h6 class="review-h6">Have you used this product before?</h6>
                                                <div class="star-wrapper u-s-m-b-8">
                                                    <div class="star">
                                                        <span id="your-stars" style='width:0'></span>
                                                    </div>
                                                    <label for="your-rating-value"></label>
                                                    <input id="your-rating-value" type="text" class="text-field" placeholder="0.0">
                                                    <span id="star-comment"></span>
                                                </div>
                                                <form>
                                                    <label for="your-name">Name
                                                        <span class="astk"> *</span>
                                                    </label>
                                                    <input id="your-name" type="text" class="text-field" placeholder="Your Name">
                                                    <label for="your-email">Email
                                                        <span class="astk"> *</span>
                                                    </label>
                                                    <input id="your-email" type="text" class="text-field" placeholder="Your Email">
                                                    <label for="review-title">Review Title
                                                        <span class="astk"> *</span>
                                                    </label>
                                                    <input id="review-title" type="text" class="text-field" placeholder="Review Title">
                                                    <label for="review-text-area">Review
                                                        <span class="astk"> *</span>
                                                    </label>
                                                    <textarea class="text-area u-s-m-b-8" id="review-text-area" placeholder="Review"></textarea>
                                                    <button class="button button-outline-secondary">Submit Review</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Get-Reviews -->
                                    <div class="get-reviews u-s-p-b-22">
                                        <!-- Review-Options -->
                                        <div class="review-options u-s-m-b-16">
                                            <div class="review-option-heading">
                                                <h6>Reviews
                                                    <span> (15) </span>
                                                </h6>
                                            </div>
                                            <div class="review-option-box">
                                                <div class="select-box-wrapper">
                                                    <label class="sr-only" for="review-sort">Review Sorter</label>
                                                    <select class="select-box" id="review-sort">
                                                        <option value="">Sort by: Best Rating</option>
                                                        <option value="">Sort by: Worst Rating</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Review-Options /- -->
                                        <!-- All-Reviews -->
                                        <div class="reviewers">
                                            <div class="review-data">
                                                <div class="reviewer-name-and-date">
                                                    <h6 class="reviewer-name">John</h6>
                                                    <h6 class="review-posted-date">10 May 2018</h6>
                                                </div>
                                                <div class="reviewer-stars-title-body">
                                                    <div class="reviewer-stars">
                                                        <div class="star">
                                                            <span style='width:67px'></span>
                                                        </div>
                                                        <span class="review-title">Good!</span>
                                                    </div>
                                                    <p class="review-body">
                                                        Good Quality...!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="review-data">
                                                <div class="reviewer-name-and-date">
                                                    <h6 class="reviewer-name">Doe</h6>
                                                    <h6 class="review-posted-date">10 June 2018</h6>
                                                </div>
                                                <div class="reviewer-stars-title-body">
                                                    <div class="reviewer-stars">
                                                        <div class="star">
                                                            <span style='width:67px'></span>
                                                        </div>
                                                        <span class="review-title">Well done!</span>
                                                    </div>
                                                    <p class="review-body">
                                                        Cotton is good.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="review-data">
                                                <div class="reviewer-name-and-date">
                                                    <h6 class="reviewer-name">Tim</h6>
                                                    <h6 class="review-posted-date">10 July 2018</h6>
                                                </div>
                                                <div class="reviewer-stars-title-body">
                                                    <div class="reviewer-stars">
                                                        <div class="star">
                                                            <span style='width:67px'></span>
                                                        </div>
                                                        <span class="review-title">Well done!</span>
                                                    </div>
                                                    <p class="review-body">
                                                        Excellent condition
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="review-data">
                                                <div class="reviewer-name-and-date">
                                                    <h6 class="reviewer-name">Johnny</h6>
                                                    <h6 class="review-posted-date">10 March 2018</h6>
                                                </div>
                                                <div class="reviewer-stars-title-body">
                                                    <div class="reviewer-stars">
                                                        <div class="star">
                                                            <span style='width:67px'></span>
                                                        </div>
                                                        <span class="review-title">Bright!</span>
                                                    </div>
                                                    <p class="review-body">
                                                        Cotton
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="review-data">
                                                <div class="reviewer-name-and-date">
                                                    <h6 class="reviewer-name">Alexia C. Marshall</h6>
                                                    <h6 class="review-posted-date">12 May 2018</h6>
                                                </div>
                                                <div class="reviewer-stars-title-body">
                                                    <div class="reviewer-stars">
                                                        <div class="star">
                                                            <span style='width:67px'></span>
                                                        </div>
                                                        <span class="review-title">Well done!</span>
                                                    </div>
                                                    <p class="review-body">
                                                        Good polyester Cotton
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- All-Reviews /- -->
                                        <!-- Pagination-Review -->
                                        <div class="pagination-review-area">
                                            <div class="pagination-review-number">
                                                <ul>
                                                    <li style="display: none">
                                                        <a href="single-product.php" title="Previous">
                                                            <i class="fas fa-angle-left"></i>
                                                        </a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="single-product.php">1</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product.php">2</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product.php">3</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product.php">...</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product.php">10</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product.php" title="Next">
                                                            <i class="fas fa-angle-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Pagination-Review /- -->
                                    </div>
                                    <!-- Get-Reviews /- -->
                                </div>
                            </div>
                            <!-- Reviews-Tab /- -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Detail-Tabs /- -->
            <!-- Different-Product-Section -->
            <div class="detail-different-product-section u-s-p-t-80">
                <!-- Similar-Products -->
                <section class="section-maker">
                    <div class="container">
                        <div class="sec-maker-header text-center">
                            <h3 class="sec-maker-h3">Sản Phẩm Liên Quan</h3>
                        </div>
                        <div class="slider-fouc">
                            <div class="products-slider owl-carousel" data-item="4">
                                <?php foreach( $similar_product as $product ) { ?>
                                <div class="item">
                                    <div class="image-container">
                                        <a class="item-img-wrapper-link" href="<?=PAGE_URL."/single-product.php?id=".$product["id"]?>">
                                            <img class="img-fluid" src="<?=ROOT_IMAGE_URL."/product/".$product["image"]?>" alt="Product">
                                        </a>
                                        <div class="item-action-behaviors">
                                            <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                            <a class="item-mail" href="javascript:void(0)">Mail</a>
                                            <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                            <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <div class="what-product-is">
                                            <ul class="bread-crumb">
                                                <li class="has-separator">
                                                    <a href="shop-v1-root-category.php">Men's</a>
                                                </li>
                                                <li class="has-separator">
                                                    <a href="shop-v2-sub-category.php">Tops</a>
                                                </li>
                                                <li>
                                                    <a href="shop-v3-sub-sub-category.php">Hoodies</a>
                                                </li>
                                            </ul>
                                            <h6 class="item-title">
                                                <a href="single-product.php"><?=$product["name"]?></a>
                                            </h6>
                                            <div class="item-stars">
                                                <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                    <span style='width:0'></span>
                                                </div>
                                                <span>(0)</span>
                                            </div>
                                        </div>
                                        <div class="price-template">
                                            <div class="item-new-price">
                                                <?=number_format($product_detail["price"])?> VND
                                            </div>
                                            <!-- <div class="item-old-price">
                                                $60.00
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- <div class="tag new">
                                        <span>NEW</span>
                                    </div> -->
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Similar-Products /- -->
                <!-- Recently-View-Products  -->
                <!-- <section class="section-maker">
                    <div class="container">
                        <div class="sec-maker-header text-center">
                            <h3 class="sec-maker-h3">Recently View</h3>
                        </div>
                        <div class="slider-fouc">
                            <div class="products-slider owl-carousel" data-item="4">
                                <div class="item">
                                    <div class="image-container">
                                        <a class="item-img-wrapper-link" href="single-product.php">
                                            <img class="img-fluid" src="public/images/product/product@3x.jpg" alt="Product">
                                        </a>
                                        <div class="item-action-behaviors">
                                            <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                            <a class="item-mail" href="javascript:void(0)">Mail</a>
                                            <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                            <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <div class="what-product-is">
                                            <ul class="bread-crumb">
                                                <li class="has-separator">
                                                    <a href="shop-v1-root-category.php">Men's</a>
                                                </li>
                                                <li class="has-separator">
                                                    <a href="shop-v2-sub-category.php">Outwear</a>
                                                </li>
                                                <li>
                                                    <a href="shop-v3-sub-sub-category.php">Jackets</a>
                                                </li>
                                            </ul>
                                            <h6 class="item-title">
                                                <a href="single-product.php">Maire Battlefield Jeep Men's Jacket</a>
                                            </h6>
                                            <div class="item-stars">
                                                <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                    <span style='width:0'></span>
                                                </div>
                                                <span>(0)</span>
                                            </div>
                                        </div>
                                        <div class="price-template">
                                            <div class="item-new-price">
                                                $55.00
                                            </div>
                                            <div class="item-old-price">
                                                $60.00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tag hot">
                                        <span>HOT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
                <!-- Recently-View-Products /- -->
            </div>
            <!-- Different-Product-Section /- -->
        </div>
    </div>

    <?php 
        $script = 
        "<script type=\"text/javascript\" src=\"public/js/custom/cart.js\"></script>";
    ?>
    <?=l_func_getFooter( $script )?>


