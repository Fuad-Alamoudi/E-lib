<?php
namespace coding\App\Controllers;
use coding\Core\Controller;
use coding\Core\View;
use coding\App\Models\User;

 /**
 * Posts controller
 * php version 8.0
 */

class Catgery extends Controller
{   
    /**
     * Show index page
     * @return void
     */
    public $id;
    public $name;
    public $isActive;

    function __construct()
    {
        
    }
    public function indexAction(){
        View::render('Catgery/catgery.php',[
            'username'=>'ali',
            'friends'=>['badr','omer']
        ]);
    }
    public function add(){
        View::render('Catgery/add_category.php',[
            'username'=>'ali',
            'friends'=>['badr','omer']
        ]);
         
   }
     
   public  function edit(){
    echo "edit"; 
    }
    public function delete(){
        
    }

 public function getDefaultAction(){
 
}
        /**
     * Show Add new post page
     * @return void
     */
    public function addNewAction(){
        echo "heloo add new post";
    }
    protected function before(){echo " loading";}
    protected function after(){echo " after";}
}