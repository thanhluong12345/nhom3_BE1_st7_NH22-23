<?php 
session_start();

require_once "../lib/config.php";
require_once ROOT_MODEL_PATH."/db.php";
require_once ROOT_MODEL_PATH."/user.php";
require_once ROOT_MODEL_PATH."/user_member.php";
require_once ROOT_MODEL_PATH."/user_wishlist.php";

$ret_value = array( "status" => 1 );

$user_member = new UserMember();
$mo_wishlist = new UserwishList();

if( !$user_member->checkLogin() ) {
    $ret_value["status"] = 0;
    $ret_value["msg"] = "Thất bại! <br> Vui lòng đăng nhập";
}
else if( !isset( $_GET["product_id"] ) ) {
    $ret_value["status"] = 0;
}
else {
    $product_id = $_GET["product_id"];
    $user_id = $user_member->getUserId();

    $res = $mo_wishlist->addWishList( $user_id, $product_id );
    if( !$res ) {
        $ret_value["status"] = 0;
        $ret_value["msg"] = "Có lỗi! <br> Vui lòng thử lại sau!";
    }
}
header("Access-Control-Allow-Origin: *");
echo json_encode($ret_value);
exit();


