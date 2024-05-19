<?php

declare(strict_types=1);

global $route;

session_start();
use Core\App;

require_once __DIR__ . "/../" . "/vendor/autoload.php";
include_once '../helper.php';
include_once '../route/route.php';
require "../vendor/larapack/dd/src/helper.php";


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

define("VIEWS_PATH", dirname(__DIR__) . "/view/");

$uri = parse_url($_SERVER['REQUEST_URI'])["path"];

$request = [
    'uri' => $uri,
    'method' => $_SERVER['REQUEST_METHOD']
];

$app = new App($route, $request, $_ENV);

$app->run();
