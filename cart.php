<?php
    
    require "./lib/config.php";
    require ROOT_LIB_PATH."/func.php";
    require ROOT_LIB_PATH."/cart.php";

    $mo_cart = new Cart();
    $cart_list = $mo_cart->getProductListInCart();
?>

<?php
    
?>

<?=l_func_GetHeader("Giỏ hàng")?>
    <!-- Header /- -->
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Giỏ hàng của bạn</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="<?=PAGE_URL."./home.php"?>">Trang chủ</a>
                    </li>
                    <li class="is-marked">
                        <a href="./cart.php">Giỏ hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Cart-Page -->
    <div class="page-cart u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 cart-list-main">
                        <!-- Products-List-Wrapper -->
                        <div class="table-wrapper u-s-m-b-60">
                            <?php if( !empty($cart_list["products"]) ) { ?>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach( $cart_list["products"] as $product ) { ?>
                                    <tr>
                                        <td>
                                            <div class="cart-anchor-image">
                                                <a href="single-product.php">
                                                    <img src="<?=ROOT_IMAGE_URL."/product/".$product["image"]?>" alt="Product">
                                                    <h6> <?=$product["name"]?> </h6>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart-price">
                                                <?= number_format($product["price_cart"]) ?> VND
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cart-quantity">
                                                <div class="quantity">
                                                    <input type="text" class="quantity-text-field" value="<?=$product["num_cart"]?>">
                                                    <a class="plus-a" data-max="1000">&#43;</a>
                                                    <a class="minus-a" data-min="1">&#45;</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="action-wrapper">
                                                <input type="hidden" name="product_id" value="<?=$product["id"]?>" />
                                                <button class="button button-outline-secondary fas fa-sync"></button>
                                                <button class="button button-outline-secondary fas fa-trash" name="delete" onclick="removeCart(<?=$product["id"]?>)" ></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php } else { ?>
                                <div class="text-center redirect-link-wrapper u-s-p-b-25">
                                    <a class="redirect-link" href="<?=PAGE_URL."/category.php"?>">
                                        <span>Không có sản phẩm nào trong giỏ hàng, tiếp tục mua sắm!</span>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                        
                        <!-- Products-List-Wrapper /- -->
                        <!-- Coupon -->
                        <div class="coupon-continue-checkout u-s-m-b-60">
                            <!-- <div class="coupon-area">
                                <h6>Enter your coupon code if you have one.</h6>
                                <div class="coupon-field">
                                    <label class="sr-only" for="coupon-code">Apply Coupon</label>
                                    <input id="coupon-code" type="text" class="text-field" placeholder="Coupon Code">
                                    <button type="submit" class="button">Apply Coupon</button>
                                </div>
                            </div> -->
                            <div class="button-area">
                                <a href="<?=PAGE_URL."/category.php"?>" class="continue"> Tiếp tục mua sắm </a>
                                <a href="checkout.php" class="checkout"> Thanh toán </a>
                            </div>
                        </div>
                        <!-- Coupon /- -->
                    <!-- Billing -->
                    <div class="calculation u-s-m-b-60">
                        <div class="table-wrapper-2">
                            <table>
                                <thead>
                                    <!-- <tr>
                                        <th colspan="2">Cart Totals</th>
                                    </tr> -->
                                </thead>
                                <tbody>
                                    <!-- <tr>
                                        <td>
                                            <h3 class="calc-h3 u-s-m-b-0">Subtotal</h3>
                                        </td>
                                        <td>
                                            <span class="calc-text"></span>
                                        </td>
                                    </tr> -->
                                    <!-- <tr>
                                        <td>
                                            <h3 class="calc-h3 u-s-m-b-8">Shipping</h3>
                                            <div class="calc-choice-text u-s-m-b-4">Flat Rate: Not Available</div>
                                            <div class="calc-choice-text u-s-m-b-4">Free Shipping: Not Available</div>
                                            <a data-toggle="collapse" href="#shipping-calculation" class="calc-anchor u-s-m-b-4">Calculate Shipping
                                            </a>
                                            <div class="collapse" id="shipping-calculation">
                                                <form>
                                                    <div class="select-country-wrapper u-s-m-b-8">
                                                        <div class="select-box-wrapper">
                                                            <label class="sr-only" for="select-country">Choose your country
                                                            </label>
                                                            <select class="select-box" id="select-country">
                                                                <option selected="selected" value="">Choose your country...
                                                                </option>
                                                                <option value="">United Kingdom (UK)</option>
                                                                <option value="">United States (US)</option>
                                                                <option value="">United Arab Emirates (UAE)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="select-state-wrapper u-s-m-b-8">
                                                        <div class="select-box-wrapper">
                                                            <label class="sr-only" for="select-state">Choose your state
                                                            </label>
                                                            <select class="select-box" id="select-state">
                                                                <option selected="selected" value="">Choose your state...
                                                                </option>
                                                                <option value="">Alabama</option>
                                                                <option value="">Alaska</option>
                                                                <option value="">Arizona</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="town-city-div u-s-m-b-8">
                                                        <label class="sr-only" for="town-city"></label>
                                                        <input type="text" id="town-city" class="text-field" placeholder="Town / City">
                                                    </div>
                                                    <div class="postal-code-div u-s-m-b-8">
                                                        <label class="sr-only" for="postal-code"></label>
                                                        <input type="text" id="postal-code" class="text-field" placeholder="Postcode / Zip">
                                                    </div>
                                                    <div class="update-totals-div u-s-m-b-8">
                                                        <button class="button button-outline-platinum">Update Totals</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3 class="calc-h3 u-s-m-b-0" id="tax-heading">Tax</h3>
                                            <span> (estimated for your country)</span>
                                        </td>
                                        <td>
                                            <span class="calc-text">$0.00</span>
                                        </td>
                                    </tr> -->
                                    <tr>
                                        <td>
                                            <h3 class="calc-h3 u-s-m-b-0">Tổng tiền</h3>
                                        </td>
                                        <td>
                                            <span class="calc-text"><?=number_format($cart_list["total_price"])?> <b> VND</b></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Billing /- -->
                </div>
            </div>
        </div>
    </div>
    <?=l_func_getFooter( )?>