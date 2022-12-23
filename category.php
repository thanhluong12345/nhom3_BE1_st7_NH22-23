<?php
    require "./lib/config.php";
    require ROOT_LIB_PATH."/func.php";
    require ROOT_MODEL_PATH."/db.php";
    require ROOT_MODEL_PATH."/product.php";
    require ROOT_MODEL_PATH."/protype.php";
    require ROOT_MODEL_PATH."/manufacture.php";
    require ROOT_LIB_PATH."/paginator.php";

    $type_id = $_GET["type_id"]??"";
    $manu_id = $_GET["manu_id"]??"";

    $mo_pro = new Product();
    $mo_type = new Protype();
    $mo_manu = new Manufacture();
    $lib_paginator = new Paginator();
    $params = array();
    $limit = 5;
    $current_page = $_GET["page"]??1;

    $where = array();
    if( preg_match( "/^[1-9][0-9]*$/", $type_id ) ) {
        $where[] = "type_id = $type_id";
        $protype = $mo_type->getProtypeById( $type_id );
        $params[] = "type_id=$type_id";
    }
    if( preg_match( "/^[1-9][0-9]*$/", $manu_id ) ) {
        $where[] = "manu_id = $manu_id";
        $manufacture = $mo_manu->getManufactureById( $manu_id );
        $param[] = "manu_id=$manu_id";
    }

    $param = implode("&", $params);

    $where_str = implode( " and ", $where );

    $limit_paginate = "limit ".(($current_page-1)*$limit).", $limit";
    $product_list = $mo_pro->getProduct( $where_str, $limit_paginate);

    $protype_all = $mo_type->getProtypeLimit();
    $manufacture_all = $mo_manu->getManufactureLimit();
    $cnt_product = $mo_pro->countProduct($where_str);

    $paginate_url = PAGE_URL."/category.php".($param!=""?"?".$param."&":"?");
    $page_max = ceil($cnt_product["cnt"]/$limit);
?>

<?=l_func_GetHeader(($protype["type_name"]??"")." ".($manufacture["manu_name"]??""))?>
    <!-- Header /- -->
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2><?=($protype["type_name"]??"")." ".($manufacture["manu_name"]??"")?></h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="<?=PAGE_URL."/home.php"?>">Trang chủ</a>
                    </li>
                    <li class="is-marked">
                        <a href="<?=PAGE_URL."/category.php"?>"><?=($protype["type_name"]??"")." ".($manufacture["manu_name"]??"")?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Shop-Page -->
    <div class="page-shop u-s-p-t-80">
        <div class="container">
            <!-- Shop-Intro -->
            <div class="shop-intro">
                <h3><?=($protype["type_name"]??"")." ".($manufacture["manu_name"]??"")?></h3>
            </div>
            <!-- Shop-Intro /- -->
            <div class="row">
                <!-- Shop-Left-Side-Bar-Wrapper -->
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <!-- Fetch-Categories-from-Root-Category  -->
                    <div class="fetch-categories">
                        <h3 class="title-name">Danh mục</h3>
                        <!-- Level-2 -->
                        <h3 class="fetch-mark-category">
                            <a href="shop-v2-sub-category.php">Loại sản phẩm
                                <!-- <span class="total-fetch-items">(5)</span> -->
                            </a>
                        </h3>
                        <!-- Level-2 /- -->
                        <!-- Level-3 -->
                        <ul>
                            <?php foreach( $protype_all as $type ) { ?>
                            <li>
                                <a href="<?=PAGE_URL."/category.php?type_id=".$type["type_id"].((!$type_id&&$param)?"&".$param:"")?>"><?=$type["type_name"]?>
                                    <span class="total-fetch-items">(2)</span>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>

                        <h3 class="fetch-mark-category">
                            <a href="shop-v2-sub-category.php">Hãng
                                <!-- <span class="total-fetch-items">(5)</span> -->
                            </a>
                        </h3>
                        <!-- Level-2 /- -->
                        <!-- Level-3 -->
                        <ul>
                            <?php foreach( $manufacture_all as $manu ) { ?>
                            <li>
                                <a href="<?=PAGE_URL."/category.php?manu_id=".$manu["manu_id"].((!$manu_id&&$param)?"&".$param:"")?>"><?=$manu["manu_name"]?>
                                    <!-- <span class="total-fetch-items">(2)</span> -->
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    
                    </div>
                    <!-- Fetch-Categories-from-Root-Category  /- -->
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
                        <!-- <div class="toolbar-sorter">
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
                        </div> -->
                        <!-- //end Toolbar Sorter 1  -->
                        <!-- Toolbar Sorter 2  -->
                        <!-- <div class="toolbar-sorter-2">
                            <div class="select-box-wrapper">
                                <label class="sr-only" for="show-records">Show Records Per Page</label>
                                <select class="select-box" id="show-records">
                                    <option selected="selected" value="">Show: 8</option>
                                    <option value="">Show: 16</option>
                                    <option value="">Show: 28</option>
                                </select>
                            </div>
                        </div> -->
                        <!-- //end Toolbar Sorter 2  -->
                    </div>
                    <!-- Page-Bar /- -->
                    <!-- Row-of-Product-Container -->
                    <?=$lib_paginator->initPaginate($paginate_url, $current_page, $page_max)?>
                    <div class="row product-container list-style">

                        <?php foreach( $product_list as $product ) { ?>
                        <div class="product-item col-lg-4 col-md-6 col-sm-6">
                            <div class="item">
                                <div class="image-container">
                                    <a class="item-img-wrapper-link" href="<?=ROOT_URL."/single-product.php?id=".$product["id"]?>">
                                        <img class="img-fluid" src="<?=ROOT_IMAGE_URL."/product/".$product["image"]?>" alt="Product">
                                    </a>
                                    <div class="item-action-behaviors">
                                        <!-- <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a> -->
                                        <!-- <a class="item-mail" href="javascript:void(0)">Mail</a> -->
                                        <a class="item-addwishlist" href="javascript:void(0)" onClick="addWishlist(<?=$product["id"]?>)" >Add to Wishlist</a>
                                        <a class="item-addCart" href="javascript:void(0)" onclick="addToCart(<?=$product['id']?>)" >Add to Cart</a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="what-product-is">
                                        <?=$mo_pro->getBreadCrumbList($product["id"])?>
                                        <h6 class="item-title">
                                            <a href="<?=ROOT_URL."/single-product.php?id=".$product["id"]?>"><?=$product["name"]?></a>
                                        </h6>
                                        <div class="item-description">
                                            <p><?=$product["description"]?>
                                            </p>
                                        </div>
                                        <!-- <div class="item-stars">
                                            <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                <span style='width:67px'></span>
                                            </div>
                                            <span>(23)</span>
                                        </div> -->
                                    </div>
                                    <div class="price-template">
                                        <div class="item-new-price">
                                            <?=number_format($product["price"])." VND"?>
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
                <?=$lib_paginator->initPaginate($paginate_url, $current_page, $page_max)?>
                <!-- Shop-Pagination /- -->
            </div>
        </div>
    </div>
    <?=l_func_getFooter()?>