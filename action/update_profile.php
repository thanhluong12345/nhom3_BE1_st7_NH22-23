<?php

require "../lib/config.php";
require ROOT_LIB_PATH."/func.php";
require ROOT_MODEL_PATH."/db.php";
require ROOT_MODEL_PATH."/user.php";
require ROOT_MODEL_PATH."/user_member.php";

$mo_member = new UserMember();
$mo_member->checkLogin("home.php");

$firstname = $_POST["firstname"]??"";
$lastname = $_POST["lastname"]??"";
$city = $_POST["city"]??"";
$district = $_POST["district"]??"";
$street = $_POST["street"]??"";
$email = $_POST["email"]??"";
$phone = $_POST["phone"]??"";

$update_profile = array();

if( $firstname ) {
    $update_profile["firstname"] = $firstname;
}

if( $lastname ) {
    $update_profile["lastname"] = $lastname;
}

if( $city ) {
    $update_profile["city"] = $city;
}

if( $district ) {
    $update_profile["district"] = $district;
}

if( $street ) {
    $update_profile["street"] = $street;
}

if( $email ) {
    $update_profile["email"] = $email;
}

if( $phone ) {
    $update_profile["phone"] = $phone;
}

$user_id = $mo_member->getUserId();

$mo_member->updateProfile( $user_id, $update_profile );
header("Location: ../profile.php");
exit;
