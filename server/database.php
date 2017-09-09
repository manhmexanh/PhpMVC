<?php
/**
 * Created by PhpStorm.
 * User: manh1
 * Date: 09/09/2017
 * Time: 1:47 CH
 */

class Database
{
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=localhost;dbname=manhnt', 'root', '', $pdo_options);
        }
        return self::$instance;
    }
}
?>