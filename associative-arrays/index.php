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
    [
        'assigned' => juca,
        'completed' => 'completed'
    ]
];

function render($template, $data) {
    $tasks = $data;
    require($template);
}

render('index.view.php', $tasks);