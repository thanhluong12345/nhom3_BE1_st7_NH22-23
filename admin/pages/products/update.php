<?php
    require_once "../../../lib/config.php";
    require_once ROOT_MODEL_PATH."/db.php";
    require_once ROOT_MODEL_PATH."/product.php";

    $errors= array();

    $mo_pro = new Product();

    $id = trim($_POST["id"]);

    if ($_FILES["image"]["name"]) {
        $image_name = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];  
        $folder = ROOT_PATH."/public/images/product/".$image_name;
            
        if (!move_uploaded_file($tempname, $folder)) {
            $errors[] = "Upload hình ảnh không thành công";
        }
    }

    if( !isset($_POST["name"]) || !trim($_POST["name"]) ) {
        $errors[] = "Vui lòng nhập tên sản phẩm";
    }

    if( !isset($_POST["price"]) || !trim($_POST["price"]) ) {
        $errors[] = "Vui lòng nhập giá sản phẩm";
    }

    if( $errors ) {
        header("Location: ./edit.php?id=$id&error='".$errors[0]."'");
        exit;
    }
    
    $type_id = trim($_POST["type_id"]);
    $manu_id = trim($_POST["manu_id"]);
    $name = trim($_POST["name"]);
    $price = trim($_POST["price"]);
    $feature = trim($_POST["feature"]);
    $description = trim($_POST["description"]);

    $image_name = $image_name?"image='".$image_name."',":"";

    $mo_pro->update("name = '".$name."', $image_name description='".$description."', manu_id='".$manu_id."', price='".$price."', feature='".$feature."', type_id = '".$type_id."' ", "id=$id");

    header("Location: ./edit.php?id=$id");
    