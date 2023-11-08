<?php

use App\User;

require_once dirname(__FILE__) . "/../view/signup.php";
require_once dirname(__FILE__) . "/path.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $c_password = $_POST['c-password'] ?? '';

    if ($password === $c_password) {
        $new_user = new User();
        $return = $new_user->addNewUser($username, $email, $password);
        if ($return)
        {
            header("Location: /login");
        }
        else {
            echo "<script>alert('Failed')</script>";
        }
    }
}
