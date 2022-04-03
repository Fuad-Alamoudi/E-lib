<?php
namespace coding\App\Models;
use coding\App\Models\Model;

class Payment extends Model{
   
    function __construct()
    {
        parent::$tblName="payments";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
?>