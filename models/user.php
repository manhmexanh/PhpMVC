<?php
/**
 * Created by PhpStorm.
 * User: manh1
 * Date: 09/09/2017
 * Time: 1:43 CH
 */


class User
{
    public $id;
    public $email;
    public $username;
    public $name;
    public $password;

    public function __construct($id, $username, $password,$name,$email) {
        $this->id      = $id;
        $this->username  = $username;
        $this->password = $password;
        $this->name = $name;
        $this->email = $email;
    }
}