<?php

class Router
{
    
    public $routes = [
        'GET' => [],
        'POST' => []
    ];
     
    public static function load($file)
    {
        $router = new static;

        require($file);

        return $router;
    }

    public function define($routes) {
        $this->routes = $routes;
    }

    public function get($uri ,$controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri ,$controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $methodType) 
    {

        if(array_key_exists($uri, $this->routes[$methodType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$methodType][$uri])
            );
        }

        throw new Exception('No route Defined.');
    }

    protected function callAction($controller, $action)
    {
        $controllerInstance = (new $controller);        

        if (! method_exists($controllerInstance, $action)) {
            throw new Exception(
                'This {$action} dont exists in {$controller}'
            );
        }

        return (new $controller)->$action(); 
    }
}