<?php
    require_once "../../../lib/config.php";
    require_once ROOT_MODEL_PATH."/db.php";
    require_once ROOT_MODEL_PATH."/manufacture.php";
    require_once ROOT_MODEL_PATH."/product.php";

    $mo_manu = new Manufacture();
    $mo_pro = new Product();

    $manu_id = trim($_GET["id"]);

    $check = $mo_pro->getProductByManuId($manu_id);
    if( $check ) {
        header("Location: ./list.php?error='Không xóa được, Có sản phẩm đang sử dụng!'");
        exit;
    }

    $mo_manu->delete( $manu_id );

    header("Location: ./list.php");
    exit;
    