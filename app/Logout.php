<?php

namespace App;

class Logout
{

    public function logout()
    {
        if (isset($_SESSION['name'])) {
            session_start();
            unset($_SESSION['name'], $_SESSION['id']);
            sleep(2);
            header("Location: /");
        } else {
            header("Location: /todo");
        }
    }
}
