<?php

//file này em xử lý tạo protype
require_once "../../../lib/config.php";
require ROOT_MODEL_PATH."/db.php";
require ROOT_MODEL_PATH."/protype.php";

//$updateid =$_POST['type_id'];
$updatename =$_POST['type_name'];


$createsql="insert into protypes(type_name)values ('$updatename')";
//echo $createsql; exit;
connect($sql,$createsql);
echo "<h1>tao thanh con</h1>";