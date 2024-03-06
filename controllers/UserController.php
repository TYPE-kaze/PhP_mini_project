<?php 
declare(strict_types= 1);

namespace App\Controllers;

class UserController {
    public function getLoginForm(): string {
        return (new \App\View())->render('user/login');
    }
    public function login() {
        $params =[];
        $user = new \App\Models\User();
        ['username' => $username,'password' => $password] = $_POST;

        if($user->validate($username, $password)) {
            //dung tai khoan mat  khau
            $params['flash'] = "Đăng nhập thành công";
            $_SESSION['is_logged_in'] = true;
            //nho dang nhap ke ca sau khi dong trinh duyet
            if (array_key_exists('miss_me', $_POST) && $_POST['miss_me'] === 'on') {
                setcookie(session_name(), session_id(), time() + 7 * 24 * 60 *60, "/");            
            }
        } else {
            $params['flash'] = "Tài khoản hoặc mật khẩu không đúng";
        };

        (new \App\Router())->redirect("/");
    }

    public function logout() {
        $_SESSION = [];

        // Destroy the session cookie
        if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 2024,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
        }          
        session_destroy();

        (new \App\Router())->redirect("/");
    }
}