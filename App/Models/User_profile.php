<?php
namespace coding\App\Models;
use coding\App\Models\Model;

class UserProfiles extends Model{
   
    function __construct()
    {
        parent::$tblName="user_profiles";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }
}
?>