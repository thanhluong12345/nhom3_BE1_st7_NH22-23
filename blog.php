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
    <title>Groover - Online Shopping for Electronics, Apparel, Computers, Books, DVDs & more</title>
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
                                <li>
                                    <a href="account.php">
                                        <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                        Login / Signup</a>
                                </li>
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
                                        <option value="">Men's Clothing</option>
                                        <option value="">Women's Clothing
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
                                        <i class="ion ion-md-home"></i>
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
                                        <span class="item-counter">4</span>
                                        <span class="item-price">$220.00</span>
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
                    <li class="clearfix">
                        <a href="single-product.php">
                            <img src="public/images/product/product@1x.jpg" alt="Product">
                            <span class="mini-item-name">Casual Hoodie Full Cotton</span>
                            <span class="mini-item-price">$55.00</span>
                            <span class="mini-item-quantity"> x 1 </span>
                        </a>
                    </li>
                    <li class="clearfix">
                        <a href="single-product.php">
                            <img src="public/images/product/product@1x.jpg" alt="Product">
                            <span class="mini-item-name">Black Rock Dress with High Jewelery Necklace</span>
                            <span class="mini-item-price">$55.00</span>
                            <span class="mini-item-quantity"> x 1 </span>
                        </a>
                    </li>
                    <li class="clearfix">
                        <a href="single-product.php">
                            <img src="public/images/product/product@1x.jpg" alt="Product">
                            <span class="mini-item-name">Xiaomi Note 2 Black Color</span>
                            <span class="mini-item-price">$55.00</span>
                            <span class="mini-item-quantity"> x 1 </span>
                        </a>
                    </li>
                    <li class="clearfix">
                        <a href="single-product.php">
                            <img src="public/images/product/product@1x.jpg" alt="Product">
                            <span class="mini-item-name">Dell Inspiron 15</span>
                            <span class="mini-item-price">$55.00</span>
                            <span class="mini-item-quantity"> x 1 </span>
                        </a>
                    </li>
                </ul>
                <div class="mini-shop-total clearfix">
                    <span class="mini-total-heading float-left">Total:</span>
                    <span class="mini-total-price float-right">$220.00</span>
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
                                        <li class="js-backdrop">
                                            <a href="shop-v1-root-category.php">
                                                <i class="ion ion-md-shirt"></i>
                                                Men's Clothing
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
                                        </li>
                                        <li class="js-backdrop">
                                            <a href="shop-v1-root-category.php">
                                                <i class="ion ion-ios-shirt"></i>
                                                Women's Clothing
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
                                                                        <a href="shop-v3-sub-sub-category.php">Dresses</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Blouses & Shirts
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">T-shirts</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Sweater</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="shop-v2-sub-category.php">Intimates</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Bras</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Brief Sets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Bustiers & Corsets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Panties</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="shop-v2-sub-category.php">Wedding & Events
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Wedding Dresses
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">Evening Dresses
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Prom Dresses
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Flower Dresses
                                                                        </a>
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
                                                                        <a href="shop-v3-sub-sub-category.php">Skirts</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Shoes</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Leggings</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Jeans</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="shop-v2-sub-category.php">Outwear & Jackets
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Blazers</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Basics Jackets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Trench</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Leather & Suede
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="shop-v2-sub-category.php">Accessories</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Sunglasses</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Headwear</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Baseball Caps
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Belts</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="js-backdrop">
                                            <a href="shop-v1-root-category.php">
                                                <i class="ion ion-md-rocket"></i>
                                                Toys Hobbies & Robots
                                                <i class="ion ion-ios-arrow-forward"></i>
                                            </a>
                                            <button class="v-button ion ion-md-add"></button>
                                            <div class="v-drop-right" style="width: 700px;">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="shop-v2-sub-category.php">RC Toys & Hobbies
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">RC Helicopter
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">RC Lego Robots
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">RC Drone
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">RC Car
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">RC Boat
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">RC Robot
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Multi Rotor Parts
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">FPV System
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Radios & Receiver
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Battery & Charger
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <ul class="v-level-2">
                                                            <li>
                                                                <a href="shop-v2-sub-category.php">Solar Energy
                                                                </a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Solar Powered Toy
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v3-sub-sub-category.php">Solar Powered System
                                                                        </a>
                                                                    </li>
                                                                    <li class="view-more-flag">
                                                                        <a href="store-directory.php">View More
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Remember layer image should be place on empty space and its not overlap your list items because user could not read your list items. -->
                                                <div class="v-image" style="bottom: 0;right: -25px">
                                                    <a href="#" class="d-block">
                                                        <img src="public/images/banners/mega-3.png" class="img-fluid" alt="Product">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="shop-v1-root-category.php">
                                                <i class="ion ion-md-phone-portrait"></i>
                                                Mobiles & Tablets
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-v1-root-category.php">
                                                <i class="ion ion-md-tv"></i>
                                                Consumer Electronics
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-v1-root-category.php">
                                                <i class="ion ion-ios-book"></i>
                                                Books & Audible
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-v1-root-category.php">
                                                <i class="ion ion-md-heart"></i>
                                                Beauty & Health
                                            </a>
                                        </li>
                                        <li class="v-none" style="display: none">
                                            <a href="shop-v1-root-category.php">
                                                <i class="ion ion-md-easel"></i>
                                                Furniture Home & Office
                                            </a>
                                        </li>
                                        <li>
                                            <a class="v-more">
                                                <i class="ion ion-md-add"></i>
                                                <span>View More</span>
                                            </a>
                                        </li>
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
                                            <a href="home.php">Home</a>
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
                                            <a href="blog.php" class="u-c-brand">Blog Page</a>
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
    <!-- Header /- -->
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Blog</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="home.php">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="blog.php">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Blog-Page -->
    <div class="page-blog u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <!-- Blog-Posts -->
                    <div class="blog-post u-s-m-b-80">
                        <div class="blog-post-wrapper u-s-m-b-26">
                            <a class="blog-post-anchor" href="blog-detail.php">
                                <img class="img-fluid" src="public/images/blog/blog-01.jpg" alt="Blog post 1">
                            </a>
                        </div>
                        <h1 class="blog-post-heading u-s-m-b-13">
                            <a href="blog-detail.php">Your Life is an extraordinary Adventure</a>
                        </h1>
                        <div class="blog-post-info u-s-m-b-13">
                            <span class="blog-post-preposition">By</span>
                            <a class="blog-post-author-name" href="blog-detail.php">Admin</a>
                            <span class="blog-post-info-separator">/</span>
                            <a class="blog-post-comment" href="blog-detail.php">Comments (6)</a>
                            <span class="blog-post-info-separator">/</span>
                            <span class="blog-post-published-date">
                                <span>14</span>/
                                <span>06</span>/
                                <span>2016</span>
                            </span>
                        </div>
                        <p class="blog-post-paragraph u-s-m-b-16">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aliquid, architecto corporis enim eum exercitationem fugit harum iste laudantium maxime nam non ratione reiciendis repellendus repudiandae soluta, velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem beatae, consequuntur dolores inventore laboriosam maiores necessitatibus neque odit quisquam ratione rerum sequi unde veniam veritatis, voluptatem, voluptatibus. Amet, dicta?
                        </p>
                        <a href="blog-detail.php" class="blog-post-read-more">Read More</a>
                    </div>
                    <div class="blog-post u-s-m-b-80">
                        <div class="blog-post-wrapper u-s-m-b-26">
                            <a class="blog-post-anchor" href="blog-detail.php">
                                <img class="img-fluid" src="public/images/blog/blog-01.jpg" alt="Blog post 2">
                            </a>
                        </div>
                        <h1 class="blog-post-heading u-s-m-b-13">
                            <a href="blog-detail.php">Be More Confident in 30 Seconds</a>
                        </h1>
                        <div class="blog-post-info u-s-m-b-13">
                            <span class="blog-post-preposition">By</span>
                            <a class="blog-post-author-name" href="blog-detail.php">Admin</a>
                            <span class="blog-post-info-separator">/</span>
                            <a class="blog-post-comment" href="blog-detail.php">Comments (4)</a>
                            <span class="blog-post-info-separator">/</span>
                            <span class="blog-post-published-date">
                                <span>14</span>/
                                <span>06</span>/
                                <span>2016</span>
                            </span>
                        </div>
                        <p class="blog-post-paragraph u-s-m-b-16">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aliquid, architecto corporis enim eum exercitationem fugit harum iste laudantium maxime nam non ratione reiciendis repellendus repudiandae soluta, velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem beatae, consequuntur dolores inventore laboriosam maiores necessitatibus neque odit quisquam ratione rerum sequi unde veniam veritatis, voluptatem, voluptatibus. Amet, dicta?
                        </p>
                        <a href="blog-detail.php" class="blog-post-read-more">Read More</a>
                    </div>
                    <div class="blog-post u-s-m-b-80">
                        <div class="blog-post-wrapper u-s-m-b-26">
                            <a class="blog-post-anchor" href="blog-detail.php">
                                <img class="img-fluid" src="public/images/blog/blog-01.jpg" alt="Blog post 3">
                            </a>
                        </div>
                        <h1 class="blog-post-heading u-s-m-b-13">
                            <a href="blog-detail.php">Bury A Body With Me</a>
                        </h1>
                        <div class="blog-post-info u-s-m-b-13">
                            <span class="blog-post-preposition">By</span>
                            <a class="blog-post-author-name" href="blog-detail.php">Admin</a>
                            <span class="blog-post-info-separator">/</span>
                            <a class="blog-post-comment" href="blog-detail.php">Comments (2)</a>
                            <span class="blog-post-info-separator">/</span>
                            <span class="blog-post-published-date">
                                <span>14</span>/
                                <span>06</span>/
                                <span>2016</span>
                            </span>
                        </div>
                        <p class="blog-post-paragraph u-s-m-b-16">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aliquid, architecto corporis enim eum exercitationem fugit harum iste laudantium maxime nam non ratione reiciendis repellendus repudiandae soluta, velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem beatae, consequuntur dolores inventore laboriosam maiores necessitatibus neque odit quisquam ratione rerum sequi unde veniam veritatis, voluptatem, voluptatibus. Amet, dicta?
                        </p>
                        <a href="blog-detail.php" class="blog-post-read-more">Read More</a>
                    </div>
                    <div class="blog-post u-s-m-b-80">
                        <div class="blog-post-wrapper u-s-m-b-26">
                            <a class="blog-post-anchor" href="blog-detail.php">
                                <img class="img-fluid" src="public/images/blog/blog-01.jpg" alt="Blog post 4">
                            </a>
                        </div>
                        <h1 class="blog-post-heading u-s-m-b-13">
                            <a href="blog-detail.php">Everything Must Die</a>
                        </h1>
                        <div class="blog-post-info u-s-m-b-13">
                            <span class="blog-post-preposition">By</span>
                            <a class="blog-post-author-name" href="blog-detail.php">John Doe</a>
                            <span class="blog-post-info-separator">/</span>
                            <a class="blog-post-comment" href="blog-detail.php">Comments (0)</a>
                            <span class="blog-post-info-separator">/</span>
                            <span class="blog-post-published-date">
                                <span>14</span>/
                                <span>06</span>/
                                <span>2016</span>
                            </span>
                        </div>
                        <p class="blog-post-paragraph u-s-m-b-16">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aliquid, architecto corporis enim eum exercitationem fugit harum iste laudantium maxime nam non ratione reiciendis repellendus repudiandae soluta, velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem beatae, consequuntur dolores inventore laboriosam maiores necessitatibus neque odit quisquam ratione rerum sequi unde veniam veritatis, voluptatem, voluptatibus. Amet, dicta?
                        </p>
                        <a href="blog-detail.php" class="blog-post-read-more">Read More</a>
                    </div>
                    <!-- Blog-Posts /- -->
                    <!-- Blog-Posts-Pagination -->
                    <div class="blog-pagination u-s-m-b-80">
                        <ul class="blog-pg-list">
                            <li>
                                <a href="blog.php" class="bl-pg-link d-none">Back</a>
                            </li>
                            <li>
                                <a href="blog.php" class="bl-pg-link bl-pg-link-hover-a bl-pg-link-is-active">1</a>
                            </li>
                            <li>
                                <a href="blog.php" class="bl-pg-link bl-pg-link-hover-a">2</a>
                            </li>
                            <li>
                                <a href="blog.php" class="bl-pg-link bl-pg-link-hover-a">3</a>
                            </li>
                            <li>
                                <a href="blog.php" class="bl-pg-link bl-pg-link-hover-gap">......</a>
                            </li>
                            <li>
                                <a href="blog.php" class="bl-pg-link bl-pg-link-hover-a">4</a>
                            </li>
                            <li>
                                <a href="blog.php" class="bl-pg-link bl-pg-link-hover-b">Previous</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Blog-Posts-Pagination /- -->
                </div>
                <div class="col-lg-3 col-md-3">
                    <!-- Blog-Sidebar-Search -->
                    <div class="bl-sidebar-widget u-s-m-b-50">
                        <h3 class="bl-sidebar-title-h3 u-s-m-b-20">Search</h3>
                        <form class="group-text-blog-search">
                            <label class="sr-only" for="blog-search">Search On Blog</label>
                            <input type="text" id="blog-search" class="text-field" placeholder="Type to search">
                            <button type="submit" class="button fas fa-search"></button>
                        </form>
                    </div>
                    <!-- Blog-Sidebar-Search /- -->
                    <!-- Blog-Sidebar-Category -->
                    <div class="bl-sidebar u-s-m-b-50">
                        <h3 class="bl-sidebar-title-h3 u-s-m-b-20">Categories</h3>
                        <ul class="bl-sidebar-list">
                            <li>
                                <a href="blog.php">Corporate</a>
                            </li>
                            <li>
                                <a href="blog.php">Creative</a>
                            </li>
                            <li>
                                <a href="blog.php">Design</a>
                            </li>
                            <li>
                                <a href="blog.php">News</a>
                            </li>
                            <li>
                                <a href="blog.php">Photography</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Blog-Sidebar-Category /- -->
                    <!-- Blog-Sidebar-Archive -->
                    <div class="bl-sidebar u-s-m-b-50">
                        <h3 class="bl-sidebar-title-h3 u-s-m-b-20">Archives</h3>
                        <ul class="bl-sidebar-list">
                            <li>
                                <a href="blog.php">March 2017 (1)</a>
                            </li>
                            <li>
                                <a href="blog.php">December 2017 (3)</a>
                            </li>
                            <li>
                                <a href="blog.php">November 2017 (4)</a>
                            </li>
                            <li>
                                <a href="blog.php">September 2017 (1)</a>
                            </li>
                            <li>
                                <a href="blog.php">August 2014 (1)</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Blog-Sidebar-Archive /- -->
                    <!-- Blog-Sidebar-Recent-Post -->
                    <div class="bl-sidebar u-s-m-b-50">
                        <h3 class="bl-sidebar-title-h3 u-s-m-b-20">Recent Post</h3>
                        <div class="recent-post u-s-m-b-18">
                            <div class="recent-post-image">
                                <a class="" href="blog-detail.php">
                                    <img src="public/images/blog/blog-recent.jpg" alt="recent post 1">
                                </a>
                            </div>
                            <div class="recent-post-info">
                                <a class="" href="blog-detail.php">Your Life is an extraordinary Adventure</a>
                                <span class="recent-post-date">
                                    <span>16</span>/
                                    <span>10</span>/
                                    <span>2016</span>
                                </span>
                            </div>
                        </div>
                        <div class="recent-post u-s-m-b-18">
                            <div class="recent-post-image">
                                <a class="" href="blog-detail.php">
                                    <img src="public/images/blog/blog-recent.jpg" alt="recent post 2">
                                </a>
                            </div>
                            <div class="recent-post-info">
                                <a class="" href="blog-detail.php">Be More Confident in 30 Seconds</a>
                                <span class="recent-post-date">
                                    <span>16</span>/
                                    <span>10</span>/
                                    <span>2016</span>
                                </span>
                            </div>
                        </div>
                        <div class="recent-post u-s-m-b-18">
                            <div class="recent-post-image">
                                <a class="" href="blog-detail.php">
                                    <img src="public/images/blog/blog-recent.jpg" alt="recent post 3">
                                </a>
                            </div>
                            <div class="recent-post-info">
                                <a class="" href="blog-detail.php">Bury A Body With Me</a>
                                <span class="recent-post-date">
                                    <span>16</span>/
                                    <span>10</span>/
                                    <span>2016</span>
                                </span>
                            </div>
                        </div>
                        <div class="recent-post u-s-m-b-18">
                            <div class="recent-post-image">
                                <a class="" href="blog-detail.php">
                                    <img src="public/images/blog/blog-recent.jpg" alt="recent post 4">
                                </a>
                            </div>
                            <div class="recent-post-info">
                                <a class="" href="blog-detail.php">Everything Must Die</a>
                                <span class="recent-post-date">
                                    <span>16</span>/
                                    <span>10</span>/
                                    <span>2016</span>
                                </span>
                            </div>
                        </div>
                        <div class="recent-post u-s-m-b-18">
                            <div class="recent-post-image">
                                <a class="" href="blog-detail.php">
                                    <img src="public/images/blog/blog-recent.jpg" alt="recent post 5">
                                </a>
                            </div>
                            <div class="recent-post-info">
                                <a class="" href="blog-detail.php">See A World in Grain Of Sand</a>
                                <span class="recent-post-date">
                                    <span>16</span>/
                                    <span>10</span>/
                                    <span>2016</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Blog-Sidebar-Recent-Post /- -->
                    <!-- Blog-Sidebar-Tag -->
                    <div class="bl-sidebar u-s-m-b-50">
                        <h3 class="bl-sidebar-title-h3 u-s-m-b-20">Tags</h3>
                        <a href="blog.php" class="bl-tag u-s-m-b-8">Life</a>
                        <a href="blog.php" class="bl-tag u-s-m-b-8">Creative</a>
                        <a href="blog.php" class="bl-tag u-s-m-b-8">Ui/Ux</a>
                        <a href="blog.php" class="bl-tag u-s-m-b-8">Design</a>
                        <a href="blog.php" class="bl-tag u-s-m-b-8">Branding</a>
                        <a href="blog.php" class="bl-tag u-s-m-b-8">World</a>
                        <a href="blog.php" class="bl-tag u-s-m-b-8">Print</a>
                    </div>
                    <!-- Blog-Sidebar-Tag /- -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog-Page /- -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <!-- Outer-Footer -->
            <div class="outer-footer-wrapper u-s-p-y-80">
                <h6>
                    For special offers and other discount information
                </h6>
                <h1>
                    Subscribe to our Newsletter
                </h1>
                <p>
                    Subscribe to the mailing list to receive updates on promotions, new arrivals, discount and coupons.
                </p>
                <form class="newsletter-form">
                    <label class="sr-only" for="newsletter-field">Enter your Email</label>
                    <input type="text" id="newsletter-field" placeholder="Your Email Address">
                    <button type="submit" class="button">SUBMIT</button>
                </form>
            </div>
            <!-- Outer-Footer /- -->
            <!-- Mid-Footer -->
            <div class="mid-footer-wrapper u-s-p-b-80">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="footer-list">
                            <h6>CUSTOMER SERVICE</h6>
                            <ul>
                                <li>
                                    <a href="faq.php">FAQs</a>
                                </li>
                                <li>
                                    <a href="track-order.php">Track Order</a>
                                </li>
                                <li>
                                    <a href="terms-and-conditions.php">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="footer-list">
                            <h6>COMPANY</h6>
                            <ul>
                                <li>
                                    <a href="home.php">Home</a>
                                </li>
                                <li>
                                    <a href="about.php">About</a>
                                </li>
                                <li>
                                    <a href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="footer-list">
                            <h6>INFORMATION</h6>
                            <ul>
                                <li>
                                    <a href="store-directory.php">Categories Directory</a>
                                </li>
                                <li>
                                    <a href="wishlist.php">My Wishlist</a>
                                </li>
                                <li>
                                    <a href="cart.php">My Cart</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="footer-list">
                            <h6>Address</h6>
                            <ul>
                                <li>
                                    <i class="fas fa-location-arrow u-s-m-r-9"></i>
                                    <span>819 Sugar Camp Road, West Concord, MN 55985</span>
                                </li>
                                <li>
                                    <a href="tel:+923086561801">
                                        <i class="fas fa-phone u-s-m-r-9"></i>
                                        <span>+111-444-989</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:contact@domain.com">
                                        <i class="fas fa-envelope u-s-m-r-9"></i>
                                        <span>
                                            contact@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mid-Footer /- -->
            <!-- Bottom-Footer -->
            <div class="bottom-footer-wrapper">
                <div class="social-media-wrapper">
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
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p class="copyright-text">Copyright &copy; 2018
                    <a href="home.php">Groover</a> All Right Reserved</p>
            </div>
        </div>
        <!-- Bottom-Footer /- -->
    </footer>
    <!-- Footer /- -->
    <!-- Dummy Selectbox -->
    <div class="select-dummy-wrapper">
        <select id="compute-select">
            <option id="compute-option">All</option>
        </select>
    </div>
    <!-- Dummy Selectbox /- -->
    <!-- Responsive-Search -->
    <div class="responsive-search-wrapper">
        <button type="button" class="button ion ion-md-close" id="responsive-search-close-button"></button>
        <div class="responsive-search-container">
            <div class="container">
                <p>Start typing and press Enter to search</p>
                <form class="responsive-search-form">
                    <label class="sr-only" for="search-text">Search</label>
                    <input id="search-text" type="text" class="responsive-search-field" placeholder="PLEASE SEARCH">
                    <i class="fas fa-search"></i>
                </form>
            </div>
        </div>
    </div>
    <!-- Responsive-Search /- -->
