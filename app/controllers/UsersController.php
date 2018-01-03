<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    /**
     * @return mixed
     */
    public function index()
    {
        return view('users');
    }

    /**
     *
     */
    public function store()
    {
        App::get('database')->insert('users', [
            'first_name' => $_POST['first_name']
        ]);

        redirect('users');
    }
}