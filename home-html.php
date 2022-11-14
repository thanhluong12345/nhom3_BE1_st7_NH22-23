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

<body class="has-overflow">
    <div class="loader">
        <div class="loader-progress">
            <div></div>
        </div>
    </div>
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
                            <form action="" class="form-searchbox">
                                <label class="sr-only" for="search-landscape">Search</label>
                                <input id="search-landscape" type="text" class="text-field" placeholder="Search everything">
                                <div class="select-box-position">
                                    <div class="select-box-wrapper">
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
                                <img src="public/images/product/product@1x.jpg">
                                <span class="mini-item-name">Casual Hoodie Full Cotton</span>
                                <span class="mini-item-price">$55.00</span>
                                <span class="mini-item-quantity"> x 1 </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="single-product.php">
                                <img src="public/images/product/product@1x.jpg">
                                <span class="mini-item-name">Black Rock Dress with High Jewelery Necklace</span>
                                <span class="mini-item-price">$55.00</span>
                                <span class="mini-item-quantity"> x 1 </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="single-product.php">
                                <img src="public/images/product/product@1x.jpg">
                                <span class="mini-item-name">Xiaomi Note 2 Black Color</span>
                                <span class="mini-item-price">$55.00</span>
                                <span class="mini-item-quantity"> x 1 </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="single-product.php">
                                <img src="public/images/product/product@1x.jpg">
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
                            <div class="v-menu">
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
                                                            <img src="public/images/banners/mega-3.png" class="img-fluid">
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
        <!-- Header /- -->
        <!-- Main-Slider -->
        <section>
            <div class="full-layer-slider">
                <div class="slider-main owl-carousel">
                    <div class="bg-image one">
                        <div class="slide-content slide-animation">
                            <h1>Casual Clothing</h1>
                            <h2>lifestyle / clothing / hype</h2>
                        </div>
                    </div>
                    <div class="bg-image two">
                        <div class="slide-content-2 slide-animation">
                            <h2 class="slide-2-h2-a">Hiking</h2>
                            <h2 class="slide-2-h2-b">Collection</h2>
                            <h1>2018</h1>
                        </div>
                    </div>
                    <div class="bg-image three">
                        <div class="slide-content slide-animation">
                            <h1>Tech
                                <span style="color:#333">Deals</span>
                            </h1>
                            <h2 style="color:#333"># shopping</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main-Slider /- -->
        <!-- Banner-Layer -->
        <section class="banner-layer">
            <div class="container">
                <div class="image-banner">
                    <a href="shop-v1-root-category.php" class="mx-auto banner-hover effect-dark-opacity">
                        <img class="img-fluid" src="public/images/banners/bannerlayer-1.jpg" alt="Winter Season Banner">
                    </a>
                </div>
            </div>
        </section>
        <!-- Banner-Layer /- -->
        <!-- Men-Clothing -->
        <section class="section-maker">
            <div class="container">
                <div class="sec-maker-header text-center">
                    <h3 class="sec-maker-h3">MEN'S CLOTHING</h3>
                    <ul class="nav tab-nav-style-1-a justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#men-latest-products">Latest Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#men-best-selling-products">Best Selling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#men-top-rating-products">Top Rating</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#men-featured-products">Featured Products</a>
                        </li>
                    </ul>
                </div>
                <div class="wrapper-content">
                    <div class="outer-area-tab">
                        <div class="tab-content">
                            <div class="tab-pane active show fade" id="men-latest-products">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                    <a href="single-product.php">Casual Hoodie Full Cotton</a>
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
                                        <div class="tag new">
                                            <span>NEW</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="shop-v3-sub-sub-category.php">T-Shirts</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Mischka Plain Men T-Shirt</a>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="shop-v4-filter-as-category.php">T-Shirts</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Black Bean Plain Men T-Shirt</a>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="shop-v2-sub-category.php">Bottoms</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Jeans</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Regular Rock Blue Men Jean</a>
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
                                        <div class="tag new">
                                            <span>NEW</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="shop-v3-sub-sub-category.php">Suits</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Black Maire Full Men Suit</a>
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
                                        <div class="tag sale">
                                            <span>SALE</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                    <a href="single-product.php">Woodsmoke Rookie Parka Jacket</a>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="shop-v2-sub-category.php">Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Ties</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Blue Zodiac Boxes Reg Tie
                                                    </a>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="shop-v2-sub-category.php">Bottoms</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Shoes</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Zambezi Carved Leather Business Casual Shoes
                                                    </a>
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
                                        <div class="tag discount">
                                            <span>-15%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="men-best-selling-products">
                                <!-- Product Not Found -->
                                <div class="product-not-found">
                                    <div class="not-found">
                                        <h1>SORRY!</h1>
                                        <h6>There is not any product in specific catalogue.</h6>
                                    </div>
                                </div>
                                <!-- Product Not Found /- -->
                            </div>
                            <div class="tab-pane fade" id="men-top-rating-products">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="shop-v3-sub-sub-category.php">Suits</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Black Maire Full Men Suit</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
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
                                        <div class="tag sale">
                                            <span>SALE</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                    <a href="single-product.php">Woodsmoke Rookie Parka Jacket</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="shop-v2-sub-category.php">Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Ties</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Blue Zodiac Boxes Reg Tie</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
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
                                                        <a href="shop-v2-sub-category.php">Bottoms</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Shoes</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Zambezi Carved Leather Business Casual Shoes
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
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
                                        <div class="tag discount">
                                            <span>-15%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="men-featured-products">
                                <!-- Product Not Found -->
                                <div class="product-not-found">
                                    <div class="not-found">
                                        <h1>SORRY!</h1>
                                        <h6>There is not any product in specific catalogue.</h6>
                                    </div>
                                </div>
                                <!-- Product Not Found /- -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Men-Clothing-Timing-Section -->
        <section class="section-maker">
            <div class="container">
                <div class="sec-maker-header text-center">
                    <span class="sec-maker-span-text">Men's Clothing</span>
                    <h3 class="sec-maker-h3 u-s-m-b-22">Hot Deals</h3>
                    <span class="sec-maker-span-text">Ends in</span>
                    <!-- Timing-Box -->
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
                    <!-- Timing-Box /- -->
                </div>
                <!-- Carousel -->
                <div class="products-slider owl-carousel" data-item="4">
                    <div class="item">
                        <div class="image-container">
                            <a class="item-img-wrapper-link" href="single-product.php">
                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
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
                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
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
                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
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
                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
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
                <!-- Carousel /- -->
            </div>
        </section>
        <!-- Men-Clothing-Timing-Section /- -->
        <!-- Banner-Image & View-more -->
        <div class="banner-image-view-more">
            <div class="container">
                <div class="image-banner u-s-m-y-40">
                    <a href="shop-v1-root-category.php" class="mx-auto banner-hover effect-dark-opacity">
                        <img class="img-fluid" src="public/images/banners/ban-men.jpg">
                    </a>
                </div>
                <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                    <a class="redirect-link" href="store-directory.php">
                        <span>View more on this category</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Banner-Image & View-more /- -->
        <!-- Men-Clothing /- -->
        <!-- Women-Clothing -->
        <section class="section-maker">
            <div class="container">
                <div class="sec-maker-header text-center">
                    <h3 class="sec-maker-h3">WOMEN'S CLOTHING</h3>
                    <ul class="nav tab-nav-style-1-a justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#women-latest-products">Latest Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#women-best-selling-products">Best Selling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#women-top-rating-products">Top Rating</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#women-featured-products">Featured Products</a>
                        </li>
                    </ul>
                </div>
                <div class="wrapper-content">
                    <div class="outer-area-tab">
                        <div class="tab-content">
                            <div class="tab-pane active show fade" id="women-latest-products">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">White Solitude Dress with mid heel & Bag
                                                    </a>
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
                                        <div class="tag new">
                                            <span>NEW</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Black Rock Dress with High Jewelery Necklace
                                                    </a>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Haiti Full Dress with Boots & Jacket</a>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Black & White Wrap Dress with High Jewelery Necklace</a>
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
                                        <div class="tag new">
                                            <span>NEW</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Grey Nickel Special Occasion Dress</a>
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
                                        <div class="tag sale">
                                            <span>SALE</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Red Carmine Winter Special Occasion Dress
                                                    </a>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">Bottoms</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Shoes</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Wax Flower with Corn Silk Heel
                                                    </a>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">Intimates</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Bras</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Red Wild Bra
                                                    </a>
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
                                        <div class="tag discount">
                                            <span>-15%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="women-best-selling-products">
                                <!-- Product Not Found -->
                                <div class="product-not-found">
                                    <div class="not-found">
                                        <h1>SORRY!</h1>
                                        <h6>There is not any product in specific catalogue.</h6>
                                    </div>
                                </div>
                                <!-- Product Not Found /- -->
                            </div>
                            <div class="tab-pane fade" id="women-top-rating-products">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Grey Nickel Special Occasion Dress</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
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
                                        <div class="tag sale">
                                            <span>SALE</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Dresses</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Red Carmine Winter Special Occasion Dress
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">Bottoms</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Shoes</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Wax Flower with Corn Silk Heel</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Women's</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">Intimates</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">Bras</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Red Wild Bra</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
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
                                        <div class="tag discount">
                                            <span>-15%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="women-featured-products">
                                <!-- Product Not Found -->
                                <div class="product-not-found">
                                    <div class="not-found">
                                        <h1>SORRY!</h1>
                                        <h6>There is not any product in specific catalogue.</h6>
                                    </div>
                                </div>
                                <!-- Product Not Found /- -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                    <a class="redirect-link" href="store-directory.php">
                        <span>View more on this category</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Women-Clothing /- -->
        <!-- Toys-Hobbies-&-Robots -->
        <section class="section-maker">
            <div class="container">
                <div class="sec-maker-header text-center">
                    <h3 class="sec-maker-h3">Toys Hobbies & Robots</h3>
                    <ul class="nav tab-nav-style-1-a justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#toys-latest-products">Latest Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#toys-best-selling-products">Best Selling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#toys-top-rating-products">Top Rating</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#toys-featured-products">Featured Products</a>
                        </li>
                    </ul>
                </div>
                <div class="wrapper-content">
                    <div class="outer-area-tab">
                        <div class="tab-content">
                            <div class="tab-pane active show fade" id="toys-latest-products">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">RC Helicopte</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">RC Helicopter 6-Cell</a>
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
                                        <div class="tag new">
                                            <span>NEW</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">DJI Phantom with 1080p Camera</a>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">DJI Inspire with 1080p Camera</a>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">DJI Phantom with Battery Lights</a>
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
                                        <div class="tag new">
                                            <span>NEW</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">DJI Mavic Air
                                                    </a>
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
                                        <div class="tag sale">
                                            <span>SALE</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">U45 Raven RC Quadcopter
                                                    </a>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">DJI Inspire 1 with 1080p Camera
                                                    </a>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">DJI Inspire 1 with 360° Camera
                                                    </a>
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
                                        <div class="tag discount">
                                            <span>-15%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="toys-best-selling-products">
                                <!-- Product Not Found -->
                                <div class="product-not-found">
                                    <div class="not-found">
                                        <h1>SORRY!</h1>
                                        <h6>There is not any product in specific catalogue.</h6>
                                    </div>
                                </div>
                                <!-- Product Not Found /- -->
                            </div>
                            <div class="tab-pane fade" id="toys-top-rating-products">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">DJI Mavic Air
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
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
                                        <div class="tag sale">
                                            <span>SALE</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">U45 Raven RC Quadcopter
                                                    </a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">DJI Inspire 1 with 1080p Camera</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li class="has-separator">
                                                        <a href="shop-v1-root-category.php">Toys Drones</a>
                                                    </li>
                                                    <li class="has-separator">
                                                        <a href="shop-v2-sub-category.php">RC Toys & Hobbies</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-v3-sub-sub-category.php">RC Drone</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">DJI Inspire 1 with 360° Camera</a>
                                                </h6>
                                                <div class="item-stars">
                                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                                        <span style='width:67px'></span>
                                                    </div>
                                                    <span>(23)</span>
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
                                        <div class="tag discount">
                                            <span>-15%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="toys-featured-products">
                                <!-- Product Not Found -->
                                <div class="product-not-found">
                                    <div class="not-found">
                                        <h1>SORRY!</h1>
                                        <h6>There is not any product in specific catalogue.</h6>
                                    </div>
                                </div>
                                <!-- Product Not Found /- -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                    <a class="redirect-link" href="store-directory.php">
                        <span>View more on this category</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Toys-Hobbies-&-Robots /- -->
        <!-- Mobiles-&-Tablets -->
        <section class="section-maker">
            <div class="container">
                <div class="sec-maker-header text-center">
                    <h3 class="sec-maker-h3">Mobiles & Tablets</h3>
                    <ul class="nav tab-nav-style-1-a justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#mobiles-latest-products">Latest Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#mobiles-best-selling-products">Best Selling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#mobiles-top-rating-products">Top Rating</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#mobiles-featured-products">Featured Products</a>
                        </li>
                    </ul>
                    <span class="sec-maker-span-text u-s-m-b-8 d-block">Select products in specific category</span>
                </div>
                <div class="wrapper-content">
                    <div class="outer-area-tab">
                        <div class="tab-content">
                            <div class="tab-pane active show fade" id="mobiles-latest-products">
                                <div class="row align-items-center">
                                    <div class="col-lg-1 col-md-12">
                                        <ul class="nav tab-nav-style-2-a">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#smart-phones" title="Smart Phones">
                                                    <i class="ion ion-ios-phone-portrait"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tablets" title="Tablets">
                                                    <i class="ion ion-md-phone-landscape"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#smart-watches" title="Smart Watches">
                                                    <i class="ion ion-md-watch"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#device-accessories" title="Device Accessories">
                                                    <i class="ion ion-md-settings"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#power-banks" title="Power Banks">
                                                    <i class="ion ion-md-battery-charging"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-11 col-md-12">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="smart-phones">
                                                <div class="specific-category-slider owl-carousel" data-item="3">
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">Smartphones</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">Xiaomi Note 2 Black Color
                                                                    </a>
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
                                                        <div class="tag new">
                                                            <span>NEW</span>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">Smartphones</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">Iphone X Silver Color</a>
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
                                                    </div>
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">Smartphones</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">Samsung S7 Green Metallic Color
                                                                    </a>
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
                                                        <div class="tag sale">
                                                            <span>SALE</span>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">Smartphones</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">Sony Xperia 3 Black Color
                                                                    </a>
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
                                                        <div class="tag discount">
                                                            <span>-15%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tablets">
                                                <!-- Product Not Found -->
                                                <div class="product-not-found">
                                                    <div class="not-found">
                                                        <h1>SORRY!</h1>
                                                        <h6>There is not any product in specific catalogue.</h6>
                                                    </div>
                                                </div>
                                                <!-- Product Not Found /- -->
                                            </div>
                                            <div class="tab-pane fade" id="smart-watches">
                                                <div class="specific-category-slider owl-carousel" data-item="3">
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">Smartwatches
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">Outatime Mix Smartwatch
                                                                    </a>
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
                                                        <div class="tag new">
                                                            <span>NEW</span>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">Smartwatches
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">Mombo Full Wrist Smartwatch
                                                                    </a>
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
                                                    </div>
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">Smartwatches
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">Apollo Sport Think Smartwatch
                                                                    </a>
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
                                                        <div class="tag sale">
                                                            <span>SALE</span>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Mobiles & Tablets
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">Smartwatches
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">Rhythm Pulse Smartwatch
                                                                    </a>
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
                                                        <div class="tag discount">
                                                            <span>-15%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="device-accessories">
                                                <!-- Product Not Found -->
                                                <div class="product-not-found">
                                                    <div class="not-found">
                                                        <h1>SORRY!</h1>
                                                        <h6>There is not any product in specific catalogue.</h6>
                                                    </div>
                                                </div>
                                                <!-- Product Not Found /- -->
                                            </div>
                                            <div class="tab-pane fade" id="power-banks">
                                                <!-- Product Not Found -->
                                                <div class="product-not-found">
                                                    <div class="not-found">
                                                        <h1>SORRY!</h1>
                                                        <h6>There is not any product in specific catalogue.</h6>
                                                    </div>
                                                </div>
                                                <!-- Product Not Found /- -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="mobiles-best-selling-products">
                                <!-- Product Not Found -->
                                <div class="product-not-found">
                                    <div class="not-found">
                                        <h1>SORRY!</h1>
                                        <h6>There is not any product in specific catalogue.</h6>
                                    </div>
                                </div>
                                <!-- Product Not Found /- -->
                            </div>
                            <div class="tab-pane fade" id="mobiles-top-rating-products">
                                <!-- Product Not Found -->
                                <div class="product-not-found">
                                    <div class="not-found">
                                        <h1>SORRY!</h1>
                                        <h6>There is not any product in specific catalogue.</h6>
                                    </div>
                                </div>
                                <!-- Product Not Found /- -->
                            </div>
                            <div class="tab-pane fade" id="mobiles-featured-products">
                                <!-- Product Not Found -->
                                <div class="product-not-found">
                                    <div class="not-found">
                                        <h1>SORRY!</h1>
                                        <h6>There is not any product in specific catalogue.</h6>
                                    </div>
                                </div>
                                <!-- Product Not Found /- -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                    <a class="redirect-link" href="store-directory.php">
                        <span>View more on this category</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Mobiles-&-Tablets /- -->
        <!-- Consumer-Electronics -->
        <section class="section-maker">
            <div class="container">
                <div class="sec-maker-header text-center">
                    <h3 class="sec-maker-h3">Consumer Electronics</h3>
                    <ul class="nav tab-nav-style-1-a justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#consumer-latest-products">Latest Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#consumer-best-selling-products">Best Selling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#consumer-top-rating-products">Top Rating</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#consumer-featured-products">Featured Products</a>
                        </li>
                    </ul>
                    <span class="sec-maker-span-text u-s-m-b-8 d-block">Select products in specific category</span>
                </div>
                <div class="wrapper-content">
                    <div class="outer-area-tab">
                        <div class="tab-content">
                            <div class="tab-pane active show fade" id="consumer-latest-products">
                                <div class="row align-items-center">
                                    <div class="col-lg-1 col-md-12">
                                        <ul class="nav tab-nav-style-2-a">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#laptops" title="Laptops">
                                                    <i class="ion ion-md-laptop"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#pc-and-accessories" title="PC & Accessories">
                                                    <i class="ion ion-ios-settings"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tv" title="TV's">
                                                    <i class="ion ion-md-tv"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#cam-corder" title="Camera & Camcorders">
                                                    <i class="ion ion-md-camera"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#audio-amplifiers" title="Audio & Amplifiers">
                                                    <i class="ion ion-md-microphone"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-11 col-md-12">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="laptops">
                                                <div class="specific-category-slider owl-carousel" data-item="3">
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">Laptops</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">HP Pavilion 15 Notebook
                                                                    </a>
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
                                                        <div class="tag new">
                                                            <span>NEW</span>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">Laptops</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">Apple Macbook Pro 2017</a>
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
                                                    </div>
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">Laptops</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">Dell Inspiron 15</a>
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
                                                        <div class="tag sale">
                                                            <span>SALE</span>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">Laptops</a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">Dell Inspiron 1525</a>
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
                                                        <div class="tag discount">
                                                            <span>-15%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pc-and-accessories">
                                                <!-- Product Not Found -->
                                                <div class="product-not-found">
                                                    <div class="not-found">
                                                        <h1>SORRY!</h1>
                                                        <h6>There is not any product in specific catalogue.</h6>
                                                    </div>
                                                </div>
                                                <!-- Product Not Found /- -->
                                            </div>
                                            <div class="tab-pane fade" id="tv">
                                                <div class="specific-category-slider owl-carousel" data-item="3">
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">TV/LCD/LED
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">Hisense 4k LED TV</a>
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
                                                        <div class="tag new">
                                                            <span>NEW</span>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">TV/LCD/LED
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">TCL 4k LED TV</a>
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
                                                    </div>
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">TV/LCD/LED
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">Sony 4k LED TV
                                                                    </a>
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
                                                        <div class="tag sale">
                                                            <span>SALE</span>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="image-container">
                                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                                            </a>
                                                            <div class="item-action-behaviors">
                                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist
                                                                </a>
                                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="what-product-is">
                                                                <ul class="bread-crumb">
                                                                    <li class="has-separator">
                                                                        <a href="shop-v1-root-category.php">Consumer Electronics
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-v2-sub-category.php">TV/LCD/LED
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <h6 class="item-title">
                                                                    <a href="single-product.php">China Petrei 4k LED TV</a>
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
                                                        <div class="tag discount">
                                                            <span>-15%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="cam-corder">
                                                <!-- Product Not Found -->
                                                <div class="product-not-found">
                                                    <div class="not-found">
                                                        <h1>SORRY!</h1>
                                                        <h6>There is not any product in specific catalogue.</h6>
                                                    </div>
                                                </div>
                                                <!-- Product Not Found /- -->
                                            </div>
                                            <div class="tab-pane fade" id="audio-amplifiers">
                                                <!-- Product Not Found -->
                                                <div class="product-not-found">
                                                    <div class="not-found">
                                                        <h1>SORRY!</h1>
                                                        <h6>There is not any product in specific catalogue.</h6>
                                                    </div>
                                                </div>
                                                <!-- Product Not Found /- -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="consumer-best-selling-products">
                                <!-- Product Not Found -->
                                <div class="product-not-found">
                                    <div class="not-found">
                                        <h1>SORRY!</h1>
                                        <h6>There is not any product in specific catalogue.</h6>
                                    </div>
                                </div>
                                <!-- Product Not Found /- -->
                            </div>
                            <div class="tab-pane fade" id="consumer-top-rating-products">
                                <!-- Product Not Found -->
                                <div class="product-not-found">
                                    <div class="not-found">
                                        <h1>SORRY!</h1>
                                        <h6>There is not any product in specific catalogue.</h6>
                                    </div>
                                </div>
                                <!-- Product Not Found /- -->
                            </div>
                            <div class="tab-pane fade" id="consumer-featured-products">
                                <!-- Product Not Found -->
                                <div class="product-not-found">
                                    <div class="not-found">
                                        <h1>SORRY!</h1>
                                        <h6>There is not any product in specific catalogue.</h6>
                                    </div>
                                </div>
                                <!-- Product Not Found /- -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                    <a class="redirect-link" href="store-directory.php">
                        <span>View more on this category</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Consumer-Electronics /- -->
        <!-- Books-&-Audible -->
        <section class="section-maker">
            <div class="container">
                <div class="sec-maker-header text-center">
                    <h3 class="sec-maker-h3">Books & Audible</h3>
                    <ul class="nav tab-nav-style-1-a justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#books-latest-products">Latest Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#books-best-selling-products">Best Selling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#books-top-rating-products">Top Rating</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#books-featured-products">Featured Products</a>
                        </li>
                    </ul>
                </div>
                <div class="wrapper-content">
                    <div class="outer-area-tab">
                        <div class="tab-content">
                            <div class="tab-pane active show fade" id="books-latest-products">
                                <div class="products-slider owl-carousel" data-item="4">
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.php">Books</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">JavaScript The Definitive Guide by David Flanagan
                                                    </a>
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
                                        <div class="tag new">
                                            <span>NEW</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.php">Books</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Eloquent JavaScript by Marijn Haverbeke
                                                    </a>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.php">Books</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">Secret of the JavaScript Ninja by Bear Bibeault & John Resig
                                                    </a>
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
                                    </div>
                                    <div class="item">
                                        <div class="image-container">
                                            <a class="item-img-wrapper-link" href="single-product.php">
                                                <img class="img-fluid" src="public/images/product/product@3x.jpg">
                                            </a>
                                            <div class="item-action-behaviors">
                                                <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
                                                </a>
                                                <a class="item-mail" href="javascript:void(0)">Mail</a>
                                                <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                                <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="item-content">
                                            <div class="what-product-is">
                                                <ul class="bread-crumb">
                                                    <li>
                                                        <a href="shop-v1-root-category.php">Books</a>
                                                    </li>
                                                </ul>
                                                <h6 class="item-title">
                                                    <a href="single-product.php">JavaScript The Good Parts by Douglas Crockford
                                                    </a>
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
                                        <div class="tag new">
                                            <span>NEW</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="books-best-selling-products">
                                <!-- Product Not Found -->
                                <div class="product-not-found">
                                    <div class="not-found">
                                        <h1>SORRY!</h1>
                                        <h6>There is not any product in specific catalogue.</h6>
                                    </div>
                                </div>
                                <!-- Product Not Found /- -->
                            </div>
                            <div class="tab-pane fade" id="books-top-rating-products">
                                <!-- Product Not Found -->
                                <div class="product-not-found">
                                    <div class="not-found">
                                        <h1>SORRY!</h1>
                                        <h6>There is not any product in specific catalogue.</h6>
                                    </div>
                                </div>
                                <!-- Product Not Found /- -->
                            </div>
                            <div class="tab-pane fade" id="books-featured-products">
                                <!-- Product Not Found -->
                                <div class="product-not-found">
                                    <div class="not-found">
                                        <h1>SORRY!</h1>
                                        <h6>There is not any product in specific catalogue.</h6>
                                    </div>
                                </div>
                                <!-- Product Not Found /- -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
                    <a class="redirect-link" href="store-directory.php">
                        <span>View more on this category</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Books-&-Audible /- -->
        <!-- Continue-Link -->
        <div class="continue-link-wrapper u-s-p-b-80">
            <a class="continue-link" href="store-directory.php" title="View all products on site">
                <i class="ion ion-ios-more"></i>
            </a>
        </div>
        <!-- Continue-Link /- -->
        <!-- Brand-Slider -->
        <section class="brand-slider u-s-p-b-80">
            <div class="container">
                <div class="brand-slider-content owl-carousel" data-item="5">
                    <div class="brand-pic">
                        <a href="#">
                            <img src="public/images/brand-logos/b1.png">
                        </a>
                    </div>
                    <div class="brand-pic">
                        <a href="#">
                            <img src="public/images/brand-logos/b1.png">
                        </a>
                    </div>
                    <div class="brand-pic">
                        <a href="#">
                            <img src="public/images/brand-logos/b1.png">
                        </a>
                    </div>
                    <div class="brand-pic">
                        <a href="#">
                            <img src="public/images/brand-logos/b1.png">
                        </a>
                    </div>
                    <div class="brand-pic">
                        <a href="#">
                            <img src="public/images/brand-logos/b1.png">
                        </a>
                    </div>
                    <div class="brand-pic">
                        <a href="#">
                            <img src="public/images/brand-logos/b1.png">
                        </a>
                    </div>
                </div>
            </div>
        </section>
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
                    <form action="" class="newsletter-form">
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
                <option id="compute-option"></option>
            </select>
        </div>
        <!-- Dummy Selectbox /- -->
        <!-- Responsive-Search -->
        <div class="responsive-search-wrapper">
            <button type="button" class="button ion ion-md-close" id="responsive-search-close-button"></button>
            <div class="responsive-search-container">
                <div class="container">
                    <p>Start typing and press Enter to search</p>
                    <form action="" class="responsive-search-form">
                        <label class="sr-only" for="search-text">Search</label>
                        <input id="search-text" type="text" class="responsive-search-field" placeholder="PLEASE SEARCH">
                        <i class="fas fa-search"></i>
                    </form>
                </div>
            </div>
        </div>
        <!-- Responsive-Search /- -->
        <!-- Newsletter-Modal -->
        <div id="newsletter-modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="button dismiss-button ion ion-ios-close" data-dismiss="modal"></button>
                    <div class="modal-body u-s-p-x-0">
                        <div class="row align-items-center u-s-m-x-0">
                            <div class="col-lg-6 col-md-6 col-sm-12 u-s-p-x-0">
                                <div class="newsletter-image">
                                    <a href="shop-v1-root-category.php" class="banner-hover effect-dark-opacity">
                                        <img class="img-fluid" src="public/images/banners/newsletter-1.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="newsletter-wrapper">
                                    <h1>New to
                                        <span>Groover</span> ?
                                        <br>Subscribe Newsletter</h1>
                                    <h5>Get latest product update...</h5>
                                    <form>
                                        <div class="u-s-m-b-35">
                                            <input type="text" class="newsletter-textfield" placeholder="Enter Your Email">
                                        </div>
                                        <div class="u-s-m-b-35">
                                            <button class="button button-primary d-block w-100">Subscribe</button>
                                        </div>
                                    </form>
                                    <h6>Be the first for getting special deals and offers, Send directly to your inbox.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter-Modal /- -->
        <!-- Quick-view-Modal -->
        <div id="quick-view" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="button dismiss-button ion ion-ios-close" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <!-- Product-zoom-area -->
                                <div class="zoom-area">
                                    <img id="zoom-pro-quick-view" class="img-fluid" src="public/images/product/product@4x.jpg" data-zoom-image="public/images/product/product@4x.jpg">
                                    <div id="gallery-quick-view" class="u-s-m-t-10">
                                        <a class="active" data-image="public/images/product/product@4x.jpg" data-zoom-image="public/images/product/product@4x.jpg">
                                            <img src="public/images/product/product@2x.jpg">
                                        </a>
                                        <a data-image="public/images/product/product@4x.jpg" data-zoom-image="public/images/product/product@4x.jpg">
                                            <img src="public/images/product/product@2x.jpg">
                                        </a>
                                        <a data-image="public/images/product/product@4x.jpg" data-zoom-image="public/images/product/product@4x.jpg">
                                            <img src="public/images/product/product@2x.jpg">
                                        </a>
                                        <a data-image="public/images/product/product@4x.jpg" data-zoom-image="public/images/product/product@4x.jpg">
                                            <img src="public/images/product/product@2x.jpg">
                                        </a>
                                        <a data-image="public/images/product/product@4x.jpg" data-zoom-image="public/images/product/product@4x.jpg">
                                            <img src="public/images/product/product@2x.jpg">
                                        </a>
                                        <a data-image="public/images/product/product@4x.jpg" data-zoom-image="public/images/product/product@4x.jpg">
                                            <img src="public/images/product/product@2x.jpg">
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
                                                <a href="single-product.php">Casual Hoodie Full Cotton</a>
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
                                        <p>This hoodie is full cotton. It includes a muff sewn onto the lower front, and (usually) a drawstring to adjust the hood opening. Throughout the U.S., it is common for middle-school, high-school, and college students to wear this sweatshirts—with or without hoods—that display their respective school names or mascots across the chest, either as part of a uniform or personal preference.
                                        </p>
                                    </div>
                                    <div class="section-3-price-original-discount u-s-p-y-14">
                                        <div class="price">
                                            <h4>$55.00</h4>
                                        </div>
                                        <div class="original-price">
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
                                        </div>
                                    </div>
                                    <div class="section-4-sku-information u-s-p-y-14">
                                        <h6 class="information-heading u-s-m-b-8">Sku Information:</h6>
                                        <div class="availability">
                                            <span>Availability:</span>
                                            <span>In Stock</span>
                                        </div>
                                        <div class="left">
                                            <span>Only:</span>
                                            <span>50 left</span>
                                        </div>
                                    </div>
                                    <div class="section-5-product-variants u-s-p-y-14">
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
                                    </div>
                                    <div class="section-6-social-media-quantity-actions u-s-p-y-14">
                                        <form action="#" class="post-form">
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
                                                    <input type="text" class="quantity-text-field" value="1">
                                                    <a class="plus-a" data-max="1000">&#43;</a>
                                                    <a class="minus-a" data-min="1">&#45;</a>
                                                </div>
                                            </div>
                                            <div>
                                                <button class="button button-outline-secondary" type="submit">Add to cart</button>
                                                <button class="button button-outline-secondary far fa-heart u-s-m-l-6"></button>
                                                <button class="button button-outline-secondary far fa-envelope u-s-m-l-6"></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Product-details /- -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick-view-Modal /- -->
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
