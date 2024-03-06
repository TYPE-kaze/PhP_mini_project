<?php 
declare(strict_types= 1);
namespace App;

class Helper {
    static public function isLoggedIn() {
        return array_key_exists('is_logged_in', $_SESSION) && $_SESSION['is_logged_in'] === true;
    }
}