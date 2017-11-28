<?php

// namespace App\Core;

use App\Core\App;

App::bind('config', require('config.php'));

App::bind('database', new QueryBuilder(
    Connection::getConnection(App::get('config')['database'])
));


function view($name, $data = [])
{

    extract($data);

    require "app/view/{$name}.view.php";
    
}

function redirect($path)
{
  
    header("Location: {$path}");
}