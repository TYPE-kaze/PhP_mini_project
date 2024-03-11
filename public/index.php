<?php
    declare(strict_types= 1);
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    define("CONTROLLERS_DIR", __DIR__ . "/../controllers/");
    define("VIEWS_DIR", __DIR__ . "/../views/");
    define("MODELS_DIR", __DIR__ . "/../models/");
    define("SERVICE_DIR", __DIR__ . "/../services/");
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_NAME', 'hms');
    define('DB_PASS', 'ntDat123@');

    require_once "../libs/DBConnection.php";
    require_once "../Router.php";
    require_once "../View.php";
    require_once "../Flash.php";
    require_once "../Helper.php";
    require_once CONTROLLERS_DIR . "UserController.php";
    require_once MODELS_DIR . "User.php";
    require_once CONTROLLERS_DIR . "PatientController.php";
    require_once MODELS_DIR . "Patient.php";
    require_once SERVICE_DIR . "PatientService.php";

    require_once '../app.php';