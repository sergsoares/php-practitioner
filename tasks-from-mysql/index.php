<?php

require('vendor/autoload.php');
require('core/bootstrap.php');

use App\Core\{Request, Router};

$view = Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());

require $view;

