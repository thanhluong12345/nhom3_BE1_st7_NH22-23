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
        $ret = parent::fetchSingle( $sql );
        return $ret;
    }

    



    public function getProductByIds( $id_list ) {
        if( !is_array( $id_list ) ) return array();

        $id_str = implode( ",", $id_list );
        $sql = "select * from products where id in (".$id_str.") ";
        $ret = parent::fetchArray( $sql );
        return $ret;
    }

    public function getProductManuId( $manu_id) {
        $sql = "select * from products where manu_id = ".$manu_id;
        $ret = parent::fetchArray( $sql );
        return $ret;
    }

}