<?php
namespace coding\App\Models;
use coding\App\Models\Model;

class UserPaymentMethod extends Model{
   
    function __construct()
    {
        parent::$tblName="userPaymentMethods";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
?>