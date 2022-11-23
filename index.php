<?php

require_once  'controllers/TaskController.php';
require_once  'controllers/UserController.php';


$controller_name = ucfirst($_GET['controller']).'Controller';
$action_name = $_GET['action'];


$controller_instance = new $controller_name();

$controller_instance->$action_name();