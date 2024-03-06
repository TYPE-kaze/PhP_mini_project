<?php
declare(strict_types= 1);

namespace App\Models;

class User {
    public string $id = "1";
    private string $username = "username";
    private string $password = "password";

    public function validate(string $username, string $password): bool {
        return ($this->username === $username) && ($this->password === $password);
    }
}