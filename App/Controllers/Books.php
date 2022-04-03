<?php
namespace App\Controllers;
use \Core\View;
/**
 * Posts controller
 * php version 8.0
 */

class Books{
     
    public $id;
    public $name;
    public $descibtion;
    public $bookBrand;
    public $publisheDate;
    public $quantity;
    public $bookCatogoery;
    public $part;
    public $author;
    public $isActive;
    function __construct()
    {
        echo "<h1>inside book php";

    }
    function index(){
        echo "<h1>inside index php";
    }
    function show(){

    }
    function add(){

    }
    function edit(){
        
    }
    function delete(){
        
    }
   }


?>