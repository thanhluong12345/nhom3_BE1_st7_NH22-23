<?php
session_start();
 require_once "../../../lib/config.php";
  require ROOT_MODEL_PATH."/db.php";
  require ROOT_MODEL_PATH."/protype.php";
  if(isset($_POST['type_id'])){
    $type_id=$_POST['type_id'];
    var_dump($type_id);
    $mo_protype= new Protype();
    $delete_sql=$mo_protype ->deleteProtypeById($type_id);
    var_dump($type_id);
   // mysqli_query( $connect,$delete_sql["type_id"]);
    //header("Location:list.php");
    exit;
    
  };
  // foreach($delete_sql as $value)
  // {
  //   echo $delete_sql['type_id'];
  // }
  