<?php
    require "./lib/config.php";
    require ROOT_LIB_PATH."/func.php";
    require ROOT_MODEL_PATH."/db.php";
    require ROOT_MODEL_PATH."/product.php";
    require ROOT_MODEL_PATH."/protype.php";
    $mo_pro = new Product();
    $mo_type = new Protype();

?>

<?=l_func_GetHeader("Home")?>
    <!-- Header /- -->
    <!-- Main-Slider -->
    <div class="default-height ph-item">
        <div class="slider-main owl-carousel">
            <div class="bg-image" style="background-image: url(<?=ROOT_IMAGE_URL."/banners/home_slide1.jpg"?>);" >
                <div class="slide-content slide-animation">
                    <h1>Casual Clothing</h1>
                    <h2>lifestyle / clothing / hype</h2>
                </div>
            </div>
            <div class="bg-image" style="background-image: url(<?=ROOT_IMAGE_URL."/banners/home_slide2.jpg"?>);" >
                <div class="slide-content-2 slide-animation">
                    <h2 class="slide-2-h2-a">Hiking</h2>
                    <h2 class="slide-2-h2-b">Collection</h2>
                    <h1>2022</h1>
                </div>
            </div>
            <!-- <div class="bg-image three">
                <div class="slide-content slide-animation">
                    <h1>Tech
                        <span style="color:#333">Deals</span>
                    </h1>
                    <h2 style="color:#333"># shopping</h2>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Main-Slider /- -->
    <!-- Banner-Layer -->
    <div class="banner-layer">
        <div class="container">
            <div class="image-banner">
            <img class="img-fluid" src="<?=ROOT_IMAGE_URL."/banners/home_banner1.jpg"?>" alt="Winter Season Banner">
            </div>
        </div>
    </div>
    <!-- Banner-Layer /- -->
    <!-- Men-Clothing -->
    <?php $type_list_limit = $mo_type->getProtypeLimit(3); ?>
    <?php foreach( $type_list_limit as $type ) { ?>
    <section class="section-maker">
        <div class="container">
            <div class="sec-maker-header text-center">
                <h3 class="sec-maker-h3"><?=$type["type_name"]?></h3>
                <ul class="nav tab-nav-style-1-a justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#men-latest-products-type<?=$type["type_id"]?>">Sản phẩm mới nhất</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#men-featured-products-type<?=$type["type_id"]?>">Sản phẩm nổi bật</a>
                    </li>
                </ul>
            </div>
            <div class="wrapper-content">
                <div class="outer-area-tab">
                    <div class="tab-content">
                        <?php $product_latest_by_typeid = $mo_pro->getProductLatestByTypeId( $type["type_id"] ); ?>
                        <?php if( $product_latest_by_typeid ) { ?>
                        <div class="tab-pane active show fade" id="men-latest-products-type<?=$type["type_id"]?>">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <?php foreach( $product_latest_by_typeid as $product ) { ?>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?=PAGE_URL."/single-product.php?id=".$product["id"]?>">
                                                <img class="img-fluid" src="<?=ROOT_IMAGE_URL."/product/".$product["image"]?>" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <!-- <a class="item-mail" href="javascript:void(0)">Mail</a> -->
                                                <a class="item-addwishlist" href="javascript:void(0)" onClick="addWishlist(<?=$product["id"]?>)" >Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)" onclick="addToCart(<?=$product['id']?>)" >Add to Cart</a>
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
                                                    <a href="<?=PAGE_URL."/single-product.php?id=".$product["id"]?>"><?=$product["name"]?></a>
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
                                                    <?=number_format($product["price"])?>
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
                        <?php } else { ?>
                        <div class="tab-pane active show fade" id="men-latest-products-type<?=$type["type_id"]?>">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                        <?php } ?>

                        <?php $product_feature_by_typeid = $mo_pro->getProductFeaturedByTypeId( $type["type_id"] ); ?>
                        <?php if( $product_feature_by_typeid ) { ?>
                        <div class="tab-pane fade" id="men-featured-products-type<?=$type["type_id"]?>">
                            <div class="slider-fouc">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <?php foreach( $product_feature_by_typeid as $product ) { ?>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="<?=PAGE_URL."/single-product.php?id=".$product["id"]?>">
                                                <img class="img-fluid" src="<?=ROOT_IMAGE_URL."/product/".$product["image"]?>" alt="Product">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <!-- <a class="item-mail" href="javascript:void(0)">Mail</a> -->
                                                <a class="item-addwishlist" href="javascript:void(0)" onClick="addWishlist(<?=$product["id"]?>)" >Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)" onclick="addToCart(<?=$product['id']?>)" >Add to Cart</a>
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
                                                    <a href="<?=PAGE_URL."/single-product.php?id=".$product["id"]?>"><?=$product["name"]?></a>
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
                                                    <?=number_format($product["price"])?>
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
                        <?php } else { ?>
                        <div class="tab-pane fade" id="men-featured-products-type<?=$type["type_id"]?>">
                            <!-- Product Not Found -->
                            <div class="product-not-found">
                                <div class="not-found">
                                    <h2>SORRY!</h2>
                                    <h6>There is not any product in specific catalogue.</h6>
                                </div>
                            </div>
                            <!-- Product Not Found /- -->
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!-- Men-Clothing-Timing-Section -->
    <!-- <section class="section-maker">
        <div class="container">
            <div class="sec-maker-header text-center">
                <span class="sec-maker-span-text">Men's Clothing</span>
                <h3 class="sec-maker-h3 u-s-m-b-22">Hot Deals</h3>
                <span class="sec-maker-span-text">Ends in</span>
                <div class="section-timing-wrapper dynamic">
                    <span class="fictitious-seconds" style="display:none;">18000</span>
                    <div class="section-box-wrapper box-days">
                        <div class="section-box">
                            <span class="section-key">120</span>
                            <span class="section-value">Days</span>
                        </div>
                    </div>
                    <div class="section-box-wrapper box-hrs">
                        <div class="section-box">
                            <span class="section-key">54</span>
                            <span class="section-value">HRS</span>
                        </div>
                    </div>
                    <div class="section-box-wrapper box-mins">
                        <div class="section-box">
                            <span class="section-key">3</span>
                            <span class="section-value">MINS</span>
                        </div>
                    </div>
                    <div class="section-box-wrapper box-secs">
                        <div class="section-box">
                            <span class="section-key">32</span>
                            <span class="section-value">SEC</span>
                        </div>
                    </div>
                </div>
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
                                    <a href="single-product.php">Fern Green Men's Jacket</a>
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
                                        <a href="shop-v2-sub-category.php">Sunglasses</a>
                                    </li>
                                    <li>
                                        <a href="shop-v3-sub-sub-category.php">Round</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="single-product.php">Brown Dark Tan Round Double Bridge Sunglasses</a>
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
                                        <a href="shop-v2-sub-category.php">Sunglasses</a>
                                    </li>
                                    <li>
                                        <a href="shop-v3-sub-sub-category.php">Round</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="single-product.php">Black Round Double Bridge Sunglasses</a>
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
    <!-- Men-Clothing-Timing-Section /- -->
    <!-- Banner-Image & View-more -->
    <div class="banner-image-view-more">
        <div class="container">
            <div class="image-banner u-s-m-y-40">
                <a href="<?=PAGE_URL."/category.php"?>" class="mx-auto banner-hover effect-dark-opacity">
                    <img class="img-fluid" src="<?=ROOT_IMAGE_URL."/banners/home_banner2.jpg"?>" alt="Banner Image">
                </a>
            </div>
            <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                <a class="redirect-link" href="store-directory.php">
                    <span>View more on this category</span>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Continue-Link -->
    <div class="continue-link-wrapper u-s-p-b-80">
        <a class="continue-link" href="store-directory.php" title="View all products on site">
            <i class="ion ion-ios-more"></i>
        </a>
    </div>
    <!-- Continue-Link /- -->
    <!-- Brand-Slider -->
    <!-- <div class="brand-slider u-s-p-b-80">
        <div class="container">
            <div class="brand-slider-content owl-carousel" data-item="5">
                <div class="brand-pic">
                    <a href="#">
                        <img src="public/images/brand-logos/b1.png" alt="Brand Logo 1">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="public/images/brand-logos/b1.png" alt="Brand Logo 2">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="public/images/brand-logos/b1.png" alt="Brand Logo 3">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="public/images/brand-logos/b1.png" alt="Brand Logo 5">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="public/images/brand-logos/b1.png" alt="Brand Logo 6">
                    </a>
                </div>
                <div class="brand-pic">
                    <a href="#">
                        <img src="public/images/brand-logos/b1.png" alt="Brand Logo 7">
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Brand-Slider /- -->
    <!-- Site-Priorities -->
    <section class="app-priority">
        <div class="container">
            <div class="priority-wrapper u-s-p-b-80">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-md-star"></i>
                            </div>
                            <h2>
                                Great Value
                            </h2>
                            <p>We offer competitive prices on our 100 million plus product range</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-md-cash"></i>
                            </div>
                            <h2>
                                Shop with Confidence
                            </h2>
                            <p>Our Protection covers your purchase from click to delivery</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-ios-card"></i>
                            </div>
                            <h2>
                                Safe Payment
                            </h2>
                            <p>Pay with the world’s most popular and secure payment methods</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single-item-wrapper">
                            <div class="single-item-icon">
                                <i class="ion ion-md-contacts"></i>
                            </div>
                            <h2>
                                24/7 Help Center
                            </h2>
                            <p>Round-the-clock assistance for a smooth shopping experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Site-Priorities /- -->
    <?=l_func_getFooter()?>