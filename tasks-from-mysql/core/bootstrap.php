<?php

App::bind('config', require('config.php'));

App::bind('database', new QueryBuilder(
    Connection::getConnection(App::get('config')['database'])
));


function view($name)
{

    require "view/{$name}.view.php";
    
}