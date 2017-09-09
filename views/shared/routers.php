<?php
function call($controller, $action) {
    // require the file that matches the controller name
    require_once('controllers/' . $controller . '_controller.php');

    // create a new instance of the needed controller
    switch($controller) {
        case 'home':
            $controller = new HomeController();
            break;
        case 'account':
            require_once ('models/user.php');
            require_once ('server/repository/userrepository.php');
            $controller = new AccountController();
            break;
        case 'news':
            $controller=new NewsController();
            break;
    }

    // call the action
    $controller->{ $action }();
}

// just a list of the controllers we have and their actions
// we consider those "allowed" values
$controllers = array('home' => ['index', 'error'],
                     'account' => ['index','show'],
                     'news' => ['index']);

// check that the requested controller and action are both allowed
// if someone tries to access something else he will be redirected to the error action of the pages controller
if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('home', 'error');
    }
} else {
    call('home', 'error');
}
?>