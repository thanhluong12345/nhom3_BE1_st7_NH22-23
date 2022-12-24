<?php 
session_start();

require_once "../lib/config.php";
require_once ROOT_MODEL_PATH."/db.php";
require_once ROOT_MODEL_PATH."/product.php";
require_once ROOT_MODEL_PATH."/user.php";
require_once ROOT_MODEL_PATH."/user_member.php";
require_once ROOT_MODEL_PATH."/user_wishlist.php";

$ret_value = array( "status" => 1 );

$mo_product = new Product();
$user_member = new UserMember();
$mo_wishlist = new UserwishList();

$user_id = $user_member->getUserId();

if( !$user_member->checkLogin() ) {
    $ret_value["status"] = 0;
    $ret_value["msg"] = "Thất bại! <br> Vui lòng đăng nhập";
}
else if( !isset( $_GET["product_id"] ) ) {
    $ret_value["status"] = 0;
}
else {
    $product_id = $_GET["product_id"];

    $res = $mo_wishlist->removeWishList( $user_id, $product_id );
    if( !$res ) {
        $ret_value["status"] = 0;
        $ret_value["msg"] = "Có lỗi! <br> Vui lòng thử lại sau!";
    }
    else {
        $user_wishlist = $mo_wishlist->getWishlist("user_id =".$user_id);
        $html = 
            "<table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Unit Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>";
                foreach( $user_wishlist as $val ) {
                $product = $mo_product->getProductById($val["product_id"]);
                $html .= "<tr>
                    <td>
                        <div class=\"cart-anchor-image\">
                            <a href=\"".PAGE_URL."/single-product.php?id=".$product["id"]."\">
                                <img src=\"".ROOT_IMAGE_URL."/product/".$product["image"]."\" alt=\"Product\">
                                <h6>".$product["name"]."</h6>
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class=\"cart-price\">
                            ".number_format($product["price"])." VND"."
                        </div>
                    </td>
                    <td>
                        <div class=\"action-wrapper\">
                            <button class=\"button button-outline-secondary\" onClick=\"addToCart(".$product["id"].")\" >Add to Cart</button>
                            <button class=\"button button-outline-secondary fas fa-trash\" onClick=\"removeWishList(".$product["id"].")\"></button>
                        </div>
                    </td>
                </tr>";
                }
            $html .= "</tbody>
            </table>";
        $ret_value["html"] = $html;
    }
}

header("Access-Control-Allow-Origin: *");
echo json_encode($ret_value);
exit();


