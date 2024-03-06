<?php
declare(strict_types= 1);

namespace App;
class Flash {
    static public function set_flash(string $message, array $data = []): void {
        $_SESSION['flash'] = $message;
    }

    static public function un_flash(): string | null {
        if(!self::is_flash()) {
            return null;
        };
        $message = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $message;
    }

    static private function is_flash(): bool {
        return isset($_SESSION['flash']);
    }
}