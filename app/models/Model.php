<?php

namespace App\Model;

use App\Core\App;


class Model
{
    /**
     * @param $table
     * @return mixed
     */
    public static function All($table)
    {
        return App::get('database')->selectAll($table);
    }

    /**
     * @param $table
     * @param $data
     * @return mixed
     */
    public static function save($table, $data)
    {
        return App::get('database')->insert($table, $data);
    }
}