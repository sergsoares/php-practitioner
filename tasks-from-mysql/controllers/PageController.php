<?php

class PageController
{

    public function task()
    {
        $tasks = $app['database']->selectAll('tasks');

        require('tasks');
    }

    public function about()
    {
        require('about');
    }

    public function company()
    {
        require('companyhp');
    }

    public function index()
    {
        return view('index');
    }


}