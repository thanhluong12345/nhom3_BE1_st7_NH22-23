<?php
require "lib/func.php";

if( isset( $_SESSION["isLogged"] ) ) {
    unset( $_SESSION["isLogged"] );
}

header("Location: ../home.php");
exit;