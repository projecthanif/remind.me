<?php

declare(strict_types=1);

namespace App\Controller\Auth;

use App\Model\User;
use App\View;

class LoginAuth
{
    protected User $user;
    public function index()
    {
        if (!isset($_SESSION['name'])) {
            view('login');
        } else {
            header('Location: /todo');
        }
    }

    public function login()
    {
        $this->user = new User();
        
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $return = $this->user->userLogin($_POST);
            if ($return) {
                header("Location: /todo");
            }else {
                header('Location: /user/login');
            }
        }
    }
}
