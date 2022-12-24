<?php

require "../lib/config.php";
require ROOT_LIB_PATH."/func.php";
require ROOT_MODEL_PATH."/db.php";
require ROOT_LIB_PATH."/validator.php";
require ROOT_MODEL_PATH."/user.php";
require ROOT_MODEL_PATH."/user_member.php";

$errors = array();

$username = $_POST["username"]??"";
$password = $_POST["password"]??"";
$confirm_password = $_POST["confirm_password"]??"";

if( !isset($_POST["term_condition"]) ) {
    $errors["term_condition"] = "*Vui lòng chấp nhận điều khoản và điều kiện!";
}

$input = array(
    "username" => $username,
    "password" => $password,
    "confirm_password" => $confirm_password,
);

$rules = array(
    "username" => array(
        _IS_NULL,
        _IS_USERNAME
    ),
    "password" => array(
        _IS_NULL
    ),
    "confirm_password" => array(
        _IS_NULL
    )
);

$mo_validator = new Validator();
$mo_validator->validate( $input, $rules );

if( $mo_validator->errors ) {
    $errors = $errors + $mo_validator->errors;
}

if(strcmp( $password, $confirm_password )) {
    $errors["confirm_password"] = "Mật khẩu xác nhận không khớp";
}

if( $errors ) {
    $_SESSION["errors_register"] = $errors;
    header("Location: ".PAGE_URL."/account.php");
    exit;
}



$mo_user = new User();
$mo_member = new UserMember();

$user_res = $mo_user->register( $username, $password );

if( !$user_res["status"] ) {
    $_SESSION["errors_register"]["error_common"] = $user_res["error"];
    header("Location: ".PAGE_URL."/account.php");
    exit;
}

$member_res = $mo_member->registerMember( $user_res["user_id"] );
if( !$member_res ) {
    $_SESSION["errors_register"]["error_common"] = $user_res["error"];
    header("Location: ".PAGE_URL."/account.php");
    exit;
}

header("Location: ".PAGE_URL."/home.php");
exit;

