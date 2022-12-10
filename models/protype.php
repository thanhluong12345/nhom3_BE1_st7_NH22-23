<?php

class Protype extends Db {
    /**
     * lấy tất cả protype 
     * return @array()
     */
    public function getProtypeLimit( $limit = 0 ) {
        $limit_where = "";
        if( $limit > 0 ) {
            $limit_where = "limit $limit";
        }
        $sql = "select * from protypes where display_home <> 0 order by pos asc $limit_where";
        $ret = parent::fetchArray( $sql );
        return $ret;
    }

    public function getProtypeById( $type_id ) {
        $sql = "select * from protypes where type_id = $type_id";
        $ret = parent::fetchSingle( $sql );
        return $ret;
    }
    // get all data
    public function getProtypeByAllId() {
        $sql = "select * from protypes";
        $ret = parent::fetchArray( $sql );
        return $ret;
    }
    public function deleteProtypeByName( $type_name ) {
        $sql = "delete from protypes where type_name like '%$type_name%'";
        $ret = parent::execute( $sql );
        // var_dump($sql);
        // exit;
        return $ret;
    }
    public function updateProtype($type_name,$type_id) {
        $sql =  "UPDATE protypes SET type_name ='$type_name' where type_id=$type_id";
        $ret = parent::execute( $sql );
        
        return $ret;
    } 
    public function createProtype($type_name) {
        $sql =  "INSERT INTO `protypes`(`type_id`, `type_name`, `display_home`, `pos`) VALUES ('null','$type_name','null','null');";
        $ret = parent::execute( $sql );
        // var_dump($sql);
        // exit;
        return $ret;
    }
 
}