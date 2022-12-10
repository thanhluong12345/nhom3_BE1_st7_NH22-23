<?php

class Product extends Db{

    public function getProduct( $where = 1, $limit = "", $columns = "*" ) {
        if(!$where) {
            $where = 1;
        }
        $sql = "select $columns from products where $where order by created_at desc $limit";
        $ret = parent::fetchArray( $sql );
        return $ret;
    }

    public function countProduct( $where = 1 ) {
        if(!$where) {
            $where = 1;
        }
        $sql = "select count(id) as cnt from products where $where ";
        $ret = parent::fetchSingle( $sql );
        return $ret;
    }

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
        if( !$ret ) return array();
        return $ret;
    }

    public function getProductByManuId( $manu_id ) {
        $sql = "select * from products where manu_id = $manu_id ";
        $ret = parent::fetchArray( $sql );
        if( !$ret ) return array();
        return $ret;
    }

    public function getProductByIds( $id_list ) {
        if( !is_array( $id_list ) ) return array();

        $id_str = implode( ",", $id_list );
        $sql = "select * from products where id in (".$id_str.") ";
        $ret = parent::fetchArray( $sql );
        return $ret;
    }

    public function getProductLatestByTypeId( $type_id, $limit = 0, $where = "" ) {
        $limit_where = "";
        if( $limit ) {
            $limit_where = "limit $limit";
        }
        if( $where ) $where = "and $where";
        $sql = "select * from products where type_id = $type_id $where order by created_at desc $limit_where";
        $ret = parent::fetchArray( $sql );
        if( !$ret ) return array();
        return $ret;
    }

    public function getProductFeaturedByTypeId( $type_id ) {
        $sql = "select * from products where type_id = $type_id and feature <> 0 order by created_at desc ";
        $ret = parent::fetchArray( $sql );
        if( !$ret ) return array();
        return $ret;
    }

    public function getBreadCrumbList( $product_id, $num = 40 ) {

        $product = $this->getProductById( $product_id );

        $breadcrumb_list = 
        "<ul class=\"bread-crumb\">
            <li class=\"has-separator\">
                <a href=\"".PAGE_URL."/home.php\">Trang chủ</a>
            </li>
            <li class=\"\">
                <a href=\"".PAGE_URL."/single-product.php?id=".$product_id."\">".substr($product["name"], 0, $num)."...</a>
            </li>
        </ul>";
        return $breadcrumb_list;
    }

}