<?php

require "lib/func.php";
require "models/db.php";
require "lib/validator.php";
require "models/user.php";
require "models/user_member.php";

$error_msg = array();

$username = $_POST["username"]??"";
$password = $_POST["password"]??"";
$confirm_password = $_POST["confirm_password"]??"";
$term_condition = $_POST["term_condition"]??"";

$input = array(
    "username" => $username,
    "password" => $password,
    "confirm_password" => $confirm_password,
);

$rules = array(
    "username" => array(
        _IS_NULL
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
    $_SESSION["errors"] = $mo_validator->errors;
    header("Location: ../account.php");
    exit;
}

if(strcmp( $password, $confirm_password )) {
    header("Location: ../account.php");
    exit;
}

$mo_user = new User();
$mo_member = new UserMember();

$user_res = $mo_user->register( $username, $password );

if( !$user_res["status"] ) {
    $_SESSION["errors"]["error_common"] = $user_res["error"];
    header("Location: ../account.php");
    exit;
}

$member_res = $mo_member->registerMember( $user_res["user_id"] );
if( !$member_res ) {
    $_SESSION["errors"]["error_common"] = $user_res["error"];
    header("Location: ../account.php");
    exit;
}


