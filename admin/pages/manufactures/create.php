<?php
    require_once "../../../lib/config.php";
    require_once ROOT_MODEL_PATH."/db.php";
    require_once ROOT_MODEL_PATH."/manufacture.php";
    $errors = array();
    $mo_manu = new Manufacture();

    $manu_name = trim($_POST["manu_name"]);
    if( !$manu_name ) {
        $errors[] = "Vui lòng nhập tên hãng";
    }

    if( $errors ) {
        header("Location: ./edit.php?error='".$errors[0]."'");
        exit;
    }

    $mo_manu->insert(" manu_name = '".$manu_name."' ");

    header("Location: ./list.php");
    