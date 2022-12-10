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
}
