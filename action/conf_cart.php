<?php
require "../lib/config.php";
require ROOT_LIB_PATH."/func.php";
require ROOT_LIB_PATH."/cart.php";
require ROOT_MODEL_PATH."/db.php";
require ROOT_MODEL_PATH."/product.php";

$mo_product = new Product();
$mo_cart = new Cart();


if( !$_POST["product_id"] ) {
    header( "Location: ".PAGE_URL."/home.php" );
    exit;
}
$product_id = $_POST["product_id"];

if( !($mo_product->getProductById( $product_id )) ) {
    header( "Location: ".PAGE_URL."/index.php" );
    exit;
}

if( isset($_POST["delete"]) ) {
    $mo_cart->deleteCart( $product_id );
    header("Location: ".PAGE_URL."/cart.php" );
    exit;
} 
else if( isset($_POST["add"]) ) {
    $quantity   = $_POST["quantity"];
    //add a product to cart
    $mo_cart->addToCart( $product_id, $quantity );
    exit;
} 
else {
    header( "Location: ".PAGE_URL."/home.php" );
    exit;
}




