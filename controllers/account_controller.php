<?php
/**
 * Created by PhpStorm.
 * User: manh1
 * Date: 09/09/2017
 * Time: 2:40 CH
 */

class AccountController
{
    public function index() {
        // we store all the posts in a variable
        $users = UserRepository::all();
        require_once('views/account/index.php');
    }

    public function show(){
        if (!isset($_GET['id']))
             call('home', 'error');

        // we use the given id to get the right post
        $user = UserRepository::find($_GET['id']);
        require_once('views/account/show.php');
    }
}