<?php

namespace App\Exception;
use Exception;
class RouteNotFoundException extends Exception{
    protected $message = "Route Not Found";

    public function __construct( string $errorPage) {
        include $errorPage;
        http_response_code(404);
    }
}