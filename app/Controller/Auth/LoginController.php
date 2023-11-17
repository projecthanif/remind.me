<?php

declare(strict_types=1);

namespace App\Controller\Auth;

use App\Model\User;



class LoginController
{
    protected User $user;
    public function index()
    {
        if (!isset($_SESSION['name'])) {
            include_once dirname(__DIR__) . "/../../view/" . "login.php";
        } else {
            header("Location: /todo");
        }
    }

    public function login()
    {
        $this->user = new User();


        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = $_POST["email"];
            $password = $_POST["password"];
            // var_dump($_POST);
            $return = $this->user->userLogin(email: $email, password: $password);
            // var_dump($return);
            if ($return) {
                header("Location: /todo");
            }
        }
    }
}
