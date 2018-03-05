<?php

require_once 'vendor/autoload.php';

/**
 * Controllers & actions (http://localhost:8888/LRL/2018-02-22/index.php)
 *
 * http://localhost:8888/LRL/2018-02-22/index.php?controller=login&action=show
 * http://localhost:8888/LRL/2018-02-22/index.php?controller=login&action=logout
 *
 * http://localhost:8888/LRL/2018-02-22/index.php?controller=post&action=showAll
 * http://localhost:8888/LRL/2018-02-22/index.php?controller=post&action=showSingle
 * http://localhost:8888/LRL/2018-02-22/index.php?controller=post&action=create
 *
 * http://localhost:8888/LRL/2018-02-22/index.php?controller=product&action=showAll
 * http://localhost:8888/LRL/2018-02-22/index.php?controller=product&action=showSingle
 * http://localhost:8888/LRL/2018-02-22/index.php?controller=product&action=create
 */

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// if $controller = 'login', then $className = 'LoginController'
$className = 'App\\Controllers\\' . ucfirst($controller) . 'Controller';
$object = new $className();
$object->$action();

?>
