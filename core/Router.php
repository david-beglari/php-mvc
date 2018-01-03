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

    /**
     * @param $url
     * @param $requestType
     * @return mixed
     * @throws Exception
     */
    public function direct($url, $requestType)
    {
        if(array_key_exists($url, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$url])
            );
        }

        throw new Exception('No route defined for this URL');
    }

    protected function callAction($controller, $action)
    {
        $controller = new $controller;

        if(! method_exists($controller, $action)){
            throw new Exception(
                "{$controller} dose not respond to the {$action} action."
            );
        }

        return $controller->$action();
    }
}