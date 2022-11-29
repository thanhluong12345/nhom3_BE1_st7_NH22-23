<?php

require_once "../lib/config.php";
require ROOT_LIB_PATH."/func.php";
require ROOT_MODEL_PATH."/db.php";
require ROOT_MODEL_PATH."/user.php";
require ROOT_MODEL_PATH."/user_member.php";

$username = $_POST["username"];
$password = $_POST["password"];

$mo_member = new UserMember();

$check_login = $mo_member->login( $username, $password );

if( !$check_login["status"] ) {
    $_SESSION["errors"]["error_common"] = $check_login["error"];
    header("Location: ".PAGE_URL."/account.php");
    exit;
}

header("Location: ".PAGE_URL."/home.php");
exit;