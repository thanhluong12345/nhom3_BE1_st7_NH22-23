<?php

class Manufacture extends Db
{
    public function getManufactureLimit($limit = 0)
    {
        $limit_where = "";
        if ($limit) {
            $limit_where = "limit $limit";
        }
        $sql = "select * from manufactures order by manu_id desc $limit_where";
        $ret = parent::fetchArray($sql);
        return $ret;
    }

    public function getManufactureById($manu_id)
    {
        $sql = "select * from manufactures where manu_id = $manu_id";
        $ret = parent::fetchSingle($sql);
        return $ret;
    }

    public function getManufacture()
    {
        $sql = "select * from manufactures";
        $ret = parent::fetchArray($sql);
        return $ret;
    }
    public function deleteManufactureByName( $manu_name ) {
        $sql = "delete from protypes where type_name like '%$manu_name%'";
        $ret = parent::execute( $sql );
        // var_dump($sql);
        // exit;
        return $ret;
    }
    public function updateManufacture($manu_name,$manu_id) {
        $sql =  "UPDATE protypes SET manu_name ='$manu_name' where manu_id=$manu_id";
        $ret = parent::execute( $sql );
        
        return $ret;
    } 
    public function createManufacture($manu_name) {
        $sql =  "INSERT INTO `manufacture`(`manu_id`, `manu_name`) VALUES ('null','$manu_name');";
        $ret = parent::execute( $sql );
        // var_dump($sql);
        // exit;
        return $ret;
    }
 
}
