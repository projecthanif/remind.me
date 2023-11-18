<?php
session_start();

use App\App;
use App\Routes\Route;
use App\Controller\HomeController;
use App\Controller\IndexController;
use App\Controller\Auth\LoginController;
use App\Controller\Auth\SignupController;

require dirname(__FILE__) . "/path.php";

define("VIEWS_PATH", dirname(__DIR__) . "/view/");

$route = new Route();

$route
    ->get('/', [IndexController::class, 'index'])

    ->get('/todo', [HomeController::class, 'index'])
    ->post('/store', [HomeController::class, 'store'])
    ->get('/delete', [HomeController::class, 'delete'])

    ->get('/user/login', [LoginController::class, 'index'])
    ->post('/user/log', [LoginController::class, 'login'])

    ->get('/user/signup', [SignupController::class, 'index'])
    ->post('/user/verify', [SignupController::class, 'signup'])

    ->get('/logout', function () {
        session_start();
        unset($_SESSION['name'], $_SESSION['id']);
        sleep(2);
        header("Location: /");
    });


$uri = parse_url($_SERVER['REQUEST_URI'])["path"];


(new App(
    $route,
    [
        'uri' => $uri,
        'method' => $_SERVER['REQUEST_METHOD']
    ],
    [
        'db_host' => 'localhost',
        'db_user' => 'root',
        'db_pass' => '',
        'db_name' => 'remindDB'
    ]

))->run();
