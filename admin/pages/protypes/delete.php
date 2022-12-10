<?php

 require_once "../../../lib/config.php";
  require ROOT_MODEL_PATH."/db.php";
  require ROOT_MODEL_PATH."/protype.php";
  $mo_protype= new Protype();
  if(isset($_GET['type_name'])){
    
    $name=$_GET['type_name'];
    
    $delete_sql=$mo_protype ->deleteProtypeByName($name);
    
  }
  //var_dump($delete_sql);
 
  if($delete_sql){
    header("Location: ./list.php");
    exit;
}else{
  header("Location: ./list.php?error_flg=1");
}



  