<?php

if( session_id() == "" ) {
    session_start();
}

require __DIR__."/config.php";

function l_func_GetHeader( $title = '' ) {
    include "header.php";
}


function l_func_GetFooter( $script = "" ) {
    include "footer.php";
}