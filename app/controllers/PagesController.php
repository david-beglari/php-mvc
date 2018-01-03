<?php

namespace App\Controllers;

use App\Model\Model;

class PagesController
{
    /**
     * @return mixed
     */
    public function home()
    {
        $users = Model::All('users');

        return view('index', compact('users'));
    }

    /**
     * @return mixed
     */
    public function about()
    {
        return view('about');
    }
}