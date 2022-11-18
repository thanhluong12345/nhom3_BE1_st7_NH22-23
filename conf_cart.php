<?php

session_start();
require "./lib/cart.php";
require "./models/db.php";
require "./models/product.php";

$mo_product = new Product();
$mo_cart = new Cart();


if( !$_POST["product_id"] ) {
    header( "Location: ./home.php" );
    exit;
}
$product_id = $_POST["product_id"];

if( !($mo_product->getProductById( $product_id )) ) {
    header( "Location: ./index.php" );
    exit;
}

if( isset($_POST["delete"]) ) {
    $mo_cart->deleteCart( $product_id );
    header("Location: ./cart.php" );
    exit;
} 
else if( isset($_POST["add"]) ) {
    $quantity   = $_POST["quantity"];
    //add a product to cart
    $mo_cart->addToCart( $product_id, $quantity );
    header("Location: ./cart.php" );
    exit;
} 
else {
    header( "Location: ./home.php" );
    exit;
}




