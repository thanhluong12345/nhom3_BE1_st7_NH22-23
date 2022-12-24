<?php

class Manufacture extends Db {

    public function getManufacture( $where = 1, $limit = "", $columns = "*" ) {
        if(!$where) {
            $where = 1;
        }
        $sql = "select $columns from manufactures where $where order by manu_id desc $limit";
        $ret = parent::fetchArray( $sql );
        return $ret;
    }

    public function getManufactureLimit( $limit = 0 ) {
        $limit_where = "";
        if( $limit ) {
            $limit_where = "limit $limit";
        }
        $sql = "select * from manufactures order by manu_id desc $limit_where";
        $ret = parent::fetchArray( $sql );
        return $ret;
    }

    public function getManufactureById( $manu_id ) {
        $sql = "select * from manufactures where manu_id = $manu_id";
        $ret = parent::fetchSingle( $sql );
        return $ret;
    }

    public function getManufactureAll() {
        $sql = "select * from manufactures order by manu_id desc";
        $ret = parent::fetchArray( $sql );
        return $ret;
    }

    public function insert( $insert ) {
        $sql = "insert into manufactures set $insert ";
        parent::execute( $sql );
    }

    public function update( $update, $where ) {
        $sql = "update manufactures set $update where $where ";
        parent::execute( $sql );
    }

    public function delete( $manu_id ) {
        $sql = "delete from manufactures where manu_id = $manu_id";
        parent::execute( $sql );
    }
}