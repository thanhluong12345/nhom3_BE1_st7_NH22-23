<?php
    require_once "../../../lib/config.php";
    require_once ROOT_MODEL_PATH."/db.php";
    require_once ROOT_MODEL_PATH."/protype.php";

    $mo_type = new Protype();
    $errors = array();

    $type_name = trim($_POST["type_name"]);
    if( !$type_name ) {
        $errors[] = "Vui lòng nhập tên loại";
    }

    if( $errors ) {
        header("Location: ./edit.php?error='".$errors[0]."'");
        exit;
    }

    $mo_type->insert(" type_name = '".$type_name."' ");

    header("Location: ./list.php");
    