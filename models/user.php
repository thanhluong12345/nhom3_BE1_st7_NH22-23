<?php

class User extends Db{

    public function register( $username, $password ) {
        $ret = array(
            "status" => 1,
            "error" => "",
            "user_id" => 0
        );

        //check username exists
        $user_data = $this->getUser( 0, $username );
        if( $user_data ) {
            $ret["status"] = 0;
            $ret["error"] = "that username already exists";
        }
        else {
            $password_hash = password_hash( $password, PASSWORD_DEFAULT );
            $sql = "insert into users set username = '".$username."', password = '".$password_hash."'  ";

            if( !(parent::execute( $sql )) ) {
                $ret["status"] = 0;
                $ret["error"] = "insert failed!";
            }
            else {
                $ret["user_id"] = $this->dbh->lastInsertId();
            }
        }

        return $ret;
    }

    public function getUser( $user_id = 0, $username = "" ) {
        if( !$username && !$user_id ) {
            return false;
        }
        $where = "";
        if( $user_id ) {
            $where = " user_id = $user_id ";
        }
        else{
            $where = " username = '".$username."' ";
        }
        $sql = "select * from users where $where limit 1";
        $user_data = parent::fetchSingle( $sql );
        if( !$user_data ) return array();
        return $user_data;
    }

    public function login( $username, $password ) {
        $user_data = $this->getUser( 0, $username );
        if (password_verify($password, $user_data["password"])) {
            return $user_data;
        }
        return false;
    }

}