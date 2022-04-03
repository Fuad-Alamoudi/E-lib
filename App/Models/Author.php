<?php
namespace coding\App\Models;
use coding\App\Models\Model;

class Author extends Model{
   
    function __construct()
    {
        parent::$tblName="authors";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
?>