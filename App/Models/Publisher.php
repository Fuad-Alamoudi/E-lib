<?php
namespace coding\App\Models;
use coding\App\Models\Model;

class Publisher extends Model{
   
    function __construct()
    {
        parent::$tblName="publishers";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
?>