<?php

define("HOST", "127.0.0.1");
define("DB_NAME", "group3");
define("USERNAME", "root");
define("PASSWORD", "");

define("_IS_NULL", 0);
define("_IS_USERNAME", 1);

define("PROJECT_PATH", "nhom3_BE1_st7_NH22-23");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]."/".PROJECT_PATH);
define("ROOT_LIB_PATH", ROOT_PATH."/lib");
define("ROOT_ADMIN", ROOT_PATH."/admin");
define("ROOT_ACTION_PATH", ROOT_PATH."/action");
define("ROOT_MODEL_PATH", ROOT_PATH."/models");
define("ROOT_URL", (!empty($_SERVER["HTTPS"]) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"]."/".PROJECT_PATH);
define("ROOT_ADMIN_URL", ROOT_URL."/admin");
define("ROOT_IMAGE_URL", ROOT_URL."/public/images");
define("PAGE_URL", ROOT_URL);
define("ACTION_PAGE_URL", ROOT_URL."/action");