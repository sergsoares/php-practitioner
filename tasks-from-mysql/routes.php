<?php


// $router->define([
//     '' => 'controllers/IndexController.php',
//     'tasks' => 'controllers/TaskController.php',
//     'company' => 'controllers/CompanyController.php',
//     'about' => 'controllers/AboutController.php',
//     'names' => 'controllers/NameController.php',
// ]);

$router->get('', 'controllers/IndexController.php');
$router->get('tasks', 'controllers/TaskController.php');
$router->get('company', 'controllers/CompanyController.php');
$router->get('about', 'controllers/AboutController.php');
$router->post('names', 'controllers/NameController.php');