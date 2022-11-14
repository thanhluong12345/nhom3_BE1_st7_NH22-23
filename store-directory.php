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
                                            <a href="store-directory.php" class="u-c-brand">Store Directory</a>
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
    <!-- Header /- -->
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Directory</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="home.php">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="store-directory.php">Directory</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Store-Directory-Page -->
    <div class="page-directory u-s-p-t-80">
        <div class="container">
            <!-- Men's Clothing Directory Wrapper  -->
            <div class="directory-wrapper">
                <h2>
                    <a href="shop-v1-root-category.php">Men's Clothing</a>
                </h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main" href="shop-v2-sub-category.php">Tops</a>
                            </li>
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
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Outwear</a>
                            </li>
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
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Accessories</a>
                            </li>
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Bottoms</a>
                            </li>
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
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Underwear</a>
                            </li>
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
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Sunglasses</a>
                            </li>
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
                    </div>
                </div>
            </div>
            <!-- Men's Clothing Directory Wrapper /-  -->
            <!-- Women's Clothing Directory Wrapper  -->
            <div class="directory-wrapper">
                <h2>
                    <a href="shop-v1-root-category.php">Women's Clothing</a>
                </h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Tops</a>
                            </li>
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
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Intimates</a>
                            </li>
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
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Wedding & Events</a>
                            </li>
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Bottoms</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Skirts</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Shorts</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Leggings</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Jeans</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Outwear & Jackets</a>
                            </li>
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
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Accessories</a>
                            </li>
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
                    </div>
                </div>
            </div>
            <!-- Women's Clothing Directory Wrapper /-  -->
            <!-- Toys Hobbies & Robots  -->
            <div class="directory-wrapper">
                <h2>
                    <a href="shop-v1-root-category.php">RC Toys & Hobbies</a>
                </h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">RC Toys & Hobbies</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">RC Helicopter</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">RC Drone</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">RC Quadcopters</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">RC Airplane</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">RC Car</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">RC Boat</a>
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
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Connector & Cable & Wire</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Tools & Bags & Storage</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">RC Helicopter Parts</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">RC Quadcopter Parts</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">RC Airplane Parts</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">RC Car Parts</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">RC Boat Parts</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Learning & Education</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Developmental Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Board Game Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Paper Art & Drawing</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Jigsaw & Puzzle Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Plane & Parachute Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Science & Discovery Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Pottery Clay & Tools</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php" class="dir-list-main">Dolls & Stuffed Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Squishy Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Doll House & Miniature</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Dolls & Action Figure</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Stuffed & Plush Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Other Stuffed Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php" class="dir-list-main">Model & Building Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Track Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Blocks Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Model Building</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Diecasts & Model Toys</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v3-sub-sub-category.php" class="dir-list-main">Musical Instruments</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Guitar</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Guitar Parts</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Brass & Woodwind</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Wind Instrument Parts</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Violin</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Violin Parts</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Ocarina</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Harmonica</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Keyboards & Piano</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Drums & Percussion</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Pro Audio Equipment</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Pro Audio Equipment Parts</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Music Box</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Education Musical Instruments</a>
                            </li>
                            <li>
                                <a class="dir-list-main">Solar Energy</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Solar Powered Toy</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Solar Powered System</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main">RC Robot</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Robot Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Robot Arm & Tank</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Smart Robot Car</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Robot Parts & Tools</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">DIY Education Robot</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main">Gadget Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Novelties</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Stress Relievers</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Magic & Trick Props</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Accessories for Nerf</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main">Classic & Retro Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Wind-up & Tin Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Yoyo & Gyro Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Inflatable Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Magnetic Toys</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Beach Play</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Toys Hobbies & Robots /- -->
            <!-- Mobiles & Tablets Directory Wrapper  -->
            <div class="directory-wrapper">
                <h2>
                    <a>Mobiles & Tablets</a>
                </h2>
                <div class="dir-sub-wrapper">
                    <div class="dir-sub-heading">
                        <a>Smart Phones</a>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <ul class="dir-list-wrap">
                                <li>
                                    <a href="shop-v4-filter-as-category.php">Samsung</a>
                                </li>
                                <li>
                                    <a href="shop-v4-filter-as-category.php">Xiaomi</a>
                                </li>
                                <li>
                                    <a href="shop-v4-filter-as-category.php">Huawei</a>
                                </li>
                                <li>
                                    <a href="shop-v4-filter-as-category.php">Honor</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <ul class="dir-list-wrap">
                                <li>
                                    <a href="shop-v4-filter-as-category.php">Infinix</a>
                                </li>
                                <li>
                                    <a href="shop-v4-filter-as-category.php">OnePlus</a>
                                </li>
                                <li>
                                    <a href="shop-v4-filter-as-category.php">Lenovo</a>
                                </li>
                                <li>
                                    <a href="shop-v4-filter-as-category.php">Apple</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <ul class="dir-list-wrap">
                                <li>
                                    <a href="shop-v4-filter-as-category.php">Google</a>
                                </li>
                                <li>
                                    <a href="shop-v4-filter-as-category.php">Moto</a>
                                </li>
                                <li>
                                    <a href="shop-v4-filter-as-category.php">Oppo</a>
                                </li>
                                <li>
                                    <a href="shop-v4-filter-as-category.php">Microsoft</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dir-remain-categories">
                    <div class="dir-remain-heading">Other Categories</div>
                    <ul class="dir-list-wrap">
                        <li>
                            <a href="shop-v3-sub-sub-category.php">Tablets</a>
                        </li>
                        <li>
                            <a href="shop-v3-sub-sub-category.php">Smart Watches</a>
                        </li>
                        <li>
                            <a href="shop-v3-sub-sub-category.php">Device Accessories</a>
                        </li>
                        <li>
                            <a href="shop-v3-sub-sub-category.php">Power Banks</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Mobiles & Tablets Directory Wrapper /- -->
            <!-- Consumer Electronics Directory Wrapper  -->
            <div class="directory-wrapper">
                <h2>
                    <a>Consumer Electronics</a>
                </h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main">Laptops</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Notebooks</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Macbooks</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Refurbished Laptops</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Tablet PCs</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Mini & Netbooks</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main">PC & Accessories</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Batteries & Chargers</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Internal Hard Drives</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Adapters</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Graphic Card</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">TV's</a>
                            </li>
                            <li>
                                <a href="shop-v4-filter-as-category.php">20 - 29 inches</a>
                            </li>
                            <li>
                                <a href="shop-v4-filter-as-category.php">30 - 39 inches</a>
                            </li>
                            <li>
                                <a href="shop-v4-filter-as-category.php">40 - 49 inches</a>
                            </li>
                            <li>
                                <a href="shop-v4-filter-as-category.php">50 inches and more</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main">Camera & Camcorders</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">DSLR & Hybrid Cameras</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Compact Cameras</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Security & Surveillance</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Bundle Offers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main">Audio & Amplifiers</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">MP3 Players</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Headphones & Headsets</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Portable Speakers</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Home Theater</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Hi-Fi & Stereo</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Consumer Electronics Directory Wrapper /- -->
            <!-- Books & Audible Directory Wrapper -->
            <div class="directory-wrapper">
                <h2>
                    <a>Books & Audible</a>
                </h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v1-root-category.php" class="dir-list-main">Fiction & Literature</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Fiction</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Graphic Novels & Comics</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Literature</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Manga</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Mystery & Crime</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Poetry</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Romance</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Science Fiction & Fantasy</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Thrillers</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.php">Westerns</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main">Kids & Teens</a>
                            </li>
                            <li>
                                <a href="shop-v4-filter-as-category.php">Ages 0-2</a>
                            </li>
                            <li>
                                <a href="shop-v4-filter-as-category.php">Ages 3-5</a>
                            </li>
                            <li>
                                <a href="shop-v4-filter-as-category.php">Ages 6-8</a>
                            </li>
                            <li>
                                <a href="shop-v4-filter-as-category.php">Ages 9-12</a>
                            </li>
                            <li>
                                <a href="shop-v4-filter-as-category.php">Teens</a>
                            </li>
                            <li>
                                <a href="shop-v4-filter-as-category.php">All Kids' Books</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main">Nonfiction</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Activity & Game Books</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Antiques & Collectibles</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Art, Architecture & Photography</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Bibles & Christianity</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Biography</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Business Books</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main">Nonfiction</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Computers</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Cookbooks, Food & Wine</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Crafts & Hobbies</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Current Affairs & Politics</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Diet, Health & Fitness</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Education</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Engineering</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Foreign Languages</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main">Nonfiction</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">History</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Home & Garden</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Humor</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Law</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Medicine & Nursing Books</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Music, Film & Performing Arts</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Nature</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">New Age & Alternative Beliefs</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main">Nonfiction</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Parenting & Family</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Pets</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Philosophy</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Psychology</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Reference</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Religion</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Role-Playing & Fantasy Games</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Science & Technology</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Books & Audible Directory Wrapper /- -->
            <!-- Beauty & Health Directory Wrapper -->
            <div class="directory-wrapper">
                <h2>
                    <a>Beauty & Health</a>
                </h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Make up</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Lips</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Face</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Eyes</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Accessories</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Skin Care</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Face Moisturizer, Creams & Lotions</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Face Wash & Scrubs</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Face Treatments</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Eye Treatments</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Face Masks & Packs</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Personal Care</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Hair Removal Tools</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Massage & Relaxation</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Oral Care</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Hair Care</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Hair Styling Tools</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Hair Care Treatments</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Shampoo</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Conditioner & Deep Conditioners</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Health Care</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Medical Equipments</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Sexual Health</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">OTC's Medicines</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">Vitamins & Supplements</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Fragrances</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">For Men</a>
                            </li>
                            <li>
                                <a href="shop-v2-sub-category.php">For Women</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Beauty & Health Directory Wrapper /- -->
            <!-- Furniture Home & Office Directory Wrapper -->
            <div class="directory-wrapper">
                <h2>
                    <a>Furniture Home & Office</a>
                </h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v2-sub-category.php" class="dir-list-main">Furniture</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Living Room Furniture</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Office Furniture</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Bedroom Furniture</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Kitchen & Dining Furniture</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Outdoor Furniture</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v3-sub-sub-category.php" class="dir-list-main">Bedding</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Bed Linen</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Blankets & Quilt Sets</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main">Home Decor</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Clocks</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Wall Art</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Candles & Candle Holders</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Picture Frames</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Curtain, Blinds & Shades</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main">Kitchen & Dinning</a>
                            </li>
                            <li>
                                <a>Kitchen Tools & Accessories</a>
                            </li>
                            <li>
                                <a>Tableware</a>
                            </li>
                            <li>
                                <a>Cookware</a>
                            </li>
                            <li>
                                <a>Bakeware</a>
                            </li>
                            <li>
                                <a>Grilling and BBQ Utensils</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a class="dir-list-main">Household Supplies</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Brooms, Floor Brushes & Dustpans</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Mops, Refills & Mop sets</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Sponges & Cleaning Cloths</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Pegs & Clothes Lines</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Housekeeping Dusters</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <ul class="dir-list-wrap">
                            <li>
                                <a href="shop-v3-sub-sub-category.php" class="dir-list-main">Bath</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Towels, Robes & Mats</a>
                            </li>
                            <li>
                                <a href="shop-v3-sub-sub-category.php">Bathroom Accessories</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Furniture Home & Office Directory Wrapper /- -->
        </div>
    </div>
    <!-- Store-Directory-Page /- -->
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
