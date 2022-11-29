<?php 

function activeUrl( $path, $class = "active" ) {
    $init_path = ROOT_ADMIN_URL."/pages/".$path;
    $actual_link = getUrl();
    if( file_exists(ROOT_ADMIN."/pages/".$path) && $init_path == $actual_link) {
        return $class;
    }
    return "";
}

function getUrl() {
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]".parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    return $actual_link;
}