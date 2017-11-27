<?php

// var_dump($app['database']);

App::get('database')->insert('names', [
    'name' => $_POST['name'],
]);

$names = App::get('database')->selectAll('names');

// die(var_dump($names));
require('view/name.view.php');