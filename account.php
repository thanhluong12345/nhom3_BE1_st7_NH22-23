<?php

    require "lib/func.php";
    require "models/db.php";
    require "models/user.php";
    require "models/user_member.php";

    $mo_member = new UserMember();
    $mo_member->checkLogin("home.php");
?>

<?=l_func_GetHeader("Home")?>

    <!-- Header /- -->
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Account</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="home.php">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="account.php">Account</a>
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
                        <h2 class="account-h2 u-s-m-b-20">Login</h2>
                        <h6 class="account-h6 u-s-m-b-30">Welcome back! Sign in to your account.</h6>
                        <p class="error"><?=$_SESSION["errors"]["error_common"]??""?></p>
                        <form action="action/conf_login.php" method="POST">
                            <div class="u-s-m-b-30">
                                <label for="user-name-email">Username or Email
                                    <span class="astk">*</span>
                                </label>
                                <input type="text" id="user-name-email" class="text-field" name="username" placeholder="Username / Email">
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="login-password">Password
                                    <span class="astk">*</span>
                                </label>
                                <input type="text" id="login-password" class="text-field" name="password" placeholder="Password">
                            </div>
                            <div class="group-inline u-s-m-b-30">
                                <div class="group-1">
                                    <input type="checkbox" class="check-box" id="remember-me-token">
                                    <label class="label-text" for="remember-me-token">Remember me</label>
                                </div>
                                <div class="group-2 text-right">
                                    <div class="page-anchor">
                                        <a href="lost-password.php">
                                            <i class="fas fa-circle-o-notch u-s-m-r-9"></i>Lost your password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="m-b-45">
                                <button class="button button-outline-secondary w-100" name="login">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Login /- -->
                <!-- Register -->
                <div class="col-lg-6">
                    <div class="reg-wrapper">
                        <h2 class="account-h2 u-s-m-b-20">Register</h2>
                        <p class="error"><?=$_SESSION["errors"]["error_common"]??""?></p>
                        <!-- <h6 class="account-h6 u-s-m-b-30">Registering for this site allows you to access your order status and history.</h6> -->
                        <form action="./action/conf_register.php" method="POST">
                            <div class="u-s-m-b-30">
                                <label for="user-name">Username
                                    <span class="astk">*</span>
                                </label>
                                <input type="text" id="user-name" class="text-field" name="username" placeholder="Username">
                                <p class="error"><?=$_SESSION["errors"]["username"]??""?></p>
                            </div>
                            
                            <div class="u-s-m-b-30">
                                <label for="password">Password
                                    <span class="astk">*</span>
                                </label>
                                <input type="text" id="password" class="text-field" name="password" placeholder="Password">
                                <p class="error"><?=$_SESSION["errors"]["password"]??""?></p>
                            </div>
                            
                            <div class="u-s-m-b-30">
                                <label for="confirm_password">Confirm password
                                    <span class="astk">*</span>
                                </label>
                                <input type="text" id="confirm_password" class="text-field" name="confirm_password" placeholder="Confirm password">
                                <p class="error"><?=$_SESSION["errors"]["confirm_password"]??""?></p>
                            </div>
                           
                            <div class="u-s-m-b-30">
                                <input type="checkbox" class="check-box" id="accept" name="term_condition">
                                <label class="label-text no-color" for="accept">I’ve read and accept the
                                    <a href="terms-and-conditions.php" class="u-c-brand">terms & conditions</a>
                                </label>
                            </div>
                            <div class="u-s-m-b-45">
                                <button class="button button-primary w-100" name="register">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Register /- -->
            </div>
        </div>
    </div>

    <?php unset( $_SESSION["errors"] ) ?>
    <?=l_func_getFooter()?>