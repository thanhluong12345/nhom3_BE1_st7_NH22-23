<?php

class Db {
    private $host = HOST;
    private $db_name = DB_NAME;
    private $username = USERNAME;
    private $password = PASSWORD;
    protected $dbh;

    protected function connect() {
        try {
            $this->dbh = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->username, $this->password);
            return $this->dbh;
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
        try {
            $con = $this->connect();
            $sth = $this->dbh->query($sql);
        }
        catch (Exception $ex) {
return false;        }
        return $sth;
    }

    /**
     * $sql @string
     * return @array()
     */
    protected function fetchArray( $sql ) {
        $query = $this->execute( $sql );
        if( !$query ) {
            return array();
        }
        $ret = $query->fetchAll();
        return $ret;
    }

    protected function fetchSingle( $sql ) {
        $query = $this->execute( $sql );
        if( !$query ) {
            return array();
        }
        $ret = $query->fetch();
        return $ret;
    }
}