<?php

class Protype extends Db {
    /**
     * lấy tất cả protype 
     * return @array()
     */
    public function getProtypeAll() {
        $sql = "select * from protypes";
        $ret = parent::fetchArray( $sql );
        return $ret;
    }
}