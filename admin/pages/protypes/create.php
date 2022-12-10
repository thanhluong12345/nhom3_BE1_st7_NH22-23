<?php
 require_once "../../../lib/config.php";
  require ROOT_MODEL_PATH."/db.php";
  require ROOT_MODEL_PATH."/protype.php";
  $mo_protype= new Protype();
  if(isset($_POST['type_name'])){
    
    $name=$_POST['type_name'];
    
    $create=$mo_protype ->createProtype($name);
    
  }
  var_dump($create);
 
  if($create){
    header("Location: ./list.php");
    exit;
}else{
   
}