<?php

$tasks = [
    [
        'title' => 'Study PHP',
        'description' => 'Using laracast Course of php learn alot more',
        'assigned' => 'Sergio Soares', 
        'completed' => 'Uncompleted',
    ]
    ,[
        'title' => 'Study Laravel',
        'description' => 'Using laracast Course of laravel to learn a lot more',
        'assigned' => 'Sergio Soares', 
        'completed' => 'Uncompleted',
    ],
    [
        'title' => 'Study Solid',
        'description' => 'Using laracast Course of Solid to learn a lot more',
        'assigned' => 'Sergio Soares', 
        'completed' => 'Uncompleted',
    ],
    
];

function render($template, $data) {
    $tasks = $data;
    require($template);
}

render('layouts/master.view.php', $tasks);

