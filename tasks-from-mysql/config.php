<?php

return [
    'database' => [
        'host' => 'mysql:host=127.0.0.1', 
        'database' => 'testing',
        'username' => 'root',
        'password' => 'root',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ] 
];