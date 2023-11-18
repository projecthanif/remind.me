<?php

namespace App;

class View {
    public static function make(string $type) {
        if ($type = 'error/404') {
            include VIEWS_PATH . '404.php';
        }
    }
}