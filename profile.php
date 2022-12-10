<?php
    require "./lib/config.php";
    require ROOT_LIB_PATH."/func.php";
    require ROOT_MODEL_PATH."/db.php";
    require ROOT_MODEL_PATH."/user.php";
    require ROOT_MODEL_PATH."/user_member.php";

    $mo_member = new UserMember();
    $mo_member->checkLogin( "home.php" );

    $user_id = $mo_member->getUserId();

    $your_profile = $mo_member->getProfile( $user_id );
?>

<?=l_func_GetHeader("Hồ sơ của bạn")?>
    <!-- Header /- -->
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Hồ sơ của bạn</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="./home.php">Trang chủ</a>
                    </li>
                    <li class="is-marked">
                        <a href="./checkout.php">Hồ sơ của bạn</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Checkout-Page -->
    <div class="page-checkout u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <form action="action/update_profile.php" method="post">
                        <div class="row">
                            <!-- Billing-&-Shipping-Details -->
                            <div class="col-lg-8">
                                <h4 class="section-h4">Cập nhật thông tin của bạn</h4>
                                <!-- Form-Fields -->
                                <div class="group-inline u-s-m-b-13">
                                    <div class="group-1 u-s-p-r-16">
                                        <label for="first-name">Họ
                                        </label>
                                        <input type="text" name="firstname" id="first-name" value="<?=$your_profile["firstname"]??""?>" class="text-field">
                                    </div>
                                    <div class="group-2">
                                        <label for="last-name">Tên
                                        </label>
                                        <input type="text" name="lastname" value="<?=$your_profile["lastname"]??""?>" id="last-name" class="text-field">
                                    </div>
                                </div>
                                <div class="u-s-m-b-13">
                                    <label for="town-city">Tỉnh/Thành Phố
                                    </label>
                                    <input type="text" name="city" value="<?=$your_profile["city"]??""?>" id="town-city" class="text-field">
                                </div>
                                <div class="u-s-m-b-13">
                                    <label for="select-state">Quận/Huyện 
                                    </label>
                                    <input type="text" name="district" value="<?=$your_profile["district"]??""?>" id="req-st-district" class="text-field" placeholder="">
                                </div>
                                <div class="street-address u-s-m-b-13">
                                    <label for="req-st-address">Xã/Phường + Địa chỉ số nhà
                                    </label>
                                    <input type="text" name="street" value="<?=$your_profile["street"]??""?>" id="req-st-address" class="text-field" placeholder="House name and street name">
                                </div>
                                
                                
                                <!-- <div class="u-s-m-b-13">
                                    <label for="postcode">Postcode / Zip
                                        <span class="astk">*</span>
                                    </label>
                                    <input type="text" id="postcode" class="text-field">
                                </div> -->
                                <div class="group-inline u-s-m-b-13">
                                    <div class="group-1 u-s-p-r-16">
                                        <label for="email">Email
                                        </label>
                                        <input type="text" name="email" value="<?=$your_profile["email"]??""?>" id="email" class="text-field">
                                    </div>
                                    <div class="group-2">
                                        <label for="phone">Số điện thoại
                                        </label>
                                        <input type="text" name="phone" id="phone" value="<?=$your_profile["phone"]??""?>" class="text-field">
                                    </div>
                                </div>
                               
                                <div class="pt-3 mb-3"> 
                                    <button type="submit" class="button button-outline-secondary checkout-anchor">Cập nhật hồ sơ</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?=l_func_getFooter()?>