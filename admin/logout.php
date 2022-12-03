<?php
session_start();
require "../lib/config.php";

if( isset( $_SESSION["isLoggedAdmin"] ) ) {
    unset( $_SESSION["isLoggedAdmin"] );
}

header("Location: ".ROOT_ADMIN_URL."/login.php");
exit;