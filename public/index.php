<?php
session_start();


use App\App;
use App\Routes\Route;
use App\Controller\HomeController;
use App\Controller\IndexController;
use App\Controller\Auth\LoginAuth;
use App\Controller\Auth\SignupAuth;
use App\Logout;

require_once __DIR__ . "/../" . "/vendor/autoload.php";
include_once '../helper.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();


define("VIEWS_PATH", dirname(__DIR__) . "/view/");

$route = new Route();

$route
    ->get('/', [IndexController::class, 'index'])

    ->get('/todo', [HomeController::class, 'index'])
    ->post('/store', [HomeController::class, 'store'])
    ->get('/delete', [HomeController::class, 'delete'])

    ->get('/user/login', [LoginAuth::class, 'index'])
    ->post('/user/log', [LoginAuth::class, 'login'])

    ->get('/user/signup', [SignupAuth::class, 'index'])
    ->post('/user/verify', [SignupAuth::class, 'signup'])

    ->get('/logout', [Logout::class, 'logout']);


$uri = parse_url($_SERVER['REQUEST_URI'])["path"];

(new App(
    $route,
    [
        'uri' => $uri,
        'method' => $_SERVER['REQUEST_METHOD']
    ],
    $_ENV
))->run();
