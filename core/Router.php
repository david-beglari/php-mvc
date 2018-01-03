<?php

namespace App\Core;

class Router
{
    /**
     * @var array
     */
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    /**
     * @param $file
     * @return static
     */
    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    /**
     * @param $uri
     * @param $controller
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * @param $uri
     * @param $controller
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * @param $url
     * @param $requestType
     * @return mixed
     * @throws Exception
     */
    public function direct($url, $requestType)
    {
        if (array_key_exists($url, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$url])
            );
        }

        throw new Exception('No route defined for this URL');
    }

    /**
     * @param $controller
     * @param $action
     * @return mixed
     */
    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} dose not respond to the {$action} action."
            );
        }

        return $controller->$action();
    }
}