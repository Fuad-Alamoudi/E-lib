<?php
namespace coding\App\Models;
use coding\App\Models\Model;

class Book extends Model{
   
    function __construct()
    {
        parent::$tblName="books";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
?>