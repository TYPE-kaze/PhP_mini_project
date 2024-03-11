<?php
declare(strict_types= 1);

namespace App;
session_start();

$router = new Router();

$router->get("/", function() {
    (new \App\Router())->redirect("/patient/index");
});

$user_controller = new \App\Controllers\UserController();
$patient_controller = new \App\Controllers\PatientController();

$router
    ->get("/user/login", [$user_controller,"getLoginForm"])
    ->post("/user/login", [$user_controller, "login"])
    ->post("/user/logout", [$user_controller, "logout"])
    ->get("/tweet", function() {//test 
        (new \App\Controllers\UserController)->redirectIfNotLoggedIn();
        return (new View())->render("/tweet/index");
    }) 
    ->get("/patient/index", [$patient_controller,"index"])
    ->get("/patient/add", [$patient_controller, "getAddForm"])
    ->post("/patient/add", [$patient_controller, "add"])
    ->get("/patient/delete", [$patient_controller, "delete"])
    ->get("/patient/edit", [$patient_controller, "getEditForm"])
    ->post("/patient/edit" , [$patient_controller, "edit"])
    ;

$request_url = $_SERVER['REQUEST_URI'];
$request_method = $_SERVER['REQUEST_METHOD'];
$router->reslove($request_url, $request_method);
