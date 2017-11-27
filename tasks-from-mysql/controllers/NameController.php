<?php

// var_dump($app['database']);

$app['database']->insert('names', [
    'name' => $_POST['name'],
]);

$names = $app['database']->selectAll('names');

// die(var_dump($names));
require('view/name.view.php');