<?php

namespace App\Exception;
use Exception;
class RouteNotFoundException extends Exception{
    protected $message = "Route Not Found";
}