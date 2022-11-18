<?php

require "lib/config.php";

class Db {
    private $host = HOST;
    private $db_name = DB_NAME;
    private $username = USERNAME;
    private $password = PASSWORD;

    protected function connect() {
        try {
            $dbh = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->username, $this->password);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

     /**
     * $sql @string
     * return @object
     */
    protected function execute( $sql ) {
        $con = $this->connect();
        $sth = $con->query($sql);
        return $sth;
    }

    /**
     * $sql @string
     * return @array()
     */
    protected function fetchArray( $sql ) {
        $query = $this->execute( $sql );
        $ret = $query->fetchAll();
        return $ret;
    }

    protected function fetchSingle( $sql ) {
        $query = $this->execute( $sql );
        $ret = $query->fetch();
        return $ret;
    }
}