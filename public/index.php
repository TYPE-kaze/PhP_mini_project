<?php
    declare(strict_types= 1);
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    define("CONTROLLERS_DIR", __DIR__ . "/../controllers/");
    define("VIEWS_DIR", __DIR__ . "/../views/");
    define("MODELS_DIR", __DIR__ . "/../models/");

    require_once "../Router.php";
    require_once "../View.php";
    require_once CONTROLLERS_DIR . "UserController.php";
    require_once MODELS_DIR . "User.php";

    require_once '../app.php';