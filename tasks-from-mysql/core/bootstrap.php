<?php

$app = [];

$app['config'] = require('config.php');
require('database/Connection.php');
require('database/QueryBuilder.php');
require('Request.php');
require('core/Router.php');
require('core/View.php');

$app['database'] = new QueryBuilder(
    Connection::getConnection($app['config']['database'])
);