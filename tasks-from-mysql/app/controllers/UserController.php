<?php

namespace App\Controller;

use App\Core\App;

class UserController
{

    public function index()
    {
       $users = App::get('database')->selectAll('names');
        
       return view('users', $users);
    }

    public function store()
    {
        App::get('database')->insert('names', [
            'name' => $_POST['name'],
        ]);

        return redirect('/users');
    }
}