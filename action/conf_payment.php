<?php

require "../lib/config.php";
require ROOT_LIB_PATH."/func.php";
require ROOT_LIB_PATH."/cart.php";
require ROOT_MODEL_PATH."/db.php";
require ROOT_MODEL_PATH."/order.php";
require ROOT_MODEL_PATH."/user.php";
require ROOT_MODEL_PATH."/user_member.php";

$lib_cart = new Cart();
$mo_order = new Order();
$mo_member = new UserMember();
$mo_member->checkLogin(PAGE_URL."/home.php");

$cart_list = $lib_cart->getProductListInCart();
$errors = array();

if( !isset($_POST["term_condition"]) || empty($cart_list["products"])) {
    $errors["term_condition"] = "Vui lòng chấp nhận điều khoản và điều kiện của chúng tôi!";
}

if( isset($_POST["address_default"]) ) {
    $your_profile = $mo_member->getProfile();
    $ship_address = $your_profile["city"].",".$your_profile["district"].",".$your_profile["street"];
}
else{
    $city = $_POST["city"];
    $district = $_POST["district"];
    $street = $_POST["street"];
    
    if( !$city ) $errors["city"] = "Vui lòng nhập Tỉnh/Thành Phố";
    if( !$district ) $errors["district"] = "Vui lòng nhập Quận/Huyện";
    if( !$street ) $errors["street"] = "Vui lòng nhập Xã/Phường + Địa chỉ số nhà";
    $ship_address = $city .",".$district.",".$street;
}

if( !empty($errors) ) {
    $_SESSION["errors"] = $errors;
    header("Location: ".PAGE_URL."/checkout.php");
    exit;
}

$order_notes = $_POST["order_notes"];
$user_id = $mo_member->getUserId();
$order = $mo_order->saveOrder( $user_id, $ship_address, $cart_list, $order_notes);
if( $order ) {
    $lib_cart->resetCart();
    $_SESSION["order_success"] = 1;
    header("Location: ".PAGE_URL."/order_success.php");
    exit;
}