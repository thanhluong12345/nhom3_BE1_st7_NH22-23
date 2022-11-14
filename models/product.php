<?php

class Product extends Db{

    /**
     * lấy tất cả product 
     * return @array()
     */
    public function getProductAll() {
        $sql = "select * from products";
        $ret = parent::fetchArray( $sql );
        return $ret;
    }

    /**
     * lấy product bằng id
     * return @array()
     */
    public function getProductById( $id ) {
        $sql = "select * from products where id = ".$id;
        $ret = parent::fetchArray( $sql );
        return $ret;
    }
}