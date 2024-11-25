<?php

class dataBase {
    private $driver;
    private $host;
    private $dbname;
    private $username;

    function __construct() {
        $this->driver = "mysql";
        $this->host = "localhost";
        $this->dname = "hyancinthCastle";
        $this->username = "root";
    }

    function getConexao () {
        try {
            $this->con = new PDO(
                "$this->driver:host=$this->host;dbname=$this->dbname",
                $this->username
            );

            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            
         return $this->con;
         
        } catch (Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }
}

?>
