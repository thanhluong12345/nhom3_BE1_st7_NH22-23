<?php
    require_once "../../../lib/config.php";
    require_once ROOT_MODEL_PATH."/db.php";
    require_once ROOT_MODEL_PATH."/product.php";

    $mo_pro = new Product();

    $id = trim($_GET["id"]);

    $mo_pro->delete( $id );

    header("Location: ./list.php");
    