<?php

class UserwishList extends Db {

    public function getWishList( $where = "", $limit = 0 ) {
        if( !$where ) return false;

        $sql = "select * from user_wishlist where $where order by id desc";
        if( $limit == 1 ) {
            $wishlist = parent::fetchSingle( $sql );
            
        } else {
            if( $limit > 1 ) {
                $sql .= " limit $limit ";
            }
            $wishlist = parent::fetchArray( $sql );
        }
        
        if( !$wishlist ) return array();
        return $wishlist;
    }

    public function addWishList( $user_id, $product_id ) {
        if( !$product_id || !$user_id ) return false;
        $where_get = " product_id = $product_id and user_id = $user_id ";
        $wishlist = $this->getWishList( $where_get, 1 );
        if( empty( $wishlist ) ) {
            $sql = "insert into user_wishlist set user_id = $user_id, product_id = $product_id ";
            if( !(parent::execute( $sql )) ) {
                return false;
            }
        }
        return true;
    } 

    public function removeWishList( $user_id, $product_id ) {
        if( !$product_id || !$user_id ) return false;
        $sql = "delete from user_wishlist where user_id = $user_id and product_id = $product_id ";
        if( !(parent::execute( $sql )) ) {
            return false;
        }
        return true;
    }
}