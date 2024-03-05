<?php 
declare(strict_types= 1);

namespace App\Controllers;

class UserController {
    public function getLoginForm(): string {
        ob_start();
        include VIEWS_DIR . "users/login.php";
        return ob_get_clean();
    }
}