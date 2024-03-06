<?php
declare(strict_types= 1);

namespace App;
session_start();

$router = new Router();

$router->get("/", function() {
    return (new View())->render("home");
});

$user_controller = new \App\Controllers\UserController();

$router
    ->get("/user/login", [$user_controller,"getLoginForm"])
    ->post("/user/login", [$user_controller, "login"])
    ->post("/user/logout", [$user_controller, "logout"])
    ->get("/tweet", function() {//test 
        (new \App\Controllers\UserController)->redirectIfNotLoggedIn();
        return (new View())->render("/tweet/index");
    }) 
    ;

$request_url = $_SERVER['REQUEST_URI'];
$request_method = $_SERVER['REQUEST_METHOD'];
$router->reslove($request_url, $request_method);
