<?php

namespace coding\App\Controllers;
use coding\Core\Controller;
use coding\Core\View;
use coding\App\Models\User;

 /**
 * Home controller
 * php version 8.0
 */

class Dashborad extends Controller
{   
    /**
     * Show index page
     * @return void
     */
    public function indexAction(){
        $user=new User();
        $allUser=$user->getAll();
        View::render('Dashboard/app-user-list.php',$allUser);
    }
 
   
    
    protected function before(){}
    protected function after(){}
}