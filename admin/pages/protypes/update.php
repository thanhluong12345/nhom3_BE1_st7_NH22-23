<?php
 require_once "../../../lib/config.php";
 require ROOT_MODEL_PATH."/db.php";
 require ROOT_MODEL_PATH."/protype.php";
$protype= new Protype;
if(isset($_GET['type_id'])){
    $name=$_POST['type_name'];
    $type_id=$_GET['type_id'];
    $update=$protype->updateProtype($name,$type_id);
}

if($update){
    header("Location: ./edit.php?type_id=$type_id");
    exit;
}else{
    echo 'co loi xay ra';
}


  
//file này em xử lý update protype

