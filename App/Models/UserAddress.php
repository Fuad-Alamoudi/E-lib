<?php
namespace coding\App\Models;
use coding\App\Models\Model;

class UserAddress extends Model{
   
    function __construct()
    {
        parent::$tblName="userAddress";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
?>