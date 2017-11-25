<?php

$query = require('core/bootstrap.php');
$tasks = $query->selectAll('tasks');

require('core/Router.php');
$router = new Router;

require('routes.php');
// var_dump($_SERVER);
require $router->direct(trim($_SERVER['REQUEST_URI'], '/'));
?>