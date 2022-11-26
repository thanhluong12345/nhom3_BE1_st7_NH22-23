<?php

require __DIR__."/../lib/func.php";
require __DIR__."/../models/db.php";
require __DIR__."/../models/user.php";
require __DIR__."/../models/user_member.php";

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
