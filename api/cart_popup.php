<?php
session_start();

require_once "../lib/config.php";
require_once ROOT_LIB_PATH."/cart.php";
$lib_cart = new Cart();
$cart_list = $lib_cart->getProductListInCart();

$html =
        "<div class=\"mini-cart\">
            <div class=\"mini-cart-header\">
                YOUR CART
                <button type=\"button\" class=\"button ion ion-md-close\" id=\"mini-cart-close\"></button>
            </div>
            <ul class=\"mini-cart-list\">";
            foreach( $cart_list["products"] as $product ) {
                $html .= "
                <li class=\"clearfix\">
                    <a href=\"single-product.php\">
                        <img src=\"".ROOT_IMAGE_URL."/product/".$product['image']."\" alt=\"".$product["name"]."\">
                        <span class=\"mini-item-name\">".$product["name"]."</span>
                        <span class=\"mini-item-price\">".number_format($product["price_cart"])."</span>
                        <span class=\"mini-item-quantity\"> x ".$product["num_cart"]." </span>
                    </a>
                </li>";
             }
            $html .= "</ul>
            <div class=\"mini-shop-total clearfix\">
                <span class=\"mini-total-heading float-left\">Total:</span>
                <span class=\"mini-total-price float-right\">".number_format($cart_list["total_price"])."VND"."</span>
            </div>
            <div class=\"mini-action-anchors\">
                <a href=\"cart.php\" class=\"cart-anchor\">View Cart</a>
                <a href=\"checkout.php\" class=\"checkout-anchor\">Checkout</a>
            </div>
        </div>";

    $ret_value = array(
        "html" => $html,
        "total_price" => number_format($cart_list["total_price"]),
        "number" => $cart_list["number"],
    );
    header("Access-Control-Allow-Origin: *");
    echo json_encode($ret_value);
    exit();

?>

