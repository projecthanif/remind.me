<?php

namespace App;

class Logout
{
    private \mysqli|bool $close;

    public function __construct()
    {
        $this->close = App::db()->close();    
    }
    public function logout()
    {
        if (isset($_SESSION['name'])) {
            session_start();
            unset($_SESSION['name'], $_SESSION['id']);
            session_destroy();
            sleep(1);
            header("Location: /");
        } else {
            header("Location: /todo");
        }
    }
}
