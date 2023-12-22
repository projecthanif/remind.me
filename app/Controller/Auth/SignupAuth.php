<?php

namespace App\Controller\Auth;

use App\Model\User;



class SignupAuth
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

            $new_user = new User();
            $return = $new_user->addNewUser($_POST);
            if ($return) {
                header("Location: /user/login");
            } else {
                echo "<script>alert('Failed')</script>";
            }
        }
    }
}
