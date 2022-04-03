<?php
namespace coding\App\Models;
use coding\App\Models\Model;

class City extends Model{
   
    function __construct()
    {
        parent::$tblName="cities";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
?>