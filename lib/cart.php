<?php

class Cart {

    public function getCarts() {
        if( !isset($_SESSION["carts"]) ) return array();
        return $_SESSION["carts"];
    }

    public function addToCart( $product_id, $quantity) {
        $carts = array();
        if( !isset($_SESSION["carts"]) ) {
            $carts[$product_id] = $quantity;
        } 
        else {
            $carts = $_SESSION["carts"];
            if( !isset($_SESSION["carts"][$product_id]) ) {
                $carts[$product_id] = $quantity;
            } 
            else {
                $carts[$product_id] += $quantity;
            }
        }
        $_SESSION["carts"] = $carts;
        return true;
    }

    public function deleteCart( $product_id ) {
        if( !isset( $_SESSION["carts"] ) || !isset( $_SESSION["carts"][$product_id] ) ) {
            return false;
        }

        $carts = $_SESSION["carts"];

        //remote cart
        unset($carts[$product_id]);
    
        $_SESSION["carts"] = $carts;

        return true;
    }

    public function getProductIdListFormCart( ) {
        $id_list = array();
        $carts = $this->getCarts();
        if( !$carts ) { return array(); }

        foreach( $carts as $pro_id => $quan ) {
            $id_list[$pro_id] = $quan;
        }
        return $id_list;
    } 
    
}