<?php

$app = [];

$app['config'] = require('config.php');
$app['database'] = new QueryBuilder(
    Connection::getConnection($app['config']['database'])
);