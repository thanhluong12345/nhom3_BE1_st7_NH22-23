<?php

if( session_id() == "" ) {
    session_start();
}

function l_func_GetHeader( $title = '' ) {
    include ROOT_PATH."/header.php";
}


function l_func_GetFooter( $script = "" ) {
    include ROOT_PATH."/footer.php";
}