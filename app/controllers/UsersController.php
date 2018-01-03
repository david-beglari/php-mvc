<?php

namespace App\Controllers;

use App\Model\Model;

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
        Model::save('users', [
            'first_name' => $_POST['first_name']
        ]);

        redirect('users');
    }
}