<?php
require "../lib/config.php";
require ROOT_LIB_PATH."/func.php";

if( isset( $_SESSION["isLogged"] ) ) {
    unset( $_SESSION["isLogged"] );
}

header("Location: ../home.php");
exit;