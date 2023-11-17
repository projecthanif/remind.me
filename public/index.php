<?php
session_start();

use App\Routes\Route;
use App\Controller\HomeController;
use App\Controller\IndexController;
use App\Controller\Auth\LoginController;
use App\Controller\Auth\SignupController;

require dirname(__FILE__) . "/path.php";




$route = new Route();

$route
    ->get('/', [IndexController::class, 'index'])

    ->get('/todo', [HomeController::class, 'index'])
    ->post('/store', [HomeController::class, 'store'])
    ->get('/delete', [HomeController::class, 'delete'])

    ->get('/login', [LoginController::class, 'index'])
    ->post('/log', [LoginController::class, 'login'])

    ->get('/signup', [SignupController::class, 'index'])
    ->post('/verify', [SignupController::class, 'signup'])

    ->get('/logout', function () {
        session_start();
        unset($_SESSION['name'], $_SESSION['id']);
        sleep(2);
        header("Location: /");
    });


$uri = parse_url($_SERVER['REQUEST_URI'])["path"];

try {
    echo $route->resolve($uri, strtolower($_SERVER['REQUEST_METHOD']));
} catch (\Exception $e) {
    // echo $e->getMessage();
}
