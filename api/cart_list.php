<?php 
session_start();

require_once "../lib/config.php";
require_once ROOT_LIB_PATH."/cart.php";
$lib_cart = new Cart();
$cart_list = $lib_cart->getProductListInCart();

$html = 
"<div class=\"table-wrapper u-s-m-b-60\">";
    if( !empty($cart_list["products"]) ) {
        $html .= 
        "<table>
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>";
            foreach( $cart_list["products"] as $product ) { 

            $html .= 
            "<tr>
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
                        ".number_format($product["price_cart"])." VND
                    </div>
                </td>
                <td>
                    <div class=\"cart-quantity\">
                        <div class=\"quantity\">
                            <input type=\"text\" name=\"quantity".$product["id"]."\" class=\"quantity-text-field\" value=\"".$product["num_cart"]."\">
                            <a class=\"plus-a\" data-max=\"1000\">&#43;</a>
                            <a class=\"minus-a\" data-min=\"1\">&#45;</a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class=\"action-wrapper\">
                        <input type=\"hidden\" name=\"product_id\" value=\"".$product["id"]."\" />
                        <button class=\"button button-outline-secondary fas fa-sync\" name=\"refresh\"
                            onclick=\"refreshCart(".$product["id"].")\"></button>
                        <button class=\"button button-outline-secondary fas fa-trash\" name=\"delete\"
                            onclick=\"removeCart(".$product["id"].")\"></button>
                    </div>
                </td>
            </tr>";
        } 

        $html .= 
        "</tbody>
        </table>";
         } else {
            $html .= 
            "<div class=\"text-center redirect-link-wrapper u-s-p-b-25\">
                <a class=\"redirect-link\" href=\"".PAGE_URL."/category.php"."\">
                    <span>Không có sản phẩm nào trong giỏ hàng, tiếp tục mua sắm!</span>
                </a>
            </div> ";
        } 
$html .= "</div>";

$html .= 
"<div class=\"coupon-continue-checkout u-s-m-b-60\">
    <div class=\"button-area\">
        <a href=\"".PAGE_URL."/category.php"."\" class=\"continue\">Tiếp tục mua sắm</a>
        <a href=\"".PAGE_URL."/checkout.php"."\" class=\"checkout\">Thanh toán</a>
    </div>
</div>";

$html .= 
"<div class=\"calculation u-s-m-b-60\">
    <div class=\"table-wrapper-2\">
        <table>
            <tbody>
                <tr>
                    <td>
                        <h3 class=\"calc-h3 u-s-m-b-0\">Tổng tiền</h3>
                    </td>
                    <td>
                        <span class=\"calc-text\">".number_format($cart_list["total_price"])."<b> VND</b></span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>";

$ret_value = array(
    "html" => $html
);
header("Access-Control-Allow-Origin: *");
echo json_encode($ret_value);
exit();