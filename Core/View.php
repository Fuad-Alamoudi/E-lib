<?php

namespace coding\Core;

/**
*View
* PHP version 8.0
*/

class View{
    public static function render($view ,$params=[]){
        extract($params,EXTR_SKIP);
        $file = "../App/Views/$view";
        if(is_readable($file)){
            require $file;
        }else{
            echo "$file not found ";
        }
    }
}