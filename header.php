<?php
    require_once "lib/cart.php";
    require_once "models/db.php";
    require_once "models/user.php";
    require_once "models/user_member.php";
    require_once "models/protype.php";
    $mo_cart = new Cart();
    $mo_member = new UserMember();
    $mo_protype = new Protype();

    $product_list = $mo_cart->getProductListInCart();
    $protype_list = $mo_protype->getProtypeAll();

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
                                    <i class="fas fa-phone u-c-brand u-s-m-r-9"></i>
                                    Telephone:+111-444-989</a>
                            </li>
                            <li>
                                <a href="mailto:contact@domain.com">
                                    <i class="fas fa-envelope u-c-brand u-s-m-r-9"></i>
                                    E-mail: contact@domain.com
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <nav>
                        <ul class="secondary-nav g-nav">
                            <li>
                                <a>My Account
                                    <i class="fas fa-chevron-down u-s-m-l-9"></i>
                                </a>
                                <ul class="g-dropdown" style="width:200px">
                                    <li>
                                        <a href="cart.php">
                                            <i class="fas fa-cog u-s-m-r-9"></i>
                                            My Cart</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php">
                                            <i class="far fa-heart u-s-m-r-9"></i>
                                            My Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="checkout.php">
                                            <i class="far fa-check-circle u-s-m-r-9"></i>
                                            Checkout</a>
                                    </li>
                                    <?php if( $mo_member->checkLogin() ) { ?>
                                        <li>
                                            <a href="action/conf_logout.php">
                                                <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                                Logout</a>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <a href="account.php">
                                                <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                                Login / Signup</a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li>
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
                            </li>
                            <li>
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
                                </ul>
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
                                <a href="home.php">
                                    <img src="public/images/main-logo/groover-branding-1.png" alt="Groover Brand Logo" class="app-brand-logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 u-d-none-lg">
                            <form class="form-searchbox">
                                <label class="sr-only" for="search-landscape">Search</label>
                                <input id="search-landscape" type="text" class="text-field" placeholder="Search everything">
                                <div class="select-box-position">
                                    <div class="select-box-wrapper select-hide">
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
                                    </div>
                                </div>
                                <button id="btn-search" type="submit" class="button button-primary fas fa-search"></button>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <nav>
                                <ul class="mid-nav g-nav">
                                    <li class="u-d-none-lg">
                                        <a href="home.php">
                                            <i class="ion ion-md-home u-c-brand"></i>
                                        </a>
                                    </li>
                                    <li class="u-d-none-lg">
                                        <a href="wishlist.php">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a id="mini-cart-trigger">
                                            <i class="ion ion-md-basket"></i>
                                            <span class="item-counter"><?= $product_list["number"]?></span>
                                            <span class="item-price"><?= number_format($product_list["total_price"])." VND" ?></span>
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
                    <a href="wishlist.php">
                        <i class="far fa-heart"></i>
                        <span class="fixed-item-counter">4</span>
                    </a>
                </div>
            </div>
            <!-- Responsive-Buttons /- -->
            <!-- Mini Cart -->
            <div class="mini-cart-wrapper">
                <div class="mini-cart">
                    <div class="mini-cart-header">
                        YOUR CART
                        <button type="button" class="button ion ion-md-close" id="mini-cart-close"></button>
                    </div>
                    <ul class="mini-cart-list">
                        <?php foreach( $product_list["products"] as $product ) { ?>
                        <li class="clearfix">
                            <a href="single-product.php">
                                <img src="public/images/product/<?=$product["image"]?>" alt="<?=$product["name"]?>">
                                <span class="mini-item-name"><?=$product["name"]?></span>
                                <span class="mini-item-price"><?=number_format($product["price_cart"])?></span>
                                <span class="mini-item-quantity"> x <?=$product["num_cart"]?> </span>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                    <div class="mini-shop-total clearfix">
                        <span class="mini-total-heading float-left">Total:</span>
                        <span class="mini-total-price float-right"><?= number_format($product_list["total_price"])." VND" ?></span>
                    </div>
                    <div class="mini-action-anchors">
                        <a href="cart.php" class="cart-anchor">View Cart</a>
                        <a href="checkout.php" class="checkout-anchor">Checkout</a>
                    </div>
                </div>
            </div>
            <!-- Mini Cart /- -->
            <!-- Bottom-Header -->
            <div class="full-layer-bottom-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="v-menu v-close">
                                <span class="v-title">
                                    <i class="ion ion-md-menu"></i>
                                    All Categories
                                    <i class="fas fa-angle-down"></i>
                                </span>
                                <nav>
                                    <div class="v-wrapper">
                                        <ul class="v-list animated fadeIn">
                                            <!-- <li class="js-backdrop">
                                                <a href="shop-v1-root-category.php">
                                                    <i class="ion ion-md-shirt"></i>
                                                    Men"s Clothing
                                                    <i class="ion ion-ios-arrow-forward"></i>
                                                </a>
                                                <button class="v-button ion ion-md-add"></button>
                                                <div class="v-drop-right" style="width: 700px;">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a href="shop-v2-sub-category.php">Tops</a>
                                                                    <ul>
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
                                                                            <a href="shop-v4-filter-as-category.php">Black Bean T-Shirt
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a href="shop-v2-sub-category.php">Outwear</a>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="shop-v3-sub-sub-category.php">Jackets</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-v3-sub-sub-category.php">Trench</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-v3-sub-sub-category.php">Parkas</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-v3-sub-sub-category.php">Sweaters</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a href="shop-v1-root-category.php">Accessories</a>
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
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a href="shop-v2-sub-category.php">Bottoms</a>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="shop-v3-sub-sub-category.php">Casual Pants
                                                                            </a>
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
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a href="shop-v2-sub-category.php">Underwear</a>
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
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <ul class="v-level-2">
                                                                <li>
                                                                    <a href="shop-v2-sub-category.php">Sunglasses</a>
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </li> -->
                                            
                                            <?php foreach( $protype_list as $val ) { ?>
                                            <li>
                                                <a href="" title="<?=$val["type_name"]?>" class="v-more">
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
                                <li>
                                    <a href="custom-deal-page.php">New Arrivals
                                        <span class="superscript-label-new">NEW</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="custom-deal-page.php">Exclusive Deals
                                        <span class="superscript-label-hot">HOT</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="custom-deal-page.php">Flash Deals
                                    </a>
                                </li>
                                <li class="mega-position">
                                    <a>Pages
                                        <i class="fas fa-chevron-down u-s-m-l-9"></i>
                                    </a>
                                    <div class="mega-menu mega-3-colm">
                                        <ul>
                                            <li class="menu-title">Home & Static Pages</li>
                                            <li>
                                                <a href="home.php" class="u-c-brand">Home</a>
                                            </li>
                                            <li>
                                                <a href="about.php">About</a>
                                            </li>
                                            <li>
                                                <a href="contact.php">Contact</a>
                                            </li>
                                            <li>
                                                <a href="faq.php">FAQ</a>
                                            </li>
                                            <li>
                                                <a href="store-directory.php">Store Directory</a>
                                            </li>
                                            <li>
                                                <a href="terms-and-conditions.php">Terms & Conditions</a>
                                            </li>
                                            <li>
                                                <a href="404.php">404</a>
                                            </li>
                                            <li class="menu-title">Single Product Page</li>
                                            <li>
                                                <a href="single-product.php">Single Product Fullwidth</a>
                                            </li>
                                            <li class="menu-title">Blog</li>
                                            <li>
                                                <a href="blog.php">Blog Page</a>
                                            </li>
                                            <li>
                                                <a href="blog-detail.php">Blog Details</a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li class="menu-title">Ecommerce Pages</li>
                                            <li>
                                                <a href="shop-v2-sub-category.php">Shop</a>
                                            </li>
                                            <li>
                                                <a href="cart.php">Cart</a>
                                            </li>
                                            <li>
                                                <a href="checkout.php">Checkout</a>
                                            </li>
                                            <li>
                                                <a href="account.php">My Account</a>
                                            </li>
                                            <li>
                                                <a href="wishlist.php">Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="track-order.php">Track your Order</a>
                                            </li>
                                            <li class="menu-title">Cart Variations</li>
                                            <li>
                                                <a href="cart-empty.php">Cart Ver 1 Empty</a>
                                            </li>
                                            <li>
                                                <a href="cart.php">Cart Ver 2 Full</a>
                                            </li>
                                            <li class="menu-title">Wishlist Variations</li>
                                            <li>
                                                <a href="wishlist-empty.php">Wishlist Ver 1 Empty</a>
                                            </li>
                                            <li>
                                                <a href="wishlist.php">Wishlist Ver 2 Full</a>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li class="menu-title">Shop Variations</li>
                                            <li>
                                                <a href="shop-v1-root-category.php">Shop Ver 1 Root Category</a>
                                            </li>
                                            <li>
                                                <a href="shop-v2-sub-category.php">Shop Ver 2 Sub Category</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.php">Shop Ver 3 Sub Sub Category</a>
                                            </li>
                                            <li>
                                                <a href="shop-v4-filter-as-category.php">Shop Ver 4 Filter as Category</a>
                                            </li>
                                            <li>
                                                <a href="shop-v5-product-not-found.php">Shop Ver 5 Product Not Found</a>
                                            </li>
                                            <li>
                                                <a href="shop-v6-search-results.php">Shop Ver 6 Search Results</a>
                                            </li>
                                            <li class="menu-title">My Account Variation</li>
                                            <li>
                                                <a href="lost-password.php">Lost Your Password ?</a>
                                            </li>
                                            <li class="menu-title">Checkout Variation</li>
                                            <li>
                                                <a href="confirmation.php">Checkout Confirmation</a>
                                            </li>
                                            <li class="menu-title">Custom Deals Page</li>
                                            <li>
                                                <a href="custom-deal-page.php">Custom Deal Page</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="custom-deal-page.php">Super Sale
                                        <span class="superscript-label-discount">-15%</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom-Header /- -->
        </header>