<?php
    session_start();
    require "./lib/config.php";
    require ROOT_LIB_PATH."/func.php";
    require ROOT_MODEL_PATH."/db.php";
    require ROOT_MODEL_PATH."/user.php";
    require ROOT_MODEL_PATH."/user_member.php";
    require ROOT_MODEL_PATH."/product.php";
    require ROOT_MODEL_PATH."/order.php";

    if( !isset($_GET["order_id"]) ) {
        header("Location: ./home.php");
        exit;
    }
    $order_id = $_GET["order_id"];
    $mo_product = new Product();
    $mo_member = new UserMember();
    $user_id = $mo_member->getUserId();
    $mo_order = new Order();
    $user_member = $mo_member->getUserMember( $user_id );

    $user_order = $mo_order->getOrderById($order_id);
    $order_detail_list = $mo_order->getOrderDetail($order_id)

?>

<?=l_func_GetHeader("Chi tiết đơn hàng")?>
    <!-- Header /- -->
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Danh sách lịch sử đặt hàng của bạn</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="home.php">Trang chủ</a>
                    </li>
                    <li class="is-marked">
                        <a href="wishlist.php">Lịch sử đặt hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Wishlist-Page -->
    <div class="page-checkout page-wishlist u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Products-List-Wrapper -->
                    <div class="table-wrapper wishlist-wrapper u-s-m-b-60">
                        <?php if( $mo_member->checkLogin() ) { ?>
                            <h4 class="section-h4">Chi tiết đơn hàng</h4>
                                <!-- Form-Fields -->
                                <div class="u-s-m-b-13">
                                    <label for="town-city">Tên khách hàng
                                    </label>
                                    <p><?=$user_member["firstname"]." ".$user_member["lastname"]?></p>
                                </div>

                                <div class="u-s-m-b-13">
                                    <label for="town-city">Địa chỉ giao hàng
                                    </label>
                                    <p><?=$user_order["ship_address"]?></p>
                                </div>

                                <div class="u-s-m-b-13">
                                    <label for="town-city">Ghi chú thêm
                                    </label>
                                    <p><?=$user_order["order_notes"]?$user_order["order_notes"]:"Không có ghi chú"?></p>
                                </div>

                                <div class="u-s-m-b-13">
                                    <label for="town-city">Ngày đặt hàng
                                    </label>
                                    <p><?=date("Y/m/d H:i:s", strtotime($user_order["order_date"]))?></p>
                                </div>

                                <br>
                                <br>
                                <div class="u-s-m-b-13">
                                    <label for="town-city">Danh sách sản phẩm
                                    </label>
                                    <div class="table-wrapper wishlist-wrapper u-s-m-b-60">
                                    <?php if( $mo_member->checkLogin() ) { ?>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Tổng tiền thanh toáns</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach( $order_detail_list as $val ) { ?>
                                            <?php 
                                                $total = 0;
                                                $product = $mo_product->getProductById($val["product_id"]);
                                                $total += $val["unit_price"] * $val["quantity"];
                                            ?>
                                            
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
                                                    <?=$val["quantity"]?>
                                                    </div>
                                                    
                                                </td>
                                                <td>
                                                    <div class="cart-price">
                                                        <?=number_format($total)?> VND
                                                    </div>
                                                </td>
                                                <td>
                                                <input class="button button-outline-secondary" onclick="addToCart(<?=$product['id']?>)" name="add" type="submit" value="Thêm vào giỏ hàng" />
                                    <button class="button button-outline-secondary far fa-heart u-s-m-l-6" onClick="addWishlist(<?=$product["id"]?>)" ></button>
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
                                </div>
                        </div>
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