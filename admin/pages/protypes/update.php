<?php
    require_once "../../../lib/config.php";
    require_once ROOT_MODEL_PATH."/db.php";
    require_once ROOT_MODEL_PATH."/protype.php";

    $mo_type = new Protype();
    $errors = array();
    $type_name = trim($_POST["type_name"]);
    $type_id = trim($_POST["id"]);
    if( !$type_name ) {
        $errors[] = "Vui lòng nhập tên loại";
    }

    if( $errors ) {
        header("Location: ./edit.php?id=$type_id&error='".$errors[0]."'");
        exit;
    }

    $mo_type->update(" type_name = '".$type_name."' ", "type_id = ".$type_id);

    header("Location: ./edit.php?id=".$type_id);
    