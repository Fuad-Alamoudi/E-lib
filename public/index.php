<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\Core\Router;
 
// /**
//  * Twig
//  */
// use Twig\Environment;
// use Twig\Loader\FilesystemLoader;

// $loader = new FilesystemLoader('../App/Views');
// $twig = new Environment($loader);

/**
*
* main controller
* php version 8.0
*/
// require '../App/Controllers/Posts.php';
// require '../Core/Router.php';
// echo 'Requested url="'.$_SERVER["QUERY_STRING"].'"';

// spl_autoload_register(function($class){
//     $root =dirname(__DIR__);
//     $file = $root.'/'.str_replace('\\','/',$class).'.php';
//     if(is_readable($file)){
//         require $root . '/'.str_replace('\\','/',$class).'.php';
//     }
// });

$router = new Router();
$router->add('',['controller'=>'Home','action'=>'index']);
$router->add('{controller}');
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('{controller}/{action}/{id:\d+}');
// $router->add('admin/{controller}/{action}',['namespace' =>'Admin']);
$router->dispatch($_SERVER["QUERY_STRING"]);



