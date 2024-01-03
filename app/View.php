<?php

namespace App;

class View
{
    public static function make(string $type)
    {
        return match ($type) {
            'error/404' => include VIEWS_PATH . '404.php',
            'list' =>  VIEWS_PATH . "list.php",
            'login' => include_once VIEWS_PATH . "login.php",
            'signup' => include_once VIEWS_PATH . "signup.php",
            'index' => include_once VIEWS_PATH . "index.php",
            default => include VIEWS_PATH . '404.php'
        };
    }
}
