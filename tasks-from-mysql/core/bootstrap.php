<?php

App::bind('config', require('config.php'));

App::bind('database', new QueryBuilder(
    Connection::getConnection(App::get('config')['database'])
));
