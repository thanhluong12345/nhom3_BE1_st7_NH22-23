<?php

require_once "../lib/config.php";
require ROOT_LIB_PATH."/func.php";
require ROOT_MODEL_PATH."/db.php";
require ROOT_LIB_PATH."/validator.php";
require ROOT_MODEL_PATH."/user.php";
require ROOT_MODEL_PATH."/user_member.php";

$username = $_POST["username"];
$password = $_POST["password"];
$mo_member = new UserMember();
$check_login = $mo_member->login( $username, $password );
$errors = array();

$input = array(
    "username" => $username,
    "password" => $password
);

$rules = array(
    "username" => array(
        _IS_NULL
    ),
    "password" => array(
        _IS_NULL
    )
);

$mo_validator = new Validator();
$mo_validator->validate( $input, $rules );

if( $mo_validator->errors ) {
    $errors = $errors + $mo_validator->errors;
}
elseif( !$check_login["status"] ) {
    $errors["error_common"] = $check_login["error"];
}

if( $errors ) {
    $_SESSION["errors_login"] = $errors;
    header("Location: ".PAGE_URL."/account.php");
    exit;
}

header("Location: ".PAGE_URL."/home.php");
exit;