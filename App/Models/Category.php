<?php
namespace coding\App\Models;
use coding\App\Models\Model;

class Category extends Model{
   
    function __construct()
    {
        parent::$tblName="Categories";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
?>