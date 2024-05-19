<?php

declare(strict_types=1);

namespace Core;

use App\DB;
use App\Exception\RouteNotFoundException;
use mysqli;
use mysqli_sql_exception;

class App
{
    protected static mysqli $db;

    public function __construct(
        protected Route $route,
        protected array $request,
        protected array $config
    ) {
        try {
            self::$db = (new DB($config))->config();
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage() . " " . $e->getCode();
        }
    }

    public static function db(): mysqli
    {
        return self::$db;
    }

    public function run(): void
    {

        try {
            echo ($this->route)->resolve($this->request['uri'], strtolower($this->request['method']));
        } catch (RouteNotFoundException) {
            view('error/404');
        }
    }
}
