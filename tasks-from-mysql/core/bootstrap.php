<?php

App::bind('config', require('config.php'));

App::bind('database', new QueryBuilder(
    Connection::getConnection(App::get('config')['database'])
));


function view($name, $data = [])
{

    extract($data);

    require "view/{$name}.view.php";
    
}

function redirect($path)
{
  
    header("Location: {$path}");
}