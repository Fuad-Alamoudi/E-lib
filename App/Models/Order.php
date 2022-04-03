<?php
namespace coding\App\Models;
use coding\App\Models\Model;

class Order extends Model{
   
    function __construct()
    {
        parent::$tblName="orders";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
?>