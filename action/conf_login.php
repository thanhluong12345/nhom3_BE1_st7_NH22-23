<?php

require __DIR__."/../lib/func.php";
require __DIR__."/../models/db.php";
require __DIR__."/../models/user.php";
require __DIR__."/../models/user_member.php";

$username = $_POST["username"];
$password = $_POST["password"];

$mo_member = new UserMember();

$check_login = $mo_member->login( $username, $password );

if( !$check_login["status"] ) {
    $_SESSION["errors"]["error_common"] = $check_login["error"];
    header("Location: account.php");
    exit;
}

header("Location: ../home.php");
exit;