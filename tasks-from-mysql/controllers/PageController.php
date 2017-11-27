<?php

namespace App\Controller;

class PageController
{

    public function task()
    {
        $tasks = $app['database']->selectAll('tasks');

        return view('tasks');
    }

    public function about()
    {
        return view('about');
    }

    public function company()
    {
        return view('company');
    }

    public function index()
    {
        return view('index');
    }


}