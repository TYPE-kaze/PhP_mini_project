<?php
declare(strict_types= 1);

namespace App;
use App\Controllers\UserController;

require "Router.php";
require_once CONTROLLERS_DIR . "UserController.php";

$router = new Router();

$router->get("/", function() {
    return 'HOME';
});

$user_controller = new UserController();

$router
    ->get("/users/login", [$user_controller,"getLoginForm"])
    ;

$request_url = $_SERVER['REQUEST_URI'];
$request_method = $_SERVER['REQUEST_METHOD'];
$router->reslove($request_url, $request_method);
