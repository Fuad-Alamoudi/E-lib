<?php
namespace coding\App\Models;
use coding\App\Models\Model;

class OrderDetaile extends Model{
   
    function __construct()
    {
        parent::$tblName="orderDetails";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
?>