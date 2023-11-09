<?php

namespace Routes;

class Route
{
    public function router($url, $path)
    {
        if (array_key_exists($url, $path)) {
            return $path[$url];
        } else {
            http_response_code(404);
            return '404.php';
        }
    }
}


$path = require(dirname(__FILE__) . "/routes.php");

$url = parse_url($_SERVER["REQUEST_URI"])["path"];

$route = new Route();

$routePath = $route->router($url, $path);
