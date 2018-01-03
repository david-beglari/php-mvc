<?php

class Router
{

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }


    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($url, $requestType)
    {
        if(array_key_exists($url, $this->routes[$requestType])) {
            return $this->routes[$requestType][$url];
        }

        throw new Exception('No route defined for this URL');
    }
}