<?php

class Task
{
    public $title;
    public $completed;

    public function __construct($title, $completed){
        $this->title = $title;
        $this->completed = $completed;
    }
}


$tasks = [
    new Task('Finishded PHP practioner', true),
    new Task('Complete Laravel From Scratch', false),
    new Task('HTML in 30 days', true),
    new Task('Vue JS 2', false),
    new Task('Study OO and Solid Topics', false),

];

$tasks2 = [
    ['title' => 'PHP Course', 'completed' => false],
    ['title' => 'Initial', 'completed' => true],
];


// foreach($tasks as $task){
//     $task->title = 'Sergio';
// }

// $completedTasks = array_filter($tasks, function($task){
//     return ! $task->completed;
// });

// var_dump($completedTasks);

// $invertTasks = array_map(function($task){
//     if($task->completed){
//        $task->completed = false; 
//     }else {
//        $task->completed = true;
//     }
    
//     return $task;
// }, $tasks);

// var_dump($invertTasks);

$titles = array_column($tasks, 'title');

var_dump($titles);


// var_dump($tasks[0]->title);
// var_dump($tasks2[0]['title']);