</div>
<!-- app /- -->
<!--[if lte IE 9]>
<div class="app-issue">
    <div class="vertical-center">
        <div class="text-center">
            <h1>You are using an outdated browser.</h1>
            <span>This web app is not compatible with following browser. Please upgrade your browser to improve your security and experience.</span>
        </div>
    </div>
</div>
<style> #app {
    display: none;
} </style>
<![endif]-->
<!-- NoScript -->
<noscript>
    <div class="app-issue">
        <div class="vertical-center">
            <div class="text-center">
                <h1>JavaScript is disabled in your browser.</h1>
                <span>Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser to register for Groover.</span>
            </div>
        </div>
    </div>
    <style>
    #app {
        display: none;
    }
    </style>
</noscript>
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
window.ga = function() {
    ga.q.push(arguments)
};
ga.q = [];
ga.l = +new Date;
ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
<!-- Modernizr-JS -->
<script type="text/javascript" src="public/js/vendor/modernizr-custom.min.js"></script>
<!-- NProgress -->
<script type="text/javascript" src="public/js/nprogress.min.js"></script>
<!-- jQuery -->
<script type="text/javascript" src="public/js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<!-- Popper -->
<script type="text/javascript" src="public/js/popper.min.js"></script>
<!-- ScrollUp -->
<script type="text/javascript" src="public/js/jquery.scrollUp.min.js"></script>
<!-- Elevate Zoom -->
<script type="text/javascript" src="public/js/jquery.elevatezoom.min.js"></script>
<!-- jquery-ui-range-slider -->
<script type="text/javascript" src="public/js/jquery-ui.range-slider.min.js"></script>
<!-- jQuery Slim-Scroll -->
<script type="text/javascript" src="public/js/jquery.slimscroll.min.js"></script>
<!-- jQuery Resize-Select -->
<script type="text/javascript" src="public/js/jquery.resize-select.min.js"></script>
<!-- jQuery Custom Mega Menu -->
<script type="text/javascript" src="public/js/jquery.custom-megamenu.min.js"></script>
<!-- jQuery Countdown -->
<script type="text/javascript" src="public/js/jquery.custom-countdown.min.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="public/js/owl.carousel.min.js"></script>
<!-- Main -->
<script type="text/javascript" src="public/js/app.js"></script>
</body>
</html>
