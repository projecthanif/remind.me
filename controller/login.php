<?php
session_start();
require dirname(__FILE__) . "/path.php";

use App\User;

$user = new User();

if (!isset($_SESSION['name'])) {


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $return = $user->userLogin(email: $email, password: $password);
        if ($return) {
            header("Location: /todo");
        }
    }
    require_once dirname(__FILE__) . "/../view/login.php";
} else {
    header("Location: /todo");
}
