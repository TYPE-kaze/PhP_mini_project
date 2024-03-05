<?php
    declare(strict_types= 1);
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    define("CONTROLLERS_DIR", __DIR__ . "/../controllers/");
    define("VIEWS_DIR", __DIR__ . "/../views/");
    define("MODELS_DIR", __DIR__ . "/../models/");

    require_once '../app.php';