<?php
namespace coding\App\Models;
use coding\App\Models\Model;

class Offer extends Model{
   
    function __construct()
    {
        parent::$tblName="offers";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
?>