<?php

class PageController
{

    public function task()
    {
        $tasks = $app['database']->selectAll('tasks');
        require('view/tasks.view.php');
    }

    public function about()
    {
        require('view/about.view.php');
    }

    public function company()
    {
        require('view/company.view.php');
    }

    public function index()
    {
        require('view/index.view.php');
    }


}