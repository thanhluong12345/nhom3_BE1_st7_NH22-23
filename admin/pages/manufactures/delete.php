<?php

 require_once "../../../lib/config.php";
  require ROOT_MODEL_PATH."/db.php";
  require ROOT_MODEL_PATH."/manufacture.php";
  $mo_manufacture= new Manufacture();
  if(isset($_GET['manu_name'])){
    
    $manu_name=$_GET['manu_name'];
    
    $delete_sql=$mo_manufacture ->deleteManufactureByName($manu_name);
    
  }
  //var_dump($delete_sql);
 
  if($delete_sql){
    header("Location: ./list.php");
    exit;
}else{
  header("Location: ./list.php?error_flg=1");
}


