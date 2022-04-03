<?php
namespace coding\App\Models;
use coding\App\Models\Model;

class Role extends Model{
   
    function __construct()
    {
        parent::$tblName="roles";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
?>