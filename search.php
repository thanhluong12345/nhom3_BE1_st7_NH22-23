<?php 
    require "./lib/config.php";
    require ROOT_LIB_PATH."/func.php";
    require ROOT_MODEL_PATH."/db.php";
    require ROOT_MODEL_PATH."/product.php";
    require ROOT_LIB_PATH."/paginator.php";

    $keyword = $_GET["keyword"]??"";
    $current_page = $_GET["page"]??1;
    $limit = 5;
    $limit_paginate = "limit ".(($current_page-1)*$limit).", $limit";

    $mo_pro = new Product();
    $lib_paginator = new Paginator();

    $where_str = "name like '%".$keyword."%' ";
    $product_list = $mo_pro->getProduct( $where_str, $limit_paginate );
    $cnt_product = $mo_pro->countProduct($where_str);

    $paginate_url = PAGE_URL."/search.php?keyword=".$keyword."&";
    $page_max = ceil($cnt_product["cnt"]/$limit);
?>
<?=l_func_GetHeader("Home")?>
    <!-- Header /- -->
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Trang tìm kiếm</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="<?=PAGE_URL."/home.php"?>">Trang chủ</a>
                    </li>
                    <li class="is-marked">
                        <a href="<?=PAGE_URL."/search?keyword=".$keyword?>">Trang tìm kiếm</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Shop-Page -->
    <div class="page-shop u-s-p-t-80">
        <div class="container">
            <!-- Search-Results -->
            <div class="search-results-wrapper u-s-p-b-80">
                <h4> <!---WE FOUND 18 RESULTS FOR -->
                    Tìm thấy <?=$cnt_product["cnt"]?> kết quả cho từ khóa
                    <i>“<?=$keyword?>”</i>
                </h4>
                <h4>Related searches:
                    <a href="shop-v1-root-category.php">men's clothing</a> ,
                    <a href="shop-v1-root-category.php">mobiles & tablets</a> ,
                    <a href="shop-v1-root-category.php">books & audible</a>
                </h4>
            </div>
            <!-- Search-Results /- -->
            <div class="row">
                <!-- Shop-Left-Side-Bar-Wrapper -->
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <!-- Fetch-Categories-from-Root-Category  -->
                    <div class="fetch-categories">
                        <h3 class="title-name">Browse Categories</h3>
                        <ul>
                            <li>
                                <a href="shop-v1-root-category.php">Men's Clothing</a>
                                <button class="button-icon ion ion-md-add js-open"></button>
                                <ul style="display: block">
                                    <li>
                                        <a href="shop-v2-sub-category.php">Tops</a>
                                        <button class="button-icon ion ion-md-add js-open"></button>
                                        <ul style="display: block">
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">T-Shirts</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Hoodies</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Suits</a>
                                            </li>
                                            <li>
                                                <a href="shop-v4-filter-as-category.php">Black Bean T-Shirt</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-v2-sub-category.php">Outwear</a>
                                        <button class="button-icon ion ion-md-add"></button>
                                        <ul>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Jackets</a>
                                            </li>
                                            <li>
                                                <a href="shop-v2-sub-category.php">Trench</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Parkas</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Sweaters</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-v2-sub-category.php">Accessories</a>
                                        <button class="button-icon ion ion-md-add"></button>
                                        <ul>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Watches</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Ties</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Scarves</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Belts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-v2-sub-category.php">Bottoms</a>
                                        <button class="button-icon ion ion-md-add"></button>
                                        <ul>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Casual Pants</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Shoes</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Jeans</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Shorts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-v2-sub-category.php">Underwear</a>
                                        <button class="button-icon ion ion-md-add"></button>
                                        <ul>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Boxers</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Briefs</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Robes</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Socks</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-v2-sub-category.php">Sunglasses</a>
                                        <button class="button-icon ion ion-md-add"></button>
                                        <ul>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Pilot</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Wayfarer</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Square</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Round</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a>Women's Clothing</a>
                                <button class="button-icon ion ion-md-add"></button>
                                <ul>
                                    <li>
                                        <a href="shop-v2-sub-category.php">Tops</a>
                                        <button class="button-icon ion ion-md-add"></button>
                                        <ul>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Dresses</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Blouses & Shirts</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">T-shirts</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Sweater</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-v2-sub-category.php">Intimates</a>
                                        <button class="button-icon ion ion-md-add"></button>
                                        <ul>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Bras</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Brief Sets</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Bustiers & Corsets</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Panties</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-v2-sub-category.php">Wedding & Events</a>
                                        <button class="button-icon ion ion-md-add"></button>
                                        <ul>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Wedding Dresses</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Evening Dresses</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Prom Dresses</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Flower Dresses</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-v2-sub-category.php">Bottoms</a>
                                        <button class="button-icon ion ion-md-add"></button>
                                        <ul>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Skirts</a>
                                            </li>
                                            <li>
                                                <a href="shop-v2-sub-category.php">Shoes</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Leggings</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Jeans</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-v2-sub-category.php">Outwear & Jackets</a>
                                        <button class="button-icon ion ion-md-add"></button>
                                        <ul>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Blazers</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Basics Jackets</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Trench</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Leather & Suede</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-v2-sub-category.php">Accessories</a>
                                        <button class="button-icon ion ion-md-add"></button>
                                        <ul>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Sunglasses</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Headwear</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Baseball Caps</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Belts</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Toys Hobbies & Robots</a>
                                <button class="button-icon ion ion-md-add"></button>
                                <ul>
                                    <li>
                                        <a href="shop-v2-sub-category.php">RC Toys & Hobbies</a>
                                        <button class="button-icon ion ion-md-add"></button>
                                        <ul>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">RC Helicopter</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">RC Lego Robots</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">RC Drone</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">RC Car</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">RC Boat</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">RC Robot</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Multi Rotor Parts</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">FPV System</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Radios & Receiver</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Battery & Charger</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop-v2-sub-category.php">Solar Energy</a>
                                        <button class="button-icon ion ion-md-add"></button>
                                        <ul>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Solar Powered Toy</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Solar Powered System</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Mobiles & Tablets</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Consumer Electronics</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Books & Audible</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Beauty & Health</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Furniture Home & Office</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Fetch-Categories-from-Root-Category  /- -->
                    <!-- Filters -->
                    <!-- Filter-Price -->
                    <div class="facet-filter-by-price">
                        <h3 class="title-name">Price</h3>
                        <form class="facet-form" action="#" method="post">
                            <!-- Final-Result -->
                            <div class="amount-result clearfix">
                                <div class="price-from">$0</div>
                                <div class="price-to">$3000</div>
                            </div>
                            <!-- Final-Result /- -->
                            <!-- Range-Slider  -->
                            <div class="price-filter"></div>
                            <!-- Range-Slider /- -->
                            <!-- Range-Manipulator -->
                            <div class="price-slider-range" data-min="0" data-max="5000" data-default-low="0" data-default-high="3000" data-currency="$"></div>
                            <!-- Range-Manipulator /- -->
                            <button type="submit" class="button button-primary">Filter</button>
                        </form>
                    </div>
                    <!-- Filter-Price /- -->
                    <!-- Filter-Free-Shipping -->
                    <div class="facet-filter-by-shipping">
                        <h3 class="title-name">Shipping</h3>
                        <form class="facet-form" action="#" method="post">
                            <input type="checkbox" class="check-box" id="cb-free-ship">
                            <label class="label-text" for="cb-free-ship">Free Shipping</label>
                        </form>
                    </div>
                    <!-- Filter-Free-Shipping /- -->
                    <!-- Filter-Rating -->
                    <div class="facet-filter-by-rating">
                        <h3 class="title-name">Rating</h3>
                        <div class="facet-form">
                            <!-- 5 Stars -->
                            <div class="facet-link">
                                <div class="item-stars">
                                    <div class='star'>
                                        <span style='width:76px'></span>
                                    </div>
                                </div>
                                <span class="total-fetch-items">(0)</span>
                            </div>
                            <!-- 5 Stars /- -->
                            <!-- 4 & Up Stars -->
                            <div class="facet-link">
                                <div class="item-stars">
                                    <div class='star'>
                                        <span style='width:60px'></span>
                                    </div>
                                </div>
                                <span class="total-fetch-items">& Up (8)</span>
                            </div>
                            <!-- 4 & Up Stars /- -->
                            <!-- 3 & Up Stars -->
                            <div class="facet-link">
                                <div class="item-stars">
                                    <div class='star'>
                                        <span style='width:45px'></span>
                                    </div>
                                </div>
                                <span class="total-fetch-items">& Up (0)</span>
                            </div>
                            <!-- 3 & Up Stars /- -->
                            <!-- 2 & Up Stars -->
                            <div class="facet-link">
                                <div class="item-stars">
                                    <div class='star'>
                                        <span style='width:30px'></span>
                                    </div>
                                </div>
                                <span class="total-fetch-items">& Up (0)</span>
                            </div>
                            <!-- 2 & Up Stars /- -->
                            <!-- 1 & Up Stars -->
                            <div class="facet-link">
                                <div class="item-stars">
                                    <div class='star'>
                                        <span style='width:15px'></span>
                                    </div>
                                </div>
                                <span class="total-fetch-items">& Up (0)</span>
                            </div>
                            <!-- 1 & Up Stars /- -->
                        </div>
                    </div>
                    <!-- Filter-Rating -->
                    <!-- Filters /- -->
                </div>
                <!-- Shop-Left-Side-Bar-Wrapper /- -->
                <!-- Shop-Right-Wrapper -->
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <!-- Page-Bar -->
                    <div class="page-bar clearfix">
                        <div class="shop-settings">
                            <a id="list-anchor" class="active">
                                <i class="fas fa-th-list"></i>
                            </a>
                            <a id="grid-anchor">
                                <i class="fas fa-th"></i>
                            </a>
                        </div>
                        <!-- Toolbar Sorter 1  -->
                        <div class="toolbar-sorter">
                            <div class="select-box-wrapper">
                                <label class="sr-only" for="sort-by">Sort By</label>
                                <select class="select-box" id="sort-by">
                                    <option selected="selected" value="">Sort By: Best Selling</option>
                                    <option value="">Sort By: Latest</option>
                                    <option value="">Sort By: Lowest Price</option>
                                    <option value="">Sort By: Highest Price</option>
                                    <option value="">Sort By: Best Rating</option>
                                </select>
                            </div>
                        </div>
                        <!-- //end Toolbar Sorter 1  -->
                        <!-- Toolbar Sorter 2  -->
                        <div class="toolbar-sorter-2">
                            <div class="select-box-wrapper">
                                <label class="sr-only" for="show-records">Show Records Per Page</label>
                                <select class="select-box" id="show-records">
                                    <option selected="selected" value="">Show: 8</option>
                                    <option value="">Show: 16</option>
                                    <option value="">Show: 28</option>
                                </select>
                            </div>
                        </div>
                        <!-- //end Toolbar Sorter 2  -->
                    </div>
                    <!-- Page-Bar /- -->
                    <!-- Row-of-Product-Container -->
                    <div class="row product-container list-style">
                        <?php foreach( $product_list as $product ) { ?>
                        <div class="product-item col-lg-4 col-md-6 col-sm-6">
                            <div class="item">
                                <div class="image-container">
                                    <a class="item-img-wrapper-link" href="single-product.php">
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
                                        <div class="item-description">
                                            <p>
                                                <?=$product["description"]?>
                                            </p>
                                        </div>
                                        <div class="item-stars">
                                            <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                <span style='width:67px'></span>
                                            </div>
                                            <span>(23)</span>
                                        </div>
                                    </div>
                                    <div class="price-template">
                                        <div class="item-new-price">
                                            <?=number_format($product["price"])?> VND
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
                        </div>
                        <?php } ?>
                    </div>
                    <!-- Row-of-Product-Container /- -->
                </div>
                <!-- Shop-Right-Wrapper /- -->
                <!-- Shop-Pagination -->
                <?=$lib_paginator->initPaginate($paginate_url, $current_page, $page_max)?>
                <!-- Shop-Pagination /- -->
            </div>
        </div>
    </div>
    
<?=l_func_getFooter()?>