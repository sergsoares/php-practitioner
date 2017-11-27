<?php


// $router->define([
//     '' => 'controllers/IndexController.php',
//     'tasks' => 'controllers/TaskController.php',
//     'company' => 'controllers/CompanyController.php',
//     'about' => 'controllers/AboutController.php',
//     'names' => 'controllers/NameController.php',
// ]);

$router->get('', 'PageController@index');
$router->get('tasks', 'PageController@task');
$router->get('company', 'PageController@company'); 
$router->get('about', 'PageController@about'); 
$router->post('names', ''); 