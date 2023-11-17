<?php

namespace App\Controller\Auth;

use App\Model\User;



class SignupController
{
    public function index()
    {
        if (!isset($_SESSION['name'])) {
            require_once(dirname(__DIR__) . "/../../view/signup.php");
        } else {
            header("Location: /");
        }
    }

    public function signup()
    {

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $username = $_POST['username'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $c_password = $_POST['c-password'] ?? '';


            if ($password === $c_password) {
                $new_user = new User();
                $return = $new_user->addNewUser($username, $email, $password);
                if ($return) {
                    header("Location: /login");
                } else {
                    echo "<script>alert('Failed')</script>";
                }
            }
        }
    }
}
