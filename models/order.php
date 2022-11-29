<?php

class Order extends Db {
    public function saveOrder( $user_id, $ship_address, $cart_list, $order_notes = "" ) {
        if( !$user_id || !$ship_address || !$cart_list["products"] ) return false;

        $sql = "insert into orders set user_id = $user_id, ship_address = '".$ship_address."', order_notes = '".$order_notes."' ";
        if( !(parent::execute( $sql )) ) { 
            return false;
        }

        $order_id = $this->dbh->lastInsertId();
        foreach( $cart_list["products"] as $product ) {
            $sql = "insert into order_details set order_id = $order_id, product_id = ".$product["id"].", unit_price = ".$product["price"].", quantity = ".$product["num_cart"]." ";
            if( !(parent::execute( $sql )) ) { 
                return false;
            }
        } 
        
        return true;
    }
}