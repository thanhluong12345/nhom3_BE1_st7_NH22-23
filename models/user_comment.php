<?php

class UserComment extends Db {

    public function getComments( $product_id, $columns = "*", $where = "" ) {
        $sql = "select $columns from user_comments where product_id = $product_id";
        if( $where ) {
            $sql = $sql." "."where $where order by created_at desc";
        }
        $commnents = parent::fetchArray( $sql );
        return $commnents;
    }

    public function callbackShowListComment( $product_id ) {

    }

}