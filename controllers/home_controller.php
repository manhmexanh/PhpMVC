<?php
/**
 * Created by PhpStorm.
 * User: manh1
 * Date: 09/09/2017
 * Time: 1:41 CH
 */

class HomeController
{
    public function index() {
        $first_name = 'Jon';
        $last_name  = 'Snow';
require ('views/home/index.php');
    }

    public function error() {
        require ('views/shared/_error.php');
    }
}
?>