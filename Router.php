<?php
declare(strict_types= 1);

namespace App;

class Router {
    private $routes = [];

    private function register(string $route, string $httpVerb, callable | array $controller) {
        $this->routes[$route][$httpVerb] = $controller;
    }

    public function reslove(string $route, string $httpVerb) {
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
}