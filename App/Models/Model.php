<?php 
namespace coding\App\Models;
use coding\App\Core\Controller;
use coding\App\Core\QueryBulider;
use coding\Core\DB;
class Model{
    public static  $tblName;
    function __construct()
    {
        echo "model";
    }
    function test()
    {
        echo "model";
    }
    function save():bool{    
        $values=array();
        $columns=array();
        //get_object_
        foreach(get_object_vars($this) as $key=> $property){
            //echo $property;
            if($property!=self::$tblName)
            {
                $values[]=is_string($property)?"'".$property."'":$property;
                $columns[]=$key;}

        }
        $values=implode(",",$values);
        $columns=implode(",",$columns);
        $sql_query="insert into ".self::$tblName." (".$columns." ) values (".$values.")";
        echo $sql_query;
        $db=new DB();
        $stmt= $db->pdo->prepare($sql_query);
         
        if($stmt->execute())
        return true;
        return false;
    }

    public function getAll(){
        $sql_query="select * from ".self::$tblName."";
        $db=new DB();
        $stmt= $db->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
