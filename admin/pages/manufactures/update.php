<?php
    require_once "../../../lib/config.php";
    require_once ROOT_MODEL_PATH."/db.php";
    require_once ROOT_MODEL_PATH."/manufacture.php";

    $mo_manu = new Manufacture();
    $errors = array();
    $manu_name = trim($_POST["manu_name"]);
    $manu_id = trim($_POST["id"]);
    if( !$manu_name ) {
        $errors[] = "Vui lòng nhập tên hãng";
    }

    if( $errors ) {
        header("Location: ./edit.php?id=$manu_id&error='".$errors[0]."'");
        exit;
    }

    $mo_manu->update(" manu_name = '".$manu_name."' ", "manu_id = ".$manu_id);

    header("Location: ./edit.php?id=".$manu_id);
    