<?php
 require_once "../../../lib/config.php";
  require ROOT_MODEL_PATH."/db.php";
  require ROOT_MODEL_PATH."/manufacture.php";
  $mo_manufacture= new Manufacture();
  if(isset($_POST['manu_name'])){
    
    $manu_name=$_POST['manu_name'];
    
    $create=$mo_manufacture ->createManufacture($manu_name);
    
  }
  var_dump($create);
 
  if($create){
    header("Location: ./list.php");
    exit;
}else{
   
}