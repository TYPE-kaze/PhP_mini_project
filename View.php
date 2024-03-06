<?php 

namespace App;

class View {
    public function render(string $path, array $params = []): string {
        extract($params);
        ob_start();
        include VIEWS_DIR . $path . ".php";
        return ob_get_clean();
    }
}