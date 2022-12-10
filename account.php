<?php

    require "./lib/config.php";
    require ROOT_LIB_PATH."/func.php";
    require ROOT_MODEL_PATH."/db.php";
    require ROOT_MODEL_PATH."/user.php";
    require ROOT_MODEL_PATH."/user_member.php";

    $mo_member = new UserMember();
    $mo_member->checkLogin("home.php", true);
?>

<?=l_func_GetHeader("Login/Signup")?>

    <!-- Header /- -->
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Tài khoản</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="<?=PAGE_URL."/home.php"?>">Trang chủ</a>
                    </li>
                    <li class="is-marked">
                        <a href="<?=PAGE_URL."/account.php"?>">Tài khoản</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Account-Page -->
    <div class="page-account u-s-p-t-80">
        <div class="container">
            <div class="row">
                <!-- Login -->
                <div class="col-lg-6">
                    <div class="login-wrapper">
                        <h2 class="account-h2 u-s-m-b-20">Đăng nhập</h2>
                        <h6 class="account-h6 u-s-m-b-30">Nhập thông tin đăng nhập của bạn tại đây!</h6>
                        <p class="error"><?=$_SESSION["errors_login"]["error_common"]??""?></p>
                        <form action="action/conf_login.php" method="POST">
                            <div class="u-s-m-b-30">
                                <label for="user-name-email">Username
                                    <span class="astk">*</span>
                                </label>
                                <input type="text" id="user-name-email" class="text-field" name="username" placeholder="Username">
                                <p class="error"><?=$_SESSION["errors_login"]["username"]??""?></p>
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="login-password">Mật khẩu
                                    <span class="astk">*</span>
                                </label>
                                <input type="password" id="login-password" class="text-field" name="password" placeholder="Mật khẩu">
                                <p class="error"><?=$_SESSION["errors_login"]["password"]??""?></p>
                            </div>
                            <!-- <div class="group-inline u-s-m-b-30">
                                <div class="group-1">
                                    <input type="checkbox" class="check-box" id="remember-me-token">
                                    <label class="label-text" for="remember-me-token">Remember me</label>
                                </div>
                                <div class="group-2 text-right">
                                    <div class="page-anchor">
                                        <a href="lost-password.php">
                                            <i class="fas fa-circle-o-notch u-s-m-r-9"></i>Quên mật khẩu?</a>
                                    </div>
                                </div>
                            </div> -->
                            <div class="m-b-45">
                                <button class="button button-outline-secondary w-100" name="login">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Login /- -->
                <!-- Register -->
                <div class="col-lg-6">
                    <div class="reg-wrapper">
                        <h2 class="account-h2 u-s-m-b-20">Đăng ký</h2>
                        <p class="error"><?=$_SESSION["errors_register"]["error_common"]??""?></p>
                        <!-- <h6 class="account-h6 u-s-m-b-30">Registering for this site allows you to access your order status and history.</h6> -->
                        <form action="./action/conf_register.php" method="POST">
                            <div class="u-s-m-b-30">
                                <label for="user-name">Username
                                    <span class="astk">*</span>
                                </label>
                                <input type="text" id="user-name" class="text-field" name="username" placeholder="Username">
                                <p class="error"><?=$_SESSION["errors_register"]["username"]??""?></p>
                            </div>
                            
                            <div class="u-s-m-b-30">
                                <label for="password">Mật khẩu
                                    <span class="astk">*</span>
                                </label>
                                <input type="password" id="password" class="text-field" name="password" placeholder="Mật khẩu">
                                <p class="error"><?=$_SESSION["errors_register"]["password"]??""?></p>
                            </div>
                            
                            <div class="u-s-m-b-30">
                                <label for="confirm_password">Xác nhận mật khẩu
                                    <span class="astk">*</span>
                                </label>
                                <input type="password" id="confirm_password" class="text-field" name="confirm_password" placeholder="Xác nhận mật khẩu">
                                <p class="error"><?=$_SESSION["errors_register"]["confirm_password"]??""?></p>
                            </div>
                           
                            <div class="u-s-m-b-30">
                                <input type="checkbox" class="check-box" id="accept" name="term_condition">
                                <label class="label-text no-color" for="accept">Tôi đã đọc và chập nhận
                                    <a href="terms-and-conditions.php" class="u-c-brand">điều khoản & điều kiện</a>
                                </label>
                                <p class="error"><?=$_SESSION["errors_register"]["term_condition"]??""?></p>
                            </div>
                            <div class="u-s-m-b-45">
                                <button class="button button-primary w-100" name="register">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Register /- -->
            </div>
        </div>
    </div>

    <?php unset( $_SESSION["errors_register"] ) ?>
    <?php unset( $_SESSION["errors_login"] ) ?>
    <?=l_func_getFooter()?>