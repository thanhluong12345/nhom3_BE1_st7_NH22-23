<?php
    session_start();
    require "./lib/config.php";
    require ROOT_LIB_PATH."/func.php";
    require ROOT_MODEL_PATH."/db.php";
    require ROOT_MODEL_PATH."/user.php";
    require ROOT_MODEL_PATH."/user_member.php";
    require ROOT_MODEL_PATH."/product.php";
    require ROOT_MODEL_PATH."/user_wishlist.php";

    $mo_product = new Product();
    $user_member = new UserMember();
    $user_id = $user_member->getUserId();
    $mo_wishlist = new UserwishList();

    $user_wishlist = $mo_wishlist->getWishlist("user_id =".$user_id);

?>

<?=l_func_GetHeader("Yêu thích")?>
    <!-- Header /- -->
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Danh sách sản phẩm yêu thích</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="home.php">Trang chủ</a>
                    </li>
                    <li class="is-marked">
                        <a href="wishlist.php">Sản phẩm yêu thích</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Wishlist-Page -->
    <div class="page-wishlist u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Products-List-Wrapper -->
                    <div class="table-wrapper wishlist-wrapper u-s-m-b-60">
                        <?php if( $user_member->checkLogin() ) { ?>
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Unit Price</th>
                                    <th>Stock Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach( $user_wishlist as $val ) { ?>
                                <?php $product = $mo_product->getProductById($val["product_id"]); ?>
                                <tr>
                                    <td>
                                        <div class="cart-anchor-image">
                                            <a href="<?=PAGE_URL."/single-product.php?id=".$product["id"]?>">
                                                <img src="<?=ROOT_IMAGE_URL."/product/".$product["image"]?>" alt="Product">
                                                <h6><?=substr($product["name"], 0, 50)?>...</h6>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-price">
                                            <?=number_format($product["price"])?> VND
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-stock">
                                            In Stock
                                        </div>
                                    </td>
                                    <td>
                                        <div class="action-wrapper">
                                            <button class="button button-outline-secondary" onClick="addToCart(<?=$product["id"]?>)" >Thêm vào giỏ hàng</button>
                                            <button class="button button-outline-secondary fas fa-trash" onClick="removeWishList(<?=$product["id"]?>)"></button>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php } else { ?>
                            <div class="text-center redirect-link-wrapper u-s-p-t-25">
                                <a class="redirect-link" href="<?=PAGE_URL."/account.php"?>">
                                    <b>Vui lòng đăng nhập sử dụng tính năng này!</b>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- Products-List-Wrapper /- -->
                </div>
            </div>
        </div>
    </div>
    <?=l_func_getFooter()?>