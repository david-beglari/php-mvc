<?php

/**
 * @param object $data
 * @param bool $rule
 */
function dd($data, $rule = true)
{
    echo '<pre>';
    print_r($data);
    $rule ? exit() : print ('</pre>');
}

/**
 * @param $name
 * @param $data
 * @return mixed
 */
function view($name, $data = [])
{
    extract($data);
    return require "app/views/{$name}.view.php";
}

/**
 * @param $path
 */
function redirect($path)
{
    header("Location:/{$path}");
}