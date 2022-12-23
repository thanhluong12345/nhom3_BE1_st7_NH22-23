<?php
    require_once "../../../lib/config.php";
    require_once ROOT_MODEL_PATH."/db.php";
    require_once ROOT_MODEL_PATH."/protype.php";
    require_once ROOT_MODEL_PATH."/product.php";

    $mo_type = new Protype();
    $mo_pro = new Product();

    $type_id = trim($_GET["id"]);

    $check = $mo_pro->getProductByTypeId($type_id);
    if( $check ) {
        header("Location: ./list.php?error='Không xóa được, Có sản phẩm đang sử dụng!'");
        exit;
    }

    $mo_type->delete( $type_id );

    header("Location: ./list.php");
    exit;
    