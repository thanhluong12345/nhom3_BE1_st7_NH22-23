<?php
    require "./lib/config.php";
    require ROOT_LIB_PATH."/func.php";
    require ROOT_LIB_PATH."/cart.php";
    require ROOT_MODEL_PATH."/db.php";
    require ROOT_MODEL_PATH."/user.php";
    require ROOT_MODEL_PATH."/user_member.php";

    $mo_cart = new Cart();
    $cart_list = $mo_cart->getProductListInCart();

    $mo_member = new UserMember();
    $user_id = $mo_member->getUserId();
    $your_profile = $mo_member->getProfile( $user_id );
?>

<?=l_func_GetHeader("Thanh toán")?>
    <!-- Header /- -->
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Thanh toán</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="<?=PAGE_URL."/home.php"?>">Trang chủ</a>
                    </li>
                    <li class="is-marked">
                        <a href="<?=PAGE_URL."/checkout.php"?>">Thanh toán</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php if( !($mo_member->checkLogin()) ) { ?>
        <div class="text-center redirect-link-wrapper u-s-p-t-25">
            <a class="redirect-link" href="<?=PAGE_URL."/account.php"?>">
                <b>Vui lòng đăng nhập để tiếp tục đặt hàng!</b>
            </a>
        </div>
    <?php } ?>

    <!-- Page Introduction Wrapper /- -->
    <!-- Checkout-Page -->
    <div class="page-checkout u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- Second Accordion /- -->
                    <form action="<?=ACTION_PAGE_URL."/conf_payment.php"?>" method="post">
                        <div class="row">
                            <!-- Billing-&-Shipping-Details -->
                            <div class="col-lg-6">
                                <h4 class="section-h4">Thông tin thanh toán</h4>
                                <!-- Form-Fields -->
                                
                                <?php if( isset($your_profile["active_flg"]) && $your_profile["active_flg"] <= 0 ) { ?>
                                <div class="u-s-m-b-13 sec-maker-span-text mid-footer-wrapper">
                                    <h6> Hiện tại bạn chưa thể đặt hàng </h6>
                                    <a href="<?=PAGE_URL."/profile.php"?>" class="sec-maker-span-text"> Vui lòng cập nhật thông tin cá nhân ở đây </a>
                                </div>
                                <?php } ?>

                                <?php if( isset($your_profile["active_flg"]) && $your_profile["active_flg"] >= 2 ) { ?>
                                <div class="u-s-m-b-24">
                                    <input type="checkbox" class="check-box" name="address_default" id="address_default">
                                    <label class="label-text" for="address_default"><b>Sử dụng địa chỉ trong profile của tôi</b></label>
                                </div>
                                <?php } ?>
                                <div class="u-s-m-b-13">
                                    <label for="town-city">Tỉnh/Thành phố
                                    </label>
                                    <input type="text" name="city"  id="town-city" class="text-field">
                                    <p class="error"><?=$_SESSION["errors"]["city"]??""?></p>
                                </div>
                                <div class="u-s-m-b-13">
                                    <label for="select-state">Quận/Huyện 
                                    </label>
                                    <input type="text" name="district" id="req-st-district" class="text-field" placeholder="">
                                    <p class="error"><?=$_SESSION["errors"]["district"]??""?></p>
                                </div>
                                <div class="street-address u-s-m-b-13">
                                    <label for="req-st-address">Xã/Phường + Địa chỉ số nhà
                                    </label>
                                    <input type="text" name="street" id="req-st-address" class="text-field" placeholder="">
                                    <p class="error"><?=$_SESSION["errors"]["street"]??""?></p>
                                </div>
                                
                                <!-- <div class="u-s-m-b-30">
                                    <input type="checkbox" class="check-box" id="create-account">
                                    <label class="label-text" for="create-account">Create Account</label>
                                </div> -->
                                <!-- Form-Fields /- -->
                                <!-- <h4 class="section-h4">Shipping Details</h4>
                                <div class="u-s-m-b-24">
                                    <input type="checkbox" class="check-box" id="ship-to-different-address" data-toggle="collapse" data-target="#showdifferent">
                                    <label class="label-text" for="ship-to-different-address">Ship to a different address?</label>
                                </div>
                                <div class="collapse" id="showdifferent">
                                    <div class="group-inline u-s-m-b-13">
                                        <div class="group-1 u-s-p-r-16">
                                            <label for="first-name-extra">First Name
                                                <span class="astk">*</span>
                                            </label>
                                            <input type="text" id="first-name-extra" class="text-field">
                                        </div>
                                        <div class="group-2">
                                            <label for="last-name-extra">Last Name
                                                <span class="astk">*</span>
                                            </label>
                                            <input type="text" id="last-name-extra" class="text-field">
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-13">
                                        <label for="select-country-extra">Country
                                            <span class="astk">*</span>
                                        </label>
                                        <div class="select-box-wrapper">
                                            <select class="select-box" id="select-country-extra">
                                                <option selected="selected" value="">Choose your country...</option>
                                                <option value="">United Kingdom (UK)</option>
                                                <option value="">United States (US)</option>
                                                <option value="">United Arab Emirates (UAE)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="street-address u-s-m-b-13">
                                        <label for="req-st-address-extra">Street Address
                                            <span class="astk">*</span>
                                        </label>
                                        <input type="text" id="req-st-address-extra" class="text-field" placeholder="House name and street name">
                                        <label class="sr-only" for="opt-st-address-extra"></label>
                                        <input type="text" id="opt-st-address-extra" class="text-field" placeholder="Apartment, suite unit etc. (optional)">
                                    </div>
                                    <div class="u-s-m-b-13">
                                        <label for="town-city-extra">Town / City
                                            <span class="astk">*</span>
                                        </label>
                                        <input type="text" id="town-city-extra" class="text-field">
                                    </div>
                                    <div class="u-s-m-b-13">
                                        <label for="select-state-extra">State / Country
                                            <span class="astk"> *</span>
                                        </label>
                                        <div class="select-box-wrapper">
                                            <select class="select-box" id="select-state-extra">
                                                <option selected="selected" value="">Choose your state...</option>
                                                <option value="">Alabama</option>
                                                <option value="">Alaska</option>
                                                <option value="">Arizona</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-13">
                                        <label for="postcode-extra">Postcode / Zip
                                            <span class="astk">*</span>
                                        </label>
                                        <input type="text" id="postcode-extra" class="text-field">
                                    </div>
                                    <div class="group-inline u-s-m-b-13">
                                        <div class="group-1 u-s-p-r-16">
                                            <label for="email-extra">Email address
                                                <span class="astk">*</span>
                                            </label>
                                            <input type="text" id="email-extra" class="text-field">
                                        </div>
                                        <div class="group-2">
                                            <label for="phone-extra">Phone
                                                <span class="astk">*</span>
                                            </label>
                                            <input type="text" id="phone-extra" class="text-field">
                                        </div>
                                    </div>
                                </div> -->
                                <div>
                                    <label for="order-notes">Order Notes</label>
                                    <textarea class="text-area" name="order_notes" id="order-notes" placeholder=""></textarea>
                                </div>
                            </div>
                            <!-- Billing-&-Shipping-Details /- -->
                            <!-- Checkout -->
                            <div class="col-lg-6">
                                <h4 class="section-h4">Chi tiết đơn hàng</h4>
                                <div class="order-table">
                                    <table class="u-s-m-b-13">
                                        <thead>
                                            <tr>
                                                <th>Sản phẩm</th>
                                                <th>Tổng tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach( $cart_list["products"] as $product ) { ?>
                                            <tr>
                                                <td>
                                                    <h6 class="order-h6"><?=$product["name"]?></h6>
                                                    <span class="order-span-quantity">x <?=$product["num_cart"]?></span>
                                                </td>
                                                <td>
                                                    <h6 class="order-h6"><?=number_format($product["price"]*$product["num_cart"])?></h6>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            <tr>
                                                <td>
                                                    <b> Total: </b>
                                                </td>
                                                <td>
                                                    <b class="calc-text"><?=number_format($cart_list["total_price"])?></b>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php if( empty($cart_list["products"]) ) { ?>
                                        <div class="redirect-link-wrapper u-s-p-b-25">
                                            <a class="redirect-link" href="<?=PAGE_URL."/category.php"?>">
                                                <span>Không tìm thấy sản phẩm nào trong giỏ hàng, tiếp tục mua sắm!</span>
                                            </a>
                                        </div>
                                    <?php } ?>
                                    <div class="u-s-m-b-13">
                                        <input type="checkbox" name="term_condition" class="check-box" id="accept">
                                        <label class="label-text no-color" for="accept">Tôi đã đọc và chấp nhận
                                            <a href="terms-and-conditions.php" class="u-c-brand">điều khoản & điều kiện</a>
                                        </label>
                                        <p class="error"><?=$_SESSION["errors"]["term_condition"]??""?></p>
                                    </div>
                                    <button type="submit" class="button button-outline-secondary" <?=(!$mo_member->checkLogin()||empty($cart_list["products"]))?"disabled":""?> >Đặt hàng</button>
                                </div>
                            </div>
                            <!-- Checkout /- -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php unset( $_SESSION["errors"] ); ?>
    <?=l_func_getFooter()?>