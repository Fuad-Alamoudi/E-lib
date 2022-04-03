<?php
namespace coding\App\Controllers;
use coding\Core\Controller;
use coding\Core\View;
use coding\App\Models\User;
/**
 * Posts controller
 * php version 8.0
 */

class Users extends Controller{
    
    function index($parameters=null){
        $parameters['status'];
        $user=new User();
        $allUser=$user->getAll();
        print_r($allUser);
        // View::render('user/app-user-list.php',$allUser);
    }
    public function add(){
        $user=new User();
        $user->name=$_POST['name'];
        $user->email=$_POST['email'];
        $user->password=$_POST['password'];
        $user->is_active=$_POST['is_active'];
        $user->role_id=$_POST['role_id'];
        $user->save();
        $allUser=$user->getAll();
        View::render('Dashboard/showUser.php',$allUser);
    }
    function listAll($parameters=null){
        $parameters['status'];
        $user=new User();
        $allUser=$user->getAll();
        // print_r($allUser);
        View::render('user/app-user-list.php',$allUser);
    }
    function editUser(){
        
    }
    public function delete($id){
        print_r($id);
    }
}
 


?>