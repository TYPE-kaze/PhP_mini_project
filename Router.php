<?php
declare(strict_types= 1);

namespace App;

class Router {
    private $routes = [];

    private function register(string $route, string $httpVerb, callable | array $controller) {
        $this->routes[$route][$httpVerb] = $controller;
    }
    
    public function reslove(string $route, string $httpVerb) {
        $route = explode('?', $route)[0]; //get  rid of the query parameters in the url
        // var_dump($route);
        if (!array_key_exists($route, $this->routes) || !array_key_exists($httpVerb, $this->routes[$route])){
        //default error page 
            echo (new \App\View)->render("/error");
            return;
        }
        $controller = $this->routes[$route][$httpVerb];
        if(is_array($controller)) {
            echo call_user_func_array([$controller[0], $controller[1]], []);
            return;
        }
        echo call_user_func($controller);
    }

    public function get(string $route, callable | array $controller) {
        $this->register($route, "GET", $controller);
        return $this;
    }

    public function post(string $route, callable | array $controller) {
        $this->register($route, "POST", $controller);
        return $this;
    }

    public function redirect(string $route) {
        header('Location: ' . $route);
    }
}