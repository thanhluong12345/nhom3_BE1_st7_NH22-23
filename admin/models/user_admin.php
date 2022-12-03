<?php

class UserAdmin extends User {
    public function checkLogin( $redirect = "", $condition = false) {
        $isLogged = false;
        if( isset($_SESSION["isLoggedAdmin"]) && $_SESSION["isLoggedAdmin"] == true ) {
            $isLogged = true;
        }

        if( $redirect && $isLogged == $condition ) {
            header( "Location: ".$redirect );
            exit;
        }
        return $isLogged;
    }

    public function getUserId() {
        if( isset( $_SESSION["ADMIN_USER_ID"] ) ) {
            return $_SESSION["ADMIN_USER_ID"];
        }
        return 0;
    }

    public function getUserAdmin( $user_id = 0 ) {
        if( !$user_id ) return array();
        $where = " user_id = $user_id ";
        $sql = "select * from user_admin where $where limit 1";
        $admin_current = parent::fetchSingle( $sql );
        if( !$admin_current ) return array();
        return $admin_current;
    }

    public function login( $username, $password ) {
        $ret = array(
            "status" => 0,
            "error" => ""
        );

        $check_admin = parent::login( $username, $password );
        if( !$check_admin ) {
            $ret["error"] = "*Username hoặc mật khẩu không đúng!";
        }
        else {
            $user_admin = $this->getUserAdmin( $check_admin["user_id"] );
            if( !$user_admin ) {
                $ret["error"] = "$username not found";
            } else {
                $_SESSION["isLoggedAdmin"] = true;
                $_SESSION["ADMIN_USER_ID"] = $user_admin["user_id"];
                $ret["status"] = 1;
            }
        }

        return $ret;
    }
}