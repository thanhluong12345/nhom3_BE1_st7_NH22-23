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
    public function deleteProtypeById( $type_id ) {
        $sql = "delete  from protypes where type_id = $type_id";
        $ret = parent::fetchSingle( $sql );
        return $ret;
    }
 
}