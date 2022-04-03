<?php
namespace coding\App\Models;
use coding\App\Models\Model;

class User extends Model{
   
    function __construct()
    {
        parent::$tblName="users";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
?>