<?php
    require "lib/func.php";
?>

<?=l_func_GetHeader("Home")?>
    <!-- Header /- -->
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Lost Password</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="home.php">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="lost-password.php">Lost Password</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Lost-password-Page -->
    <div class="page-lost-password u-s-p-t-80">
        <div class="container">
            <div class="page-lostpassword">
                <h2 class="account-h2 u-s-m-b-20">Forgot Password ?</h2>
                <h6 class="account-h6 u-s-m-b-30">Enter your email or username below and we will send you a link to reset your password.</h6>
                <form>
                    <div class="w-50">
                        <div class="u-s-m-b-13">
                            <label for="user-name-email">Username or Email
                                <span class="astk">*</span>
                            </label>
                            <input type="text" id="user-name-email" class="text-field" placeholder="Username / Email">
                        </div>
                        <div class="u-s-m-b-13">
                            <button class="button button-outline-secondary">Get Reset Link</button>
                        </div>
                    </div>
                    <div class="page-anchor">
                        <a href="account.php">
                            <i class="fas fa-long-arrow-alt-left u-s-m-r-9"></i>Back to Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?=l_func_getFooter()?>