<?php

namespace coding\Core;

use PDO;

/**
 * Base Model
 * PHP version 8.0
 */

class DB{
    public $pdo;
    function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mvc_libarary";
        try {
            $this->pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          }
        
        catch(PDOException $ex)
        {
            echo $ex->getMessage();
        }
        
    }

    public function insert(){

    }
    public function udpate(){

    }
    public function delete(){
        
    }

}?>