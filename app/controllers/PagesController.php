<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    /**
     * @return mixed
     */
    public function home()
    {
        $users = App::get('database')->selectAll('users');

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