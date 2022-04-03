<?php

namespace coding\App\Controllers;
use coding\Core\Controller;
use coding\Core\View;

 /**
 * Home controller
 * php version 8.0
 */

class Home extends Controller
{   
    /**
     * Show index page
     * @return void
     */
    public function indexAction(){
        View::render('Home/index.php',[
            'username'=>'ali',
            'friends'=>['badr','omer']
        ]);
    }
    
    protected function before(){}
    protected function after(){}
}