<?php

class UserMember extends User {

    public $active_flg = 5;

    public function checkLogin( $redirect = "" ) {
        $isLogged = false;
        if( isset($_SESSION["isLogged"]) ) {
            $isLogged = true;
        } 
        else if( $redirect ) {
            header( "Location: ".$redirect );
            exit;
        }
        return $isLogged;
    }

    public function getUserId() {
        if( isset( $_SESSION["USER_ID"] ) ) {
            return $_SESSION["USER_ID"];
        }
        return 0;
    }

    public function registerMember( $user_id ) {
        if( !$user_id ) {
            return false;
        }
        $sql = "insert into user_members set user_id = ".$user_id." ";
        if( !(parent::execute( $sql )) ) {
            return false;
        }
        else {
            return true;
        }
    }

    public function getUserMember( $user_id = 0, $username = "" ) {
        if( !$user_id && !$username ) return false;
        $where = "";
        if( $user_id ) {
            $where = " user_id = $user_id ";
        }
        else{
            $where = " username = '".$username."' ";
        }
        $sql = "select * from user_members where $where limit 1";
        $user_current = parent::fetchSingle( $sql );
        if( !$user_current ) return array();
        return $user_current;
    }

    public function login( $username, $password ) {
        $ret = array(
            "status" => 0,
            "error" => ""
        );

        $check_user = parent::login( $username, $password );
        if( !$check_user ) {
            $ret["error"] = "The username or password is incorrect!";
        }
        else {
            $user_member = $this->getUserMember( $check_user["user_id"] );
            if( !$user_member ) {
                $ret["error"] = "$username not found";
            } else {
                $_SESSION["isLogged"] = true;
                $_SESSION["USER_ID"] = $user_member["user_id"];
                $ret["status"] = 1;
            }
        }

        return $ret;
    }

    public function getProfile( $user_id ) {
        if( !$user_id ) return array();
        $sql = "select user_id, firstname, lastname, city, district, street, phone, email, active_flg from user_members where  user_id = $user_id limit 1";
        $your_profile = parent::fetchSingle( $sql );
        return $your_profile;
    }

    public function updateProfile( $user_id, $input ) {
        if( !$user_id || !$input ) return false;

        $data_update = array();
        foreach( $input as $field => $val ) {
            $data_update[] = "$field = '".$val."' ";
        } 
        $data_update = implode( ', ', $data_update);

        $sql = "update user_members set $data_update where user_id = $user_id";
        if( !(parent::execute( $sql )) ) {
            return false;
        }
        else {
            $sql = "select * from user_members where user_id = $user_id and active_flg <= 1  limit 1";
            $your_profile = parent::fetchSingle( $sql );
            if( !$your_profile ) return false;

            if( $your_profile["firstname"] && $your_profile["lastname"] && $your_profile["phone"] && $your_profile["email"] && $your_profile["active_flg"] <= 0 ) {
                $active_flg = 1;
            }

            if( $your_profile["city"] && $your_profile["district"] && $your_profile["street"] && ($your_profile["active_flg"] >=1 || $active_flg ) ) {
                $active_flg = 2;
            }

            if( $your_profile ) {
                $sql = "update user_members set active_flg = $active_flg where user_id = $user_id";
                if( !(parent::execute( $sql )) ) {
                    return false;
                }
            }
            return true;
        }
    }
}