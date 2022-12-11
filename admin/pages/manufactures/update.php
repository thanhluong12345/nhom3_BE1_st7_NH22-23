<?php
 require_once "../../../lib/config.php";
 require ROOT_MODEL_PATH."/db.php";
 require ROOT_MODEL_PATH."/manufacture.php";
$protype= new Protype;
if(isset($_GET['manu_id'])){
    $manu_name=$_POST['manu_name'];
    $manu_id=$_GET['manu_id'];
    $update=$Manufacture->updateManufacture($manu_name,$manu_id);
}

if($update){
    header("Location: ./edit.php?manu_id=$manu_id");
    exit;
}else{
    echo 'Đã xảy ra lỗi!';
}
