<?php
/**
 * Created by PhpStorm.
 * User: manh1
 * Date: 09/09/2017
 * Time: 1:47 CH
 */

class UserRepository
{
    public static function all() {

        $list = [];
        $db = Database::getInstance();
        $req = $db->query('SELECT * FROM users');

        // we create a list of Post objects from the database results
        foreach($req->fetchAll() as $user) {
            $list[] = new User($user['id'], $user['username'], $user['password'], $user['name'], $user['email']);
        }

        return $list;
    }

    public static function find($id) {
        $db = Database::getInstance();
        // we make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM users WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));
        $user = $req->fetch();

        return new User($user['id'], $user['username'], $user['password'], $user['name'], $user['email']);
    }
}
?>