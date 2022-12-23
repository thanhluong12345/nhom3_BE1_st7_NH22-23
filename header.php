<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/nhom3_BE1_st7_NH22-23/lib/config.php";
    require_once ROOT_LIB_PATH."/func.php";
    require_once ROOT_LIB_PATH."/cart.php";
    require_once ROOT_MODEL_PATH."/db.php";
    require_once ROOT_MODEL_PATH."/user.php";
    require_once ROOT_MODEL_PATH."/user_member.php";
    require_once ROOT_MODEL_PATH."/protype.php";
    require_once ROOT_MODEL_PATH."/manufacture.php";
    $mo_cart = new Cart();
    $mo_member = new UserMember();
    $mo_protype = new Protype();
    $mo_manufac = new Manufacture();

    $cart_list = $mo_cart->getProductListInCart();
    $protype_list = $mo_protype->getProtypeLimit();

    $user_id = $mo_member->getUserId();
    $your_profile = $mo_member->getProfile( $user_id );
?>

<!DOCTYPE html>
    <html class="no-js" lang="en-US">
    
    <head>
        <meta charset="UTF-8">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> <?=$title?> </title>
        <!-- Standard Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Base Google Font for Web-app -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <!-- Google Fonts for Banners only -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <!-- Font Awesome 5 -->
        <link rel="stylesheet" href="public/css/fontawesome.min.css">
        <!-- Ion-Icons 4 -->
        <link rel="stylesheet" href="public/css/ionicons.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="public/css/animate.min.css">
        <!-- Owl-Carousel -->
        <link rel="stylesheet" href="public/css/owl.carousel.min.css">
        <!-- Jquery-Ui-Range-Slider -->
        <link rel="stylesheet" href="public/css/jquery-ui-range-slider.min.css">
        <!-- Utility -->
        <link rel="stylesheet" href="public/css/utility.css">
        <!-- Main -->
        <link rel="stylesheet" href="public/css/bundle.css">
        <link rel="stylesheet" href="public/css/custom.css">
    </head>
    
    <body>
    
    <!-- app -->
    <div id="app">
        <!-- Header -->
        <header>
            <!-- Top-Header -->
            <div class="full-layer-outer-header">
                <div class="container clearfix">
                    <nav>
                        <ul class="primary-nav g-nav">
                            <li>
                                <a href="tel:+111444989">
                                    <!-- <i class="fas fa-phone u-c-brand u-s-m-r-9"></i>
                                    Telephone:+111-444-989</a> -->
                            </li>
                            <li>
                                <a href="mailto:contact@domain.com">
                                    <!-- <i class="fas fa-envelope u-c-brand u-s-m-r-9"></i>
                                    E-mail: contact@domain.com -->
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <nav>
                        <ul class="secondary-nav g-nav">
                            <li>
                                <a style="font-weight:bold;">
                                    <?=$mo_member->checklogin()?$your_profile["name"]:"My Account"?>
                                    <i class="fas fa-chevron-down u-s-m-l-9"></i>
                                </a>
                                <ul class="g-dropdown" style="width:200px">
                                    <?php if( $mo_member->checkLogin() ) { ?>
                                    <li>
                                        <a href="<?=PAGE_URL."/profile.php"?>">
                                            <i class="far fa-heart u-s-m-r-9"></i>
                                            Cập nhật hồ sơ</a>
                                    </li>
                                    <?php } ?>

                                    <li>
                                        <a href="<?=PAGE_URL."/cart.php"?>">
                                            <i class="fas fa-cog u-s-m-r-9"></i>
                                            Giỏ hàng</a>
                                    </li>
                                    <li>
                                        <a href="<?=PAGE_URL."/checkout.php"?>">
                                            <i class="far fa-check-circle u-s-m-r-9"></i>
                                            Thanh toán</a>
                                    </li>
                                    <?php if( $mo_member->checkLogin() ) { ?>
                                        <li>
                                            <a href="<?=ACTION_PAGE_URL."/conf_logout.php"?>">
                                                <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                                Đăng xuất</a>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <a href="<?=PAGE_URL."/account.php"?>">
                                                <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                                Đăng nhập / Đăng ký</a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <!-- <li>
                                <a>USD
                                    <i class="fas fa-chevron-down u-s-m-l-9"></i>
                                </a>
                                <ul class="g-dropdown" style="width:90px">
                                    <li>
                                        <a href="#" class="u-c-brand">($) USD</a>
                                    </li>
                                    <li>
                                        <a href="#">(£) GBP</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- <li>
                                <a>ENG
                                    <i class="fas fa-chevron-down u-s-m-l-9"></i>
                                </a>
                                <ul class="g-dropdown" style="width:70px">
                                    <li>
                                        <a href="#" class="u-c-brand">ENG</a>
                                    </li>
                                    <li>
                                        <a href="#">ARB</a>
                                    </li>
                                </ul> -->
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Top-Header /- -->
            <!-- Mid-Header -->
            <div class="full-layer-mid-header">
                <div class="container">
                    <div class="row clearfix align-items-center">
                        <div class="col-lg-3 col-md-9 col-sm-6">
                            <div class="brand-logo text-lg-center">
                                <a href="<?=PAGE_URL."/home.php"?>">
                                    <img src="public/images/main-logo/logo.png" alt="Groover Brand Logo" class="app-brand-logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 u-d-none-lg">
                            <form action="<?=PAGE_URL."/search.php"?>" method="GET" class="form-searchbox">
                                <label class="sr-only" for="search-landscape">Search</label>
                                <input name="keyword" id="search-landscape" type="text" class="text-field" placeholder="Nhập từ khóa tìm kiếm...">
                                <div class="select-box-position">
                                    <!-- <div class="select-box-wrapper select-hide">
                                        <label class="sr-only" for="select-category">Choose category for search</label>
                                        <select class="select-box" id="select-category">
                                            <option selected="selected" value="">
                                                All
                                            </option>
                                            <option value="">Men"s Clothing</option>
                                            <option value="">Women"s Clothing
                                            </option>
                                            <option value="">Toys Hobbies & Robots
                                            </option>
                                            <option value="">Mobiles & Tablets
                                            </option>
                                            <option value="">Consumer Electronics
                                            </option>
                                            <option value="">Books & Audible
                                            </option>
                                            <option value="">Beauty & Health
                                            </option>
                                            <option value="">Furniture Home & Office
                                            </option>
                                        </select>
                                    </div> -->
                                </div>
                                <button id="btn-search" type="submit" class="button button-primary fas fa-search"></button>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <nav>
                                <ul class="mid-nav g-nav">
                                    <li class="u-d-none-lg">
                                        <a href="<?=PAGE_URL."/cart.php"?>">
                                            <i class="ion ion-md-cart u-c-brand"></i>
                                        </a>
                                    </li>
                                    <li class="u-d-none-lg">
                                        <a href="<?=PAGE_URL."/wishlist.php"?>">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a id="mini-cart-trigger">
                                            <i class="ion ion-md-basket"></i>
                                            <span class="item-counter"><?= $cart_list["number"]?></span>
                                            <span class="item-price" style="font-size:13px; white-space: nowrap;"><?= number_format($cart_list["total_price"])." VND" ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mid-Header /- -->
            <!-- Responsive-Buttons -->
            <div class="fixed-responsive-container">
                <div class="fixed-responsive-wrapper">
                    <button type="button" class="button fas fa-search" id="responsive-search"></button>
                </div>
                <div class="fixed-responsive-wrapper">
                    <a href="<?=PAGE_URL."/wishlist.php"?>">
                        <i class="far fa-heart"></i>
                        <span class="fixed-item-counter">4</span>
                    </a>
                </div>
            </div>
            <!-- Responsive-Buttons /- -->
            <!-- Mini Cart -->
            <div class="mini-cart-wrapper" id="mini-cart-wrapper-popup">
                <div class="mini-cart">
                    <div class="mini-cart-header">
                        Giỏ hàng của bạn
                        <button type="button" class="button ion ion-md-close" id="mini-cart-close"></button>
                    </div>
                    <ul class="mini-cart-list">
                        <?php foreach( $cart_list["products"] as $product ) { ?>
                        <li class="clearfix">
                            <a href="<?=PAGE_URL."/single-product.php?id=".$product["id"]?>">
                                <img src="public/images/product/<?=$product["image"]?>" alt="<?=$product["name"]?>">
                                <span class="mini-item-name"><?=substr($product["name"], 0, 50)?>...</span>
                                <span class="mini-item-price"><?=number_format($product["price_cart"])?></span>
                                <span class="mini-item-quantity"> x <?=$product["num_cart"]?> </span>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                    <div class="mini-shop-total clearfix">
                        <span class="mini-total-heading float-left">Tổng tiền:</span>
                        <span class="mini-total-price float-right"><?= number_format($cart_list["total_price"])." VND" ?></span>
                    </div>
                    <div class="mini-action-anchors">
                        <a href="<?=PAGE_URL."/cart.php"?>" class="cart-anchor">Đi đến giỏ hàng</a>
                        <a href="<?=PAGE_URL."/checkout.php"?>" class="checkout-anchor">Thanh toán</a>
                    </div>
                </div>
            </div>
            <!-- Mini Cart /- -->
            <!-- Bottom-Header -->
            <div class="full-layer-bottom-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="v-menu">
                                <span class="v-title">
                                    <i class="ion ion-md-menu"></i>
                                    Danh mục
                                    <i class="fas fa-angle-down"></i>
                                </span>
                                <nav>
                                    <div class="v-wrapper">
                                        <ul class="v-list animated fadeIn">
                                            <?php foreach( $protype_list as $val ) { ?>
                                            <li>
                                                <a href="<?=PAGE_URL."/category.php?type_id=".$val["type_id"]?>" title="<?=$val["type_name"]?>" class="v-more">
                                                    <i class="ion ion-md-add"></i>
                                                    <span><?=$val["type_name"]?></span>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <ul class="bottom-nav g-nav u-d-none-lg">
                                <?php $manu_list_limit = $mo_manufac->getManufactureLimit(5); ?>
                                <?php foreach($manu_list_limit as $manu) { ?>
                                <li>
                                    <a href="<?=PAGE_URL."/category.php?manu_id=".$manu["manu_id"]?>"><?=$manu["manu_name"]?>
                                        <!-- <span class="superscript-label-new">NEW</span> -->
                                    </a>
                                </li>
                                <?php } ?>
                                <li class="mega-position">
                                    <a>Pages
                                        <i class="fas fa-chevron-down u-s-m-l-9"></i>
                                    </a>
                                    <div class="mega-menu mega-3-colm">
                                        <ul>
                                            <li class="menu-title">Home & Static Pages</li>
                                            <li>
                                                <a href="<?=PAGE_URL."/home.php"?>" class="u-c-brand">Home</a>
                                            </li>
                                            <li>
                                                <a href="<?=PAGE_URL."/about.php"?>">About</a>
                                            </li>
                                            <li>
                                                <a href="<?=PAGE_URL."/contact.php"?>">Contact</a>
                                            </li>
                                            <li>
                                                <a href="<?=PAGE_URL."/faq.php"?>">FAQ</a>
                                            </li>
                                            <li>
                                                <a href="<?=PAGE_URL."/terms-and-conditions.php"?>">Terms & Conditions</a>
                                            </li>
                                            <!-- <li>
                                                <a href="<?=PAGE_URL."/404.php"?>">404</a>
                                            </li> -->
                                            <!-- <li class="menu-title">Single Product Page</li> -->
                                            <li class="menu-title">Blog</li>
                                            <li>
                                                <a href="<?=PAGE_URL."/blog.php"?>">Blog Page</a>
                                            </li>
                                            <li>
                                                <a href="<?=PAGE_URL."/blog-detail.php"?>">Blog Details</a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li class="menu-title">Ecommerce Pages</li>
                                            <li>
                                                <a href="<?=PAGE_URL."/category.php"?>">Shop</a>
                                            </li>
                                            <li>
                                                <a href="<?=PAGE_URL."/cart.php"?>">Cart</a>
                                            </li>
                                            <li>
                                                <a href="<?=PAGE_URL."/checkout.php"?>">Checkout</a>
                                            </li>
                                            <li>
                                                <a href="<?=PAGE_URL."/wishlist.php"?>">Wishlist</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- <li>
                                    <a href="custom-deal-page.php">Super Sale
                                        <span class="superscript-label-discount">-15%</span>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom-Header /- -->
        </header>