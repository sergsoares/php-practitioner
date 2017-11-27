<?php

require('vendor/autoload.php');
require('core/bootstrap.php');

$view = Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

require $view;

