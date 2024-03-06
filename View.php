<?php 
declare(strict_types= 1);
namespace App;

class View {
    public function render(string $path, array $params = []): string {
        extract($params);
        $flash = \App\Flash::un_flash();
        ob_start();
        include VIEWS_DIR . $path . ".php";
        return ob_get_clean();
    }
}