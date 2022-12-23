<?php

class Cart {

    public function getCarts() {
        if( !isset($_SESSION["carts"]) ) return array();
        return $_SESSION["carts"];
    }

    public function refreshCart( $product_id, $quantity ) {
        $carts = array();
        if( !isset($_SESSION["carts"]) ) {
            return false;
        } 
        else {
            $carts = $_SESSION["carts"];
            if( !isset($_SESSION["carts"][$product_id]) ) {
                return false;
            } 
            else {
                $carts[$product_id] = $quantity;
            }
        }
        $_SESSION["carts"] = $carts;
    }

    public function addToCart( $product_id, $quantity ) {
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

    public function resetCart() {
        if( isset( $_SESSION["carts"] ) ) {
            unset( $_SESSION["carts"] );
        }
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

    public function getProductListInCart() {
        require_once ROOT_MODEL_PATH."/db.php";
        require_once ROOT_MODEL_PATH."/product.php";
        $mo_product = new Product();
        $total_price = 0;
        $cart_list = $this->getProductIdListFormCart();

        $product_list =
            array(
                "products"      => array(),
                "total_price"   => 0,
                "number"        => 0
            );
        foreach( $cart_list as $pro_id => $quantity ) {
            $product = $mo_product->getProductById($pro_id);
            if( !$product ) {continue;}

            $price_cart = $product['price'] * $quantity;
            $total_price = $total_price + $price_cart;

            $product["price_cart"] = $price_cart;
            $product["num_cart"] = $quantity;
            $product_list["products"][] = $product;
        }
        $product_list["total_price"] = $total_price;
        $product_list["number"] = count($cart_list);

        return $product_list;
    }
    
}