<?php
session_start();


use App\App;
use App\Routes\Route;
use App\Controller\HomeController;
use App\Controller\IndexController;
use App\Controller\Auth\Login;
use App\Controller\Auth\Signup;
use App\Logout;


spl_autoload_register(function ($class) {
    $path = str_replace("\\", "/", dirname(__DIR__) . "/" . lcfirst($class) . ".php");
    require_once($path);
});

define("VIEWS_PATH", dirname(__DIR__) . "/view/");

$route = new Route();

$route
    ->get('/', [IndexController::class, 'index'])

    ->get('/todo', [HomeController::class, 'index'])
    ->post('/store', [HomeController::class, 'store'])
    ->get('/delete', [HomeController::class, 'delete'])

    ->get('/user/login', [Login::class, 'index'])
    ->post('/user/log', [Login::class, 'login'])

    ->get('/user/signup', [Signup::class, 'index'])
    ->post('/user/verify', [Signup::class, 'signup'])

    ->get('/logout', [Logout::class, 'logout']);


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


